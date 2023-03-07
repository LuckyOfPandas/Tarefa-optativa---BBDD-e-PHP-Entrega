<html>
    <head>
	<title>Nueva Categoria</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
		<?php include_once('header_forms.php'); ?>
	


	<h1>Inserta una nueva categoria</h1>
	<form method="POST" action="../insertaCategoria.php">
	    Id de categoria:<br><br>
	    <input type="text" id="id" name="id" />
	    <br><br>
 
	    Nombre:<br><br>
	    <input type="text" id="nombre" name="nombre" />
	    <br><br>

        Descripción:<br><br>
	    <input type="text" id="descripcion" name="descripcion" />
	    <br><br>
               
            <input type="submit" value="Registrar" />
            <input type="submit" value="Vaciar" />
	</form>

    </body>
    
</html>
