<?php 							
// include Database connection file
include("admin/resources/includes/db_connection.php");
?>
<!-- Section: services -->
<section id="service" class="home-section color-dark bg-gray">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div>
					<div class="section-heading text-center">
						<h2 class="h-bold">Nuestros servicios</h2>
						<div class="divider-header">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="text-center">
		<div class="row animatedParent">
			<?php
			$result=mysql_query("SELECT * FROM ACERCA");
			$contador= 0;
			$contador= 1;
			while($row = mysql_fetch_assoc($result)) 
				{ 
					if ($contador!=0 and $contador%3==0)
				{ echo '<br />'; }
				else 
				{ echo '
			<div class="col-xs-6 col-sm-4 col-md-4">
			<div class="animated rotateInDownLeft">
				<div class="service-box">
				<div class="service-icon">
					<span class="fa fa-2x '.$row['icono'].'"></span> 
					</div>
					<div class="service-desc">						
					<h5>'.$row['titulo'].'</h5>
					<div class="divider-header"></div>
					<p>'.$row['parrafo'].'</p>
					<a href="#" class="btn btn-skin">Learn more</a>
				</div>
			</div>
			{ echo '<div class="col-xs-6 col-sm-4 col-md-4">
			<div class="animated rotateInDownLeft">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-2x '.$row['icono'].'"></span> 
					</div>
			</div><!-- fin seccion -->';
			}
			$contador = $contador + 1; ?>
				<div class="service-desc">
					<h5>'.$row['titulo'].'</h5>
						<div class="divider-header"></div>
						<p>'.$row['parrafo'].'</p>
						<a href="#" class="btn btn-skin">Learn more</a>
						</div>
				</div>
			</div>
		</div><!-- fin seccion -->';
			if ($contador%3==0)
			{ echo '<br />'; }
			$contador = $contador + 1;
			}?>
		</div>		
	</div>
</div> 
