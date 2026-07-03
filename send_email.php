<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "yalu@yrsolutions.pro";
    
    // Check form type
    $form_type = isset($_POST['form_type']) ? $_POST['form_type'] : 'contact';
    
    if ($form_type === 'booking') {
        $businessName = strip_tags(trim($_POST["businessName"]));
        $contactInfo = strip_tags(trim($_POST["contactInfo"]));
        $date = strip_tags(trim($_POST["date"]));
        $time = strip_tags(trim($_POST["time"]));
        
        $subject = "Nueva Cita de Diseno Web - " . $businessName;
        $message = "Hola Yalu,\n\nHas recibido una solicitud para agendar una cita de Diseno Web:\n\n";
        $message .= "- Nombre del Negocio: " . $businessName . "\n";
        $message .= "- Datos de Contacto: " . $contactInfo . "\n";
        $message .= "- Fecha de la Cita: " . $date . "\n";
        $message .= "- Hora de la Cita: " . $time . "\n\n";
        $message .= "Favor de ponerse en contacto con el cliente para confirmar la cita.\n\n";
        $message .= "Saludos.";
    } else {
        $name = strip_tags(trim($_POST["name"]));
        $phone = strip_tags(trim($_POST["phone"]));
        $service = strip_tags(trim($_POST["service"]));
        $msg = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : '';
        
        $subject = "Solicitud de Informacion - " . $name;
        $message = "Hola Yalu,\n\nHas recibido una nueva solicitud de informacion desde el formulario de contacto de YR Solutions:\n\n";
        $message .= "- Nombre Completo: " . $name . "\n";
        $message .= "- Telefono: " . $phone . "\n";
        $message .= "- Servicio de Interes: " . $service . "\n";
        $message .= "- Mensaje: " . ($msg ? $msg : "Sin mensaje adicional") . "\n\n";
        $message .= "Saludos.";
    }
    
    // Set headers
    $headers = "From: YR Solutions <no-reply@yrsoluciones.info>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if (filter_var($contactInfo, FILTER_VALIDATE_EMAIL)) {
        $headers .= "Reply-To: " . $contactInfo . "\r\n";
    }
    
    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "El mensaje ha sido enviado correctamente."]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Hubo un error al enviar el mensaje. Intentalo de nuevo."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Metodo no permitido."]);
}
?>
