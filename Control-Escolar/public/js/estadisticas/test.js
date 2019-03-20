var ctx = document.getElementById('chart1');
var ctx2 = document.getElementById('chart2');
var ctx3 = document.getElementById('chart3');
var ctx4 = document.getElementById('chart4');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['18 - 24', '25 - 31', '32 - 37', '38 - 44', '45 - 51'],
        datasets: [{
            label: 'Edad',
            data: [12, 19, 3, 5, 2],
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
            data: [12, 19],
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
        labels: ['Astenia', 'Adinamia', 'Anorexia', 'Fiebre', 'Perdida de Peso'],
        datasets: [{
            label: 'Sintomas',
            data: [20, 3, 13, 14, 6],
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

var myChart4 = new Chart(ctx4, {
    type: 'pie',
    data: {
        labels: ['Aparato Hematologico', 'Sistema Endocrino', 'Sistema Nervioso', 'Sistema Sensorial', 'Sistema Osteomuscular'],
        datasets: [{
            label: 'Aparatos',
            data: [14, 17, 5, 6, 6],
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
