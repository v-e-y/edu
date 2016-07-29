<?php
// Write simple calculator
// $valueArr - it's a array with values from form
function checkTheFormValue($valueArr)
{
    // if $valueArr not false and is array
    if ($valueArr && is_array($valueArr)) {
        foreach ($valueArr as $postValue) {
            // TODO Розібратися з throw new Exception('All fealds should not be ampty'), чому не працює.
            $postValue = !empty($postValue) ? $postValue : false;
        }
    }
    return $valueArr;
}

function doCalc($valueArr)
{
    if ($valueArr) {
        $integerOne = (float)$valueArr['integer-one'];
        $integerTwo = (float)$valueArr['integer-two'];
        $calcOption = $valueArr['calcOption'];
    }

    if ($calcOption = '+') {
        $calcResult = $integerOne + $integerTwo;
    } elseif ($calcOption = '-') {
        $calcResult = $integerOne - $integerTwo;
    } elseif ($calcOption = '/') {
        $calcResult = $integerOne / $integerTwo;
    } elseif ($calcOption = '*') {
        $calcResult = $integerOne * $integerTwo;
    }

    return $calcResult;
}


if (!empty($_POST)) {
    $calcFormValues = checkTheFormValue($_POST);
    $calcResult = doCalc($calcFormValues);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
        <title>Simple calculator</title>
    </head>
    <body>
        <main class="container">
            <div class="well">
                <form class="form-inline" action="/" role="form" method="post">
                    <fieldset>
                        <legend>Simple calculator</legend>
                    </fieldset>
                    <div class="form-group">
                        <input type="number" step="0.01"  class="form-control" name="integer-one" id="integer-one" placeholder="0" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="text" class="form-control" name="calcOption" id="calcOption" placeholder="+ - * /" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="number" step="0.01" class="form-control" name="integer-two" id="integer-two" placeholder="0" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Результат</button>
                </form>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo  $calcResult; ?>
                    </div>
                </div>
            </div>
        </main>
    <body>
</html>
