<?php
require __DIR__ . '/autoload.php';

//$user = new App\Models\User();
//echo \App\Models\User::table;
$res = \App\Models\User::findAll();
var_dump($res);
