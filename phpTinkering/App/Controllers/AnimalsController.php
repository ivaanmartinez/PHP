<?php

namespace App\Controllers;

use App\Models\Animals;

class AnimalsController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $animals = Animals::getAll();

        //pasem les pelis a la vista
        return view('animals/index', ['animals' => $animals]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('animals/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Animals::create($data);
        //retornar a la vista principal
        header('location: /animals');
        exit;
    }

    //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /animals');
            exit;
        }

        //busquem la peli
        $animal = Animals::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$animal) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('animals/edit', ['animal' => $animal]);
    }

    //funcio update per a modificar la peli a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Animals::update($id, $data);

        //retonem a la pàgina principal
        header('location: /animals');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /animals');
            exit;
        }

        //busquem la peli
        $Animals = Animals::find($id);
        //retornem la vista en la peli
        return view('animals/delete', ['animal' => $Animals]);

    }

    //funcio per eliminar la peli de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Animals::delete($id);

        //retornar a la vista
        header('location: /animals');
    }
    public function show($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /animals');
            exit;
        }

        //busquem la peli
        $animal = Animals::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$animal) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('animals/show', ['animal' => $animal]);
    }

}