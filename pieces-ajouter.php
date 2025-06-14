<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
  $reference   = $_POST['reference'];
  $designation = $_POST['designation'];
  $categorie   = $_POST['categorie'];
  $fabricant   = $_POST['fabricant'];
  $seuil       = $_POST['seuil'];
  $emplacement = $_POST['emplacement'];
  $prix        = $_POST['prix'];
  $description = $_POST['description'];
  $notes       = $_POST['notes'];

  $type = 'entree';
  $now = new DateTime();
  $date1 = $now->format('Y-m-d H:i:s');

  $stmt = $conn->prepare("INSERT INTO `pieces` (`reference`, `designation`, `categorie`, `fabricant`, `seuil`, `emplacement`, `prix`, `description`, `notes`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssisdss", $reference, $designation, $categorie, $fabricant, $seuil, $emplacement, $prix, $description, $notes);

  $stmt1 = $conn->prepare("INSERT INTO `mouvement` (`reference`, `date`, `type`) VALUES (?, ?, ?)");
  $stmt1->bind_param("sss", $reference, $date1, $type);

  if ($stmt->execute() && $stmt1->execute()) {
    echo "<script>alert('La pièce a été enregistrée avec succès.');</script>";
  } else {
    echo "<script>alert('Erreur lors de l\'enregistrement.');</script>";
  }

  $stmt->close();
  $stmt1->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Ajouter une pièce</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/forms.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Ajouter une pièce</h2>
        <div class="header-actions">
          <a href="pieces.php" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i>
            Retour
          </a>
        </div>
      </header>

      <div class="card">
        <div class="card-header">
          <h3>Informations de la pièce</h3>
          <p>Entrez les informations détaillées de la nouvelle pièce</p>
        </div>
        <div class="card-body">
        <!-- Ajouter Piece Form-->
          <form class="form" method="post" action="">
            <div class="form-grid">
              <div class="form-group">
                <label for="reference">Référence</label>
                <input type="text" id="reference" placeholder="Ex: A380-1001" required name="reference">
              </div>

              <div class="form-group">
                <label for="designation">Désignation</label>
                <input type="text" id="designation" placeholder="Ex: Capteur de pression" required name="designation">
              </div>

              <div class="form-group">
                <label for="categorie">Catégorie</label>
                <select id="categorie" required name="categorie">
                  <option value="" disabled selected>Sélectionner une catégorie</option>
                  <option value="electronique">Électronique</option>
                  <option value="mecanique">Mécanique</option>
                  <option value="hydraulique">Hydraulique</option>
                  <option value="carburant">Carburant</option>
                  <option value="autre">Autre</option>
                </select>
              </div>

              <div class="form-group">
                <label for="fabricant">Fabricant</label>
                <input type="text" id="fabricant" placeholder="Ex: Airbus" name="fabricant">
              </div>

              <br>

              <div class="form-group">
                <label for="seuil">Seuil critique</label>
                <input type="number" id="seuil" min="0" placeholder="5" required name="seuil">
              </div>

              <div class="form-group">
                <label for="emplacement">Emplacement</label>
                <input type="text" id="emplacement" placeholder="Ex: Étagère A, Rangée 3" name="emplacement">
              </div>

              <div class="form-group">
                <label for="prix">Prix unitaire (€)</label>
                <input type="number" id="prix" min="0" step="0.01" placeholder="0.00" name="prix">
              </div>
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" placeholder="Description détaillée de la pièce..." rows="4" name="description"></textarea>
            </div>

            <div class="form-group">
              <label for="notes">Notes supplémentaires</label>
              <textarea id="notes" placeholder="Notes supplémentaires..." rows="4" name="notes"></textarea>
            </div>

            <div class="form-actions">
              <button type="button" class="btn btn-outline" onclick="window.location.href='pieces.php'">Annuler</button>
              <button type="submit" class="btn btn-primary" name="submit">
                <i class="fas fa-save"></i>
                Enregistrer
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/forms.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>
</html>
