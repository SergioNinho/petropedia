<?php 
include_once 'db.php';
$conectar= coneet();
$consulta_nepotismo = $conectar->query('SELECT * from nepotismo');
$id_nepotismo = $_POST['text_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Modificar Nepotismo</title>
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
				<h2>Nepotismo</h2>
			</div>
			<div class="form">
				<?php 
				while ($mostrar_nepotismo=mysqli_fetch_array($consulta_nepotismo)) {
					if ($mostrar_nepotismo['id']==$id_nepotismo) {
					// code...
				?>
				<form action="modificar_nepotismo1.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $mostrar_nepotismo['id']; ?>">
					<label>Nombre</label>
					<input type="text" name="nombre" value="<?php echo $mostrar_nepotismo['nombre']; ?>">
					<label>Ciudad</label>
					<input type="text" name="ciudad" value="<?php echo $mostrar_nepotismo['ciudad']; ?>">
					<label>Cargo</label>
					<input type="text" name="cargo" value="<?php echo $mostrar_nepotismo['cargo']; ?>">
					<label>Parentesco</label>
					<input type="text" name="parentesco" value="<?php echo $mostrar_nepotismo['parentesco']; ?>">
					<label>Salario</label>
					<input type="text" name="salario" value="<?php echo $mostrar_nepotismo['salario']; ?>">
					<label>Profesión</label>
					<input type="text" name="profesion" value="<?php echo $mostrar_nepotismo['profesion']; ?>">
					<label>Partido Político</label>
					<input type="text" name="partido" value="<?php echo $mostrar_nepotismo['partido']; ?>">
					<label>Experiencia laboral /Educativa</label>
					<input type="text" name="experiencia" value="<?php echo $mostrar_nepotismo['experiencia']; ?>">
					<input type="submit" name="enviar" class="enviar" id="enviar_delito"> 
					<button><a href="datos.php">Volver</a></button>
				</form>
				<?php 
				}}
				?>
			</div>
		</div>
	</main>
</body>