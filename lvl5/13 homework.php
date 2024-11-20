
<?php
$input = trim(fgets(STDIN));

$numbers = explode(' ', $input);

$counted = array_count_values($numbers);

$duplicates = array_keys(array_filter($counted, function($count) {
    return $count >= 2;
}));

echo implode(' ', $duplicates);