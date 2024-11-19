
<?php


function findMin(float $x, float $y, float $z)
{
    return min($x, $y, $z);
}

$min = findMin(2.5, 10.1, 0);
echo $min;


function sumAndMultiplication (&$X, &$Y){
    $X = $X * 2;
    $Y = $Y * 2;

    return $X + $Y;
}
$a = 2;
$b = 4;
$summ = sumAndMultiplication($a, $b);
echo  $summ;

function getFactorial(int $n)
{
    if ($n == 1) {
        return 1;
    }

    return $n * getFactorial($n - 1);
}

echo getFactorial(4);

function printNumbers($t, $current = 0) {

    if ($current > $t) {
        return;
    }


    echo $current . '<br>';

    printNumbers($t, $current + 1);
}

printNumbers(10);