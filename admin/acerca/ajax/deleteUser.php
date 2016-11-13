<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
   	include("../../resources/includes/db_connection.php");

    // get user id
    $id = $_POST['id'];

    // delete User
    $query = "DELETE FROM acerca WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>