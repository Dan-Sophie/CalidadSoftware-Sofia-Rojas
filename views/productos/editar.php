<?php
// $producto y $tipos deben llegar desde el controlador
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-black text-white min-h-screen flex flex-col">

<!-- HEADER -->
<header class="bg-gradient-to-r from-purple-400 to-purple-600 shadow-lg py-6">
    <div class="container mx-auto flex justify-between items-center px-6">

        <a href="index.php?view=dashboard"
           class="text-2xl font-bold text-white hover:text-purple-200 transition">
           Administrar Productos
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

<div class="mb-8">
    <h1 class="text-3xl font-bold text-purple-400 flex items-center gap-3">
        <i class="fa-solid fa-pen-to-square text-purple-500 text-4xl"></i>
        Editar Producto
    </h1>

    <p class="text-gray-300 mt-2">
        Modifica la información del producto seleccionado.
    </p>

    <div class="mt-3 h-[3px] w-32 bg-purple-600 rounded-full shadow-purple-700/40 shadow"></div>
</div>


    <!-- BOTONES AGREGAR Y VOLVER -->
    <div class="flex gap-20 mb-6">

    <a href="index.php?view=producto_crear"
       class="px-6 py-3 rounded-lg font-semibold bg-purple-600 hover:bg-purple-700 
              border border-purple-500/40 shadow-md shadow-purple-900/20 
              hover:shadow-purple-800/30 transition flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Regresar al Listado
    </a>

    <a href="index.php?view=dashboard"
       class="px-6 py-3 rounded-lg font-semibold bg-[#1a1a1a] border border-[#2d2d2d] 
              hover:bg-[#232323] hover:border-purple-500 hover:shadow-md hover:shadow-purple-900/20 
              transition flex items-center gap-2">
        <i class="fa-solid fa-arrow-left"></i>
        Volver al Dashboard
    </a>

</div>

    <form action="index.php?view=producto_actualizar" method="POST"
          class="bg-gray-900 p-6 rounded-xl border border-purple-600 max-w-lg mx-auto">

        <input type="hidden" name="codigo" value="<?= $producto['codigo'] ?>">

        <div class="mb-4">
            <label class="block text-white font-semibold mb-1">Nombre</label>
            <input type="text" name="nombre" value="<?= $producto['nombre'] ?>"
                   class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div class="mb-4">
            <label class="block text-white font-semibold mb-1">Descripción</label>
            <textarea name="descripcion" rows="3"
                      class="w-full p-2 rounded bg-black border border-gray-700 text-white" required><?= $producto['descripcion'] ?></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-white font-semibold mb-1">Precio</label>
            <input type="number" name="precio" value="<?= $producto['precio'] ?>" step="100" min="0"
                   class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div class="mb-4">
            <label class="block text-white font-semibold mb-1">Categoría</label>
            <select name="tipo_producto_id"
                    class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
                <?php foreach ($tipos as $t): ?>
                    <option value="<?= $t['id'] ?>" <?= $producto['tipo_producto_id']==$t['id']?'selected':'' ?>><?= $t['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="flex justify-end gap-4 mt-6">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold transition">
                Actualizar producto
            </button>
            <a href="index.php?view=productos"
               class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
               Cancelar
            </a>
        </div>

    </form>

</div>

</body>
</html>


