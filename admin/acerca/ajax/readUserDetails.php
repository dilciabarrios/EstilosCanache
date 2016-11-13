<?php
// include Database connection file
include("../../resources/includes/db_connection.php");

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get acerca ID
    $id = $_POST['id'];

    // Get acerca Details
    $query = "SELECT * FROM acerca WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    $response = array();
    if(mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}