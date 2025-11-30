<?php
// $producto y $tipos deben llegar desde el controlador
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto | Monarch</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">

<!-- HEADER ADMIN -->
<header class="bg-purple-700 py-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-4">

        <a href="index.php?view=dashboard" class="text-2xl font-bold hover:text-purple-200 transition">
            Monarch Admin
        </a>

        <div class="flex gap-4">
            <a href="index.php?view=cuenta"
               class="bg-black px-4 py-2 rounded-lg border border-white hover:bg-gray-800 transition">
               Mi cuenta
            </a>

            <a href="index.php?view=logout"
               class="bg-black px-4 py-2 rounded-lg border border-white hover:bg-gray-800 transition">
               Cerrar sesión
            </a>
        </div>

    </div>
</header>

<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Editar Producto</h1>

    <div class="flex gap-12 mb-6">
        <a href="index.php?view=productos"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
           ← Volver al listado
        </a>
        <a href="index.php?view=dashboard"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
           ← Volver al dashboard
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


