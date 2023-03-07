<html>
    <head>
        <title>Nueva Compañia</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado da solicitude</h1>
	<?php
		include './database/conector.php';

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
                $networth = $_POST['networth'];
                $director = $_POST['director'];

	    	$insert_compañia = "INSERT INTO compañias 
	  		(id, nombre, Fecha_de_fundacion, Networth, Director)
			VALUES($id, '$nombre', $fecha, $networth, '$director');";

		 if ($conector->query($insert_compañia) === TRUE) {
                    echo "La compañia se creo exitosamente";
                } else {
                   echo "Error: " . $insert_compañia . "<br>" . $conector->error;
                    }
	?>
	    
	?>
	<div class="center">
            <form action="./forms/insertaCompañia.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>
