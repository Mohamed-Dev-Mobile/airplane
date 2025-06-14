document.addEventListener("DOMContentLoaded", () => {
  // Form submission
  const form = document.getElementById("add-piece-form")

  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault()

      // Get form values
      const reference = document.getElementById("reference").value
      const designation = document.getElementById("designation").value
      const categorie = document.getElementById("categorie").value
      const quantite = document.getElementById("quantite").value
      const seuil = document.getElementById("seuil").value

      // Validate form
      if (!reference || !designation || !categorie || !quantite || !seuil) {
        alert("Veuillez remplir tous les champs obligatoires.")
        return
      }

      // Simulate form submission
      const submitBtn = form.querySelector('button[type="submit"]')
      const originalText = submitBtn.innerHTML

      submitBtn.disabled = true
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enregistrement...'

      // Simulate API call
      setTimeout(() => {
        alert("La pièce a été ajoutée avec succès !")

        // Reset form
        form.reset()

        // Reset button
        submitBtn.disabled = false
        submitBtn.innerHTML = originalText

        // Redirect to pieces list
        window.location.href = "pieces.html"
      }, 1000)
    })
  }
})
