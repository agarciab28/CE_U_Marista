var ctx = document.getElementById('chart1');
var ctx2 = document.getElementById('chart2');
var ctx3 = document.getElementById('chart3');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Carrera 1', 'Carrera 2', 'Carrera 3', 'Carrera 4', 'Carrera 5'],
        datasets: [{
            label: 'Carreras',
            data: [101, 62, 75, 110, 115],
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Masculino', 'Femenino'],
        datasets: [{
            label: 'Genero',
            data: [154, 180],
            backgroundColor: [
              'rgba(255, 206, 86, 1)',
              'rgba(153, 102, 255, 1)'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart3 = new Chart(ctx3, {
    type: 'radar',
    data: {
        labels: ['Grupo 1', 'Grupo 2', 'Grupo 3', 'Grupo 4', 'Grupo 5'],
        datasets: [{
            label: 'Grupos',
            data: [150, 135, 180, 53, 75],
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
