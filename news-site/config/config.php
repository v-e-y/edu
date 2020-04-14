<?php declare(strict_types=1);

return [
    "appStatus" => 'debug',
    'paths' => [
        // TODO refactor this
        'modelsFolderName' => 'src',
        'controllerFolderName' => 'Controller',
        'models' => DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR,
        'controllers' => DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR
    ],
    'db' => [
        'host' => 'vey.mysql.tools',
        'name' => 'vey_gcard',
        'user' => 'vey_gcard',
        'password' => 'whntxudc'
    ]
];