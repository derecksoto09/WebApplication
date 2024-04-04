<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título de la página -->
    <title>Productos Danadeal</title>

    <!-- Enlace a hojas de estilo externas -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" type="text/css" href="Boton.css">

    <!-- Inclusión del paquete de iconos Font Awesome para el diseño de los botones-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Inclusión del kit de iconos Font Awesome para el diseño del footer-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <header style="background-color: black">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
        </font>
    </header>
    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>

    <center>¡Joyas con sello de calidad!</center>
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL. </center>
    </p1>
    <BR>

    <!-- Menú de navegación, al cual se le aplica la clase animation start-home con el fin de que se muestre seleccionado visualmente el apartado de inicio-->
    <nav>
        <a href="Inicio.php">Inicio</a> |
        <a href="Historia.php">Historia</a> |
        <a href="Informacion.php">Información</a> |
        <a href="Productos.php">Productos</a>
        <div class="animation start-portefolio"></div>
    </nav>

    <!-- Implementación de los botones de usurio y carrito mediante la clase container-buttons -->
    <div class="container-buttons">

        <a href="carritoCompras.php" class="one"></a>
        <a href="PaginaLoginUser.php" class="two"></a>

    </div>

    <br><br><br><br>

    <center>
        <!-- Tabla donde se muestran los productos divididos por tipo de producto -->
        <Table align="center" border="1" width="20%">
            <tr>
                <td><!-- Cuadro de anillos-->
                    <a href="Anillos.php"><img src="Imagenes/Productos/Presentacion/AnillosMostrar.png"
                            alt="Texto Alternativo para la imágen" width="500px" height="500px"></a>
                    <br>
                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">Anillos / Rings</font>
                    </p>
                </td>

                <td><!-- Cuadro de collares-->
                    <a href="Collares.php"><img
                            src="https://cfs3.monicavinader.com/images/pdp-full/12429244-set-591.jpg"
                            alt="Texto Alternativo para la imágen" width="500px" height="500px"></a>
                    <br>
                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">Collares / Necklaces</font>
                    </p>
                </td>

                <td><!-- Cuadro de dijes-->
                    <a href="Dijes.php"><img src="Imagenes/Productos/Presentacion/DijeMostrar.png"
                            alt="Texto Alternativo para la imágen" width="500px" height="500px"></a>
                    <br>
                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">Dijes / Charms</font>
                    </p>
                </td>

            </tr>

            <tr>
                <td><!-- Cuadro de aretes-->
                    <a href="Aretes.php"><img src="Imagenes/Productos/Presentacion/AretesMostrar.png"
                            alt="Texto Alternativo para la imágen" width="500px" height="500px"></a>
                    <br>
                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">Aretes / Earrings</font>
                    </p>
                </td>

                <td><!-- Cuadro de pulseras-->
                    <a href="Pulseras.php"><img src="Imagenes/Productos/Presentacion/PulseraMostrar.png"
                            alt="Texto Alternativo para la imágen" width="500px" height="500px"></a>
                    <br>
                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">Pulseras / Bracelets</font>
                    </p>
                </td>

                <td><!-- Cuadro de otros productos referentes a joyería-->
                    <a href="Otros.php"><img src="Imagenes/Productos/Presentacion/OtrosMostrar.jpg"
                            alt="Texto Alternativo para la imágen" width="500px" height="500px"></a>
                    <br>
                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">Otros / Others</font>
                    </p>
                </td>

            </tr>
        </Table>

    </center>
    <br><br>

    <!-- Pie de página -->
    <footer class="pie-pagina">
        <!-- Grupo de contenido 1, los definimos por grupos para poder aplicar estilos diferentes en cada uno -->
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="Imagenes/footer/Danadeal-logos.jpeg" alt="Logo de Danadeal">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Podes encontrarnos</h2>
                <p>¡Joyas con sello de calidad!<br><br>
                    El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
                    DANADEAL. </p>
                <p></p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>

                <!-- Enlaces a redes sociales, este es otro grupo sin embargo lleva otro nombre para poder diferenciar -->
                <div class="red-social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>

                </div>
            </div>
        </div>

        <!-- Grupo de contenido 2 -->
        <div class="grupo-2">
            <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                <p style="font-size: 12px;"> Todos los Derechos Reservados
                <p>
            </small>
        </div>
    </footer>

</body>

</html>