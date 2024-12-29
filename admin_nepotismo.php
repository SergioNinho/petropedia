<?php

include_once ("db.php");

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$cargo = $_POST['cargo'];
$parentesco = $_POST['parentesco'];
$salario = $_POST['salario'];
$profesion = $_POST['profesion'];
$partido = $_POST['partido'];
$experiencia = $_POST['experiencia'];


$conectar= coneet();

$sql = "INSERT INTO `nepotismo` ( `nombre`,`ciudad`, `cargo`, `parentesco`, `salario`, `profesion`, `partido`, `experiencia`) VALUES ('$nombre','$ciudad', '$cargo', '$parentesco', '$salario', '$profesion', '$partido', '$experiencia')";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);

if ($resul) {
	// header("location:admin.php");
	echo "<script>alert('La informacion se ha subido con exito');window.location='admin.php'</script>";
};

?>