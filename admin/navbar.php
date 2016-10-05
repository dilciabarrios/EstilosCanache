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
		                <li class="dropdown">
		                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
		                        <h4 class="text-muted"><span class="glyphicon glyphicon-file"></span><i class="fa fa-caret-down"></i></h4>
		                        <h6 class="text-muted">Crear</h6>
		                    </a>
		                    <ul class="dropdown-menu dropdown-messages">
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <strong>John Smith</strong>
		                                    <span class="pull-right text-muted">
		                                        <em>Yesterday</em>
		                                    </span>
		                                </div>
		                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <strong>John Smith</strong>
		                                    <span class="pull-right text-muted">
		                                        <em>Yesterday</em>
		                                    </span>
		                                </div>
		                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <strong>John Smith</strong>
		                                    <span class="pull-right text-muted">
		                                        <em>Yesterday</em>
		                                    </span>
		                                </div>
		                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a class="text-center" href="#">
		                                <strong>Read All Messages</strong>
		                                <i class="fa fa-angle-right"></i>
		                            </a>
		                        </li>
		                    </ul>
		                    <!-- /.dropdown-messages -->
		                </li>
						
		                <li class="dropdown">
		                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
		                        <h4 class="text-muted"><span class="glyphicon glyphicon-pencil"></span><i class="fa fa-caret-down"></i></h4> 
		                        <h6 class="text-muted">Editar</h6>
		                    </a>
		                    <ul class="dropdown-menu dropdown-tasks">
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <p>
		                                        <strong>Task 1</strong>
		                                        <span class="pull-right text-muted">40% Complete</span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
		                                            <span class="sr-only">40% Complete (success)</span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <p>
		                                        <strong>Task 2</strong>
		                                        <span class="pull-right text-muted">20% Complete</span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
		                                            <span class="sr-only">20% Complete</span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <p>
		                                        <strong>Task 3</strong>
		                                        <span class="pull-right text-muted">60% Complete</span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
		                                            <span class="sr-only">60% Complete (warning)</span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a href="#">
		                                <div>
		                                    <p>
		                                        <strong>Task 4</strong>
		                                        <span class="pull-right text-muted">80% Complete</span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
		                                            <span class="sr-only">80% Complete (danger)</span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a class="text-center" href="#">
		                                <strong>See All Tasks</strong>
		                                <i class="fa fa-angle-right"></i>
		                            </a>
		                        </li>
		                    </ul>
		                    <!-- /.dropdown-tasks -->
		                </li>
		                <!-- /.dropdown -->
		                <li class="dropdown">
		                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
		                        <h4 class="text-muted"><span class="glyphicon glyphicon-trash"></h4>
		                        <h6 class="text-muted">Eliminar</h6>
		                    </a>
		                </li>
		                <!-- /.dropdown -->
		                <li class="dropdown">
		                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
		                        <h4 class="text-muted"><span class="glyphicon glyphicon-cog"></h4>
		                        <h6 class="text-muted">Configuracion</h6>
		                    </a>
		                </li>

		                <li class="dropdown">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			                    <h4 class="text-muted"><span class="glyphicon glyphicon-wrench"></span></h4>
			                    <h6 class="text-muted">Opciones</h6>
			                </a>
		                </li>

		                <li class="dropdown">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			                    <h4 class="text-muted"><span class="glyphicon glyphicon-folder-open"></span></h4>
			                    <h6 class="text-muted">Archivos</h6>
			                </a>
		                </li>
						
						<li class="dropdown">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			                    <h4 class="text-muted"><span class="glyphicon glyphicon-picture"></span></h4>
			                    <h6 class="text-muted">Imagenes</h6>
			                </a>

		                </li>
						
		                <!-- /.dropdown user-->
		                <li class="dropdown">
		                    <a class="dropdown-toggle " data-toggle="dropdown" href="#">
		                       <h4 class="text-muted"><span class="fa fa-user fa-fw"></span><i class="fa fa-caret-down"></i></h4>
		                       <h6 class="text-muted">Finalizar Sesion</h6>
		                    </a>
		                    <ul class="dropdown-menu dropdown-user">
		                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
		                        </li>
		                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
		                        </li>
		                        <li class="divider"></li>
		                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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