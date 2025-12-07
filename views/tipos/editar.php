<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tipo de Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-black text-white min-h-screen flex flex-col">

<!-- HEADER -->
<header class="bg-gradient-to-r from-purple-400 to-purple-600 shadow-lg py-6">
    <div class="container mx-auto flex justify-between items-center px-6">

        <a href="index.php?view=dashboard"
           class="text-2xl font-bold text-white hover:text-purple-200 transition">
           Administrar Tipos de Productos
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

<div class="max-w-4xl mx-auto p-8">

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Editar Categoría</h1>

    <!-- BOTONES AGREGAR Y VOLVER -->
    <div class="flex gap-20 mb-6">

    <!-- REGRESAR AL LISTADO -->
    <a href="index.php?view=producto_crear"
    class="px-7 py-3 rounded-xl font-semibold bg-purple-600 hover:bg-purple-700
            border border-purple-500/50 shadow-lg shadow-purple-900/20
            hover:shadow-purple-800/40 transition-all flex items-center gap-3">
        <i class="fa-solid fa-list text-lg"></i>
        Regresar al Listado
    </a>

    <!-- VOLVER AL DASHBOARD -->
    <a href="index.php?view=dashboard"
    class="px-7 py-3 rounded-xl font-semibold bg-[#141414] border border-[#2d2d2d]
            hover:bg-[#1e1e1e] hover:border-purple-500 hover:shadow-lg hover:shadow-purple-900/25
            transition-all flex items-center gap-3">
        <i class="fa-solid fa-arrow-left text-lg"></i>
        Volver al Dashboard
    </a>

    </div>

    <form action="index.php?view=tipo_actualizar" method="POST"
          class="bg-[#0f0f0f] p-8 rounded-xl border border-[#2d2d2d] shadow-md shadow-purple-900/10 max-w-lg mx-auto">

        <input type="hidden" name="id" value="<?= $tipo['id'] ?>">

        <div class="mb-5">
            <label class="block text-purple-300 font-semibold mb-2">
                Nombre de la categoría
            </label>

            <input type="text" name="nombre" value="<?= $tipo['nombre'] ?>"
                   class="w-full p-3 rounded-lg bg-black border border-gray-700 text-white focus:border-purple-600 focus:ring-2 focus:ring-purple-700 outline-none transition"
                   required>
        </div>

        <div class="flex justify-end gap-4 mt-8">

            <button type="submit"
                    class="px-6 py-3 rounded-lg bg-purple-600 hover:bg-purple-700 shadow-md shadow-purple-900/20 font-semibold transition">
                Guardar cambios
            </button>

            <a href="index.php?view=tipos"
               class="px-6 py-3 rounded-lg bg-[#1a1a1a] border border-[#2d2d2d] hover:border-purple-500 hover:bg-[#232323] transition font-semibold">
               Cancelar
            </a>

        </div>

    </form>

</div>


