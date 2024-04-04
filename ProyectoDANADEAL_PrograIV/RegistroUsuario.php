<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Danadeal</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
    <link rel="stylesheet" type="text/css" href="loginEntrar.css">
</head>

<body background="https://d1ih8jugeo2m5m.cloudfront.net/2022/11/proveedores-de-joyeria-mexico-1200x685.jpg"
    style="background-size: 100%">
    <div class="wrap">
        <!-- Tabla que contiene dos celdas: formulario de registro y mensajes/instrucciones -->
        <table style="width: fit-content; height: fit-content; border-spacing: 30px 0px;">
            <tr>
                <td style="height: 25px; width: 100px;">
                    <!-- Formulario para registrar usuarios -->
                    <form action="registrandoDatos.php" method="post">
                        <label for="nombre" id="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" class="escribir" required><br><br>
                        <label for="cedula" id="cedula">Cédula</label>
                        <input type="number" id="cedula" name="cedula" class="escribir" required><br><br>
                        <label for="fechaNacimiento" id="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="escribir"
                            required><br><br>
                        <label for="correo" id="correo">Correo</label>
                        <input type="email" id="correo" name="correo" class="escribir" required><br><br>
                        <label for="password" id="pass">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena" class="escribir" required>

                        <br>
                        <br>

                        <table>
                            <tr>
                                <td>
                                    <!-- Botón para enviar el formulario de registro -->
                                    <button type="submit" value="Iniciar Sesion" id="Open"
                                        class="btn">Registrarse</button>
                                </td>
                                <td>
                                    <!-- Botón para restablecer el formulario -->
                                    <button type="reset" value="Cancelar" id="Cancel" class="btn">Cancelar</button>
                                </td>
                            </tr>
                        </table>


                    </form>
                </td>
                <td style="text-align: center;">
                    <H2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Registro de usuario,</H2>
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Ingrese los datos solicitados para su
                        registro</h2>
                    <div style="margin-top: -25px">_____________________________________________________________</div>
                    <!-- Botones para volver a la página de productos e iniciar sesión -->
                    <button type="submit" value="Volver" id="Open" class="btn"> <a href="Productos.php" align="center"
                            class="btn">Volver</a></button>
                    <button type="submit" value="Iniciar Sesion" id="Open" class="btn"><a href="PaginaLoginUser.php"
                            align="center" class="btn">Iniciar sesión </a></button>


                </td>
            </tr>
        </table>
    </div>


</body>

</html>