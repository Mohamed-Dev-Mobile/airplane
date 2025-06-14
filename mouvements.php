<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Gestion des Mouvements</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mouvements.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="container">
    <?php include 'slide-bar.php' ?>
    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Gestion des Mouvements</h2>
        <div class="header-actions">
          <button class="btn btn-primary">
            <i class="fas fa-arrow-up"></i>
            Entrée
          </button>
          <button class="btn btn-outline">
            <i class="fas fa-arrow-down"></i>
            Sortie
          </button>
          <button class="btn btn-outline">
            <i class="fas fa-download"></i>
            Exporter
          </button>
        </div>
      </header>

      <div class="search-bar">
        <div class="search-input">
          <i class="fas fa-search"></i>
          <input type="search" placeholder="Rechercher un mouvement...">
        </div>
        <button class="btn btn-outline">
          <i class="fas fa-filter"></i>
          Filtres
        </button>
        <button class="btn btn-outline">
          <i class="fas fa-calendar"></i>
          Période
        </button>
      </div>

      <div class="card">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Référence</th>
              </tr>
            </thead>

            <?php
            require 'connection.php';
            $result = $conn->query("SELECT * FROM mouvement ORDER BY date DESC");
            ?>

            <tbody>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td>
                    <?php
                    $date = new DateTime($row['date']);
                    echo $date->format('d/m/Y H:i');
                    ?>
                  </td>
                  <td>
                    <?php if ($row['type'] === 'entree'): ?>
                      <span class="badge badge-outline badge-success">
                        <i class="fas fa-arrow-up text-success"></i> <?= htmlspecialchars($row['type']) ?>
                      </span>
                    <?php else: ?>
                      <span class="badge badge-outline badge-danger">
                        <i class="fas fa-arrow-down text-danger"></i> <?= htmlspecialchars($row['type']) ?>
                      </span>
                    <?php endif; ?>
                  </td>
                  <td class="font-medium"><?= htmlspecialchars($row['reference']) ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>

        </div>
      </div>

    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/mouvements.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>

</html>