<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <h2>Musicos</h2>
    <?php foreach($musicos as $musico){
       echo "<li>". $musico."</li>" ;
    }
        ?>
    </ul>
</body>
</html>