<?php
session_start();
include 'server.php';

if(isset($_SESSION['usuario'])) {?>


<? include('resources/includes/header.php'); ?>

<? include('resources/includes/navbar.php'); ?>
	<div class="container">
		<div class="container-fluid">	
			<div class="modulos">
		        <!-- Marketing Icons Section -->
		        <div class="row">
		            <div class="col-lg-12">
		                <h1 class="page-header text-muted">
		                    Bienvenido
		                </h1>
		            </div>
		            <div class="col-md-3">
		                    <div class="panel-body">
		                        <a href="acerca/index.php" class="thumbnail"><img src="img/editar.png"></a>
		                    </div>
		            </div>
		            <div class="col-md-3">
		                    <div class="panel-body">
		                         <a href="#" class="thumbnail"><img src="img/servicio.png"></a>
		                    </div>
		            </div>
		            <div class="col-md-3">
		                    <div class="panel-body">
		                         <a href="#" class="thumbnail"><img src="img/imagenes.png"></a>
		                    </div>
		            </div>

		            <div class="col-md-3">
		                    <div class="panel-body">
		                         <a href="#" class="thumbnail"><img src="img/usuario.png"></a>
		                    </div>
		            </div>
		        </div>
		        <!-- /.row -->
		        <!-- Marketing Icons Section -->

		        <div class="row">
		            <div class="col-lg-12">
		            </div>
		            <div class="col-md-3">
		                    <div class="panel-body">
		                         <a href="#" class="thumbnail"><img src="img/opciones.png"></a>
		                    </div>
		            </div>
		            <div class="col-md-3">
		                    <div class="panel-body">
		                         <a href="#" class="thumbnail"><img src="img/archivo.png"></a>
		                    </div>
		            </div>
		            <div class="col-md-3">
		                    <div class="panel-body">
		                         
		                    </div>
		            </div>

		            <div class="col-md-3">
		                    <div class="panel-body">
		                        
		                    </div>
		            </div>
		        </div>
			</div>
		</div>

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>

  <a href="logout.php"></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>