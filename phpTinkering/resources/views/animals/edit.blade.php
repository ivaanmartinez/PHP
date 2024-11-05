
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animals</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Edit animal</h1>
    <form action="/animals-update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($animal->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        <div class="mb-4">
            <label for="Especie" class="block text-gray-700">Especie:</label>
            <input type="text" name="Especie" value="<?= htmlspecialchars($animal->Especie) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="pais" class="block text-gray-700">pais:</label>
            <input type="text" name="pais" value="<?= htmlspecialchars($animal->pais) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="poblacio" class="block text-gray-700">poblacio:</label>
            <input type="text" name="poblacio" value="<?= htmlspecialchars($animal->poblacio) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="amenaca" class="block text-gray-700">amenaca:</label>
            <input type="text" name="amenaca" value="<?= htmlspecialchars($animal->amenaca) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
    <div class="mb-4">
            <label for="estat" class="block text-gray-700">estat:</label>
            <input type="text" name="estat" value="<?= htmlspecialchars($animal->estat) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
    </form>
    <a href="/animals" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>