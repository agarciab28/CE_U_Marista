@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/estadisticas.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Estadisticas')

@section('content')

  <div class="section container">
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Carreras</h5>
      </div>
    </div>
    <canvas id="chart1" width="400" height="200"></canvas>
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Genero</h5>
      </div>
    </div>
    <canvas id="chart2" width="400" height="200"></canvas>
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Grupos</h5>
      </div>
    </div>
    <canvas id="chart3" width="400" height="200"></canvas>
  </div>

@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script type="text/javascript">
  var ctx = document.getElementById('chart1');
  var ctx2 = document.getElementById('chart2');
  var ctx3 = document.getElementById('chart3');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            @foreach($alumnos as $alumno)
            '{{$alumno->id}}',
            @endforeach
          ],
          datasets: [{
              label: 'Catidad de estudiantes',
              data: [
                @foreach($alumnos as $alumno)
                '{{$alumno->cantidad}}',
                @endforeach
              ],
              backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
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
          labels: [
            @foreach($sexos as $sexo)
            '{{$sexo->sexo}}',
            @endforeach
          ],
          datasets: [{
              label: 'Genero',
              data: [
                @foreach($sexos as $sexo)
                '{{$sexo->cantidad}}',
                @endforeach
              ],
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
    type: 'pie',
    data: {
        labels: [
          @foreach($grupos as $grupo)
          '{{$grupo->materia}}',
          @endforeach
        ],
        datasets: [{
            label: 'Grupos',
            data: [
              @foreach($grupos as $grupo)
              '{{$grupo->cantidad}}',
              @endforeach
            ],
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
  </script>
@endsection
