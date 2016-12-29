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
		                    Acerca
		                </h1>
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Añadir Nuevo</button>
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
<!-- /Content Section -->

<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" placeholder="Titulo" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="parrafo">Parrafo</label>
                    <textarea class="form-control" id="parrafo" placeholder="Parrafo" cols="30" rows="10"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>

            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="update_titulo" placeholder="Titulo"  class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="parrafo">Parrafo</label>
                    <textarea class="form-control" id="update_parrafo" placeholder="Parrafo" cols="30" rows="10"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="../js/script-acerca.js"></script>

<script>

</script>
</body>
</html>
