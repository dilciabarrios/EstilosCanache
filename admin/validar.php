<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'server.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['usuario'];
				$clave = $_POST['clave'];
				$log = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario']; 
				  	echo 'Iniciando sesión para '.$_SESSION['usuario'].' <p>';
					echo '<script> window.location="panel.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>