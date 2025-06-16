<?php
require 'connection.php';
$myCount ;
$sql = "SELECT COUNT(*) AS total FROM pieces";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $myCount = $row['total'] ;
} else {
    echo "Error: " . $conn->error;
    $myCount = 0 ;
}

$myCount1 ;
$sql1 = "SELECT COUNT(*) AS total1 FROM mouvement";
$result1 = $conn->query($sql1);

if ($result1) {
    $row1 = $result1->fetch_assoc();
    $myCount1 = $row1['total1'] ;
} else {
    echo "Error: " . $conn->error;
    $myCount1 = 0 ;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Gestion des Pièces Aéronautiques</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Tableau de bord</h2>
        <div class="header-actions">
          <a href="pieces-ajouter.html" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Ajouter une pièce
          </a>
        </div>
      </header>

      <div class="tabs">
        <button class="tab-btn active" data-tab="apercu">Aperçu</button>
        <button class="tab-btn" data-tab="alertes">Alertes</button>
        <button class="tab-btn" data-tab="statistiques">Statistiques</button>
      </div>

      <!-- Tab Content -->
      <div class="tab-content active" id="apercu">
        <div class="stats-cards">
          <div class="card stat-card">
            <div class="card-header">
              <h3>Total des pièces</h3>
              <i class="fas fa-box"></i>
            </div>
            <div class="card-body">
              <div class="stat-value"><?php echo $myCount ?></div>
              <p class="stat-change">+12% par rapport au mois dernier</p>
            </div>
          </div>

          <div class="card stat-card">
            <div class="card-header">
              <h3>Mouvements récents</h3>
              <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-body">
              <div class="stat-value"><?php echo $myCount1 ?></div>
              <div class="badge-container">
                <span class="badge">
                  <i class="fas fa-arrow-up text-success"></i>
                  156 entrées
                </span>
                <span class="badge">
                  <i class="fas fa-arrow-down text-danger"></i>
                  168 sorties
                </span>
              </div>
            </div>
          </div>

          <div class="card stat-card">
            <div class="card-header">
              <h3>Pièces en stock</h3>
              <i class="fas fa-box"></i>
            </div>
            <div class="card-body">
              <div class="stat-value">1,024</div>
              <p class="stat-change">82% du total des pièces</p>
            </div>
          </div>

          <div class="card stat-card">
            <div class="card-header">
              <h3>Alertes de stock</h3>
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="card-body">
              <div class="stat-value text-danger">24</div>
              <p class="stat-change">Pièces sous le seuil critique</p>
            </div>
          </div>
        </div>

        <div class="charts-container">
          <div class="card chart-card">
            <div class="card-header">
              <h3>Évolution du stock</h3>
              <p>Tendance des niveaux de stock sur les 30 derniers jours</p>
            </div>
            <div class="card-body">
              <canvas id="stockChart"></canvas>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h3>Mouvements récents</h3>
              <p>Les 5 derniers mouvements enregistrés</p>
            </div>
            <div class="card-body">
              <div class="recent-movements">
                <div class="movement-item">
                  <div class="movement-icon entry">
                    <i class="fas fa-arrow-up"></i>
                  </div>
                  <div class="movement-details">
                    <div class="movement-header">
                      <a href="pieces/1.html" class="movement-piece">A380-1001</a>
                      <span class="movement-quantity">+5</span>
                    </div>
                    <div class="movement-meta">
                      <span>2023-05-06 14:30</span>
                      <span>Jean Dupont</span>
                    </div>
                  </div>
                </div>

                <div class="movement-item">
                  <div class="movement-icon exit">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                  <div class="movement-details">
                    <div class="movement-header">
                      <a href="pieces/2.html" class="movement-piece">B737-2002</a>
                      <span class="movement-quantity">-2</span>
                    </div>
                    <div class="movement-meta">
                      <span>2023-05-06 13:15</span>
                      <span>Marie Martin</span>
                    </div>
                  </div>
                </div>

                <div class="movement-item">
                  <div class="movement-icon entry">
                    <i class="fas fa-arrow-up"></i>
                  </div>
                  <div class="movement-details">
                    <div class="movement-header">
                      <a href="pieces/3.html" class="movement-piece">A320-3003</a>
                      <span class="movement-quantity">+10</span>
                    </div>
                    <div class="movement-meta">
                      <span>2023-05-06 11:45</span>
                      <span>Pierre Durand</span>
                    </div>
                  </div>
                </div>

                <div class="movement-item">
                  <div class="movement-icon exit">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                  <div class="movement-details">
                    <div class="movement-header">
                      <a href="pieces/4.html" class="movement-piece">B747-4004</a>
                      <span class="movement-quantity">-1</span>
                    </div>
                    <div class="movement-meta">
                      <span>2023-05-06 10:30</span>
                      <span>Sophie Petit</span>
                    </div>
                  </div>
                </div>

                <div class="movement-item">
                  <div class="movement-icon exit">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                  <div class="movement-details">
                    <div class="movement-header">
                      <a href="pieces/5.html" class="movement-piece">A350-5005</a>
                      <span class="movement-quantity">-3</span>
                    </div>
                    <div class="movement-meta">
                      <span>2023-05-06 09:15</span>
                      <span>Thomas Grand</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="alertes">
        <div class="alert alert-danger">
          <i class="fas fa-exclamation-triangle"></i>
          <div class="alert-content">
            <h4>Attention</h4>
            <p>24 pièces sont actuellement sous le seuil critique de stock.</p>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3>Pièces en alerte</h3>
            <p>Liste des pièces dont le stock est inférieur au seuil critique</p>
          </div>
          <div class="card-body">
            <div class="alert-items">
              <div class="alert-item">
                <div class="alert-item-info">
                  <h4>Pièce A380-1001</h4>
                  <div class="alert-item-details">
                    <span>Stock: <span class="text-danger">2</span></span>
                    <span>Seuil: 10</span>
                  </div>
                </div>
                <a href="pieces/1.html" class="btn btn-outline">Voir détails</a>
              </div>

              <div class="alert-item">
                <div class="alert-item-info">
                  <h4>Pièce B737-2002</h4>
                  <div class="alert-item-details">
                    <span>Stock: <span class="text-danger">3</span></span>
                    <span>Seuil: 10</span>
                  </div>
                </div>
                <a href="pieces/2.html" class="btn btn-outline">Voir détails</a>
              </div>

              <div class="alert-item">
                <div class="alert-item-info">
                  <h4>Pièce A320-3003</h4>
                  <div class="alert-item-details">
                    <span>Stock: <span class="text-danger">4</span></span>
                    <span>Seuil: 15</span>
                  </div>
                </div>
                <a href="pieces/3.html" class="btn btn-outline">Voir détails</a>
              </div>

              <div class="alert-item">
                <div class="alert-item-info">
                  <h4>Pièce B747-4004</h4>
                  <div class="alert-item-details">
                    <span>Stock: <span class="text-danger">1</span></span>
                    <span>Seuil: 5</span>
                  </div>
                </div>
                <a href="pieces/4.html" class="btn btn-outline">Voir détails</a>
              </div>

              <div class="alert-item">
                <div class="alert-item-info">
                  <h4>Pièce A350-5005</h4>
                  <div class="alert-item-details">
                    <span>Stock: <span class="text-danger">2</span></span>
                    <span>Seuil: 8</span>
                  </div>
                </div>
                <a href="pieces/5.html" class="btn btn-outline">Voir détails</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="statistiques">
        <div class="grid-2">
          <div class="card">
            <div class="card-header">
              <h3>Top 5 des pièces les plus utilisées</h3>
              <p>Basé sur les mouvements des 30 derniers jours</p>
            </div>
            <div class="card-body">
              <div class="progress-bars">
                <div class="progress-item">
                  <div class="progress-bar">
                    <div class="progress" style="width: 75%"></div>
                  </div>
                  <div class="progress-label">
                    <span>Pièce B737-1001</span>
                    <span>60 utilisations</span>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-bar">
                    <div class="progress" style="width: 60%"></div>
                  </div>
                  <div class="progress-label">
                    <span>Pièce B737-2002</span>
                    <span>48 utilisations</span>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-bar">
                    <div class="progress" style="width: 45%"></div>
                  </div>
                  <div class="progress-label">
                    <span>Pièce B737-3003</span>
                    <span>36 utilisations</span>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-bar">
                    <div class="progress" style="width: 30%"></div>
                  </div>
                  <div class="progress-label">
                    <span>Pièce B737-4004</span>
                    <span>24 utilisations</span>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-bar">
                    <div class="progress" style="width: 15%"></div>
                  </div>
                  <div class="progress-label">
                    <span>Pièce B737-5005</span>
                    <span>12 utilisations</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h3>Tendances d'entrée/sortie</h3>
              <p>Comparaison des entrées et sorties par semaine</p>
            </div>
            <div class="card-body">
              <canvas id="movementsChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>
</html>
