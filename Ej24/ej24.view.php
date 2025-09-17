
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="tabla-contactos" border="1">
        <tr> 
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
    <?php foreach ($agenda as $contacto): ?>
            <tr>
                <td> <?= $contacto['nombre']; ?></td>
                <td> <?= $contacto['apellidos']; ?></td>
                <td> <?= $contacto['telefono']; ?></td>
                <td> <?= $contacto['email']; ?></td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>
