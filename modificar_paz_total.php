<?php 
include_once 'db.php';
$conectar= coneet();
$consulta_paz_total = $conectar->query('SELECT * from paz_total');
$id_paz_total = $_POST['text_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Paz total</title>
</head>
<body>
	<header>
		<div class="int"></div>
 		<div class="header">
 			<div class="head1"></div>
 			<div class="head2"><img src="imagenes/logo.png"></div>
 			<div class="head3"><img src="imagenes/imgcontacto.png" id="cont"><img src="imagenes/contacto.png" id="conta"> </div>
 		</div>
 		<div class="header1">
 			<h3>BIENVENIDOS A PETROPEDIA, LA ENCICLOPEDIA QUE TODO COLOMBIANO DEBE CONOCER</h3>
 		</div>
	</header>
	<main>
		<div class="admin">
			<div class="text_form">
				<h2>Paz total</h2>
			</div>
			<div class="form">
				<?php 
				while ($mostrar_paz_total=mysqli_fetch_array($consulta_paz_total)) {
					if ($mostrar_paz_total['id']==$id_paz_total) {
					// code...
				?>
				<form action="modificar_paz_total1.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $mostrar_paz_total['id']; ?> ">
					<label>ACCIÓN</label>
					<input type="text" name="accion" required value="<?php echo $mostrar_paz_total['accion']; ?> ">
					<label>DESCRIPCIÓN</label>
					<input type="text" name="descripcion" required value="<?php echo $mostrar_paz_total['descripcion']; ?>">
					<label>NOTICIA</label>
					<input type="text" name="noticia" required value="<?php echo $mostrar_paz_total['noticia']; ?>">
					<label>MEDIO</label>					
					<select name="archivo" required>
						<option value="0">Seleccione medio</option>
						<?php						
						$consulta = $conectar->query("SELECT * from medios " );
						while ($mostrar=mysqli_fetch_array($consulta)){
						?>
						<option value="<?php echo $mostrar['medios']; ?>"><?php echo $mostrar['medios'];}; ?></option>
					</select>
					<input type="submit" name="enviar" class="enviar" id="enviar_delito"><br>
					<button><a href="datos.php">Volver</a></button> 
				</form>
				<?php 
				}}
				?>
			</div>
		</div>
	</main>
</body>