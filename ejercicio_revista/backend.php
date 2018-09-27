<?php
	$host = 'localhost';
	$user = 'root';
	$pw = '';
	$bd = '';
	$mysqli = new mysqli('localhost', 'root', '', 'revista');
	$mysquli -> query("SELECT * FROM ciudad");
	$queryRevista = $mysqli -> query("SELECT * FROM revista");
?>