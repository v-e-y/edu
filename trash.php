<?php declare(strict_types=1);

// echo count([]);

/*
// test static var in function
function staticVarAtFunc ()
{
    static $counter = 0;
    return ++$counter;
}
*/

print_r($_POST);

?>



<form method="post">
	<input type="text" name="one" value="1" />
	<input type="text" name="one" value="2" />
	<input type="text" name="one" value="3" />

	<input type="submit" value="Send" />	
</form>