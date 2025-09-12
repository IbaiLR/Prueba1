<?php 
$animales=["gato","perro","mono","pato"
    
];
$colores=["rojo","azul","negro","verde"];

function annadirAnimal($animales,$nombre){
    $animales[]=$nombre;
    return $animales;
}

function annadirColor($colores,$color){
    $colores[]=$color;
    return $colores;
}
$animales=annadirAnimal($animales, "gorila");//
$colores=annadirColor($colores, "amarillo");//
//se pone asi porque si no no se reasigna el valor

$combinado=array_merge($animales,$colores);

?>