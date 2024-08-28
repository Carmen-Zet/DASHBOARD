<?php

include('db.php');
include('header.php');

$sql ="SELECT * FROM regiones";
$stmt =$conn ->prepare($sql);
$stmt->execute();
$niveles = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<div class="container">
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
    <br>
    <br>
    <h1>REGIONES</h1>
    <a href="add_regiones.php" class="btn btn-primary mb-3">Agregar Nueva Region</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Region</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivel): ?>
            <tr>
                <td><?php echo $nivel['cod_region']; ?></td>
                <td><?php echo $nivel['nombre']; ?></td>
                <td><?php echo $nivel['descripcion']; ?></td>
                <td>
                    <a href="edit_regiones.php?id=<?php echo $nivel['cod_region']; ?>"
                        class="btn btn-warning btn-sm">Modificar</a>
                    <a href="delete_regiones.php?id=<?php echo $nivel['cod_region']; ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

<?php include('footer.php'); ?>