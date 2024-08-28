<?php
include('db.php');
include('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO regiones (nombre) VALUES (:nombre)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Region agregado correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al agregar nivel</div>";
    }
}
?>

<div class="container">
    <h1>Agregar Nueva Region</h1>
    <form method="POST">
        <div class="form-group">
            <label for="nombre">region</label>
            <input type="text" class="form-control" id="region" name="region" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="nombre">descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="regiones.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('footer.php'); ?>
