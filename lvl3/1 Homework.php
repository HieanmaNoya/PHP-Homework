<?php
<?php
$a = 3;
$b = 5;


echo "Начальные значения: a = $a, b = $b\n";


$c = $a;
$a = $b
$b = $c;


echo "После обмена: a = $a, b = $b\n";

<?php
$a = 3;
$b = 5;


echo "Начальные значения: a = $a, b = $b\n";


$a = $a + $b;
$b = $a - $b;
$a = $a - $b;


echo "После обмена: a = $a, b = $b\n";