<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Agenda Pro - Detalle de Contacto</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
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

        .shadow-level-1 {
            box-shadow: 0px 2px 4px rgba(15, 82, 186, 0.05);
        }

        .shadow-level-2 {
            box-shadow: 0px 10px 20px rgba(15, 82, 186, 0.1);
        }
    </style>
</head>

<body class="bg-background font-body-md text-on-background">
    <!-- SideNavBar (The Anchor) -->
    <aside class="h-screen w-64 fixed left-0 top-0 hidden md:flex flex-col bg-white border-r border-slate-200 z-40">
        <div class="flex flex-col h-full p-4">
            <div class="mb-8 px-4">
                <span class="text-lg font-black text-blue-700 tracking-tight">Agenda Pro</span>
                <p class="text-[10px] text-slate-500 font-medium">Network Manager</p>
            </div>
            <nav class="flex-1 space-y-2">
                <a class="flex items-center gap-3 bg-blue-50 text-blue-700 px-4 py-3 rounded-lg font-bold scale-100 hover:scale-[1.02] active:scale-98 transition-all" href="#">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                    <span class="font-manrope text-sm font-medium">Contactos</span>
                </a>
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 hover:bg-slate-50 rounded-lg scale-100 hover:scale-[1.02] active:scale-98 transition-all" href="#">
                    <span class="material-symbols-outlined" data-icon="star">star</span>
                    <span class="font-manrope text-sm font-medium">Favoritos</span>
                </a>
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 hover:bg-slate-50 rounded-lg scale-100 hover:scale-[1.02] active:scale-98 transition-all" href="#">
                    <span class="material-symbols-outlined" data-icon="group">group</span>
                    <span class="font-manrope text-sm font-medium">Grupos</span>
                </a>
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 hover:bg-slate-50 rounded-lg scale-100 hover:scale-[1.02] active:scale-98 transition-all" href="#">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                    <span class="font-manrope text-sm font-medium">Ajustes</span>
                </a>
            </nav>
            <button class="mt-auto bg-[#10B981] text-white font-button py-3 px-4 rounded-lg flex items-center justify-center gap-2 transition-transform active:scale-95">
                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                <span>Nuevo Contacto</span>
            </button>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="md:ml-64 min-h-screen p-gutter">
        <div class="max-w-5xl mx-auto">
            <!-- Header Section: Profile & Identity -->
            <header class="bg-white rounded-xl p-lg shadow-level-1 mb-gutter flex flex-col md:flex-row items-center md:items-end gap-lg">
                <div class="relative">
                    <img alt="Contact profile" class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-4 border-white shadow-md" data-alt="Professional portrait of a middle-aged man with a friendly expression, wearing a navy blazer in a soft-lit office environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2FCk5Vg0_7b34ippChfQmd-cgvWK5aTDT8re_Xyev4ZMYMewrA_ZcvWk0He10htwdCQrrI9jdpEMKowkwGbA8Fr5DgsMxCmHWk8crapVuoxZJ5JtJQ9n75n5riBU1qLYDWjZZt5cnCLiitJ2dgEZjOdLf-nFt7LtGosyUucE8Y9R6Wbo7cNWo4XY1q7DhT6h7h2z0mrOQYj6U8ewpyQ1ApzAcPoPRTajy_H9S7eZ_VkMoh4c8AXml4CiGJdhP7CbUZVT7dsEawg" />
                    <div class="absolute bottom-2 right-2 bg-[#10B981] w-6 h-6 rounded-full border-4 border-white"></div>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h1 class="font-h1 text-h1 text-on-background mb-1">Alejandro Villalobos</h1>
                    <p class="font-body-md text-secondary mb-4 flex items-center justify-center md:justify-start gap-2">
                        <span class="material-symbols-outlined text-sm" data-icon="work">work</span>
                        Director de Operaciones @ TechSphere
                    </p>
                    <div class="flex flex-wrap gap-sm justify-center md:justify-start">
                        <button class="bg-[#0F52BA] text-white font-button px-6 py-2.5 rounded-lg shadow-sm active:scale-95 transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-md" data-icon="call">call</span>
                            Llamar
                        </button>
                        <button class="bg-white border border-[#0F52BA] text-[#0F52BA] font-button px-6 py-2.5 rounded-lg active:scale-95 transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-md" data-icon="edit">edit</span>
                            Editar
                        </button>
                        <button class="bg-white border border-error text-error font-button px-6 py-2.5 rounded-lg active:scale-95 transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-md" data-icon="delete">delete</span>
                            Eliminar
                        </button>
                    </div>
                </div>
            </header>
            <!-- Bento Layout Content -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <!-- Information Pane -->
                <div class="md:col-span-8 space-y-gutter">
                    <!-- Información Personal Card -->
                    <section class="bg-white rounded-xl p-lg shadow-level-1">
                        <h2 class="font-h2 text-h2 text-on-background mb-lg flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary" data-icon="contact_page">contact_page</span>
                            Información Personal
                        </h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-md gap-x-gutter">
                            <div class="space-y-1">
                                <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider">Teléfono Personal</label>
                                <p class="font-body-lg text-body-lg text-on-surface">+34 612 345 678</p>
                            </div>
                            <div class="space-y-1">
                                <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider">Correo Electrónico</label>
                                <p class="font-body-lg text-body-lg text-on-surface">a.villalobos@techsphere.com</p>
                            </div>
                            <div class="sm:col-span-2 pt-md border-t border-slate-100 space-y-1">
                                <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider">Dirección Residencial</label>
                                <p class="font-body-lg text-body-lg text-on-surface leading-relaxed">Calle de Serrano 45, Planta 4, 28001 Madrid, España</p>
                                <div class="mt-sm h-32 w-full rounded-lg bg-slate-100 overflow-hidden relative">
                                    <img alt="Map location" class="w-full h-full object-cover grayscale opacity-60" data-alt="Abstract aerial map view of an urban city grid with clean blue and gray streets and subtle shadows" data-location="Madrid, Spain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7jibb0sNuGwQnUR-EpSZp_E9NU8pVa09wPXU8rxu4ZOeAb6O5b0BBJfu9SFBcB608CU4f26V7rhhXjtMi-V5T69mXK9f0iz3IEdv-JdmEJBo7xHHzebemlnWl_el0ma2nYC--4jWSJaCpb_VUnXV1b0zSvvf0VjAsuDcOzeVw2tTOejh3i4aMGFqAnbpvVrTtrfsVf7LGCcVxG_jg-Wk0YxD47M5wXsht5uWQAFel51IP8kM979VTdGNnzitua599kl1feV49-Q" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="bg-white p-2 rounded-full shadow-lg">
                                            <span class="material-symbols-outlined text-primary text-3xl" data-icon="location_on" style="font-variation-settings: 'FILL' 1;">location_on</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Notas Section -->
                    <section class="bg-white rounded-xl p-lg shadow-level-1">
                        <div class="flex justify-between items-center mb-lg">
                            <h2 class="font-h2 text-h2 text-on-background flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary" data-icon="note_alt">note_alt</span>
                                Notas
                            </h2>
                            <button class="text-[#0F52BA] font-button text-sm">Añadir Nota</button>
                        </div>
                        <div class="bg-surface-container-lowest border border-slate-100 p-md rounded-lg">
                            <p class="font-body-md text-secondary leading-relaxed italic">
                                "Contacto clave para la expansión del Q3. Mencionó que prefiere reuniones matutinas los martes. Interesado en servicios de consultoría de redimensionamiento."
                            </p>
                            <div class="mt-md flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-slate-300 flex items-center justify-center text-[10px] text-white font-bold">JD</div>
                                <span class="text-xs text-outline font-medium">Actualizado por Javier Diaz • Hace 2 días</span>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side Pane (Groups & Activity) -->
                <div class="md:col-span-4 space-y-gutter">
                    <!-- Grupos Card -->
                    <section class="bg-white rounded-xl p-lg shadow-level-1">
                        <h2 class="font-h2 text-h2 text-on-background mb-lg flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary" data-icon="group_work">group_work</span>
                            Grupos
                        </h2>
                        <div class="flex flex-wrap gap-xs">
                            <span class="bg-[#E0E7FF] text-[#0F52BA] px-3 py-1.5 rounded-full font-label-caps text-[11px] font-bold">WORK</span>
                            <span class="bg-[#E0E7FF] text-[#0F52BA] px-3 py-1.5 rounded-full font-label-caps text-[11px] font-bold">CLIENTS</span>
                            <span class="bg-[#E0E7FF] text-[#0F52BA] px-3 py-1.5 rounded-full font-label-caps text-[11px] font-bold">TECH_SPHERE</span>
                            <button class="border-2 border-dashed border-slate-200 text-slate-400 px-3 py-1 rounded-full font-label-caps text-[11px] hover:border-primary hover:text-primary transition-colors">
                                + ASIGNAR
                            </button>
                        </div>
                    </section>
                    <!-- Stats Card (System context) -->
                    <section class="bg-gradient-to-br from-[#0F52BA] to-[#003c90] rounded-xl p-lg shadow-level-2 text-white">
                        <h3 class="font-h3 text-lg mb-md opacity-90">Resumen de Interacción</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-xs opacity-70">Última llamada</span>
                                <span class="text-sm font-semibold">Ayer, 14:30</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-xs opacity-70">Total interacciones</span>
                                <span class="text-sm font-semibold">48 veces</span>
                            </div>
                            <div class="pt-4 mt-4 border-t border-white/10">
                                <p class="text-xs opacity-70 mb-2">Relación del contacto</p>
                                <div class="w-full bg-white/20 h-2 rounded-full overflow-hidden">
                                    <div class="bg-[#10B981] h-full w-[85%] rounded-full"></div>
                                </div>
                                <p class="text-[10px] mt-2 font-medium">Prioridad Alta (85%)</p>
                            </div>
                        </div>
                    </section>
                    <!-- History Timeline -->
                    <section class="bg-white rounded-xl p-lg shadow-level-1">
                        <h2 class="font-h3 text-h3 text-on-background mb-md">Actividad Reciente</h2>
                        <div class="space-y-4">
                            <div class="flex gap-3">
                                <div class="mt-1">
                                    <div class="w-2 h-2 rounded-full bg-[#10B981]"></div>
                                </div>
                                <div>
                                    <p class="text-xs font-bold">Llamada completada</p>
                                    <p class="text-[11px] text-outline">Duración: 12 min</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="mt-1">
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                </div>
                                <div>
                                    <p class="text-xs font-bold">Correo enviado</p>
                                    <p class="text-[11px] text-outline">Propuesta comercial Q3</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer (The Shield) -->
    <footer class="md:ml-64 bg-slate-50 border-t border-slate-200 py-12">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex flex-col items-center md:items-start gap-1">
                <span class="font-bold text-slate-900">Agenda de Contactos</span>
                <p class="font-manrope text-xs text-slate-500">© 2024 Agenda de Contactos. All rights reserved.</p>
            </div>
            <div class="flex gap-6">
                <a class="font-manrope text-xs text-slate-500 hover:text-blue-500 transition-colors" href="#">Privacy Policy</a>
                <a class="font-manrope text-xs text-slate-500 hover:text-blue-500 transition-colors" href="#">Terms of Service</a>
                <a class="font-manrope text-xs text-slate-500 hover:text-blue-500 transition-colors" href="#">Help Center</a>
            </div>
        </div>
    </footer>
</body>

</html>