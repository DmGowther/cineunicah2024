<?php 
$inc = include("conexion_be.php");
if ($inc) {
	$consulta = "SELECT * FROM datos_orden";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $NC = $row['NConfirmacion'];
	    $Pelicula = $row['Pelicula'];
	    $Sala = $row['Sala'];
	    $fecha = $row['Fecha'];
	    ?>
        <div>
        	<h2><?php echo $NC; ?></h2>
        	<div>
        		<p>
        			<b>Pelicula: </b> <?php echo $Pelicula; ?><br>
        		    <b>Sala: </b> <?php echo $Sala; ?><br>
        		    <b>Fecha: </b> <?php Echo $fecha; ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>