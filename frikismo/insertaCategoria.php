   <?php
    include './database/conector.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];


    $stmt = $conector->prepare("INSERT INTO categorias (id, nombre, descripcion) VALUES (?, ?, ?)");

    $stmt->bind_param("iss", $id, $nombre, $descripcion);

    if ($stmt->execute()) {
        echo "La categoria se creó exitosamente";
    } else {
        echo "Error: " . $stmt->error;
    }
?>


