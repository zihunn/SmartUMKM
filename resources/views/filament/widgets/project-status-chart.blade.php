<div class="bg-white rounded-lg shadow p-4">
    <h2 class="text-lg font-semibold">Status Proyek</h2>
    <canvas id="projectStatusChart"></canvas>
    <script>
        const projectStatusCtx = document.getElementById('projectStatusChart').getContext('2d');
        new Chart(projectStatusCtx, {
            type: 'bar',
            data: {
                labels: @json($this->getData()['labels']),
                datasets: [{
                    label: 'Jumlah Proyek',
                    data: @json($this->getData()['data']),
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                }]
            },
        });
    </script>
</div>
