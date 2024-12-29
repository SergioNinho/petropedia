<?php 

include_once 'db.php';

$conectar= coneet();
$consulta_nepotismo = $conectar->query('SELECT * from nepotismo');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$cargo = $_POST['cargo'];
$parentesco = $_POST['parentesco'];
$salario = $_POST['salario'];
$profesion = $_POST['profesion'];
$partido = $_POST['partido'];
$experiencia = $_POST['experiencia'];

$actualiza="UPDATE nepotismo SET nombre='$nombre' ,ciudad='$ciudad', cargo='$cargo', parentesco='$parentesco', salario='$salario', profesion='$profesion', partido='$partido', experiencia='$experiencia' WHERE id = '$id' ";

$actualizar=$conectar->query($actualiza);
echo "<script>alert('Su modificación se ha realizado con exito');window.location='datos.php'</script>";

?>