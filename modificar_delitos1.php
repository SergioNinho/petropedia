<?php 

include_once 'db.php';

$conectar= coneet();
$consulta_delitos = $conectar->query('SELECT * from delitos');

$id = $_POST['id'];
$accion =$_POST['accion'];
$descripcion =$_POST['descripcion'];
$ley =$_POST['ley'];
$noticia =$_POST['noticia'];
$archivo=$_POST['archivo'];

$actualiza="UPDATE delitos SET accion='$accion' ,descripcion='$descripcion', ley='$ley', noticia='$noticia', archivo='$archivo' WHERE id = '$id' ";

$actualizar=$conectar->query($actualiza);
echo "<script>alert('Su modificación se ha realizado con exito');window.location='datos.php'</script>";

?>