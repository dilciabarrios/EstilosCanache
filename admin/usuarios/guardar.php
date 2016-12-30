<?php 

$nombre=$_POST['nombre']; 
$correo=$_POST['correo']; 
$usuario=$_POST['usuario']; 
$clave=$_POST['clave'];
$activo=$_POST['activo'];  

$conexion = mysql_connect ("localhost", "root", "20101489") or die ("Problemas de conexion");

mysql_select_db("canaches", $conexion) or die ("Problemas de seleccion en la BD");

$consulta="INSERT INTO usuarios (nombre,correo, usuario, clave, activo) VALUES('".$nombre."','".$correo."', '".$usuario."','".$clave."', '".$activo."')";
//echo "</br>".$sql."</br>";
//echo $consulta."<br>";
$rs = mysql_query ($consulta, $conexion) or die("No se pudo ejecutar la consulta ".$consulta);
header("Location: index.php");
?>