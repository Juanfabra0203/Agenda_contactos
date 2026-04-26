<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Crear Cuenta - Agenda Pro</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet" />
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
        .shadow-level-1 {
            box-shadow: 0px 2px 4px rgba(15, 82, 186, 0.05);
        }

        .shadow-level-2 {
            box-shadow: 0px 10px 20px rgba(15, 82, 186, 0.1);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background font-body-md text-on-background min-h-screen flex flex-col">
    <!-- Primary Canvas -->
    <main class="flex-grow flex flex-col md:flex-row items-stretch overflow-hidden">
        <!-- Left Side: Visual Branding (Visible on Desktop) -->
        <section class="hidden lg:flex w-1/2 bg-primary relative items-center justify-center p-xl">
            <div class="absolute inset-0 z-0 opacity-40 mix-blend-overlay">
                <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&amp;fit=crop&amp;q=80&amp;w=2070')] bg-cover bg-center" data-alt="Modern professional office environment with soft natural lighting and minimalist aesthetics for a sense of calm productivity"></div>
            </div>
            <div class="relative z-10 text-center max-w-md">
                <h2 class="font-h1 text-h1 text-white mb-md">Gestión Inteligente de Redes</h2>
                <p class="font-body-lg text-white/90">Centraliza tus contactos profesionales en un solo lugar con la eficiencia de Agenda Pro.</p>
            </div>
        </section>
        <!-- Right Side: Sign-Up Form -->
        <section class="w-full lg:w-1/2 flex items-center justify-center p-gutter md:p-xl bg-background">
            <div class="w-full max-w-[480px] bg-surface-container-lowest rounded-xl p-lg md:p-xl shadow-level-1 border border-outline-variant/30">
                <header class="mb-xl text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-sm">
                        <span class="material-symbols-outlined text-primary text-3xl" data-icon="contacts">contacts</span>
                        <span class="font-h3 text-h3 text-primary tracking-tight">Agenda Pro</span>
                    </div>
                    <h1 class="font-h2 text-h2 text-on-surface mb-xs">Crea tu cuenta</h1>
                    <p class="font-body-sm text-on-surface-variant">Únete a miles de profesionales que ya optimizan su red.</p>
                </header>
                <form action="#" class="space-y-gutter" method="POST">
                    <!-- Field: Nombre -->
                    <div class="space-y-base">
                        <label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="nombre">Nombre Completo</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="person">person</span>
                            <input class="w-full pl-10 pr-md py-sm rounded-lg border border-outline-variant bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all font-body-md placeholder:text-outline-variant" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required="" type="text" />
                        </div>
                    </div>
                    <!-- Field: Email -->
                    <div class="space-y-base">
                        <label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="email">Email Institucional</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="mail">mail</span>
                            <input class="w-full pl-10 pr-md py-sm rounded-lg border border-outline-variant bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all font-body-md placeholder:text-outline-variant" id="email" name="email" placeholder="tu@empresa.com" required="" type="email" />
                        </div>
                    </div>
                    <!-- Field: Password Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <!-- Field: Contraseña -->
                        <div class="space-y-base">
                            <label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="password">Contraseña</label>
                            <div class="relative group">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="lock">lock</span>
                                <input class="w-full pl-10 pr-md py-sm rounded-lg border border-outline-variant bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all font-body-md placeholder:text-outline-variant" id="password" name="password" placeholder="********" required="" type="password" />
                            </div>
                        </div>
                        <!-- Field: Confirmar Contraseña -->
                        <div class="space-y-base">
                            <label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="confirm_password">Confirmar</label>
                            <div class="relative group">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="lock_reset">lock_reset</span>
                                <input class="w-full pl-10 pr-md py-sm rounded-lg border border-outline-variant bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all font-body-md placeholder:text-outline-variant" id="confirm_password" name="confirm_password" placeholder="********" required="" type="password" />
                            </div>
                        </div>
                    </div>
                    <!-- Field: Términos y Condiciones -->
                    <div class="flex items-start gap-sm">
                        <div class="flex items-center h-5">
                            <input class="h-4 w-4 text-primary border-outline-variant rounded focus:ring-primary/20" id="terms" name="terms" required="" type="checkbox" />
                        </div>
                        <label class="font-body-sm text-on-surface-variant" for="terms">
                            Acepto los <a class="text-primary font-semibold hover:underline" href="#">Términos y Condiciones</a> y la Política de Privacidad.
                        </label>
                    </div>
                    <!-- Action: Submit -->
                    <div class="pt-sm">
                        <button class="w-full bg-primary text-on-primary font-button py-sm px-lg rounded-lg shadow-level-1 hover:shadow-level-2 active:scale-95 transition-all duration-150 flex items-center justify-center gap-2" type="submit">
                            <span>Crear Cuenta</span>
                            <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                    <!-- Link to Login -->
                    <div class="text-center pt-md">
                        <p class="font-body-sm text-on-surface-variant">
                            ¿Ya tienes una cuenta?
                            <a class="text-primary font-bold hover:underline" href="#">Inicia Sesión</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer Component -->
    <footer class="w-full py-12 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="font-bold text-slate-900 font-manrope">Agenda Pro</span>
            <div class="flex gap-6">
                <a class="font-manrope text-xs text-slate-500 hover:text-blue-500 transition-colors" href="#">Privacy Policy</a>
                <a class="font-manrope text-xs text-slate-500 hover:text-blue-500 transition-colors" href="#">Terms of Service</a>
                <a class="font-manrope text-xs text-slate-500 hover:text-blue-500 transition-colors" href="#">Help Center</a>
            </div>
            <p class="font-manrope text-xs text-slate-500">© 2024 Agenda de Contactos. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>