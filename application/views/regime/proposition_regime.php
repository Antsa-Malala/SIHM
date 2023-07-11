  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url(<?php echo base_url("/assets/img/how-to-eat-healthy.webp");?>);">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">La santé et la gourmandise se rencontrent pour vous offrir une expérience unique.</h1>
            <p class="lead mb-4 text-white opacity-8">Préparez-vous à savourer des régimes alimentaires équilibrés avec une touche de plaisir ! </p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <?php foreach( $list_regime as $row ){?>
            <div class="col-md-4 mb-4">
              <div class="card shadow-lg">
                <span class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">Regime <?php echo $row['id_regime'];?></span>
                <div class="card-header text-center pt-4 pb-3">
                  <h1 class="font-weight-bold mt-2">
                    <small class="text-lg mb-auto">Ar </small><?php echo $row['prix'];?><small class="text-lg"></small>
                  </h1>
                </div>
                <div class="card-body text-lg-start text-center pt-0">
                  <div class="d-flex justify-content-lg-start justify-content-center p-2">
                    <i class="material-icons my-auto">done</i>
                    <span class="ps-3"> <?php echo $row['objectif']." ".$row['poids'];?> Kg</span>
                  </div>
                  <a href=<?php echo site_url("Regime/detail_regime/".$row['id_regime']);?> class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                    Acheter
                    <i class="fas fa-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>  
          <?php } ?>   
        </div>
      </div>
    </section>
  </div>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
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
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>