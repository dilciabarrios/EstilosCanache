<?php 							
// include Database connection file
include("admin/resources/includes/db_connection.php");
?>
	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
						<div class="animatedParent">
							<div class="section-heading text-center">
								<h2 class="h-bold animated bounceInDown">Nuestras Confecciones</h2>
								<div class="divider-header"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
	      <div class="row animatedParent">
	          <div class="col-sm-12 col-md-12 col-lg-12" >
	              <div class="row gallery-item">

										<?php

										$result=mysql_query("SELECT * FROM portafolio WHERE destacado =1");

										$ruta = "admin/portafolio/imagenes/";  ?>
									   
										   <? //utilizar la consulta y utilizar while

											  while($row = mysql_fetch_assoc($result)) { ?>

											 	<div class="col-md-3 animated fadeInUp">

											 	<? 
												echo '<a href="admin/portafolio/imagenes/'.$row['imagen'].'" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="admin/portafolio/imagenes">
																<img src="admin/portafolio/imagenes/'.$row['imagen'].'" class="img-responsive" alt="img">
															</a>'; ?>

												</div>
												<? 
												  }
												?>
								</div>
	          </div>
	      </div>	
			</div>
		</div>
	</section><!-- /Section: works -->
