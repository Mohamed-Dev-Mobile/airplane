<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Connexion</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <div class="login-logo">
          <i class="fas fa-box"></i>
        </div>
        <h1>AeroParts</h1>
        <p>Plateforme de gestion des pièces aéronautiques</p>
      </div>
      <form id="login-form" class="login-form">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="admin@aeroparts.com" required>
        </div>
        <div class="form-group">
          <div class="password-header">
            <label for="password">Mot de passe</label>
            <a href="#" class="forgot-password">Mot de passe oublié?</a>
          </div>
          <input type="password" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('login-form');

      if (form) {
        form.addEventListener('submit', function (e) {
          e.preventDefault();

          // Get form values
          const email = document.getElementById('email').value;
          const password = document.getElementById('password').value;

          // Validate form
          if (!email || !password) {
            alert('Veuillez remplir tous les champs.');
            return;
          }

          // Simulate login
          const submitBtn = form.querySelector('button[type="submit"]');
          const originalText = submitBtn.textContent;

          submitBtn.disabled = true;
          submitBtn.textContent = 'Connexion en cours...';

          // Simulate API call
          setTimeout(() => {
            // Redirect to dashboard
            window.location.href = 'index.html';
          }, 1000);
        });
      }
    });
  </script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
</body>

</html>