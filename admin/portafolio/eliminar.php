<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<?php

$con = mysql_connect("localhost","root", "20101489");

if(! $con){ die ("ERROR CONEXION MYSQL:". mysql_error());}

$db= mysql_select_db("canaches",$con);

if (! $db){die ("ERROR CONEXION BD:". mysql_error());}

$sql = "Delete FROM portafolio WHERE id='".$_GET['id']."'";
//echo "</br>".$sql."</br>";
$result = mysql_query($sql);

if (! $result){die ("ERROR AL ELIMINAR:". mysql_error());}

?>
<script type="text/javascript">
window.location="http://localhost/estiloscanache/admin/portafolio/index.php";
</script>
<body>
</body>
</html>
