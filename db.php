<?php


function coneet()
{

	$server="81.25.112.63";
	$user="SN015US00003";
	$pass="pA3{gRU5)r,";
	$bd="petropedia";

	$conectar= mysqli_connect("$server","$user","$pass","$bd");

	if (!$conectar) {
		echo "no se ha podido conectar a la base de datos";
		// code...
	}

	return $conectar;
};



?>