<head>
        <title>Nueva review</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Reviews de los juegos</h1>
	<?php
		include './database/conector.php';

		$id = $_POST['id'];
		$periodista = $_POST['periodista'];
		$pagina = $_POST['pagina'];
		$nombre_juego = $_POST['nombre_juego'];
		$nombre_compañia = $_POST['nombre_compañia'];
		$nombre_categoria = $_POST['nombre_categoria'];
		$valoracion = $_POST['valoracion'];
		$comentarios_adicionales = $_POST['comentarios_adicionales'];
		

	    	$insert_review = "INSERT INTO reviews
	  		(id, periodista, pagina, nombre_juego, nombre_compañia, nombre_categoria, valoracion, comentarios_adicionales)
			VALUES($id, '$periodista', '$pagina', '$nombre_juego', '$nombre_compañia', '$nombre_categoria', '$valoracion', '$comentarios_adicionales');";


	 if ($conector->query($insert_review) === TRUE) {
                    echo "La review se creo exitosamente";
                } else {
                   echo "Error: " . $insert_review . "<br>" . $conector->error;
                    }
	?>
	    
	?>
	<div class="center">
            <form action="./forms/insertaReview.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>