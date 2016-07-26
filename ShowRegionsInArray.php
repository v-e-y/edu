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
foreach ($regions as $region => $sitys) {
    echo '<li class="regions-region">' . $region . '</li>';
    if (is_array($sitys)) {
        echo '<li class="regions-region-sitys">' . '<ul>';
        foreach ($sitys as $sity) {
            echo '<li class="regions-region-sitys-syty">' . $sity . '</li>';
        }
        echo '</ul>' . '</li>';
    } else {
        break;
    }
}
echo '</ul>';




?>
