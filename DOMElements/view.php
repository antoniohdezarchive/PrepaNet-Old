<?php

function printTopbar(){
	print '
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Prepanet</a>
				</div>
				<div class="collapse navbar-collapse">
					<!--
	                <ul class="nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
					</ul>            
	                <ul class="nav navbar-nav navbar-right">
	  					<li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@Usuario <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                        	<li><a href="#">Cambiar contraseña</a></li>
	                        	<li class="divider"></li>
	                            <li><a href="#">Cerrar sesión</a></li>
	                        </ul>
	                    </li>
					</ul> 
					-->
				</div><!--/.nav-collapse -->
			</div>
		</div>
	';
}

?>