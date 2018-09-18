<?php
	$entero = 10;
	$float = 12.34;
	$string = "clase HCI";
	$array = array("key1" => "hola", "key2" => "mundo");
	$verdadero = true;
	$falso = false;

	class StrValTest{
		private $miVar = "clase1";
		public $miVar2 = "clase2";
		public function __toString(){
			return __CLASS__;
		}
		public function example(){
			return "esto es una prueba";
		}
	}

	echo "entero: " .intval($entero). "<br />";
	print "entero: ".$entero."<br />";
	print "float: ".$float."<br />";
	print "string: ".intval($string)."<br />";
	//print "array: ".$array."<br />";
	print "verdadero: ".$verdadero."<br />";
	print "falso: ".intval($falso)."<br />";
	print "hex-dec: ".intval(0x165)."<br />";

	print "float string: ".strval($float)."<br />";
	$floatString = strval($float);
	print "float string type: ".gettype(strval($float))."<br />";
	print "falso string: ".strval($falso)."<br />";
	print "verdadero string: ".strval($verdadero)."<br />";
	print "class string: ".strval(new StrValTest)."<br />";

	print "array int: ".(int)$array."<br />"; //empty
	print "array float: ".(float)$verdadero."<br />";
	var_dump((array)new StrValTest);
	//print "array class: ".(array)new StrValTest."<br />";
	print "<br />";
	var_dump((object)$float);