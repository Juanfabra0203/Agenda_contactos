<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline": "#737784",
                        "secondary": "#466270",
                        "background": "#f7f9fb",
                        "surface-variant": "#e0e3e5",
                        "on-tertiary-fixed-variant": "#005236",
                        "tertiary-container": "#006544",
                        "surface-dim": "#d8dadc",
                        "surface-container-low": "#f2f4f6",
                        "primary-container": "#0f52ba",
                        "on-background": "#191c1e",
                        "secondary-fixed": "#c9e7f7",
                        "tertiary-fixed": "#6ffbbe",
                        "error": "#ba1a1a",
                        "primary-fixed": "#d9e2ff",
                        "inverse-surface": "#2d3133",
                        "surface-container-highest": "#e0e3e5",
                        "on-error": "#ffffff",
                        "on-secondary-fixed-variant": "#2e4b57",
                        "on-primary-fixed-variant": "#00419c",
                        "outline-variant": "#c3c6d5",
                        "inverse-primary": "#b0c6ff",
                        "primary-fixed-dim": "#b0c6ff",
                        "primary": "#003c90",
                        "error-container": "#ffdad6",
                        "surface": "#f7f9fb",
                        "on-primary-fixed": "#001945",
                        "on-primary": "#ffffff",
                        "surface-bright": "#f7f9fb",
                        "secondary-container": "#c6e4f4",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#4a6774",
                        "tertiary-fixed-dim": "#4edea3",
                        "on-surface": "#191c1e",
                        "secondary-fixed-dim": "#adcbda",
                        "on-tertiary-fixed": "#002113",
                        "on-tertiary-container": "#58e7ab",
                        "tertiary": "#004b31",
                        "surface-container-high": "#e6e8ea",
                        "on-surface-variant": "#434653",
                        "on-primary-container": "#bcceff",
                        "on-secondary": "#ffffff",
                        "surface-container": "#eceef0",
                        "on-secondary-fixed": "#001f2a",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#1d59c1",
                        "inverse-on-surface": "#eff1f3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "16px",
                        "gutter": "24px",
                        "xs": "8px",
                        "sm": "12px",
                        "grid_columns": "12",
                        "xl": "32px",
                        "base": "4px",
                        "margin": "32px",
                        "lg": "24px"
                    },
                    "fontFamily": {
                        "h3": ["Manrope"],
                        "body-sm": ["Inter"],
                        "h2": ["Manrope"],
                        "body-lg": ["Inter"],
                        "label-caps": ["Inter"],
                        "h1": ["Manrope"],
                        "body-md": ["Inter"],
                        "button": ["Inter"]
                    },
                    "fontSize": {
                        "h3": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "0",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "h2": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "h1": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "button": ["15px", {
                            "lineHeight": "20px",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .login-card-shadow {
            box-shadow: 0px 10px 20px rgba(15, 82, 186, 0.1);
        }

        body {
            background-color: #F8FAFC;
        }
    </style>
</head>



<body class="font-body-md text-on-surface min-h-screen flex items-center justify-center p-6">
    <!-- Login Container -->
    <div class="w-full max-w-md">
        <!-- Brand Header (Semantic Shell Identity) -->
        <div class="flex flex-col items-center mb-xl">
            <div class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center mb-md shadow-lg">
                <span class="material-symbols-outlined text-white text-3xl" data-icon="shield">shield</span>
            </div>
            <h1 class="font-h1 text-h1 text-primary tracking-tight">Agenda Pro</h1>
            <p class="font-body-md text-secondary mt-xs">Gestión segura de red de contactos</p>
        </div>
        <!-- Main Login Card -->
        <main class="bg-surface-container-lowest login-card-shadow rounded-xl p-xl border border-outline-variant">
            <div class="mb-lg">
                <h2 class="font-h2 text-h2 text-on-surface mb-xs">Iniciar Sesión</h2>
                <p class="font-body-sm text-secondary">Ingrese sus credenciales para acceder a su agenda.</p>
            </div>
            <form class="space-y-lg">
                <!-- Email Field -->
                <div class="space-y-sm">
                    <label class="font-label-caps text-label-caps text-secondary uppercase tracking-wider" for="email">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline" data-icon="mail">mail</span>
                        <input class="w-full pl-[48px] pr-md py-md bg-white border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:border-primary outline-none transition-all placeholder:text-outline/50" id="email" name="email" placeholder="nombre@ejemplo.com" type="email" />
                    </div>
                </div>
                <!-- Password Field -->
                <div class="space-y-sm">
                    <div class="flex justify-between items-center">
                        <label class="font-label-caps text-label-caps text-secondary uppercase tracking-wider" for="password">Contraseña</label>
                        <a class="font-label-caps text-label-caps text-primary hover:underline transition-all" href="#">Olvidé mi contraseña</a>
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline" data-icon="lock">lock</span>
                        <input class="w-full pl-[48px] pr-md py-md bg-white border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:border-primary outline-none transition-all placeholder:text-outline/50" id="password" name="password" placeholder="••••••••" type="password" />
                    </div>
                </div>
                <!-- Remember Me -->
                <div class="flex items-center gap-sm">
                    <input class="w-4 h-4 text-primary border-outline-variant rounded focus:ring-primary" id="remember" type="checkbox" />
                    <label class="font-body-sm text-secondary" for="remember">Recordar sesión</label>
                </div>
                <!-- CTA Button -->
                <button class="w-full bg-primary-container text-white py-md rounded-lg font-button text-button shadow-md hover:bg-primary transition-all active:scale-[0.98] flex items-center justify-center gap-sm" type="submit">
                    <span>Iniciar Sesión</span>
                    <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                </button>
            </form>
            <!-- Secondary Action -->
            <div class="mt-xl pt-lg border-t border-outline-variant text-center">
                <p class="font-body-sm text-secondary">
                    ¿No tienes una cuenta?
                    <a class="text-primary font-button hover:underline transition-all ml-xs" href="#">Registrarse</a>
                </p>
            </div>
        </main>
        <!-- Trust Footer -->
        <div class="mt-xl flex flex-col items-center gap-md">
            <div class="flex items-center gap-gutter">
                <div class="flex items-center gap-xs text-outline opacity-60">
                    <span class="material-symbols-outlined text-md" data-icon="verified_user">verified_user</span>
                    <span class="font-label-caps text-label-caps">Cifrado AES-256</span>
                </div>
                <div class="flex items-center gap-xs text-outline opacity-60">
                    <span class="material-symbols-outlined text-md" data-icon="privacy_tip">privacy_tip</span>
                    <span class="font-label-caps text-label-caps">GDPR Compliant</span>
                </div>
            </div>
            <footer class="w-full py-md">
                <div class="flex justify-center gap-lg">
                    <a class="font-label-caps text-label-caps text-outline hover:text-primary transition-colors" href="#">Privacy Policy</a>
                    <a class="font-label-caps text-label-caps text-outline hover:text-primary transition-colors" href="#">Terms of Service</a>
                    <a class="font-label-caps text-label-caps text-outline hover:text-primary transition-colors" href="#">Help Center</a>
                </div>
                <p class="text-center font-label-caps text-label-caps text-outline mt-sm opacity-50">© 2024 Agenda de Contactos. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>

</html>