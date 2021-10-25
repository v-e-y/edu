<?php declare(strict_types=1);

return [
    // Show all errors
    'errors' => require_once('./config/errors.php'),
    // Root to folder with test data
    'data' => __DIR__ . '/data',
    // Functions file root
    'functions' => __DIR__ . '/functions/functions.php'
];