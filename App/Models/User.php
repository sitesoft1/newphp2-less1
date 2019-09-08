<?php


namespace App\Models;
use App\Db;

class User
{
   
    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM persons',
            'App\Models\User'
        );
    }
}