<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Crear Nuevo Contactoc</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-variant": "#e0e3e5",
                        "on-secondary-container": "#4a6774",
                        "inverse-primary": "#b0c6ff",
                        "surface-container-highest": "#e0e3e5",
                        "on-surface-variant": "#434653",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#bcceff",
                        "on-tertiary-container": "#58e7ab",
                        "primary-container": "#0f52ba",
                        "inverse-surface": "#2d3133",
                        "on-primary-fixed": "#001945",
                        "outline-variant": "#c3c6d5",
                        "on-tertiary-fixed": "#002113",
                        "on-surface": "#191c1e",
                        "tertiary-container": "#006544",
                        "surface-dim": "#d8dadc",
                        "surface": "#f7f9fb",
                        "tertiary-fixed": "#6ffbbe",
                        "primary-fixed": "#d9e2ff",
                        "error": "#ba1a1a",
                        "surface-bright": "#f7f9fb",
                        "primary": "#003c90",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#004b31",
                        "surface-container-high": "#e6e8ea",
                        "surface-container-low": "#f2f4f6",
                        "secondary": "#466270",
                        "on-tertiary-fixed-variant": "#005236",
                        "on-secondary-fixed-variant": "#2e4b57",
                        "on-primary-fixed-variant": "#00419c",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-background": "#191c1e",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#eff1f3",
                        "surface-container": "#eceef0",
                        "secondary-fixed": "#c9e7f7",
                        "background": "#f7f9fb",
                        "on-error": "#ffffff",
                        "secondary-container": "#c6e4f4",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#4edea3",
                        "secondary-fixed-dim": "#adcbda",
                        "outline": "#737784",
                        "on-secondary-fixed": "#001f2a",
                        "primary-fixed-dim": "#b0c6ff",
                        "surface-tint": "#1d59c1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "display": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
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
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<?php

require_once "../../src/controllers/ContactoControl.php";


$controller = new ContactoControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);

    $controller->nuecontac($nombre, $telefono, $email);

    header("Location: index.php");
    exit();
}

?>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar -->
    <aside class="h-screen w-64 border-r fixed left-0 top-0 border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900 flex flex-col py-6 z-50">
        <div class="px-6 mb-8">
            <h1 class="font-['Manrope'] font-bold text-xl text-blue-900 dark:text-white">Agenda PRO</h1>
        </div>
        <nav class="flex-1 space-y-1 px-3">

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
        <div class="mt-auto px-4">
            <button class="w-full py-3 bg-blue-700 text-white rounded-xl font-semibold flex items-center justify-center gap-2 active:scale-95 duration-150 shadow-md">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                <span>Nuevo Contacto</span>
            </button>
        </div>
    </aside>
    <!-- TopAppBar -->
    <header class="fixed top-0 right-0 border-b z-40 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md border-slate-200 dark:border-slate-800 flex items-center justify-between w-[calc(100%-16rem)] ml-64 px-8 h-16 shadow-sm dark:shadow-none">
        <div class="flex items-center flex-1">

        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-500 hover:text-blue-700 transition-all duration-200 ease-in-out">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="p-2 text-slate-500 hover:text-blue-700 transition-all duration-200 ease-in-out">
                <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
            </button>
            <div class="h-8 w-8 rounded-full overflow-hidden border-2 border-primary-container">
                <img alt="User Profile" data-alt="close-up portrait of a professional businessman in a blue suit with a warm and confident expression in a sunlit office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrZMV_ptr19NLPd5NTgxtnv_pgThG6FMtp3GFKma7GQTww5SWdgSdmQxWJqvKrNHRGC9CeDRI4tiQGfyyHkUw40hwVKNyLKcYiPFw8yUBv4DgjX4kDlIsmxLd-TDbkrgiBUfbnxxtYctqisjP2Uqis2cOi9utL7fmY3mj0QvrNpboANt7C2bIUzwxfZ6TbghYrLQ6lD7LJpFASt4XwVY2YgxRZ6ktLNv7kWR_PbvtczHPdNeeQaCUYdVlLV4zW4BsQTvfcZEj18w" />
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="ml-64 pt-24 pb-12 px-12 min-h-screen bg-surface">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumbs / Header Section -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 tracking-tight">Nuevo Contacto</h2>
                </div>
                <div class="flex items-center gap-3">
                    <a href="dashboard.php" class="px-5 py-2 text-slate-600 font-semibold hover:bg-slate-100 rounded-lg transition-all">Cancelar</a>
                    <button class="px-6 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg shadow-md transition-all">Guardar Contacto</button>
                </div>
            </div>
            <!-- Bento-style Card Layout -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Basic Info Card -->
                <div class="col-span-8 bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
                    <div class="flex items-center gap-2 mb-6 border-b border-slate-100 pb-4">
                        <span class="material-symbols-outlined text-primary" data-icon="person">person</span>
                        <h3 class="text-lg font-bold">Datos De Contacto</h3>
                    </div>
                    <div class="space-y-10">
                        <form action="agregar.php" method="POST" class="space-y-10">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 tracking-wider mb-2 uppercase">Nombre Completo</label>
                                <input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="nombre" required placeholder="Ej. Jonathan Aris" type="text" />
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-500 tracking-wider mb-2 uppercase">Email</label>
                                    <input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="email" required placeholder="jonathan@example.com" type="email" />
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-500 tracking-wider mb-2 uppercase">Numero teléfono</label>
                                    <input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="telefono" required placeholder="+1 (555) 000-0000" type="tel" />
                                </div>
                            </div>

                            <div class="mt-8 pt-8 border-t border-slate-200 flex justify-end gap-4">
                                <a href="dashboard.php" class="px-8 py-3 text-slate-600 font-semibold hover:bg-white hover:shadow-sm border border-transparent hover:border-slate-200 rounded-xl transition-all">
                                    Descartar
                                </a>
                                <button class="px-10 py-3 bg-primary text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:bg-primary-container active:scale-95 transition-all flex items-center gap-2">
                                    <span class="material-symbols-outlined text-xl" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    Guardar Contacto
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- Avatar Upload / Quick Stats (Asymmetric Card) -->
                <div class="col-span-4 space-y-6">
                    <div class="bg-primary-container p-8 rounded-xl text-on-primary-container shadow-lg flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full bg-white/20 flex items-center justify-center mb-4 border-4 border-white/30 cursor-pointer hover:bg-white/30 transition-all">
                            <span class="material-symbols-outlined text-4xl" data-icon="add_a_photo">add_a_photo</span>
                        </div>
                        <h3 class="font-bold text-lg mb-1">Contact Image</h3>
                        <p class="text-sm opacity-80">Upload a professional headshot for better recognition.</p>
                    </div>

                </div>
            </div>

        </div>
    </main>
</body>

</html>