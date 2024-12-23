<div class="bg-white rounded-lg shadow p-4">
    <h2 class="text-lg font-semibold">Jenis Bisnis Client</h2>
    <canvas id="businessTypeChart"></canvas>
    <script>
        const businessTypeCtx = document.getElementById('businessTypeChart').getContext('2d');
        new Chart(businessTypeCtx, {
            type: 'doughnut',
            data: {
                labels: @json($this->getData()['labels']),
                datasets: [{
                    data: @json($this->getData()['data']),
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                }]
            },
        });
    </script>
</div>
