<!-- Inicio del documento HTML -->

<html lang="en">

<head>

    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collares Danadeal</title>

    <!-- Enlaces a hojas de estilo -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Enlace a jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- JavaScript para calcular el precio total basado en el material seleccionado -->
    <script type="text/javascript">
        function mostrarTotalAPagarMaterial(Collar) {
            var forms = Collar;
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
    </header>

    <!-- Título principal "DANADEAL" con fondo rosado -->
    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>

    <!-- Slogan del sitio -->
    <center>¡Joyas con sello de calidad!</center>

    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL.
        </center>
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

    <table>
        <tr>
            <td width="1000px"></td>
            <td width="700px"></td>
            <td width="50px"></td>
            <td width="1000px"></td>
            <td width="90px"></td>
            <td width="1000px"></td>
            <td width="700px"></td>
            <td width="1000px"></td>
            <td width="1000px"></td>
        </tr>
    </table>

    <br><br><br><br>

    <!-- Sección de Collares -->
    <p ALIGN="CENTER">

        <!-- Título de la sección -->
        <font size="+6" color="pink">Collares</font>

    </p>
    <center>
        <p>

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar1">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡4000
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Collares/Collar3.png" id="Collar3" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar3.png" style="display: none;"
                            name="imagenProducto">

                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR LUZ DEL SOL
                        <input type="text" value="COLLAR LUZ DEL SOL" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar1'))" required>
                        <label for="Oro"> Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar1'))">
                        <label for="Plata"> Plata (+₡1000)</label>
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

                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar1'))" required>
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="4000" readonly>
                        <input type="text" value="4000" style="display: none;" name="basedPrice" id="basedPrice">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar2">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡6000
                        <br>
                        <br>

                        <img src="Imagenes/Productos/Collares/Collar4.png" id="Collar4" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar4.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR LÁGRIMA DE ESMERALDA
                        <input type="text" value="COLLAR LÁGRIMA DE ESMERALDA" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar2'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar2'))">
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

                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar2'))">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar3">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡10000
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Collares/Collar5.png" id="Collar5" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar5.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR BRILLO NOCTURNO
                        <input type="text" value="COLLAR BRILLO NOCTURNO" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar3'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar3'))">
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

                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar3'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="10000" readonly>
                        <input type="text" value="10000" style="display: none;" name="basedPrice" id="basedPrice">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar4">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡3000
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Collares/Collar8.webp" id="Collar8" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar8.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR QUINTA CÓSMICA
                        <input type="text" value="COLLAR QUINTA CÓSMICA" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar4'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar4'))">
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


                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar4'))">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar5">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡4500
                        <br>
                        <br>

                        <img src="Imagenes/Productos/Collares/Collar9.webp" id="Collar9" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar9.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR CORALINA BRILLANTE
                        <input type="text" value="COLLAR CORALINA BRILLANTE" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar5'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar5'))">
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


                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar5'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="4500" readonly>
                        <input type="text" value="4500" style="display: none;" name="basedPrice" id="basedPrice">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar6">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡6600
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Collares/Collar10.webp" id="Collar10"
                            alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px"
                            height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar10.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR CORAZÓN RADIANTE
                        <input type="text" value="COLLAR CORAZÓN RADIANTE" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar6'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar6'))">
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


                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar6'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="6600" readonly>
                        <input type="text" value="6600" style="display: none;" name="basedPrice" id="basedPrice">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar7">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡10750
                        <br><br>
                        <img src="Imagenes/Productos/Collares/Collar13.png" id="Collar13" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar13.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR TESORO RUBÍ
                        <input type="text" value="COLLAR TESORO RUBÍ" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar7'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar7'))">
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

                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar7'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="10750" readonly>
                        <input type="text" value="10750" style="display: none;" name="basedPrice" id="basedPrice">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar8">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡4800
                        <br>
                        <br>
                        <img src="Imagenes/Productos/Collares/Collar14.webp" id="Collar14"
                            alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px"
                            height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar14.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR ECLIPSE LUNAR
                        <input type="text" value="COLLAR ECLIPSE LUNAR" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar8'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar8'))">
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


                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar8'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="4800" readonly>
                        <input type="text" value="4800" style="display: none;" name="basedPrice" id="basedPrice">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar9">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡10400
                        <br><br>
                        <img src="Imagenes/Productos/Collares/Collar17.png" id="Collar17" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar17.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR PORTAL DEL DESIERTO
                        <input type="text" value="COLLAR PORTAL DEL DESIERTO" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar9'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar9'))">
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


                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar9'))">
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

            <!-- Formulario para agregar un collar al carrito de compras -->
        <form action="cargarProducto.php" method="post" id="formCollar10">
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <tr>

                    <!-- Información del collar y su imagen -->
                    <th rowspan="4">
                        ₡4300
                        <br><br>
                        <img src="Imagenes/Productos/Collares/Collar19.png" id="Collar19" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <input type="text" value="Imagenes/Productos/Collares/Collar19.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Nombre del collar -->
                    <th colspan="2">
                        <br>
                        COLLAR ETERNA FASCINACIÓN
                        <input type="text" value="COLLAR ETERNA FASCINACIÓN" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>

                <tr>

                    <!-- Información del material y color del collar -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar10'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formCollar10'))">
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


                <!-- Información de unidades y precio del collar -->
                <tr>
                    <th colspan="1">
                        <label for="unidades">unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formCollar10'))">
                        <br><br>
                    </th>
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="4300" readonly>
                        <input type="text" value="4300" style="display: none;" name="basedPrice" id="basedPrice">
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
            </p>
    </center>
    <br><br>

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
                    El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
                    DANADEAL. </p>
                <p></p>
            </div>

            <!-- Caja con enlaces a redes sociales -->
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>

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