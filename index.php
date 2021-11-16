<!DOCTYPE html>
<html>
<head>
	<title>Registrar Empleado Smart</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta De Empleados Smart</h1>
    	<input type="text" name="idempleado" placeholder="idempleado">
		<input type="text" name="Nombre" placeholder="Nombre">
    	<input type="text" name="Apellido" placeholder="Apellido">
		<input type="text" name="Telefono" placeholder="Telefono">
		<input type="text" name="Correo" placeholder="Correo">
    	<input type="submit" name="empleados">
    </form>
        <?php 
        include("empleados.php");
        ?>
</body>
</html>