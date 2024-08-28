<?php


include('db.php');
include('header.php');

$sql ="SELECT * FROM departamentos";
$stmt =$conn ->prepare($sql);
$stmt->execute();
$niveles = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<div class="container">
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
    <br>
    <br>
    <h1>DEPARTAMENTOS</h1>

    <a href="add_departamentos.php" class="btn btn-primary mb-3">Agregar Nuevo Departamento</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>region</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivel): ?>
            <tr>
                <td><?php echo $nivel['cod_depto']; ?></td>
                <td><?php echo $nivel['nombre_depto']; ?></td>
                <td><?php echo $nivel['cod_region']; ?></td>
                <td>
                    <a href="edit_departamentos.php?id=<?php echo $nivel['cod_depto']; ?>"
                        class="btn btn-warning btn-sm">Modificar</a>
                    <a href="delete_departamentos.php?id=<?php echo $nivel['cod_depto']; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

<?php include('footer.php'); ?>