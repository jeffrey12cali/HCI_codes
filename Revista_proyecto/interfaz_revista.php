<?php 
	include("conexion_bd.php");
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <style> 
    h1 {
        background-color: lightblue;
    }
    .button-top{
    	background-color: #ffffff;
    	color: #262626;
    	border: none;
    }
    .button-general{
    	background-color: #ff5656;
    	color: #262626;
   		border-radius: 25px;
   		font-size: 19px;
    }

    .info{
    	text-align: center;
    	padding:10px;
    }

    .botones{
    	margin-top: 10px;
    	padding: 10px !important;
    	
    }

    .suscribirte{
    	text-align: center;
    }

    .inputs{
    	width: 100% !important;
    }
    .organice{
    	padding-top: 10px;
    	padding-bottom: 10px;
    }

    .semicirc {
    background: lightblue;
    height: 600px;
    border-top-left-radius:  90%;
    border-bottom-left-radius: 90%;
	}

    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagina de revistas</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
  		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- Just an image -->

	  		<a class="navbar-brand" href="#">
	    		<img src="http://i67.tinypic.com/4vheky.png" width="100" height="100" alt="">
	  		</a>
			
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			    	<li class="nav-item active">
			        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Tematicas <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contacto</a>
			      </li>
			    </ul>
			  </div>
			</nav>
    <div class="container">
    	<div class="row">
            <div class="col-md-6">
					<h4>Conoce si te encuentras registrado en nuestro sistema</h4>
		            <span><p id="resSearch"></p></span>
					<form method="GET" onsubmit="searchTupla(); return false;">
							<input placeholder="Numero de identificacion" type="text" class="inputs" name="search" id="search">
				            <div style="margin-bottom: 20px">
								<button type="submit" class="btn btn-danger botones" >
									Buscar
								</button>
							</div>
					</form> 
					<b></b>
					<p class="info">
						En el panel izquierdo observa los resultados de las transacciones realizadas en el sistema conoce si estás registrado, o suscrito a una revista. Si no lo estás es momento de suscribirte para que no te pierdas ningún detalle de los mejores contenidos.
					</p>
					<h4 class="text-center">
						Suscribirme a una revista
					</h4>
		            <p id="resSus"></p>
					<form method="POST" onsubmit="suscribeUser(); return false;">
						<div class="organice">
							<input placeholder="numero de identificacion" type="text" class="inputs" id="identification_sus">
		                    
						</div>
						<div >
							<select class="form-control" id="magazine" placeholder="Seleccionar revista" class="inputs">
							      	<?php 
										while($valores = mysqli_fetch_array($queryRevista))
										{
											echo '<option value="'.$valores['id_revista'].'">'.$valores['nombre_revista'].'</option>';
										}
									?>
							    </select>
						</div>
						<div >
							<button type="submit" class="btn btn-danger botones" style="margin-top: 10px">Suscribirse</button>
		            	</div>
					</form>
		</div>
		<div class="col-md-6">
				<div class="semicirc">
					<div class="suscribirte">
						<h2>
							<br></br>
							<br></br>
							<br></br>
							<b>
		     				Suscríbete a tus revistas favoritas por tan solo $29.000 al mes.
		     				</b>
						</h2>
					</div>
				</div>

		</div>
	</div>
	</div>
	<div class="row" style="background: lightblue; margin-top: 20px">
		<div class="col-md-12">
            <br></br>
			<h1 class="text-center text-info">
				Registrate en nuestro sistema para suscribirte a una revista
			</h1>
            <br></br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
			<span>
				<h3 class="text-center text-muted">
					<p id="res"></p>
				</h3>
			</span>
            <br></br>
		</div>
	</div>
	<div style="margin-left:auto;margin-right:auto;">
		<form method="POST" onsubmit="insertUser(); return false;">
			<div class="row">
				<div class="col-md-4">
                    <div class="text-center">
					<label for="exampleInputEmail1">
						Número de identificación
					</label>
                    </div>
                    <div class="text-center">
					<input type="text" class="form-control" id="identification">
                    </div>
				</div>
				<div class="col-md-4">
                    <div class="text-center">
					<label for="exampleInputPassword1">
						Correo electrónico  
					</label>
                    </div>
                    <div class="text-center">
					<input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
				</div>
				<div class="col-md-4">
                    <div class="text-center">
					<label for="exampleInputEmail1">
					Nombre
					</label>
                    </div>
                    <div class="text-center">
					<input type="text" class="form-control" id="first_name">
                    </div>
				</div>	
		</div>			 			
		<div class="row">
			<div class="col-md-4">
                <div class="text-center">
				<label for="exampleInputPassword1">
					Edad
				</label>
                </div>
                <div class="text-center">
				<input type="text" class="form-control" id="age">
                </div>
			</div>
			<div class="col-md-4">
                <div class="text-center">
				<label for="exampleInputEmail1">
					Apellido
				</label>
                </div>
                <div class="text-center">
				<input type="text" class="form-control" id="last_name">
                </div>
			</div>
			<div class="col-md-4">
                <div class="text-center">
				<label for="exampleInputPassword1">
					Seleccionar una ciudad
				</label>
                </div>
                <div class="text-center">
				<select class="form-control" id="city">
			      	<?php 
						while($valoresC = mysqli_fetch_array($queryCiudad))
						{
							echo '<option value="'.$valoresC['cod_ciudad'].'">'.$valoresC['nombre_ciudad'].'</option>';
						}
					?>
			    </select>
                </div>
			</div>
		</div>
        </div>
        <br></br>
        <div style="margin-left:auto;margin-right:auto;margin-top:20px;">
		<div class="row">
			<div class="col-md-8">
				<p class="text-center">
					Al hacer clic en “registrarme” estoy aceptando los términos y condiciones, políticas de datos y cookies
				</p>
			</div>
			<div class="col-md-4">	 
				<button type="submit" class="btn btn-danger" style="margin-top: 10px">Registrarme</button>
			</div>
		</div>
		</div>
	</form>
	</div>
	<div class="row", style="margin-top: 20px; background: lightblue">
		<div class="col-md-3">
			<img alt="logofooter" src="http://i67.tinypic.com/4vheky.png">
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center">
						Secciones
					</h4>
				</div>
	    		</div>            
					<p class="text-center">
						Inicio
					</p>
					<p class="text-center">
						Temáticas
					</p>
					<p class="text-center">
						Contacto
					</p>
    		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center">
						Síguenos en redes
					</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img alt="aaaaa" src="http://i66.tinypic.com/bjfrpv.png">
				</div>
				<div class="col-md-4">
					<img alt="face" src="http://i63.tinypic.com/vzk7bn.png">
				</div>
				<div class="col-md-4">
					<img alt="aaa" src="http://i65.tinypic.com/16287e1.png">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<p class="text-center">
				Escríbenos al correo soporte@todorevistas.com
                <br></br>
                TodoRevistas, tienda online© 2018
			</p>
		</div>
	</div>
</div>

<script type="text/javascript" src="subject_base.js"></script>
</body>
</html>
