<?php
	
	require_once './conexion_bd.php';

	$observerClass = new Observer();
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$observerClass->getUser($mysqli,$obj);
	}

	if (isset($_POST)){
		echo "in1";
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
			echo "in";
			if(isset($_POST)){
				$sql = $mysqli -> query("INSERT INTO usuario (id_usuario,nombre,apellido,edad,cod_ciudad) VALUES (".$obj->identification.", '".$obj->first_name."', '".$obj->last_name."', ".$obj->age.", '".$obj->city."')");
			}
		}

		function suscribeUser($mysqli, $obj){}
	}

?>