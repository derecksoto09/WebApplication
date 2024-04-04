<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Danadeal</title>
    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" type="text/css" href="Login.css">
    <link rel="stylesheet" type="text/css" href="loginEntrar.css">
    <script>
        src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    </script>
    <!-- Secuencia de comandos jQuery para manipular elementos -->
    <script>
        $document.ready(function () {

            $("textUser").click(function () {
                document.getElementById('textUser').style.borderBlock = 'red'

            });
            var open = document.getElementById('#Open')
            open.click(function () {
                open.style.display = 'block'
                $(window).load(function () {
                    $(".loader").fadeOut("slow");
                });
            });

        });
    </script>

</head>
<div class="loader" style="display: none;"></div>

<body background="https://d1ih8jugeo2m5m.cloudfront.net/2022/11/proveedores-de-joyeria-mexico-1200x685.jpg"
    style="background-size: 100%">
    <div class="wrap">
        <table style="width: fit-content; height: fit-content; border-spacing: 30px 0px;">
            <tr>
                <td style="height: 25px; width: 100px;">
                    <!-- Formulario de inicio de sesión -->
                    <form action="PaginaLoginUser.php" method="post">
                        <label for="user" id="cedula">Cédula</label>
                        <input type="number" name="cedula" id="cedula" class="escribir" required><br><br>
                        <label for="password" id="pass">Contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="escribir" required>
                        <br>
                        <br>

                        <table>
                            <tr>
                                <td>
                                    <button type="submit" value="Iniciar Sesion" id="Open" class="btn">Iniciar
                                        Sesión</button>
                                </td>
                                <td>
                                    <button type="reset" value="Cancelar" id="Cancel" class="btn">Cancelar</button>
                                </td>
                            </tr>
                        </table>

                    </form>
                    <?php
                    // Iniciar una sesión
                    session_start();
                    // Comprobar si se enviaron los datos del formulario
                    if (isset($_POST['cedula']) && isset($_POST['contrasena'])) {
                        // Obtener usuario y contraseña
                        $usuario = $_REQUEST['cedula'];
                        $clave = $_REQUEST['contrasena'];
                        $encontrado = false;
                        // Conexión a la base de datos
                        $conexion = mysqli_connect("localhost", "root", "", "dbs11691856") or
                            die("Problemas con la conexión");

                        // Consulta de usuarios
                        $registros = mysqli_query($conexion, "select cedula, contrasena, correo, nombre
                        from usuarios") or
                            die("Problemas en el select:" . mysqli_error($conexion));

                        // Verificación de datos
                        while ($reg = mysqli_fetch_array($registros)) {
                            if ($reg['cedula'] == $usuario && $reg['contrasena'] == $clave) {
                                echo "<script>window.alert('Usuario encontrado. Redireccionando')
                                </script>";

                                // Establecer variables de sesión
                                $_SESSION['id'] = $reg['cedula'];
                                $_SESSION['nombre'] = $reg['nombre'];
                                $_SESSION['correo'] = $reg['correo'];

                                mysqli_close($conexion); //Cerrar conexión a Base de Datos
                    
                                // Redireccionar a la página de productos
                                echo "<script>
                                setTimeout(function () {
            window.location.href = 'Productos.php';
        }, 0);</script>";

                                $encontrado = true;
                                break;
                            }
                        }

                        // Si no se encuentra el usuario
                        if (!$encontrado) {

                            echo "<script>window.alert('No existe ningún usuario con los datos proveídos. Por favor, regístrese.')
                                </script>";
                        }

                        mysqli_close($conexion);
                    }

                    ?>

                </td>
                <!-- Mensaje de bienvenida y opciones -->
                <td style="text-align: center;">
                    <H2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Bienvenido,</H2>
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Si usted está registrado en el sistema
                    </h2>
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">será redireccionado a la sección de
                        pago.</h2>
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">De lo contrario, tendrá que
                        registrarse</h2>
                    <div style="margin-top: -25px">_____________________________________________________________</div>

                    <!-- Botones para volver y registrarse -->
                    <button type="submit" value="Volver" id="Open" class="btn"> <a href="Productos.php" align="center"
                            class="btn">Volver</a></button>
                    <button type="submit" value="Registrarse" id="Open" class="btn"><a href="RegistroUsuario.php"
                            align="center" class="btn">Registrarse</a></button>

                </td>
            </tr>
        </table>
    </div>


</body>


</html>