<?php 

require("conexion.php");

//guardamos la imagen en el servidor
	if (isset($_FILES)) {
		
	$nombre_imagen=$_FILES["imagen_img"]["name"];
	$tipo_imagen=$_FILES["imagen_img"]["type"];
	$tamano_imagen=$_FILES["imagen_img"]["size"];

	$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/Agencia/Img/planes/';

//movemos la img del directorio temporal al escogido

	if ($tipo_imagen == 'image/jpeg' || $tipo_imagen == 'image/jpg' || $tipo_imagen == 'image/png') {
		// if ($tamano_imagen >) {
			move_uploaded_file($_FILES['imagen_img']['tmp_name'],$carpeta_destino . $nombre_imagen);
			// echo "<br>" . $nombre_imagen . "<br>";
		// }
	}
}


	if(isset($_POST)){
		/* echo "<br>".
			$_POST["destino_txt"] . "<br>". 
			$_POST["descripcion_txt"] .  "<br>" . 
			$_POST["tipo_txt"] .  "<br>" .  "$" .
			$_POST["precio_txt"] .  "<br>";
			$nombre_imagen; */


	$sql="INSERT INTO Planes (pl_destino, pl_descripcion, pl_tipo, pl_precio, pl_imagen) VALUES ('" . $_POST["destino_txt"] . "', '" . $_POST["descripcion_txt"] .  "', '" .  $_POST["tipo_txt"] .  "', '" . $_POST["precio_txt"] . "', '" . $nombre_imagen . "')";
		
	// $sql="INSERT INTO Planes (pl_destino, pl_descripcion, pl_tipo, pl_precio, pl_imagen) VALUES ('destino', 'descripcion', 'tipo_txt', 123456, 'nombre_imagen')";
	
		$resultado_rst=$conexion->prepare($sql);
		
		$resultado_rst->execute();

		
	}

	header('location: http://localhost/agencia/admin.php');