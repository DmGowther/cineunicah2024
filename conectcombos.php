<?php  

include 'conexion_be.php';


/* -- Variables Combos */
$Combo_Infantil = $_POST['combo_infantil'];
$Palomitas_Dobles = $_POST['palomitas_dobles'];
$Combo_Familiar = $_POST['combo_familiar'];
$Combo_Simple = $_POST['combo_simple'];
$CombopersonalGrande = $_POST['combo_personal_Grande'];
$ComboPersonal = $_POST['combo_personal'];


if($Combo_Infantil>0){
$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),4,'$Combo_Infantil')";  
$ejecutar = mysqli_query($conexion,$query);
}

if($Palomitas_Dobles>0){
$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),5,'$Palomitas_Dobles')";  
$ejecutar = mysqli_query($conexion,$query);
}

if($Combo_Familiar>0){
$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),6,'$Combo_Familiar')";  
$ejecutar = mysqli_query($conexion,$query);
}


if($Combo_Simple>0){
$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),7,'$Combo_Simple')";  
$ejecutar = mysqli_query($conexion,$query);
}

if($CombopersonalGrande>0){

$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),8,'$CombopersonalGrande')";  
$ejecutar = mysqli_query($conexion,$query);
}


if($ComboPersonal>0){
$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),9,'$ComboPersonal')";  
$ejecutar = mysqli_query($conexion,$query);

}

/* ------- Datos de la Tabla Factura --------------------- */

// $query = " UPDATE factura Set SubTotal=(select SubTotalFact from total_temp),ISV=(Select ISV from total_temp),Total=(Select Total from total_temp)
// where ID_Factura=(Select max(ID_Factura) from factura)";
// $ejecutar = mysqli_query($conexion,$query);




if($ejecutar){
    echo '
    <script>
      //  alert("Sus combos fueron agregados a su Factura Exitosamente!!")
       window.location = "pago.php";
    </script>
    exit;
  ';
      
 }else{
    echo '
       <script>
          // alert("Vuelve a Intentarlo")
          window.location = "pago.php";
       </script>
 
     ';
 
 }
 


mysqli_close($conexion);

?>