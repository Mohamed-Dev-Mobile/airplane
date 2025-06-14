<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AeroParts - Enregistrer un mouvement</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/forms.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar (même code que les autres pages) -->
    
    <!-- Main Content -->
    <main class="main-content">
      <header class="page-header">
        <h2>Enregistrer un mouvement</h2>
        <div class="header-actions">
          <a href="mouvements.html" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i>
            Retour
          </a>
        </div>
      </header>

      <div class="card">
        <div class="card-header">
          <h3>Détails du mouvement</h3>
          <p>Entrez les informations du mouvement</p>
        </div>
        <div class="card-body">
          <form id="mouvement-form" class="form">
            <div class="form-group">
              <label for="type-mouvement">Type de mouvement</label>
              <select id="type-mouvement" required>
                <option value="" disabled selected>Sélectionner un type</option>
                <option value="entrée">Entrée</option>
                <option value="sortie">Sortie</option>
              </select>
            </div>

            <div class="form-group">
              <label for="piece">Pièce</label>
              <select id="piece" required>
                <option value="" disabled selected>Sélectionner une pièce</option>
                <!-- Options générées dynamiquement -->
              </select>
            </div>

            <div class="form-group">
              <label for="quantite">Quantité</label>
              <input type="number" id="quantite" min="1" required>
            </div>

            <div class="form-group">
              <label for="commentaire">Commentaire</label>
              <textarea id="commentaire" rows="3"></textarea>
            </div>

            <div class="form-actions">
              <button type="button" class="btn btn-outline" onclick="window.location.href='mouvements.php'">Annuler</button>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i>
                Enregistrer
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
  <script src="js/data-store.js"></script>
  <script src="js/utils.js"></script>
  <script src="js/utils.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Remplir le select des pièces
      const pieceSelect = document.getElementById('piece');
      const pieces = dataStore.getPieces();
      
      pieces.forEach(piece => {
        const option = document.createElement('option');
        option.value = piece.id;
        option.textContent = `${piece.reference} - ${piece.designation}`;
        pieceSelect.appendChild(option);
      });

      // Gérer la soumission du formulaire
      const form = document.getElementById('mouvement-form');
      
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const type = document.getElementById('type-mouvement').value;
        const pieceId = parseInt(document.getElementById('piece').value);
        const quantite = parseInt(document.getElementById('quantite').value);
        const commentaire = document.getElementById('commentaire').value;
        
        // Créer le mouvement
        const mouvement = {
          date: new Date().toLocaleString('fr-FR'),
          type,
          pieceId,
          quantite,
          utilisateur: "Admin", // Dans une vraie app, ce serait l'utilisateur connecté
          commentaire
        };
        
        // Ajouter le mouvement
        dataStore.addMouvement(mouvement);
        
        // Mettre à jour le stock de la pièce
        const data = dataStore.getData();
        const pieceIndex = data.pieces.findIndex(p => p.id === pieceId);
        
        if (pieceIndex !== -1) {
          if (type === 'entrée') {
            data.pieces[pieceIndex].quantite += quantite;
          } else {
            data.pieces[pieceIndex].quantite -= quantite;
          }
          
          // Recalculer le statut
          data.pieces[pieceIndex].statut = calculateStatus(
            data.pieces[pieceIndex].quantite, 
            data.pieces[pieceIndex].seuil
          );
          
          dataStore.saveData(data);
        }
        
        alert('Mouvement enregistré avec succès');
        window.location.href = 'mouvements.html';
      });
    });
  </script>
  <script src="js/utils.js"></script>

</body>
</html>