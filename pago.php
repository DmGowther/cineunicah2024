<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PAGO ENTRADA</title><!--Titulo de la pagina-->
    <link rel="shortcut icon" href="img/icono.jpg"><!--Logo del cine en el titulo de la pagina-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/HF.css"><!--Llamado a la hoja de estilo del header y del footer-->
    <link rel="stylesheet" href="css/pago.css"><!--llamado a la hoja de estilo de la pagina de pago-->
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
  <div class="entrada"><!-- clase para agregar la imagen que contiene la barra de progreso de la compra-->
        <img src="img/pagar.PNG" alt="">
      </div>

 <div class="container">

    <center><form action="php/pago_compra.php" method="POST"><!--Crear forma del cuadro del formulario y llamado al archivo que contiene el codigo php para hacer la conexion con MySql-->

        <div class="row">

            

                

            <div class="col">

                <h3 class="title">PAGO</h3> <!--titulo del formulario-->

                <div class="inputBox"><!--Crea caja donde ira la imagen de las tarjetas-->
                    
                    <img src="img/card_img.png" alt="">
                </div>
                
                <div class="inputBox"><!--crea recuadro donde ira el numero de tarjeta-->
                    <span>Numero de Tarjeta :</span>
                    <input name=NumeroTarjeta type="number"  min="16"  placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>Mes que expira :</span><!--crea recuadro donde ira el mes de expiracion de la tarjeta-->
                    <input name=MesExpiracion type="text" placeholder="Enero" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año que expira :</span><!--crea recuadro donde ira el año de expiracion de la tarjeta-->
                        <input name=AñoExpiracion type="number" min="4"  placeholder="2022" required>
                    </div>
                    <div class="inputBox"><!--crea recuadro donde ira el CVVde la tarjeta-->
                        <span>CVV :</span>
                        <input name=CVV type="number"  min="3" placeholder="123" required>
                    </div>
                </div>

            </div>
    
        </div>

        
        <input type="submit" value="PAGAR" class="submit-btn"><!--funcion para crear el boton de pagar-->

    </form></center>

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