<?php include "views/admin/header.php"; ?>

<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-purple-400">Editar Categoría</h1>

    <div class="flex gap-6 mb-6">
        <a href="index.php?view=tipos"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
           ← Volver al listado
        </a>
        <a href="index.php?view=dashboard"
           class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
           ← Volver al dashboard
        </a>
    </div>

    <form action="index.php?view=tipo_actualizar" method="POST"
          class="bg-gray-900 p-6 rounded-xl border border-purple-600 max-w-lg mx-auto">

        <input type="hidden" name="id" value="<?= $tipo['id'] ?>">

        <div class="mb-4">
            <label class="block text-white font-semibold mb-1">Nombre de la categoría</label>
            <input type="text" name="nombre" value="<?= $tipo['nombre'] ?>"
                   class="w-full p-2 rounded bg-black border border-gray-700 text-white" required>
        </div>

        <div class="flex justify-end gap-4 mt-6">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold transition">
                Guardar cambios
            </button>
            <a href="index.php?view=tipos"
               class="bg-gray-800 hover:bg-gray-700 px-6 py-3 rounded-lg transition font-semibold">
               Cancelar
            </a>
        </div>

    </form>

</div>

