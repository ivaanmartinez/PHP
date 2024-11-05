
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animals</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Add New animal</h1>
    <form action="/animals-store" method="POST">
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


        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add animal</button>
    </form>
</div>
</body>
</html>