<?php		

	if( isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['activo'])&& isset($_POST['clave']))
	{

		// include Database connection file 
		
		include("../../resources/includes/db_connection.php");
		// get values 
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$usuario = $_POST['usuario'];
		$activo = $_POST['activo'];
		$clave = $_POST['clave'];

		$query = "INSERT INTO usuarios (nombre,correo,usuario,activo,clave) VALUES('$nombre', '$correo','$usuario','$activo','$clave')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>


