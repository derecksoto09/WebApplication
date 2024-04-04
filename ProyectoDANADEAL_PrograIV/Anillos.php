<!-- Inicio del documento HTML -->

<html lang="en">

<head>

    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anillos Danadeal</title>

    <!-- Enlaces a hojas de estilo -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Enlace a jQuery y FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!-- JavaScript para calcular el precio total basado en el material seleccionado -->
    <script type="text/javascript">
        function mostrarTotalAPagarMaterial(Anillo) {
            var forms = Anillo;
            var mat1 = forms.querySelector('#Oro');
            var mat2 = forms.querySelector('#Plata');
            var units = forms.querySelector('#unidades').value;
            var basedPrice = parseInt(forms.querySelector('#basedPrice').value);
            if (mat1.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 2000);

            } else if (mat2.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 1000);

            }
        }
    </script>

</head>

<body>

    <!-- Encabezado de la página con fondo negro y texto blanco -->
    <header style="background-color: black" style="top: 0px">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
        </font>

        <!-- Título principal "DANADEAL" con fondo rosado -->
        <h1 style="background-color: pink">
            DANADEAL
        </h1>
    </header>

    <!-- Slogan del sitio -->
    <center>¡Joyas con sello de calidad!</center>
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL. </center>
    </p1>
    <br>

    <!-- Navegación -->
    <nav>

        <!-- Enlaces de navegación a diferentes páginas -->
        <a href="Inicio.php">Inicio</a> |
        <a href="Historia.php">Historia</a> |
        <a href="Informacion.php">Información</a> |
        <a href="Productos.php">Productos</a>
        <div class="animation start-portefolio"></div>
    </nav>

    <!-- Botones de navegación y carrito de compras -->
    <div class="container-buttons">
        <a href="carritoCompras.php" class="one"></a>
        <a href="PaginaLoginUser.php" class="two"></a>
    </div>

    <br><br><br><br>

    <!-- Sección de Anillos -->
    <p ALIGN="CENTER">

        <!-- Título de la sección -->
        <font size="+6" color="pink">Anillos</font>

    </p>
    <center>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo1">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡5000
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo3.png" id="Anillo3" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo3.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO SUEÑO DORADO
                        <input type="text" value="ANILLO SUEÑO DORADO" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo1'))" required>
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo1'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo1'))" required>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5000" readonly>
                        <input type="text" value="5000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button> <br><br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo2">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡6000
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo4.png" id="Anillo4" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo4.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO VÓRTICE DE ONIX
                        <input type="text" value="ANILLO VÓRTICE DE ONIX" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo2'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo2'))">
                        <label for="Plata">Plata (+₡1000)</label><br>

                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo2'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="number" name="precio" id="precio" value="6000" readonly>
                        <input type="text" value="6000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo3">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡3000
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo6.webp" id="Anillo6" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo6.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO ESENCIA DEL AMOR
                        <input type="text" value="ANILLO ESENCIA DEL AMOR" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo3'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo3'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo3'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="3000" readonly>
                        <input type="text" value="3000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo4">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>
                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡5500
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo2.png" id="Anillo2" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo2.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO ESPECTRAL PLATEADO
                        <input type="text" value="ANILLO ESPECTRAL PLATEADO" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo4'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo4'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo4'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5500" readonly>
                        <input type="text" value="5500" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo5">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡3840
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo20.png" id="Anillo20" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo20.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO DESTELLOS DEL CORAZÓN
                        <input type="text" value="ANILLO DESTELLOS DEL CORAZÓN" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo5'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo5'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo5'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="3840" readonly>
                        <input type="text" value="3840" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo6">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡7190
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo11.png" id="Anillo11" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo11.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO VÍNCULO INFINITO
                        <input type="text" value="ANILLO VÍNCULO INFINITO" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo6'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo6'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo6'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="7190" readonly>
                        <input type="text" value="7190" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo7">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡5820
                        <br><br>
                        <img src="Imagenes/Productos/Anillos/Anillo21.png" id="Anillo21" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo21.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO AURORA FLOREAL
                        <input type="text" value="ANILLO AURORA FLOREAL" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo7'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo7'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo7'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5820" readonly>
                        <input type="text" value="5820" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo8">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡9260
                        <br>
                        <img src="Imagenes/Productos/Anillos/Anillo13.webp" id="Anillo13"
                            alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px"
                            height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo13.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO HORIZONTE MORGANITA
                        <input type="text" value="ANILLO HORIZONTE MORGANITA" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo8'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo8'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo8'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="9260" readonly>
                        <input type="text" value="9260" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo9">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡10400
                        <br><br>
                        <img src="Imagenes/Productos/Anillos/Anillo17.png" id="Anillo17" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo17.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO REFLEJOS DE ZAFIRO
                        <input type="text" value="ANILLO REFLEJOS DE ZAFIRO" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo9'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo9'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo9'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="10400" readonly>
                        <input type="text" value="10400" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <br>
        <p>

            <!-- Formulario para agregar un anillo al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formAnillo10">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del anillo y su imagen -->
                    <th rowspan="4">
                        ₡6380
                        <br><br>
                        <img src="Imagenes/Productos/Anillos/Anillo18.png" id="Anillo18" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Anillos/Anillo18.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del anillo -->
                    <th colspan="2">
                        <br>
                        ANILLO ECLIPSE DE RUBÍ
                        <input type="text" value="ANILLO ECLIPSE DE RUBÍ" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                    <!-- Información del material y color del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo10'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formAnillo10'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>

                            <!-- Opciones de color -->
                            <option hidden selected>--Seleccione un color--</option>
                            <option value="Plata">Plata</option>
                            <option value="Oro">Oro</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Rosado">Rosado</option>
                            <option value="Anaranjado">Anaranjado</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Negro">Negro</option>
                        </select>
                        <br><br>
                    </th>
                </tr>

                <!-- Información de unidades y precio del anillo -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formAnillo10'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="6380" readonly>
                        <input type="text" value="6380" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Botón para agregar al carrito -->
                <tr>
                    <th colspan="2">
                        <br>
                        <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
        <center><br><br>

            <!-- Pie de página -->
            <footer class="pie-pagina">

                <!-- Primer grupo de elementos en el pie de página -->
                <div class="grupo-1">

                    <!-- Caja con el logo de Danadeal enlazado a la página principal -->
                    <div class="box">
                        <figure>
                            <a href="#">
                                <img src="Imagenes/footer/Danadeal-logos.jpeg" alt="Logo de Danadeal">
                            </a>
                        </figure>
                    </div>

                    <!-- Caja con información de contacto y propósito del sitio web -->
                    <div class="box">
                        <h2>Podes encontrarnos</h2>
                        <p>¡Joyas con sello de calidad!<br><br>
                            El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja
                            la firma DANADEAL. </p>
                        <p></p>
                    </div>

                    <!-- Caja con enlaces a redes sociales -->
                    <div class="box">
                        <h2>SIGUENOS</h2>
                        <div class="red-social">
                            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin"
                                class="fa fa-twitter"></a>

                        </div>
                    </div>
                </div>

                <!-- Segundo grupo de elementos en el pie de página -->
                <div class="grupo-2">

                    <!-- Información de derechos de autor y mensaje -->
                    <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                        <p style="font-size: 12px;"> Todos los Derechos Reservados
                        <p>
                    </small>
                </div>
            </footer>
</body>

</html>