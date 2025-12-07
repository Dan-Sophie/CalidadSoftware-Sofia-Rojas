<?php
// Asegurar que $productos llega desde el controlador
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
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
        Listado de Productos
    </h1>

    <p class="text-gray-300 mt-2">
        Consulta, edita o elimina los productos registrados en el sistema.
    </p>
</div>


    <!-- BOTONES AGREGAR Y VOLVER -->
    <div class="flex gap-20 mb-6">

    <a href="index.php?view=producto_crear"
       class="px-6 py-3 rounded-lg font-semibold bg-purple-600 hover:bg-purple-700 
              border border-purple-500/40 shadow-md shadow-purple-900/20 
              hover:shadow-purple-800/30 transition flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Crear nuevo producto
    </a>

    <a href="index.php?view=dashboard"
       class="px-6 py-3 rounded-lg font-semibold bg-[#1a1a1a] border border-[#2d2d2d] 
              hover:bg-[#232323] hover:border-purple-500 hover:shadow-md hover:shadow-purple-900/20 
              transition flex items-center gap-2">
        <i class="fa-solid fa-arrow-left"></i>
        Volver al Dashboard
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
                            class="text-yellow-400 hover:text-yellow-500 transition flex items-center gap-1">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Editar
                            </a>

                            <a href="index.php?view=producto_eliminar&codigo=<?= urlencode($p['codigo']) ?>"
                            onclick="return confirm('¿Eliminar este producto?')"
                            class="text-red-400 hover:text-red-500 transition flex items-center gap-1">
                                <i class="fa-solid fa-trash"></i>
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





