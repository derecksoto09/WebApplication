<!-- Definición del lenguaje de la página como inglés -->
<html lang="en">

<!-- Cabeza del codigo -->

<head>
    <!-- Metadatos para la codificación de caracteres -->
    <meta charset="UTF-8">
    <!-- Metadato para definir la compatibilidad con IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Metadato para ajustar la visualización en dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Aretes Danadeal</title>

    <!-- Enlace a hojas de estilo locales -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">

    <!-- Enlace a la fuente FontAwesome desde un servidor externo -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Enlace a la librería jQuery desde un servidor externo -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlace a kit de FontAwesome desde un servidor externo -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!-- Inicio de un bloque de script en JavaScript -->
    <script type="text/javascript">
        // Definición de la función para calcular el precio total
        function mostrarTotalAPagarMaterial(Aretes) {
            // Obtención de una referencia al formulario
            var forms = Aretes;
            // Obtención de referencias a elementos específicos en el formulario
            var mat1 = forms.querySelector('#Oro'); // Opción de material "Oro"
            var mat2 = forms.querySelector('#Plata'); // Opción de material "Plata"
            var units = forms.querySelector('#unidades').value; // Cantidad de unidades ingresadas
            var basedPrice = parseInt(forms.querySelector('#basedPrice').value); // Precio base de los aretes

            // Cálculo del precio total basado en el material seleccionado
            if (mat1.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 2000); // Precio con material "Oro"
            } else if (mat2.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 1000); // Precio con material "Plata"
            }
        }
    </script>
    <!-- Fin del bloque de script en JavaScript -->
</head>

<body>
    <!-- Encabezado con fondo negro -->
    <header style="background-color: black" style="top: 0px">
        <font color="white">
            <!-- Centro del texto -->
            <center>¡Descuentos exclusivos en camino!</center>
        </font>
    </header>

    <!-- Título principal con fondo rosa -->
    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>

    <!-- Centro del texto -->
    <center>¡Joyas con sello de calidad!</center>

    <!-- Párrafo de texto -->
    <p1>
        <!-- Centro el texto -->
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyería que maneja la firma
            DANADEAL. </center>
    </p1>
    <br><br><!-- Salto de línea -->

    <!-- Barra de navegación -->
    <nav>
        <a href="Inicio.php">Inicio</a> | <!-- Enlace a la página "Inicio.php" -->
        <a href="Historia.php">Historia</a> | <!-- Enlace a la página "Historia.php" -->
        <a href="Informacion.php">Información</a> | <!-- Enlace a la página "Informacion.php" -->
        <a href="Productos.php">Productos</a> <!-- Enlace a la página "Productos.php" -->
        <div class="animation start-portefolio"></div> <!-- Elemento de animación -->
    </nav>

    <!-- Contenedor de botones -->
    <div class="container-buttons">
        <a href="carritoCompras.php" class="one"></a> <!-- Enlace a "carritoCompras.php" con clase "one" -->
        <a href="PaginaLoginUser.php" class="two"></a> <!-- Enlace a "PaginaLoginUser.php" con clase "two" -->
    </div>

    <!-- Saltos de línea para separación -->
    <br><br><br><br>

    <!-- Párrafo con alineación central -->
    <p ALIGN="CENTER">
        <!-- Fuente con tamaño grande y color rosa -->
        <font size="+6" color="pink">Aretes</font>
    </p>

    <!-- Etiqueta de centro -->
    <center>

        <!-- Párrafo que contiene un formulario para cargar un producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete1">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">

                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡2000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes1.png" id="Aretes1" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">

                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes1.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES DANZA DE CIRCONITAS
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES DANZA DE CIRCONITAS" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete1'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete1'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete1'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="2000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="2000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete2">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡3500
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes2.png" id="Aretes2" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes2.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES SUEÑOS DE HELIOTROPO
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES SUEÑOS DE HELIOTROPO" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete2'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete2'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete2'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="3500" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="3500" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete3">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡5000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes3.png" id="Aretes3" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes3.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES DESLUMBRAMIENTO DE PIRITA
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES DESLUMBRAMIENTO DE PIRITA" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete3'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete3'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete3'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="5000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete4">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡7000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes5.png" id="Aretes5" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes5.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES REMOLINO DE RUBÍ
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES REMOLINO DE RUBÍ" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete4'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete4'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete4'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="7000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="7000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete5">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡5000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes7.png" id="AreteS7" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes7.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES RÁFAGA DE AMETRINO
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES RÁFAGA DE AMETRINO" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete5'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete5'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete5'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="5000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete6">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡6500
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes8.png" id="Aretes8" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes8.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES LUMINISCENCIA CORAL
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES LUMINISCENCIA CORAL" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete6'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete6'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete6'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="6500" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="6500" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete7">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡5000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes9.png" id="Aretes9" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes9.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES ESPLENDOR DE PARAÍSO
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES ESPLENDOR DE PARAÍSO" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete7'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete7'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete7'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="5000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete8">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡2000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes11.png" id="Aretes11" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes11.png" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES ESTRELLA FULGURANTE
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES ESTRELLA FULGURANTE" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete8'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete8'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete8'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="2000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="2000" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete9">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡5500
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes13.webp" id="Aretes13" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes13.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES VUELO DE CORDIERITA
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES VUELO DE CORDIERITA" style="display: none;"
                            name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete9'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete9'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete9'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="5500" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="5500" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>

        <br>

        <!-- Párrafo que contiene un formulario para cargar otro producto -->
        <p>
            <!-- Formulario que envía los datos a cargarProducto.php usando el método POST -->
        <form action="cargarProducto.php" method="post" id="formArete10">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡4500
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Aretes/Aretes14.webp" id="Aretes14" alt="No funciono la ubicacion"
                            alt="Texto Alternativo para la imágen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Aretes/Aretes14.webp" style="display: none;"
                            name="imagenProducto">
                    </th>

                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        ARETES JARDINES OSCUROS
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="ARETES JARDINES OSCUROS" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" required id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete10'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete10'))">
                        <label for="Plata">Plata (+₡1000)</label>
                        <br><br>
                    </th>
                    <!-- Celda que contiene las opciones para elegir el color del producto -->
                    <th colspan="1">
                        <label for="color">Elija el color del producto:</label>
                        <br><br>
                        <select name="colorProducto" id="colorProducto" required>
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

                <!-- Tercera fila de la tabla -->
                <tr>
                    <!-- Celda que permite elegir la cantidad de unidades del producto -->
                    <th colspan="1">
                        <label for="unidades">Unidades del producto que se desean:</label>
                        <br><br>
                        <input type="number" name="unidades" id="unidades" value="1"
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete10'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="4500" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="4500" style="display: none;" name="basedPrice" id="basedPrice">
                        <br><br>
                    </th>
                </tr>

                <!-- Cuarta fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el botón para agregar el producto al carrito -->
                    <th colspan="2">
                        <br>
                        <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                        <br><br>
                    </th>
                </tr>
            </table>
        </form>
        </p>
    </center> <!-- cierre del centro de alineación -->

    <br><br> <!-- Espacios en blanco adicionales -->

    <!-- Sección del pie de página (footer) -->
    <footer class="pie-pagina">
        <!-- Primer grupo de elementos en el pie de página -->
        <div class="grupo-1">
            <!-- Caja 1 -->
            <div class="box">
                <figure>
                    <!-- Enlace con logo de Danadeal -->
                    <a href="#">
                        <img src="Imagenes/footer/Danadeal-logos.jpeg" alt="Logo de Danadeal">
                    </a>
                </figure>
            </div>
            <!-- Caja 2 -->
            <div class="box">
                <h2>Podes encontrarnos</h2>
                <p>¡Joyas con sello de calidad!<br><br>
                    El principal propósito de este sitio web es mostrar la gran variedad de joyería que maneja la firma
                    DANADEAL. </p>
                <p></p>
            </div>
            <!-- Caja 3 -->
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
        <!-- Segundo grupo de elementos en el pie de página -->
        <div class="grupo-2">
            <!-- Información de copyright y derechos reservados -->
            <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                <p style="font-size: 12px;"> Todos los Derechos Reservados </p>
            </small>
        </div>
    </footer> <!-- Fin de la sección del pie de página -->

</body> <!-- Fin del cuerpo del documento -->

</html> <!-- Fin del documento HTML -->