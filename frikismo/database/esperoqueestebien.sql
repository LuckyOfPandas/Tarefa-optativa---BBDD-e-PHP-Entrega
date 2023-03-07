USE jueguitos;
CREATE TABLE IF NOT EXISTS categorias (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(45) NOT NULL,
  descripcion VARCHAR(255)

);

CREATE TABLE IF NOT EXISTS compañias (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(45) NOT NULL,
  Fecha_de_fundacion DATE NOT NULL,
  Networth DECIMAL NOT NULL,
  Director VARCHAR(45) NOT NULL
 );


CREATE TABLE IF NOT EXISTS creadores_de_contenido (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(45) NOT NULL,
  nickname VARCHAR(45) NOT NULL,
  pais_de_origen Varchar(20) NOT NULL,
  pais_de_residencia Varchar(20) NOT NULL,
  plataformas Varchar(20) NOT NULL,
  Enlace Varchar(100),
  Nazi BOOLEAN,
  Funado BOOLEAN


);

CREATE TABLE IF NOT EXISTS juegos (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(45) NOT NULL,
  Fecha_de_salida DATE NOT NULL,
  Precio Decimal(8,2) NOT NULL,
  Ventas INT NOT NULL,
  Premios VARCHAR(300),
  Plataformas VARCHAR(120) NOT NULL,
  Nombre_de_categoria VARCHAR(45) NOT NULL,
  Nombre_de_compañia VARCHAR(45) Not NULL,
  Nombre_de_creador VARCHAR(45),

  CONSTRAINT fk_categoria
  FOREIGN KEY(Nombre_de_categoria)
    REFERENCES categorias(Nombre),

  CONSTRAINT fk_compañia
  FOREIGN KEY(Nombre_de_compañia)
    REFERENCES compañias(Nombre)
  
  
);

CREATE TABLE IF NOT EXISTS reviews (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Periodista VARCHAR(45) NOT NULL,
  Pagina VARCHAR(45) NOT NULL,
  Nombre_juego VARCHAR(45) NOT NULL,
  Nombre_compañia VARCHAR(45) NOT NULL,
  Nombre_categoria VARCHAR(45) NOT NULL,
  Valoracion VARCHAR(3) NOT NULL,
  Comentarios Adicionales Varchar(255),
  CONSTRAINT fk_juego_rev
  FOREIGN KEY(Nombre_juego) 
    REFERENCES juegos(Nombre),
  CONSTRAINT fk_compañia_rev
  FOREIGN KEY(Nombre_compañia) 
    REFERENCES compañias(Nombre),
  CONSTRAINT fk_categoria_rev
  FOREIGN KEY(Nombre_categoría) 
    REFERENCES categorias(Nombre)
);
