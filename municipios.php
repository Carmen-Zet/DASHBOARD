<?php

include('db.php');
include('header.php');

$sql ="SELECT * FROM municipios";
$stmt =$conn ->prepare($sql);
$stmt->execute();
$niveles = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<div class="container">
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
    <br>
    <br>
    <h1>MUNICIPIOS</h1>
    <a href="add_municipio.php" class="btn btn-primary mb-3">Agregar Nuevo Municipio</a>
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
                <td><?php echo $nivel['cod_muni']; ?></td>
                <td><?php echo $nivel['nombre_municipio']; ?></td>
                <td><?php echo $nivel['cod_depto']; ?></td>
                <td>
                    <a href="edit_municipio.php?id=<?php echo $nivel['cod_muni']; ?>"
                        class="btn btn-warning btn-sm">Modificar</a>
                    <a href="delete_municipio.php?id=<?php echo $nivel['cod_muni']; ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

<?php include('footer.php'); ?>