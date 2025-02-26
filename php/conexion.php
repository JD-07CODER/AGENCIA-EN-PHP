<?php 

$servidor= 'localhost';
$base='Pitta_Galvan';
$usuario = 'root';
$contraseña='';

	try{

		$conexion=new PDO('mysql:host='. $servidor . '; dbname='. $base , $usuario, $contraseña);
		// $conexion=new PDO('mysql:host='. $servidor. '; dbname= ' . $BDD, $usuario, $contraseña);
 		
 		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 		$conexion->exec("SET CHARACTER SET UTF8");

 			// echo "Conexion Exitosa <br>";

	}catch (Exception $e){

		die('Error' . $e->getMessage());
		echo "Linea del Arror" . $e->getline();

	}

 ?>