<?php

$mysqli = new mysqli("localhost", "root", "", "cine_unicah");

if ($mysqli->connect_error) {

	die('Error en la conexion' . $mysqli->connect_error);
}
