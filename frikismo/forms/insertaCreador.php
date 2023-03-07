<html>
    <head>
	<title>Nuevo creador</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
	
    <body>
	<?php include_once('header_forms.php'); ?>

	<h1>Nuevo Creador</h1>

        <form method="POST" action="../insertaCreador.php">

            Código del creador:<br> 
	    <input type="text" id="id" name="id"/>
	    <br><br>

            Nombre del creador:<br> 
	    <input type="text" id="nombre" name="nombre"/>
	    <br><br>

            Nickname:<br> 
	    <input type="text" id="nickname" name="nickname"/>
	    <br><br>
            
            
            Pais de origen:<br> 
	    <input type="text" id="pais_de_origen" name="pais_de_origen"/>
	    <br><br>
            
            
            Pais de residencia:<br> 
	    <input type="text" id="pais_de_residencia" name="pais_de_residencia"/>
	    <br><br>
            
            
            Plataformas:<br> 
	    <input type="text" id="plataformas" name="plataformas"/>
	    <br><br>
            
            Enlace:<br> 
	    <input type="text" id="enlace" name="enlace"/>
	    <br><br>
            
            
            Nazi:<br> 
	    <input type="text" id="nazi" name="nazi"/>
	    <br><br>
            
            
            Funado:<br> 
	    <input type="text" id="funado" name="funado"/>
	    <br><br>

		<input type="submit" value="Registrar" />
		<input type="submit" value="Vaciar" />

	</form>
	


    </body>
    
</html>
