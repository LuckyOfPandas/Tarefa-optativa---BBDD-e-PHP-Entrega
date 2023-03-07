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
		echo "<h1>Script que crea BBDD  y tablas</h1>";
		echo '<div style="margin-top: 25px; margin: 0 25%;">';

	    //conexión coa BBDD
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("No se pudo conectar");

	    //Se hai conexión lanzo queries de creación de bases de datos e táboas

	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión existosa. <br>";
			
		//Query para crear la BBDD
	    $createDatabase = "CREATE DATABASE ".NOMBRE_BBDD;

		if (mysqli_query($conector, $createDatabase)) {
		    echo "BBDD ".NOMBRE_BBDD. " creada correctamente"."<br>";
  		    
		} else {
		    echo "No fue posible crear la BBDD. <br>". "Error: " . mysqli_error($conector)."<br><br>";
		}
	        mysqli_select_db($conector, NOMBRE_BBDD);

	    // Compruebo que estou conectado á BBDD 
	    if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a BBDD: " . $row[0] . "<br><br>";
	        mysqli_free_result($result);
	    }

	    // Creo as tablas
		//Tabla categorias primero, para poder después establecer la relación Foreign Key correctamente:
    		$tabla_categorias = "CREATE TABLE IF NOT EXISTS categorias (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    nombre VARCHAR(45) NOT NULL,
                                    descripcion VARCHAR(255),
                                    UNIQUE nombre_categoria (nombre)

                                    );";
		
		if (mysqli_query($conector, $tabla_categorias)) {
		    echo "Tabla <b> categorias </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BBDD.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}
		

		// Táboa compañias
    		$tabla_compañias = "CREATE TABLE IF NOT EXISTS compañias (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    nombre VARCHAR(45) NOT NULL,
                                    Fecha_de_fundacion DATE NOT NULL,
                                    Networth DECIMAL NOT NULL,
                                    Director VARCHAR(45) NOT NULL,
                                    UNIQUE nombre_compañia (nombre)
                                   );";
		
		if (mysqli_query($conector, $tabla_compañias)) {
		    echo "Tabla <b> compañias </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BBDD.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

		// Táboa para as creadores de contenido
    		$tabla_creadores = "CREATE TABLE IF NOT EXISTS creadores_de_contenido (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    nombre VARCHAR(45) NOT NULL,
                                    nickname VARCHAR(45) NOT NULL,
                                    pais_de_origen Varchar(20) NOT NULL,
                                    pais_de_residencia Varchar(20) NOT NULL,
                                    plataformas Varchar(20) NOT NULL,
                                    Enlace Varchar(100),
                                    Nazi BOOLEAN,
                                    Funado BOOLEAN


                                  );";
		
		if (mysqli_query($conector, $tabla_creadores)) {
		    echo "Tabla <b> creadores </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BBDD.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}


		// Tabla para las juegos
                $tabla_juegos   = "CREATE TABLE IF NOT EXISTS juegos (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    nombre VARCHAR(45) NOT NULL,
                                    Fecha_de_salida DATE NOT NULL,
                                    Precio Decimal(8,2) NOT NULL,
                                    Ventas INT NOT NULL,
                                    Plataformas VARCHAR(120) NOT NULL,
                                    Nombre_de_categoria VARCHAR(45) NOT NULL,
                                    Nombre_de_compañia VARCHAR(45) Not NULL,
                                    Nombre_de_creador VARCHAR(45),
                                    UNIQUE nombre_juego (nombre),

                                    CONSTRAINT fk_categoria
                                    FOREIGN KEY(Nombre_de_categoria)
                                    REFERENCES categorias(nombre),

                                    CONSTRAINT fk_compañia
                                    FOREIGN KEY(Nombre_de_compañia)
                                    REFERENCES compañias(nombre)


                                    );";
		
		if (mysqli_query($conector, $tabla_juegos)) {
		    echo "Tabla <b> juegos </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la táboa o ya existe en la BBDD.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

                
                // Tabla para las reviews
    		$tabla_reviews = "CREATE TABLE IF NOT EXISTS reviews (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    Periodista VARCHAR(45) NOT NULL,
                                    Pagina VARCHAR(45) NOT NULL,
                                    Nombre_juego VARCHAR(45) NOT NULL,
                                    Nombre_compañia VARCHAR(45) NOT NULL,
                                    Nombre_categoria VARCHAR(45) NOT NULL,
                                    Valoracion VARCHAR(3) NOT NULL,
                                    Comentarios_Adicionales Varchar(255),

                                    CONSTRAINT fk_juego_rev
                                    FOREIGN KEY(nombre_juego) 
                                      REFERENCES juegos (nombre),

                                    CONSTRAINT fk_compañia_rev
                                    FOREIGN KEY(nombre_compañia) 
                                      REFERENCES compañias (nombre),

                                    CONSTRAINT fk_categoria_rev
                                    FOREIGN KEY(nombre_categoria) 
                                      REFERENCES categorias (nombre)
                                  );";
		
		if (mysqli_query($conector, $tabla_reviews)) {
		    echo "Tabla <b> reviews </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la táboa o ya existe en la BBDD.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

                
                

	} else {
	     echo "Ha fallado la conexión con MySQL: " .  mysqli_connect_error();
	     exit();	
	}

	mysqli_close($conector);
	echo '</div>';
	?>
    </body>
</html>
