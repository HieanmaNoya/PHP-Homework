
<?php
$input = trim(fgets(STDIN));

$numbers = array_map('intval', explode(' ', $input));

if (count($numbers) < 2) {
    echo "Недостаточно чисел для вычисления произведения";

}

$max1 = $max2 = PHP_INT_MIN;

foreach ($numbers as $number) {
    if ($number > $max1) {
        $max2 = $max1;
        $max1 = $number;
    } elseif ($number > $max2) {
        $max2 = $number;
    }
}

$maxProduct = $max1 * $max2;

echo $maxProduct;