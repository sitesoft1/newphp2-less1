<?php
function my_autoload($class)
{
    //echo $class.'<br />';
    $path = __DIR__.'/'.$class.'.php';
    //echo $path.'<br />';
    require $path;
}
spl_autoload_register('my_autoload');