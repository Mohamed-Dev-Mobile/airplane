// Formater une date
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleString('fr-FR');
  }
  
  // Calculer le statut d'une pièce
  function calculateStatus(quantity, threshold) {
    return quantity < threshold ? "Critique" : "En stock";
  }
  
  // Générer un ID unique
  function generateId() {
    return Date.now().toString(36) + Math.random().toString(36).substr(2);
  }