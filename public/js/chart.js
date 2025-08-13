// Sales & Purchase chart for dashboard
(function () {
  const canvas = document.getElementById("salesPurchaseChart");
  if (!canvas || !window.Chart) return;

  // Ensure canvas takes the height of its parent wrapper
  const parent = canvas.parentElement;
  if (parent) {
    // Lock an explicit pixel height based on computed parent height
    const ph = parent.clientHeight || 176; // ~h-44
    canvas.height = ph;
  }

  // Destroy existing chart instance if we re-enter (e.g., hot reload or partial re-render)
  if (
    canvas._chartInstance &&
    typeof canvas._chartInstance.destroy === "function"
  ) {
    canvas._chartInstance.destroy();
  }

  const ctx = canvas.getContext("2d");

  // Static demo data (can be wired to backend later)
  const labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  const sales = [120, 145, 160, 110, 135, 148, 176, 184, 128, 140, 156, 168];
  const purchase = [90, 100, 116, 104, 120, 124, 140, 152, 116, 124, 132, 144];

  const primary = "#2464ad"; // from project theme
  const neutral = "#94a3b8"; // slate-400

  // Responsive font helpers based on container width
  const baseFont =
    Math.min(parent ? parent.clientWidth : canvas.clientWidth, 700) / 100 + 10;

  const chart = new Chart(ctx, {
    type: "bar",
    data: {
      labels,
      datasets: [
        {
          label: "Sales",
          data: sales,
          backgroundColor: primary,
          borderRadius: 4,
          barPercentage: 0.7,
          categoryPercentage: 0.6,
        },
        {
          label: "Purchase",
          data: purchase,
          backgroundColor: neutral,
          borderRadius: 4,
          barPercentage: 0.7,
          categoryPercentage: 0.6,
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          labels: {
            usePointStyle: true,
            boxWidth: 6,
            color: "#475569",
            padding: 12,
            font: { size: baseFont - 2 },
          },
        },
        tooltip: {
          callbacks: {
            label: (ctx) => `${ctx.dataset.label}: ${ctx.parsed.y}`,
          },
        },
      },
      scales: {
        x: {
          ticks: {
            color: "#64748b",
            font: { size: baseFont - 2 },
          },
          grid: {
            display: false,
          },
        },
        y: {
          beginAtZero: true,
          ticks: {
            color: "#64748b",
            font: { size: baseFont - 2 },
            callback: (val) => `${val}`,
          },
          grid: {
            color: "rgba(148, 163, 184, 0.25)",
            drawBorder: false,
          },
        },
      },
    },
  });

  // Keep a reference on the canvas to avoid duplicate instances
  canvas._chartInstance = chart;
})();
