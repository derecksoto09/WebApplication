<!-- Inicio del documento HTML -->

<html lang="en">

<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Enlaces a hojas de estilo -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" type="text/css" href="Boton.css">

    <!-- Enlaces a scripts externos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!-- JavaScript para interacción con elementos en la página -->
    <script>
        $(document).ready(function () {

            // Asociar eventos de clic a los elementos y manejar la interacción

            // Sección "Orígenes y fundación"
            $("#OrigenesYFundacionSI").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#OrigenesYFundacionINFO").show('slow');
                $("#OrigenesYFundacionSI").hide();
                $("#OrigenesYFundacionNO").show();
            });

            // Sección "Evolución y crecimiento"
            $("#EvolucionYCrecimientoSI").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#EvolucionYCrecimientoINFO").show('slow');
                $("#EvolucionYCrecimientoSI").hide();
                $("#EvolucionYCrecimientoNO").show();
            });

            // Sección "Momentos destacados"
            $("#MomentosDestacadosSI").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#MomentosDestacadosINFO").show('slow');
                $("#MomentosDestacadosSI").hide();
                $("#MomentosDestacadosNO").show();
            });

            // Sección "Retos y superación"
            $("#RetosYSuperacionSI").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#RetosYSuperacionINFO").show('slow');
                $("#RetosYSuperacionSI").hide();
                $("#RetosYSuperacionNO").show();
            });

            // Sección "Origenes Y Fundación"
            $("#OrigenesYFundacionNO").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#OrigenesYFundacionINFO").hide('slow');
                $("#OrigenesYFundacionSI").show();
                $("#OrigenesYFundacionNO").hide();

            });

            // Sección "Evolución Y Crecimiento"
            $("#EvolucionYCrecimientoNO").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#EvolucionYCrecimientoINFO").hide('slow');
                $("#EvolucionYCrecimientoSI").show();
                $("#EvolucionYCrecimientoNO").hide();
            });

            // Sección "Momentos Destacados"
            $("#MomentosDestacadosNO").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#MomentosDestacadosINFO").hide('slow');
                $("#MomentosDestacadosSI").show();
                $("#MomentosDestacadosNO").hide();
            });

            // Sección "Retos y superación"
            $("#RetosYSuperacionNO").click(function () {

                // Mostrar información, ocultar botón de mostrar y mostrar botón de ocultar
                $("#RetosYSuperacionINFO").hide('slow');
                $("#RetosYSuperacionSI").show();
                $("#RetosYSuperacionNO").hide();
            });
        });
    </script>

    <title>Historia Danadeal</title>

</head>

<body>

    <!-- Encabezado de la página con fondo negro y texto blanco -->
    <header style="background-color: black" style="top: 0px">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
        </font>
    </header>

    <!-- Título principal "DANADEAL" -->
    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>

    <!-- Slogan del sitio -->
    <center>¡Joyas con sello de calidad!</center>
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL. </center>
    </p1>

    <!-- Navegación -->
    <nav>

        <!-- Enlaces de navegación a diferentes páginas -->
        <a href="Inicio.php">Inicio</a> |
        <a href="Historia.php">Historia</a> |
        <a href="Informacion.php">Información</a> |
        <a href="Productos.php">Productos</a>
        <div class="animation start-about"></div>
    </nav>

    <br><br><br><br>

    <!-- Sección "Orígenes y fundación" -->
    <center>
        <font size="5"><b align="center">Orígenes y fundación</b>

            <!-- Título de la sección con botones para mostrar/ocultar información -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="OrigenesYFundacionSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="OrigenesYFundacionNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center>
    <br>

    <!-- Contenido de la sección con información sobre los orígenes y la fundación de la tienda -->
    <p align="center" id="OrigenesYFundacionINFO" style="display:none">

        La tienda de joyería fue fundada en 2020 por una familia apasionada a las joyas y necesitada ecocnómicamente por
        razónes de la pandemia del COVID-19 . Se comenzó como un emprendimiento <br>
        vendiendo anillos y collares por medio de redes sociales y ofreciendo las joyas a tiendas ya desarrolladas. Con
        el pasar de los años, el emprendimiento empezó a ganar reconocimiento <br>
        y fuerza a nivel nacional, por lo que se decidió y se logró abrir una tienda física en el centro San José, la
        cual equivale a la casa matriz de esta tienda, pero ahora con la implementación <br>
        de esta página web ayuda a que la empresa se desarrolle aún más, ya que es una gran fuente de recursos para
        nuestra ya tienda. <br><br>

        <img src="https://enssamblefinanciero.com/wp-content/uploads/2021/03/feria-01-1536x983.png"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">

        <br><br>
    </p>

    <br><br>

    <!-- Sección "Evolución y crecimiento" -->
    <center>
        <font size="5"><b align="center">Evolución y crecimiento</b>

            <!-- Título de la sección con botones para mostrar/ocultar información -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="EvolucionYCrecimientoSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="EvolucionYCrecimientoNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center>
    <br>

    <!-- Contenido de la sección con información sobre la Evolución y crecimiento de la tienda -->
    <p align="center" id="EvolucionYCrecimientoINFO" style="display:none">

        La tienda de joyería experimentó un crecimiento constante a lo largo de los años. Su enfoque en la calidad, el
        diseño y la atención al cliente permitió que se expandiese a múltiples <br>
        ciudades clave. También, se comenzaron a introducir nuevos artículos para todos los gustos, presentando dijes,
        pulseras, aretes.Además, se lanzó una tienda en línea en el año 2023 <br>
        para llegar a un público más amplio con el fin de que todas las personas de Costa Rica pudiesen disfrutar de los
        productos exclusivos que vende esta tienda. <br><br>

        <img src="https://www.econstructconsulting.com.au/wp-content/uploads/2021/08/Reduce-risk.png"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">

        <br><br>

    </p>

    <br><br>

    <!-- Sección "Momentos destacados" -->
    <center>
        <font size="5"><b align="center">Momentos destacados</b>

            <!-- Título de la sección con botones para mostrar/ocultar información -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="MomentosDestacadosSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="MomentosDestacadosNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center>
    <br>

    <!-- Contenido de la sección con información sobre los Momentos destacados de la tienda -->
    <p align="center" id="MomentosDestacadosINFO" style="display:none">

        La tienda de joyería ha tenido varios momentos destacados en su trayectoria. El 14 de febrero del año 2020, se
        realizó la primera venta de un par de aretes. En 2021, la tienda recibió<br>
        un premio y reconocimiento regional por su innovador diseño de un anillo en una feria de joyería. También en
        2021, se lanzó una colección benéfica en apoyo a organizaciones sin fines de lucro. En 2022, la <br>
        tienda fue seleccionada para diseñar y crear una pieza icónica para un evento de alto perfil. En 2023 la tienda
        dió inaguración a su página web. Estos momentos destacados han sido hitos claves en el éxito y reconocimiento de
        la tienda <br>
        de joyería Danadeal. <br><br>

        <img src="https://frgholding.com/wp-content/uploads/2020/09/Wholesale-Icon-1.jpg"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">

        <br><br>

    </p>

    <br><br>

    <!-- Sección "Retos y superación" -->
    <center>
        <font size="5"><b align="center">Retos y superación</b>

            <!-- Título de la sección con botones para mostrar/ocultar información -->
            <img src="Imagenes/OcultarYMostrar/DesplegarInfo.png" id="RetosYSuperacionSI"
                alt="Texto Alternativo para la imágen" width="20px" height="20px">
            <img src="Imagenes/OcultarYMostrar/OcultarInfo.png" id="RetosYSuperacionNO"
                alt="Texto Alternativo para la imágen" width="20px" height="20px" style="display:none">
        </font>
    </center>

    <br>
    <p align="center" id="RetosYSuperacionINFO" style="display:none">

        <!-- Contenido de la sección con información sobre los Retos y superación de la tienda -->
        En el transcurso del tiempo que DANADEAL ha estado en el mercado, ha experimentado bastantes retos, dos de ellos
        son los siguientes:<br><br>

        1. Competencia en línea, hubo una época en donde todas las demás joyerías empezaron a obtener tiendas también
        virtuales o en páginas en línea, y esto hizo que sus ventas se incrementaran <br>
        casi el doble a comparación la tienda Danadeal, la tienda Danadeal no tenía los recursos para poder obtener una
        página virtual, lo cual hacía que su competencia con respecto a las demás <br>
        joyerías fuera casi nula. Pero después de bastantes ahorros se logró crear la página virtual que hoy en día
        usted está utilizando, para así poder superarnos como empresa y también poder <br>
        estar en condiciones parecidas a nuestra competencia y que nuestras ventas también incrementaran como se
        merecía. <br><br>

        2. La pandemia, la pandemia del COVID-19 fue para todos un gran golpe y para nuestra joyería no fue una
        excepción, gracias al COVID-19 nuestras ventas bajaron en un 50%, ya que nadie quería <br>
        salir de su casa y en ese momento nuestra tienda era solamente física, nadie quería comprar algo que se lo
        tuvieran que poner en el cuerpo sin saber de dónde provenía, sin saber si estaba o <br>
        no contaminado, muchos de estos aspectos hicieron que fuera realmente un reto recuperarse de esta pandemia, sin
        embargo después de varias medidas tomadas para la limpieza de nuestros productos <br>
        y también con la implementación de una página en línea, las ventas se fueron recuperando poco a poco y se logró
        superar este reto. <br><br>

        Estos son sólo algunos de los retos más importantes que ha tenido que pasar la tienda, sin embargo, hay muchos
        más en los cuales nos hemos tenido que <br>
        esforzar y superarlos para ser una mejor tienda día tras día. <br><br><br>

        <img src="https://www.coparmextijuana.org/emprende/assets/images/left-image-01.png"
            alt="Texto Alternativo para la imágen" width="500px" height="400px">

        <br>
        <br>

    </p>

    <br><br>

    <!-- Pie de página -->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <!-- Logo de la tienda -->
                    <a href="#">
                        <img src="Imagenes/footer/Danadeal-logos.jpeg" alt="Logo de Danadeal">
                    </a>
                </figure>
            </div>
            <div class="box">
                <!-- Información y enlaces sobre la tienda -->
                <h2>Podes encontrarnos</h2>
                <p>¡Joyas con sello de calidad!<br><br>
                    El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
                    DANADEAL. </p>
                <p></p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <!-- Enlaces a redes sociales -->
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>

                </div>
            </div>
        </div>
        <div class="grupo-2">
            <!-- Información de derechos de autor en el pie de página -->
            <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                <p style="font-size: 12px;"> Todos los Derechos Reservados
                <p>
            </small>
        </div>
    </footer>
</body>

</html>