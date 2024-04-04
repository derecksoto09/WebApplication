<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
  <link rel="stylesheet" type="text/css" href="Boton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

  <title>Factura</title>

  <!-- Estilos en línea -->
  <style>
    /* Estilos para la factura */
    .factura {

      font-family: Arial, sans-serif;
      border: 1px solid #ccc;

      padding: 20px;

      max-width: 600px;

      margin: 0 auto;

    }

    .encabezado {

      text-align: center;

      margin-bottom: 20px;

    }

    .detalles {

      margin-bottom: 20px;

    }

    table {

      width: 100%;

      border-collapse: collapse;

    }

    th,
    td {

      border: 1px solid #ccc;

      padding: 8px;

      text-align: left;

    }

    .total {

      text-align: right;

    }
  </style>

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
  <Br>

  <br>
  <br>
  <!-- Título de la factura -->
  <p ALIGN="CENTER" name="titulo" id="titulo">
    <font size="+6" color="pink">Factura</font>
  </p>
  <br><br>
  <br><br>

  <?php
  sleep(3);
  function obtenerIniciales($cadena)
  {
    $palabras = explode(' ', $cadena); // Divide la cadena en palabras
    $iniciales = '';

    foreach ($palabras as $palabra) {
      $iniciales .= strtolower(substr($palabra, 0, 3)); // Obtiene las primeras letra de cada palabra y la convierte a minúsculas
    }

    return $iniciales;
  }

  session_start();
  //Inicia sesión. También valida si el método de request es POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $metodoPago = $_POST["pago"];
    $costoEnvio = $_POST["envio"] ?? "";
    $tipoMoneda = $_POST["tipoMoneda"] ?? "";
    $montoCompleto = $_POST["monto"] ?? "";
    $tipoTarjeta = $_POST["tipoTarjeta"] ?? "";
    $numeroTarjeta = $_POST["tarjeta"] ?? "";
    $numeroCelular = $_POST["sinpe"] ?? "";
    $metodoEntrega = $_POST["entrega"];
    $diaRetiro = $_POST["dia"] ?? "";
    $horaRetiro = $_POST["hora"] ?? "";
    $provinciaEntrega = $_POST["provincia"] ?? "";
    $precioTotal = $_POST["Precio"] ?? "";
    $precioConIva = $_POST["PrecioConIva"] ?? "";
  }
  ?>

  <div class="factura">

    <div class="encabezado">

      <p>Factura</p>

      <p>Danadeal</p>

      <p>Cédula jurídica: 3-172-295427</p>

      <p>Tel: 8912-3456</p>
      <?php
      //Toma el día actual basado en horario UTC-6
      date_default_timezone_set('UTC');
      $mDate = new DateTime();
      $interval = new DateInterval('PT6H');
      $mDate->sub($interval);
      ?>
      <p>Fecha:
        <?php echo $mDate->format("j/m/Y") ?>
      </p>
      <!-- Imprime la fecha con formato -->
      <p>Cliente:
        <?php echo $_SESSION['nombre'] ?>
      </p>

      <p>Cédula cliente:
        <?php echo $_SESSION['id'] ?>
      </p>

      <p>Correo cliente:
        <?php echo $_SESSION['correo'] ?>
      </p>
      <!-- Se obtienen todos los credenciales de la persona registrada-->
    </div>


    <!-- Detalles de la factura -->
    <div class="detalles">

      <table>

        <tr>

          <th>Descripción</th>

          <th>Material</th>

          <th>Color</th>

          <th>Cantidad</th>

          <th>Precio Base</th>

          <th>Precio Total</th>

        </tr>

        <tr>
          <!-- Código PHP: Mostrar detalles de productos desde las cookies -->
          <?php
          if (isset($_COOKIE)) {
            //Valida si existen cookies
            $subTotal = 0;
            foreach ($_COOKIE as $name => $value) {
              //Recorre todas las cookies que encuente
          
              $probando = obtenerIniciales($name);
              // Utiliza la función para obtener las iniciales del nombre de la cookie
              if ("coo" == $probando) {
                //Se valida si el nombre de la cookie empieza con "coo"
                if (unserialize($_COOKIE[$name])) {
                  //Valida si la función unserialize se ejecuta bien
                  $arregloCookie = unserialize($value);
                  $subTotal = $subTotal + $arregloCookie['precioProducto'];
                  //Se suman todos los precios de los productos
                  //Los valores de cada cookie se almacenan en una array. Se trae X valor del array con base en como se haya llamado en este
                  ?>
                  <td>
                    <?php echo $arregloCookie['nombreProducto']; ?>
                  </td>
                  <!-- Obtiene el nombre del producto y lo imprime -->

                  <td>
                    <?php echo $arregloCookie['materialProducto']; ?>
                  </td>
                  <!-- Obtiene y muestra el material del producto -->

                  <td>
                    <?php echo $arregloCookie['colorProducto']; ?>
                  </td>
                  <!-- Obtiene y muestra el color del producto -->

                  <td>
                    <?php echo $arregloCookie['unidadesProducto']; ?>
                  </td>
                  <!-- Obtiene y muestra la cantidad de unidades del producto -->

                  <td>
                    <?php echo "₡" . ($arregloCookie['precioProducto'] / $arregloCookie['unidadesProducto']); ?>
                  </td>
                  <!-- Calcula y muestra el precio base por unidad del producto -->

                  <td>
                    <?php echo "₡" . $arregloCookie['precioProducto']; ?>
                  </td>
                  <!-- Muestra el precio total del producto -->
                </tr>
                <?php
                }
              }
            }
          }
          ?>


      </table>

    </div>

    <div class="total">

      <p>Subtotal:
        <?php echo "₡" . $subTotal ?>
      </p>
      <?php
      //Muestra si es entrega a domicilio
      if ($costoEnvio != "" && $costoEnvio != 0) {
        echo "<p>Envío:" . "₡" . $costoEnvio . "</p>";
        $subTotal = $subTotal + $costoEnvio;
      }
      ?>
      <p>IVA:
        <?php echo "₡" . ($subTotal * 0.13) ?>
      </p>

      <p>Total:
        <?php echo "₡" . $precioConIva ?>
      </p>

    </div>
    <?php
    //Muestra dependiendo del tipo de pago y entrega
    echo "<br><p>Método de Pago: $metodoPago </p><br>";
    switch ($metodoPago) {
      case 'Efectivo':
        echo "<p>Tipo de Moneda: $tipoMoneda</p><br>";
        echo "<p>Pago Completo: $montoCompleto</p><br>"; //Si pagó completo o no
        break;
      case 'Tarjeta';
        echo "<p>Tipo de Tarjeta: $tipoTarjeta</p><br>";
        echo "<p>Número de Tarjeta: $numeroTarjeta</p><br>";
        break;
      case 'Sinpe';
        echo "<p>Número de Celular (Sinpe): $numeroCelular</p><br>";

        break;
      default:
        //En caso de que haya algún error al imprimir estos datos
        echo 'Hubo algún error con los métodos de pago';
        break;
    }
    echo "<p>Método de Entrega: $metodoEntrega</p><br>";
    if ($metodoEntrega === "Tienda") {
      echo "<p>Día de Retiro (Año-Mes-Día): $diaRetiro</p><br>";
      $horaARetirar = new DateTime($horaRetiro);
      echo "<p>Hora de Retiro: " . $horaARetirar->format("g:i A") . "</p><br>";
    } elseif ($metodoEntrega === "Domicilio") {
      echo "<p>Provincia de Entrega: $provinciaEntrega</p><br>";
    }
    ?>
    <p>¡Gracias por su negocio y confianza! Esperamos seguir atendiéndole en el futuro.</p>

  </div>
  <br><br>
  <!-- Botones para imprimir y aceptar -->
  <button type="submit" value="Imprimir" name="Imprimir" id="Imprimir" class="ov-btn-grow-ellipse">Imprimir
    Factura</button>
  <a href="vaciarCookies.php"><button type="submit" value="Aceptar" name="aceptar" id="aceptar"
      class="ov-btn-grow-ellipse">Aceptar</button></a>

  <!-- Script para imprimir la factura -->
  <script>
    document.getElementById("Imprimir").addEventListener("click", function () {
      window.print();
    });
  </script>
  <br><br>
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
          El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma DANADEAL.
        </p>
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