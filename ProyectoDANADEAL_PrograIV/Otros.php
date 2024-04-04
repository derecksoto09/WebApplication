<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título de la página -->    
    <title>Otros Danadeal</title>

    <!-- Scripts de JavaScript, incluyendo jQuery y FontAwesome -->
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts de JavaScript, incluyendo jQuery y FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

  <!-- Función JavaScript para calcular el precio total -->
  <script type="text/javascript">
   //Se pide un parametro llamado pulsera, que en este caso son cada de una de las pulseras que puede elegir por ello cada tabla se mete dentro de un form
        function mostrarTotalAPagarMaterial(Otros) {
            //Se define una variable forms para poder acceder a los datos que posee el form
            var forms = Otros;
            //Se guardan los datos del form en variables a las que podamos acceder
            var mat1 = forms.querySelector('#MatCaro');
            var mat2 = forms.querySelector('#MatBarato');
            var units = forms.querySelector('#unidades').value;
            var basedPrice = parseInt(forms.querySelector('#basedPrice').value);
            //Se compara el material(Por medio del checked) ya que el precio para cada material es distinto
            if (mat1.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 2000);
               
            } else if (mat2.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 1000);
                
            }    
        }
    </script>

</head>

<body>

    <!-- Encabezado -->
    <header style="background-color: black" style="top: 0px">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
        </font>
    </header>

    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>

    <center>¡Joyas con sello de calidad!</center>
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma DANADEAL. </center>
    </p1>

    <BR>
    
    <!-- Menú de navegación, al cual se le aplica la clase animation start-portefolio con el fin de que se muestre seleccionado visualmente el apartado de productos-->
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

    <p ALIGN="CENTER">
       <font size="+6" color="pink">Otros</font>
    </p>

<center>
    <p>

    <!-- Cada una de las siguientes tablas corresponde a cada una de las opciones que puede elegir el usuario,
    de los tipos de Pulseras en este caso. Estas tablas se encuentran dentro de un form con dos finalidades
    La primera es poder enviar el producto que el cliente desea con todos sus datos seleccionados a otro apartado en este caso a la página 
    CargarProducto.php, y la segunda finalidad es poder hacer uso de la función de javascript
    mostrarTotalAPagarMaterial() ,ya que con esta función podrá ver en tiempp real el precio del producto 
    seleccionado, asimismo se hace uso del evento onclick en los input que corresponden a la selección de
    los materiales y la cantidad, ya que el precio total cambia unicamente en estos casos-->

      <!-- Tabla 1(CAJA PARA ACCESORIOS) -->
     <form action="cargarProducto.php" method="post" id="formOtros1">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡6500
                    <br>
                    <br>
                    <img src="Imagenes/Productos/Otros/CajaAccesorios.png" id="CajaAccesorios" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/CajaAccesorios.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    CAJA PARA ACCESORIOS
                    <input type="text" value="CAJA PARA ACCESORIOS" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros1'))" required>
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros1'))">
                    <label for="Plastico">Plástico (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros1'))" required>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="6500" readonly>
                    <input type="text" value="6500" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>

   <p>
     <!-- Tabla 2(CAJA GRANDE PARA ANILLO) -->
     <form action="cargarProducto.php" method="post" id="formOtros2">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡7000
                    <br><br>
                    <img src="Imagenes/Productos/Otros/CajaAnillo2.png" id="CajaAnillo2" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/CajaAnillo2.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    CAJA GRANDE PARA ANILLO
                    <input type="text" value="CAJA GRANDE PARA ANILLO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros2'))">
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros2'))">
                    <label for="Plastico">Plástico (+₡1000)</label><br>
                
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros2'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="number" name="precio" id="precio" value="7000" readonly>
                    <input type="text" value="7000" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>


    <p>
      <!-- Tabla 3(CAJA PEQUEÑA PARA ANILLO) -->
      <form action="cargarProducto.php" method="post" id="formOtros3">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡5000
                    <br><br>
                    <img src="Imagenes/Productos/Otros/CajaDeAnillo1.png" id="CajaDeAnillo1" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/CajaDeAnillo1.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    CAJA PEQUEÑA PARA ANILLO
                    <input type="text" value="CAJA PEQUEÑA PARA ANILLO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros3'))">
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros3'))">
                    <label for="Plastico">Plástico (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros3'))">
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

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>

    <p>
      <!-- Tabla 4(EMPAQUE PARA ARTÍCULOS) -->
      <form action="cargarProducto.php" method="post" id="formOtros4">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡2750
                    <br><br>
                    <img src="Imagenes/Productos/Otros/CajaOvalo.png" id="CajaOvalo" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/CajaOvalo.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    EMPAQUE PARA ARTÍCULOS
                    <input type="text" value="EMPAQUE PARA ARTÍCULOS" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Carton" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros4'))">
                    <label for="Carton">Cartón (+₡2000)</label><br>
                    <input type="radio" name="material" value="Papel" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros4'))">
                    <label for="Papel">Papel (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros4'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="2750" readonly>
                    <input type="text" value="2750" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>


    <p>
      <!-- Tabla 5(CUELLO PARA COLLAR) -->    
      <form action="cargarProducto.php" method="post" id="formOtros5">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡6600
                    <br><br>
                    <img src="Imagenes/Productos/Otros/CuelloParaCollar.png" id="CuelloParaCollar" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/CuelloParaCollar.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    CUELLO PARA COLLAR
                    <input type="text" value="CUELLO PARA COLLAR" style="display: none;"
                        name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros5'))">
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros5'))">
                    <label for="Plastico">Plástico (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros5'))">
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

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>


    <p>
      <!-- Tabla 6(MANO PARA ANILLOS) -->  
      <form action="cargarProducto.php" method="post" id="formOtros6">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡5500
                    <br><br>    
                    <img src="Imagenes/Productos/Otros/ManoParaAnillo.png" id="ManoParaAnillo" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/ManoParaAnillo.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    MANO PARA ANILLOS
                    <input type="text" value="MANO PARA ANILLOS" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros6'))">
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros6'))">
                    <label for="Plastico">Plástico (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros6'))">
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

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
       </form>
    </p><br>


    <p>
      <!-- Tabla 7(FRANELA PARA LIMPIEZA) -->  
      <form action="cargarProducto.php" method="post" id="formOtros7">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡2000
                    <br><br>  
                    <img src="Imagenes/Productos/Otros/Franela.png" id="Franela" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/Franela.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    FRANELA PARA LIMPIEZA
                    <input type="text" value="FRANELA PARA LIMPIEZA" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Lana" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros7'))">
                    <label for="Lana">Lana (+₡2000)</label><br>
                    <input type="radio" name="material" value="Algodon" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros7'))">
                    <label for="Algodon">Algodón (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros7'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="2000" readonly>
                    <input type="text" value="2000" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>

    <p>
      <!-- Tabla 8(STAND PARA ANILLO) -->  
      <form action="cargarProducto.php" method="post" id="formOtros8">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡5500
                    <br><br>
                    <img src="Imagenes/Productos/Otros/StandAnillo.png" id="StandAnillo" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/StandAnillo.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    STAND PARA ANILLO
                    <input type="text" value="STAND PARA ANILLO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros8'))">
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros8'))">
                    <label for="Plastico">Plástico (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros8'))">
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

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>
                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>

    <p>
      <!-- Tabla 9(STAND PARA PRODUCTOS) -->  
      <form action="cargarProducto.php" method="post" id="formOtros9">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡5500
                    <br><br> 
                    <img src="Imagenes/Productos/Otros/StandJoyeria.png" id="StandJoyeria" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/StandJoyeria.png" style="display: none;"
                    name="imagenProducto">

                </th>

                <th colspan="2">
                    <br>
                    STAND PARA PRODUCTOS
                    <input type="text" value="STAND PARA PRODUCTOS" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Madera" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros9'))">
                    <label for="Madera">Madera (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plastico" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros9'))">
                    <label for="Plastico">Plástico (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros9'))">
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

            <tr>
                <th colspan="2">
                    <br>
                    <button type="sutmit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
      </form>
    </p><br>


    <p>
      <!-- Tabla 10(TOBILLERA ELEGANCIA LUCIENTE) -->  
      <form action="cargarProducto.php" method="post" id="formOtros10">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡4700
                <br><br>
                <img src="Imagenes/Productos/Otros/Tobillera2.webp" id="Tobillera" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Otros/Tobillera2.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    TOBILLERA ELEGANCIA LUCIENTE
                    <input type="text" value="TOBILLERA ELEGANCIA LUCIENTE" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="MatCaro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros10'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="MatBarato" onclick="mostrarTotalAPagarMaterial(document.getElementById('formOtros10'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
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

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formOtros10'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="4700" readonly>
                    <input type="text" value="4700" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

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
    
    <center>
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
                El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma DANADEAL. </p>
            <p></p>
        </div>

        <!-- Enlaces a redes sociales, este es otro grupo sin embargo lleva otro nombre para poder diferenciar -->
        <div class="box">
           <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>
                
            </div>
        </div>
    </div>

    <!-- Grupo de contenido 2 -->
    <div class="grupo-2">
        <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b><p style="font-size: 12px;"> Todos los Derechos Reservados<p></small>
    </div>

  </footer>
      
</body>

</html>