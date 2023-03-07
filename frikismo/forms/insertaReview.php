<html>
    <head>
	<title>Nueva review</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
	<?php include_once('header_forms.php'); ?>

	<h1>Formulario</h1>
	
	<form method="POST" action="../insertaReview.php">

            ID Review:<br> 
	    <input type="text" id="id" name="id"/>
	    <br><br>

            Periodista:<br> 
	    <input type="text" id="periodista" name="periodista"/>
	    <br><br>

            Pagina<br> 
	    <input type="text" id="pagina" name="pagina"/>
	    <br><br>

            Nombre del juego:<br> 
	    <input type="text" id="nombre_juego" name="nombre_juego"/>
	    <br><br>

		   Nombre de la compañía:<br> 
	    <input type="text" id="nombre_compañia" name="nombre_compañia"/>
	    <br><br>
		
		   Nombre de la categoria :<br> 
	    <input type="text" id="nombre_categoria" name="nombre_categoria"/>
	    <br><br>
		
		   Valoración:<br> 
	    <input type="text" id="valoracion" name="valoracion"/>
	    <br><br>
		
		   Comentarios adicionales:<br> 
	    <input type="text" id="comentarios_adicionales" name="comentarios_adicionales"/>
	    <br><br>
		
		
		<input type="submit" value="Registrar" />
		<input type="submit" value="Vaciar" />
	</form>


    </body>
    
</html>