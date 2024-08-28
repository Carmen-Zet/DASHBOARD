<?php
include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM nivelesacademicos WHERE cod_nivel_acad = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: niveles.php');
    exit();
} else {
    echo "Error al eliminar nivel";
}
?>
