    </div>
   <!--==============================footer=================================-->
    <footer>

            <div class="container_24">
        <div class="wrapper">

          <article class="grid_9 alpha">
              <h4><?php echo Kohana::lang("all.copiright")?></h4>
              <span class="footer-link">&copy;&nbsp;&nbsp;2014 |&nbsp;&nbsp;&nbsp;<?php echo Kohana::lang("all.company_name")?><span class="disp_bl"><!-- {%FOOTER_LINK} --></span></span>
              
               <h4><?php echo Kohana::lang("all.follow")?></h4>
               <div class="icones">
               <a href="#">facebook</a>
               <a href="#">google plus</a>
               <a href="#">twitter</a>
               </div>
             </article>
             
              <article class="grid_5">
              <h4><?php echo Kohana::lang("all.address")?></h4>
             <div class="overflow">
                  <dl class="text-1">
                    <dt><?php echo Kohana::lang("all.company_address")?></dt>
                   <dd><br><?php echo Kohana::lang("all.phone")?> :  <?php echo Kohana::lang("all.company_phone_1")?></dd>
                   <!--  <dd><?php echo Kohana::lang("all.phone")?> :  <?php echo Kohana::lang("all.company_phone_2")?></dd> -->
                    
                    <dd class="color-1">E-mail: <a  class="color-1" href="mailto:<?php echo Kohana::lang("all.company_mail")?>"><?php echo Kohana::lang("all.company_mail")?></a> </dd>
                  </dl>
              </div>
           </article>
           <article class="grid_9 omega prefix_1">
              <h4><?php echo Kohana::lang("all.legal_topics")?></h4>
              <?php foreach(array_chunk($footer_links->as_array(), ceil($footer_links->count()/2)) as $links):?>
              <article class="grid_4 alpha">
                <ul class="list-1">
                  <?php foreach($links as $link):?>
                    <li><a href="/spheres/<?php echo $link->seo_name?>"><?php echo $link->name()?></a></li>
                  <?php endforeach;?>
                </ul>
              </article> 
              <?php endforeach;?>
              <div class="clear"></div>
           </article>
           <div class="clear"></div>
         </div>
      </div>

    </footer>  
</body>
</html>