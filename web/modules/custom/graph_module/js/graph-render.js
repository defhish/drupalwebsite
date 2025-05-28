(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.graphModule = {
    attach: function (context, settings) {
      if (context !== document || !drupalSettings.graphModule) return;

      $(document).ready(function () {
        const container = document.getElementById("graph-container");
        const canvas = document.getElementById("graph-canvas");
        const selector = document.getElementById("graph-type-selector");

        if (!canvas || !selector) return;

        const ctx = canvas.getContext("2d");
        const graphData = drupalSettings.graphModule;

        // Function to generate colors
        const generateColors = (data, chartType) => {
          if (chartType === "pie") {
            return data.map(() => {
              const r = Math.floor(Math.random() * 255);
              const g = Math.floor(Math.random() * 255);
              const b = Math.floor(Math.random() * 255);
              return `rgba(${r}, ${g}, ${b}, 0.7)`;
            });
          } else {
            return data.map((value) =>
              value > 50 ? "rgba(255, 0, 0, 0.7)" : "rgba(54, 162, 235, 0.7)"
            );
          }
        };

        // Function to render chart
        const renderChart = (type) => {
          const backgroundColors = generateColors(graphData.data, type);

          if (canvas.chart) {
            canvas.chart.destroy();
          }

          canvas.chart = new Chart(ctx, {
            type: type,
            data: {
              labels: graphData.labels,
              datasets: [
                {
                  label: "User Data",
                  data: graphData.data,
                  backgroundColor: backgroundColors,
                  borderColor: "rgba(200, 200, 200, 1)",
                  borderWidth: 1,
                },
              ],
            },
            options: {
              responsive: false,
              maintainAspectRatio: false,
              animation: { duration: 0 },
              plugins: {
                legend: {
                  position: "top",
                  labels: {
                    generateLabels: function (chart) {
                      if (chart.config.type === "pie") {
                        return chart.data.labels.map((label, i) => ({
                          text: `${label}: ${chart.data.datasets[0].data[i]}`,
                          fillStyle: chart.data.datasets[0].backgroundColor[i],
                          hidden: false,
                          index: i,
                        }));
                      }
                      return Chart.defaults.plugins.legend.labels.generateLabels(
                        chart
                      );
                    },
                  },
                },
                title: {
                  display: true,
                  text: "Your Data Visualization",
                },
                tooltip: {
                  callbacks: {
                    label: function (context) {
                      return `${context.label}: ${context.raw}`;
                    },
                  },
                },
              },
              scales:
                type === "pie"
                  ? {}
                  : {
                      y: {
                        beginAtZero: true,
                      },
                    },
            },
          });
        };

        // Initial chart render
        renderChart(bar);

        // Event listener for dropdown
        selector.addEventListener("change", function () {
          const selectedType = selector.value;
          renderChart(selectedType);
        });

        // Handle resize
        window.addEventListener("resize", function () {
          canvas.width = container.offsetWidth;
          canvas.height = container.offsetHeight;
          if (canvas.chart) {
            canvas.chart.resize();
          }
        });

        // Set initial canvas dimensions
        canvas.width = container.offsetWidth;
        canvas.height = container.offsetHeight;
      });
    },
  };
})(jQuery, Drupal, drupalSettings);
