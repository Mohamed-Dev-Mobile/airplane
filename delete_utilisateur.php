<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM utilisateur WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: utilisateurs.php"); // change selon le nom de ta page
        exit();
    } else {
        echo "Erreur lors de la suppression.";
    }

    $stmt->close();
}
$conn->close();
?>
