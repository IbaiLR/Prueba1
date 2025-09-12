

    <?php
        function multiplicar($a, $b){
            return $a * $b;
        }
        $resultado = multiplicar($_GET["a"], $_GET["b"]);
        include "ej6.view.php";
    ?>
