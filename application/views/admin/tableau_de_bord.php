<script type="text/javascript">
  function drawChart() {
      var ctx = document.getElementById("myChart").getContext("2d");
      var datasets = [];
      var data = {
  labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
  datasets: datasets 
};;
      var options = {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            fontColor: 'black'
          }
        },  
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true 
            }
          }]
        }
      };

      var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
      });
  }

</script>

<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('../assets/img/plant-based-food-mc-220323-02-273c7b.webp')">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Votre tableau de bord</h1>
          <p class="lead text-white mt-3">Consultez vos données pour prendre conscience de la situation actuelle </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-6">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary">+<span id="state1" countTo="70">0</span></h1>
              <h5 class="mt-3">Nombre des membres</h5>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-6">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> +<span id="state2" countTo="15">0</span></h1>
              <h5 class="mt-3">Nombre des menus vendus</h5>
            </div>
            <hr class="vertical dark">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Statistiques des menus vendus
    </h2>
    <canvas id="myChart" width="1000" height="500"></canvas>
  </div>
</section>
</div>

<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
