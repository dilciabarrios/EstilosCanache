<?php ?>
<!-- Section: contact -->
<section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="animatedParent">
					<div class="section-heading text-center">
						<h2 class="h-bold animated bounceInDown">Contactanos</h2>
						<div class="divider-header"></div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<div class="container">
		<div class="row marginbot-80">
			<div class="col-md-8 col-md-offset-2">
				<form name="contact-form" method="post" action="email.php">
					<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" name="name" placeholder="Ingrese su nombre" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg"  name="email" placeholder="Ingrese su correo" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<input type="text" class="form-control input-lg" name="subject" placeholder="Asunto" required="required" />
								</div>
								<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Mensaje"></textarea>
								</div>						
								<input type="submit"  class="btn btn-skin btn-lg btn-block" onclick="mensaje()" name="Enviar" value="Enviar"//>

								<?
								echo '<script type="text/javascript">

								function mensaje(){
								  alert("Enviado mensaje!");
								}
								</script>';
								?>
								
							</div>
						</div>
				</form>
			</div>
		</div>	
	</div>
</section>
<!-- /Section: contact -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/"></script>
