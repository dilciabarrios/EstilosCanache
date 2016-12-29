<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modulo Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--PARA VISUALIZAR EN DISPOSITIVOS MOVILES -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link href="../assets/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="container-fluid">	
			<div class="modulos">
		        <!-- Marketing Icons Section -->
		        <div class="row">
		            <div class="col-lg-12">
		                <h1 class="page-header text-muted">
		                    Portafolio
		                </h1>
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <button class="btn btn-success" type="button" onclick="location.href='registrar.php'">Anadir Nuevo</button>
                 <button class="btn btn-default" type="button" onclick="location.href='../index.php'">Regresar</button>

            </div>
        </div>
    </div>   
    <div class="row">
        <div class="col-md-12">
            <h3></h3>

            <div class="records_content"></div>
        </div>
    </div>
</div>

	<?php
	$conexion = mysql_connect ("localhost", "root", "20101489") or die ("Problemas de conexion");
	mysql_select_db("canaches", $conexion) or die ("Problemas de seleccion en la BD");
	if(isset($_POST['update']))
	{
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];
	$destacado = isset($_POST['destacado'])? '1': '0';
	$imagen=$_FILES['foto']['name']; 
	// Updaste User details
	$sql_query = "UPDATE portafolio SET  descripcion='$descripcion', precio='$precio', cantidad='$cantidad', destacado='$destacado', imagen='$imagen' WHERE id='".$_POST['id']."'"; // PARA este caso lo mando por POST y no por GET porque lo envio por formulario el hidden mediante POST 
	mysql_query($sql_query);
	}
	?>
<!-- /Content Section -->

<!-- Jquery JS file -->
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="../js/script-portafolio.js"></script>


<script>


</script>
</body>
</html>
