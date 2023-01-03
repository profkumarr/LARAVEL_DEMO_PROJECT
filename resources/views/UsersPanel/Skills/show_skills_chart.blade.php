<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Skills</title>
</head>
<body>
    <h1 class="test-center">Skills</h1>
    <div class="container">
    <canvas id="myChart" style="width:75px; height:50px;" ></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                        var ctx = document.getElementById('myChart');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach($skills as $skill )
                                    '{{ $skill->technology }}',                                        
                                        @endforeach
                                    ],
                                datasets: [{
                                    label: 'Number of Score',
                                    data: [
                                        @foreach ($skills as $skill)
                                           {{ $skill->score }},
                                        @endforeach 
                                        ],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                        </script>

    </div>
    
</body>
</html>