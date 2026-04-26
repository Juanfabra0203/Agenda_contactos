<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                        "h3": ["20px", { "lineHeight": "28px", "letterSpacing": "0", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "h2": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "h1": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "button": ["15px", { "lineHeight": "20px", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #f8fafc;
        }
    </style>
</head>

<body class="antialiased text-on-surface">
    <nav
        class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md dark:bg-slate-900/90 border-b border-slate-100 dark:border-slate-800 shadow-sm font-manrope">
        <div class="flex justify-between items-center px-6 py-3 max-w-7xl mx-auto">
            <div class="flex items-center gap-8">
                <span class="text-xl font-bold tracking-tight text-blue-700 dark:text-blue-400">Agenda PRO</span>
                <div class="hidden md:flex items-center gap-6">
                    <a class="text-blue-700 dark:text-blue-400 font-semibold border-b-2 border-blue-700 dark:border-blue-400 pb-1"
                        href="#">Inicio</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors"
                        href="">Registrate</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors"
                        href="#">Contactanos</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="../vistas/login.php" class="px-4 py-2 text-slate-600 dark:text-slate-400 font-button text-button hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg active:scale-95 transition-all">Acceso</a>
                <a href="../vistas/registro.php" class="px-5 py-2 bg-primary-container text-white font-button text-button rounded-lg active:scale-95 transition-all shadow-sm">Registro</a>
            </div>
        </div>
    </nav>
    <main class="pt-24">
        <section class="max-w-7xl mx-auto px-6 py-16 md:py-32 grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full">
                    <span class="material-symbols-outlined text-[18px]">verified</span>
                    <span class="font-label-caps text-label-caps">VERSIÓN 2.0 YA DISPONIBLE</span>
                </div>
                <h1 class="font-h1 text-[48px] md:text-[64px] leading-tight text-primary">
                    Organiza tus conexiones con <span class="text-primary-container">inteligencia</span>.
                </h1>
                <p class="font-body-lg text-body-lg text-secondary max-w-lg">
                    La herramienta definitiva para profesionales que valoran su red de contactos. Gestiona, segmenta y
                    sincroniza tu ecosistema profesional sin fricciones.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <button
                        class="px-8 py-4 bg-primary-container text-white font-button text-button rounded-lg shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-98 transition-all">Comience</button>
                    <button
                        class="px-8 py-4 border border-outline text-primary font-button text-button rounded-lg hover:bg-white active:scale-98 transition-all">Ver Prueba</button>
                </div>
                <div class="flex items-center gap-6 pt-8 border-t border-surface-variant">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                            data-alt="professional woman smiling in modern office environment soft natural lighting high key"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3tOfVG3H6nvzFblDGqW10jwGlOWf3W3OktIpSz1QG8ERAtELOrVdvJWQLvEmxsrEObY0d202XzByChHSZx05a8Z9y7OYnygLhd38ry1ZOdKOeWorSdgrha53txK8nJSLtXSD_ejKw2O-mQr3hS6IX4ueQWe7Lbf6lftR8OLjagPgmAVh6KnuRo-noI11t8sbRDL7XK5LSV8scke9FjRr2yQR23EtPsYNRQU0yVGDc4wOEmq8xqOkQshacudQ93U_j_u6ZFXgTsg" />
                        <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                            data-alt="businessman in suit professional headshot neutral grey background soft lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVJECubmNPzwuARDnlycddCu5_0zJDiQ8zH7kUDpqLS897KOCtq0rZcHRMo8m8qTrODxZzvyrTe6Cd07cLkWd5XfQMqcgI_DWxVa8sz7xuNlUKjRdzdizs-DGhfabN3rdqu13e-22R1pB5EkoJbrKh82V1q6IQlJpDHnoyfknyKC7OhhZ4nqqCVLO7Wr_S4_OoTwUF5ULHKt3U9m2SBB6rkf33mZ449hCDio6BXNcMP_bvZhllduea6e9APgomJH25CRosMxGWuQ" />
                        <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                            data-alt="creative professional smiling in studio environment warm golden hour lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjjtUDegZAQG22GLT9MV6o9iAz-yxW9dwOblsfdmTi1li7C4WPJ6J3Fz5KZLchBpe9_HO0n2WIZbnVKI3nQkigCCd4_N4j4InQonyLdEKDEMlFa1CUvmaIwvUQi1Noh8eH7mCggbJpKAr-9MtdnMbhZ3NcCp9JgdHShnAndmhIm9EdmScixLgAA0trqAzKNZPZLY0IoWz4sSwYPOrr_qiCE3jjopefkeyB7L5CmH8aQg9IDfmbnp8P19tSgnShtLrxfFIhbbjSAQ" />
                    </div>
                    <p class="font-body-sm text-body-sm text-outline">Confianza de <span
                            class="font-bold text-on-surface">+10k</span> profesionales</p>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-primary/5 rounded-[40px] -rotate-3 scale-105"></div>
                <div class="relative bg-white p-8 rounded-[32px] shadow-2xl border border-slate-100 overflow-hidden">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-white">
                                <span class="material-symbols-outlined" data-icon="person">person</span>
                            </div>
                            <div>
                                <p class="font-h3 text-h3 leading-none">Elena Rivas</p>
                                <p class="font-body-sm text-body-sm text-outline">Product Designer</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-primary-container" data-icon="star"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <div class="space-y-4">
                        <div class="h-4 w-3/4 bg-surface-container rounded-full"></div>
                        <div class="h-4 w-full bg-surface-container rounded-full"></div>
                        <div class="h-4 w-5/6 bg-surface-container rounded-full"></div>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="p-4 bg-secondary-container/30 rounded-xl">
                            <span class="material-symbols-outlined text-primary mb-2 block"
                                data-icon="group">group</span>
                            <p class="font-label-caps text-label-caps text-secondary uppercase">Grupo</p>
                            <p class="font-body-md text-body-md font-bold">Tecnología</p>
                        </div>
                        <div class="p-4 bg-tertiary-container/10 rounded-xl">
                            <span class="material-symbols-outlined text-tertiary-container mb-2 block"
                                data-icon="cloud_done">cloud_done</span>
                            <p class="font-label-caps text-label-caps text-secondary uppercase">Estado</p>
                            <p class="font-body-md text-body-md font-bold">Sincronizado</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-surface py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-20">
                    <h2 class="font-h1 text-h1 text-primary mb-4">Diseñado para la eficiencia</h2>
                    <p class="font-body-lg text-body-lg text-secondary">Potencia tu flujo de trabajo con herramientas
                        que se adaptan a tu ritmo profesional.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="group bg-white p-10 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[32px]" data-icon="bolt">bolt</span>
                        </div>
                        <h3 class="font-h2 text-h2 mb-4">Búsqueda instantánea</h3>
                        <p class="font-body-md text-body-md text-secondary">Localiza cualquier contacto en milisegundos
                            con filtros inteligentes y búsqueda semántica.</p>
                    </div>
                    <div
                        class="group bg-white p-10 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-primary-container/10 rounded-2xl flex items-center justify-center text-primary-container mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[32px]" data-icon="cloud_sync">cloud_sync</span>
                        </div>
                        <h3 class="font-h2 text-h2 mb-4">Sincronización en la nube</h3>
                        <p class="font-body-md text-body-md text-secondary">Tus datos siempre actualizados en todos tus
                            dispositivos con cifrado de grado militar.</p>
                    </div>
                    <div
                        class="group bg-white p-10 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-tertiary-container/10 rounded-2xl flex items-center justify-center text-tertiary-container mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[32px]"
                                data-icon="folder_shared">folder_shared</span>
                        </div>
                        <h3 class="font-h2 text-h2 mb-4">Grupos personalizados</h3>
                        <p class="font-body-md text-body-md text-secondary">Segmenta tu red de contactos por proyectos,
                            sectores o intereses con etiquetas dinámicas.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-24">
            <div
                class="bg-primary text-white rounded-[40px] p-12 md:p-20 flex flex-col md:flex-row items-center justify-between gap-12 overflow-hidden relative">
                <div class="relative z-10 space-y-6 max-w-xl">
                    <h2 class="font-h1 text-[40px] md:text-[56px] leading-tight">¿Listo para transformar tu red?</h2>
                    <p class="font-body-lg text-body-lg text-blue-100">Únete a miles de profesionales que ya están
                        gestionando sus relaciones con Agenda Pro.</p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="px-8 py-4 bg-white text-primary font-button text-button rounded-lg hover:bg-slate-50 transition-colors">Empezar
                            ahora gratis</button>
                    </div>
                </div>
                <div class="relative z-10 w-full md:w-1/3">
                    <img class="rounded-2xl shadow-2xl rotate-3"
                        data-alt="clean minimal mobile app interface displaying a contact dashboard with blue and white color palette"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq9avzmhgawV3tLN4Nn4LUUdnWfoM6OfosqNk0xIk2BLIK_vnYuk1BCfKm8Y-qwVe_lEc9QNQ0GkiO2u-JHXLiqHr9O49Le3DomJZ17U0bs8uoQVXu6VKen7gE2A_q8pdDjDUnDdQaNTisVDc-ka2yYQM8jWhoNCSFyv_RKNXOSC2OBcoiFMC39SBazZexxG8JtOrd4onOsD1qXo5JYwi9Ba-xp2H7jKKM_IPiCpK0QV_0V_xBYjHsv9-ErDHiW1Fom8pXKjnHUw" />
                </div>
                <div
                    class="absolute -right-20 -bottom-20 w-96 h-96 bg-primary-container rounded-full blur-3xl opacity-50">
                </div>
            </div>
        </section>
    </main>
    <footer
        class="w-full py-12 bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 font-manrope">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex flex-col gap-2">
                <span class="font-bold text-slate-900 dark:text-slate-100 text-lg">Agenda Pro</span>
                <p class="font-manrope text-xs text-slate-500 dark:text-slate-400">© 2024 Agenda de Contactos. All
                    rights reserved.</p>
            </div>
            <div class="flex items-center gap-8">
                <a class="font-manrope text-xs text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-400 transition-colors"
                    href="#">Privacy Policy</a>
                <a class="font-manrope text-xs text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-400 transition-colors"
                    href="#">Terms of Service</a>
                <a class="font-manrope text-xs text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-400 transition-colors"
                    href="#">Help Center</a>
            </div>
            <div class="flex items-center gap-4">
                <a class="text-slate-400 hover:text-primary transition-colors" href="#">
                    <span class="material-symbols-outlined">language</span>
                </a>
                <a class="text-slate-400 hover:text-primary transition-colors" href="#">
                    <span class="material-symbols-outlined">share</span>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>