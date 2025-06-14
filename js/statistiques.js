
document.addEventListener("DOMContentLoaded", () => {
  // Stock Chart
  const stockCtx = document.getElementById("stockChart")

  if (stockCtx) {
    new Chart(stockCtx, {
      type: "line",
      data: {
        labels: ["Sem 1", "Sem 2", "Sem 3", "Sem 4", "Sem 5", "Sem 6", "Sem 7"],
        datasets: [
          {
            label: "Stock",
            data: [400, 406, 412, 418, 424, 430, 436],
            borderColor: "#8884d8",
            backgroundColor: "rgba(136, 132, 216, 0.1)",
            tension: 0.3,
            fill: true,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: false,
          },
        },
      },
    })
  }

  // Movements Chart
  const movementsCtx = document.getElementById("movementsChart")

  if (movementsCtx) {
    new Chart(movementsCtx, {
      type: "bar",
      data: {
        labels: ["Sem 1", "Sem 2", "Sem 3", "Sem 4", "Sem 5", "Sem 6", "Sem 7"],
        datasets: [
          {
            label: "Entrées",
            data: [24, 28, 26, 32, 30, 34, 38],
            backgroundColor: "#82ca9d",
          },
          {
            label: "Sorties",
            data: [18, 22, 20, 26, 24, 28, 32],
            backgroundColor: "#ff7300",
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    })
  }

  // Top Pieces Chart
  const topPiecesCtx = document.getElementById("topPiecesChart")

  if (topPiecesCtx) {
    new Chart(topPiecesCtx, {
      type: "horizontalBar",
      data: {
        labels: ["B737-1001", "B737-2002", "B737-3003", "B737-4004", "B737-5005"],
        datasets: [
          {
            label: "Utilisations",
            data: [60, 48, 36, 24, 12],
            backgroundColor: [
              "rgba(54, 162, 235, 0.8)",
              "rgba(54, 162, 235, 0.7)",
              "rgba(54, 162, 235, 0.6)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(54, 162, 235, 0.4)",
            ],
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: {
            beginAtZero: true,
          },
        },
      },
    })
  }

  // Categories Chart
  const categoriesCtx = document.getElementById("categoriesChart")

  if (categoriesCtx) {
    new Chart(categoriesCtx, {
      type: "pie",
      data: {
        labels: ["Électronique", "Mécanique", "Hydraulique", "Carburant", "Autre"],
        datasets: [
          {
            data: [35, 25, 20, 15, 5],
            backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF"],
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
      },
    })
  }

  // Forecast Chart
  const forecastCtx = document.getElementById("forecastChart")

  if (forecastCtx) {
    new Chart(forecastCtx, {
      type: "line",
      data: {
        labels: ["Mai", "Juin", "Juillet", "Août", "Septembre"],
        datasets: [
          {
            label: "Stock réel",
            data: [436, 450, null, null, null],
            borderColor: "#8884d8",
            backgroundColor: "rgba(136, 132, 216, 0.1)",
            tension: 0.3,
            fill: true,
          },
          {
            label: "Prévision",
            data: [436, 450, 465, 480, 495],
            borderColor: "#82ca9d",
            backgroundColor: "rgba(130, 202, 157, 0.1)",
            borderDash: [5, 5],
            tension: 0.3,
            fill: true,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: false,
          },
        },
      },
    })
  }

  // Period selector
  const periodSelector = document.getElementById("period")

  if (periodSelector) {
    periodSelector.addEventListener("change", function () {
      // Simuler un chargement des données
      alert("Chargement des données pour la période: " + this.options[this.selectedIndex].text)
      // Dans une application réelle, on rechargerait les graphiques avec de nouvelles données
    })
  }
})
