<?php

namespace App\Models;

use Core\App;

class Animals
{
    protected static $table = 'Animals';

    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

 public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . "(Especie, pais, poblacio, amenaca, estat) VALUES (:Especie, :pais, :poblacio, :amenaca, :estat)");
        $statement->bindValue(':Especie', $data['Especie']);
        $statement->bindValue(':pais', $data['pais']);
        $statement->bindValue(':poblacio', $data['poblacio']);
        $statement->bindValue(':amenaca', $data['amenaca']);
        $statement->bindValue(':estat', $data['estat']);
        $statement->execute();

    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET Especie = :Especie, pais = :pais, poblacio = :poblacio, amenaca = :amenaca, estat = :estat WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':Especie', $data['Especie']);
        $statement->bindValue(':pais', $data['pais']);
        $statement->bindValue(':poblacio', $data['poblacio']);
        $statement->bindValue(':amenaca', $data['amenaca']);
        $statement->bindValue(':estat', $data['estat']);
        $statement->execute();
    }
    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}