<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionando</title>
</head>

<body>
    <?php

    if (isset($_COOKIE)) {
        foreach ($_COOKIE as $name => $value) {
            //Recorre todas las cookies y las borra
            setcookie($name, $value, time() - (3600 * 24 * 365), "/");
        }

    }

    echo "<script>
  setTimeout(function() {
      window.location = 'Inicio.php';
  }, 2000); 
</script>";
    //Redirige a la página de inicio
    ?>

</body>

</html>