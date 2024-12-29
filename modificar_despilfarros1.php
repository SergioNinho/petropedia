<?php 

include_once 'db.php';

$conectar= coneet();
// $consulta_despilfarros = $conectar->query('SELECT * from despilfarros');
$identi =$_POST['identi'];
$sql = $conectar->query('SELECT * from despilfarros WHERE id ="$idente"');

if ($sql) {
	$valor =$_POST['valor'];
	$descripcion =$_POST['descripcion'];
	$noticia =$_POST['noticia'];
	$archivo=$_POST['archivo']; 

	$actualiza=$conectar->query("UPDATE despilfarros SET valor='$valor', descripcion ='$descripcion', noticia='$noticia', archivo='$archivo' WHERE id = '$identi'");

	echo "<script>alert('Su modificación se ha realizado con exito');window.location='datos.php'</script>";

};

?>