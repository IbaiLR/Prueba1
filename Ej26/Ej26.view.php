<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<ul>";
        $i=0;
    do{
        echo "<li>". $coches[$i] ."</li>";
        $i++;
    }
    while($i<count($coches))  ;
    ?>
</body>
</html>