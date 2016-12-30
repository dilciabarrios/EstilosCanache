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
                <button class="btn btn-success" type="button" onclick="location.href='registrar.php'">Anadir Nuevo</button>
                 <button class="btn btn-default" type="button" onclick="location.href='../index.php'">Regresar</button>

            </div>
        </div>
    </div> 
    <br>  
    <div class="row">
        <div class="container">

            <? include('../resources/includes/db_connection.php'); 

            if(isset($_POST['update']))
            {
						$nombre=$_POST['nombre']; 
						$correo=$_POST['correo']; 
						$usuario=$_POST['usuario']; 
						$clave=$_POST['clave'];
						$activo = isset($_POST['activo'])? '1': '0';

            // Updaste User details
            $sql_query = "UPDATE usuarios SET  nombre='$nombre', correo='$correo', usuario='$usuario', clave='$clave', activo='$activo' WHERE id='".$_POST['id']."'"; // PARA este caso lo mando por POST y no por GET porque lo envio por formulario el hidden mediante POST 
            mysql_query($sql_query);
            }

            $sql = "SELECT * FROM usuarios";
            $result = mysql_query ($sql);
            if (! $result){
            echo "La consulta SQL contiene errores.".mysql_error();
            exit();
            }else {
            echo "
            <div class='table-responsive'>
            <table class='table table-striped table-bordered table-hover table-condensed'>
            <tr class='success'>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Activo</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </tr>";
            if(mysql_num_rows($result) > 0)
            {
            $number = 1;

            while ($row = mysql_fetch_row($result)){

            echo "</tr>
            <td>".$number."</td>
            <td>".$row[1]."</td>
            <td>".$row[2]."</td>
            <td>".$row[3]."</td>
            <td>".$row[5]."</td>
            <td><center><a href='editar.php?id=".$row[0]."'>Editar</a></center></td>
            <td><center><a href='eliminar.php?id=".$row[0]."'>Eliminar</a></center></td>
            </tr>";
            $number++;
            }
            }
            }
            ?> 

            </table>
        </div>
    </div>
</div>

<!-- Jquery JS file -->
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap JS file -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<script>

</script>
</body>
</html>
