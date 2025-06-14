  const form = document.getElementById('add-piece-form');

  function getPieces() {
    return JSON.parse(localStorage.getItem('pieces')) || [];
  }

  function savePieces(pieces) {
    localStorage.setItem('pieces', JSON.stringify(pieces));
  }

  function addPiece(piece) {
    const pieces = getPieces();
    const exists = pieces.find(p => p.reference === piece.reference);
    if (exists) {
      alert('Cette référence existe déjà.');
      return;
    }
    pieces.push(piece);
    savePieces(pieces);
    alert('Pièce ajoutée avec succès!');
    form.reset();
  }

  function updatePiece(piece) {
    let pieces = getPieces();
    const index = pieces.findIndex(p => p.reference === piece.reference);
    if (index !== -1) {
      pieces[index] = piece;
      savePieces(pieces);
      alert('Pièce mise à jour!');
    } else {
      alert("Pièce non trouvée pour mise à jour.");
    }
  }

  function deletePiece(reference) {
    let pieces = getPieces();
    const updated = pieces.filter(p => p.reference !== reference);
    savePieces(updated);
    alert('Pièce supprimée!');
  }

  // Form submission (Add or Update)
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const piece = {
      reference: document.getElementById('reference').value.trim(),
      designation: document.getElementById('designation').value.trim(),
      categorie: document.getElementById('categorie').value,
      fabricant: document.getElementById('fabricant').value.trim(),
      quantite: parseInt(document.getElementById('quantite').value),
      seuil: parseInt(document.getElementById('seuil').value),
      emplacement: document.getElementById('emplacement').value.trim(),
      prix: parseFloat(document.getElementById('prix').value),
      description: document.getElementById('description').value.trim(),
      notes: document.getElementById('notes').value.trim()
    };

    const mode = form.dataset.mode || 'add'; // 'add' or 'update'

    if (mode === 'add') {
      addPiece(piece);
    } else {
      updatePiece(piece);
      form.dataset.mode = 'add'; // reset to add mode
    }
  });

  // Expose delete and update functions globally if needed
  window.deletePiece = deletePiece;
  window.updatePieceForm = function (reference) {
    const pieces = getPieces();
    const piece = pieces.find(p => p.reference === reference);
    if (piece) {
      Object.keys(piece).forEach(key => {
        const input = document.getElementById(key);
        if (input) input.value = piece[key];
      });
      form.dataset.mode = 'update';
      alert("Formulaire prêt pour la mise à jour.");
    }
  }

