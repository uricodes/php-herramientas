<?php include 'includes/header.php';

$clientes1 = [];
$clientes2 = array();
$clientes3 = array("Pedro","Juan","Karen");
$cliente = [
    "nombre" => "Uriel",
    "edad" => 23
];
//Empty - Revisa si un arreglo esta vacio(true) o no(false)
var_dump(empty($clientes1));
echo "<br>";
var_dump(empty($clientes3));
echo "<br>";
//Isset - Revisa si un arreglo o propiedad estan creados(true) o no(fasle) 
var_dump(isset($clientes4));
echo "<br>";
var_dump(isset($clientes1));
echo "<br>";
var_dump(isset($clientes2));
echo "<br>";
var_dump(isset($clientes3));
echo "<br>";
//Otro uso con Isset
var_dump(isset($cliente["nombre"]));
echo "<br>";
var_dump(isset($cliente["apellido"]));
echo "<br>";
include 'includes/footer.php';