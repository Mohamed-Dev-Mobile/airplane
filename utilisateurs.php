<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Gestion des Utilisateurs</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/utilisateurs.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <style>
    .table td,
    .table th {
      padding: 1rem;
      /* More space inside each cell */
      vertical-align: middle;
      /* Vertically center content */
    }

    .table th {
      font-size: 1rem;
      font-weight: 600;
    }

    .table td {
      font-size: 0.95rem;
    }

    .table tr {
      height: 70px;
      /* Ensures good vertical spacing */
    }

    .dropdown-menu {
      padding: 0.5rem 0.75rem;
    }

    .btn-icon {
      padding: 0.5rem 0.75rem;
      font-size: 1.1rem;
    }

    .font-medium {
      font-weight: 500;
    }
  </style>

  <div class="container">
    <!-- Sidebar -->
    <?php include 'slide-bar.php' ?>

    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Gestion des Utilisateurs</h2>
        <div class="header-actions">
          <button class="btn btn-primary" onclick="window.location.href='ajouter_utilisateur.php'">
            <i class="fas fa-user-plus"></i>
            Nouvel utilisateur
          </button>
        </div>
      </header>

      <div class="search-bar">
        <div class="search-input">
          <i class="fas fa-search"></i>
          <input type="search" placeholder="Rechercher un utilisateur...">
        </div>
        <button class="btn btn-outline">
          <i class="fas fa-filter"></i>
          Filtres
        </button>
      </div>

      <div class="card">
        <div class="table-responsive">
          <?php
          require 'connection.php';

          $sql = "SELECT id, nom, email, role, statut, date_conexion FROM utilisateur";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Statut</th>
                <th>Dernière connexion</th>
                <th>Actions</th>
            </tr>
          </thead><tbody>';

            while ($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td class="font-medium">' . htmlspecialchars($row['nom']) . '</td>';
              echo '<td>' . htmlspecialchars($row['email']) . '</td>';
              echo '<td><span class="badge badge-secondary">' . htmlspecialchars($row['role']) . '</span></td>';
              echo '<td><span class="badge badge-outline">' . htmlspecialchars($row['statut']) . '</span></td>';
              echo '<td>' . htmlspecialchars($row['date_conexion']) . '</td>';
              echo '<td>
                <div class="dropdown">
                  
                  <form action="delete_utilisateur.php" method="POST" style="display:inline;" onsubmit="return confirm("Supprimer cet utilisateur ?");">
                  <input type="hidden" name="id" value="5">
                  <button type="submit" class="btn btn-sm btn-outline-danger">
                  <i class="fas fa-trash"></i> Supprimer
                  </button>
                  </form>
                </div>
              </td>';
              echo '</tr>';
            }
            echo '</tbody></table>';
          } else {
            echo "Aucun utilisateur trouvé.";
          }

          $conn->close();
          ?>

        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/utilisateurs.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>

</html>