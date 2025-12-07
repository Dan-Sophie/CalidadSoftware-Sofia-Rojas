<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .card-box {
            background: #1b1b1b;
            border: 1px solid #2d2d2d;
            border-radius: 14px;
            transition: 0.25s ease;
        }
        .card-box:hover {
            transform: translateY(-6px) scale(1.02);
            border-color: #b77fff;
            box-shadow: 0 0 18px #8b46ff4d;
        }
    </style>
</head>


<body class="bg-black text-white min-h-screen flex flex-col">

<!-- HEADER -->
<header class="bg-gradient-to-r from-purple-400 to-purple-600 shadow-lg py-6">
    <div class="container mx-auto flex justify-between items-center px-6">

        <a href="index.php?view=dashboard"
           class="text-2xl font-bold text-white hover:text-purple-200 transition">
           Panel Administrativo
        </a>

        <div class="flex gap-4">
            <a href="index.php?view=cuenta"
               class="flex items-center gap-2 bg-black/70 px-4 py-2 rounded-lg border border-white hover:bg-gray-800 transition">
               <i class="fa-solid fa-user"></i> Mi cuenta
            </a>

            <a href="index.php?view=logout"
               class="flex items-center gap-2 bg-black/70 px-4 py-2 rounded-lg border border-white hover:bg-gray-800 transition">
               <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
            </a>
        </div>

    </div>
</header>

<!-- CONTENIDO -->
<div class="container mx-auto p-8">

    <!-- RESUMEN -->
    <h2 class="text-3xl font-bold mb-6 text-purple-400">Resumen General</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="card-box p-6">
            <h3 class="text-xl font-bold">Productos registrados</h3>
            <p class="text-4xl mt-4 text-purple-400 font-bold"><?= count($productos) ?></p>
        </div>

        <div class="card-box p-6">
            <h3 class="text-xl font-bold">Categorías creadas</h3>
            <p class="text-4xl mt-4 text-purple-400 font-bold"><?= count($tipos) ?></p>
        </div>

        <div class="card-box p-6">
            <h3 class="text-xl font-bold">Usuario actual</h3>
            <p class="text-xl mt-4 text-purple-300">Administrador</p>
        </div>

    </div>


    <!-- ACCIONES RÁPIDAS -->
    <h2 class="text-2xl font-semibold text-purple-300 mt-12 mb-4">Acciones rápidas</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- ADMINISTRAR PRODUCTOS -->
        <a href="index.php?view=productos" class="block">
            <div class="card-box p-6 hover:bg-[#232323]">
                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-shirt text-purple-400 text-4xl"></i>

                    <div>
                        <h3 class="text-xl font-bold">Administrar Productos</h3>
                        <p class="text-gray-300 mt-1">
                            Crea, edita o elimina productos del inventario y controla las existencias.
                        </p>
                    </div>
                </div>
            </div>
        </a>

        <!-- ADMINISTRAR CATEGORÍAS -->
        <a href="index.php?view=tipos" class="block">
            <div class="card-box p-6 hover:bg-[#232323]">
                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-tags text-purple-400 text-4xl"></i>

                    <div>
                        <h3 class="text-xl font-bold">Administrar Categorías</h3>
                        <p class="text-gray-300 mt-1">
                            Organiza los tipos de productos disponibles para mejorar la clasificación.
                        </p>
                    </div>
                </div>
            </div>
        </a>

    </div>

</div>


</body>
</html>












