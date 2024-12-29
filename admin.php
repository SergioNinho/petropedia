<?php 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Petropedia admin</title>
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
				<h2>Delitos</h2>
			</div>
			<div class="form">
				<form action="admin_registro.php" method="POST" enctype="multipart/form-data">
					<label>ACCIÓN</label>
					<input type="text" name="accion" required>
					<label>DESCRIPCIÓN</label>
					<input type="text" name="descripcion" required>
					<label>LEY</label>
					<input type="text" name="ley" required>
					<label>NOTICIA</label>
					<input type="text" name="noticia" required>
					<label>MEDIO</label>					
					<select name="archivo" required>
						<option value="0">Seleccione medio</option>
						<?php 
						$conectar= coneet();
						$consulta = $conectar->query("SELECT * from medios " );
						while ($mostrar=mysqli_fetch_array($consulta)){
						?>
						<option value="<?php echo $mostrar['medios']; ?>"><?php echo $mostrar['medios'];}; ?></option>
					</select>
					<input type="submit" name="enviar" class="enviar" id="enviar_delito">
				</form>
			</div>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Nepotismo</h2>
			</div>
			<div class="form">
				<form action="admin_nepotismo.php" method="POST">
					<label>Nombre</label>
					<input type="text" name="nombre">
					<label>Ciudad</label>
					<input type="text" name="ciudad">
					<label>Cargo</label>
					<input type="text" name="cargo">
					<label>Parentesco</label>
					<input type="text" name="parentesco">
					<label>Salario</label>
					<input type="text" name="salario">
					<label>Profesión</label>
					<input type="text" name="profesion">
					<label>Partido Político</label>
					<input type="text" name="partido">
					<label>Experiencia laboral /Educativa</label>
					<input type="text" name="experiencia">
					<input type="submit" name="enviar" class="enviar" id="enviar_delito">
				</form>
			</div>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Despilfarro</h2>
			</div>
			<div class="form">
				<form action="admin_despilfarros.php" method="POST" enctype="multipart/form-data">
					<label>VALOR</label>
					<input type="text" name="valor">
					<label>DESCRIPCIÓN</label>
					<input type="text" name="descripcion">
					<label>NOTICIA</label>
					<input type="text" name="noticia">
					<select name="archivo" required>
						<option value="0">Seleccione medio</option>
						<?php 
						$conectar= coneet();
						$consulta = $conectar->query("SELECT * from medios " );
						while ($mostrar=mysqli_fetch_array($consulta)){
						?>
						<option value="<?php echo $mostrar['medios']; ?>"><?php echo $mostrar['medios'];}; ?></option>
					</select>
					<input type="submit" name="enviar" class="enviar" id="enviar_delito">
				</form>
			</div>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Escandalos</h2>
			</div>
			<div class="form">
				<form action="admin_escandalos.php" method="POST" enctype="multipart/form-data">
					<label>NOMBRE</label>
					<input type="text" name="accion">
					<label>DESCRIPCIÓN</label>
					<input type="text" name="descripcion">
					<label>NOTICIA</label>
					<input type="text" name="noticia">
					<select>
						<option value="0">Seleccione medio</option>
						<?php 
						$conectar= coneet();
						$consulta = $conectar->query("SELECT * from medios " );
						while ($mostrar=mysqli_fetch_array($consulta)){
						?>
						<option value="<?php echo $mostrar['medios']; ?>"><?php echo $mostrar['medios'];}; ?></option>
					</select>
					<input type="submit" name="enviar" class="enviar" id="enviar_delito">
				</form>
			</div>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>E Cambio</h2>
			</div>
			<div class="form">
				<form action="admin_paz_total.php" method="POST" enctype="multipart/form-data">
					<label>NOMBRE</label>
					<input type="text" name="nombre">
					<label>DESCRIPCIÓN</label>
					<input type="text" name="descripcion">
					<label>NOTICIA</label>
					<input type="text" name="noticia">
					<select name="archivo">
						<option value="0">Seleccione medio</option>
						<?php 
						$conectar= coneet();
						$consulta = $conectar->query("SELECT * from medios " );
						while ($mostrar=mysqli_fetch_array($consulta)){
						?>
						<option value="<?php echo $mostrar['medios']; ?>"><?php echo $mostrar['medios'];}; ?></option>
					</select>
					<input type="submit" name="enviar" class="enviar" id="enviar_delito">
				</form>
			</div>
		</div>
	</main>
	<footer>
		<div class="foot">
			<div class="foot_izq">
				<img src="imagenes/logopie.png">
			</div>
			<div class="foot_der">
				<ul>
					<li>PRESUNTOS DELITOS</li>
					<li>NEPOTISMO</li>
					<li>DESPILFARROS</li>
					<li>ESCÁNDALOS</li>
					<li>DETRIMENTO PATRIMONIAL</li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>