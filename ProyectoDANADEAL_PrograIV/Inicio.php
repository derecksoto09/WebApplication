<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título de la página -->
    <title>Inicio Danadeal</title>

    <!-- Enlace a hojas de estilo externas -->

    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" type="text/css" href="Boton.css">

    <!-- Inclusión del kit de iconos Font Awesome  para el foooter y otros botones-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <header style="background-color: black">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
        </font>
        <h1 style="background-color: pink">
            DANADEAL
        </h1>
    </header>

    <center>¡Joyas con sello de calidad!</center>
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL. </center>
    </p1>
    <br>

    <!-- Menú de navegación, al cual se le aplica la clase animation start-home con el fin de que se muestre seleccionado visualmente el apartado de inicio-->
    <nav>
        <a href="Inicio.php">Inicio</a>
        <a href="Historia.php">Historia</a>
        <a href="Informacion.php">Información</a>
        <a href="Productos.php">Productos</a>
        <div class="animation start-home"></div>
    </nav>

    <br><br><br><br>

    <!-- Tabla de imágenes, con función de publicidad ya que es el inicio de la página-->
    <center>
        <Table align="center">
            <tr>
                <td>
                    <img src="Imagenes/PagBienvenida/anillo.png" alt="Texto Alternativo para la imágen" width="500px"
                        height="500px">
                </td>

                <td>
                    <img src="Imagenes/PagBienvenida/aretes.png" alt="Texto Alternativo para la imágen" width="450px"
                        height="500px">
                </td>

                <td>
                    <img src="Imagenes/PagBienvenida/pulsera.png" alt="Texto Alternativo para la imágen" width="400px"
                        height="400px">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="Imagenes/PagBienvenida/aretesMariposa.png" alt="Texto Alternativo para la imágen"
                        width="500px" height="500px">
                </td>
                <td>

                    <p ALIGN="CENTER">
                        <font size="+6" color="pink">¡SOLO PARA VOS!</font>
                    </p>

                </td>
                <td>
                    <img src="Imagenes/PagBienvenida/areteD.jpg" alt="Texto Alternativo para la imágen" width="500px"
                        height="500px">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="Imagenes/PagBienvenida/aretesHojas.png" alt="Texto Alternativo para la imágen"
                        width="450px" height="500px">
                </td>

                <td>
                    <img src="Imagenes/PagBienvenida/collar.png" alt="Texto Alternativo para la imágen" width="450px"
                        height="500px">
                </td>

                <td>
                    <img src="https://cdn.shopify.com/s/files/1/0562/6648/9929/products/Disenosintitulo-2023-04-03T212003.691.png?v=1680578448&width=533"
                        alt="Texto Alternativo para la imágen" width="550px" height="600px">
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