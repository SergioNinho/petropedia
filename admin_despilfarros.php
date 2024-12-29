<?php

include_once ("db.php");

$valor = $_POST['valor'];
$descripcion = $_POST['descripcion'];
$noticia = $_POST['noticia'];
$archivo= $_POST['archivo'];

$conectar= coneet();

$sql = "INSERT INTO `despilfarros` ( `valor`,`descripcion`,`noticia`, `archivo`) VALUES ('$valor','$descripcion', '$noticia', '$archivo')";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);

if ($resul) {
	// header("location:admin.php");
	echo "<script>alert('La informacion se ha subido con exito');window.location='admin.php'</script>";
};

?>