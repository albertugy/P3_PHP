<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera pagina PHP</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <p>Cual es la fecha y hora actual?</p>
    <p>la fecha y hora actual es:
    <?php
    echo date ("d.m.Y H:i:s");
    ?>.</p>

</body>
</html>