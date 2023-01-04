<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Uriel",
    "saldo" => 400,
    "informacion" => [
        "tipo" => "premium",
        "disponible" => 100
    ]
];
//Llamada a php en pantalla
echo "<pre>";
var_dump($cliente);
echo "<pre>";
echo "<br>";
//Buscar propiedad en el arreglo
echo $cliente["nombre"];
echo "<br>";
echo $cliente["saldo"];
echo "<br>";
echo $cliente["informacion"]["disponible"];
//Ingresar una nueva propiedad en el arreglo
$cliente ["codigo"] = 12345678900;
echo "<pre>";
var_dump($cliente);
echo "<pre>";
echo "<br>";
include 'includes/footer.php';