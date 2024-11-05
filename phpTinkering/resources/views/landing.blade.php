<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-100 to-green-100 min-h-screen flex flex-col items-center p-8">
<!-- Header Section -->
<header class="bg-gradient-to-r from-blue-500 to-green-500 rounded-lg shadow-md p-4 w-full max-w-lg mb-6">
    <nav class="flex justify-between">
        <a href="/" class="text-lg font-semibold text-white hover:text-gray-200">Inicio</a>
        <a href="/films" class="text-lg font-semibold text-white hover:text-gray-200">Películas</a>
        <a href="/animals" class="text-lg font-semibold text-white hover:text-gray-200">Animales</a>
    </nav>
</header>

<div class="flex items-center justify-center w-full max-w-lg">
    <div class="bg-white rounded-xl shadow-xl overflow-hidden w-full transform transition duration-500 hover:scale-105">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-6">
            <h1 class="text-3xl font-extrabold text-white text-center">¡Bienvenid@!</h1>
            <p class="text-white mt-2 text-center text-sm">Explora nuestras secciones de películas y animales</p>
        </div>

        <!-- Button Section -->
        <div class="p-6 flex flex-col space-y-4">
            <div class="flex space-x-4 justify-center">
                <div class="flex flex-col items-center">
                    <a href="/films" class="flex-1 px-6 py-3 text-lg font-semibold bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 hover:shadow-lg transform transition duration-300 hover:-translate-y-1">Películas 🎬</a>
                    <img src="https://images.pexels.com/photos/33129/popcorn-movie-party-entertainment.jpg" alt="Películas" class="rounded-lg shadow-lg transform hover:scale-105 transition duration-300 mt-2" style="width:200px; height:150px;">
                </div>
                <div class="flex flex-col items-center">
                    <a href="/animals" class="flex-1 px-6 py-3 text-lg font-semibold bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 hover:shadow-lg transform transition duration-300 hover:-translate-y-1">Animales 🐾</a>
                    <img src="https://images.pexels.com/photos/145939/pexels-photo-145939.jpeg" alt="Animales" class="rounded-lg shadow-lg transform hover:scale-105 transition duration-300 mt-2" style="width:200px; height:150px;">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
