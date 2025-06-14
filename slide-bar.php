<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .sidebar-nav li.active a {
            background-color: #0d6efd;
            color: #fff;
            border-radius: 5px;
        }
    </style>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="fas fa-box"></i>
                <h1>AeroParts</h1>
            </div>
            <button id="toggle-sidebar" class="toggle-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'pieces.php' ? 'active' : '' ?>">
                    <a href="pieces.php">
                        <i class="fas fa-box"></i>
                        <span>Pièces</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'mouvements.php' ? 'active' : '' ?>">
                    <a href="mouvements.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Mouvements</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'alertes.php' ? 'active' : '' ?>">
                    <a href="alertes.php">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Alertes</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'statistiques.php' ? 'active' : '' ?>">
                    <a href="statistiques.php">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistiques</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'rapports.php' ? 'active' : '' ?>">
                    <a href="rapports.php">
                        <i class="fas fa-file-alt"></i>
                        <span>Rapports</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'utilisateurs.php' ? 'active' : '' ?>">
                    <a href="utilisateurs.php">
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'parametres.php' ? 'active' : '' ?>">
                    <a href="parametres.php">
                        <i class="fas fa-cog"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
            </ul>

        </nav>
        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">
                    <span>AD</span>
                </div>
                <div class="user-details">
                    <p class="user-name">Admin</p>
                    <p class="user-email">admin@aeroparts.com</p>
                </div>
            </div>
            <button class="theme-toggle" id="theme-toggle">
                <i class="fas fa-moon"></i>
            </button>
            <button class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Déconnexion</span>
            </button>
        </div>
    </aside>
    <script>

    </script>
</body>

</html>