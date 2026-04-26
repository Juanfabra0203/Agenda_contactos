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
                        "on-primary-fixed": "#001945",
                        "on-tertiary": "#ffffff",
                        "surface-variant": "#e0e3e5",
                        "primary-container": "#0f52ba",
                        "tertiary-container": "#006544",
                        "on-error": "#ffffff",
                        "outline": "#737784",
                        "on-surface": "#191c1e",
                        "on-background": "#191c1e",
                        "surface-container-lowest": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "surface-dim": "#d8dadc",
                        "surface-container-highest": "#e0e3e5",
                        "on-surface-variant": "#434653",
                        "background": "#f7f9fb",
                        "inverse-primary": "#b0c6ff",
                        "error-container": "#ffdad6",
                        "surface-container": "#eceef0",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed": "#6ffbbe",
                        "tertiary-fixed-dim": "#4edea3",
                        "tertiary": "#004b31",
                        "on-primary": "#ffffff",
                        "primary": "#003c90",
                        "surface": "#f7f9fb",
                        "secondary-container": "#c6e4f4",
                        "on-tertiary-fixed-variant": "#005236",
                        "secondary-fixed-dim": "#adcbda",
                        "on-secondary-fixed-variant": "#2e4b57",
                        "on-tertiary-container": "#58e7ab",
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#d9e2ff",
                        "on-secondary-fixed": "#001f2a",
                        "surface-bright": "#f7f9fb",
                        "error": "#ba1a1a",
                        "on-primary-container": "#bcceff",
                        "surface-tint": "#1d59c1",
                        "on-error-container": "#93000a",
                        "secondary": "#466270",
                        "outline-variant": "#c3c6d5",
                        "surface-container-high": "#e6e8ea",
                        "primary-fixed-dim": "#b0c6ff",
                        "on-tertiary-fixed": "#002113",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed": "#c9e7f7",
                        "on-secondary-container": "#4a6774",
                        "on-primary-fixed-variant": "#00419c"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "16px",
                        "xl": "32px",
                        "margin": "32px",
                        "lg": "24px",
                        "xs": "8px",
                        "grid_columns": "12",
                        "base": "4px",
                        "sm": "12px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "h1": ["Manrope"],
                        "body-lg": ["Inter"],
                        "h3": ["Manrope"],
                        "h2": ["Manrope"],
                        "button": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "h1": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "h3": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "0",
                            "fontWeight": "600"
                        }],
                        "h2": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "button": ["15px", {
                            "lineHeight": "20px",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .contact-row-shadow {
            box-shadow: 0px 2px 4px rgba(15, 82, 186, 0.05);
        }

        .contact-row-shadow:hover {
            box-shadow: 0px 10px 20px rgba(15, 82, 186, 0.1);
        }
    </style>
</head>

<body class="bg-background font-body-md text-on-background antialiased">
    <!-- SideNavBar (Shell) -->
    <aside class="fixed left-0 top-0 h-full flex flex-col h-screen w-64 border-r border-slate-200 bg-slate-50 shadow-sm font-manrope antialiased z-50">
        <div class="p-6">
            <div class="text-xl font-bold text-blue-700 mb-2">Gestión Profesional</div>
            <div class="text-sm text-slate-500 mb-8">Red de Contactos</div>
            <button class="w-full py-3 px-4 bg-primary-container text-white rounded-lg flex items-center justify-center gap-2 font-button transition-transform active:scale-95 mb-8">
                <span class="material-symbols-outlined">add_circle</span>
                Nuevo Grupo
            </button>
            <nav class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-700 font-semibold border-r-4 border-blue-700 transition-colors duration-200" href="#">
                    <span class="material-symbols-outlined" data-icon="contacts">contacts</span>
                    Contactos
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-colors duration-200" href="#">
                    <span class="material-symbols-outlined" data-icon="group">group</span>
                    Grupos
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-colors duration-200" href="#">
                    <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
                    Recientes
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-colors duration-200" href="#">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                    Configuración
                </a>
            </nav>
        </div>
        <div class="mt-auto p-6 border-t border-slate-200 flex items-center gap-3">
            <img alt="Perfil de usuario" class="w-10 h-10 rounded-full object-cover" data-alt="Close-up portrait of a professional businessman in a tailored suit, neutral office background, soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-eEvfWaE2GHuwwS2YDDorApI-mr-Sh2FzITRSa8vSSsQgKNBIoBs_HYy6MnhugEVhXGB9XChSJtpi5JJRUsJDdJRB81b3L-2ZqUPd-rczuksb6sV8gJl5LfTydT6Zty43AIA5g6T0eVevdfIiiCxOSt7mRhktTG3ErBtdx72b5yVw41yy__1gCkDia7nyH0WBr6SVdpOhv96mJuhL5N-Ew29viZ5Uk4chdKRk4Nep_r3zRWmak_KGEMepZxtOlZIOSTx4ZQj0PQ" />
            <div class="overflow-hidden">
                <p class="text-sm font-bold text-slate-900 truncate">Alex Rivera</p>
                <p class="text-xs text-slate-500 truncate">Socio Senior</p>
            </div>
        </div>
    </aside>
    <!-- TopAppBar (Shell) -->
    <header class="sticky top-0 z-40 flex items-center justify-between px-6 ml-64 w-[calc(100%-16rem)] h-16 border-b border-slate-200 bg-white/80 backdrop-blur-md shadow-sm font-manrope text-sm">
        <div class="flex items-center gap-6 flex-1">
            <div class="text-lg font-black tracking-tight text-blue-700">Nexus CRM</div>
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-white border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-container/20 focus:border-primary-container transition-all" placeholder="Buscar contactos, empresas o etiquetas..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 px-4 py-2 bg-emerald-500 text-white rounded-lg font-button hover:bg-emerald-600 transition-all active:scale-95">
                <span class="material-symbols-outlined">person_add</span>
                Añadir Contacto
            </button>
            <div class="flex items-center gap-2 border-l border-slate-200 pl-4 ml-2">
                <button class="p-2 text-slate-500 hover:text-blue-700 transition-colors">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="p-2 text-slate-500 hover:text-blue-700 transition-colors">
                    <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
                </button>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-64 p-8 min-h-screen">
        <!-- Dashboard Header / Filters -->
        <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h1 class="font-h1 text-h1 text-on-surface mb-2">Contactos</h1>
                <p class="text-body-md text-slate-500">Gestiona tu red profesional y oportunidades de negocio.</p>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex bg-white rounded-lg p-1 shadow-sm border border-slate-100">
                    <button class="px-4 py-1.5 rounded-md text-sm font-semibold bg-blue-50 text-blue-700">Todos</button>
                    <button class="px-4 py-1.5 rounded-md text-sm font-semibold text-slate-500 hover:bg-slate-50">Clientes</button>
                    <button class="px-4 py-1.5 rounded-md text-sm font-semibold text-slate-500 hover:bg-slate-50">Partners</button>
                    <button class="px-4 py-1.5 rounded-md text-sm font-semibold text-slate-500 hover:bg-slate-50">Prospectos</button>
                </div>
                <button class="flex items-center gap-2 px-4 py-2 bg-white border border-slate-200 rounded-lg text-slate-600 font-button hover:bg-slate-50 transition-all">
                    <span class="material-symbols-outlined">filter_list</span>
                    Filtros
                </button>
            </div>
        </div>
        <!-- Contact Cards / List (Asymmetric Layout Concept) -->
        <div class="grid grid-cols-1 gap-4">
            <!-- Header Row (Hidden on small mobile if needed) -->
            <div class="grid grid-cols-12 gap-4 px-6 py-3 text-label-caps text-slate-400 font-semibold">
                <div class="col-span-4">CONTACTO</div>
                <div class="col-span-3">EMPRESA</div>
                <div class="col-span-2 text-center">ESTADO</div>
                <div class="col-span-3 text-right">ACCIONES</div>
            </div>
            <!-- Contact 1 -->
            <div class="grid grid-cols-12 gap-4 items-center bg-white p-6 rounded-xl contact-row-shadow border border-slate-100 transition-all">
                <div class="col-span-4 flex items-center gap-4">
                    <div class="relative">
                        <img alt="Elena Rodriguez" class="w-12 h-12 rounded-full object-cover" data-alt="Professional headshot of a smiling woman in business attire, clean white studio background, bright even lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVI-clSl96YP9T9kaiU7PeBbOYTTieptXMu2WOcZoVKqDfgBQdZLtuitFnTDdMc34JIz6qzeJOwjehG4g9BIzrB0mKYxJZL0EHyHmG4tmvzW4cvzIyEIsrsG0Y8k1WDxWLojwogmfHirmZRN8OajL5H2jh18u7b3Pq2-8Rz96v9PBuvbs1_rr_dF41cO-T9BbU0amNxYh_MMLyiXs2E5yH0pXUywaWzVrimdRvE1hHxkmn5kMGctnHVnJzPFHbCrFyb7wcAZAqbg" />
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div>
                        <h3 class="font-h3 text-h3 text-slate-900 mb-0.5">Elena Rodríguez</h3>
                        <div class="flex gap-2">
                            <span class="px-2 py-0.5 bg-indigo-50 text-indigo-700 text-[10px] font-bold rounded uppercase tracking-wider">Key Account</span>
                            <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded uppercase tracking-wider">Tech</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <p class="font-semibold text-slate-700">Lumina Systems</p>
                    <p class="text-xs text-slate-500">Director of Operations</p>
                </div>
                <div class="col-span-2 flex justify-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                        <span class="w-1.5 h-1.5 mr-1.5 bg-emerald-500 rounded-full"></span>
                        Activo
                    </span>
                </div>
                <div class="col-span-3 flex justify-end gap-2">
                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all" title="Llamar">
                        <span class="material-symbols-outlined">call</span>
                    </button>
                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all" title="Email">
                        <span class="material-symbols-outlined">mail</span>
                    </button>
                    <button class="flex items-center gap-2 px-3 py-1.5 border border-slate-200 text-slate-600 text-xs font-bold rounded-lg hover:border-blue-600 hover:text-blue-600 transition-all">
                        VER DETALLE
                    </button>
                </div>
            </div>
            <!-- Contact 2 -->
            <div class="grid grid-cols-12 gap-4 items-center bg-white p-6 rounded-xl contact-row-shadow border border-slate-100 transition-all">
                <div class="col-span-4 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center text-white font-bold text-lg">MA</div>
                    <div>
                        <h3 class="font-h3 text-h3 text-slate-900 mb-0.5">Marco Arrieta</h3>
                        <div class="flex gap-2">
                            <span class="px-2 py-0.5 bg-amber-50 text-amber-700 text-[10px] font-bold rounded uppercase tracking-wider">Prospecto</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <p class="font-semibold text-slate-700">Global Logistics S.A.</p>
                    <p class="text-xs text-slate-500">Supply Chain Manager</p>
                </div>
                <div class="col-span-2 flex justify-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                        <span class="w-1.5 h-1.5 mr-1.5 bg-slate-400 rounded-full"></span>
                        Pendiente
                    </span>
                </div>
                <div class="col-span-3 flex justify-end gap-2">
                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <span class="material-symbols-outlined">call</span>
                    </button>
                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <span class="material-symbols-outlined">mail</span>
                    </button>
                    <button class="flex items-center gap-2 px-3 py-1.5 border border-slate-200 text-slate-600 text-xs font-bold rounded-lg hover:border-blue-600 hover:text-blue-600 transition-all">
                        VER DETALLE
                    </button>
                </div>
            </div>
            <!-- Contact 3 -->
            <div class="grid grid-cols-12 gap-4 items-center bg-white p-6 rounded-xl contact-row-shadow border border-slate-100 transition-all">
                <div class="col-span-4 flex items-center gap-4">
                    <div class="relative">
                        <img alt="Julian Castro" class="w-12 h-12 rounded-full object-cover" data-alt="Professional headshot of a middle-aged man with glasses, looking confident, soft window light, blurred office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5jy0xYJf5KQzX3hYpSbFc4i362vcnO8e-g9LiBjj3q9HihUFwbMXII-a3xKCicl17L4T7FAzgsDu6wYD7RJs8KFgfi_X8lebOYR7Igc99ZWSR28VDBvqFIjoaS08AzhZAofskL_i-JainnaoIJ5DlJ_Ul3UXowivMbwn2QK81QOUJjmoSqhrUnw6bi5ipd8rtI0k88bS9r-5M__X06qWS7dzWYOABS16J5GMENkZa-TN5b1tS1U0Vuf_SwJcCejH2x1OvCt7XwA" />
                    </div>
                    <div>
                        <h3 class="font-h3 text-h3 text-slate-900 mb-0.5">Julián Castro</h3>
                        <div class="flex gap-2">
                            <span class="px-2 py-0.5 bg-blue-50 text-blue-700 text-[10px] font-bold rounded uppercase tracking-wider">Partner</span>
                            <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded uppercase tracking-wider">Legal</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <p class="font-semibold text-slate-700">Castro &amp; Asociados</p>
                    <p class="text-xs text-slate-500">Managing Partner</p>
                </div>
                <div class="col-span-2 flex justify-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                        <span class="w-1.5 h-1.5 mr-1.5 bg-emerald-500 rounded-full"></span>
                        Activo
                    </span>
                </div>
                <div class="col-span-3 flex justify-end gap-2">
                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <span class="material-symbols-outlined">call</span>
                    </button>
                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <span class="material-symbols-outlined">mail</span>
                    </button>
                    <button class="flex items-center gap-2 px-3 py-1.5 border border-slate-200 text-slate-600 text-xs font-bold rounded-lg hover:border-blue-600 hover:text-blue-600 transition-all">
                        VER DETALLE
                    </button>
                </div>
            </div>
            <!-- Contact 4 -->
            <div class="grid grid-cols-12 gap-4 items-center bg-white p-6 rounded-xl contact-row-shadow border border-slate-100 transition-all opacity-75 grayscale-[0.5]">
                <div class="col-span-4 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 font-bold text-lg">SH</div>
                    <div>
                        <h3 class="font-h3 text-h3 text-slate-900 mb-0.5">Sofia Herrera</h3>
                        <div class="flex gap-2">
                            <span class="px-2 py-0.5 bg-slate-100 text-slate-500 text-[10px] font-bold rounded uppercase tracking-wider">Inactivo</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <p class="font-semibold text-slate-700">Nexo Retail</p>
                    <p class="text-xs text-slate-500">Ex-CFO</p>
                </div>
                <div class="col-span-2 flex justify-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-50 text-red-700">
                        <span class="w-1.5 h-1.5 mr-1.5 bg-red-500 rounded-full"></span>
                        Baja
                    </span>
                </div>
                <div class="col-span-3 flex justify-end gap-2">
                    <button class="p-2 text-slate-300 cursor-not-allowed">
                        <span class="material-symbols-outlined">call</span>
                    </button>
                    <button class="p-2 text-slate-300 cursor-not-allowed">
                        <span class="material-symbols-outlined">mail</span>
                    </button>
                    <button class="flex items-center gap-2 px-3 py-1.5 border border-slate-200 text-slate-400 text-xs font-bold rounded-lg hover:bg-slate-50 transition-all">
                        VER DETALLE
                    </button>
                </div>
            </div>
        </div>
        <!-- Pagination / Status Footer -->
        <div class="mt-8 flex items-center justify-between border-t border-slate-200 pt-6">
            <p class="text-sm text-slate-500">Mostrando <span class="font-bold text-slate-900">4</span> de <span class="font-bold text-slate-900">128</span> contactos</p>
            <div class="flex gap-2">
                <button class="px-4 py-2 border border-slate-200 rounded-lg text-slate-600 hover:bg-white transition-all disabled:opacity-50" disabled="">Anterior</button>
                <button class="px-4 py-2 bg-white border border-slate-200 rounded-lg text-slate-900 font-bold hover:border-blue-600 transition-all">1</button>
                <button class="px-4 py-2 border border-slate-200 rounded-lg text-slate-600 hover:bg-white transition-all">2</button>
                <button class="px-4 py-2 border border-slate-200 rounded-lg text-slate-600 hover:bg-white transition-all">3</button>
                <button class="px-4 py-2 border border-slate-200 rounded-lg text-slate-600 hover:bg-white transition-all">Siguiente</button>
            </div>
        </div>
    </main>
    <!-- FAB for Quick Actions (Contextual for Home/Main Dashboard) -->
    <button class="fixed bottom-8 right-8 w-14 h-14 bg-blue-700 text-white rounded-full shadow-2xl flex items-center justify-center hover:bg-blue-800 transition-all active:scale-95 z-50">
        <span class="material-symbols-outlined text-2xl">chat</span>
    </button>
</body>

</html>