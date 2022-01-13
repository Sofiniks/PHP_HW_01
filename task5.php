<?php

$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015];
$lamborghini = ["model" => "Urus", "speed" => 280, "doors" => 4, "year" => 2018];
$audi = ["model" => "A6", "speed" => 120, "doors" => 4, "year" => 2008];

$cars = [
    "BMW" => $bmw,
    "Lamborghini" => $lamborghini,
    "Audi" => $audi
];

foreach ( $cars as $key => $value) {
    echo "CAR $key <br>";
    foreach( $value as $carKey => $carValue) {
        echo "$carValue \n";
    }
    echo "<br>";
    echo "<br>";
}