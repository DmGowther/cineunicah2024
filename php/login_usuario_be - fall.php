<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena' ");

if (mysqli_num_rows($validar_login) > 0) {
       $_SESSION['correo'] = $correo;
       header("location: ../entrada.php");
       exit;
} else {
       echo '
              <script>
              alert("Usuario no existe, por favor verifique los datos introducidos");
              window.location = "../usuario.php";
              </script>';
       exit;
}

$query = "INSERT INTO `user`( `CorreoUser`) VALUES ('$correo')"; //Insertar datos en la tabla user, posible error
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
       echo '
                            <script>
                            alert("Entradas seleccionadas correctamente")
                            window.location = "Asientos.php";
                            </script>
                     ';
} else {
       echo '
                            <script>
                            alert("Vuelve a Intentarlo")
                            window.location = "entrada.php";
                            </script>
                            ';
}

mysqli_close($conexion);
