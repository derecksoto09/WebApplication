<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando</title>
</head>

<body>
    <?php
    //Inicia la sessión
    session_start();
    //Crea una sesión para el precio total a pagar recibido del carrito de compras
    $_SESSION['PrecioTotalProductos'] = $_REQUEST['Precio'];
    if (isset($_SESSION['id']) && isset($_SESSION['nombre']) && isset($_SESSION['correo'])) {
        //Valida si el usuario está "logged" y lo redirige a la sección de pago
    
        echo "<script>
                setTimeout(function () {
                    window.location.href = 'InfoPago.php';
                }, 2000);
            </script>";

    } else {
        //Si no está "logged", lo redirige a la página de Login
        echo "<script>
                                setTimeout(function () {
            window.location.href = 'PaginaLoginUser.php';
        }, 2000);</script>";
    }
    ?>
</body>

</html>