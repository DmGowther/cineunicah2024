<?php  

include 'conexion_be.php';

/* -- Variables Entradas */ 

$entrada_adulto = $_POST['entrada_adulto'];
$entrada_niño = $_POST['entrada_niño'];
$tercera_edad = $_POST['tercera_edad'];

/*-- Si compra de todas las entradas--*/
if($entrada_adulto>0 and $entrada_niño>0 and $tercera_edad>0){

/* ------- Insertamos los datos a la tabla detalle factura --------------------- */

$query = "INSERT INTO factura(ID_DetalleFact) 
                  VALUES((Select max(Contador) from Contador)+1)";  
$ejecutar = mysqli_query($conexion,$query);


$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador)+1,1,'$entrada_adulto')";  
$ejecutar = mysqli_query($conexion,$query);


$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),2,'$entrada_niño')";  
$ejecutar = mysqli_query($conexion,$query);


$query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                  VALUES((Select max(Contador) from Contador),3,'$tercera_edad')";  
$ejecutar = mysqli_query($conexion,$query);
}

/* si compra Solo Adulto*/ 

if($entrada_adulto>0 and $entrada_niño<1 and $tercera_edad<1){

   /* ------- Insertamos los datos a la tabla detalle factura --------------------- */
   
   $query = "INSERT INTO factura(ID_DetalleFact) 
                     VALUES((Select max(Contador) from Contador)+1)";  
   $ejecutar = mysqli_query($conexion,$query);
   
   
   $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                     VALUES((Select max(Contador) from Contador)+1,1,'$entrada_adulto')";  
   $ejecutar = mysqli_query($conexion,$query);
}
   
 /* si compra solo Niño--*/
if($entrada_adulto<1 and $entrada_niño>0 and $tercera_edad<1){

   /* ------- Insertamos los datos a la tabla detalle factura --------------------- */
   
   $query = "INSERT INTO factura(ID_DetalleFact) 
                     VALUES((Select max(Contador) from Contador)+1)";  
   $ejecutar = mysqli_query($conexion,$query);
   
   
   $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                     VALUES((Select max(Contador) from Contador)+1,2,'$entrada_niño')";  
   $ejecutar = mysqli_query($conexion,$query);
   

   }  

 /* si compra solo 3ra edad--*/
 if($entrada_adulto<1 and $entrada_niño<1 and $tercera_edad>0){

   /* ------- Insertamos los datos a la tabla detalle factura --------------------- */
   
   $query = "INSERT INTO factura(ID_DetalleFact) 
                     VALUES((Select max(Contador) from Contador)+1)";  
   $ejecutar = mysqli_query($conexion,$query);
   
   
   $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
   VALUES((Select max(Contador) from Contador)+1,3,'$tercera_edad')";  
   $ejecutar = mysqli_query($conexion,$query);
   

   }     

   /* -- Si compra Adulto y niño---*/

   if($entrada_adulto>0 and $entrada_niño>0 and $tercera_edad<1){

      /* ------- Insertamos los datos a la tabla detalle factura --------------------- */
      
      $query = "INSERT INTO factura(ID_DetalleFact) 
                        VALUES((Select max(Contador) from Contador)+1)";  
      $ejecutar = mysqli_query($conexion,$query);
      
      
      $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                        VALUES((Select max(Contador) from Contador)+1,1,'$entrada_adulto')";  
      $ejecutar = mysqli_query($conexion,$query);
      
      
      $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                        VALUES((Select max(Contador) from Contador),2,'$entrada_niño')";  
      $ejecutar = mysqli_query($conexion,$query);
      }

      /* -- si compra adulto y tercera edad */ 
      if($entrada_adulto>0 and $entrada_niño<1 and $tercera_edad>0){

         /* ------- Insertamos los datos a la tabla detalle factura --------------------- */
         
         $query = "INSERT INTO factura(ID_DetalleFact) 
                           VALUES((Select max(Contador) from Contador)+1)";  
         $ejecutar = mysqli_query($conexion,$query);
         
         
         $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                           VALUES((Select max(Contador) from Contador)+1,1,'$entrada_adulto')";  
         $ejecutar = mysqli_query($conexion,$query);
                 
         
         $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                           VALUES((Select max(Contador) from Contador),3,'$tercera_edad')";  
         $ejecutar = mysqli_query($conexion,$query);
         }

         /* si compra niño y 3era edad */

         if($entrada_adulto<1 and $entrada_niño>0 and $tercera_edad>0){

            /* ------- Insertamos los datos a la tabla detalle factura --------------------- */
            
            $query = "INSERT INTO factura(ID_DetalleFact) 
                              VALUES((Select max(Contador) from Contador)+1)";  
            $ejecutar = mysqli_query($conexion,$query);
                       
            $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                              VALUES((Select max(Contador) from Contador)+1,2,'$entrada_niño')";  
            $ejecutar = mysqli_query($conexion,$query);
            
            
            $query = "INSERT INTO detalle_fact(ID_DetalleFact,Id_producto,Cantidad) 
                              VALUES((Select max(Contador) from Contador),3,'$tercera_edad')";  
            $ejecutar = mysqli_query($conexion,$query);
            }
/* ------- Actualizamos la tabla factura --------------------- */

// $query = " UPDATE factura Set ID_Usuario=(Select ID_Usuario from datosusuariofact),ID_Transacción=(Select max(ID_Transacción) from pago), SubTotal=(select SubTotalFact from total_temp),ISV=(Select ISV from total_temp),Total=(Select Total from total_temp)
// where ID_Factura=(Select max(ID_Factura) from factura)";
// $ejecutar = mysqli_query($conexion,$query);


if($ejecutar){

   echo '
   <script>
      window.location = "Asientos.html";
   </script>

 ';
     
}else{
   echo '
      <script>
         alert("Vuelve a Intentarlo")
         window.location = "entrada.php";
      </script>

    ';

}


mysqli_close($conexion);

?>