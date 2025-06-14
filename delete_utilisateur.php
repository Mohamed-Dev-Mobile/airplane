<?php
require 'connection.php' ;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM utilisateur WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
header("Location: utilisateurs.php"); // ou retour à la liste
exit();

?>