<?php declare(strict_types=1);

spl_autoload_register(function($className){
    $fileName = $className . '.php';
    if ($className) {
        # code...
    }

    // if file name contains "Controller" 
    // Check file in controller files folder

    // 

});