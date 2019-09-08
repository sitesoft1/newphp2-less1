<?php


namespace App;


class Db
{
    public $dbh;
   public function __construct(){
       echo 'Hello Db!!!';
       $this->dbh = new \PDO('mysql:host=localhost;dbname=test;', 'root', '');
   }
}