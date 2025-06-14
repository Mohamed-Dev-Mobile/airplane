document.addEventListener("DOMContentLoaded", () => {
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

  // General settings form
  const generalForm = document.querySelector("#general form")

  if (generalForm) {
    generalForm.addEventListener("submit", (e) => {
      e.preventDefault()
      alert("Paramètres généraux enregistrés avec succès.")
    })
  }

  // Notifications form
  const notificationsForm = document.querySelector("#notifications form")

  if (notificationsForm) {
    notificationsForm.addEventListener("submit", (e) => {
      e.preventDefault()
      alert("Paramètres de notifications enregistrés avec succès.")
    })
  }

  // Category buttons
  const categoryEditBtns = document.querySelectorAll(".category-actions .btn:first-child")
  const categoryDeleteBtns = document.querySelectorAll(".category-actions .btn:last-child")
  const addCategoryBtn = document.querySelector(".add-category .btn")

  if (categoryEditBtns.length > 0) {
    categoryEditBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const categoryName = this.closest(".category-item").querySelector("h4").textContent
        alert(`Modification de la catégorie "${categoryName}"`)
      })
    })
  }

  if (categoryDeleteBtns.length > 0) {
    categoryDeleteBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const categoryName = this.closest(".category-item").querySelector("h4").textContent
        if (confirm(`Êtes-vous sûr de vouloir supprimer la catégorie "${categoryName}" ?`)) {
          alert(`Catégorie "${categoryName}" supprimée avec succès.`)
          // Dans une application réelle, on supprimerait l'élément du DOM
        }
      })
    })
  }

  if (addCategoryBtn) {
    addCategoryBtn.addEventListener("click", () => {
      alert("Ouverture du formulaire d'ajout de catégorie")
    })
  }

  // Backup buttons
  const createBackupBtn = document.querySelector(".backup-action:first-child .btn")
  const backupFrequencySelect = document.getElementById("backup-frequency")
  const restoreFileInput = document.getElementById("restore-file")
  const downloadBackupBtns = document.querySelectorAll(".backup-history .btn:nth-child(1)")
  const restoreBackupBtns = document.querySelectorAll(".backup-history .btn:nth-child(2)")

  if (createBackupBtn) {
    createBackupBtn.addEventListener("click", () => {
      alert("Création d'une sauvegarde en cours...")
      setTimeout(() => {
        alert("Sauvegarde créée avec succès.")
      }, 1000)
    })
  }

  if (backupFrequencySelect) {
    backupFrequencySelect.addEventListener("change", function () {
      const frequency = this.options[this.selectedIndex].text
      alert(`Fréquence des sauvegardes automatiques définie sur "${frequency}"`)
    })
  }

  if (restoreFileInput) {
    restoreFileInput.addEventListener("change", function () {
      if (this.files.length > 0) {
        const fileName = this.files[0].name
        alert(`Fichier sélectionné: ${fileName}`)
      }
    })
  }

  if (downloadBackupBtns.length > 0) {
    downloadBackupBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const backupDate = this.closest("tr").querySelector("td:first-child").textContent
        alert(`Téléchargement de la sauvegarde du ${backupDate}`)
      })
    })
  }

  if (restoreBackupBtns.length > 0) {
    restoreBackupBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const backupDate = this.closest("tr").querySelector("td:first-child").textContent
        if (
          confirm(`Êtes-vous sûr de vouloir restaurer la sauvegarde du ${backupDate} ? Cette action est irréversible.`)
        ) {
          alert(`Restauration de la sauvegarde du ${backupDate} en cours...`)
          setTimeout(() => {
            alert("Restauration terminée avec succès.")
          }, 1500)
        }
      })
    })
  }
})
