<?php
session_start();
require_once 'settings/config.php';
// Showed errors
require_once 'show-errors.php';

// TODO
// Написати просту фотогалерею
// В окремій папці повинні бути декілька зображень
// Cкрипт повинен прочитати зображення з папки та вивести їх на екран
// Також повинна бути форма додавання зображень

// План
// index.php - вивести зображення та форму для додавання зображень.
// Show-images.php - код який відповідає за відображення зображень.
// add-image.php - скріпт додавання зображеня

$images = require_once 'show-images.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <title>Фото галерея</title>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
        
    </header>
    <main class="container">
        <section class="well well-lg imgs-galery">
            <div class="row">
                <?php foreach ($images as $image) { ?>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo '/img/' . $image; ?>" class="img-responsive" alt="">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section class="well add-user-form">
            <form class="form-horizontal" enctype="multipart/form-data" action="/add-image.php" role="form" method="post">
                <fieldset>
                    <legend>Add image</legend>
                    <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
                        <label for="add-image" class="col-sm-3 control-label">Додайте ваше зображення</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="add-image" id="add-image" accept="image/*" aria-describedby="helpBlock" required>
                            <span id="helpBlock" class="help-block">Максимальний розмір файлу 3 mb.</span>
                        </div>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer class="container">
        <p>Test footer</p>
    </footer>  
  </body>
</html>




