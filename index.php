<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost/formulario.php -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Formulario de Videojuegos</title>
    <link href="./Formulario de Videojuegos_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .pregunta {
        font-size: 130%;
    }
    .radiobtn {
        font-size: 100%;
        margin-top: 0.3%;
    }
    input{
            border-radius: 8px; /* Define el radio de los bordes */
            padding: 8px; /* Añade un poco de espacio interno para que el texto no esté pegado al borde */
            border: 1px solid #ccc; /* Define un borde de 1px sólido con un color gris claro */
            outline: none; /* Quita el contorno al hacer clic */
        }

    form {
        background-image: linear-gradient(to top, rgba(255,255,224,0) 87%, rgba(255,255,224,0) 10%, #add8e6 95%), url(fondo-form.jpg);
        background-size: cover;
        background-position: center;
        border-radius: 20px; 
        border: 3px solid black;
        padding: 5px;
    }

    footer{
        background-color:black;
    }

    label{
        font-weight: bold;
        text-decoration: blur;
    }
</style></head>

<body style="font-family: &#39;Lucida Sans&#39;, &#39;Lucida Sans Regular&#39;, &#39;Lucida Grande&#39;, &#39;Lucida Sans Unicode&#39;, Geneva, Verdana, sans-serif;background-color: black">
    <form style="margin-left: 5%; margin-right: 5%; margin-top:1%;background-color: lightblue" action="procesar.html" method="post">
    <header style="padding: 20px;">
        <h1 style="text-align: center; font-weight:bold;text-decoration: underline;">Formulario de Videojuegos</h1>
        <div style="display:flex">
            <div>
                <div style="width: 222px; height: 51px; align-items: center; display:grid">
                    <label for="nombre" style="font-weight: bold; font-size: 150%;">Nombre completo:</label>
                </div>        
                <div style="width: 222px; height: 65px; align-items: center; display:grid">
                    <label for="fecha_nacimiento" style="font-weight: bold; font-size: 150%;">Fecha nacimiento:</label>
                </div>
                <div style="width: 225px; height: 51px; align-items: center; display:grid">            
                    <label for="correo" style="font-weight: bold; font-size: 150%;">Correo electrónico:</label>
                </div>
            </div>
            
            <div>
                <div>
                    <input style="margin-bottom: 6px; font-size: 140%;padding-right:40px" placeholder="Nombre Apellido" type="text" id="nombre" name="nombre" required="">
                </div>
                <div>
                    <input style="margin-bottom: 6px; font-size: 140%;padding-right:140px" placeholder="01-01-2000" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required="">            
                </div>
                <div>                
                    <input style="margin-bottom: 6px; font-size: 140%;padding-right:40px" placeholder="correo@mail.com" type="email" id="correo" name="correo" required="">
                </div>         
            </div>
        </div>
        <hr>
    </header>


        <label class="pregunta" for="juego_favorito">1. Juego Favorito:</label><br>
        <select class="radiobtn" id="juego_favorito" name="juego_favorito" required="">
            <option value="">Selecciona tu juego favorito</option>
            <option value="Among Us">Among Us</option>
            <option value="Animal Crossing">Animal Crossing</option>
            <option value="Apex Legends">Apex Legends</option>
            <option value="Assassin&#39;s Creed">Assassin's Creed</option>
            <option value="Call of Duty">Call of Duty</option>
            <option value="Control">Control</option>
            <option value="Counter-Strike 2">Counter-Strike 2</option>
            <option value="Cyberpunk">Cyberpunk</option>
            <option value="Death Stranding">Death Stranding</option>
            <option value="Doom Eternal">Doom Eternal</option>
            <option value="FIFA">FIFA</option>
            <option value="Final Fantasy">Final Fantasy</option>
            <option value="Fortnite">Fortnite</option>
            <option value="Genshin Impact">Genshin Impact</option>
            <option value="Ghost of Tsushima">Ghost of Tsushima</option>
            <option value="Hades">Hades</option>
            <option value="League of Legends">League of Legends</option>
            <option value="Lethal Company">Lethal Company</option>
            <option value="Minecraft">Minecraft</option>
            <option value="Marvel&#39;s Spider-Man">Marvel's Spider-Man</option>
            <option value="Mortal Kombat">Mortal Kombat</option>
            <option value="NBA 2K2X">NBA 2K2X</option>
            <option value="Persona 5">Persona 5</option>
            <option value="Red Dead Redemption 2">Red Dead Redemption 2</option>
            <option value="Resident Evil">Resident Evil</option>
            <option value="Roblox">Roblox</option>
            <option value="Sekiro: Shadows Die Twice">Sekiro: Shadows Die Twice</option>
            <option value="Super Mario Odyssey">Super Mario Odyssey</option>
            <option value="The Last of Us">The Last of Us</option>
            <option value="The Legend of Zelda: Breath of the Wild">The Legend of Zelda: Breath of the Wild</option>
            <option value="The Outer Worlds">The Outer Worlds</option>
            <option value="The Witcher 3: Wild Hunt">The Witcher 3: Wild Hunt</option>
            <option value="Valorant">Valorant</option>
            <option value="XDefiant">XDefiant</option>
        </select><br><br>
        
        <label class="pregunta">2. Género Favorito:</label><br>
        <input type="radio" id="accion" name="genero_favorito" value="Acción" required="">
        <label class="radiobtn" for="accion">Acción</label><br>
        <input type="radio" id="aventura" name="genero_favorito" value="Aventura" required="">
        <label class="radiobtn" for="aventura">Aventura</label><br>
        <input type="radio" id="deportes" name="genero_favorito" value="Deportes">
        <label class="radiobtn" for="deportes">Deportes</label><br>
        <input type="radio" id="estrategia" name="genero_favorito" value="Estrategia">
        <label class="radiobtn" for="estrategia">Estrategia</label><br>
        <input type="radio" id="rol" name="genero_favorito" value="Rol">
        <label class="radiobtn" for="rol">Rol</label><br>
        <input type="radio" id="simulacion" name="genero_favorito" value="Simulación">
        <label class="radiobtn" for="simulacion">Simulación</label><br>
        <input type="radio" id="terror" name="genero_favorito" value="Terror">
        <label class="radiobtn" for="terror">Terror</label><br>
        <input type="radio" id="puzzle" name="genero_favorito" value="Puzzle">
        <label class="radiobtn" for="puzzle">Puzzle</label><br><br>
        
        <label class="pregunta">3. Plataforma Preferida:</label><br>
        <input type="radio" id="pc" name="plataforma_favorita" value="PC" required="">
        <label class="radiobtn" for="pc">PC</label><br>
        <input type="radio" id="playstation" name="plataforma_favorita" value="PlayStation">
        <label class="radiobtn" for="playstation">PlayStation</label><br>
        <input type="radio" id="xbox" name="plataforma_favorita" value="Xbox">
        <label class="radiobtn" for="xbox">Xbox</label><br>
        <input type="radio" id="nintendo" name="plataforma_favorita" value="Nintendo">
        <label class="radiobtn" for="nintendo">Nintendo</label><br>
        <input type="radio" id="movil" name="plataforma_favorita" value="Móvil">
        <label class="radiobtn" for="movil">Móvil</label><br><br>

        <label class="pregunta">4. ¿Cuánto tiempo dedicas a jugar videojuegos diariamente?</label><br>
        <input type="radio" id="1-2horas" name="tiempo_juego" value="1-2 horas" required="">
        <label class="radiobtn" for="1-2horas">1-2 horas</label><br>
        <input type="radio" id="3-5horas" name="tiempo_juego" value="3-5 horas">
        <label class="radiobtn" for="3-5horas">3-5 horas</label><br>
        <input type="radio" id="6-8horas" name="tiempo_juego" value="6-8 horas">
        <label class="radiobtn" for="6-8horas">6-8 horas</label><br>
        <input type="radio" id="masde8horas" name="tiempo_juego" value="Más de 8 horas">
        <label class="radiobtn" for="masde8horas">Más de 8 horas</label><br><br>
        
        <label class="pregunta">5. ¿Con qué frecuencia compras videojuegos?</label><br>
        <input type="radio" id="semanalmente" name="frecuencia_compra" value="Semanalmente" required="">
        <label class="radiobtn" for="semanalmente">Semanalmente</label><br>
        <input type="radio" id="mensualmente" name="frecuencia_compra" value="Mensualmente">
        <label class="radiobtn" for="mensualmente">Mensualmente</label><br>
        <input type="radio" id="anualmente" name="frecuencia_compra" value="Anualmente">
        <label class="radiobtn" for="anualmente">Anualmente</label><br>
        <input type="radio" id="raravez" name="frecuencia_compra" value="Rara vez">
        <label class="radiobtn" for="raravez">Rara vez</label><br><br>

        <label class="pregunta">6. ¿Prefieres juegos en solitario o multijugador?</label><br>
        <input type="radio" id="solitario" name="preferencia_juego" value="Solitario" required="">
        <label class="radiobtn" for="solitario">Solitario</label><br>
        <input type="radio" id="multijugador" name="preferencia_juego" value="Multijugador">
        <label class="radiobtn" for="multijugador">Multijugador</label><br>
        <input type="radio" id="ambos" name="preferencia_juego" value="Ambos">
        <label class="radiobtn" for="ambos">Ambos</label><br><br>

        <label class="pregunta">7. ¿Qué dispositivo usas principalmente para jugar?</label><br>
        <input type="radio" id="pc_dispositivo" name="dispositivo_juego" value="PC" required="">
        <label class="radiobtn" for="pc_dispositivo">PC</label><br>
        <input type="radio" id="consola_dispositivo" name="dispositivo_juego" value="Consola">
        <label class="radiobtn" for="consola_dispositivo">Consola</label><br>
        <input type="radio" id="movil_dispositivo" name="dispositivo_juego" value="Móvil">
        <label class="radiobtn" for="movil_dispositivo">Móvil</label><br>
        <input type="radio" id="tablet_dispositivo" name="dispositivo_juego" value="Tablet">
        <label class="radiobtn" for="tablet_dispositivo">Tablet</label><br><br>

        <label class="pregunta">8. ¿Compras contenido descargable (DLC) para tus juegos?</label><br>
        <input type="radio" id="si_dlc" name="compra_dlc" value="Sí" required="">
        <label class="radiobtn" for="si_dlc">Sí</label><br>
        <input type="radio" id="no_dlc" name="compra_dlc" value="No">
        <label class="radiobtn" for="no_dlc">No</label><br><br>

        <label class="pregunta">9. ¿Participas en comunidades en línea de videojuegos?</label><br>
        <input type="radio" id="si_comunidad" name="participacion_comunidad" value="Sí" required="">
        <label class="radiobtn" for="si_comunidad">Sí</label><br>
        <input type="radio" id="no_comunidad" name="participacion_comunidad" value="No">
        <label class="radiobtn" for="no_comunidad">No</label><br><br>

        <label class="pregunta">10. ¿Qué tan importante es la historia en un videojuego para ti?</label><br>
        <input type="radio" id="muy_importante" name="importancia_historia" value="Muy importante" required="">
        <label class="radiobtn" for="muy_importante">Muy importante</label><br>
        <input type="radio" id="importante" name="importancia_historia" value="Importante">
        <label class="radiobtn" for="importante">Importante</label><br>
        <input type="radio" id="indiferente" name="importancia_historia" value="Indiferente">
        <label class="radiobtn" for="indiferente">Indiferente</label><br>
        <input type="radio" id="poco_importante" name="importancia_historia" value="Poco importante">
        <label class="radiobtn" for="poco_importante">Poco importante</label><br><br>

        <label class="pregunta">11. ¿Cuánto dinero gastas en videojuegos al mes?</label><br>
        <input type="radio" id="menos_10" name="gasto_mensual" value="S/Menos de 10" required="">
        <label class="radiobtn" for="menos_10">Menos de S/10</label><br>
        <input type="radio" id="11-50" name="gasto_mensual" value="S/10-30">
        <label class="radiobtn" for="11-50">S/11-50</label><br>
        <input type="radio" id="51-100" name="gasto_mensual" value="S/30-50">
        <label class="radiobtn" for="51-100">S/51-100</label><br>
        <input type="radio" id="mas_100" name="gasto_mensual" value="Más de S/100">
        <label class="radiobtn" for="mas_100">Más de S/100</label><br><br>

        <label class="pregunta">12. ¿Prefieres comprar juegos en formato físico o digital?</label><br>
        <input type="radio" id="fisico" name="formato_juego" value="Físico" required="">
        <label class="radiobtn" for="fisico">Físico</label><br>
        <input type="radio" id="digital" name="formato_juego" value="Digital">
        <label class="radiobtn" for="digital">Digital</label><br><br>

        <label class="pregunta">13. ¿Qué género de juegos te gusta menos?</label><br>
        <input type="radio" id="accion_menos" name="genero_menos_favorito" value="Acción" required="">
        <label class="radiobtn" for="accion_menos">Acción</label><br>
        <input type="radio" id="aventura_menos" name="genero_menos_favorito" value="Aventura">
        <label class="radiobtn" for="aventura_menos">Aventura</label><br>
        <input type="radio" id="deportes_menos" name="genero_menos_favorito" value="Deportes">
        <label class="radiobtn" for="deportes_menos">Deportes</label><br>
        <input type="radio" id="estrategia_menos" name="genero_menos_favorito" value="Estrategia">
        <label class="radiobtn" for="estrategia_menos">Estrategia</label><br>
        <input type="radio" id="rol_menos" name="genero_menos_favorito" value="Rol">
        <label class="radiobtn" for="rol_menos">Rol</label><br>
        <input type="radio" id="simulacion_menos" name="genero_menos_favorito" value="Simulación">
        <label class="radiobtn" for="simulacion_menos">Simulación</label><br>
        <input type="radio" id="terror_menos" name="genero_menos_favorito" value="Terror">
        <label class="radiobtn" for="terror_menos">Terror</label><br>
        <input type="radio" id="puzzle_menos" name="genero_menos_favorito" value="Puzzle">
        <label class="radiobtn" for="puzzle_menos">Puzzle</label><br><br>

        <label class="pregunta">14. ¿Te gustan los juegos con microtransacciones?</label><br>
        <input type="radio" id="si_micro" name="microtransacciones" value="Sí" required="">
        <label class="radiobtn" for="si_micro">Sí</label><br>
        <input type="radio" id="no_micro" name="microtransacciones" value="No">
        <label class="radiobtn" for="no_micro">No</label><br><br>

        <label class="pregunta">15. ¿Cuántos juegos completos sueles jugar al año?</label><br>
        <input type="radio" id="menos_5" name="juegos_anuales" value="Menos de 5" required="">
        <label class="radiobtn" for="menos_5">Menos de 5</label><br>
        <input type="radio" id="5-10" name="juegos_anuales" value="5-10">
        <label class="radiobtn" for="5-10">5-10</label><br>
        <input type="radio" id="10-15" name="juegos_anuales" value="10-15">
        <label class="radiobtn" for="10-15">10-15</label><br>
        <input type="radio" id="mas_15" name="juegos_anuales" value="Más de 15">
        <label class="radiobtn" for="mas_15">Más de 15</label><br><br>

        <label class="pregunta">16. ¿Qué tan seguido juegas en modo cooperativo?</label><br>
        <input type="radio" id="nunca" name="modo_cooperativo" value="Nunca" required="">
        <label class="radiobtn" for="nunca">Nunca</label><br>
        <input type="radio" id="ocasionalmente" name="modo_cooperativo" value="Ocasionalmente">
        <label class="radiobtn" for="ocasionalmente">Ocasionalmente</label><br>
        <input type="radio" id="frecuentemente" name="modo_cooperativo" value="Frecuentemente">
        <label class="radiobtn" for="frecuentemente">Frecuentemente</label><br>
        <input type="radio" id="siempre" name="modo_cooperativo" value="Siempre">
        <label class="radiobtn" for="siempre">Siempre</label><br><br>
        
        <label class="pregunta">17. ¿Qué te motiva a comprar un nuevo videojuego?</label><br>
        <input type="radio" id="novedades" name="motivacion_compra" value="Novedades" required="">
        <label class="radiobtn" for="novedades">Novedades en la industria</label><br>
        <input type="radio" id="recomendacion" name="motivacion_compra" value="Recomendación de amigos">
        <label class="radiobtn" for="recomendacion">Recomendación de amigos</label><br>
        <input type="radio" id="descuentos" name="motivacion_compra" value="Descuentos o promociones">
        <label class="radiobtn" for="descuentos">Descuentos o promociones</label><br>
        <input type="radio" id="experiencia_anterior" name="motivacion_compra" value="Experiencia con el desarrollador">
        <label class="radiobtn" for="experiencia_anterior">Experiencia previa con el desarrollador</label><br><br>

        <label class="pregunta">18. ¿Cuál es tu opinión sobre los juegos de mundo abierto?</label><br>
        <input type="radio" id="me_encantan" name="opinion_mundo_abierto" value="Me encantan, me sumergen en un mundo vasto y lleno de posibilidades" required="">
        <label class="radiobtn" for="me_encantan">Me encantan, me sumergen en un mundo vasto y lleno de posibilidades</label><br>
        <input type="radio" id="no_me_gustan" name="opinion_mundo_abierto" value="No me gustan, prefiero juegos más lineales y centrados en la historia">
        <label class="radiobtn" for="no_me_gustan">No me gustan, prefiero juegos más lineales y centrados en la historia</label><br>
        <input type="radio" id="no_opinion" name="opinion_mundo_abierto" value="No tengo opinion al respecto">
        <label class="radiobtn" for="no_opinion">No tengo opinion al respecto</label><br><br>

        <label class="pregunta">19. ¿Qué tipo de contenido adicional valoras más en un juego (DLC)?</label><br>
        <input type="radio" id="nuevas_historias" name="contenido_dlc" value="Nuevas historias o misiones" required="">
        <label class="radiobtn" for="nuevas_historias">Nuevas historias o misiones</label><br>
        <input type="radio" id="nuevos_personajes" name="contenido_dlc" value="Nuevos personajes o skins">
        <label class="radiobtn" for="nuevos_personajes">Nuevos personajes o skins</label><br>
        <input type="radio" id="nuevos_mapas" name="contenido_dlc" value="Nuevos mapas o niveles">
        <label class="radiobtn" for="nuevos_mapas">Nuevos mapas o niveles</label><br>
        <input type="radio" id="mejoras_jugabilidad" name="contenido_dlc" value="Mejoras en la jugabilidad">
        <label class="radiobtn" for="mejoras_jugabilidad">Mejoras en la jugabilidad o características</label><br><br>

        <label class="pregunta">20. ¿Qué aspecto consideras más importante al elegir un juego para comprar?</label><br>
        <input type="radio" id="graficos" name="aspecto_importante" value="Gráficos y calidad visual" required="">
        <label class="radiobtn" for="graficos">Gráficos y calidad visual</label><br>
        <input type="radio" id="jugabilidad" name="aspecto_importante" value="Jugabilidad y mecánicas de juego">
        <label class="radiobtn" for="jugabilidad">Jugabilidad y mecánicas de juego</label><br>
        <input type="radio" id="historia" name="aspecto_importante" value="Historia y narrativa">
        <label class="radiobtn" for="historia">Historia y narrativa</label><br>
        <input type="radio" id="reputacion" name="aspecto_importante" value="Reputación del desarrollador">
        <label class="radiobtn" for="reputacion">Reputación del desarrollador</label><br><br>

        <div class="col-12">
        <button type="submit" value="Enviar" class="btn btn-primary" style="margin-bottom: 2%;">Enviar</button>
        </div>
    </form>
    
    <footer>
        <br>
    </footer>


</body></html>
