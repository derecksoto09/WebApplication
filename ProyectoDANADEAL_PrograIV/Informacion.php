<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Enlaces a hojas de estilo CSS y scripts externos -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" type="text/css" href="Boton.css">
    <!-- Importación de jQuery para manipulación del DOM -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Importación de iconos de FontAwesome -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!-- Script para manejar la interacción de mostrar/ocultar contenido -->
    <script>
        $(document).ready(function () {
            // Funciones para mostrar/ocultar contenido al hacer clic en los elementos

            // Ejemplo de función para la mostrar la sección "Sobre Nosotros":
            $("#SobreNosotrosSI").click(function () {
                // Mostrar contenido
                $("#SobreNosotrosINFO").show('slow');
                // Cambiar visibilidad de botones
                $("#SobreNosotrosSI").hide();
                $("#SobreNosotrosNO").show();
            });

            // Ejemplo de función para la mostrar la sección "Clientes y Comunidad":
            $("#ClientesYComunidadSI").click(function () {
                // Mostrar contenido
                $("#ClientesYComunidadINFO").show('slow');
                // Cambiar visibilidad de botones
                $("#ClientesYComunidadSI").hide();
                $("#ClientesYComunidadNO").show();
            });

            // Ejemplo de función para la mostrar la sección "Materiales":
            $("#MaterialesSI").click(function () {
                // Mostrar contenido
                $("#MaterialesINFO").show('slow');
                $("#MaterialesImagenes").show('slow');
                // Cambiar visibilidad de botones
                $("#MaterialesSI").hide();
                $("#MaterialesNO").show();
            });

            // Ejemplo de función para la mostrar la sección "Mision, Vision y Valores":
            $("#MisionVisionYValoresSI").click(function () {
                // Mostrar contenido
                $("#MisionVisionYValoresINFO").show('slow');
                // Cambiar visibilidad de botones
                $("#MisionVisionYValoresSI").hide();
                $("#MisionVisionYValoresNO").show();
            });

            // Ejemplo de función para la mostrar la sección"Servicio ofrecidos":
            $("#ServiciosOfrecidosSI").click(function () {
                // Mostrar contenido
                $("#ServiciosOfrecidosINFO").show('slow');
                // Cambiar visibilidad de botones
                $("#ServiciosOfrecidosSI").hide();
                $("#ServiciosOfrecidosNO").show();
            });

            // Ejemplo de función para la mostrar la sección "Horarios":
            $("#HorariosSI").click(function () {
                // Mostrar contenido
                $("#HorariosINFO").show('slow');
                // Cambiar visibilidad de botones
                $("#HorariosSI").hide();
                $("#HorariosNO").show();
            });

            // Ejemplo de función para la mostrar la sección "Futuros planes y proyectos":
            $("#FuturosPlanesYProyectosSI").click(function () {
                // Mostrar contenido
                $("#FuturosPlanesYProyectosINFO").show('slow');
                // Cambiar visibilidad de botones
                $("#FuturosPlanesYProyectosSI").hide();
                $("#FuturosPlanesYProyectosNO").show();
            });

            // Ejemplo de función para la ocultar la sección "Sobre nosotros":
            $("#SobreNosotrosNO").click(function () {
                // Ocultar contenido
                $("#SobreNosotrosINFO").hide('slow');
                // Cambiar visibilidad de botones
                $("#SobreNosotrosSI").show();
                $("#SobreNosotrosNO").hide();
            });

            // Ejemplo de función para la ocultar la sección "Clientes y comunidad":
            $("#ClientesYComunidadNO").click(function () {
                // Ocultar contenido
                $("#ClientesYComunidadINFO").hide('slow');
                // Cambiar visibilidad de botones
                $("#ClientesYComunidadSI").show();
                $("#ClientesYComunidadNO").hide();
            });

            // Ejemplo de función para la ocultar la sección "Materiales":
            $("#MaterialesNO").click(function () {
                // Ocultar contenido
                $("#MaterialesINFO").hide('slow');
                $("#MaterialesImagenes").hide('slow');
                // Cambiar visibilidad de botones
                $("#MaterialesSI").show();
                $("#MaterialesNO").hide();
            });

            // Ejemplo de función para la ocultar la sección "Mision, Vision y Valores":
            $("#MisionVisionYValoresNO").click(function () {
                // Ocultar contenido
                $("#MisionVisionYValoresINFO").hide('slow');
                // Cambiar visibilidad de botones
                $("#MisionVisionYValoresSI").show();
                $("#MisionVisionYValoresNO").hide();
            });

            // Ejemplo de función para la ocultar la sección "Servicios ofrecidos":
            $("#ServiciosOfrecidosNO").click(function () {
                // Ocultar contenido
                $("#ServiciosOfrecidosINFO").hide('slow');
                // Cambiar visibilidad de botones
                $("#ServiciosOfrecidosSI").show();
                $("#ServiciosOfrecidosNO").hide();
            });

            // Ejemplo de función para la ocultar la sección "Horarios":
            $("#HorariosNO").click(function () {
                // Ocultar contenido
                $("#HorariosINFO").hide('slow');
                // Cambiar visibilidad de botones
                $("#HorariosSI").show();
                $("#HorariosNO").hide();
            });

            // Ejemplo de función para la ocultar la sección "Futuros planes y proyectos":
            $("#FuturosPlanesYProyectosNO").click(function () {
                // Ocultar contenido
                $("#FuturosPlanesYProyectosINFO").hide('slow');
                // Cambiar visibilidad de botones
                $("#FuturosPlanesYProyectosSI").show();
                $("#FuturosPlanesYProyectosNO").hide();
            });
        });
    </script>
    <!-- Ciere etiqueta de script -->

    <!-- Título de la página -->
    <title>Información Danadeal</title>
</head>

<body>
    <!-- Encabezado de la página -->
    <header style="background-color: black">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
        </font>
    </header>

    <!-- Título principal -->
    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>
    <center>¡Joyas con sello de calidad!</center>

    <!-- Párrafo introductorio -->
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyería que maneja la firma
            DANADEAL.</center>
    </p1>
    <br><br>

    <!-- Barra de navegación -->
    <nav>
        <a href="Inicio.php">Inicio</a> |
        <a href="Historia.php">Historia</a> |
        <a href="Informacion.php">Información</a> |
        <a href="Productos.php">Productos</a>
        <div class="animation start-blog"></div>
    </nav>
    <br><br><br><br>

    <!-- Sección: Sobre nosotros -->
    <center>
        <font size="5"><b align="center">Sobre nosotros </b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="SobreNosotrosSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="SobreNosotrosNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center>
    <!-- Contenido oculto sobre Sobre nosotros -->
    <p align="center" id="SobreNosotrosINFO" style="display:none">
        <!-- Contenido de la sección Sobre nosotros -->
        En Danadeal nos imaginamos un emprendimiento de joyería pequeño que ha logrado destacarse y ganar reconocimiento
        en el competitivo mundo de la moda y el lujo.<br>
        Esta joyería ha sabido combinar a la perfección la bisutería con las últimas tendencias y tecnologías, creando
        piezas únicas y exclusivas que capturan la atención<br>
        de los amantes de la belleza y el estilo.<br><br>

        A medida que nuestra reputación crece, hemos expandido nuestra presencia más allá de nuestra ubicación física.
        Ahora contamos con una plataforma de comercio electrónico<br>
        en la que los clientes de toda Costa Rica puedan descubrir y adquirir nuestras creaciones excepcionales. Nuestro
        sitio web es un reflejo de nuestra estética única y brinda<br>
        una experiencia de compra personalizada y envolvente.<br><br>
        <br>
        <!-- Imagen relacionada con el contenido -->
        <img src="https://th.bing.com/th/id/OIP.DpcZsJKaSH6XsEquMaiHSQHaEW?pid=ImgDet&rs=1"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">
        <br>
        <br>
    </p>
    <br><br><br>

    <!-- Sección: Sobre Clientes y comunidad -->
    <center>
        <font size="5"><b align="center">Clientes y comunidad </b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="ClientesYComunidadSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="ClientesYComunidadNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center><br>
    <!-- Contenido oculto sobre Clientes y comunidad -->
    <p align="center" id="ClientesYComunidadINFO" style="display:none">
        <!-- Contenido de la sección sobre Clientes y comunidad -->
        La tienda de joyería DANADEAL atrae diferentes tipos de clientes y miembros de comunidades que buscan
        información sobre productos<br>
        y servicios. Aquí hay algunos ejemplos: Compradores interesados en joyería de moda.<br><br>

        Parejas comprometidas y en busca de anillos de compromiso.<br>
        Personas que buscan regalos especiales.<br>
        Miembros de la comunidad interesados en joyería artesanal.<br>
        Personas que desean reparar o personalizar joyería existente.<br><br>
        Además de estos clientes, la tienda de joyería también puede involucrar a la comunidad en eventos especiales,
        como exhibiciones de joyería,<br>
        charlas sobre diseño de joyería o incluso colaboraciones con organizaciones benéficas locales. Esto puede atraer
        a personas interesadas en la<br>
        joyería como forma de arte y también fomentar un sentido de pertenencia en la comunidad local.<br><br>
        <br>
        <!-- Imagen relacionada con el contenido -->
        <img src="https://pcbeasts.com/wp-content/uploads/2020/10/kissclipart-happy-customers-png-clipart-customer-service-custo-ef5aac4691745925-313x192.png"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">
        <br>
        <br>
    </p>
    <br><br><br>

    <!-- Sección: Sobre Materiales -->
    <center>
        <font size="5"><b align="center">Materiales</b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="MaterialesSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="MaterialesNO" alt="Texto Alternativo para la imágen"
                width="20px" height="20px" style="display:none">
        </font>
    </center><br>
    <!-- Contenido oculto Sobre Materiales -->
    <p align="center" id="MaterialesINFO" style="display:none">
        <!-- Contenido de la sección Sobre Materiales -->
        Acero inoxidable: muy resistente y brillante, es uno de los materiales para joyería y bisutería más utilizados,
        como puedes ver en esta pulsera dorada para mujer. <br><br>
        Aluminio: este material para bisutería puede usarse forma de lámina martillada o alambre. Al ser un metal muy
        maleable resulta increíblemente versátil para elaborar todo tipo de piezas.<br><br>
        Cuero o caucho: ya sea en su tonalidad natural o teñido, es uno de los materiales para bisutería artesanal más
        utilizados, especialmente en alhajas para hombre (como esta pulsera).<br><br>
        Cobre: al ser muy manejable y duradero, es otro de los materiales para joyería y bisutería que más se utilizan
        en pendientes, pulseras y collares.<br><br>
        <br>
        <!-- Tabla para mostrar imagenes relacionadas al contenido -->
    <table align="center" id="MaterialesImagenes" style="display:none">
        <tr>
            <td><img src="https://th.bing.com/th/id/R.961e4a36599a1edac19fe905b42994f9?rik=I8J60YyljuR1GA&riu=http%3a%2f%2faceroinoxidablee.com%2fimages%2facero-inoxidable-tipo-430-serie-400%2fimagen.png&ehk=alYb%2b%2bYgyav7%2faXAgo2NEeIfaw61h8paVVkvb14wCWI%3d&risl=&pid=ImgRaw&r=0"
                    alt="Texto Alternativo para la imágen" width="500px" height="400px"></td>
            <td><img src="https://www.pngall.com/wp-content/uploads/5/Aluminium-PNG-Photo.png"
                    alt="Texto Alternativo para la imágen" width="500px" height="400px"></td>
            <td><img src="https://th.bing.com/th/id/OIP.A0C8QaaMPGUsFF8hadZogwHaHP?pid=ImgDet&rs=1"
                    alt="Texto Alternativo para la imágen" width="500px" height="400px"></td>
        </tr>
        <tr>
            <td><img src="https://www.toyoimport.com/wp-content/uploads/2015/07/Cauchos.png"
                    alt="Texto Alternativo para la imágen" width="500px" height="400px"></td>
            <td><img src="https://th.bing.com/th/id/R.bcede9336bd0c55d80f1b7ad9ddc5685?rik=RzlW6le8lIktLw&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f7%2fCopper-Wire-PNG-Free-Download.png&ehk=yttKDM2hCZ3Pe%2baasbOPgiYOgqG3Do1xXkjluemhCk8%3d&risl=&pid=ImgRaw&r=0"
                    alt="Texto Alternativo para la imágen" width="500px" height="400px"></td>
            <td><img src="https://th.bing.com/th/id/R.5108a20ade238bbf162af755850a85ec?rik=aEcTW4rVy4VVCA&pid=ImgRaw&r=0"
                    alt="Texto Alternativo para la imágen" width="500px" height="400px"></td>
        </tr>
    </table>
    </p>
    <br><br><br>

    <!-- Sección: Sobre Mision, vision y valores -->
    <center>
        <font size="5"><b align="center">Misión, visión y valores</b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="MisionVisionYValoresSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="MisionVisionYValoresNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center><br>
    <!-- Contenido oculto Sobre Mision, vision y valores -->
    <p align="center" id="MisionVisionYValoresINFO" style="display:none">
        <!-- Contenido de la sección Sobre Mision, vision y valores -->
        <i>Misión: </i> <br><br>

        Estamos comprometidos, a ofrecer el mejor servicio que nos sea posible, otorgando un producto de calidad,<br>
        con el fin de presentar un producto distinto en el mercado que logre satisfacer el gusto del cliente. <br><br>

        <i>Visión: </i> <br><br>

        Nuestra visión es ser reconocidos como la joyería líder en ofrecer piezas únicas y de alta calidad que <br>
        reflejen la belleza, el lujo y la elegancia. Nos esforzamos por superar las expectativas de nuestros clientes
        <br>
        al brindarles una experiencia excepcional y personalizada al adquirir joyas significativas para ocasiones <br>
        especiales o para el uso diario. Queremos ser la elección preferida de aquellos que buscan piezas exclusivas
        <br>
        y atemporales, elaboradas con maestría y con los materiales más finos. Nuestro objetivo es crear una conexión
        <br>
        emocional con cada cliente, brindando productos que representen su estilo y personalidad de manera única. <br>
        A través de nuestro compromiso con la artesanía excepcional, la atención meticulosa a los detalles y el servicio
        <br>
        al cliente excepcional, nos esforzamos por convertirnos en una referencia en la industria de la joyería, y ser
        <br>
        la elección confiable y de confianza para todos los amantes de la belleza y el refinamiento. <br><br>

        <i>Valores: </i> <br><br>

        Calidad: Valorar la calidad de los productos y servicios ofrecidos, asegurando que cumplan con altos estándares
        y satisfagan las necesidades de los clientes. <br>

        Atención al cliente: Brindar un servicio excepcional al cliente, ofreciendo una experiencia agradable y
        personalizada, y estando dispuestos a escuchar y responder <br>
        a las necesidades y preocupaciones de los clientes. <br>

        Respeto: Tratar a todos los clientes, empleados y proveedores con respeto y consideración, reconociendo la
        diversidad y valorando las opiniones y perspectivas de los demás. <br>
        <br>
        <!-- Imagen relacionada con el contenido -->
        <img src="https://dawaplatform.blob.core.windows.net/dawasg-images/mission-vision-values-graphic.png"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">
        <br>
        <br>
    </p>
    <br><br><br>

    <!-- Sección: Sobre Servicios ofrecidos -->
    <center>
        <font size="5"><b align="center">Servicios ofrecidos</b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="ServiciosOfrecidosSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="ServiciosOfrecidosNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center><br>
    <!-- Contenido oculto Sobre Servicios ofrecidos -->
    <p align="center" id="ServiciosOfrecidosINFO" style="display:none">
        <!-- Contenido de la sección Sobre Servicios ofrecidos -->
        La tienda en los últimos años ha estado incluyendo una serie de servicios que buscan que la joyería llegue en
        las mejores condiciones y
        se mantenga en la mejor calidad. <br><br>Estos servicios son:<br><br>
        Mantenimiento: Se realizará mantenimiento a las piezas de joyería que se hayan adquirido en nuestra
        tienda.<br><br>
        Entrega a domicilio: Realizamos envíos a todas partes de Costa Rica, sin embargo, trabajamos con 2 diferentes
        precios:<br>

        Opción 1: Si el envío es para las provincias de: Alajuela, San José, Heredia O Cartago, el envío será de 2000
        colones.<br>

        Opción 2: Si el envío es para las provincias de: Guanacaste, Puntarenas,Limón, el envío será de 3500
        colones.<br>

        <br>
        Servicios personalizado: Se va a realizar el personalizado a toda la joyería proveniente de la tienda
        Danadeal.<br><br>
        Garantía: Todo producto comprado en la tienda Danadeal tiene garantía de 2 años ante defectos de fábrica.<br>
        <br>
        <!-- Imagen relacionada con el contenido -->
        <img src="https://th.bing.com/th/id/R.bfddbf42454c47dd7a9c4daefb951704?rik=SNoPwczgfCLEig&pid=ImgRaw&r=0"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">
        <br>
        <br>
    </p>
    <br><br><br>

    <!-- Sección: Sobre Horarios -->
    <center>
        <font size="5"><b align="center">Horarios</b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="HorariosSI" alt="Texto Alternativo para la imágen"
                width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="HorariosNO" alt="Texto Alternativo para la imágen"
                width="20px" height="20px" style="display:none">
        </font>
    </center><br>
    <!-- Contenido oculto Sobre Horarios -->
    <p align="center" id="HorariosINFO" style="display:none">
        <!-- Contenido de la sección Sobre Horarios -->
        Nuestra tienda física ubicada en San José permanece abierta en los siguientes horarios:<br><br>
        Lunes a Sábado de 9 a.m hasta 7 p.m hora de Costa Rica.<br>
        Domingo permanece cerrada.<br><br>
        Nuestra tienda virtual o página web está disponible las 24 horas de los 7 días de la semana.<br><br>
        <br>
        <!-- Imagen relacionada con el contenido -->
        <img src="https://th.bing.com/th/id/OIP.GDUqGiVfEc0w_0NIvFMiegHaHa?pid=ImgDet&rs=1"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">
        <br>
        <br>
    </p>
    <br><br><br>

    <!-- Sección: Sobre Futuros planes y proyectos -->
    <center>
        <font size="5"><b align="center">Futuros planes y proyectos</b>
            <!-- Iconos para mostrar/ocultar contenido -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="FuturosPlanesYProyectosSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="FuturosPlanesYProyectosNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center><br>
    <!-- Contenido oculto sobre Futuros planes y proyectos -->
    <p align="center" id="FuturosPlanesYProyectosINFO" style="display:none">
        <!-- Contenido de la sección Sobre Futuros planes y proyectos -->
        A medida que miramos hacia el futuro, nuestro objetivo es seguir innovando y desafiando los límites de la
        joyería convencional. Queremos explorar nuevas técnicas de fabricación,<br>
        materiales revolucionarios y colaboraciones emocionantes para mantenernos a la vanguardia de la
        industria.<br><br>

        En última instancia, nuestra visión es que cada persona que use una de nuestras joyas se sienta especial y
        única. Queremos que nuestras creaciones se conviertan en tesoros que se<br>
        transmitan de generación en generación, contando historias de amor, éxito y conexión humana.<br><br>

        En este futuro, nuestro pequeño emprendimiento de joyería se ha convertido en un referente de excelencia,
        creatividad y autenticidad en la industria. Nos sentimos agradecidos por <br>
        el apoyo de nuestros clientes leales y entusiasmados por lo que está por venir.<br><br>
        <br>
        <!-- Imagen relacionada con el contenido -->
        <img src="https://th.bing.com/th/id/R.a7bb600a70cdffd25154f448924bf1b9?rik=H8KFuEVCz8Ef3w&riu=http%3a%2f%2freintech.com.mx%2fwp-content%2fuploads%2f2019%2f09%2fempres-1.png&ehk=QGdUR109%2bHfiP4dqAmA5ezjIdl9tvJezTSrkMprk7zQ%3d&risl=&pid=ImgRaw&r=0"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">
        <br>
        <br>
    </p>
    <br><br><br>

    <!-- Pie de página -->
    <footer class="pie-pagina">
        <!-- Contenido del pie de página -->
        <div class="grupo-1">
            <!-- Sección 1 del pie de página -->
            <div class="box">
                <figure>
                    <!-- Enlace con logo de Danadeal -->
                    <a href="#">
                        <img src="Imagenes/footer/Danadeal-logos.jpeg" alt="Logo de Danadeal">
                    </a>
                </figure>
            </div>
            <!-- Sección 2 del pie de página -->
            <div class="box">
                <h2>Podes encontrarnos</h2>
                <p>¡Joyas con sello de calidad!<br><br>
                    El principal propósito de este sitio web es mostrar la gran variedad de joyería que maneja la firma
                    DANADEAL. </p>
                <p></p>
            </div>
            <!-- Sección 3 del pie de página -->
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <!-- Enlaces a redes sociales con iconos -->
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>
        <!-- Sección 4 del pie de página -->
        <div class="grupo-2">
            <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                <p style="font-size: 12px;"> Todos los Derechos Reservados
                <p>
            </small>
        </div>
    </footer> <!-- Fin de la sección del pie de página -->

</body> <!-- Fin del cuerpo del documento -->

</html> <!-- Fin del documento HTML -->