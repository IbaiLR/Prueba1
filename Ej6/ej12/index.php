<?php 

$ciudades = ["Paris","Berlin","Amsterdam","Praga"];

function getValor($ciudades, $posicion){
return $ciudades[$posicion];
}
$valor1=getValor($ciudades,2);

function setValor($ciudades, $posicion, $ciudad){
    $ciudades[$posicion]=$ciudad;
    return $ciudades;
}
$valor2=setValor($ciudades,4,"Vitoria");

for ($i=0; $i <=$count($ciudades); $i++) { 
    
}
include "ej12.view.php";
?>