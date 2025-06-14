// Données initiales
const initialData = {
    pieces: [
      {
        id: 1,
        reference: "A380-1001",
        designation: "Capteur de pression",
        categorie: "Électronique",
        quantite: 15,
        seuil: 5,
        statut: "En stock",
      },
      // Autres pièces...
    ],
    mouvements: [
      {
        id: 1,
        date: "2023-05-06 14:30",
        type: "entrée",
        pieceId: 1,
        quantite: 5,
        utilisateur: "Jean Dupont",
        commentaire: "Approvisionnement régulier",
      },
      // Autres mouvements...
    ],
    utilisateurs: [
      {
        id: 1,
        nom: "Dupont",
        prenom: "Jean",
        email: "jean.dupont@aeroparts.com",
        role: "Admin",
        statut: "Actif",
        derniere_connexion: "2023-05-06 14:30",
      },
      // Autres utilisateurs...
    ]
  };
  
  // Classe pour gérer le stockage local
  class DataStore {
    constructor() {
      // Initialiser le stockage si nécessaire
      if (!localStorage.getItem('aeroparts_data')) {
        localStorage.setItem('aeroparts_data', JSON.stringify(initialData));
      }
    }
  
    // Obtenir toutes les données
    getData() {
      return JSON.parse(localStorage.getItem('aeroparts_data'));
    }
  
    // Sauvegarder toutes les données
    saveData(data) {
      localStorage.setItem('aeroparts_data', JSON.stringify(data));
    }
  
    // Obtenir les pièces
    getPieces() {
      return this.getData().pieces;
    }
  
    // Obtenir une pièce par ID
    getPieceById(id) {
      return this.getPieces().find(piece => piece.id === parseInt(id));
    }
  
    // Ajouter une pièce
    addPiece(piece) {
      const data = this.getData();
      const newId = Math.max(...data.pieces.map(p => p.id), 0) + 1;
      piece.id = newId;
      data.pieces.push(piece);
      this.saveData(data);
      return newId;
    }
  
    // Obtenir les mouvements
    getMouvements() {
      return this.getData().mouvements;
    }
  
    // Ajouter un mouvement
    addMouvement(mouvement) {
      const data = this.getData();
      const newId = Math.max(...data.mouvements.map(m => m.id), 0) + 1;
      mouvement.id = newId;
      data.mouvements.push(mouvement);
      this.saveData(data);
      return newId;
    }
  
    // Obtenir les utilisateurs
    getUtilisateurs() {
      return this.getData().utilisateurs;
    }
  }
  
  // Exporter une instance unique
  const dataStore = new DataStore();