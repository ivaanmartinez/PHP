<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<section>
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">animal Details</h1>
        <div class="mb-4">
            <label for="title" class="block text-gray-700"><strong>Title: </strong><?= htmlspecialchars($animal->Especie) ?></label>
        </div>
        <div class="mb-4">
            <label for="author" class="block text-gray-700"><strong>Author: </strong><?= htmlspecialchars($animal->pais) ?></label>
        </div>
        <div class="mb-4">
            <label for="created_at" class="block text-gray-700"><strong>Created_at: </strong><?= htmlspecialchars($animal->poblacio) ?></label>
        </div>
        <div class="mb-4">
            <label for="num_pag" class="block text-gray-700"><strong>Num_pag: </strong><?= htmlspecialchars($animal->amenaca) ?></label>
        </div>
    <div class="mb-4">
            <label for="num_pag" class="block text-gray-700"><strong>Num_pag: </strong><?= htmlspecialchars($animal->estat) ?></label>
        </div>
        <a href="/animals" class="text-gray-500 hover:underline mt-4 block">Return</a>
    </div>
</section>
</body>
</html>


