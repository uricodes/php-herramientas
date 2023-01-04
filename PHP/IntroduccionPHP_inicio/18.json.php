<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Televisión",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor",
        "precio" => 200,
        "disponible" => false 
    ]
];
echo "<br>";
echo("--Arreglo Asociativo");
echo "<br>";
echo "<pre>";
var_dump($productos);
echo "</pre>";
echo "<br>";
echo("--Convertir Arreglo a String - json_encode");
echo "<br>";
echo "<pre>";
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);
echo "</pre>";
echo "<br>";
echo("--Convertir un String a un Arreglo - json_decode");
echo "<br>";
echo "<pre>";
$json_array = json_decode($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';