
<?php
//function valueCount($array, $value) {  
//    $result = 0;  
//    foreach($array as $temp) {  
//        if($temp == $value) {  
//            $result++;  
//        }  
//    }  
//    echo "value found {$result} times";  
//}  
//  
//$exampleArr = [1, 2, 1, 3];  
//  
//valueCount($exampleArr, 1);  
//  
//  
//function valueCount($array, $value) {  
//    $result = 0;  
//    foreach($array as $item) {  
//        if($item == $value) {  
//            $result++;  
//        }  
//    }  
//    return $result;  
//}  
//  
//$exampleArr = [1, 2, 1, 3];  
//  
//echo "value found ". valueCount($exampleArr, 1) ." times";  


function findEvenNumbers($input)
{
    $numbers = explode(' ', $input);

    $evenNumbers = [];

    foreach ($numbers as $number) {
        if (is_numeric($number) && $number % 2 == 0) {
            $evenNumbers[] = $number;
        }
    }
    return implode(' ', $evenNumbers);
}

$inputString = "1 2 3 4 5 6 7 8 9 10";
$outputString = findEvenNumbers($inputString);

echo $outputString;

function fibonacci($n) {
    $fibonacciNumbers = [];

    $fibonacciNumbers[0] = 0;
    if ($n > 1) {
        $fibonacciNumbers[1] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciNumbers[$i] = $fibonacciNumbers[$i - 1] + $fibonacciNumbers[$i - 2];
    }

    return $fibonacciNumbers;
}

$n = 10;
$fibonacciSequence = fibonacci($n);

echo "Первые $n чисел Фибоначчи: " . implode(', ', $fibonacciSequence);