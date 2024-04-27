function cambiarContenido(lenguaje) {
    var contenidoDiv = document.getElementById("contenido");
    var titulo = "";
    var texto = "";
    var imagen = "";
    var hipervinculo = "";

    // Según el lenguaje seleccionado, define el título, el texto, la imagen y el hipervínculo
    if (lenguaje === "java") {
        titulo = "¿Qué es Java?";
        texto = "Java es un lenguaje de programación de alto nivel y orientado a objetos, desarrollado por Sun Microsystems (ahora propiedad de Oracle). Es ampliamente utilizado en el desarrollo de aplicaciones de escritorio, aplicaciones web, aplicaciones móviles y servidores. Java es conocido por su portabilidad, lo que significa que el código escrito en Java puede ejecutarse en diferentes plataformas sin necesidad de realizar modificaciones.";
        imagen = "css/image/JAVA-LOGO.png";
        hipervinculo = "java.html";
    } else if (lenguaje === "csharp") {
        titulo = "¿Qué es C#?";
        texto = "C# es un lenguaje de programación desarrollado por Microsoft como parte de su plataforma .NET. Es similar en muchos aspectos a Java y C++, y es ampliamente utilizado en el desarrollo de aplicaciones de escritorio, aplicaciones web y juegos. C# es conocido por su sintaxis limpia y su fuerte integración con el entorno de desarrollo de Microsoft.";
        imagen = "css/image/C_SHARP_LOGO.png";
        hipervinculo = "csharp.html";
    } else if (lenguaje === "php") {
        titulo = "¿Qué es PHP?";
        texto = "PHP es un lenguaje de programación de uso general especialmente adecuado para el desarrollo web. Es un lenguaje de código abierto muy popular y ampliamente utilizado, que se ejecuta en el servidor. PHP se utiliza para crear páginas web dinámicas, aplicaciones web y servicios web, entre otras cosas.";
        imagen = "css/image/PHP_LOGO.png";
        hipervinculo = "php.html";
    } else if (lenguaje === "html") {
        titulo = "¿Qué es HTML?";
        texto = "HTML (HyperText Markup Language) es el lenguaje estándar utilizado para crear y diseñar páginas web. Proporciona la estructura básica de las páginas web utilizando una serie de elementos y etiquetas. HTML se utiliza junto con CSS (Cascading Style Sheets) y JavaScript para crear contenido web dinámico y atractivo.";
        imagen = "css/image/HTML_LOGO.png";
        hipervinculo = "html.html";
    }

    // Generar el contenido HTML
    contenidoDiv.innerHTML = `
        <h2 style="color: white; font-size: 30px;">${titulo}</h2>
        <p id="java-text" style="color: white; font-size: 20px;">${texto} </p>
        <img src="${imagen}" style="width: 100px; height: auto;"><a href="${hipervinculo}" style="color: white;">Ver más</a>
    `;

    // Enfocar el texto que apareció y desplazar la página hacia abajo
    var javaText = document.getElementById("java-text");
    javaText.scrollIntoView({ behavior: "smooth", block: "start" });

    // Desplazar la página hacia abajo un poco más    
    window.scrollTo(0, document.body.scrollHeight);
}
