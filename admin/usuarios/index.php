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
		                    Usuarios
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
                    <label for="titulo">Nombre</label>
                    <input type="text" id="nombre" placeholder="Nombre" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="titulo">Correo</label>
                    <input type="text" id="correo" placeholder="Correo" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="titulo">Usuario</label>
                    <input type="text" id="usuario" placeholder="Usuario" class="form-control"/>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" id="activo" value="1"> Estatus Usuario
                    </label>
                </div>

                <div class="form-group">
                    <label for="titulo">Clave</label>
                    <input type="password" id="clave" placeholder="Clave" class="form-control"/>
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
                    <label for="titulo">Nombre</label>
                    <input type="text" id="update_nombre" placeholder="Nombre" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="titulo">Correo</label>
                    <input type="text" id="update_correo" placeholder="Correo" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="titulo">Usuario</label>
                    <input type="text" id="update_usuario" placeholder="Usuario" class="form-control"/>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" id="update_activo" <?=$fetched_row['activo']=='1'? 'checked':'' ?>/> Activo
                    </label>
                </div>

                <div class="form-group">
                    <label for="titulo">Clave</label>
                    <input type="password" id="update_clave" placeholder="Clave" class="form-control"/>
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
<script type="text/javascript" src="../js/script-usuarios.js"></script>

<script>



</script>
</body>
</html>
