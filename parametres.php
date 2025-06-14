<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Paramètres</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/parametres.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Paramètres</h2>
      </header>

      <div class="tabs">
        <button class="tab-btn active" data-tab="general">Général</button>
        <button class="tab-btn" data-tab="notifications">Notifications</button>
        <button class="tab-btn" data-tab="categories">Catégories</button>
        <button class="tab-btn" data-tab="backup">Sauvegarde</button>
      </div>

      <div class="tab-content active" id="general">
        <div class="card">
          <div class="card-header">
            <h3>Paramètres généraux</h3>
            <p>Configuration générale de l'application</p>
          </div>
          <div class="card-body">
            <form class="form">
              <div class="form-group">
                <label for="company-name">Nom de l'entreprise</label>
                <input type="text" id="company-name" value="AeroParts">
              </div>

              <div class="form-group">
                <label for="language">Langue</label>
                <select id="language">
                  <option value="fr" selected>Français</option>
                  <option value="en">English</option>
                  <option value="es">Español</option>
                  <option value="de">Deutsch</option>
                </select>
              </div>

              <div class="form-group">
                <label for="timezone">Fuseau horaire</label>
                <select id="timezone">
                  <option value="Europe/Paris" selected>Europe/Paris (UTC+01:00)</option>
                  <option value="Europe/London">Europe/London (UTC+00:00)</option>
                  <option value="America/New_York">America/New_York (UTC-05:00)</option>
                  <option value="Asia/Tokyo">Asia/Tokyo (UTC+09:00)</option>
                </select>
              </div>

              <div class="form-group">
                <label for="date-format">Format de date</label>
                <select id="date-format">
                  <option value="DD/MM/YYYY" selected>DD/MM/YYYY</option>
                  <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                  <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                </select>
              </div>

              <div class="form-group">
                <label>Thème</label>
                <div class="theme-options">
                  <div class="theme-option">
                    <input type="radio" id="theme-light" name="theme" value="light" checked>
                    <label for="theme-light">Clair</label>
                  </div>
                  <div class="theme-option">
                    <input type="radio" id="theme-dark" name="theme" value="dark">
                    <label for="theme-dark">Sombre</label>
                  </div>
                  <div class="theme-option">
                    <input type="radio" id="theme-system" name="theme" value="system">
                    <label for="theme-system">Système</label>
                  </div>
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="tab-content" id="notifications">
        <div class="card">
          <div class="card-header">
            <h3>Paramètres de notifications</h3>
            <p>Configuration des alertes et notifications</p>
          </div>
          <div class="card-body">
            <form class="form">
              <div class="form-group">
                <label>Notifications par email</label>
                <div class="checkbox-group">
                  <div class="checkbox-option">
                    <input type="checkbox" id="email-stock" checked>
                    <label for="email-stock">Alertes de stock critique</label>
                  </div>
                  <div class="checkbox-option">
                    <input type="checkbox" id="email-movement" checked>
                    <label for="email-movement">Mouvements importants</label>
                  </div>
                  <div class="checkbox-option">
                    <input type="checkbox" id="email-user">
                    <label for="email-user">Activité des utilisateurs</label>
                  </div>
                  <div class="checkbox-option">
                    <input type="checkbox" id="email-report" checked>
                    <label for="email-report">Rapports hebdomadaires</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Notifications dans l'application</label>
                <div class="checkbox-group">
                  <div class="checkbox-option">
                    <input type="checkbox" id="app-stock" checked>
                    <label for="app-stock">Alertes de stock critique</label>
                  </div>
                  <div class="checkbox-option">
                    <input type="checkbox" id="app-movement" checked>
                    <label for="app-movement">Mouvements importants</label>
                  </div>
                  <div class="checkbox-option">
                    <input type="checkbox" id="app-user" checked>
                    <label for="app-user">Activité des utilisateurs</label>
                  </div>
                  <div class="checkbox-option">
                    <input type="checkbox" id="app-report" checked>
                    <label for="app-report">Rapports hebdomadaires</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="notification-frequency">Fréquence des notifications</label>
                <select id="notification-frequency">
                  <option value="immediate" selected>Immédiate</option>
                  <option value="hourly">Toutes les heures</option>
                  <option value="daily">Quotidienne</option>
                  <option value="weekly">Hebdomadaire</option>
                </select>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="tab-content" id="categories">
        <div class="card">
          <div class="card-header">
            <h3>Gestion des catégories</h3>
            <p>Configuration des catégories de pièces</p>
          </div>
          <div class="card-body">
            <div class="categories-list">
              <?php
              $cats = $conn->query("SELECT * FROM categorie");
              while ($cat = $cats->fetch_assoc()):
                ?>
              <div class="category-item d-flex justify-content-between align-items-center border p-2 mb-2 rounded">
                <div class="category-info">
                  <h4>
                    <?= htmlspecialchars($cat['nom']) ?>
                  </h4>
                </div>
                <!-- Dans categories.php -->
                <a href="delete_categorie.php?id=<?= $cat['id'] ?>"
                  onclick="return confirm('Supprimer cette catégorie ?');" class="btn btn-sm btn-outline-danger">
                  <i class="fas fa-trash"></i> Supprimer
                </a>

              </div>
              <?php endwhile; ?>
            </div>

            <div class="add-category">
              <a href="ajouter-categorie.php" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Ajouter une catégorie
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="backup">
        <div class="card">
          <div class="card-header">
            <h3>Sauvegarde et restauration</h3>
            <p>Gestion des sauvegardes de données</p>
          </div>
          <div class="card-body">
            <div class="backup-actions">
              <div class="backup-action">
                <div class="backup-info">
                  <h4>Sauvegarde manuelle</h4>
                  <p>Créer une sauvegarde complète des données</p>
                </div>
                <button class="btn btn-primary">
                  <i class="fas fa-download"></i>
                  Créer une sauvegarde
                </button>
              </div>

              <div class="backup-action">
                <div class="backup-info">
                  <h4>Sauvegardes automatiques</h4>
                  <p>Configuration des sauvegardes périodiques</p>
                </div>
                <div class="form-group">
                  <select id="backup-frequency">
                    <option value="daily" selected>Quotidienne</option>
                    <option value="weekly">Hebdomadaire</option>
                    <option value="monthly">Mensuelle</option>
                    <option value="never">Désactivée</option>
                  </select>
                </div>
              </div>

              <div class="backup-action">
                <div class="backup-info">
                  <h4>Restauration</h4>
                  <p>Restaurer à partir d'une sauvegarde existante</p>
                </div>
                <div class="file-upload">
                  <input type="file" id="restore-file" class="file-input">
                  <label for="restore-file" class="btn btn-outline">
                    <i class="fas fa-upload"></i>
                    Sélectionner un fichier
                  </label>
                </div>
              </div>
            </div>

            <div class="backup-history">
              <h4>Historique des sauvegardes</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Type</th>
                      <th>Taille</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2023-05-06 00:00</td>
                      <td>Automatique</td>
                      <td>24.5 MB</td>
                      <td class="text-right">
                        <button class="btn btn-sm btn-outline">
                          <i class="fas fa-download"></i>
                          Télécharger
                        </button>
                        <button class="btn btn-sm btn-outline">
                          <i class="fas fa-undo"></i>
                          Restaurer
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2023-05-05 00:00</td>
                      <td>Automatique</td>
                      <td>24.3 MB</td>
                      <td class="text-right">
                        <button class="btn btn-sm btn-outline">
                          <i class="fas fa-download"></i>
                          Télécharger
                        </button>
                        <button class="btn btn-sm btn-outline">
                          <i class="fas fa-undo"></i>
                          Restaurer
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2023-05-04 15:30</td>
                      <td>Manuelle</td>
                      <td>24.2 MB</td>
                      <td class="text-right">
                        <button class="btn btn-sm btn-outline">
                          <i class="fas fa-download"></i>
                          Télécharger
                        </button>
                        <button class="btn btn-sm btn-outline">
                          <i class="fas fa-undo"></i>
                          Restaurer
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/parametres.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>

</html>