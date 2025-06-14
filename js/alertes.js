document.addEventListener("DOMContentLoaded", () => {
  // Buttons for "Commander"
  const commanderBtns = document.querySelectorAll(".commande-item .btn-primary")

  if (commanderBtns.length > 0) {
    commanderBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const pieceRef = this.closest(".commande-item").querySelector("h4").textContent
        alert(`Commande initiée pour la pièce ${pieceRef}`)
      })
    })
  }

  // Buttons for "Entrée"
  const entreeBtns = document.querySelectorAll(".action-buttons .btn-outline:nth-child(2)")

  if (entreeBtns.length > 0) {
    entreeBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const pieceRef = this.closest("tr").querySelector("td:first-child").textContent
        alert(`Ouverture du formulaire d'entrée pour la pièce ${pieceRef}`)
      })
    })
  }
})
