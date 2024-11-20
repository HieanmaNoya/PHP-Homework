
<?php

function compare($a, $b) {
    if ($a . $b > $b . $a) {
        return -1;
    } elseif ($a . $b < $b . $a) {
        return 1;
    } else {
        return 0;
    }
}

$input = trim(fgets(STDIN)); // Читаем строку с числами  

$numbers = explode(' ', $input);

usort($numbers, 'compare');

$result = implode('', $numbers);

echo $result;