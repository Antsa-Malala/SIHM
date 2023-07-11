
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('../assets/img/plant-based-food-mc-220323-02-273c7b.webp')">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Détails du régime <?php echo $detail[0]['id_regime'];?></h1>
          <p class="lead text-white mt-3">Ar <?php echo $prix;?></p>
          <button type="submit" class="btn bg-white text-dark">Exporter en pdf</button>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="card card-body blur shadow-blur mt-n9" style="width: 800px;margin-left: auto;margin-right: auto;">
  <form class="p-3" id="contact-form" method="post" action = <?php echo site_url("Regime/insert_regime_achetee_trait"); ?> >
    <input type="hidden" name="id_regime" value=<?php echo $detail[0]['id_regime'];?>>
    <?php foreach($detail as $elt) {?>
        <div>
            <h5><?php echo $elt['nom_plat']; ?></h5>
            <p>Prix : Ar <?php echo $elt['prix']; ?></p>
        </div>
        <div>
            <h5>Activité : <?php echo $elt['description_activite']; ?></h5>
            <p>15mn </p>
        </div>
        <?php } ?>
        
        <div class="row">
          <div class="col-md-6 text-end ms-auto">
                <button type="submit" class="btn bg-gradient-info mb-0">Valider l'achat du régime</button>
                </div>
            </div>
    </form>
</div>
