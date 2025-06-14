document.addEventListener("DOMContentLoaded", () => {
  // Toggle sidebar
  const toggleBtn = document.getElementById("toggle-sidebar")
  const sidebar = document.querySelector(".sidebar")

  if (toggleBtn && sidebar) {
    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed")

      // For mobile
      sidebar.classList.toggle("open")
    })
  }

  // Toggle theme
  const themeToggle = document.getElementById("theme-toggle")

  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      document.body.classList.toggle("dark-theme")

      // Update icon
      const icon = themeToggle.querySelector("i")
      if (document.body.classList.contains("dark-theme")) {
        icon.classList.remove("fa-moon")
        icon.classList.add("fa-sun")
      } else {
        icon.classList.remove("fa-sun")
        icon.classList.add("fa-moon")
      }

      // Save preference
      const theme = document.body.classList.contains("dark-theme") ? "dark" : "light"
      localStorage.setItem("theme", theme)
    })

    // Check saved theme
    const savedTheme = localStorage.getItem("theme")
    if (savedTheme === "dark") {
      document.body.classList.add("dark-theme")
      const icon = themeToggle.querySelector("i")
      icon.classList.remove("fa-moon")
      icon.classList.add("fa-sun")
    }
  }

  // Tabs
  const tabBtns = document.querySelectorAll(".tab-btn")

  if (tabBtns.length > 0) {
    tabBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        // Remove active class from all tabs
        tabBtns.forEach((b) => b.classList.remove("active"))

        // Hide all tab content
        const tabContents = document.querySelectorAll(".tab-content")
        tabContents.forEach((content) => content.classList.remove("active"))

        // Add active class to clicked tab
        this.classList.add("active")

        // Show corresponding tab content
        const tabId = this.getAttribute("data-tab")
        const tabContent = document.getElementById(tabId)
        if (tabContent) {
          tabContent.classList.add("active")
        }
      })
    })
  }

  // Dropdowns
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
})
