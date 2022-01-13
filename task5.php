<?php

$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015];
$lamborghini = ["model" => "Urus", "speed" => 280, "doors" => 4, "year" => 2018];
$audi = ["model" => "A6", "speed" => 120, "doors" => 4, "year" => 2008];

$cars = [
    "CAR BMW" => $bmw,
    "CAR Lamborghini" => $lamborghini,
    "CAR Audi" => $audi
];

foreach ( $cars as $key => $value) {
    echo "$key <br>";
    foreach( $value as $carKey => $carValue) {
        echo "$carValue \n";
    }
    echo "<br>";
    echo "<br>";
}