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
    <title>Dijes Danadeal</title>
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
        function mostrarTotalAPagarMaterial(Dije) {
            // Obtención de una referencia al formulario
            var forms = Dije;
            // Obtención de referencias a elementos específicos en el formulario
            var mat1 = forms.querySelector('#Oro'); // Opción de material "Oro"
            var mat2 = forms.querySelector('#Plata'); // Opción de material "Plata"
            var units = forms.querySelector('#unidades').value; // Cantidad de unidades ingresadas
            var basedPrice = parseInt(forms.querySelector('#basedPrice').value); // Precio base de los dijes

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
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
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
        <font size="+6" color="pink">Dijes</font>
    </p>

    <!-- Etiqueta de centro -->
    <center>

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije1">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡2700
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeAncla.webp" id="DijeAncla" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen del producto -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeAncla.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE ANCLA DORADA
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE ANCLA DORADA" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije1'))" required>
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije1'))">
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije1'))" required>
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="2700" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="2700" style="display: none;" name="basedPrice" id="basedPrice">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije2">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡3450
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeArbol.webp" id="DijeArbol" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeArbol.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE NATURALEZA COLGANTE
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE NATURALEZA COLGANTE" style="display: none;"
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
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije2'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije2'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije2'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="number" name="precio" id="precio" value="3450" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="3450" style="display: none;" name="basedPrice" id="basedPrice">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije3">
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
                        <img src="Imagenes/Productos/Dijes/DijeBola2.webp" id="DijeBola2" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeBola2.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE ESPIRAL DE LA VIDA
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE ESPIRAL DE LA VIDA" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije3'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije3'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije3'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="number" name="precio" id="precio" value="3500" readonly>
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije4">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡3750
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeCorazonMezclado.webp" id="DijeCorazonMezclado"
                            alt="No funcionó la ubicación" alt="Texto Alternativo para la imagen" width="200px"
                            height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeCorazonMezclado.webp"
                            style="display: none;" name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE TESORO DEL CORAZÓN
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE TESORO DEL CORAZÓN" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije4'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije4'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije4'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="number" name="precio" id="precio" value="3750" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="3750" style="display: none;" name="basedPrice" id="basedPrice">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije5">
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
                        <img src="Imagenes/Productos/Dijes/DijeFigura2.webp" id="DijeFigura2"
                            alt="No funcionó la ubicación" alt="Texto Alternativo para la imagen" width="200px"
                            height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeFigura2.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE MARAVILLA DE FELICIDAD
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE MARAVILLA DE FELICIDAD" style="display: none;"
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
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije5'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije5'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije5'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="number" name="precio" id="precio" value="4500" readonly>
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

        <br>

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije6">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡4000
                        <br>
                        <br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeFlor.webp" id="DijeFlor" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeFlor.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE GIRASOL RELUCIENTE
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE GIRASOL RELUCIENTE" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije6'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije6'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije6'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="number" name="precio" id="precio" value="4000" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="4000" style="display: none;" name="basedPrice" id="basedPrice">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije7">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡3500
                        <br><br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeLlave.webp" id="DijeLlave" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeLlave.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE PUERTA AL PARAÍSO
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE PUERTA AL PARAÍSO" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije7'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije7'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije7'))">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije8">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡5500
                        <br><br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeNegro.webp" id="DijeNegro" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeNegro.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE SÍMBOLO DE PROSPERIDAD
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE SÍMBOLO DE PROSPERIDAD" style="display: none;"
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
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije8'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije8'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije8'))">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije9">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡3700
                        <br><br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeTortuga.webp" id="DijeTortuga"
                            alt="No funcionó la ubicación" alt="Texto Alternativo para la imagen" width="200px"
                            height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeTortuga.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE BALANZA DE VTEL
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE BALANZA DE VTEL" style="display: none;" name="nombreProducto">
                        <br><br>
                    </th>
                </tr>

                <!-- Segunda fila de la tabla -->
                <tr>
                    <!-- Celda que contiene las opciones para elegir el material del producto -->
                    <th colspan="1">
                        <label for="material">Elija el material del producto:</label>
                        <br><br>
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije9'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije9'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije9'))">
                        <br><br>
                    </th>
                    <!-- Celda que muestra el precio a pagar por el producto -->
                    <th colspan="1">
                        <label for="precio">Precio por pagar:</label>
                        <br><br>
                        <input type="text" name="precio" id="precio" value="3700" readonly>
                        <!-- Campo oculto para almacenar el precio base del producto -->
                        <input type="text" value="3700" style="display: none;" name="basedPrice" id="basedPrice">
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

        <p> <!-- Párrafo que contiene un formulario para cargar un producto -->
        <form action="cargarProducto.php" method="post" id="formDije10">
            <!-- Tabla que contiene la información del producto -->
            <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                <!-- Primera fila de la tabla -->
                <tr>
                    <!-- Celda que contiene el precio y la imagen del producto -->
                    <th rowspan="4">
                        ₡6500
                        <br><br>
                        <!-- Imagen del producto -->
                        <img src="Imagenes/Productos/Dijes/DijeVerde.webp" id="DijeVerde" alt="No funcionó la ubicación"
                            alt="Texto Alternativo para la imagen" width="200px" height="200px">
                        <!-- Campo oculto para almacenar la ubicación de la imagen -->
                        <input type="text" value="Imagenes/Productos/Dijes/DijeVerde.webp" style="display: none;"
                            name="imagenProducto">
                    </th>
                    <!-- Celda que contiene el nombre del producto -->
                    <th colspan="2">
                        <br>
                        DIJE ESMERALDA TRIANGULAR
                        <!-- Campo oculto para almacenar el nombre del producto -->
                        <input type="text" value="DIJE ESMERALDA TRIANGULAR" style="display: none;"
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
                        <input type="radio" name="material" value="Oro" id="Oro" required
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije10'))">
                        <label for="Oro">Oro (+₡2000)</label><br>
                        <input type="radio" name="material" value="Plata" id="Plata"
                            onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije10'))">
                        <label for="Plata">Plata (+₡1000)</label><br>
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
                            onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije10'))">
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