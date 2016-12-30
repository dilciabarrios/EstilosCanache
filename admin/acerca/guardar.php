<?php 

$titulo=$_POST['titulo']; 
$parrafo=$_POST['parrafo']; 

$conexion = mysql_connect ("localhost", "root", "20101489") or die ("Problemas de conexion");

mysql_select_db("canaches", $conexion) or die ("Problemas de seleccion en la BD");

$consulta="INSERT INTO acerca (titulo,parrafo) VALUES('".$titulo."','".$parrafo."')";
//echo "</br>".$sql."</br>";
//echo $consulta."<br>";
$rs = mysql_query ($consulta, $conexion) or die("No se pudo ejecutar la consulta ".$consulta);
header("Location: index.php");
?>