<?php
// check request
if(isset($_POST))
{
    // include Database connection file
    include("../../resources/includes/db_connection.php");
    // get values
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $parrafo = $_POST['parrafo'];

    // Updaste User details
    $query = "UPDATE acerca SET titulo = '$titulo', parrafo = '$parrafo' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}