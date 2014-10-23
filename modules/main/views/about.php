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
      $('#slideshow').cycle({
        fx: 'fade',
        timeout: 5000,
        pager: '#pags1'
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
            <figure class="img-indent-r border-1"><img src="/images/p2_pic01.png" alt=""></figure>
            <div class="extra-wrap">
              <h3 class="pad4"><?php echo Kohana::lang("all.team");?></h3>
              <p class="color-2" style="font-size: 12px;"><?php  echo Kohana::lang("all.about_team_text"); ?></p>
            </div>
          </article>
        </div>
        <div class="wrapper pad3">
          <article class="grid_13 prefix_1 suffix_1 omega" style="width: 773px;">

            <div id="slideshow">
              <?php $cls = array("l",2,"l");foreach(array_chunk($members->as_array(), 3) as $members_group):?>
                  <section>
                    <div class="item wrapper" style="margin-left: 54px;">
                        <?php foreach($members_group as $k=>$client):?>
                        <div class="page1_b<?php echo $cls[$k]?>">
                         <figure class="border-1"><img width="223" height="253" src="/<?php echo $client->main_image()?>" alt=""></figure>
                          <a class="link-2" href="#"><?php echo $client->name()?></a> 
                          <br/>
                          <p class="color-2 p1"><?php echo $client->position()?></p>
                        </div>
                        <?php endforeach;?>
                    </div>
                  </section>
              <?php endforeach;?>
            </div>

            <div id="pags1"></div>
          </article>

        </div>
      </div>
    </div>
  </div>
</section>
<?php include Kohana::find_file("views","footer");?>