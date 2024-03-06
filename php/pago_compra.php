<?php

include 'conexion_be.php';

$NumeroTarjeta = $_POST['NumeroTarjeta'];
$MesExpiracion = $_POST['MesExpiracion'];
$AñoExpiracion = $_POST['AñoExpiracion'];
$CVV = $_POST['CVV'];

$query = "INSERT INTO pago(NumeroTarjeta,MesExpiracion,AñoExpiracion,CVV) VALUES('$NumeroTarjeta','$MesExpiracion','$AñoExpiracion','$CVV')";

$ejecutar = mysqli_query($conexion, $query);

$maxFacturaId = mysqli_query($conexion, "SELECT MAX(ID_Factura) FROM factura");
$maxIdResult = mysqli_fetch_row($maxFacturaId); // Obtiene el valor máximo

$query = "UPDATE factura 
SET ID_Usuario = (SELECT ID_Usuario FROM datosusuariofact),
    ID_Transacción = (SELECT MAX(ID_Transacción) FROM pago),
    SubTotal = (SELECT SubTotalFact FROM total_temp),
    ISV = (SELECT ISV FROM total_temp),
    Total = (SELECT Total FROM total_temp)
WHERE ID_Factura = $maxIdResult[0]";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
   echo '
         <script>
         alert("Pago Realizado exitosamente")
            window.location = "../Index.php";
            window.location = "../PantallaPrincipal.html";
         </script>
         window.location = "../PantallaPrincipal.html";';
} else {
   echo '
         <script>
            alert("Intentalo de nuevo.")
            window.location = "../pago.php";
         </script>';
}
mysqli_close($conexion);
echo '
      <script>
      alert("volver a pantalla principal")
         window.location = "../PantallaPrincipal.html";
      </script>';
