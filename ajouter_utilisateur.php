<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btn'])) {
  $nom            = $_POST['nom'];
  $email          = $_POST['email'];
  $role           = $_POST['role'];
  $statut         = $_POST['statut'];
  $date_conexion  = $_POST['date_conexion'];

  $stmt = $conn->prepare("INSERT INTO `utilisateur` (`nom`, `email`, `role`, `statut`, `date_conexion`) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $nom, $email, $role, $statut, $date_conexion);

  if ($stmt->execute()) {
    echo "<script>alert('L\'utilisateur a été enregistré avec succès.');</script>";
  } else {
    echo "<script>alert('Erreur lors de l\'enregistrement.');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter un utilisateur</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .form-container {
      max-width: 600px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .btn {
      background-color: #007BFF;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Ajouter un utilisateur</h2>
    <form id="ajoutUtilisateur" action="" method="post">
      <div class="form-group">
        <label for="nom">Nom et prenom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>

      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="role">Rôle :</label>
        <select id="role" name="role" required>
          <option value="">-- Sélectionner --</option>
          <option value="Admin">Admin</option>
          <option value="Technicien">Technicien</option>
          <option value="Magasinier">Magasinier</option>
        </select>
      </div>

      <div class="form-group">
        <label for="statut">Statut :</label>
        <select id="statut" name="statut" required>
          <option value="Actif">Actif</option>
          <option value="Inactif">Inactif</option>
        </select>
      </div>

      <div class="form-group">
        <label for="derniereConnexion">Dernière connexion :</label>
        <input type="datetime-local" id="derniereConnexion" name="date_conexion">
      </div>

      <button type="submit" class="btn" name="btn">Ajouter</button>
    </form>
  </div>

</body>
</html>
