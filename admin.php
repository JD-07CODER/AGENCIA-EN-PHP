<!doctype html>
<html lang="es">
    
<head>

    <title>Administración de Planes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel=stylesheet href="css/style.css">
    <link rel=stylesheet href="css/Formularios.css">
    <link rel=stylesheet href="css/otros.css">
    <link rel=stylesheet href="css/tablas.css">


</head>

<body>
	<?php include("header.php");
	?>
  <section class="cuerpo">

    	<h2 class="form-titulo">Administración de Paquetes</h2>
      <br>
      <form id="form_crud" action="php/envia.php" method="post" enctype="multipart/form-data" class="form-registro">
    	<div class="contenedor-inputs">
    		<!-- <label>Destino</label> -->
    		<input class="input_txt" type="text" name="destino_txt" placeholder="Destino" required>
    		<br>

    		<!-- <label>Descripción</label> -->
    		<input class="input_txt" type="text" name="descripcion_txt" placeholder="Descripción" required>
    		<br>

    		<label>Tipo</label>
    		<select name="tipo_txt">
  			<option value="nacional">Nacional</option>
  			<option value="internacional">Internacional</option>
  		</select>
  		<br>

    		<!-- <label>Precio</label> -->
    		<input class="input_txt" type="text" name="precio_txt" placeholder="Costo" required>
    		<br>

  		<label for="imagen_img">Imagen</label>
    		<input type="file" name="imagen_img" size="20" required>
    		<br>

    		<input class="form-boton" type="submit" name="enviar_btn" value="Enviar" />
        
    	</div>
    	</form>
      </section>

<article id="Tabla_Planes">
           <table class="tabla">
            <thead>
              <tr class="titulos">
                <th>Destino</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Imagen</th>
              </tr>
            </thead>


<!-- ----------------------------------------- visualizacion de planes existentes ----------------------------------------------- -->
<?php 
      require("php\conexion.php");

      $sql="SELECT pl_id, pl_destino, pl_descripcion, pl_precio, pl_tipo, pl_imagen from planes order by pl_tipo desc";
      
      $resultado_rst=$conexion->prepare($sql);

      $resultado_rst->execute(array());

      while ($registro = $resultado_rst->fetch(PDO::FETCH_ASSOC)) {

        echo '<tr class="fila"> 
                  <td>'.$registro["pl_destino"].'</td>
                  <td>'.$registro["pl_descripcion"].'</td>
                  <td>'.$registro["pl_precio"].'</td>
              </tr>';

        }
  ?>
          </table>
<!-- ----------------------------------------- visualizacion de planes existentes ----------------------------------------------- -->
</article>

    <?php require("footer.php"); ?>

</body>


</html>
