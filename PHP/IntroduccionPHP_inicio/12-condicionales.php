<?php include 'includes/header.php';

//If común
echo("--If Común");
echo"<br>";
$autenticado = true;
$admin = false;
if($autenticado == true || $admin == true){
    echo("Usuario Autenticado");
}else{
    echo("Usuario NO Autenticado, Inicia Sesión");
}
echo"<br>";
//If Anidado
echo("--If Anidado");
echo"<br>";
$cliente = [
    "nombre" => "Uriel",
    "saldo" => 0,
    "informacion" => [
        "tipo" => "Premium"
    ]
];
if(!empty($cliente)){
    echo("El arreglo NO esta vacio");
    echo"<br>";
    if($cliente["saldo"] > 0){
        echo("El cliente tiene saldo disponible");
    }else{
        echo("El cliente NO tiene saldo");
        echo"<br>";
    }
}
//Else IF
echo("--Else If");
echo"<br>";
if($cliente["saldo"] > 0){
    echo"<br>";
    echo("El cliente tiene saldo");
}elseif($cliente["informacion"]["tipo"] === "Premium"){
    echo("El cliente es Premium - Dejar Pasar");
}else{
    echo("Es un Impostor");
}
echo"<br>";
//Switch
echo("--Switch");
echo"<br>";
$tecnologia = "JavaScript";
switch($tecnologia){
    case "PHP":
        echo("PHP el mejor lenguaje.");
        break;
    case "JavaScript":
        echo("JavaScript, el lenguaje de la web.");
        break;
    case "HTML":
        echo("HTML (Para mi si es un lenguaje).");
        break;
        default:
}
include 'includes/footer.php';