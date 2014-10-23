<?php include Kohana::find_file("views","header");?>
<script type="text/javascript">
    $(document).ready(function() { 
      $('#bgSlider').bgSlider({
        duration:1000,
        images:['/images/bg-1.jpg','/images/bg-2.jpg','/images/bg-3.jpg'],
        preload:true,
        spinner:'.bg_spinner',
        nextBu:'.next',
        prevBu:'.prev',
        slideshow:false
       })
        $('#slideshow2').cycle({
          fx: 'fade',
          timeout: 0,
          pager: '#pags2'
        }); 
     }); 

  </script>
  <script type="text/javascript" src="/js/front/bg.js" ></script>
<section id="content">
  <div id="bgSlider"></div>
  <div class="main">
    <div class="content1 pad12">
      <div class="container_24  pad1">
        <div class="wrapper">
          <article class="grid_22 prefix_1 suffix_1 alpha omega">
            
            <div class="extra-wrap">
              <h3 class="pad4"><?php echo $news->name();?></h3>
              <?php echo $news->text();?>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include Kohana::find_file("views","footer");?>