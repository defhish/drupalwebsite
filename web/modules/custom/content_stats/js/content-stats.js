(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.contentStats = {
    attach: function (context, settings) {
      // Only run once and only if we have data
      if (context !== document || !drupalSettings.contentStats) return;

      // Wait for DOM to be fully ready
      $(document).ready(function () {
        const container = document.getElementById("content-stats-container");

        // Verify container exists
        if (!container) {
          console.error("Content stats container not found");
          return;
        }

        // Clear any existing canvas
        while (container.firstChild) {
          container.removeChild(container.firstChild);
        }

        // Create new canvas
        const canvas = document.createElement("canvas");
        container.appendChild(canvas);

        // Get chart data
        const chartData = drupalSettings.contentStats;

        // Create chart
        new Chart(canvas.getContext("2d"), {
          type: "bar",
          data: {
            labels: chartData.labels,
            datasets: [
              {
                label: "Content Items",
                data: chartData.data,
                backgroundColor: chartData.colors,
                borderColor: "rgba(200, 200, 200, 1)",
                borderWidth: 1,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              title: {
                display: true,
                text: "Content Type Distribution",
              },
            },
            scales: {
              y: {
                beginAtZero: true,
                ticks: {
                  precision: 0,
                },
              },
            },
          },
        });
      });
    },
  };
})(jQuery, Drupal, drupalSettings);
