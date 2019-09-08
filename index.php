<?php
require __DIR__ . '/autoload.php';

//$user = new App\Models\User();
$res = \App\Models\User::findAll();
var_dump($res);
