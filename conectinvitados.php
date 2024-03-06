<?php  

include 'conexion_be.php';

 $Nombre=$_GET['Nombre'];
 $correo=$_GET['correo'];
 $telefono=$_GET['telefono'];
 $DNI=$_GET['DNI'];
 $correo1 = $_GET['correo'];

            $query=("UPDATE Usuarios set DNI='$DNI',Nombre='$Nombre',correo='$correo',telefono='$telefono' where ID_Usuario=1");
            $ejecutar = mysqli_query($conexion,$query);
            if($ejecutar){
                echo '
                <script>
                  window.location = "entrada.php";
                </script>             
              ';}
       $query = "UPDATE user SET CorreoUser='$correo1' WHERE ID =1";  
       $ejecutar = mysqli_query($conexion,$query);

    mysqli_close($conexion);
        

?>