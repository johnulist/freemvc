<?php



require_once __DIR__.'/core/App.php';



spl_autoload_register(function($class){


    $class = str_replace('\\', '/', $class);
    print_r($class);
    require_once __DIR__.'/'.$class.'.php';


});




