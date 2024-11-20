
<?php

function generateCombinations($elements, $k, $currentCombination = [], $index = 0) {
    if (count($currentCombination) == $k) {
        echo implode(' ', $currentCombination);
        return;    }

    for ($i = $index; $i < count($elements); $i++) {
        $currentCombination[] = $elements[$i];
        generateCombinations($elements, $k, $currentCombination, $i);
        array_pop($currentCombination);
    }
}

$inputElements = trim(fgets(STDIN));
$k = intval(trim(fgets(STDIN)));

$elements = array_map('intval', explode(' ', $inputElements));

generateCombinations($elements, $k);
