<?php

include('db.php');
include('header.php');

$sql ="SELECT * FROM ciudadanos";
$stmt =$conn ->prepare($sql);
$stmt->execute();
$niveles = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<div class="container">
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
    <br>
    <br>
    <h1>CIUDADANOS</h1>
    <a href="add_ciudadanos.php" class="btn btn-primary mb-3">Agregar Nuevo Ciudadano</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono Casa</th>
                <th>Telefono Movil</th>
                <th>email</th>
                <th>Fecha nacimiento</th>
                <th>Nivel academico</th>
                <th>Municipio</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivel): ?>
            <tr>
                <td><?php echo $nivel['dpi']; ?></td>
                <td><?php echo $nivel['apellido']; ?></td>
                <td><?php echo $nivel['nombre']; ?></td>
                <td><?php echo $nivel['direccion']; ?></td>
                <td><?php echo $nivel['tel_casa']; ?></td>
                <td><?php echo $nivel['tel_movil']; ?></td>
                <td><?php echo $nivel['email']; ?></td>
                <td><?php echo $nivel['fechanac']; ?></td>
                <td><?php echo $nivel['cod_nivel_acad']; ?></td>
                <td><?php echo $nivel['cod_muni']; ?></td>
                <td><?php echo $nivel['contra']; ?></td>
                <td>
                    <a href="edit_ciudadanos.php?id=<?php echo $nivel['dpi']; ?>"
                        class="btn btn-warning btn-sm">Modificar</a>
                    <a href="delete_ciudadanos.php?id=<?php echo $nivel['dpi']; ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary">Regresar al Menú</a>
</div>

<?php include('footer.php'); ?>