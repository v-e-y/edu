<?php declare(strict_types=1);
/**
 * Autoload function which auto load classes.
 * For now only Controllers and Models.
 */
spl_autoload_register(function($className){
    $class = require DIR . '\config\classMap.php';
    
    try {
        require_once $class[$className] . $className . '.php';
    } catch (\Throwable $th) {
        // dev
        echo $th;
    }

/*
    // Check as class is controller 
    if (strpos($className, $config['paths']['controllerFolderName']) !== false) {
        $controllerFileName = $className . '.php';
        // Check is file exist
        if (file_exists(__DIR__ . $config['paths']['controllers'] . $controllerFileName)) {
            require_once __DIR__ . $config['paths']['controllers'] . $controllerFileName;
        }
    } else {
        $modelFileName = $className . '.php';
        // Check is file exist
        if (file_exists(__DIR__ . $config['paths']['models'] . $modelFileName)) {
            require_once __DIR__ . $config['paths']['models'] . $modelFileName;
        }
    }
    */
});