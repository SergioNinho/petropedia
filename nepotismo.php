<?php
include_once ("db.php");
$conteo = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Nepotismo</title>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032757646354849"
     crossorigin="anonymous"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7Q64E32M5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z7Q64E32M5');
</script>
<body>
	<header>
		<div class="int">
			<div class="atras" >
				<a href="index.php">
					<img src="imagenes/atras.png">
				<h2>Atrás</h2>
				</a>
				
			</div>
		</div>
 		<div class="header">
 			<div class="head1"></div>
 			<div class="head2"><img src="imagenes/logo.png"></div>
 			<div class="head3"><a href="mailto:contacto@petropedia.com"><img src="imagenes/imgcontacto.png" id="cont"><img src="imagenes/contacto.png" id="conta"></a></div>
 		</div>
 		<div class="header1">
 			<h3>Usar el poder para beneficios de los suyos sin pensar en el daño que se hace al país. </h3>
 			<h3>"Lo que influye en el correcto desarrollo de una sociedad es premiar el talento y no las amistades.</h3>
 		</div>
	</header>
	<main>
		<div class="header_main">
			<img src="imagenes/nepotismo.jpg">
		</div>
		<div class="title">
			<h1>Principales presuntos casos de nepotismo.</h1>
			<img src="imagenes/nepotismo_img.png">
		</div>
		<?php
		$conectar = coneet();
		$consulta = $conectar->query("SELECT * from nepotismo" );		
		 
?>
		<div class="nepotismo">	
		<?php while ($mostrar=mysqli_fetch_array($consulta)){  ?>		
			<div class="nepotismo_title" id="<?php echo $mostrar['id'].'i';?>"> 
				<div class="item_nepotismo">
					<h2><?php echo $conteo = $conteo+1;?></h2>
					<!-- <h3>item</h3> -->
				</div>
				<h2><?php echo $mostrar['nombre']?></h2>
				<div class="abrir_nep" id="<?php echo $mostrar['id'].'a';?>"><h2>></h2></div>
				<div class="cerrar_nep" id="<?php echo $mostrar['id'].'c';?>"><h2><</h2></div>
			</div>
			<div class="nepotismo_contenido" id="<?php echo $mostrar['id'].'d';?>">
				<table>
					<tr>
						<td><b>Ciudad:</b> <?php echo $mostrar['ciudad']; ?></td>	
					</tr>
					<tr>
						<td><b>Cargo:</b>  <?php echo $mostrar['cargo']; ?></td>		
					</tr>
					<tr>
						<td><b>Relación:</b>  <?php echo $mostrar['parentesco'];?></td>	
					</tr>
					<tr>
						<td><b>Salario:</b>  <?php echo $mostrar['salario']; ?></td>	
					</tr>
					<tr>
						<td><b>Profesión:</b>  <?php echo $mostrar['profesion']; ?></td>	
					</tr>
					<tr>
						<td><b>Partido Político: </b> <?php echo $mostrar['partido']; ?></td>
					</tr>
					<tr>
						<td><b> Experiencia laboral: </b><?php echo $mostrar['experiencia']; ?></td>	
					</tr>
				</table>
							
			</div>
			<script type="text/javascript">
				var inicio = document.getElementById('<?php echo $mostrar['id'].'i';?>');
				var contar = 0;
				inicio.addEventListener('click',abrir<?php echo $mostrar['id'];?>)
				function abrir<?php echo $mostrar['id'];?>(){
					var abrir = document.getElementById('<?php echo $mostrar['id'].'a';?>');
					var cerrar = document.getElementById('<?php echo $mostrar['id'].'c';?>');
					var datos = document.getElementById('<?php echo $mostrar['id'].'d';?>');

					if (contar==0) {
						abrir.style.display = 'none';
						cerrar.style.display = 'block';
						datos.style.display = 'block';
						contar = 1;
					}
					else{			
						cerrar.style.display = 'none';
						abrir.style.display = 'block';
						datos.style.display = 'none';
						contar = 0;}					
				}
				
			</script>
			<?php }?>	
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
			<div class="foot_f1" >
				<img src="imagenes/logo_f1.jpg">
			</div>
		</div>
	</footer>
</body>
</html>