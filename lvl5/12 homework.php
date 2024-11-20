<?php
$string1 = trim(fgets(STDIN));
$string2 = trim(fgets(STDIN));

function areAnagrams($str1, $str2) {
    $str1 = str_replace(' ', '', strtolower($str1));
    $str2 = str_replace(' ', '', strtolower($str2));

    return count_chars($str1, 1) === count_chars($str2, 1);
}

if (areAnagrams($string1, $string2)) {
    echo "yes";
} else {
    echo "no";