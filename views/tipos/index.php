<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Productos </title>
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

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Tipos de Productos</h1>

    <!-- BOTONES AGREGAR Y VOLVER -->
    <div class="flex gap-20 mb-6">

    <a href="index.php?view=tipo_crear"
    class="px-7 py-3 rounded-xl font-semibold bg-purple-600 hover:bg-purple-700
            border border-purple-500/50 shadow-lg shadow-purple-900/20
            hover:shadow-purple-800/40 transition-all flex items-center gap-3">
        <i class="fa-solid fa-list text-lg"></i>
        Crear nueva Categoria
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

    <div class="bg-gray-900 p-6 rounded-xl border border-purple-600">
        <table class="w-full text-left">
            <thead>
                <tr class="text-purple-400">
                    <th class="py-2">ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tipos as $row): ?>
                <tr class="border-b border-gray-700">
                    <td class="py-2"><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['descripcion'] ?></td>
                    <td class="flex gap-3 py-2">
                    <a href="index.php?view=tipo_editar&id=<?= urlencode($row['id']) ?>"
                        class="text-yellow-400 hover:text-yellow-500 transition flex items-center gap-1">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Editar
                    </a>

                    <a href="index.php?view=tipo_eliminar&id=<?= urlencode($row['id']) ?>"
                        onclick="return confirm('¿Eliminar esta categoría?')"
                        class="text-red-400 hover:text-red-500 transition flex items-center gap-1">
                        <i class="fa-solid fa-trash"></i>
                        Eliminar
                    </a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>


