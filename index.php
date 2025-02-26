<!doctype html>
<html lang="es">

    
<head>
    <title>Pitta Galvan</title> 
    <meta charset="UTF-8">
    <!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
    <link rel=stylesheet href="css/Style.css">
</head>
    
<body>

<!-- CON EL SIGUINTE iNCLUDE SE ADICIONA EL BANNER  -->

<?php include ("header.php"); ?>

<div class="caja">
    <section id="banner">
        <img src="Img/banner.jpg">
            <div class="contenedor">
                <h2>EL MUNDO TE ESTA ESPERANDO</h2>
                <p>¿Cansado de no salir de casa?</p>
                <a href="nosotros.php">Conócenos</a>
            </div>
    </section>
        
</div>
    <section id="blog">
                <h3>Paquetes Vigentes por Temporada</h3>
        <div class="contenedor">
            <article>
                <a href="planes.php?destino=nacional">
                    <div class="blog-img"><img src="Img/Articulo1.jpg">
                    </div>
                    <h4>Colombia Destino Obligado</h4>
                </a>
            </article>
            <article>
                <a href="planes.php?destino=internacional">
                    <div class="blog-img"><img src="Img/Articulo2.jpg">
                    </div>
                    <h4>¿Ya conoces el exterior?</h4>
                </a>
            </article> 
            <article>
                <a href="planes.php?destino=%">
                <div class="blog-img"><img src="Img/Articulo3.jpg">
                </div>
                <h4>¡No todo es sol y Palmeras!</h4>
            </article>
        </div>
    </section>

    <section id="info">
        <h3>Una opinión vale mucho mas que un descuento</h3>
        <div class="contenedor">
            <div class="info-p">
                <img src="Img/info1.jpg">
                <h4>Llega el Otoño y vemos su belleza</h4>
            </div>
            <div class="info-p">
                <img src="Img/info2.jpg">
                <h4>Se tapiza el mundo de amor</h4>
            </div>
            <div class="info-p">
                <img src="Img/info3.jpg">
                <h4>Nos reflejamos en su profundidad</h4>
            </div>
            <div class="info-p">
                <img src="Img/info4.jpg">
                <h4>Bla bla bla bla bla</h4>
            </div>                    
        </div>
    </section>
        
</div>

    <?php include "footer.php"; ?>

</body>
    
</html>