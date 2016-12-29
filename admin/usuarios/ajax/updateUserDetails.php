<?php
// check request
if(isset($_POST))
{
    // include Database connection file
    include("../../resources/includes/db_connection.php");
    // get values
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$usuario = $_POST['usuario'];
        $activo = isset($_POST['activo'])? '1': '0'; 
		$clave = $_POST['clave'];

    // Updaste User details
    $query = "UPDATE usuarios SET nombre = '$nombre', correo = '$correo', usuario= '$usuario', clave='$clave', activo='$activo' WHERE id='".$_POST['id']."'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}