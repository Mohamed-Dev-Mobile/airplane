document.addEventListener("DOMContentLoaded", () => {
  // Generate report buttons
  const generateBtns = document.querySelectorAll(".report-actions .btn-primary")

  if (generateBtns.length > 0) {
    generateBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const reportType = this.closest(".card").querySelector("h3").textContent
        const formatSelect = this.closest(".report-actions").querySelector("select")

        let format = "PDF"
        if (formatSelect) {
          format = formatSelect.options[formatSelect.selectedIndex].text
        }

        alert(`Génération du rapport "${reportType}" au format ${format}`)
      })
    })
  }

  // Download buttons
  const downloadBtns = document.querySelectorAll(".action-buttons .btn:nth-child(1)")

  if (downloadBtns.length > 0) {
    downloadBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const reportName = this.closest("tr").querySelector("td:first-child").textContent
        alert(`Téléchargement du rapport "${reportName}"`)
      })
    })
  }

  // Print buttons
  const printBtns = document.querySelectorAll(".action-buttons .btn:nth-child(2)")

  if (printBtns.length > 0) {
    printBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const reportName = this.closest("tr").querySelector("td:first-child").textContent
        alert(`Impression du rapport "${reportName}"`)
      })
    })
  }

  // Share buttons
  const shareBtns = document.querySelectorAll(".action-buttons .btn:nth-child(3)")

  if (shareBtns.length > 0) {
    shareBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const reportName = this.closest("tr").querySelector("td:first-child").textContent
        alert(`Partage du rapport "${reportName}"`)
      })
    })
  }
})
