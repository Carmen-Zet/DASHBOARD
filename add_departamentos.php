<?php
include('db.php');
include('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO departamentos (nombre_depto) VALUES (:nombre)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Departamento agregado correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al agregar Departameto</div>";
    }
}   
?>

<div class="container">
    <h1>Agregar Departamento</h1>
    <form method="POST">
        <div class="form-group">
            <label for="nombre">codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="nombre">Region</label>
            <input type="text" class="form-control" id="Region" name="Region" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="departamentos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('footer.php'); ?>
