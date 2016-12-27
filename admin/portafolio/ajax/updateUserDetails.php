<?php
// check request
if(isset($_POST))
{
    // include Database connection file
    include("../../resources/includes/db_connection.php");
    // get values
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $destacado = $_POST['destacado'];
        $imagen = $_POST['imagen'];

    // Updaste User details
    $query = "UPDATE portafolio SET descripcion = '$decripcion', precio = '$precio', cantidad = '$cantidad' , destacado = '$destacado', imagen = '$imagen' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}