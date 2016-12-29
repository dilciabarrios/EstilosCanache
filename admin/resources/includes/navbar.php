<?php ?>

	<div class="navbar-wrapper"> 
	    <div class="container">
        <!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <h3 class="content"><a class="navbar-brand" href="index.html">Content Manager System</a></h3>
				</div> <!--Si quito este div se desplaza hacia abajo los iconos y content manager queda solo arriba -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-top-links navbar-left">
		                <li>
		                    <a href="acerca/index.php">		                        
		                    <h4 class="text-muted"><span class="glyphicon glyphicon-pencil"></span></h4>
		                        <h6 class="text-muted">Acerca</h6>
		                    </a>
		                </li>
						
		                <li>
		                    <a  href="servicios/index.php">
		                        <h4 class="text-muted"><span class="glyphicon glyphicon-tasks"></span></h4> 
		                        <h6 class="text-muted">Servicios</h6>
		                    </a>
		                </li>
		                <!-- /.dropdown -->
		                <li>
		                    <a href="portafolio/index.php">
		                        <h4 class="text-muted"><span class="glyphicon glyphicon-picture"></h4>
		                        <h6 class="text-muted">Portafolio</h6>
		                    </a>
		                </li>
		                <!-- /.dropdown -->
		                <li>
		                    <a href="usuarios/index.php">
		                        <h4 class="text-muted"><span class="fa fa-user fa-fw"></span></h4>
		                        <h6 class="text-muted">Usuarios</h6>
		                    </a>
		                </li>

						
		                <!-- /.dropdown user-->
		                <li class="dropdown">
		                    <a class="dropdown-toggle " data-toggle="dropdown" href="#">
		                       <h4 class="text-muted"><span class="fa fa-user fa-fw"></span><i class="fa fa-caret-down"></i></h4>
		                       <h6 class="text-muted">Finalizar Sesion</h6>
		                    </a>
		                    <ul class="dropdown-menu dropdown-user">
		                        <li><a href="usuarios/index.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
		                        </li>
		                        <li class="divider"></li>
		                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
		                        </li>
		                    </ul>
		                    <!-- /.dropdown-user -->
		                </li>

		            </ul>
		            <!-- /.navbar-top-links -->
		            </div>
		            <!-- /.navbar-header -->
					
				</div>

	        </nav>
	    </div>
	</div> 
