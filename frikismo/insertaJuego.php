    <head>
        <title>Juegos</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Juegos</h1>
	<?php
		include './database/conector.php';
   
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$Fecha_de_salida = $_POST['Fecha_de_salida'];
		$Precio = $_POST['Precio'];
                $Ventas = $_POST['Ventas'];
                $Plataformas = $_POST['Plataformas'];
                $Nombre_de_categoria = $_POST['Nombre_de_categoria'];
                $Nombre_de_compañia = $_POST['Nombre_de_compañia'];
                $Nombre_de_creador = $_POST['Nombre_de_creador'];
                

	    	$insert_juego = "INSERT INTO juegos 
	  		(id, nombre, Fecha_de_salida, Precio, Ventas, Plataformas, Nombre_de_categoria, Nombre_de_compañia, Nombre_de_creador)
			VALUES($id, '$nombre', $Fecha_de_salida, $Precio, $Ventas, '$Plataformas', '$Nombre_de_categoria', '$Nombre_de_compañia', '$Nombre_de_creador');";


	 if ($conector->query($insert_juego) === TRUE) {
                    echo "El juego se añadió correctamente";
                } else {
                   echo "Error: " . $insert_juego . "<br>" . $conector->error;
                    }
	?>
	<div class="center">
            <form action="./forms/insertaJuego.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>