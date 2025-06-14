<?php
require 'connection.php' ;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM pieces WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
header("Location: pieces.php"); // ou retour à la liste
exit();
?>