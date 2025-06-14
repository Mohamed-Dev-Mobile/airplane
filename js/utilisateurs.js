document.addEventListener("DOMContentLoaded", () => {
  // New user button
  const newUserBtn = document.querySelector(".header-actions .btn-primary")

  if (newUserBtn) {
    newUserBtn.addEventListener("click", () => {
      alert("Ouverture du formulaire de création d'utilisateur")
    })
  }

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

  // Dropdown toggles
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle")

  if (dropdownToggles.length > 0) {
    dropdownToggles.forEach((toggle) => {
      toggle.addEventListener("click", function (e) {
        e.stopPropagation()

        const dropdown = this.closest(".dropdown")
        const menu = dropdown.querySelector(".dropdown-menu")

        // Close all other dropdowns
        document.querySelectorAll(".dropdown-menu.show").forEach((m) => {
          if (m !== menu) {
            m.classList.remove("show")
          }
        })

        // Toggle current dropdown
        menu.classList.toggle("show")
      })
    })

    // Close dropdowns when clicking outside
    document.addEventListener("click", () => {
      document.querySelectorAll(".dropdown-menu.show").forEach((menu) => {
        menu.classList.remove("show")
      })
    })
  }

  // Delete user buttons
  const deleteUserBtns = document.querySelectorAll(".dropdown-item.text-danger")

  if (deleteUserBtns.length > 0) {
    deleteUserBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const userName = this.closest("tr").querySelector("td:first-child").textContent
        if (confirm(`Êtes-vous sûr de vouloir supprimer l'utilisateur "${userName}" ?`)) {
          alert(`Utilisateur "${userName}" supprimé avec succès.`)
          // Dans une application réelle, on supprimerait la ligne du tableau
        }
      })
    })
  }
})
