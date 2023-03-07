<html>
    <head>
	<title>Nuevo juego</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
	<?php include_once('header_forms.php'); ?>

	<h1>Nuevo juego</h1>	
	
        <form method="POST" action="../insertaJuego.php">

            Id:<br> 
	    <input type="text" id="id" name="id"/>
	    <br><br>

            Nombre:<br> 
	    <input type="text" id="nombre" name="nombre"/>
	    <br><br>

            Fecha de salida:<br> 
	    <input type="text" id="Fecha_de_salida" name="Fecha_de_salida"/>
	    <br><br>

            Precio:<br> 
	    <input type="text" id="Precio" name="Precio"/>
	    <br><br>
            
            Ventas:<br> 
	    <input type="text" id="Ventas" name="Ventas"/>
	    <br><br>
            
            Plataformas:<br> 
	    <input type="text" id="Plataformas" name="Plataformas"/>
	    <br><br>
            
            Nombre de categoria:<br> 
	    <input type="text" id="Nombre_de_categoria" name="Nombre_de_categoria"/>
	    <br><br>
            
            Nombre de compañia:<br> 
	    <input type="text" id="Nombre_de_compañia" name="Nombre_de_compañia"/>
	    <br><br>
            
            Nombrede creador:<br> 
	    <input type="text" id="Nombre_de_creador" name="Nombre_de_creador"/>
	    <br><br>
            

		<input type="submit" value="Registrar" />
		<input type="submit" value="Vaciar" />
	</form>

    </body>
    
</html>
