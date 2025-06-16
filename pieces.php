<?php
require 'connection.php';
$result = $conn->query("SELECT * FROM pieces");
$now = new DateTime();
$date12 = $now->format('Y-m-d H:i:s');
$type12 = 'sortie';

if (isset($_GET['id'])) {

  $id = intval($_GET['id']);

  $reference12 = $conn->query("select reference from pieces where id = $id ");

  $stmt3 = $conn->prepare("INSERT INTO `mouvement` (`reference`, `date`, `type`) VALUES (?, ?, ?)");
  $stmt3->bind_param("sss", $reference12, $date12, $type12);
  $stmt3->execute();

  $stmt = $conn->prepare("DELETE FROM pieces WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Gestion des Pièces</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pieces.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Gestion des Pièces</h2>
        <div class="header-actions">
          <a href="pieces-ajouter.php" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Ajouter une pièce
          </a>
          <button class="btn btn-outline">
            <i class="fas fa-download"></i>
            Exporter
          </button>
        </div>
      </header>

      <div class="search-bar">
        <div class="search-input">
          <i class="fas fa-search"></i>
          <input type="search" placeholder="Rechercher une pièce...">
        </div>
        <button class="btn btn-outline">
          <i class="fas fa-filter"></i>
          Filtres
        </button>
      </div>

      <div class="card">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Référence</th>
                <th>Désignation</th>
                <th>Catégorie</th>
                <th class="text-center">Seuil</th>
                <th class="text-center">Price</th>
                <th class="text-right">Actions</th>
              </tr>
            </thead>
            <tbody>

              <?php while ($row = $result->fetch_assoc()) {
                $statut = ($row['quantite'] ?? 0) <= $row['seuil']
                  ? '<span class="badge-outline text-danger">Stock bas</span>'
                  : '<span class="badge-outline">En stock</span>';

                echo "<tr>
        <td>{$row['reference']}</td>
        <td>{$row['designation']}</td>
        <td>{$row['categorie']}</td>
        <td class='text-center'>{$row['seuil']}</td>
        <td class='text-center'>{$row['prix']} €</td>
        
        <td class='text-right'>
            <a href='supprimer_piece.php?id={$row['id']}'
               class='dropdown-item text-danger'
               onclick=\"return confirm('Confirmer la suppression ?')\">
               <i class='fas fa-trash'></i> Supprimer
            </a>
        </td>
    </tr>";
              } ?>

            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/pieces.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
  <script src="js/add-piece.js"></script>


</body>

</html>