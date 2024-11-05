<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-100 to-green-100 p-8">
<header class="bg-gradient-to-r from-blue-500 to-green-500 rounded-lg shadow-md p-4 w-full max-w-lg mb-6 mx-auto">
    <nav class="flex justify-center space-x-10">
        <a href="/" class="text-lg font-semibold text-white hover:text-gray-200">Inicio</a>
        <a href="/films" class="text-lg font-semibold text-white hover:text-gray-200">Películas</a>
        <a href="/animals" class="text-lg font-semibold text-white hover:text-gray-200">Animales</a>
    </nav>
</header>
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4 text-blue-600">Animales</h1>
    <a href="/animals-create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Agregar Nuevo Animal</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-blue-100 text-gray-700 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Especie</th>
            <th class="py-3 px-6 text-left">País</th>
            <th class="py-3 px-6 text-left">Población</th>
            <th class="py-3 px-6 text-center">Amenaza</th>
            <th class="py-3 px-6 text-center">Estado</th>
            <th class="py-3 px-6 text-center">Acciones</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($animals)): ?>
        <tr>
            <td colspan="7" class="py-3 px-6 text-center">No hay animales disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($animals as $animal): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?=$animal['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($animal['Especie']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($animal['pais']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($animal['poblacio']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($animal['amenaca']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($animal['estat']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/animals-edit/<?= $animal['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Editar</a>
                <a href="/animals-delete/<?= $animal['id'] ?>" class="text-red-500 hover:text-red-700 mr-4">Eliminar</a>
                <a href="/animals-show/<?= $animal['id'] ?>" class="text-blue-500 hover:text-blue-700">Mostrar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
