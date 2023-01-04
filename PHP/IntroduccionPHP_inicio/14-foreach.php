<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Television",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor",
        "precio" => 200,
        "disponible" => false 
    ]
];
//Añadir php al HTML utilizando foreach
foreach($productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"] ?> </p>
        <p>Precio: <?php echo "$".$producto["precio"] ?> </p>
        <p> <?php echo ($producto["disponible"]) ? 
        "Disponible": "No Disponible"; ?> </p>
    </li>
    <?php
}//Cierre foreach $productos

include 'includes/footer.php';
?>