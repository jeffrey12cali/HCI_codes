<?php
	
	require_once './conexion_bd.php';

	error_reporting(E_ERROR | E_PARSE);

	$observerClass = new Observer();
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$observerClass->getUser($mysqli,$obj);
	}
	if (isset($_POST['identification_sus'], $_POST['magazine'])){
		$obj = (object)$_POST;
		$observerClass -> suscribeUser($mysqli, $obj);
	}
	elseif (isset($_POST['identification'], $_POST['first_name'], $_POST['city'])){
		$obj = (object)$_POST;
		$observerClass -> insertUser($mysqli, $obj);
	}

	class Observer{

		function getUser($mysqli, $obj){

			$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

			$valores = mysqli_fetch_array($queryRevista);

			if(isset($_GET['search'])){
				if(count($valores) > 0){
					echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
				}else{
					echo "No estas registrado, por favor registrate antes de realizar una suscripción";
				}
			}

		}

		function insertUser($mysqli, $obj){
			$sql = $mysqli -> query("INSERT INTO usuario (id_usuario,nombre,apellido,edad,cod_ciudad) VALUES (".$obj->identification.", '".$obj->first_name."', '".$obj->last_name."', ".$obj->age.", '".$obj->city."')");
			echo "Hola <b>".$obj->first_name."</b> te acabas de registrar";
		}

		function suscribeUser($mysqli, $obj){
			$sql = $mysqli -> query("INSERT INTO suscriptores (id_revista,id_usuario) VALUES (".$obj->magazine.", ".$obj->identification_sus.")");
			echo "Su suscripción a la revista fue completada con éxito.";
		}
	}

?>