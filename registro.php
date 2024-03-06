<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>REGISTRO USUARIO</title><!--Titulo de la pagina-->
    <link rel="shortcut icon" href="img/icono.jpg"><!--Logo del cine en el titulo de la pagina-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/HF.css"><!--Llamado a la hoja de estilo del header y del footer-->
    <link rel="stylesheet" href="css/estiloR.css"><!--llamado a la hoja de estilo de la pagina de pago-->
    <!--Iconos de las redes del cine-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script><!--Link donde se encuentran las imagenes de las redes sociales del footer-->
</head>

<body>
    <header>
        <div class="wrapper">
            <a href="PantallaPrincipal.html">
                <div class="logo"><img src="img/logo_finalAzul.png"></div>
            </a><!--Logo del cine en el header con hipervinculo a la pagina principal-->

            <nav><!--barra de navegacion en el header-->
                <a href="Cartelera.html">Cartelera</a>
                <a href="prooximamente.html">Proximamente</a>
                <a href="dulceria.html">Dulceria</a>

            </nav>
        </div>
    </header><!--fin del header-->
    <form action="php/registro_usuario_be.php" method="POST">
        <h1>¡Registrate!</h1>
        <input type="text" name="nombre" placeholder="Nombre completo" required><!--creacion de donde escribiremos nuestro nombre con tipo text y el name para identificar a la hora de conectar-->
        <input type="number" name="DNI" maxlength="13" minlength="13" placeholder="DNI" required><!--creacion de donde escribiremos nuestro DNI con tipo text y el name para identificar a la hora de conectar-->
        <input type="number" name="telefono" min="8" placeholder="Telefono" required><!--creacion de donde escribiremos nuestro numero de telefono con tipo text y el name para identificar a la hora de conectar-->
        <input type="email" name="correo" placeholder="Email" required><!--creacion de donde escribiremos nuestro email con tipo text y el name para identificar a la hora de conectar-->
        <input type="password" name="contrasena" minlength="8" placeholder="Contraseña" required><!--creacion de donde escribiremos nuestra contraseña con tipo text y el name para identificar a la hora de conectar-->
        <input type="submit" name="register"><!--Boton de registrar-->
        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>

    </form>

    <!--Codigo del footer-->
    <!--Codifo del pie de pagina-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/logo_finalAzul.png" alt="Logo del Cine"><!--Logo del cine en el footer-->
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <a href="quienes somos.html">
                    <p>QUINES SOMOS</p>
                </a><!--Hipervinculo hacia la pagina que habla sobre quines somos-->

            </div>
            <div class="box"><!--Contiene las redes sociales de la pagina-->
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/Cine-Unicah-102036682552290/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/cineunicah/?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/cineunicah?s=21&t=rflPz_9uheda10ITMVgeCw" class="fa fa-twitter"></a>
                    <a href="https://youtube.com/channel/UCaKfAXgwX6qvn5RGqqxPLHA" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>CINE UNICAH</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>

</html>