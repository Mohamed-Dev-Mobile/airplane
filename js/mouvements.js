document.addEventListener("DOMContentLoaded", () => {
  // Search functionality
  const searchInput = document.querySelector(".search-input input")

  if (searchInput) {
    searchInput.addEventListener("input", function () {
      const searchTerm = this.value.toLowerCase()
      const rows = document.querySelectorAll("tbody tr")

      rows.forEach((row) => {
        const text = row.textContent.toLowerCase()
        if (text.includes(searchTerm)) {
          row.style.display = ""
        } else {
          row.style.display = "none"
        }
      })
    })
  }

  // Entrée/Sortie buttons
  const entreeBtn = document.querySelector(".btn-primary")
  const sortieBtn = document.querySelector(".btn-outline")

  if (entreeBtn) {
    entreeBtn.addEventListener("click", () => {
      // Simuler l'ouverture d'un formulaire d'entrée
      alert("Ouverture du formulaire d'entrée de stock")
    })
  }

  if (sortieBtn) {
    sortieBtn.addEventListener("click", () => {
      // Simuler l'ouverture d'un formulaire de sortie
      alert("Ouverture du formulaire de sortie de stock")
    })
  }

  // Période button
  const periodeBtn = document.querySelector(".btn-outline:nth-child(3)")

  if (periodeBtn) {
    periodeBtn.addEventListener("click", () => {
      // Simuler l'ouverture d'un sélecteur de période
      alert("Sélection de la période")
    })
  }
})
