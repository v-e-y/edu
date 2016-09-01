<?php
session_start();

// Showed errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Написати простий скрипт авторизації. Без бд та перевірки данних. 
// Реалізувати механиз показу контенту в залежності від авторизації.
// Мета, познайомитись з кукі та сесіями.

// Check forms
function checkTheFormValue($valueArr)
{
    // if $valueArr not false and is array
    if ($valueArr && is_array($valueArr)) {
        foreach ($valueArr as $postValue) {
            // TODO Розібратися з throw new Exception('All fealds should not be ampty'), чому не працює.
            $postValue = !empty($postValue) ? $postValue : false;
        }
        return $valueArr;
    } else {
        // TODO Здаєтся тут щось не так.
        return false;
    }
    
}

function getUserName()
{
    return $_COOKIE['auch'];
}

function userIsAuch()
{
    return isset($_COOKIE['auch']);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <title>Проста авторизація</title>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
        <h1>Hi</h1>
    </header>
    <main class="container">
        <?php if (!userIsAuch()) { ?>
        <section class="well add-user-form">
            <form class="form-inline" action="/add-user.php" role="form" method="post">
                <fieldset>
                    <legend>Add user</legend>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="John" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </fieldset>
            </form>
        </section>
        <?php } else { ?>
        <section class="well well-lg">
            <p> Hi <?php echo getUserName(); ?></p>
            <p><a href="/logout.php" title="" rel="nofollow" role="link">Вийти</a></p>
        </section>
        <?php } ?>
    </main>
    <footer>
        <p>Test footer</p>
    </footer>  
  </body>
</html>




