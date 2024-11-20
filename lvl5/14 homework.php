
<?php
$input = "1 2 3 2 3 2 4 5 5 5 5";
$numbers = explode(' ', $input);

$frequency = array_count_values($numbers);
$mostFrequentNumber = array_search(max($frequency), $frequency);

echo "Наиболее часто встречающееся число: " . $mostFrequentNumber;