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
		<div class="container">
			<div class="row animatedParent">

				<!--AQUI EMPIEZA LA PRIMERA SECCION  -->
				<div class="col-xs-6 col-sm-4 col-md-4">
					<div class="animated rotateInDownLeft">
					    <div class="service-box">
							<div class="service-icon">
								<span class="fa fa-laptop fa-2x"></span> 
							</div>
							<div class="service-desc">						
								<h5><!--AQUI VA EL TITULO DE DEL SERVICIO  --></h5>
								<div class="divider-header"></div>
								<p>
									<?php

										$result=mysql_query("SELECT * FROM ACERCA");
											$contador= 1;
											while($row = mysql_fetch_assoc($result)) 
												{
													if ($contador%3==0)
													
													{
														continue;
														
													}
													echo ''.$row['parrafo'].'';
													$contador= $contador-1;
										
												}
											 ?>
									    
											
								</p>
								<a href="#" class="btn btn-skin">Learn more</a>
							</div>
					    </div>
					</div>
				</div>

				<!--AQUI EMPIEZA LA SEGUNDA SECCION  -->
				<div class="col-xs-6 col-sm-4 col-md-4">
					<div class="animated rotateInDownLeft slow">
					    <div class="service-box">
							<div class="service-icon">
								<span class="fa fa-camera fa-2x"></span> 
							</div>
							<div class="service-desc">
								<h5><!--AQUI VA EL TITULO DE DEL SERVICIO --></h5>
								<div class="divider-header"></div>
								<p>
									<?php

										$result=mysql_query("SELECT * FROM ACERCA");
											$contador= 1;
											while($row = mysql_fetch_assoc($result)) 
												{
													if ($contador%3==0)
													
													{
														continue;
														
													}
													echo ''.$row['parrafo'].'';
													$contador= $contador+1;
										
												}
									?>
									    
								</p>
								<a href="#" class="btn btn-skin">Learn more</a>
							</div>
					    </div>
					</div>
				</div>

				<!--AQUI EMPIEZA LA TERCERA SECCION  -->
				<div class="col-xs-6 col-sm-4 col-md-4">
					<div class="animated rotateInDownLeft slower">
					    <div class="service-box">
							<div class="service-icon">
								<span class="fa fa-code fa-2x"></span> 
							</div>
							<div class="service-desc">
								<h5><!--AQUI VA EL TITULO DE DEL SERVICIO--></h5>
								<div class="divider-header"></div>
								<p>
									<?php

									$result=mysql_query("SELECT * FROM ACERCA");
										$contador= 1;
										while($row = mysql_fetch_assoc($result)) 
											{
												if ($contador%3==0)
												
												{
													continue;
													
												}
												echo ''.$row['parrafo'].'';
												$contador= $contador+1;
									
											}
									?>
									
								</p>
								<a href="#" class="btn btn-skin">Learn more</a>
							</div>
					    </div>
					</div>
				</div>

			</div>		
		</div>
	</div>
</section>
<!-- /Section: services -->
