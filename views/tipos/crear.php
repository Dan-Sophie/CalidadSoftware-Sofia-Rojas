<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tipo de Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-black text-white">

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


<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Crear nuevo tipo de producto</h1>

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

    <form action="index.php?view=tipo_guardar" method="POST"
          class="bg-gray-900 p-6 rounded-xl border border-purple-600 max-w-xl mx-auto grid grid-cols-1 gap-4">

        <div>
            <label class="block text-white font-semibold mb-1">Nombre del tipo</label>
            <input type="text" name="nombre" class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Descripción (opcional)</label>
            <textarea name="descripcion" class="w-full p-2 rounded bg-black border border-gray-700 text-white"></textarea>
        </div>

        <div class="flex justify-end mt-4 gap-4">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold transition">
                Crear tipo
            </button>

            <a href="index.php?view=tipos"
               class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">Cancelar</a>
        </div>

    </form>

</div>

</body>
</html>



