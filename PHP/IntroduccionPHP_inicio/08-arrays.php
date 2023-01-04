<?php include 'includes/header.php';

//Arreglos Indexados

//Ver el contenido de un Array
$carrito = ["Tablet", "Televisión", "Computadora"];
echo "<pre>";
var_dump($carrito);
echo "<pre>";
echo "<br>";
//Acceder a un elemento del Array
echo $carrito[0];
echo "<br>";
//Agregar un elemento al Array
$carrito[3] = "Celular";
echo "<pre>";
var_dump($carrito);
echo "<pre>";
echo "<br>";
//Añadir un elemento nuevo al final del Array o el elemento siguiente de la lista
array_push($carrito, "Audifonos");
echo "<pre>";
var_dump($carrito);
echo "<pre>";
echo "<br>";
//Añadir al inicio
array_unshift($carrito, "Smartwatch");
echo "<pre>";
var_dump($carrito);
echo "<pre>";
echo "<br>";
//Otra forma de crear arreglos
$clientes = array("Cliente1", "Cliente2","Cliente3");
echo "<pre>";
var_dump($clientes);
echo "<pre>";
echo "<br>";
    //Acceder al arreglo
    echo $clientes[1];
    echo "<br>";
include 'includes/footer.php';