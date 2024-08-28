<?php

include('db.php');
include('header.php');

$sql ="SELECT * FROM nivelesacademicos";
$stmt =$conn ->prepare($sql);
$stmt->execute();
$niveles = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<div class="container">
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
    <br>
    <br>
    <h1>Niveles Académicos</h1>
    <a href="add_nivel.php" class="btn btn-primary mb-3">Agregar Nuevo Nivel</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivel): ?>
            <tr>
                <td><?php echo $nivel['cod_nivel_acad']; ?></td>
                <td><?php echo $nivel['nombre']; ?></td>
                <td><?php echo $nivel['descripcion']; ?></td>
                <td>
                    <a href="edit_nivel.php?id=<?php echo $nivel['cod_nivel_acad']; ?>"
                        class="btn btn-warning btn-sm">Modificar</a>
                    <a href="delete_nivel.php?id=<?php echo $nivel['cod_nivel_acad']; ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
</div>

<?php include('footer.php'); ?>