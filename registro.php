<!doctype html>
<html lang="es">
    
    <head>
        <title>Pitta Galvan Registro</title>
        <meta charset="utf">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
        
        <link rel=stylesheet href="css/Formularios.css">
        <link rel=stylesheet href="css/otros.css">

        <script src="JS/validar.js"></script>
    </head>

<body>

<?php include("header.php"); ?>

    <section class="cuerpo">
            <h1>Formulario de Registro</h1>
    
    <form action="registrar.php" method="post" class="form-registro" onsubmit="return validar();">
    	<h2 class="form-titulo">Crea una Cuenta</h2>
    	<div class="contenedor-inputs">
    		<input type="text" id="documento" name="documento" placeholder="Documento" required>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
    		<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
    		<input type="email" id="correo" name="correo" placeholder="Correo" required>
    		<input type="password" id="clave" name="clave" placeholder="Contraseña" required>
    		<input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
    		<input type="text" id="direccion" name="direccion" placeholder="Direccion" required>
    		
    	</div>
        <input class="form-boton" type="submit" value="Registrar">
            <p class="form-link"><a href="login.php">Ya tienes una cuenta?</a></p>
    </form>
    </section>

    <?php require("footer.php"); ?>

</body>
    
</html>