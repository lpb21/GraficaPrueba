<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="shortcut icon" type="image/jpg" href="xxxxx.png" /> -->
    <title>Prueba de grafica Nro1</title>
  </head>
  <body>
    <div class="chartMenu">
      <p>CHART DE PRUEBA LG</p>
    </div>
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
        <button onclick="updateChart()">Traer datos</button>
      </div>
    </div>
    <!-- <script src="./js/index.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      //Bloque Fetch
      function updateChart(){
      async function fetchData(){
        //const url = 'http://localhost/ChartJS/src/finance.json';
        const url = 'http://localhost/ChartJS/financiero.json';
        //const url = '.finance.json';
        const respuesta = await fetch(url);
        console.log(respuesta);
        //se espera hasta que la respuesta halla sido completada
        const datapoints = await respuesta.json();
        console.log(datapoints);
        return datapoints;
        //return respuesta;
      };
      
    //   var ajax = new XMLHttpRequest();
    //   ajax.onreadystatechange = function(){
	// 				if (ajax.readyState == 4 && ajax.status == 200) {
	// 					//window.parent.window.alert(ajax.respuestaText);
	// 					window.parent.window.alert("exito");						
	// 				}if (ajax.readyState != 4 && ajax.status != 200) {						
	// 					window.parent.window.alert("Ha ocurrido un error");
	// 					return false;				
	// 				}
	// 			}
      

      fetchData().then(datapoints => {
        const mesJson = datapoints.reporteFinanciero[0].finanzas.map(
          function(index){
            return index.mes;
          })
          //console.log(mesJson);
          const ingresos = datapoints.reporteFinanciero[0].finanzas.map(
          function(index){
            return index.ingresos;
          })
          //console.log(ingresos);
          const nombreEmpresa = datapoints.reporteFinanciero.map(
          function(index){
            return index.nombreEmpresa;
          })
          //console.log(nombreEmpresa);
          console.log(nombreEmpresa);
          //console.log(ingresos);
          myChart.config.data.labels = mesJson;
          myChart.config.data.datasets[0].data = ingresos;
          myChart.config.data.datasets[0].label = nombreEmpresa;
          myChart.update();
    });
  }
    // setup 
    const data = {
      labels: ['Mes1', 'Mes2', 'Mes3', 'Mes4', 'Mes5', 'Mes6', 'Mes7', 'Mes8'],
      datasets: [{
        label: 'Plantilla de prueba',
        data: [18, 12, 6, 9, 12, 3, 9, 6],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)',
          'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(255, 206, 86, 1)',
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render bloque inicial
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    </script>

  </body>
</html>