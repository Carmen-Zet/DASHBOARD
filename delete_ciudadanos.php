<?php
include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM ciudadanos WHERE dpi = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: ciudadanos.php');
    exit();
} else {
    echo "Error al eliminar nivel";
}
?>
