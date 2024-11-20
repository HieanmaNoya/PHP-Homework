
<?php

$input = "1 2 3 2 1 4 5 3 6";

$numbers = explode(" ", $input);

$unique_numbers = array_unique($numbers);

shuffle($unique_numbers);

$output = implode(" ", $unique_numbers);

echo $output;