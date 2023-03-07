<html>
    <head>
	<title>Resultados</title>
	<link rel="stylesheet" href="./css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	
	<?php include_once('header.php'); ?>
    <?php include './database/conector.php'; ?>

    <body>

	<?php
	echo '<div style="margin-top: 25px; margin: 0 25%;">';

	if ($estado_de_la_conexion == 0){ 	
		echo '<h1 class="center">Datos por categoría</h1></br>';
		include_once('amosar_categoria.php'); 
		include_once('amosar_compañia.php'); 
		include_once('amosar_creadores.php'); 
		include_once('amosar_juegos.php'); 
        include_once('amosar_reviews.php'); 
	}
	else{
		echo "No se pudo conectar a la base de datos para consultar datos";
	}
	echo '</div>';


	 ?>
	<br><br><br><br><br>
    </body>
</html>
