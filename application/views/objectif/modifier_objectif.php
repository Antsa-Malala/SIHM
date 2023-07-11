<div id="goal">
    
  <div class="page-header align-items-start min-vh-100" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-secondary shadow-secondary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Modifier votre objectif</h4>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start" method="post" action=<?php echo site_url("Objectif/update_objectif_trait");?>>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="objectif" value="0" id="customRadio1"> 
                  <label class="custom-control-label" for="customRadio1">Perdre du poids</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="objectif" value="1" id="customRadio2">
                  <label class="custom-control-label" for="customRadio2">Augmenter mon poids</label>
                </div> 
                <div class="form-check">
                  <br>
                  <div>
                    <label >Poids à perdre/augmenter</label>
                  </div>
                  <div class="dropdown">
                    <select class="form-control" name="valeur">
                    <?php 
                    for($i=1;$i<16;$i++){ 
                      if($value!=$i){?>
                          <option value=<?php echo $i;?>><?php echo $i;?></option>
                      <?}
                      else{?>
                          <option value=<?php echo $i;?> selected><?php echo $i ;?></option>
                      <?}
                    }?>
                    </select>                        
                  </div>
                </div>             
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn bg-gradient-dark w-100">Modifier</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>