<html>
    <head>
        <title>Creación BBDD</title>
    </head>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <body>
	<?php
		include_once('header_database.php');
	    include 'constants.php';

		echo "<h1>Script que borra táboas e a BBDD</h1>";	    
		echo '<div style="margin-top: 25px; margin: 0 25%;">';		
	    //Conexión coa BBDD
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("Non se puido abrir a conexión");

	    //Se hai conexión lanzo queries de borrado
	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión creada correctamente.<br>";
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.alumnos') or die("Non se puido borrar a táboa alumno");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.notas') or die("Non se puido borrar a táboa notas");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.asignaturas') or die("Non se puido borrar a táboa asignaturas");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.curso') or die("Non se puido borrar a táboa cursos");
			mysqli_query($conector,'DROP DATABASE IF EXISTS '. NOMBRE_BBDD) or die("Non se puido borrar a base de datos");
		}
	echo "Táboas e base de datos eliminadas correctamente.<br>";

	mysqli_close($conector);
	echo '</div>';
	?>
    </body>
</html>
