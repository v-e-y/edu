<?php

// Show regions in array
$regions = [
    'dnipro' => [
        'sityDnOne',
        'sityDnTwo',
        'sityDnThre',
    ],
    'kiyv' => [
        'sityKiOne',
        'sityKiTwo',
        'sityKiThre',
    ],
    'odessa' => [
        'sityOdOne',
        'sityOdTwo',
        'sityOdThre',
    ],
];

//print_r($regions);

echo '<ul class="regions">';
foreach ($regions as $key => $value) {
    echo '<li class="regions-region">' . $key . '</li>';
    if (is_array($value)) {
        echo '<li class="regions-region-sitys">' . '<ul>';
        foreach ($value as $sity) {
            echo '<li class="regions-region-sitys-syty">' . $sity . '</li>';
        }
        echo '</ul>' . '</li>';
    } else {
        break;
    }
}
echo '</ul>';




?>
