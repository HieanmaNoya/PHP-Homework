
<?php
function reverseWords($input) {
    $words = explode(' ', $input);

    $reversedWords = array_reverse($words);

    $result = implode(' ', $reversedWords);

    return $result;
}

$inputString = "Неплохой пример строки с словами";
$outputString = reverseWords($inputString);

echo $outputString;