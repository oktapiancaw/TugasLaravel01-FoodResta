
<div class="row my-2 mb-5">
    <div class="col-6">
        <div id="canvas-holder">
            <canvas id="myPieChart"></canvas>
        </div>
    </div>
    <div class="col-6">
        <div id="canvas-holder">
            <canvas id="myDoughnutChart"></canvas>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script>
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Foods', 'Drinks', 'Desserts'],
            datasets: [{
                label: 'Type of Foods',

                data: {!! json_encode($dataset) !!},

                backgroundColor: [
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(255, 206, 86, 0.4)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        // options: {
        //     scales: {
        //         yAxes: [{
        //             ticks: {
        //                 beginAtZero: true
        //             }
        //         }]
        //     }
        // }
    });
    var ctx2 = document.getElementById('myDoughnutChart').getContext('2d');
    var myChart = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Foods', 'Drinks', 'Desserts'],
            datasets: [{
                label: 'Type of Foods',

                data: {!! json_encode($dataset) !!},

                backgroundColor: [
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(255, 206, 86, 0.4)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
    });
</script>