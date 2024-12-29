<?php
include_once "db.php";
$conectar = coneet();
$consulta_deltos = $conectar->query("SELECT * from delitos");
$contar_delitos = $consulta_deltos->num_rows;

$consulta_nepotismo = $conectar->query("SELECT * from nepotismo ");
$contar_nepotismo = $consulta_nepotismo->num_rows;
$consulta_despilfarros = $conectar->query("SELECT * from despilfarros ");
$contar_despilfarros = $consulta_despilfarros->num_rows;
$consulta_escandalo = $conectar->query("SELECT * from escandalo ");
$contar_escandalo = $consulta_escandalo->num_rows;

$consulta_paz_total = $conectar->query("SELECT * from paz_total ");
$contar_paz_total = $consulta_paz_total->num_rows;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/logo_web.png" type="image/x-icon">
	<title>Petropedia</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
		<div class="int"></div>
 		<div class="header">
 			<div class="head1"></div>
 			<div class="head2"><img src="imagenes/logo.png"></div>
 			<div class="head3"><a href="mailto:contacto@petropedia.com"><img src="imagenes/imgcontacto.png" id="cont"><img src="imagenes/contacto.png" id="conta"></a></div>
 		</div>
 		<div class="header1">
 			<h3>BIENVENIDOS A PETROPEDIA, LA ENCICLOPEDIA QUE TODO COLOMBIANO DEBE CONOCER</h3>
			<!-- <P id="header_sub"> PARA QUE NO NOS CAMBIEN LA HISTORIA</P> -->
		</div>
	</header>

	<main>		
		<div class="carrusel">
			<div class="carru_1"><a href="delitos.php"><img src="imagenes/delitos_flyer.png
			"></a>
				<div class="contar">
					<div class="hasta_ahora">
						<h2>Hasta ahora van</h2>
					</div>
					<div class="contador">
						<h2><?php echo $contar_delitos; ?></h2>
					</div>
				</div> 
			</div>
			<div class="carru_1"><a href="nepotismo.php"><img src="imagenes/nepotismo_flyer.png
			"></a>
				<div class="contar">
					<div class="hasta_ahora">
						<h2>Hasta ahora van</h2>
					</div>
					<div class="contador">
						<h2><?php echo $contar_nepotismo; ?></h2>
					</div>
				</div>  
			</div> 
			<div class="carru_1"><a href="despilfarros.php"><img src="imagenes/despilfarros_flyer.png
			"></a> 
				<div class="contar">
					<div class="hasta_ahora">
						<h2>Hasta ahora van</h2>
					</div>
					<div class="contador">
						<h2><?php echo $contar_despilfarros; ?></h2>
					</div>
				</div> 
			</div>
			<div class="carru_1"><a href="escandalos.php"><img src="imagenes/escandalos_flyer.png
			"></a> 
				<div class="contar">
					<div class="hasta_ahora">
						<h2>Hasta ahora van</h2>
					</div>
					<div class="contador">
						<h2><?php echo $contar_escandalo; ?></h2>
					</div>
				</div> 
			</div>
			<div class="carru_1"><a href="el_cambio.php"><img src="imagenes/el_cambio.png
			"></a> 
				<div class="contar">
					<div class="hasta_ahora">
						<h2>Hasta ahora van</h2>
					</div>
					<div class="contador">
						<h2><?php echo $contar_paz_total; ?></h2>
					</div>
				</div>
			</div>			
			
		</div>
		<div class="parrafo">
			<h4>PetroPedia es un portal que ofrece hechos notorios y sus fuentes, relacionados
			con el actual gobierno de Colombia 2022-2026. Se ha creado con el fin de
			recopilar la mayor información posible, al alcance de todos en un solo lugar, para que 
			<b style=" font-family:italic; font-size: 2vw;">no nos cambien la historia original.</b></h4>
		</div>
	<!-- 	<div class="slider">
			<ul>
				<li><h2>"NOS DOMINAN MÁS POR LA IGNORANCIA QUE POR LA FUERZA"</h2><br> 
					<div class="slidefran">
						<h2>"UN PUEBLO IGNORANTE ES INSTRUMENTO CIEGO DE SU PROPIA DESTRUCCIÓN".</h2>
					</div>
					
				</li>
				<li><h2>Cuándo la ética se pierde de vista, el camino se corrompe. </h2><br> 
					<div class="slidefran">
						<h2>"El poder corrompe, el poder absoluto corrompe absolutamente": John Emerich.</h2>
					</div><br><br><br>
					<div class="slidefran2">
						<h2>PRESUNTOS DELITOS Y FALTAS A LA CONSTITUCION</h2>
					</div>
				</li>
				<li><h2>Usar el poder para beneficios de los suyos sin pensar en el daño que se hace al país. </h2><br> 
					<div class="slidefran">
						<h2>Lo que influye en el correcto desarrollo de una sociedad es premiar el talento y no las amistades.</h2>
					</div><br><br><br>
					<div class="slidefran2">
						<h2>NEPOTISMO Y TRAFICO DE INFLUENCIAS</h2>
					</div>
				</li>
				<li><h2>Cuando los recursos son de otros y no importa la relación costo/beneficio, eso es DESPILFARRO.</h2> 
					<div class="slidefran">
						<h2>Justificar necesidades inventadas lleva al MAL-GASTAR de los dineros de los ciudadanos.</h2>
					</div><br><br><br>
					<div class="slidefran2">
						<h2>DESPILFARROS </h2>
					</div>
				</li>
				<li><h2>Aunque se niegue mil veces, la verdad siempre sale a la luz.</h2><br> 
					<div class="slidefran">
						<h2>Si no quieres que se sepa, no lo hagas.</h2>
					</div><br><br>
					<div class="slidefran2">
						<h2>ESCÁNDALOS</h2>
					</div>
				</li>
				<li><h2>Lo que no nos cuesta, hagámoslo fiesta.</h2><br> 
					<div class="slidefran">
						<h2>Y que afecte a otros, ¡NO INTERESA!</h2>
					</div><br><br><br>
					<div class="slidefran2">
						<h2>DETRIMENTO PATRIMONIAL</h2>
					</div>
				</li>
			</ul>
		</div> -->

		<div class="reaccion">
			<div class="reaccion1">
				<div class="reaccion1_1">
					<h2>LA REACCIÓN CIUDADANA</h2>
					<h2> "Es màs escandaloso el silencio de los buenos que la voz de los malos". Victor Hugo</h2>
				</div>
				<div class="reaccion1_2">
					<p>Los colombianos han optado por las calles para generar presión en contra de las nefastas reformas propuestas por el gobierno Petro, la mala administración, la mediocre ejecución del presupuesto público y la entrega del país al terrorismo. Así ha sido el panorama en las calles de las principales ciudades del país.</p>
				</div>
			</div>
			<div class="reaccion2">
				<!-- <img src="imagenes/reaccion.png"> -->
				<div class="ruleta">
			<div class="ruleta1">			
				<span style="--i:1;"><img src="imagenes/medellin.png"> </span>
				<span style="--i:2;"><img src="imagenes/bogota.png"> </span>
				<span style="--i:3;"><img src="imagenes/bucaramanga1.png"> </span>
				<span style="--i:4;"><img src="imagenes/cali.png"> </span>
				<span style="--i:5;"><img src="imagenes/barranquilla.png"> </span>
				<span style="--i:6;"><img src="imagenes/manizales.png"> </span>
			</div>
			<br>
			
		</div>
			</div>
		</div>
		<div class="descargo">
			<div class="descargoizq">
				<!-- <p>La información recopilada es propiedad
				de terceros y que se utiliza solo con fines
				informativos y de interés público ya que
				se trata de información pública. No es
				información, ni opinión propia, se trata de
				recopilar información pública respetando los
				derechos de quienes la suministran o el
				autor de la misma, de ahí el redireccionamiento</p> -->
				<p>La información recopilada es propiedad de terceros y se utiliza solo con fines informativos y de interés general, ya que se trata de información pública, respetando los derechos de quienes la suministran o del autor de la misma; el redireccionamiento al enlace correspondiente da cuenta de ello. Las fuentes informativas son las únicas responsables de dicha información u opinión. Este portal no contiene información ni opinión propia, y recopila información pública únicamente. No se violan los derechos de habeas data ni de protección de datos amparados en los Artículos 15 y 20 de la Constitución Política de Colombia,y en la ley 1581 de 2012 de Protección de </p>
			</div>
			<div class="descargoder">
				<!-- <p>al link que da cuenta de ello y son
				ellos los únicos responsables de dicha
				información u opinión. No se violan los
				derechos de habeas data ni de protección
				de datos amparados en los Arts 15 y 20
				nuestra Constitucion Política y en la ley
				1581 de 2012 de protección de datos
				personales</p> -->
				<p>Datos Personales. En virtud de la legislación colombiana, Petropedia no asume responsabilidad alguna por la exactitud, integridad o actualidad del contenido presentado en este blog. Cualquier información proporcionada tiene un propósito puramente informativo y no constituye asesoramiento legal, financiero o profesional. Los usuarios son responsables de verificar la veracidad y pertinencia de la información antes de tomar decisiones basadas en ella. Petropedia no se hace responsable de cualquier daño o perjuicio que pueda surgir del uso o la interpretación de la información proporcionada en este blog.</p>
			</div>
		</div>
		<div class="dominan">
			<img src="imagenes/dominan.png">
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