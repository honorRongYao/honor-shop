<?php namespace ProcessWire;
 //销售属性
 $product_sales=array();
 foreach($page->product_sale_variation as $k=>$v){
   $product_sales[$k]=array();
   $size=array();
   $quantity=array();
   foreach($v->product_stock_and_size as $s){
     $size[]=$s->product_size->title;
     $quantity[]=$s->product_quantity;
   }
   //颜色
   $product_sales[$k][0]=$v->product_color->title;
   //大小
   $product_sales[$k][1]=$size;
   //数量
   $product_sales[$k][2]=$quantity;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="M_Adnan">
  <title></title>

  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css"  href="<?=$template_url?>rs-plugin/css/settings.css" media="screen" />

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
  <link  href="<?=$template_url?>css/ionicons.min.css" rel="stylesheet">
  <link  href="<?=$template_url?>css/main.css" rel="stylesheet">
  <link  href="<?=$template_url?>css/style.css" rel="stylesheet">
  <link  href="<?=$template_url?>css/responsive.css" rel="stylesheet">

  <!-- JavaScripts -->
  <script src="<?=$template_url?>js/modernizr.js"></script>

  <!-- Online Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .vclose { position:absolute;right:4%; top:2%; border-radius:100%; cursor: pointer; }
  </style>
</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>

<!-- Wrap -->
<div id="wrap"> 
  
  <!-- header -->
  <?php  require_once "common/header.php"?>
  
  <!--======= SUB BANNER =========-->
  <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-image:url('<?=$page->product_banner_image->size(1919,817)->httpUrl?>')">
    <div class="position-center-center">
      <div class="container">
        <h4><?=$page->product_banner_title?></h4>
        <p><?=$page->product_banner_content?></p>
        <ol class="breadcrumb">
          <li><a  href="<?=$template_url?>#">Home</a></li>
          <li><a  href="<?=$template_url?>#">SHOP</a></li>
          <li class="active">tshirt</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Popular Products -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- SHOP DETAIL -->
        <div class="shop-detail">
          <div class="row"> 
            
            <!-- Popular Images Slider -->
            <div class="col-md-8"> 
              
              <!-- Images -->
              <div class="row">
                <div class="col-sm-6 margin-bottom-30"> <img class="img-responsive" src="<?=$template_url?>images/large-img-2-1.jpg" alt=""> </div>
                <div class="col-sm-6 margin-bottom-30"> <img class="img-responsive" src="<?=$template_url?>images/large-img-2-2.jpg" alt=""> </div>
                <div class="col-sm-6 margin-bottom-30 videolist" vpath="<?=$template_url?>images/v2.jpg" ipath="https://blz-videos.nosdn.127.net/1/OverWatch/AnimatedShots/Overwatch_AnimatedShot_CinematicTrailer.mp4">
                  <img src="<?=$template_url?>images/v2.jpg"  class="img-responsive"/>
                  <img src="<?=$template_url?>images/play.png" class="close-play"  style=" width:50px; height:50px; position: absolute; left:45%; top:45%; z-index:99; border-radius:100%;"/>
                </div>
                <div class="videos" style="display:none;  position:fixed;"></div>
                <input type="hidden" id="close-tag" value="<?=$template_url?>images/close.jpg">
              </div>
            </div>
            
            <!-- Content -->
            <div class="col-md-4">
              <h4 class="text-center"><?=$page->title?></h4>
              <span class="price text-center"><small>$</small><?=$page->product_price?></span>
              <!-- <ul class="item-owner row">
                <li class="col-xs-6">Designer :<span> ABC Art</span></li>
                <li class="col-xs-6">Brand:<span> LimeWood</span></li>
              </ul> -->
              
              <!-- Item Detail -->
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus ligula a scelerisque gravida. Nullam laoreet tortor ac maximus alique met, consectetur adipiscing elit. Vestibulum finibus ligula a scelerisque gravida. Nullam</p> -->
              
              <!-- Short By -->
              <div class="some-info">
                <ul class="row margin-top-30">
                  <li class="col-xs-4">
                    <div class="quinty color"> 
                      <select class="selectpicker">
                        <?php
                          foreach($product_sales as $v){
                            echo '<option onchange="changeColor('.$v[1].')">'.$v[0].'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </li>
                  <li class="col-xs-4">
                    <div class="quinty"> 
                      <select class="selectpicker size">
                        <?php
                          foreach($product_sales as $v){
                            foreach($v[1] as $s){
                              echo '<option>'.$s.'</option>';
                            }
                            break;
                          }
                        ?>
                      </select>
                    </div>
                  </li>
                  <!-- LIKE -->
                  <li class="col-xs-4"> <a  href="<?=$template_url?>#." class="like-us"><i class="icon-heart"></i></a> </li>
                  
                  <!-- ADD TO CART -->
                  <li class="col-xs-12"> <a  href="<?=$template_url?>#." class="btn">ADD TO CART</a> </li>
                </ul>
                
                <!-- INFOMATION -->
                <div class="inner-info">
                  <h6>DELIVERY INFORMATION</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus ligula a scelerisque gravida. Nullam laoreet tortor ac maximus alique met, consectetur adipiscing elit. </p>
                  <h6>SHIPPING & RETURNS</h6>
                  <h6>SHARE THIS PRODUCT</h6>
                  
                  <!-- Social Icons -->
                  <ul class="social_icons">
                    <li><a  href="<?=$template_url?>#."><i class="icon-social-facebook"></i></a></li>
                    <li><a  href="<?=$template_url?>#."><i class="icon-social-twitter"></i></a></li>
                    <li><a  href="<?=$template_url?>#."><i class="icon-social-tumblr"></i></a></li>
                    <li><a  href="<?=$template_url?>#."><i class="icon-social-youtube"></i></a></li>
                    <li><a  href="<?=$template_url?>#."><i class="icon-social-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
            <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
            <li role="presentation"><a href="#review" role="tab" data-toggle="tab">REVIEW (03)</a></li>
            <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">INFORMATION</a></li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content animate fadeInUp" data-wow-delay="0.4s"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade in active" id="descr">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed lectus id nisi interdum mollis. Nam congue tellus quis elit mattis congue. Aenean eu massa sed mauris hendrerit ornare sed eget ante. 
                Vestibulum id eros quam. Nunc volutpat at magna gravida eleifend. Phasellus sit amet nisi tempus, tincidunt elit ac, tempor metus. <br>
              </p>
              <h6>THE SIMPLE FACTS</h6>
              <ul>
                <li>
                  <p>Praesent faucibus, leo vitae maximus dictum,</p>
                </li>
                <li>
                  <p> Donec porta ut lectus </p>
                </li>
                <li>
                  <p> Phasellus maximus velit id nisl</p>
                </li>
                <li>
                  <p> Quisque a tellus et sapien aliquam sus</p>
                </li>
                <li>
                  <p> Donec porta ut lectus </p>
                </li>
                <li>
                  <p> Phasellus maximus velit id nisl</p>
                </li>
              </ul>
            </div>
            
            <!-- REVIEW -->
            <div role="tabpanel" class="tab-pane fade" id="review">
              <h6>3 REVIEWS FOR SHIP YOUR IDEA</h6>
              
              <!-- REVIEW PEOPLE 1 -->
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="images/avatar-1.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.”</p>
                  <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                </div>
              </div>
              
              <!-- REVIEW PEOPLE 1 -->
              
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="images/avatar-2.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.”</p>
                  <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                </div>
              </div>
              
              <!-- ADD REVIEW -->
              <h6 class="margin-t-40">ADD REVIEW</h6>
              <form>
                <ul class="row">
                  <li class="col-sm-6">
                    <label> *NAME
                      <input type="text" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label> *EMAIL
                      <input type="email" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label> *YOUR REVIEW
                      <textarea></textarea>
                    </label>
                  </li>
                  <li class="col-sm-6"> 
                    <!-- Rating Stars -->
                    <div class="stars"> <span>YOUR RATING</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  </li>
                  <li class="col-sm-6">
                    <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POST REVIEW</button>
                  </li>
                </ul>
              </form>
            </div>
            
            <!-- TAGS -->
            <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
          </div>
        </div>
        
      </div>
    </section>
    
    <!-- Popular Products -->
    <section class="light-gray-bg padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>YOU MAY LIKE IT</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
        
        <!-- Popular Item Slide -->
        <div class="papular-block block-slide"> 
          
          <!-- Item -->
          <div class="item"> 
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="<?=$template_url?>images/product-1.jpg" alt="" > <img class="img-2" src="<?=$template_url?>images/product-2.jpg" alt="" > 
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a  href="<?=$template_url?>images/product-1.jpg" data-lighter><i class="icon-magnifier"></i></a> <a  href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a  href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a  href="<?=$template_url?>#.">stone cup</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price --> 
            <span class="price"><small>$</small>299</span> </div>
          
          <!-- Item -->
          <div class="item"> 
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="<?=$template_url?>images/product-2.jpg" alt="" > <img class="img-2" src="<?=$template_url?>images/product-2.jpg" alt="" > 
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a  href="<?=$template_url?>images/product-2.jpg" data-lighter><i class="icon-magnifier"></i></a> <a  href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a  href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a  href="<?=$template_url?>#.">gray bag</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price --> 
            <span class="price"><small>$</small>299</span> </div>
          
          <!-- Item -->
          <div class="item"> 
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="<?=$template_url?>images/product-3.jpg" alt="" > <img class="img-2" src="<?=$template_url?>images/product-2.jpg" alt="" > 
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a  href="<?=$template_url?>images/product-3.jpg" data-lighter><i class="icon-magnifier"></i></a> <a  href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a  href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a  href="<?=$template_url?>#.">chiar</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price --> 
            <span class="price"><small>$</small>299</span> </div>
          
          <!-- Item -->
          <div class="item"> 
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="<?=$template_url?>images/product-4.jpg" alt="" > <img class="img-2" src="<?=$template_url?>images/product-2.jpg" alt="" > 
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a  href="<?=$template_url?>images/product-4.jpg" data-lighter><i class="icon-magnifier"></i></a> <a  href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a  href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a  href="<?=$template_url?>#.">STool</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price --> 
            <span class="price"><small>$</small>299</span> </div>
        </div>
      </div>
    </section>
    
    <!-- About -->
    <section class="small-about padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>about PAVSHOP</h4>
          <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
        </div>
        
        <!-- Social Icons -->
        <ul class="social_icons">
          <li><a  href="<?=$template_url?>#."><i class="icon-social-facebook"></i></a></li>
          <li><a  href="<?=$template_url?>#."><i class="icon-social-twitter"></i></a></li>
          <li><a  href="<?=$template_url?>#."><i class="icon-social-tumblr"></i></a></li>
          <li><a  href="<?=$template_url?>#."><i class="icon-social-youtube"></i></a></li>
          <li><a  href="<?=$template_url?>#."><i class="icon-social-dribbble"></i></a></li>
        </ul>
      </div>
    </section>
    
    <!-- News Letter -->
    <section class="news-letter padding-top-150 padding-bottom-150">
      <div class="container">
        <div class="heading light-head text-center margin-bottom-30">
          <h4>NEWSLETTER</h4>
          <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
        <form>
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit">SEND ME</button>
        </form>
      </div>
    </section>
  </div>
  
  <!--======= FOOTER =========-->
  <?php require_once "common/footer.php" ?>
  
  <!--======= RIGHTS =========--> 
  
</div>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="<?=$template_url?>js/bootstrap.min.js"></script> 
<script src="<?=$template_url?>js/own-menu.js"></script> 
<script src="<?=$template_url?>js/jquery.lighter.js"></script> 
<script src="<?=$template_url?>js/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?=$template_url?>rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?=$template_url?>rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?=$template_url?>js/main.js"></script> 
<script src="<?=$template_url?>js/main.js"></script>
</body>
</html>
<!-- 播放视频 -->
<script>
    $('.videolist').click(function(){ //遍历视频列表
      var img = $(this).attr('vpath');//获取视频预览图
      var video = $(this).attr('ipath');//获取视频路径
      var close_tag_src=$("#close-tag").val();
      var mobile_flag = isMobile();
		  if(mobile_flag){
        $('.videos').css({ "left":"15%","top":"20%","z-index":"100","width":"270px","height":"140px"});
        width="260px";
      }else{
        $('.videos').css({ "left":"50%","top":"50%","margin-left":"-320px","margin-top":"-210px","z-index":"100","width":"640px","height":"360px"});
        width="640px";
      }
      $('.videos').html("<video id='video' poster='"+img+"' style='width: "+width+"' src='"+video+"' preload='auto' controls='controls' autoplay='autoplay'></video><img  class='vclose' src="+close_tag_src+" width='25' height='25' style='z-index:200;'>");
      $('.videos').show();
      $(".vclose").on("click",function(){
        var v = document.getElementById('video');//获取视频节点
        $('.videos').hide();//点击关闭按钮关闭暂停视频
        v.pause();
        $('.videos').html();
      })
    });
    function isMobile() {
		    var userAgentInfo = navigator.userAgent;
 
		    var mobileAgents = [ "Android", "iPhone", "SymbianOS", "Windows Phone","iPod"];
 
		    var mobile_flag = false;
 
		    //根据userAgent判断是否是手机
		    for (var v = 0; v < mobileAgents.length; v++) {
		        if (userAgentInfo.indexOf(mobileAgents[v]) > 0) {
		            mobile_flag = true;
		            break;
		        }
		    }
		     var screen_width = window.screen.width;
		     var screen_height = window.screen.height;    
 
		     //根据屏幕分辨率判断是否是手机
		     if(screen_width < 500 && screen_height < 800){
		         mobile_flag = true;
		     }
 
		     return mobile_flag;
		}
</script>
<script>
  function changeColor(data){
    alert(123);
    console.log(data);
  }
</script>