<?php  
include_once'db.php';
$conectar= coneet();
$consulta_delitos = $conectar->query("SELECT * from delitos ORDER BY id DESC" );
$consulta_nepotismo = $conectar->query("SELECT * from nepotismo ORDER BY id DESC" );
$consulta_despilfarros = $conectar->query("SELECT * from despilfarros ORDER BY id DESC" );
$consulta_escandalos = $conectar->query("SELECT * from escandalo ORDER BY id DESC" );
$consulta_paz_total = $conectar->query("SELECT * from paz_total ORDER BY id DESC" );
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Datos</title>
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
			<table>
				<?php 
				while ($mostrar_datos=mysqli_fetch_array($consulta_delitos)) {
				?>
				<tr>
					<td><center><?php echo $mostrar_datos['id']; ?> </center> </td>
					<td><?php echo $mostrar_datos['accion']; ?></td>
					<td><?php echo $mostrar_datos['descripcion'];?></td>
					<td>
						<form action="modificar_delitos.php" method="POST">
							<input type="text" name="text_id" hidden value="<?php echo $mostrar_datos['id'];?>">
							<input type="submit" name="modificar" value="Modificar">
						</form>  
					</td>					
				</tr>
				<?php 
				}
				?>
			</table>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Nepotismo</h2>
			</div>
			<table>
				<?php 
				while ($mostrar_nepotismo=mysqli_fetch_array($consulta_nepotismo)) {
				?>
				<tr>
					<td><center><?php echo $mostrar_nepotismo['id']; ?> </center> </td>
					<td><?php echo $mostrar_nepotismo['nombre']; ?></td>
					<td><?php echo $mostrar_nepotismo['ciudad'];?></td>
					<td>
						<form action="modificar_nepotismo.php" method="POST">
							<input type="text" name="text_id" hidden value="<?php echo $mostrar_nepotismo['id'];?>">
							<input type="submit" name="modificar" value="Modificar">
						</form>  
					</td>					
				</tr>
				<?php 
				}
				?>
			</table>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Despilfarro</h2>
			</div>
			<table>
				<?php 
				while ($mostrar_despilfarros=mysqli_fetch_array($consulta_despilfarros)) {
				?>
				<tr>
					<td><center><?php echo $mostrar_despilfarros['id']; ?> </center> </td>
					<td><?php echo $mostrar_despilfarros['valor']; ?></td>
					<td><?php echo $mostrar_despilfarros['descripcion'];?></td>
					<td>
						<form action="modificar_despilfarros.php" method="POST">
							<input type="text" name="text_id" hidden value="<?php echo $mostrar_despilfarros['id'];?>">
							<input type="submit" name="modificar" value="Modificar">
						</form>  
					</td>					
				</tr>
				<?php 
				}
				?>
			</table>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Escandalos</h2>
			</div>
			<table>
				<?php 
				while ($mostrar_escandalos=mysqli_fetch_array($consulta_escandalos)) {
				?>
				<tr>
					<td><center><?php echo $mostrar_escandalos['id']; ?> </center> </td>
					<td><?php echo $mostrar_escandalos['accion']; ?></td>
					<td><?php echo $mostrar_escandalos['descripcion'];?></td>
					<td>
						<form action="modificar_escandalos.php" method="POST">
							<input type="text" name="text_id" hidden value="<?php echo $mostrar_escandalos['id'];?>">
							<input type="submit" name="modificar" value="Modificar">
						</form>  
					</td>					
				</tr>
				<?php 
				}
				?>
			</table>
		</div>
		<div class="admin">
			<div class="text_form">
				<h2>Paz total</h2>
			</div>
			<table>
				<?php 
				while ($mostrar_paz_total=mysqli_fetch_array($consulta_paz_total)) {
				?>
				<tr>
					<td><center><?php echo $mostrar_paz_total['id']; ?> </center> </td>
					<td><?php echo $mostrar_paz_total['accion']; ?></td>
					<td><?php echo $mostrar_paz_total['descripcion'];?></td>
					<td>
						<form action="modificar_paz_total.php" method="POST">
							<input type="text" name="text_id" hidden value="<?php echo $mostrar_paz_total['id'];?>">
							<input type="submit" name="modificar" value="Modificar">
						</form>  
					</td>					
				</tr>
				<?php 
				}
				?>
			</table>
		</div>

	</main>

</body>
</html>