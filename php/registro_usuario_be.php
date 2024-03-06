<?php
include 'conexion_be.php';

$DNI = $_POST['DNI'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];

//encriptamiento de contraseña
//$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(DNI,nombre,correo,contrasena,telefono) VALUES('$DNI','$nombre','$correo','$contrasena','$telefono')";
//verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if (mysqli_num_rows($verificar_correo) > 0) {
   echo '
         <script>
         alert("Este correo ya esta registrado, intenta con otro diferente");
         window.location = "../registro.php";
         </script>';
   exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
   echo '
         <script>
            alert("Usuario registrado exitosamente")
            window.location = "../usuario.php";
         </script>';
} else {
   echo '
         <script>
            alert("Intentalo de nuevo, usuario no registrado")
            window.location = "../usuario.php";
         </script>';
}
mysqli_close($conexion);
