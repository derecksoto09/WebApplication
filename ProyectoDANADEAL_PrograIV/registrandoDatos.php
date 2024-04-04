<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresando datos</title>
</head>

<body>
    <?php
    // Variable para verificar si el registro fue exitoso
    $registrado = false;

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "dbs11691856") or
        die("Problemas con la conexión");

    // Insertar datos en la tabla de usuarios
    $query = mysqli_query($conexion, "insert into usuarios(nombre, cedula, fechaNacimiento, correo, contrasena) values 
        ('$_REQUEST[nombre]','$_REQUEST[cedula]','$_REQUEST[fechaNacimiento]','$_REQUEST[correo]','$_REQUEST[contrasena]')")
        or die("Problemas en el insert" . mysqli_error($conexion));

    // Verificar si la consulta fue exitosa    
    if ($query) {
        $registrado = true;
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);

    // Redirigir y mostrar mensajes según el resultado del registro
    if (!$registrado) {
        // Si no se pudo registrar, mostrar mensaje y redirigir a la página de registro
        echo "<script>window.alert('No se logró registrar la persona.');
         </script>";
        echo "<script>
                                setTimeout(function () {
            window.location.href = 'RegistroUsuario.php';
        }, 0);</script>";
    } else {
        // Si se registró exitosamente, mostrar mensaje y redirigir a la página de inicio de sesión
        echo "<script>
                                setTimeout(function () {
            window.location.href = 'PaginaLoginUser.php';
        }, 0);</script>";
        echo "<script>window.alert('Persona registrada. Redireccionando a página de login');
         </script>";
    }


    ?>
</body>

</html>