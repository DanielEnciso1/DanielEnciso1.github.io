<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesar Formulario</title>
</head>
<body>
    <h1>Gracias por tu participación!</h1>
    <p><a href="mostrar_respuestas.php">Ver respuestas</a></p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = $_POST['nombre'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $correo = $_POST['correo'];
        $juego_favorito = $_POST['juego_favorito'];
        $genero_favorito = $_POST['genero_favorito'];
        $plataforma_favorita = $_POST['plataforma_favorita'];
        $tiempo_juego = $_POST['tiempo_juego'];
        $frecuencia_compra = $_POST['frecuencia_compra'];
        $preferencia_juego = $_POST['preferencia_juego'];
        $dispositivo_juego = $_POST['dispositivo_juego'];
        $compra_dlc = $_POST['compra_dlc'];
        $participacion_comunidad = $_POST['participacion_comunidad'];
        $importancia_historia = $_POST['importancia_historia'];
        $gasto_mensual = $_POST['gasto_mensual'];
        $formato_juego = $_POST['formato_juego'];
        $genero_menos_favorito = $_POST['genero_menos_favorito'];
        $microtransacciones = $_POST['microtransacciones'];
        $juegos_anuales = $_POST['juegos_anuales'];
        $modo_cooperativo = $_POST['modo_cooperativo'];
        $motivacion_compra = $_POST['motivacion_compra'];
        $opinion_mundo_abierto = $_POST['opinion_mundo_abierto'];
        $contenido_dlc = $_POST['contenido_dlc'];
        $aspecto_importante = $_POST['aspecto_importante'];

        $archivo = 'respuestas.txt';
        $contenido = "NOMBRE COMPLETO: $nombre\nFECHA DE NACIMIENTO: $fecha_nacimiento\nCORREO ELECTRONICO: $correo\n\n\n1. Juego Favorito: $juego_favorito\n\n2. Género Favorito: $genero_favorito\n\n3. Plataforma Favorita: $plataforma_favorita\n\n4. Tiempo de juego diario: $tiempo_juego\n\n5. Frecuencia de compra de videojuegos: $frecuencia_compra\n\n6. Juegos solitarios o multijugador?: $preferencia_juego\n\n7. Dispositivo principal para juegos: $dispositivo_juego\n\n8. Compra contenido descargable (DLC) para juegos?: $compra_dlc\n\n9. Participa en comunidades de videojuegos?: $participacion_comunidad\n\n10. Qué tan importante es la historia en un videojuego?: $importancia_historia\n\n11. Gasto mensual en juegos: $gasto_mensual\n\n12. Formato de juego preferido: $formato_juego\n\n13. Género de videojuego menos favorito: $genero_menos_favorito\n\n14. Te atrae los juegos con microtransacciones?: $microtransacciones\n\n15. Juegos completos al año: $juegos_anuales\n\n16. Qué tan seguido juegas en modo cooperativo?: $modo_cooperativo\n\n16. Motivación de compra: $motivacion_compra\n\n18. Opinión sobre juegos de mundo abierto: $opinion_mundo_abierto\n\n19. Qué tipo de contenido adicional valora más en un juego (DLC)?: $contenido_dlc\n\n20. Qué aspecto considera más importante al elegir un juego para comprar?: $aspecto_importante\n\n------------------------------------------------------------------------------------------------------------------------------------\n\n";
        file_put_contents($archivo, $contenido, FILE_APPEND);


        exit();
    }
    ?>
</body>
</html>



