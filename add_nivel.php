<?php
include('db.php');
include('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO nivelesacademicos (nombre) VALUES (:nombre)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Nivel agregado correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al agregar nivel</div>";
    }
}
?>

<div class="container">
    <h1>Agregar Nuevo Nivel</h1>
    <form method="POST">
        <div class="form-group">
            <label for="nombre">id</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="nombre">Acciones</label>
            <input type="text" class="form-control" id="Acciones" name="Acciones" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="niveles.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('footer.php'); ?>
