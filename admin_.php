<!doctype html>
<html lang="es">
    
<head>

    <title>Administración de Planes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel=stylesheet href="css/style.css">
    <link rel=stylesheet href="css/Formularios.css">
    <link rel=stylesheet href="css/otros.css">


</head>

<body>
	<?php include("header.php");
	?>
  <section class="cuerpo">

    	<h2 class="form-titulo">Administración de Paquetes</h2>
      <br>
      <form id="form_crud" action="php/envia.php" method="post" enctype="multipart/form-data" class="form-registro">
    	<div class="contenedor-inputs">
    		<label>Destino</label>
    		<input type="text" name="destino_txt" required>
    		<br>

    		<label>Descripción</label>
    		<input type="text" name="descripcion_txt" required>
    		<br>

    		<label>Tipo</label>
    		<select name="tipo_txt">
  			<option value="nacional">nacional</option>
  			<option value="internacional">internacional</option>
  		</select>
  		<br>

    		<label>Precio</label>
    		<input type="text" name="precio_txt" required>
    		<br>

  		<label for="imagen_img">Imagen</label>
    		<input type="file" name="imagen_img" size="20" required>
    		<br>

    		<input class="form-boton" type="submit" name="enviar_btn" value="Enviar" />
    	</div>
    	</form>
      </section>
    <?php require("footer.php"); ?>

</body>

</html>
