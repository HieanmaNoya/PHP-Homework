<?php
$input = "1 2 3";
$numbers = explode(' ', $input);

$totalProduct = array_product($numbers);
$result = [];

foreach ($numbers as $number) {
    $result[] = $totalProduct / $number;
}

echo implode(' ', $result);
