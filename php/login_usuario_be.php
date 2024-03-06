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


$query = "UPDATE user SET CorreoUser='$correo1' WHERE ID =1";
$ejecutar = mysqli_query($conexion, $query);
