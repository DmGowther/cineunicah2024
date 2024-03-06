<!DOCTYPE html>
<html lang="en">
<head><!--provee información general (metadatos) acerca del documento, incluyendo su título y enlaces a scripts y hojas de estilos.-->
  <meta charset="UTF-8">
    <title>CINE UNICA</title><!--titulo de la paguina-->
    <link rel="shortcut icon" href="icono.jpg"><!--El logo de la paguina-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/HF.css"><!--Llama el etilo de header y el footer-->
    <link rel="stylesheet" href="css/OK.css"><!--Llama el estilo del formulario-->
     <!--Iconos de las redes del cine-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script><!--se utiliza para insertar o hacer referencia a un script ejecutable dentro de un documento HTML o XHTML.-->
</head><!--Fin de provee información general (metadatos) acerca del documento, incluyendo su título y enlaces a scripts y hojas de estilos.-->
<body><!--empieza el cuerpo-->
  <header><!--empieza el Encabezado-->
        <div class="wrapper"><!--división . Sirve para crear secciones o agrupar contenidos.-->
            <a href="pantallaPrincipal.html"><div class="logo"><img src="Img/logo_finalAzul.png"></div></a><!--Llama el logo del cine-->
            
            <nav><!--representa una sección de una página cuyo propósito es proporcionar enlaces de navegación-->
                <a href="Cartelera.php">Cartelera</a><!--crea un enlace a otras páginas de internet, archivos o ubicaciones dentro de la misma página, direcciones de correo, o cualquier otra URL.-->
                <a href="prooximamente.php">Proximamente</a>
                <a href="dulceria.php">Dulceria</a>
                
            </nav><!--Fin de navegacion-->
        </div><!--Fin de division-->
    </header><!--Fin de encabezado-->
    <h5><!--Tamaño de titulo-->
        COMPRA DE ENTRADAS
      </h5>
      <br>
    <div class="entrada">
        <img src="Img/Barra_progreso_Usuario.png"><!--Llama la barra de pogreso-->
      </div>
      <form action="conectinvitados.php" method="GET"><!--representa una sección de un documento que contiene controles interactivos-->
      <section class="form-register"><!--representa una sección de un documento-->
    <h4>Continuar como Invitado</h4><!--Tamaño de titulo-->
    <input class="controls" type="text" required name="Nombre" id="Nombre" placeholder="Ingrese su Nombre"><!--e se usa para crear controles interactivos para formularios basados ​​en la web con el fin de recibir datos del usuario. -->
    <input class="controls" type="email" required name="correo" id="correo" placeholder="Ingrese su Correo" >
    <input class="controls" type="number" required name="telefono" id="telefono" placeholder="Ingrese su Telefono" >
    <input class="controls" type="number" required name="DNI" id="DNI" placeholder="Ingrese su DNI" >
    <input class="buotons" type="submit"  name="Comprar"  value="ENTRAR">
  </section>
    </form>
   
  <br><!--Espacio-->
  <footer class="pie-pagina"><!--Empieza el pie de paguina-->
        <div class="grupo-1">
            <div class="box">
                <figure><!--representa a una pieza de documento autocontenido que se utiliza habitualmente para encerrar imágenes, gráficos, tablas de referencia, videos, poemas, fragmentos de código, etc.-->
                    <a href="#">
                        <img src="Img/logo_finalAzul.png" alt="Logo del Cine"><!--Llama logo-->
                    </a>
                </figure><!--Termina el pieza de documento-->
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <a href="quienes somos.html"><p>QUINES SOMOS</p></a>
                
            </div>
            <div class="box">
                <h2>SIGUENOS</h2><!--Tamaño de titulo-->
                <div class="red-social"><!--divicion en la parte de redes-->
                    <a href="https://www.facebook.com/Cine-Unicah-102036682552290/" class="fa fa-facebook"></a><!--link en la red social -->
                    <a href="https://www.instagram.com/cineunicah/?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/cineunicah?s=21&t=rflPz_9uheda10ITMVgeCw" class="fa fa-twitter"></a>
                    <a href="https://youtube.com/channel/UCaKfAXgwX6qvn5RGqqxPLHA" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>CINE UNICAH</b> - Todos los Derechos Reservados.</small><!--hace el tamaño del texto una talla más pequeña (por ejemplo, de largo a mediano, o de pequeño a extra pequeño)-->
        </div>
    </footer><!--termina el pie de paguina-->
</body><!--Fin  el cuerpo-->
</html><!--Fin  del html-->