// Create simply auch
<?php
session_start();
$_SESSION['status'] = '';

// Showed errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "settings/config.php";
require_once "settings/settings.php";
require_once 'users.php';
require_once 'authorization.php';

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

if ($_POST) {
    $authorizationFormValues = checkTheFormValue($_POST);
    if ($authorizationFormValues) {
        $userId = session_id();

        $auchResalt = userAuthentication($users, $userId, $authorizationFormValues);
    }

    if ($auchResalt) {
        echo '<hr>' . $auchResalt . '<hr>';
        //var_dump($users);
    }
    
}
$test = [
    '0' => [
    'name' => 'Eduard',
    'soname' => 'Vusha',
    ],
];

echo '<br><hr>' . $test[0]['name'] . '<hr><br>';




?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <title>Проста авторизація</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hi 
        <?php if (isAuthorized()) {
            echo $users[0]['email'];
        } else {
            echo 'guest';
        }?>
    </h1>
    <main class="container">
        <?php if (!isAuthorized()) { ?>
            <div class="well">
                <form class="form-inline" action="/" role="form" method="post">
                    <fieldset>
                        <legend>Add user</legend>
                    </fieldset>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="John" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="myemail@exemple.com" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        <?php } else { ?>
            <div class="panel panel-default">
                <div class="panel-bodi">
                    <p>
                        <?php echo '<strong>you email</strong> ' . $users[0][0]['id']; ?>
                    </p>
                    <p>
                        <?php echo '<strong>you pass</strong> ' . $users[0]['email']; ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </main>
<?php
if ($users) {
    foreach ($users as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
} else {
    echo 'Error';
}

?>
    
  </body>
</html>


