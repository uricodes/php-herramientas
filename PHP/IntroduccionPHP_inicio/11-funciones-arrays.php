<?php include 'includes/header.php';

//in_array - Buscar elementos en un arreglo
$carrito = ["Tablet","Computadora","Televisión"];
var_dump(in_array("Tablet",$carrito));
echo "<br>";
var_dump(in_array("Audifonos",$carrito));
echo "<br>";
echo "<br>";
//Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,9,7);
echo ("De Menor a Mayor");
sort($numeros); //De Menor a Mayor
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<br>";

echo ("De Mayor a Menor");
rsort($numeros);//De Mayor a Menor
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<br>";

//Ordenar Arreglo Asociativo
$cliente = array(
    "saldo" => 200,
    "tipo" => "Premium",
    "nombre" => "Esmeralda"
);    
    //Orden por los valores y orden alfabetico
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";
    //Ordena por las llaves y orden alfabetico
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";
    //Ordena por las llaves y orden alfabetico INVERTIDO
krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";
  //Ordena por los valores y orden alfabetico INVERTIDO
arsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";
include 'includes/footer.php';