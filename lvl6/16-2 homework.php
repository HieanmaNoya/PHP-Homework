
<?php
$input_string = readline("Введите уникальные целые числа, разделенные пробелами: ");

$numbers = explode(" ", $input_string);

$pairs = [];

for ($i = 0; $i < count($numbers); $i++) {
    for ($j = 0; $j < count($numbers); $j++) {
        if ($i != $j) {
            $pairs[] = [$numbers[$i], $numbers[$j]];
        }
    }}

foreach ($pairs as $pair) {
    echo $pair[0] . " " . $pair[1];}