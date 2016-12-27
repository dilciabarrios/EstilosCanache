<?php		

	if( isset($_POST['descripcion']) && isset($_POST['precio'])&& isset($_POST['cantidad'])&& isset($_POST['destacado']) && isset($_POST['imagen']))
	{

		// include Database connection file 
		
		include("../../resources/includes/db_connection.php");
		// get values 
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];
		$destacado = $_POST['destacado'];
		$imagen = $_POST['imagen'];

		$query = "INSERT INTO portafolio (descripcion,precio, cantidad, destacado, imagen) VALUES('$descripcion', '$precio','$cantidad','$destacado', '$imagen')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>


