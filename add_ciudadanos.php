<?php
include('db.php');
include('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO ciudadanos (nombre) VALUES (:nombre)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Ciudadano agregado correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al agregar nivel</div>";
    }
}
?>

<div class="container">
    <h1>Agregar Ciudadanos</h1>
    <form method="POST">
        <div class="form-group">
            <label for="nombre">dpi</label>
            <input type="text" class="form-control" id="dpi" name="dpi" required>
        </div>
        <div class="form-group">
            <label for="nombre">apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="nombre">Direccion</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" required>
        </div>
        <div class="form-group">
            <label for="nombre">Telefono de casa</label>
            <input type="text" class="form-control" id="Telefono de casa" name="Telefono de casa" required>
        </div>
        <div class="form-group">
            <label for="nombre">Telefono movil</label>
            <input type="text" class="form-control" id="Telefono movil" name="Telefono movil" required>
        </div>
        <div class="form-group">
            <label for="nombre">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="nombre">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="Fecha de nacimiento" name="Fecha de nacimiento" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nivel academico</label>
            <input type="text" class="form-control" id="Nivel academico" name="Nivel academico" required>
        </div>
        <div class="form-group">
            <label for="nombre">Municipio</label>
            <input type="text" class="form-control" id="Municipio" name="Municipio" required>
        </div>
        <div class="form-group">
            <label for="nombre">Contraseña</label>
            <input type="text" class="form-control" id="Contraseña" name="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="ciudadanos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('footer.php'); ?>
