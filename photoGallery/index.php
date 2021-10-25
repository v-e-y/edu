<?php declare(strict_types=1);

// Project configuration
$config = require_once './config/config.php';

// Display errors
$config['errors'];

// Get app functions
require_once $config['functions'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo gallery</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Photo gallery</h1>
        
        <section id="addImg">
            <?php echo getFormAddImg() ?>
        </section>
        <section id="gallery">

        </section>
    </main>
</body>
</html>