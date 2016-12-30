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
<? include('../resources/includes/navbar.php'); ?>
    <div class="container">
        <div class="container-fluid">   
            <div class="modulos">
                <!-- Marketing Icons Section -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-muted">
                           Servicios
                        </h1>
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">

                 <button class="btn btn-default" type="button" onclick="location.href='index.php'">Regresar</button>

            </div>
        </div>
    </div>   

    <div class="row">
        <div class="col-md-12">
            <br>	
              <?php
            	$conexion = mysql_connect ("localhost", "root", "20101489") or die ("Problemas de conexion");
            	mysql_select_db("canaches", $conexion) or die ("Problemas de seleccion en la BD");
            	// check request
            	if(isset($_GET['id']))
            	{
            	$sql_query="SELECT * FROM servicios WHERE id=".$_GET['id'];
            	$result_set=mysql_query($sql_query);
            	$fetched_row=mysql_fetch_array($result_set);
            	}
             ?>
            <form method="post" action="index.php" enctype="multipart/form-data">

                <div class="form-group" >
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" placeholder="Titulo" class="form-control" value="<?php echo $fetched_row['titulo']; ?>"/>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </div>

                <div class="form-group">
                    <label for="parrafo">Parrafo</label>
                    <textarea class="form-control" name="parrafo" placeholder="Parrafo" cols="30" rows="10"/><?php echo $fetched_row['parrafo']; ?>"</textarea>
                </div>

                <button type="submit" name="update" class="btn btn-primary">Update</button>

            </form>
            <br>
        </div>
    </div>
</div>
<!-- /Content Section -->

<!-- Jquery JS file -->
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap JS file -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>


<script>


</script>
</body>
</html>


