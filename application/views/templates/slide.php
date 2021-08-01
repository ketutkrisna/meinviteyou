          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top:-20px">
            <ol class="carousel-inner">
          <?php $tocount=0; foreach($slides as $scount): ?>
            <?php 
              if($tocount==0){
                $active='active';
              }else{
                $active='';
              }
            ?>
              <!-- <li data-target="#carouselExampleIndicators" data-slide-to="<?=$tocount++; ?>" class="<?=$active; ?>"></li> -->
          <?php endforeach; ?>
            </ol>
            <div class="carousel-inner" style="border-radius:10px;">
              <div class="carousel-item active">
                <img src="<?=base_url('assets/img/icons.png');?>" class="d-block w-100 img-thumbnail" alt="..." style="height:250px">
              </div>
          <?php foreach($slides as $ss): ?>
            <?php
              if($maxid['maxid']==$ss['id_posting']){
                $aslide='active';
              }else{
                $aslide='';
              } 
            ?>
              <div class="carousel-item">
                <img src="<?=base_url('assets/img/posting/'.$ss['foto_posting']);?>" class="d-block w-100 img-thumbnail" alt="..." style="height:250px">
              </div>
          <?php endforeach; ?>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>