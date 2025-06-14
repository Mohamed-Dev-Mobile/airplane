<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Statistiques</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/statistiques.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Statistiques</h2>
        <div class="header-actions">
          <div class="period-selector">
            <label for="period">Période:</label>
            <select id="period" class="select-period">
              <option value="7">7 derniers jours</option>
              <option value="30" selected>30 derniers jours</option>
              <option value="90">90 derniers jours</option>
              <option value="365">12 derniers mois</option>
            </select>
          </div>
          <button class="btn btn-outline">
            <i class="fas fa-download"></i>
            Exporter
          </button>
        </div>
      </header>

      <div class="stats-overview">
        <div class="card stat-card">
          <div class="card-header">
            <h3>Mouvements</h3>
            <i class="fas fa-exchange-alt"></i>
          </div>
          <div class="card-body">
            <div class="stat-value">324</div>
            <div class="stat-details">
              <div class="stat-item">
                <span class="stat-label">Entrées:</span>
                <span class="stat-number text-success">156</span>
              </div>
              <div class="stat-item">
                <span class="stat-label">Sorties:</span>
                <span class="stat-number text-danger">168</span>
              </div>
            </div>
          </div>
        </div>

        <div class="card stat-card">
          <div class="card-header">
            <h3>Valeur du stock</h3>
            <i class="fas fa-euro-sign"></i>
          </div>
          <div class="card-body">
            <div class="stat-value">1,245,680 €</div>
            <p class="stat-change">+5.2% par rapport au mois dernier</p>
          </div>
        </div>

        <div class="card stat-card">
          <div class="card-header">
            <h3>Taux de rotation</h3>
            <i class="fas fa-sync"></i>
          </div>
          <div class="card-body">
            <div class="stat-value">3.2</div>
            <p class="stat-change">Rotation moyenne du stock</p>
          </div>
        </div>

        <div class="card stat-card">
          <div class="card-header">
            <h3>Pièces critiques</h3>
            <i class="fas fa-exclamation-triangle"></i>
          </div>
          <div class="card-body">
            <div class="stat-value text-danger">24</div>
            <p class="stat-change">1.9% du total des pièces</p>
          </div>
        </div>
      </div>

      <div class="grid-2">
        <div class="card">
          <div class="card-header">
            <h3>Évolution du stock</h3>
            <p>Tendance des niveaux de stock sur la période</p>
          </div>
          <div class="card-body">
            <canvas id="stockChart" height="250"></canvas>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3>Entrées vs Sorties</h3>
            <p>Comparaison des entrées et sorties par semaine</p>
          </div>
          <div class="card-body">
            <canvas id="movementsChart" height="250"></canvas>
          </div>
        </div>
      </div>

      <div class="grid-2">
        <div class="card">
          <div class="card-header">
            <h3>Top 5 des pièces les plus utilisées</h3>
            <p>Basé sur les mouvements de la période</p>
          </div>
          <div class="card-body">
            <canvas id="topPiecesChart" height="250"></canvas>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3>Répartition par catégorie</h3>
            <p>Distribution des pièces par catégorie</p>
          </div>
          <div class="card-body">
            <canvas id="categoriesChart" height="250"></canvas>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3>Prévisions de stock</h3>
          <p>Projection des niveaux de stock pour les 3 prochains mois</p>
        </div>
        <div class="card-body">
          <canvas id="forecastChart" height="250"></canvas>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/statistiques.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>
</html>
