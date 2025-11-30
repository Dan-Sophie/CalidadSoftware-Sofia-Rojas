<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">

<!-- HEADER -->
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

<!-- CONTENIDO -->
<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Crear Nuevo Producto</h1>

    <!-- Botones de navegación -->
    <div class="flex gap-6 mb-6">
        <a href="index.php?view=productos"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
           ← Volver al listado
        </a>
        <a href="index.php?view=dashboard"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
           ← Volver al dashboard
        </a>
    </div>

    <!-- Formulario -->
    <form action="index.php?view=producto_guardar" method="POST"
          class="bg-gray-900 p-6 rounded-xl border border-purple-600 max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
            <label class="block text-white font-semibold mb-1">Código</label>
            <input type="text" name="codigo" class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Nombre</label>
            <input type="text" name="nombre" class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div class="col-span-2">
            <label class="block text-white font-semibold mb-1">Descripción</label>
            <textarea name="descripcion" class="w-full p-2 rounded bg-black border border-gray-700 text-white" required></textarea>
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Precio</label>
            <input type="number" name="precio" class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Tipo de producto</label>
            <select name="tipo_producto_id" class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
                <?php foreach ($tipos as $tipo): ?>
                    <option value="<?= $tipo['id'] ?>"><?= $tipo['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Color</label>
            <input type="text" name="color" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Talla</label>
            <input type="text" name="talla" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Material</label>
            <input type="text" name="material" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Estilo</label>
            <input type="text" name="estilo" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Género</label>
            <input type="text" name="genero" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Cantidad en stock</label>
            <input type="number" name="cantidad_stock" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div>
            <label class="block text-white font-semibold mb-1">Proveedor</label>
            <input type="text" name="proveedor" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <div class="col-span-2">
            <label class="block text-white font-semibold mb-1">Fecha de ingreso</label>
            <input type="date" name="fecha_ingreso" class="w-full p-2 rounded bg-black border border-gray-700 text-white">
        </div>

        <!-- Botones -->
        <div class="col-span-2 flex justify-end gap-4 mt-4">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold transition">
                Crear producto
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


