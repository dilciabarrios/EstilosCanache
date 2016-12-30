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
                            Acerca
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

            <form name="datos" id="datos" method="post" action="guardar.php " enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" placeholder="Titulo" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="parrafo">Parrafo</label>
                    <textarea class="form-control" id="parrafo" placeholder="Parrafo" cols="30" rows="10"></textarea>
                </div>

                <input type="submit" class="btn btn-primary" name="Guardar" value="Guardar"/>

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



