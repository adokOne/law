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

    }); 
  $(function(){
   $('#form1').forms({
    ownerEmail:'#'
   })
  })

  </script>
  <script type="text/javascript" src="/js/front/bg.js" ></script>
<section id="content">
  <div id="bgSlider"></div>
  <div class="main">
    <div class="content1 pad14">
      <div class="container_24  pad1">
        <div class="wrapper">
          <article class="grid_22 prefix_1 suffix_1 alpha omega">
<div class="map box-img  img-indent-r">
<div class="border-1">                
<iframe width="485" height="255" src="http://regiohelden.de/google-maps/map_en.php?width=485&amp;height=255&amp;hl=en&amp;q=%20%D0%9A%D0%B8%D0%B5%D0%B2%2C%20%D1%83%D0%BB.%D0%91%D0%B0%D0%B3%D0%B3%D0%BE%D0%B2%D1%83%D1%82%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F%209+(Legal%20company%20Kairos)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
              </div>
              <div class="extra-wrap mar3">
              <h3 class="pad4 pad9"><?php echo Kohana::lang("all.find_us");?></h3>
              <div class="adress1">
            <dl>
              <dt><?php echo Kohana::lang("all.company_address")?></dt>
              
              <dd> <span><?php echo Kohana::lang("all.phone")?>:</span> <?php echo Kohana::lang("all.company_phone_1")?> </dd>
              <dd> <span><?php echo Kohana::lang("all.phone")?>:</span> <?php echo Kohana::lang("all.company_phone_1")?></dd>
              <dd>E-mail: <a class="mail-1" href="mailto:<?php echo Kohana::lang("all.company_mail")?>"><?php echo Kohana::lang("all.company_mail")?></a> </dd>
            </dl></div>
          </div>
        
          </article>
        </div>
        
        <div class="wrapper">
          <article class="grid_22 prefix_1 suffix_1 alpha omega">
          <h3 class="pad13 pad5"><?php echo Kohana::lang("all.contact_us");?></h3>
           <form id="form1">
                <div class="success"> <?php echo Kohana::lang("all.message_sended");?> <strong><?php echo Kohana::lang("all.in_touch");?></strong> </div>
                <fieldset class="wrapper">
                  <div class="col1">
                  <label class="name">
                    <input type="text" value="<?php echo Kohana::lang("all.name"); ?>:">
                    <span class="error">*<?php echo Kohana::lang("all.required_name"); ?>.</span> <span class="empty">*<?php echo Kohana::lang("all.required"); ?></span> </label>
                  <label class="email">
                    <input type="email" value="E-mail:">
                    <span class="error">*<?php echo Kohana::lang("all.required_mail"); ?>.</span> <span class="empty">*<?php echo Kohana::lang("all.required"); ?>.</span> </label>
                  <label class="phone">
                    <input type="tel" value="<?php echo Kohana::lang("all.phone"); ?>:">
                    <span class="error">*<?php echo Kohana::lang("all.required_phone"); ?>.</span> <span class="empty">*<?php echo Kohana::lang("all.required"); ?>.</span> </label>
                    </div>
                  <div class="col2"><label class="message">
                    <textarea><?php echo Kohana::lang("all.message"); ?>:</textarea>
                    <span class="error">*<?php echo Kohana::lang("all.required_message"); ?>.</span> <span class="empty">*<?php echo Kohana::lang("all.required"); ?>.</span> </label></div>
                  <br class="clear">
                  <div class="btns"> <a class="btn-1" data-type="reset"><?php echo Kohana::lang("all.clear"); ?></a> <a class="btn-1" data-type="submit"><?php echo Kohana::lang("all.send"); ?></a></div>
                </fieldset>
              </form>

          </article>
        </div>
       
      </div>
    </div>
  </div>
</section>
<?php include Kohana::find_file("views","footer");?>