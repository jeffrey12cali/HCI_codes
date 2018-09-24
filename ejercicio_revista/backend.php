<?php
	$mysqli = new mysqli('localhost','root','','revista');
	$query = $mysqli -> query ("SELECT * FROM ciudad");
?>