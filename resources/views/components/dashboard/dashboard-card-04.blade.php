<div class="flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Pemasukan dan Pengeluaran</h2>
    </header>
    <div id="dashboard-card-04-legend" class="px-5 py-3">
        <ul class="flex flex-wrap gap-x-4"></ul>
    </div>
    <div class="grow">
        <canvas id="dashboard-card-04" width="595" height="248"></canvas>
    </div>
</div>

<!-- Load Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Inisialisasi Chart -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('dashboard-card-04').getContext('2d');
    const chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [
          {
            label: 'Pemasukan',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(117, 207, 182, 1)',
            borderWidth: 1
          },
          {
            label: 'Pengeluaran',
            data: [8, 15, 7, 12, 6, 9],
            backgroundColor: 'rgba(255, 185, 135, 1)',
            borderWidth: 1
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>
