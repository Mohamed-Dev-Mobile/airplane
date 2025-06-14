<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Rapports et Exports</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/rapports.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Rapports et Exports</h2>
      </header>

      <div class="report-cards">
        <div class="card report-card">
          <div class="card-header">
            <h3>Inventaire</h3>
            <p>Générer un rapport d'inventaire complet</p>
          </div>
          <div class="card-body">
            <div class="report-actions">
              <select class="report-format">
                <option value="pdf">PDF</option>
                <option value="csv">CSV</option>
                <option value="xlsx">Excel</option>
              </select>
              <button class="btn btn-primary">
                <i class="fas fa-file-alt"></i>
                Générer
              </button>
            </div>
          </div>
        </div>

        <div class="card report-card">
          <div class="card-header">
            <h3>Mouvements</h3>
            <p>Rapport des entrées et sorties</p>
          </div>
          <div class="card-body">
            <div class="report-actions">
              <button class="btn btn-outline">
                <i class="fas fa-calendar"></i>
                Période
              </button>
              <button class="btn btn-primary">
                <i class="fas fa-file-alt"></i>
                Générer
              </button>
            </div>
          </div>
        </div>

        <div class="card report-card">
          <div class="card-header">
            <h3>Statistiques</h3>
            <p>Analyse des tendances et prévisions</p>
          </div>
          <div class="card-body">
            <div class="report-actions">
              <button class="btn btn-outline">
                <i class="fas fa-chart-bar"></i>
                Options
              </button>
              <button class="btn btn-primary">
                <i class="fas fa-file-alt"></i>
                Générer
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3>Rapports récents</h3>
          <p>Historique des rapports générés</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nom du rapport</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Format</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="font-medium">Inventaire complet</td>
                  <td>Liste complète de toutes les pièces en stock</td>
                  <td>2023-05-01</td>
                  <td><span class="badge badge-outline">PDF</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-download"></i>
                        Télécharger
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-print"></i>
                        Imprimer
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Partager
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">Mouvements mensuels</td>
                  <td>Récapitulatif des entrées et sorties du mois</td>
                  <td>2023-05-01</td>
                  <td><span class="badge badge-outline">CSV</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-download"></i>
                        Télécharger
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-print"></i>
                        Imprimer
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Partager
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">Pièces critiques</td>
                  <td>Liste des pièces sous le seuil critique</td>
                  <td>2023-05-01</td>
                  <td><span class="badge badge-outline">PDF</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-download"></i>
                        Télécharger
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-print"></i>
                        Imprimer
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Partager
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">Statistiques d'utilisation</td>
                  <td>Analyse des tendances d'utilisation</td>
                  <td>2023-05-01</td>
                  <td><span class="badge badge-outline">PDF</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-download"></i>
                        Télécharger
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-print"></i>
                        Imprimer
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Partager
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">Historique par pièce</td>
                  <td>Historique complet des mouvements par pièce</td>
                  <td>2023-05-01</td>
                  <td><span class="badge badge-outline">CSV</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-download"></i>
                        Télécharger
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-print"></i>
                        Imprimer
                      </button>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Partager
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/rapports.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>
</html>
