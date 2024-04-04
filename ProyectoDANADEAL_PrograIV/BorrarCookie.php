<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar cookie</title>
</head>

<body>
    <?php
    // Verificar si hay cookies presentes
    if (isset($_COOKIE)) {
        // Iterar a través de las cookies
        foreach ($_COOKIE as $name => $value) {
            // Deserializar la cookie en un arreglo
            $arregloCookie = unserialize($_COOKIE[$name]);
            // Verificar si los detalles de la cookie coinciden con los detalles proporcionados
            if (
                $arregloCookie['nombreProducto'] == $_REQUEST['nameProducto'] and
                $arregloCookie['materialProducto'] == $_REQUEST['material'] and
                $arregloCookie['colorProducto'] == $_REQUEST['color']
            ) {
                // Eliminar la cookie estableciendo un tiempo de expiración en el pasado
                setcookie($name, $value, time() - (3600 * 24 * 365), "/");
                break;
            }

        }
    } else {
        // Mostrar imagen de error si no hay cookies presentes
        echo "<center><img src='Imagenes/GIFParaCarrito/Error.gif' alt='No se logro cargar la imagen' width='850px' height='850px'></center>";
    }


    ?>

</body>

</html>
<script>
    // En la siguiente línea el parámetro final la unidad son milisegundos
    setTimeout(function () { window.location = "<?= 'carritoCompras.php' ?>"; }, 0); // Aquí es donde se "redirecciona" luego de trancurridos los 3 segundos
</script>