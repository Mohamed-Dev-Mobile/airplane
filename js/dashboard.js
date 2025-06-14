
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
          {
            label: "Entrées",
            data: [24, 28, 26, 32, 30, 34, 38],
            borderColor: "#82ca9d",
            backgroundColor: "transparent",
            tension: 0.3,
          },
          {
            label: "Sorties",
            data: [18, 22, 20, 26, 24, 28, 32],
            borderColor: "#ff7300",
            backgroundColor: "transparent",
            tension: 0.3,
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
})
