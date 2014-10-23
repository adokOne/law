<div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

        <header role="heading">
          <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
          <h2>Редактирование Клиента</h2>        

        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
        <div class="widget-toolbar" role="menu">
          <a  href="javascript:void(0);" class="active btn-warning btn button-icon jarviswidget-toggle-btn">RU</a>
          <a  href="javascript:void(0);" class="btn-warning btn button-icon jarviswidget-toggle-btn" style="margin-left:10px;">UK</a>
        </div>
        </header>

        <!-- widget div-->
        <div role="content">
          
          <!-- widget edit box -->
          <div class="jarviswidget-editbox">
            <!-- This area used as dropdown edit box -->
            
          </div>
          <!-- end widget edit box -->
          
          <!-- widget content -->
          <div class="widget-body no-padding">
            
            <form action="/admin/clients/update" id="checkout-form" class="smart-form" method="post" enctype="multipart/form-data"> 

              <fieldset>
                <div class="row">
                  <input type="hidden" name="object[id]" value="<?php echo $object->id?>"/>
                  <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-tag"></i>
                        <input required="required" type="text" name="object[name]" placeholder="Название" value="<?php echo $object->name?>">
                      </label>
                  </section>
                  <section class="col col-6">
                    <?php foreach(Kohana::config('multi_lang.allowed_languages') as $k=>$v): $f = "desc_".$k;?>
                      <label class="textarea lang lang_<?php echo $k;?>"> 
                        <i class="icon-append fa fa-comment"></i>                   
                        <textarea   required="required" rows="6" name="object[desc_<?php echo $k;?>]" placeholder="Описание"><?php echo $object->$f;?></textarea> 
                      </label>
                    <?php endforeach;?>
                  </section>
                </div>
              </fieldset>

              <fieldset>
                <section class="col col-6" style="text-align: center;">
                  <img style="-webkit-border-radius: 500px;-moz-border-radius: 500px;border-radius: 500px;"src="<?php echo url::base().$object->main_image()?>">
                  <label for="file" class="input input-file">
                    <div class="button">
                      <input type="file" name="main_pic" onchange="$(this).parent().next().val( this.value)">
                      Загрузить
                    </div>
                    <input type="text" placeholder="Лого" readonly="" value="">
                  </label>
                </section>
              </fieldset>

              <footer>
                <button type="submit" class="btn btn-primary">
                  Зберегти
                </button>
              </footer>
            </form>
          </div>
          <!-- end widget content -->
          
        </div>
        <!-- end widget div -->
        
      </div>
<script type="text/javascript">
$(document).ready(function(){
  $(".button-icon").click(function(ev){
    ev.preventDefault();
    if($(this).hasClass("active")) return;
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
    var lang = $(this).text().toLowerCase();
    change_lang(lang);
  });
  change_lang(window.language)
})

function change_lang(lang){
  $(".lang").hide();
  $(".lang input,.lang textarea").removeAttr("required");
  $(".lang_"+lang).show();
  $(".lang_"+lang+" input,.lang_"+lang+" textarea").attr("required","required");
}
</script>