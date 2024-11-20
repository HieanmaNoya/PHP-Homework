<?php
$code = <<<'CODE'  
%s  
CODE;

printf($code, htmlspecialchars($code));

$items = scandir(__DIR__);
$directories = [];

foreach ($items as $item) {
    if ($item !== '.' && $item !== '..' && is_dir($item)) {
        $directories[] = $item;
    }
}

echo "Список папок:";
foreach ($directories as $directory) {
    echo $directory;
}



printf($code, htmlspecialchars($code));

$items = scandir(__DIR__);
$directories = [];

foreach ($items as $item) {
    if ($item !== '.' && $item !== '..' && is_dir($item)) {
        $directories[] = $item;
    }
}

echo "Список папок:";
foreach ($directories as $directory) {
    echo $directory;
}