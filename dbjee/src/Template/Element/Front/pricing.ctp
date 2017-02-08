<div id="pricing">
<div class="section-title text-center center">
    <div class="overlay">
      <h2>Pricing</h2>
      <hr>
      <p>Your time is the most valuable thing you gain</p>
    </div>
  </div>
  <div class="container">
    
    <div class="row">
      <div class="portfolio-items" style="height:353px;">
          <?php foreach($prices as $price):?>
          <div class="col-sm-6 col-md-3 col-lg-3 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#" title="<?=$price->title?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h5><?=$price->title?></h5>
                <p style="margin: 0 auto -2px;"><?=$price->value?></p>
                <?php echo !empty($price->with_tax) ? '<span class="tax">+tax</span>' : ''; ?>
                <span>(<?=$price->unit?>)</span>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <?php endforeach;?>
        
        
      </div>
    </div>
  </div><br/><br/><br/><br/>
</div>

