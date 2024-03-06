<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icono.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/HF.css">
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/div.css">
    <title>Alimentos y Bebidas</title>
</head>

<!-- Editamos el header, agregamos el logo del cine y vinculamos con otras pantallas -->
<body>
    <header>
        <div class="wrapper">
            <div class="logo"><img src="img/logo_FinalAzul.png"></div> <!-- Agregamos el logo de la empresa -->
      
            <nav>
             <a href="Cartelera.html">Cartelera</a> <!-- Mandamos a llamar la cartelera -->
              <a href="prooximamente.html">Proximamente</a> <!-- Mandamos a llamar la pantalla proximamente -->
              <a href="dulceria.html">Dulceria</a> <!-- Mandamos a llamar la dulceria -->
            </nav>
      
          </div>
    </header>

    <!-- Pusimos el nombre de la pantalla -->
    <h2>Alimentos y Bebidas</h2>
   
    <!-- Pusimos la barra de progreso -->
    <div class="entrada">
        <img src="img/Barra_progreso_Alimentos y Bebidas.png" alt="">
      </div>
      <br>
      <center><h2 class="title">COMBOS</h2></center> <!--titulo del formulario-->
      <center><form action="conectcombos.php" method="POST"><!--Crear forma del cuadro del formulario-->

        <div class="row">
                <br>
                <div class="caja">
                <div class="inputBox"><!--crea recuadro donde iran los combos-->
                    <h4>Combo Infantil :</h4>
                    <h5>L 110.00</h5>
                    <img src="img/combo infantil fondo azul (1).png" alt="">
                    <input name=combo_infantil type="number" max="5" min="0">
                </div>
                <br>
                <div class="inputBox">
                    <h4>Palomitas Dobles :</h4>
                    <h5>L 175.00</h5>
                    <img src="img/Combo para 2,nachoy hotdogfondoazul.png" alt="">
                    <input name=palomitas_dobles type="number" max="5" min="0">
                </div>
                  <br>
                    <div class="inputBox">
                        <h4>Combo Familiar :</h4>
                        <h5>L 230.00</h5>
                        <img src="img/combo para 4 familiar (1).png" alt="">
                        <input name=combo_familiar type="number" max="5" min="0">
                    </div>
                </div>
                    <br>
                <div class="caja">
                    <div class="inputBox">
                        <h4>Combo Simple :</h4>
                        <h5>L 70.00</h5>
                        <img src="img/Hotdog y frescofondoazul (1).png" alt="">
                        <input name=combo_simple type="number" max="5" min="0">
                    </div>
                    <br>
                    <div class="inputBox">
                        <h4>Combo personal Grande :</h4>
                        <h5>L 100.00</h5>
                        <img src="img/palomita,nacho refresco fondo azul (1).png" alt="">
                        <input name=combo_personal_Grande type="number" max="5" min="0">
                    </div>
                    <br>
                    <div class="inputBox">
                        <h4>Combo Personal :</h4>
                        <h5>L 70.00</h5>
                        <img src="img/Nacho y frescofondoazul (1).png" alt="">
                        <input name=combo_personal type="number" max="5" min="0">
                    </div>
                </div>
            </div>
        <br>
        <br>
        <input type="submit" value="CONTINUAR" class="btn"><!--funcion para crear el boton de pagar-->
        
        </form></center>
        <br>
        <br>

    <!-- EMPIZA EL FOOTER -->
    <footer class="pie-pagina">
        <div class="grupo-1">
          <div class="box">
            <figure>
              <a href="#">
                <img src="img/logo_finalAzul.png" alt="Logo del Cine">
              </a>
            </figure>
          </div>
          <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <a href="quienes somos.html">
              <p>QUIENES SOMOS</p>
            </a>
    
          </div>
          <div class="box">
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
      <!-- FINALIZA EL FOOTER -->

</body>

</html>