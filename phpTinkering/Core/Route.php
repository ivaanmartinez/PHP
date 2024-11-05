<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;
use App\Controllers\FilmController;
use App\Controllers\AnimalsController;

class Route
{
    // Array per emmagatzemar rutes
    protected $routes = [];

    // Funció per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    // Funció per definir les rutes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    // Funció per redirigir la URL sol·licitada a un controlador
    public function redirect($uri)
    {
        // Partim la URL
        $parts = explode('/', trim($uri, '/'));

        // Rutes per a les pel·lícules amb FilmController
        $controller = 'App\Controllers\FilmController';
        $animalsController = 'App\Controllers\AnimalsController';

        // Inici
        if ($uri === '/') {
            return view('landing');
        }

        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        // Crear una pel·lícula
        if ($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        }

        // Guardar una pel·lícula (POST)
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // Eliminar una pel·lícula (GET)
        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        }

        // Destruir una pel·lícula (POST)
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Editar una pel·lícula (GET)
        if ($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitzar una pel·lícula (POST)
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }
        if($parts[0] === 'film-show' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->show($parts[1]);
        }

        //animals
        if ($uri === '/animals') {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            return $controllerInstance->index();
        }

        // Crear una pel·lícula
        if ($parts[0] === 'animals-create') {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            return $controllerInstance->create();
        }

        // Guardar una pel·lícula (POST)
        if ($parts[0] === 'animals-store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // Eliminar una pel·lícula (GET)
        if ($parts[0] === 'animals-delete' && $parts[1]) {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            return $controllerInstance->delete($parts[1]);
        }

        // Destruir una pel·lícula (POST)
        if ($parts[0] === 'animals-destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Editar una pel·lícula (GET)
        if ($parts[0] === 'animals-edit' && $parts[1]) {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitzar una pel·lícula (POST)
        if ($parts[0] === 'animals-update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/AnimalsController.php';
            $controllerInstance = new $animalsController();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }
        if($parts[0] === 'animals-show' && $parts[1]) {
            require '../App/Controllers/AnimalsController.php';
            //creem nova instancia
            $controllerInstance = new $animalsController();
            return $controllerInstance->show($parts[1]);
        }
    }
}