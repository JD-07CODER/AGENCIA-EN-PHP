<!DOCTYPE html>
<html lang="es">

<head>
	<title>Planes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<link rel=stylesheet href="CSS/Style.css">
	<link rel=stylesheet href="CSS/planes.css">

</head>

<body>
	<section id="planes">
		<div id="info" >
		<h2>Un Plan a la Medida</h2>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<article class="caja">
		
		<?php 
			require("header.php");	
			require("php/conexion.php");

			if (isset($_GET)) {
				// prueba de que paso bn el parametro por 
				 // echo $_GET["destino"]; 
				$tipo = $_GET["destino"];
			}

			$sql="SELECT pl_id, pl_destino, pl_descripcion, pl_precio, pl_tipo, pl_imagen from planes where pl_tipo like ? order by pl_tipo desc";
			
			$resultado_rst=$conexion->prepare($sql);

//---------------------- Imprimimos el H2 de destino--------------
			if ($_GET["destino"] =='nacional'|| $_GET["destino"] =='%') {
					echo "<h2>Destinos Nacionales</h2>";
			}
//---------------------- Imprimimos el H2 de destino--------------

			$resultado_rst->execute(array($tipo));


			while ($registro = $resultado_rst->fetch(PDO::FETCH_ASSOC)) {

				if ($registro["pl_tipo"] == 'nacional') {

		?>
					<div class="plan">
							<div class="adorno">
								<span id="destino" class="destino_div"><?php echo ($registro["pl_destino"]); ?></span><br>
								<span class="descripcion_div"><?php echo ($registro["pl_descripcion"]); ?>.</span><br>
								<span class="precio_div">Desde: $<?php echo ($registro["pl_precio"]); ?></span>
							</div>
							<div class="contenedor_img">
								<img src="img\planes\<?php echo($registro["pl_imagen"]); ?>"><br>
							</div>
					</div>

		<?php 
					}
				}
	?>
	</article>
	<article class="caja" id="caja2">


<?php 
//---------------------- Imprimimos el H2 de destino--------------
			if ($_GET["destino"] =='internacional'|| $_GET["destino"] =='%') {
					echo "<h2>Destinos Internacionales</h2>";
			}
//---------------------- Imprimimos el H2 de destino--------------

				$resultado_rst->execute(array($tipo));

				while ($registro = $resultado_rst->fetch(PDO::FETCH_ASSOC)) {

				if ($registro["pl_tipo"] == 'internacional') {

		?>
					<div class="plan">
							<div class="adorno">
								<span id="destino" class="destino_div"><?php echo ($registro["pl_destino"]); ?></span><br>
								<span class="descripcion_div"><?php echo ($registro["pl_descripcion"]); ?>.</span><br>
								<span class="precio_div">Desde: $<?php echo ($registro["pl_precio"]); ?></span>
							</div>
							<div class="contenedor_img">
								<img src="img\planes\<?php echo($registro["pl_imagen"]); ?>"><br>
							</div>
					</div>

		<?php 
					}
				}		
	?>

	</article>
	<br><br>
<div>Planes Sujetos a Disponibilidad</div>
	</section>
		
	<footer><?php require("footer.php");?></footer>
		
	
</body>

</html>