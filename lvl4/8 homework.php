
<?php
$evenNumbers = [];

$i = 345;

while ($i <= 357) {
    if ($i % 2 == 0) {
        $evenNumbers[] = $i;
    }
    $i++;
}

foreach ($evenNumbers as $number) {
    echo $number . '<br>';
}