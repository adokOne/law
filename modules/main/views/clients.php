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
          timeout: 5000,
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
            <figure class="img-indent border-1"><img src="/images/p4_pic1.png" alt=""></figure>
            <div class="extra-wrap">
              <h3 class="pad4 pad9"><?php echo Kohana::lang("all.be_our_client");?></h3>
              <p class="color-2 p6"><?php echo Kohana::lang("all.to_client_text");?></p>
               </div>
          </article>
        </div>
        <div class="wrapper pad10">
          <article class="grid_8 prefix_1 alpha">
            <h3 class="pad9 pad11"><?php echo Kohana::lang("all.our_clients")?></h3>
            <p class="color-3"><?php echo Kohana::lang("all.our_clients_text")?></p>
<!--             <ul class="list-2">
            <li><a href="#">Unde omnis iste natus error sit voluptatem </a></li>
            <li><a href="#">Accusantium doloremque laudan</a></li>
            <li><a href="#">Eaque ipsa quae ab illo inventore verita</a></li>
            <li><a href="#">Quasi architecto beatae vitae dicta</a></li>
            <li><a href="#">Nemo enim ipsam voluptatem quia volupt</a></li>
            <li><a href="#">Odit aut fugit sed quia consequuntu</a></li>
            </ul> -->
            </article>
          <article class="grid_13 prefix_1 suffix_1 alpha omega">
            <div id="slideshow2">
              <?php $cls = array("l",2);foreach(array_chunk($clients->as_array(), 4) as $client_group):?>
                  <section>
                    <div class="wrapper">
                      <?php foreach (array_chunk($client_group, 2) as $i => $clients_group):?>
                        <div class="page4_b<?php echo $cls[$i]?> wid1">
                          <?php foreach($clients_group as $k=>$client):?>
                          <div class="p<?php echo 2 - $k?>">
                           <figure class="border-1"><img widrh="223" height="118" src="/<?php echo $client->main_image()?>" alt=""></figure>
                            <a class="link-2" href="#"><?php echo $client->name?></a> 
                          </div>
                          <?php endforeach;?>
                        </div>
                      <?php endforeach;?>
                    </div>
                  </section>
              <?php endforeach;?>
            </div>
            <div id="pags2"></div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include Kohana::find_file("views","footer");?>