<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Productos </title>
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

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Tipos de Productos</h1>

    <div class="flex gap-20 mb-6">
        <a href="index.php?view=tipo_crear"
           class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold transition">
           + Crear nuevo tipo
        </a>
        <a href="index.php?view=dashboard"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg font-semibold transition">
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
                        <a href="index.php?view=tipo_editar&id=<?= $row['id'] ?>"
                           class="text-yellow-400 hover:text-yellow-500 transition">Editar</a>
                        <a href="index.php?view=tipo_eliminar&id=<?= $row['id'] ?>"
                           onclick="return confirm('¿Eliminar este tipo?');"
                           class="text-red-400 hover:text-red-500 transition">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>


