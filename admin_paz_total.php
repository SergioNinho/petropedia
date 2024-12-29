<?php

include_once ("db.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$noticia = $_POST['noticia'];
$archivo=$_POST['archivo'];

$conectar= coneet();

$sql = "INSERT INTO `paz_total` ( `accion`,`descripcion`,`noticia`, `archivo`) VALUES ('$nombre','$descripcion', '$noticia', '$archivo')";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);

if ($resul) {
	// header("location:admin.php");
	echo "<script>alert('La informacion se ha subido con exito');window.location='admin.php'</script>";
};

?>