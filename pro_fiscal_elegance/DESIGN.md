---
name: Pro-Fiscal Elegance
colors:
  surface: '#f8f9fa'
  surface-dim: '#d9dadb'
  surface-bright: '#f8f9fa'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f5'
  surface-container: '#edeeef'
  surface-container-high: '#e7e8e9'
  surface-container-highest: '#e1e3e4'
  on-surface: '#191c1d'
  on-surface-variant: '#4a454e'
  inverse-surface: '#2e3132'
  inverse-on-surface: '#f0f1f2'
  outline: '#7c757f'
  outline-variant: '#ccc4cf'
  surface-tint: '#6d538a'
  primary: '#250b40'
  on-primary: '#ffffff'
  primary-container: '#3b2256'
  on-primary-container: '#a78ac5'
  inverse-primary: '#d9baf9'
  secondary: '#775371'
  on-secondary: '#ffffff'
  secondary-container: '#fdcff3'
  on-secondary-container: '#7a5573'
  tertiary: '#735c00'
  on-tertiary: '#ffffff'
  tertiary-container: '#cca730'
  on-tertiary-container: '#4f3e00'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#efdbff'
  primary-fixed-dim: '#d9baf9'
  on-primary-fixed: '#270d42'
  on-primary-fixed-variant: '#553b71'
  secondary-fixed: '#ffd7f5'
  secondary-fixed-dim: '#e6b9dc'
  on-secondary-fixed: '#2d112b'
  on-secondary-fixed-variant: '#5d3c58'
  tertiary-fixed: '#ffe088'
  tertiary-fixed-dim: '#e9c349'
  on-tertiary-fixed: '#241a00'
  on-tertiary-fixed-variant: '#574500'
  background: '#f8f9fa'
  on-background: '#191c1d'
  surface-variant: '#e1e3e4'
  deep-purple-surface: '#3B2256'
  mauve-accent: '#A57D9D'
  fiscal-gold: '#D4AF37'
  off-white: '#F8F9FA'
  text-primary: '#1A1A1A'
  text-secondary: '#4A4A4A'
typography:
  display-lg:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Montserrat
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Montserrat
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Montserrat
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
  caption:
    fontFamily: Montserrat
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 4px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 64px
  container-max: 1200px
---

## Brand & Style

The design system is rooted in the "Corporate / Modern" aesthetic, specifically tailored for a financial services firm that bridges professional authority with community warmth. The visual narrative balances the gravitas of fiscal expertise with an approachable, bilingual-friendly interface.

The style prioritizes clarity and high-quality whitespace to evoke trust. By utilizing deep, saturated purples against clean, expansive backgrounds, the UI establishes a premium feel that differentiates the brand from standard institutional blue-heavy fintech. The atmosphere is steady, reliable, and sophisticated, ensuring that users—whether seeking tax advice or notary services—feel they are in the hands of seasoned experts.

## Colors

This color palette is designed for high-contrast accessibility and professional distinction. 

- **Primary (Deep Purple):** Used for headers, hero sections, and primary structural elements. It conveys stability and premium service.
- **Secondary (Mauve Purple):** Reserved for icons, secondary buttons, and decorative accents that echo the brand's logo. It softens the austerity of the deep purple.
- **Tertiary (Fiscal Gold):** A sophisticated metallic gold used sparingly for primary Call-to-Action (CTA) elements and critical highlights.
- **Neutral:** A foundation of pure white (#FFFFFF) and a very light cool gray (#F8F9FA) creates a "breathable" layout that emphasizes legibility.

## Typography

The typography system uses **Montserrat** exclusively to maintain a modern, geometric, and clean appearance. The font's wide apertures and balanced proportions ensure excellent legibility across both English and Spanish text, which often vary in character length.

Headlines are set with a heavier weight (600-700) to establish a strong hierarchy. Labels and CTAs utilize uppercase transformation and slight letter spacing to create a distinct "UI feel" that separates them from body copy. Body text is kept at a comfortable 16px minimum to ensure accessibility for a broad demographic.

## Layout & Spacing

The design system employs a **Fixed Grid** model on desktop to maintain an organized, expert-led feel, transitioning to a fluid layout on mobile devices.

- **Desktop (1440px):** 12-column grid with 24px gutters and 64px side margins.
- **Tablet (768px):** 8-column grid with 20px gutters and 32px side margins.
- **Mobile (375px):** 4-column grid with 16px gutters and 16px side margins.

Spacing follows a strict 4px/8px base-8 rhythm. Generous vertical padding (80px to 120px) is used between sections on the landing page to reinforce the "Minimalist" and "Clean" brand values.

## Elevation & Depth

Visual hierarchy is achieved through **Tonal Layers** and **Ambient Shadows**. Instead of harsh black shadows, this system uses low-opacity shadows tinted with the primary Deep Purple color to create a more integrated, sophisticated depth.

- **Surface Level:** Pure white (#FFFFFF) for the main background.
- **Tier 1 (Cards/Inputs):** Subtle 1px border (#E9ECEF) or an ambient shadow (0px 4px 20px rgba(59, 34, 86, 0.05)).
- **Tier 2 (Popovers/Modals):** More pronounced shadow (0px 12px 32px rgba(59, 34, 86, 0.12)) to lift the element clearly above the content.

Flat, low-contrast outlines are used for secondary containers to keep the UI from feeling overly heavy or cluttered.

## Shapes

The shape language is "Rounded," featuring a consistent 8px to 12px corner radius. This choice specifically echoes the swooping curves found in the brand's logo, providing a visual bridge between the identity and the interface.

- **Buttons & Small Components:** 8px radius for a precise, professional look.
- **Cards & Large Containers:** 12px to 16px radius to soften the layout and feel "warm and accessible."
- **Interactive States:** Subtle scale-up transforms (1.02x) are used on hover to provide tactile feedback without breaking the professional tone.

## Components

### Buttons
- **Primary:** Deep Purple background with White text for high authority.
- **CTA:** Fiscal Gold background with Primary Deep Purple text for maximum conversion and contrast.
- **Secondary:** Transparent background with Mauve Purple border and text.

### Cards
Cards should use a White background with the Tier 1 ambient shadow. Use the 12px corner radius and ensure internal padding is at least 24px to maintain the "clean" aesthetic.

### Input Fields
Inputs should have a 1px border (#CED4DA) that turns Deep Purple on focus. Labels are always positioned above the field in `label-md` style for maximum clarity.

### Chips & Badges
Used for service categories (e.g., "Tax Prep," "Notary"). These utilize a light tint of the Secondary color (Mauve) with dark Mauve text to provide categorization without competing with primary actions.

### List Items
Financial data and service lists should feature ample line height and 16px vertical spacing between items, separated by light 1px dividers to ensure readability for detailed information.