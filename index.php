<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fecha</title>
    </head>
    <body>
        <p>
        <?php
            include ('fecha.php');
            $fecha = new Fecha();
            echo $fecha->mostrarFecha("18/02/2024");
        ?>
        </p>
        
    </body>
</html>