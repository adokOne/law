
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Юридическая компания Каирос</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <?php echo css::render();?>
    <?php echo js::render();?>
     
      <script type="text/javascript">
      
      $(window).load(function(){
         $().UItoTop({ easingType: 'easeOutQuart' });
      })
   </script> 
       
   <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
             <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
   <![endif]-->
    <!--[if lt IE 9]>
         <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
   <![endif]-->
</head>
<body id="page1">
   <div class="extra">
       
        <!--==============================header=================================-->
        <header>
            <div class="row-top">
            <div class="main1">

               <div class="fleft relat"> 
               <span class="logo_menu"></span>
               <h1><a href="/">alliance</a></h1>
              
<!--                <div class="menu2_holder"> <ul class="menu2">
                        <li><a href="#">find experts</a></li>
                        <li><a href="#">legal dictionary</a></li>
                        <li><a href="#">qualified solutions</a></li>
                        <li><a href="#">companies &amp; trust</a></li>
              </ul>
            </div> -->
               
               </div>

                <nav>
                    <ul class="menu">
                        <li><a class="<?php echo url::current() == 'main' ? 'active' : '' ?>" href="/"><?php echo Kohana::lang("all.menu.index");?></a></li>
                        <li><a href="#"><?php echo Kohana::lang("all.menu.about");?></a>
                            <ul>
                                <!-- <li><a class="<?php echo url::current() == 'about' ? 'active' : '' ?>" href="/about"><?php echo Kohana::lang("all.menu.all");?></a></li> -->
                                <li><a class="<?php echo url::current() == 'about' ? 'active' : '' ?>" href="/about"><?php echo Kohana::lang("all.menu.team");?></a></li>
                                <li><a class="<?php echo url::current() == 'news' ? 'active' : '' ?>" href="/news"><?php echo Kohana::lang("all.menu.news");?></a></li>

                            </ul>
                        </li>
                        <li><a class="<?php echo url::current() == 'spheres' ? 'active' : '' ?>" href="/spheres"><?php echo Kohana::lang("all.menu.spheres");?></a></li>
                        <li><a class="<?php echo url::current() == 'clients' ? 'active' : '' ?>" href="/clients"><?php echo Kohana::lang("all.menu.clients");?></a></li>
                        <li class="last_item"><a  class="<?php echo url::current() == 'contacts' ? 'active' : '' ?>"href="/contacts"><?php echo Kohana::lang("all.menu.contacts");?></a></li>

                    </ul>
                </nav>
                <div class="clear"></div>
                </div>
            </div>
        </header>
         


