<?php include Kohana::find_file("views","header");?>
<script type="text/javascript">
    $(document).ready(function() { 
      $('#bgSlider').bgSlider({
        duration:1000,
        images:['/images/bg-2.jpg','/images/bg-2.jpg','/images/bg-3.jpg'],
        preload:true,
        spinner:'.bg_spinner',
        nextBu:'.next',
        prevBu:'.prev',
        slideshow:false
      })
    }); 
</script>
<script type="text/javascript" src="/js/front/bg.js" ></script>


<section id="content">
  <div id="bgSlider"></div>
  <div class="main">
    <div class="content1 pad6">
      <div class="container_24  pad1">
        <div class="wrapper">
          <article class="grid_22 prefix_1 alpha">
          <h3 class="pad4"><?php echo  Kohana::lang("all.aries_of_practik")?></h3>
            <?php foreach($practiks as $i=>$practik):?>
              <div style="text-align: center;" class="fleft mar<?php echo $i==3 ? 2 : 1?>">
                <figure class="border-1"><img width="167" height="143" src="/<?php echo $practik->main_image();?>" alt=""></figure>
                <a style="text-align: center;" class="link-3" href="/spheres/<?php echo $practik->seo_name?>"><?php echo $practik->name();?></a> 
               <!--  <p style="text-align: center;" class="color-2 p1"><?php echo $practik->anons();?></p> -->
              </div>
            <?php endforeach;?>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include Kohana::find_file("views","footer");?>