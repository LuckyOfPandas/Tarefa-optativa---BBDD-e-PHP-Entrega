<html>
   <head>
        <title>Creadores</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Nuevo creador</h1>
	<?php
		include './database/conector.php';

		// Recollo os datos enviados a través do formulario    
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
                $nickname = $_POST['nickname'];
		$pais_de_origen = $_POST['pais_de_origen'];
                $pais_de_residencia = $_POST['pais_de_residencia'];
                $plataformas = $_POST['plataformas'];
                $enlace = $_POST['enlace'];
                $nazi = $_POST['nazi'];
                $funado = $_POST['funado'];
                
                
                

		// Inserto os datos na BBDD
	    	$insert_creador = "INSERT INTO creadores_de_contenido 
	  		(id, nombre, nickname, pais_de_origen, pais_de_residencia, plataformas, Enlace, Nazi, Funado)
			VALUES($id, '$nombre', '$nickname', '$pais_de_origen', '$pais_de_residencia', '$plataformas', '$enlace', $nazi, $funado);";

	 if ($conector->query($insert_creador) === TRUE) {
                    echo "El creador se creo exitosamente";
                } else {
                   echo "Error: " . $insert_creador . "<br>" . $conector->error;
                    }
	?>
	<div class="center">
            <form action="./forms/insertaCreador.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>
