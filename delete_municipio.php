<?php
include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM municipios WHERE cod_muni = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: municipios.php');
    exit();
} else {
    echo "Error al eliminar nivel";
}
?>
