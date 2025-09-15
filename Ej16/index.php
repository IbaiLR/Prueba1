<?php 
function operar($n1, $n2) {
    if ($n1 == $n2) {
        return $n1 - $n2;
    } else {
        return $n1 + $n2;
    }
}

$resultado = operar(4, 5);
echo $resultado;
?>
