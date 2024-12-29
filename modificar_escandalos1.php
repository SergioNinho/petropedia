<?php 

include_once 'db.php';

$conectar= coneet();
$consulta_escandalos = $conectar->query('SELECT * from escandalo');

$id = $_POST['id'];
$accion =$_POST['accion'];
$descripcion =$_POST['descripcion'];
$noticia =$_POST['noticia'];
$archivo=$_POST['archivo'];

$actualiza="UPDATE escandalo SET accion='$accion' ,descripcion='$descripcion', noticia='$noticia', archivo='$archivo' WHERE id = '$id' ";

$actualizar=$conectar->query($actualiza);
echo "<script>alert('Su modificación se ha realizado con exito');window.location='datos.php'</script>";

?>