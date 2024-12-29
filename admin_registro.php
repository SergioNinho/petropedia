<?php

include_once ("db.php");

$accion = $_POST['accion'];
$descripcion = $_POST['descripcion'];
$ley = $_POST['ley'];
$noticia = $_POST['noticia'];
$archivo= $_POST['archivo'];

$conectar= coneet();

$sql = "INSERT INTO `delitos` ( `accion`,`descripcion`, `ley`, `noticia`, `archivo`) VALUES ('$accion','$descripcion', '$ley', '$noticia', '$archivo')";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);

if ($resul) {
	// header("location:admin.php");
	echo "<script>alert('La informacion se ha subido con exito');window.location='admin.php'</script>";
};

?>