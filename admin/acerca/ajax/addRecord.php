<?php		

	if( isset($_POST['titulo']) && isset($_POST['parrafo']))
	{

		// include Database connection file 
		
		include("../../resources/includes/db_connection.php");
		// get values 
		$titulo = $_POST['titulo'];
		$parrafo = $_POST['parrafo'];

		$query = "INSERT INTO acerca (titulo,parrafo) VALUES('$titulo', '$parrafo')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>


