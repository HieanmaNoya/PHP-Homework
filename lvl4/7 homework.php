<?php
$carsSpeeds = [
    85,
    102,
    70
];

$sumOfSpeeds = array_reduce($carsSpeeds, function($carry, $speed) {
    return $carry + $speed;
}, 0);

$averageSpeed = $sumOfSpeeds / (array_keys($carsSpeeds) ? max(array_keys($carsSpeeds)) + 1 : 0);

echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
