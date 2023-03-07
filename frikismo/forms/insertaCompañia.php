<html>
    <head>
	<title>Nueva compañia</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
	<?php include_once('header_forms.php'); ?>

	<h1>Nueva compañia</h1>
	
        <form method="POST" action="../insertaCompañia.php">

            Compañia:<br> 
	    <input type="text" id="id" name="id"/>
	    <br><br>

            Nombre compañia:<br> 
	    <input type="text" id="nombre" name="nombre"/>
	    <br><br>

            Fecha de creacion:<br> 
	    <input type="text" id="fecha" name="fecha"/>
	    <br><br>
             
             Networth:<br> 
	    <input type="text" id="networth" name="networth"/>
            <br><br>
            
            Director de la compañia:<br> 
	    <input type="text" id="director" name="director"/>
	    <br><br>

		<input type="submit" value="Registrar" />
		<input type="submit" value="Limpiar" />

	</form>



    </body>
    
</html>
