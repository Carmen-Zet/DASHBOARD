<?php
include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM departamentos WHERE cod_depto = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: departamentos.php');
    exit();
} else {
    echo "Error al eliminar nivel";
}
?>
