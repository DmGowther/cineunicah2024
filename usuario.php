<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>USUARIO</title><!--Titulo de la pagina-->
    <link rel="shortcut icon" href="img/icono.jpg"><!--Logo del cine en el titulo de la pagina-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/HF.css"><!--Llamado a la hoja de estilo del header y del footer-->
    <link rel="stylesheet" href="css/usuario.css"><!--llamado a la hoja de estilo de la pagina de pago-->
     <!--Iconos de las redes del cine-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script><!--Link donde se encuentran las imagenes de las redes sociales del footer-->
</head>
<body>
    <header>
        <div class="wrapper">
            <a href="PantallaPrincipal.html"><div class="logo"><img src="img/logo_finalAzul.png"></div></a><!--Logo del cine en el header con hipervinculo a la pagina principal-->
            
            <nav><!--barra de navegacion en el header-->
                <a href="Cartelera.html">Cartelera</a>
                <a href="prooximamente.html">Proximamente</a>
                <a href="dulceria.html">Dulceria</a>
                
            </nav>
        </div>
    </header><!--fin del header-->
    <h5>
        COMPRA DE ENTRADAS
      </h5>
  <div class="entrada">
        <img src="img/progreso.PNG" alt=""> <!--Imagen de barra de progreso de la compra-->
      </div>
    <form action="php/login_usuario_be.php"  method="POST" class="formulario"><!--Creacion del formulario de login con llamado al codigo php para la conexion con MySQL-->
    
    <h1>INICIAR SESION</h1><!--Titulo del login-->
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i><!--Clase para el iconoco del email--> 
         <input type="text" placeholder="Correo Electronico" name=correo required><!--Creacion del recuadro donde escribiremos el email-->
          

         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i><!--clase con icono de contraseña-->
         <input type="password" name=contrasena required placeholder="Contraseña"><!--Creacion del recuadro donde escribiremos la contraseña-->
         </div>
         <input type="submit" value="ENTRAR" class="button"><!--Boton-->
      
         
     <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p><!--Hipervinculo que nos dirige a la pagina de registro de usuario-->
     </div>
    </form>
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
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
                <a href="quienes somos.html"><p>QUINES SOMOS</p></a><!--Hipervinculo hacia la pagina que habla sobre quines somos-->
                
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