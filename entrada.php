<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ENTRADAS</title>
    <link rel="shortcut icon" href="img/icono.jpg">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/HF.css">
    <link rel="stylesheet" href="css/entrada.css">
    <link rel="stylesheet" href="css/btn.css">
     <!--Iconos de las redes del cine-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="wrapper">
            <a href="pantallaPrincipal.html"><div class="logo"><img src="img/logo_FinalAzul.png"></div></a>
            
            <nav>
                <a href="Cartelera.html">Cartelera</a>
                <a href="prooximamente.html">Proximamente</a>
                <a href="dulceria.html">Dulceria</a>
                
            </nav>
        </div>
    </header>

    <div class="contenedor">
      <div>
        <h1>COMPRA DE ENTRADAS </h1>
      </div>
  
      <div class="entrada">
        <img src="img/Barra_progreso_Entradas.png" alt="">
      </div>  
     <br>
      <div>
        <h2>ENTRADAS</h2>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
  
      
      
      <!-- <div>
        <form name="prueba" action="conect.php" method="POST"> 
        <p>Entrada Adulto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select id ="entrada_adulto" name="entrada_adulto" onChange="enableSubmit(this)">  
            <option name="cero">0</option> 
            <option name="uno">1</option> 
            <option name="dos">2</option> 
            <option name="tres">3</option> 
            <option name="cuatro">4</option> 
            <option name="cinco">5</option> 
           </select>
        </p>  
          <br>
        <p>Entrada Niño&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="entrada_niño" onChange="enableSubmit(this)" >  
            <option>0</option> 
            <option>1</option> 
            <option>2</option> 
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
           </select> 
        </p>
           <br>
        <p>Entrada Tercera Edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="tercera_edad" onChange="enableSubmit(this)" >  
            <option>0</option> 
            <option>1</option> 
            <option>2</option> 
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
           </select> 
        </p>
           <br>
           <div class="botones">
            <input class="btn2" type="submit" name="enviar" value="Enviar" disabled>
           </div>
         </form>
      </div> -->

<center><form action="conect.php" method="POST"><!--Crear forma del cuadro del formulario-->

<div class="row">

    <div class="col">

        <h3 class="title">Escriba la cantidad de entradas</h3> <!--titulo del formulario-->
        <br>
        <div class="inputBox"><!--crea recuadro donde ira el numero de tarjeta-->
            <span>Entrada Adulto :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name=entrada_adulto type="number" min="0" max="99" required>
        </div>
        <br>

        <div class="inputBox"><!--crea recuadro donde ira el numero de tarjeta-->
            <span> Entrada Niño :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name=entrada_niño type="number" min="0" max="99" required>
        </div>
        <br>
        <div class="inputBox"><!--crea recuadro donde ira el numero de tarjeta-->
            <span>Tercera Edad :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name=tercera_edad type="number" min="0" max="99" required>
        </div>
    </div>
<br>
</div>

<input type="submit" value="CONTINUAR" class="btn"><!--funcion para crear el boton de pagar-->

</form></center>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
      <script type="text/javascript" src="entrada.js"></script>
  
    </div>
    <br>
    <br>
    <br>

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
            &nbsp;
            &nbsp;
              <h2>SOBRE NOSOTROS</h2>
              
              
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

</body>
</html>

