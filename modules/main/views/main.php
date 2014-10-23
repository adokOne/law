<?php include Kohana::find_file("views","header");?>

        <!--==============================content================================-->
<section id="content">
  <div class="slider_holder"> 
    <div class="slider">
      <ul class="items">
          <?php foreach(Kohana::lang("all.slider") as $i=>$text):?>
            <li><img src="/images/slide<?php echo $i + 1?>.jpg" alt="" /><span class="banner"><?php echo $text?></span></li>
          <?php endforeach;?>
      </ul>
    </div>
    <div class="slider_inner">
      <a href="#" class="prev"></a> 
      <a href="#" class="next"></a>
    </div>
    <div class="footer_nav">               
    </div>
  </div>
</section>



<?php include Kohana::find_file("views","footer");?>