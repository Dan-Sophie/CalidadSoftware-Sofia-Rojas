<?php
// Asegurar que $productos llega desde el controlador
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
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

<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Listado de Productos</h1>

    <!-- BOTONES AGREGAR Y VOLVER -->
    <div class="flex gap-20 mb-6">
        <a href="index.php?view=producto_crear"
           class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold transition">
           + Crear nuevo producto
        </a>

        <a href="index.php?view=dashboard"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg font-semibold transition">
           ← Volver al Dashboard
        </a>
    </div>

    <!-- TABLA DE PRODUCTOS -->
    <div class="bg-gray-900 p-6 rounded-xl border border-purple-600 overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="text-purple-400">
                    <th class="py-2 px-2">Código</th>
                    <th class="px-2">Nombre</th>
                    <th class="px-2">Precio</th>
                    <th class="px-2">Tipo</th>
                    <th class="px-2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php if(!empty($productos)): ?>
                    <?php foreach ($productos as $p): ?>
                        <tr class="border-b border-gray-700 hover:bg-gray-800">
                            <td class="py-2 px-2"><?= htmlspecialchars($p['codigo']) ?></td>
                            <td class="px-2"><?= htmlspecialchars($p['nombre']) ?></td>
                            <td class="px-2"><?= '$' . number_format($p['precio'], 0, ',', '.') . ' COP' ?></td>
                            <td class="px-2"><?= htmlspecialchars($p['tipo_nombre']) ?></td>
                            <td class="flex gap-4 py-2 px-2">

                                <a href="index.php?view=producto_editar&codigo=<?= urlencode($p['codigo']) ?>"
                                   class="text-yellow-400 hover:text-yellow-500 transition">
                                   Editar
                                </a>

                                <a href="index.php?view=producto_eliminar&codigo=<?= urlencode($p['codigo']) ?>"
                                   onclick="return confirm('¿Eliminar este producto?')"
                                   class="text-red-400 hover:text-red-500 transition">
                                   Eliminar
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-400">
                            No hay productos registrados.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>





