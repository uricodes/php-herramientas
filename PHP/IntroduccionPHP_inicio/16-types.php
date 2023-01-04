<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string{
    if($autenticado){
        return("Usuario Autenticado");
    }else{
        return("Usuario No Autenticado");
    }
}
$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';