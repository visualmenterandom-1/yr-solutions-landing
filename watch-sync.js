const fs = require('fs');
const path = require('path');
const { exec } = require('child_process');

const GIT_PATH = 'C:\\Users\\Usuario\\AppData\\Local\\GitHubDesktop\\app-3.5.12\\resources\\app\\git\\cmd\\git.exe';
const WATCH_FILES = ['index.html', 'assets'];

let debounceTimer = null;

console.log('--- Watcher de Sincronización Automática con GitHub Iniciado ---');
console.log('Monitoreando cambios en:', WATCH_FILES.join(', '));
console.log('Usando Git en:', GIT_PATH);

function runSync() {
  console.log(`[${new Date().toLocaleTimeString()}] Cambio detectado. Iniciando sincronización...`);
  
  // Ejecutar git add, commit y push
  // NOTA: Si el origen remoto no está configurado, push fallará silenciosamente o registrará error, pero el commit se guardará localmente.
  exec(`"${GIT_PATH}" add .`, (err, stdout, stderr) => {
    if (err) {
      console.error('Error en git add:', stderr);
      return;
    }
    
    exec(`"${GIT_PATH}" commit -m "update: sincronización automática de cambios"`, (err, stdout, stderr) => {
      // Ignorar error si no hay cambios para hacer commit (código de salida 1 sin cambios)
      if (err && !stdout.includes('nothing to commit') && !stderr.includes('nothing to commit')) {
        // En algunas versiones de git, si no hay cambios, el comando retorna un error de salida 1.
        if (!stdout.includes('no changes added') && !stderr.includes('no changes added')) {
          console.log('Info/No cambios:', stdout || stderr);
          return;
        }
      }
      
      console.log('Git Commit completado:', stdout.trim() || 'Sin cambios pendientes.');

      // Intentar hacer push
      exec(`"${GIT_PATH}" push origin main`, (err, stdout, stderr) => {
        if (err) {
          console.warn('[Push Warning] No se pudo subir al repositorio remoto (¿Origin no configurado o sin credenciales?):', stderr.trim());
        } else {
          console.log('[PUSH EXITOSO] Sincronizado con GitHub:', stdout.trim());
        }
      });
    });
  });
}

// Configurar watcher para cada archivo/carpeta
WATCH_FILES.forEach(target => {
  const targetPath = path.join(__dirname, target);
  if (!fs.existsSync(targetPath)) return;

  fs.watch(targetPath, { recursive: true }, (eventType, filename) => {
    if (filename && (filename.startsWith('.') || filename.includes('node_modules'))) return;
    
    // Debounce de 3 segundos para agrupar cambios simultáneos
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(runSync, 3000);
  });
});
