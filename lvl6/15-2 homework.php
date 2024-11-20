
<?php
$input = "1 6 4 3";
$numbers = explode(' ', $input);

$maxDifference = 0;
$maxValue = $numbers[0];

foreach ($numbers as $number) {

    if ($number < $maxValue) {
        $difference = $maxValue - $number;
        if ($difference > $maxDifference) {
            $maxDifference = $difference;
        }
    } else {

        $maxValue = $number;
    }
}

echo $maxDifference;
