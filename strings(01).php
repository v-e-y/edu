<?php declare(strict_types=1);

$config = require_once './config.php';
// Show errors
$config['errors'];
// Display pretty view
//echo '<pre>';

/**
 * Создайте функцию которая выводит собственый код, с подсветкой синтаксиса.
 */
function getCodToView () 
{
    $fileData = explode(PHP_EOL, file_get_contents('./strings(01).php'));
    // Index of line where script was begin 
    $firstLineScriptBody = array_search('/**', $fileData);
    // Index where script is end
    $lastLineScript = array_search('}', $fileData) + 1;
    
    // Get script length
    if ($firstLineScriptBody < $lastLineScript) {
        $scriptLength = $lastLineScript - $firstLineScriptBody;
    } else {
        return 'Last line of script less then start line';
    }
    // Get script body
    $script = implode(PHP_EOL, array_slice($fileData, $firstLineScriptBody, $scriptLength));

    return highlight_string('<?php'. PHP_EOL . $script);
}

// echo highlight_file('./strings(01).php', true);
print_r(getCodToView());