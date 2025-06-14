document.addEventListener("DOMContentLoaded", () => {
  // Initialize dropdowns
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
})
