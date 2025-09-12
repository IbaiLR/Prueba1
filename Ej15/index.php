<?php
$diccionario = array(
    "Dani" => array(
        "Apellido" => "Tomicio",
        "Email" => "Dani.Tomicio@gmail.com"
    ),
    "Koldo" => array(
        "Apellido" => "Puertas",
        "Email" => "Koldo.Puertas@gmail.com"
    )
);

function getDatos($diccionario,$nombre,$dato){
    echo "El $dato de $nombre es: " . $diccionario[$nombre][$dato];
}

getDatos($diccionario,"Dani","Email");
echo'<br>';
getDatos($diccionario,"Koldo","Apellido");
?>
