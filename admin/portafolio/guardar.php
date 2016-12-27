<?php 
$ruta = "imagenes/";
opendir($ruta);
$destino = $ruta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
$nombre=$_FILES['foto']['name'];

$nom=$_FILES['foto']['name']; 
$descripcion=$_POST['descripcion']; 
$precio=$_POST['precio']; 
$cantidad=$_POST['cantidad']; 
$destacado=$_POST['destacado'];

$conexion = mysql_connect ("localhost", "root", "20101489") or die ("Problemas de conexion");

mysql_select_db("canaches", $conexion) or die ("Problemas de seleccion en la BD");

$consulta="INSERT INTO portafolio (imagen,descripcion,precio,cantidad,destacado) VALUES('".$nom."','".$descripcion."','".$precio."','".$cantidad."','".$destacado."')";
//echo "</br>".$sql."</br>";
//echo $consulta."<br>";
$rs = mysql_query ($consulta, $conexion) or die("No se pudo ejecutar la consulta ".$consulta);
header("Location: index.php");
?>