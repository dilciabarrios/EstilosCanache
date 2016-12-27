<?php 							
// include Database connection file
include("admin/resources/includes/db_connection.php");
?>
<section id="about" class="home-section color-dark bg-white">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
						<h2 class="h-bold">
							<?php 
									$result=mysql_query("SELECT * FROM ACERCA");

									while($row = mysql_fetch_assoc($result)) 
									{
									echo ''.$row['titulo'].'';
									}
							?>
						</h2>
						<div class="divider-header"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
				<p>
				<?php 
							$result=mysql_query("SELECT * FROM ACERCA");

							while($row = mysql_fetch_assoc($result)) 
							{
							echo ''.$row['parrafo'].'';
							}
				?>
				</p>
				</div>
			</div>
		</div>		
	</div>
</section>
<!-- /Section: about -->
