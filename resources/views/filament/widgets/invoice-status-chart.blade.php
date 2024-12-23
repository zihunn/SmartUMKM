<div class="bg-white rounded-lg shadow p-4">
    <h2 class="text-lg font-semibold">Jumlah Invoice Berdasarkan Status</h2>
    <canvas id="invoiceStatusChart"></canvas>
    <script>
        const invoiceStatusCtx = document.getElementById('invoiceStatusChart').getContext('2d');
        new Chart(invoiceStatusCtx, {
            type: 'pie',
            data: {
                labels: @json($this->getData()['labels']),
                datasets: [{
                    data: @json($this->getData()['data']),
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
        });
    </script>
</div>
