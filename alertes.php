<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Alertes de Stock</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/alertes.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Alertes de Stock</h2>
        <div class="header-actions">
          <button class="btn btn-outline">
            <i class="fas fa-download"></i>
            Exporter
          </button>
        </div>
      </header>

      <div class="alert alert-danger">
        <i class="fas fa-exclamation-triangle"></i>
        <div class="alert-content">
          <h4>Attention</h4>
          <p>4 pièces sont actuellement sous le seuil critique de stock.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3>Pièces en alerte</h3>
          <p>Liste des pièces dont le stock est inférieur au seuil critique</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Référence</th>
                  <th>Désignation</th>
                  <th>Catégorie</th>
                  <th class="text-center">Stock actuel</th>
                  <th class="text-center">Seuil critique</th>
                  <th class="text-center">Statut</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="font-medium">B737-2002</td>
                  <td>Valve hydraulique</td>
                  <td>Hydraulique</td>
                  <td class="text-center"><span class="text-danger">8</span></td>
                  <td class="text-center">10</td>
                  <td class="text-center"><span class="badge badge-danger">Critique</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <a href="pieces/2.html" class="btn btn-sm btn-outline">
                        <i class="fas fa-eye"></i>
                        Détails
                      </a>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-arrow-up text-success"></i>
                        Entrée
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">B747-4004</td>
                  <td>Actionneur de volet</td>
                  <td>Mécanique</td>
                  <td class="text-center"><span class="text-danger">3</span></td>
                  <td class="text-center">5</td>
                  <td class="text-center"><span class="badge badge-danger">Critique</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <a href="pieces/4.html" class="btn btn-sm btn-outline">
                        <i class="fas fa-eye"></i>
                        Détails
                      </a>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-arrow-up text-success"></i>
                        Entrée
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">A330-7007</td>
                  <td>Connecteur électrique</td>
                  <td>Électronique</td>
                  <td class="text-center"><span class="text-danger">4</span></td>
                  <td class="text-center">10</td>
                  <td class="text-center"><span class="badge badge-danger">Critique</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <a href="pieces/7.html" class="btn btn-sm btn-outline">
                        <i class="fas fa-eye"></i>
                        Détails
                      </a>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-arrow-up text-success"></i>
                        Entrée
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="font-medium">B767-1010</td>
                  <td>Capteur de vitesse</td>
                  <td>Électronique</td>
                  <td class="text-center"><span class="text-danger">2</span></td>
                  <td class="text-center">5</td>
                  <td class="text-center"><span class="badge badge-danger">Critique</span></td>
                  <td class="text-right">
                    <div class="action-buttons">
                      <a href="pieces/10.html" class="btn btn-sm btn-outline">
                        <i class="fas fa-eye"></i>
                        Détails
                      </a>
                      <button class="btn btn-sm btn-outline">
                        <i class="fas fa-arrow-up text-success"></i>
                        Entrée
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3>Pièces à commander</h3>
          <p>Recommandations basées sur l'historique d'utilisation</p>
        </div>
        <div class="card-body">
          <div class="commande-items">
            <div class="commande-item">
              <div class="commande-info">
                <div class="commande-header">
                  <h4>B737-2002</h4>
                  <span class="badge badge-danger">Critique</span>
                </div>
                <p>Valve hydraulique</p>
                <div class="commande-details">
                  <span>Stock: <span class="text-danger">8</span></span>
                  <span>Seuil: 10</span>
                  <span>À commander: <strong>12</strong></span>
                </div>
              </div>
              <button class="btn btn-primary">
                <i class="fas fa-arrow-up"></i>
                Commander
              </button>
            </div>

            <div class="commande-item">
              <div class="commande-info">
                <div class="commande-header">
                  <h4>B747-4004</h4>
                  <span class="badge badge-danger">Critique</span>
                </div>
                <p>Actionneur de volet</p>
                <div class="commande-details">
                  <span>Stock: <span class="text-danger">3</span></span>
                  <span>Seuil: 5</span>
                  <span>À commander: <strong>7</strong></span>
                </div>
              </div>
              <button class="btn btn-primary">
                <i class="fas fa-arrow-up"></i>
                Commander
              </button>
            </div>

            <div class="commande-item">
              <div class="commande-info">
                <div class="commande-header">
                  <h4>A330-7007</h4>
                  <span class="badge badge-danger">Critique</span>
                </div>
                <p>Connecteur électrique</p>
                <div class="commande-details">
                  <span>Stock: <span class="text-danger">4</span></span>
                  <span>Seuil: 10</span>
                  <span>À commander: <strong>16</strong></span>
                </div>
              </div>
              <button class="btn btn-primary">
                <i class="fas fa-arrow-up"></i>
                Commander
              </button>
            </div>

            <div class="commande-item">
              <div class="commande-info">
                <div class="commande-header">
                  <h4>B767-1010</h4>
                  <span class="badge badge-danger">Critique</span>
                </div>
                <p>Capteur de vitesse</p>
                <div class="commande-details">
                  <span>Stock: <span class="text-danger">2</span></span>
                  <span>Seuil: 5</span>
                  <span>À commander: <strong>8</strong></span>
                </div>
              </div>
              <button class="btn btn-primary">
                <i class="fas fa-arrow-up"></i>
                Commander
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/alertes.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>
</html>
