<script src=<?php echo base_url("assets/js/Chart.js"); ?>></script>
<script src=<?php echo base_url("assets/js/chart.min.js"); ?>></script>

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
              <h1 class="text-gradient text-primary">+<span id="state1" countTo=<?php echo $nbruser;?>>0</span></h1>
              <h5 class="mt-3">Nombre des membres</h5>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-6">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary">+<span id="state2" countTo=<?php echo $nbr; ?>>0</span></h1>
              <h5 class="mt-3">Nombre des menus vendus</h5>
            </div>
            <hr class="vertical dark">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div  class="mx-12 ">
        <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
          <?php foreach( $regimevendu as $elt ) {?>
            <div class="p-3 info-horizontal">
              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                <i class="fas fa-seedling opacity-10"></i>
              </div>
              <div class="description ps-3">
                <p class="mb-0">Régime <?php echo $elt['id_regime'];?> <br> <?php echo $elt['nombre'];?> vendus</p>
              </div>
            </div>
          <?php } ?>
    </div>
  <div>
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Statistiques des menus vendus
    </h2>
    <div class="card">
        <div class="card-body">
          <canvas id="chart" width="1000" height="500"></canvas>
        </div>
    </div>
  </div>
</section>
</div>

<script src=<?php echo base_url("assets/js/plugins/countup.min.js");?>></script>
<script type="text/javascript">
  if (document.getElementById('state1')) {
    let countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
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
<script>
    var year = [2020,2021,2022,2023];
    var sold = [9,5,4,12];
    var ctx = document.getElementById("chart").getContext('2d');
    ctx.height = 500;
  
    console.log(ctx);
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: year,
              datasets: [
                      {
                          label: "Quantity of Menu Sold",
                          data: sold,
                          borderWidth: "0",
                          backgroundColor:"#8e5ea2"
                      }
              ]
          },
          options: {
              scales: {
                  yAxis: {
                      ticks: {
                          beginAtZero: true
                      }
                  }
              }
          }
      });
</script>
