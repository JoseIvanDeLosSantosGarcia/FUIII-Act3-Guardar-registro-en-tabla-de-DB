<?php 

include("con_db.php");

if (isset($_POST['empleados'])) {
    if (strlen($_POST['idempleado']) >= 1 && strlen($_POST['Nombre']) >= 1) {
	    $idempleado = trim($_POST['idempleado']);
	    $Nombre = trim($_POST['Nombre']);
	    $Apellido = trim($_POST['Apellido']);
		$Telefono = trim($_POST['Telefono']);
		$Correo = trim($_POST['Correo']);
	    $consulta = "INSERT INTO empleados(idempleado, Nombre, Apellido, Telefono, Correo ) VALUES ('$idempleado','$Nombre','$Apellido','$Telefono','$Correo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado como empleado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>