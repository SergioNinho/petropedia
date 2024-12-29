<?php
include_once ("db.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<title>El CAmbio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
 			<h3>La retórica populista cautiva a los ingenuos con promesas que no se van a cumplir.</h3>
 			<h3> "El demagogo es el que predica doctrinas que sabe que son falsas a hombres que sabe que son idiotas."</h3>
 		</div>
	</header>
	<main>
		<div class="header_main">
			<img src="imagenes/cambio.jpg">
		</div>
		<div class="title">
			<h1>Así va el gobierno del cambio.</h1>
			<img src="imagenes/nepotismo_img.png">
		</div>
		<?php
		$conectar= coneet();
		$consulta = $conectar->query("SELECT * from paz_total ORDER BY id DESC" );
		while ($mostrar=mysqli_fetch_array($consulta)){
		?>
		<div class="cont">
			<div class="cont_del" >
				<div class="cont_deli">
					<div class="cont_deli_title">
						<h2><?php echo $mostrar['accion'];?></h2>
					</div>
					<div class="cont_deli_text">
						<h3><?php echo $mostrar['descripcion'];?></h3>
					</div>
				</div>
				<div class="cont_del_img" id="<?php echo $mostrar['id'].'i' ?>">
					<?php
					if ($mostrar['archivo']=="alternativa") {
						// code...
					?>
					<img src="imagenes/alternativa.jpg">
					<?php
					}
					if ($mostrar['archivo']=="anf") {
						// code...
					?>
					<img src="imagenes/anf.jpg">
					<?php
					}
					if ($mostrar['archivo']=="asuntos") {
						// code...
					?>
					<img src="imagenes/asuntos.png">
					<?php
					}
					if ($mostrar['archivo']=="alvaro_uribe") {
						// code...
					?>
					<img src="imagenes/alvaro_uribe.jpg">
					<?php
					}
					if ($mostrar['archivo']=="as_colombia") {
						// code...
					?>
					<img src="imagenes/colombiasas.jpg">
					<?php
					}
					if ($mostrar['archivo']=="brujula") {
						// code...
					?>
					<img src="imagenes/la_brujula.jpg">
					<?php
					}
					if ($mostrar['archivo']=="canal1") {
						// code...
					?>
					<img src="imagenes/canal1.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="2orillas") {
						// code...
					?>
					<img src="imagenes/2orillas.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="cambio") {
						// code...
					?>
					<img src="imagenes/cambio.png">
					<?php 
					}

					if ($mostrar['archivo']=="cablenoticias") {
						// code...
					?>
					<img src="imagenes/cablenoticias.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="caracol_radio") {
						// code...
					?>
					<img src="imagenes/caracol_radio.png">
					<?php 
					}

					if ($mostrar['archivo']=="civicos") {
						// code...
					?>
					<img src="imagenes/civicos.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="cnn") {
						// code...
					?>
					<img src="imagenes/cnn.png">
					<?php 
					}
					if ($mostrar['archivo']=="colombiano") {
						// code...
					?>
					<img src="imagenes/colombiano.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="dane") {
						// code...
					?>
					<img src="imagenes/dane.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="daniel_briceño") {
						// code...
					?>
					<img src="imagenes/daniel_briceño.PNG">
					<?php 
					}

					if ($mostrar['archivo']=="diario_del_cesar") {
						// code...
					?>
					<img src="imagenes/diario_del_cesar.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="duque") {
						// code...
					?>
					<img src="imagenes/duque.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="caracol_noticias") {
						// code...
					?>
					<img src="imagenes/caracol_noticias.png">
					<?php 
					}

					if ($mostrar['archivo']=="fm") {
						// code...
					?>
					<img src="imagenes/fm.png">
					<?php 
					}

					if ($mostrar['archivo']=="espectador") {
						// code...
					?>
					<img src="imagenes/el_espectador.png">
					<?php 
					}

					if ($mostrar['archivo']=="heraldo") {
						// code...
					?>
					<img src="imagenes/el_heraldo.png">
					<?php 
					}

					if ($mostrar['archivo']=="iglesias") {
						// code...
					?>
					<img src="imagenes/julio_iglesias.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="impacto") {
						// code...
					?>
					<img src="imagenes/impacto.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="isabel") {
						// code...
					?>
					<img src="imagenes/isabel.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="jimena") {
						// code...
					?>
					<img src="imagenes/jimena.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="flip") {
						// code...
					?>
					<img src="imagenes/flip.jpg">
					<?php 
					}

					if ($mostrar['archivo']=="fernando_reflexiones") {
						// code...
					?>
					<img src="imagenes/fernando_reflexiones.jpeg">
					<?php 
					}

					if ($mostrar['archivo']=="france24") {
						// code...
					?>
					<img src="imagenes/france.png">
					<?php 
					}

					if ($mostrar['archivo']=="hora_verdad") {
						// code...
					?>
					<img src="imagenes/hora_verdad.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="infobae") {
						// code...
					?>
					<img src="imagenes/infobae.png">
					<?php 
					}
					if ($mostrar['archivo']=="indepaz") {
						// code...
					?>
					<img src="imagenes/indepaz.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="la_nacion") {
						// code...
					?>
					<img src="imagenes/la_nacion.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="la_pulla") {
						// code...
					?>
					<img src="imagenes/la_pulla.png">
					<?php 
					}
					if ($mostrar['archivo']=="la_republica") {
						// code...
					?>
					<img src="imagenes/la_republica.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="lengua_caribe") {
						// code...
					?>
					<img src="imagenes/lengua_caribe.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="legis_blog") {
						// code...
					?>
					<img src="imagenes/legis_blg.png">
					<?php 
					}
					if ($mostrar['archivo']=="libertad_digital") {
						// code...
					?>
					<img src="imagenes/libertad_digital.png">
					<?php 
					}
					if ($mostrar['archivo']=="manuel") {
						// code...
					?>
					<img src="imagenes/manuel_velez.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="metro_cuadrado") {
						// code...
					?>
					<img src="imagenes/metro_cuadrado.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="nuevo_siglo") {
						// code...
					?>
					<img src="imagenes/nuevo_siglo.png">
					<?php
					}	
					if ($mostrar['archivo']=="pais") {
						// code...
					?>
					<img src="imagenes/pais.png">
					<?php
					}	
					if ($mostrar['archivo']=="panampost") {
						// code...
					?>
					<img src="imagenes/panampost.jpg">
					<?php
					}	
					if ($mostrar['archivo']=="portafolio") {
						// code...
					?>
					<img src="imagenes/portafolio.jpg">
					<?php
					}	
					if ($mostrar['archivo']=="pulzo") {
						// code...
					?>
					<img src="imagenes/puzlo.png">
					<?php
					}	
					if ($mostrar['archivo']=="razon_publica") {
						// code...
					?>
					<img src="imagenes/razon_publica.png">
					<?php
					}	
					if ($mostrar['archivo']=="rcn") {
						// code...
					?>
					<img src="imagenes/rcn.png">
					<?php
					}	
					if ($mostrar['archivo']=="radio_nacional") {
						// code...
					?>
					<img src="imagenes/radio_nacional.png">
					<?php
					}	
					if ($mostrar['archivo']=="silla_vacia") {
						// code...
					?>
					<img src="imagenes/silla_vacia.png">
					<?php 
					}

					if ($mostrar['archivo']=="redmas") {
						// code...
					?>
					<img src="imagenes/redmas.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="ricardo_galan") {
						// code...
					?>
					<img src="imagenes/ricardo_galan.PNG">
					<?php 
					}
					if ($mostrar['archivo']=="semana") {
						// code...
					?>
					<img src="imagenes/semana.png">
					<?php 
					}

					if ($mostrar['archivo']=="tiempo") {
						// code...
					?>
					<img src="imagenes/tiempo.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="videos") {
						// code...
					?>
					<img src="imagenes/videos_al_natural.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="cambio_radical") {
						// code...
					?>
					<img src="imagenes/cambio_radical.jpg">
					<?php 
					}
					if ($mostrar['archivo']=="wradio") {
						// code...
					?>
					<img src="imagenes/wradio.jpg">
					<?php 
					}?>
				</div>			
			</div>
			<div class="iframe" id="<?php echo $mostrar['id'].'n' ; ?>">
				<div class="iframe_cerrar">
					<h2 id="<?php echo $mostrar['id'].'cn';?>">CERRAR</h2>
				</div>				
				<iframe src="<?php echo $mostrar['noticia'] ?>" width="80%" height="500px"></iframe>
			</div>
			<script>
		
				var ley =document.getElementById("<?php echo $mostrar['id']; ?>");
				var imagen =document.getElementById("<?php echo $mostrar['id'].'i'; ?>");
				    contador = 0;
				   

				imagen.addEventListener('click', noticia<?php echo $mostrar['id']; ?>);
				
				function noticia<?php echo $mostrar['id']; ?>(){
					var noticia = document.getElementById('<?php echo $mostrar['id'].'n'; ?>');
					if (contador ==0) {
						noticia.style.display = 'block';
						contador = 1;
					}
					else { noticia.style.display = 'none';
						contador = 0;
						}
					var ocultar_noticia = document.getElementById('<?php echo $mostrar['id'].'cn';?>');
						ocultar_noticia.addEventListener('click', cerrar_noticia<?php echo $mostrar['id']?>);
						function cerrar_noticia<?php echo $mostrar['id']?>(){
							noticia.style.display = 'none';
							contador = 0;
						} 
				}
			</script>	
		</div>	
		<?php
		} 
		?>		
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