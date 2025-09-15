<?php 

$usuarios =[
    "user1"=>[
        "nombre"=>"medina",
        "contraseña"=>"medina1234"
           ]
    ];


function validarUsuario($usuarios){
    $usuario= $_GET['usuario'];
    $contraseña= $_GET['contraseña'];
    
if (!array_key_exists($usuario, $usuarios)) {
        echo "Usuario no encontrado";
        return; // Detener ejecución si el usuario no existe
    }

    // Validar la contraseña
    if ($usuarios[$usuario]['contraseña'] === $contraseña) {
        echo "Bienvenido, {$usuarios[$usuario]['nombre']}!";
    } else {
        echo "Contraseña incorrecta";
    }
}


validarUsuario($usuarios);
?>