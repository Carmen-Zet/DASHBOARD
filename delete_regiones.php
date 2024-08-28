<?php
include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM regiones WHERE cod_region = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: regiones.php');
    exit();
} else {
    echo "Error al eliminar nivel";
}
?>
