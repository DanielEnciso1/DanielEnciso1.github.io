<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuestas de los Usuarios</title>
</head>
<body style="margin-left:10%; margin-right:10%">
    <h1>Respuestas de los Usuarios</h1>
    <hr>
    <br>
    <?php

    $archivo = 'respuestas.txt';
    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        echo nl2br($contenido);
    } else {
        echo "<p>No hay respuestas aún.</p>";
    }
    ?>
    <p><a href="formulario.php">Volver al formulario</a></p>
</body>
</html>
