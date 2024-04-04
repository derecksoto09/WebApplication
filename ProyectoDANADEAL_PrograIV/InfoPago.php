<html lang="en">

<?php
session_start(); 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" type="text/css" href="Boton.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        //Función que actualiza el precio final conforme la provincia que elija el cliente si es entrega a domicilio
        function actualizarPrecio() {

            const provinciaSeleccionada = document.getElementById('provincia').value;
            const precioInput = document.getElementById('Precio');
            const precioBase = parseInt(document.getElementById('basedPrice').value);
            const envio = document.getElementById('envio');


            if (provinciaSeleccionada === "San José" || provinciaSeleccionada === "Heredia" || provinciaSeleccionada === "Alajuela" || provinciaSeleccionada === "Cartago") {

                precioTotal = precioBase + 2000;
                envio.value = 2000;

            } else if (provinciaSeleccionada === "Guanacaste" || provinciaSeleccionada === "Puntarenas" || provinciaSeleccionada === "Limón") {

                precioTotal = precioBase + 3500;
                envio.value = 3500;

            }

            precioInput.value = precioTotal;
            //Se calcula el IVA de ese precio
            calcularIVA(precioTotal);

        }


        //Despliega las opciones de efectivo
        function mostrarEfectivo() {
            document.getElementById('Efectivo').style.display = 'block';
            document.getElementById('Tarjeta').style.display = 'none';
            document.getElementById('Sinpe').style.display = 'none';
        }
        //Despliega las opciones de tarjeta
        function mostrarTarjeta() {
            document.getElementById('Tarjeta').style.display = 'block';
            document.getElementById('Efectivo').style.display = 'none';
            document.getElementById('Sinpe').style.display = 'none';
        }
        //Despliega las opciones de SINPE movil
        function mostrarSinpe() {
            document.getElementById('Sinpe').style.display = 'block';
            document.getElementById('Efectivo').style.display = 'none';
            document.getElementById('Tarjeta').style.display = 'none';
        }
        //Despliega la opción de entrega a domicilio
        function mostrarDomicilio() {
            document.getElementById('Domicilio').style.display = 'block';
            document.getElementById('Tienda').style.display = 'none';
        }
        //Despliega la opción de entrega en tienda
        function mostrarTienda() {
            document.getElementById('Precio').value = document.getElementById('basedPrice').value;
            document.getElementById('PrecioConIva').value = parseInt((document.getElementById('Precio').value * 0.13)) + parseInt(document.getElementById('Precio').value);
            document.getElementById('envio').value = 0;
            document.getElementById('Tienda').style.display = 'block';
            document.getElementById('Domicilio').style.display = 'none';
        }
        //Si recoje en tienda, se validan que las fechas de entrega sean válidas
        function ValidarFecha() {
            const fechaInput = document.querySelector('#dia');

            fechaInput.addEventListener('input', function () {
                const fechaSeleccionada = new Date(fechaInput.value);
                const fechaActual = new Date();

                // Verificar si el día seleccionado es domingo (día 0 en JavaScript)
                if (fechaSeleccionada.getDay() === 6) {
                    alert('No se permite seleccionar días domingos.');
                    fechaInput.value = ''; // Borra la fecha seleccionada
                    return;
                }

                // Verificar si el día seleccionado es anterior al día actual
                if (fechaSeleccionada < fechaActual) {
                    alert('No se permiten fechas anteriores al día actual.');
                    fechaInput.value = ''; // Borra la fecha seleccionada
                }
            });
        }
        //Muestra la sección de cargando al comprar y redirige
        function mostrarCargando() {
            document.getElementById('Cargando').style.display = 'block';
            document.getElementById('InfoPago').style.display = 'none';

            setTimeout(function () {
                window.location.href = 'Factura.php';
            }, 5000); // 5000 milisegundos = 5 segundos
        }

        //Función para calcular el IVA del producto
        function calcularIVA(precioTotal) {
            const precioConIva = (precioTotal * 0.13) + precioTotal;
            document.getElementById('PrecioConIva').value = precioConIva;
        }
    </script>

    <title>Informacion Pago Danadeal</title>

</head>

<body align="center">

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
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL. </center>
    </p1>
    <BR>

    <br>
    <br>
    <br>
    <br>
    <div id="InfoPago">
        <p ALIGN="CENTER" name="titulo" id="titulo">
            <font size="+6" color="pink">Información importante para el pago</font>
        </p>
        <br>
        <center>

            <form name="infopago" id="infopago" action="Factura.php" method="POST">
                <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                    <tr>
                        <th>
                            <br>
                            INGRESE LA INFORMACIÓN QUE SE LE VA A SOLICITAR A CONTINUACIÓN:
                            <br><br>
                        </th>
                    <tr>
                    <tr>
                        <th>
                            <label for="pago">Elija el metodo de pago:</label>
                            <br><br>
                            <input type="radio" name="pago" value="Efectivo" id="efectivo" onclick="mostrarEfectivo()"
                                required>
                            <label for="Efectivo">Efectivo</label><br>
                            <input type="radio" name="pago" value="Tarjeta" id="tarjeta" onclick="mostrarTarjeta()"
                                required>
                            <label for="Tarjeta">Tarjeta</label><br>
                            <input type="radio" name="pago" value="Sinpe" id="sinpe" onclick="mostrarSinpe()" required>
                            <label for="Sinpe">Sinpe</label>
                            <br><br>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div id="Efectivo" style="display:none">
                                <label for="tipoMoneda">Seleccione el tipo de moneda con el que pagará: </label>
                                <br><br>
                                <select name="tipoMoneda" id="tipoMoneda">
                                    <option hidden value="" selected>--Seleccione un tipo de moneda--</option>
                                    <option value="Colones">Colónes</option>
                                    <option value="Dolares">Dólares</option>
                                </select>
                                <br><br>
                                <label for="pago">Pagará el monto completo:</label>
                                <br><br>
                                <input type="radio" name="monto" value="Si" id="Si">
                                <label for="Si">Si</label><br>
                                <input type="radio" name="monto" value="No" id="No">
                                <label for="No">No</label>
                                <br><br>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div id="Tarjeta" style="display:none">
                                <label for="tipoTarjeta">Seleccione el tipo de tarjeta: </label>
                                <br><br>
                                <select name="tipoTarjeta" id="tipoTarjeta">
                                    <option hidden value="" selected>--Seleccione un tipo de tarjeta--</option>
                                    <option value="VISA">VISA</option>
                                    <option value="MasterCard">MasterCard</option>
                                    <option value="AMEX">AMEX</option>
                                </select>
                                <br><br>
                                <label for="numTarjeta">Introduzca el número de tarjeta:</label>
                                <br><br>
                                <input type="number" name="tarjeta" id="tarjeta" value="">
                                <br><br>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div id="Sinpe" style="display:none">
                                <label for="sinpe">Introduzca el número de celular:</label>
                                <br><br>
                                <input type="number" name="sinpe" id="sinpe">
                                <br><br>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="entrega">Elija el metodo de entrega:</label>
                            <br><br>
                            <input type="radio" name="entrega" value="Tienda" id="tienda" onclick="mostrarTienda()"
                                required>
                            <label for="tienda">Retirar en tienda</label><br>
                            <input type="radio" name="entrega" value="Domicilio" id="domicilio"
                                onclick="mostrarDomicilio()" required>
                            <label for="domicilio">Entrega a domicilio</label><br>
                            <br><br>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div id="Tienda" style="display:none">
                                <label for="dia">Seleccione el día cuando será retirado:</label>
                                <br><br>
                                <input type="date" name="dia" value="Dia" id="dia" onclick="ValidarFecha()">
                                <br><br>
                                <label for="hora">Introduzca la hora:</label>
                                <br><br>
                                <input type="time" name="hora" id="hora" min="09:00" max="19:00">
                                <br><br>
                                <br><br>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div id="Domicilio" style="display:none">
                                <label for="provincia">Seleccione la provincia en donde será la entrega:</label>
                                <br><br>
                                <select name="provincia" id="provincia" onclick="actualizarPrecio()">
                                    <option hidden selected>--Seleccione una provincia--</option>
                                    <option value="San José">San José (+₡2000)</option>
                                    <option value="Alajuela">Alajuela (+₡2000)</option>
                                    <option value="Heredia">Heredia (+₡2000)</option>
                                    <option value="Guanacaste">Guanacaste (+₡3500)</option>
                                    <option value="Cartago">Cartago (+₡2000)</option>
                                    <option value="Limón">Limón (+₡3500)</option>
                                    <option value="Puntarenas">Puntarenas (+₡3500)</option>
                                </select>
                                <br><br>
                            </div>
                        </th>
                    </tr>
                </table>

                <br><br>
                <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                    <tr>
                        <th colspan="2">
                            <br>
                            PRECIO TOTAL A PAGAR:
                            <br><br>
                        </th>
                        <th colspan="2"><br>
                            <!-- El echo imprime el valor de la sesión de pagoTotal almacenada. Una está con "none" porque es necesaria para el cálculo -->
                            <input type="number" name="Precio" id="Precio"
                                value="<?php echo $_SESSION['PrecioTotalProductos'] ?>" readonly>
                            <input type="number" value="<?php echo $_SESSION['PrecioTotalProductos'] ?>"
                                style="display: none;" name="basedPrice" id="basedPrice">
                            <br><br>
                        </th>
                    <tr>
                </table>

                <table border="10" width="70%" align="center" bgcolor="pink" style="display:none">
                    <tr>
                        <th colspan="2">
                            <br>
                            COSTO DE ENVÍO:
                            <br><br>
                        </th>
                        <th colspan="2"><br>
                            <input type="number" name="envio" id="envio" value="0" readonly>
                            <br><br>
                        </th>
                    <tr>
                </table>
                <br>
                <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                    <tr>
                        <th colspan="2">
                            <br>
                            PRECIO TOTAL A PAGAR CON IVA:
                            <br><br>
                        </th>
                        <th colspan="2"><br>
                            <!--   Imprime precio con IVA incluído-->
                            <input type="number" name="PrecioConIva" id="PrecioConIva"
                                value="<?php echo (($_SESSION['PrecioTotalProductos'] * 0.13) + $_SESSION['PrecioTotalProductos']) ?>"
                                readonly>
                            <br><br>
                        </th>
                    <tr>
                </table>
                <br><br>
                <button type="sutmit" value="aceptar" name="aceptar" id="aceptar" class="ov-btn-grow-ellipse"
                    onclick="mostrarCargando()"> Realizar pago</button>
                <button type="reset" value="cancelar" name="cancelar" class="ov-btn-grow-ellipse">Cancelar</button>

            </form>

            <a value="volver" name="volver" class="ov-btn-grow-ellipse" href="carritoCompras.php"
                style="text-decoration:none">Volver</a><br>
            <br><br>

    </div>
    <div id="Cargando" style="display:none">
        <p ALIGN="CENTER" name="titulo" id="titulo">
            <font size="+6" color="pink">Realizando compra y generando factura</font>
        </p>


        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <img src="https://th.bing.com/th/id/R.69d13b8ecf8026297d44b95e44e07257?rik=MqnDwH1U5WX%2b3g&riu=http%3a%2f%2fwww.gifde.com%2fjs_pics_aux%2fdescarga.php%3fdescarga%3dsi%26c%3dgif%2fotros%2fdecoracion%2fcargando-loading%2f%26f%3dcargando-loading-039.gif&ehk=9D66%2fpUN0nI9fti7YoHR1rO%2fu5yIlWouNlJIJQc3kXU%3d&risl=&pid=ImgRaw&r=0"
            alt="Texto Alternativo para la imágen" leftmargin="40" topmargin="40" marginwidth="40" marginheight="40"
            style="background-size: 2000px 1000px" id="cargando" name="cargando">
    </div>
    </center>

    <!-- Pie de página -->
    <footer class="pie-pagina">
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
                <div class="red-social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>

                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                <p style="font-size: 12px;"> Todos los Derechos Reservados
                <p>
            </small>
        </div>
    </footer>
</body>

</html>