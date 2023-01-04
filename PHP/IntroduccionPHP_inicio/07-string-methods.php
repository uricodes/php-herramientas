<?php include 'includes/header.php';

$nombreCliente = "Uriel Hernandez ";
//Cantidad de texto
echo strlen($nombreCliente);
echo "<br>";
//Cantidad de texto y tipo de Dato
var_dump($nombreCliente);
echo "<br>";  
//Eliminar espacios en blanco
$limpiar = trim($nombreCliente);
echo strlen($limpiar);
echo "<br>";
//Convertir el texto a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";
//Convertir el texto a minusculas
echo strtolower($nombreCliente);
echo "<br>";
//Evitar errores en correo (Datos Duplicados)
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";
var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";
//Sustitir el texto de la variable
echo str_replace("Uriel","Uri",$nombreCliente);
echo "<br>";
//Revisar si un string existe o no
echo strpos($nombreCliente, "Hernandez");
echo "<br>";
//Concatenación
$tipoCliente = "Premium";
echo "El Cliente: ".$nombreCliente." tiene una suscripción: ".$tipoCliente;
echo "<br>";
    //Otra forma de concatenacion
    echo "El Cliente: {$nombreCliente} tiene una suscripción: {$tipoCliente}";
    echo "<br>";
include 'includes/footer.php';