<?php namespace ProcessWire;

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
<link rel="stylesheet" type="text/css" href="<?=$template_url?>rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
<link href="<?=$template_url?>css/ionicons.min.css" rel="stylesheet">
<link href="<?=$template_url?>css/main.css" rel="stylesheet">
<link href="<?=$template_url?>css/style.css" rel="stylesheet">
<link href="<?=$template_url?>css/responsive.css" rel="stylesheet">
<!-- JavaScripts -->
<script src="<?=$template_url?>js/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>



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
  
	<?php require_once "common/header.php" ?>
  
  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider"> 
    
    <!-- SLIDE Start -->
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
					<!-- 轮播图 -->
					<?php
						foreach($page->home_rotation as $v){
							echo '
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
								<img src="'.$v->home_rotation_image->HTTPURL.'"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
								<div class="tp-caption font-playfair sfb tp-resizeme" 
										data-x="center" data-hoffset="0" 
										data-y="center" data-voffset="-150" 
										data-speed="800" 
										data-start="500" 
										data-easing="Power3.easeInOut" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" 
										style="z-index: 7; font-size:18px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">'.$v->home_rotation_title.'</div>

								<div class="tp-caption sfr font-regular tp-resizeme letter-space-4" 
										data-x="center" data-hoffset="0" 
										data-y="center" data-voffset="-50" 
										data-speed="800" 
										data-start="800" 
										data-easing="Power3.easeInOut" 
										data-splitin="chars" 
										data-splitout="none" 
										data-elementdelay="0.07" 
										data-endelementdelay="0.1" 
										data-endspeed="300" 
										style="z-index: 6; font-size:78px; color:#fff; text-transform:uppercase; white-space: nowrap;">'.$v->home_rotation_content_one.'</div>
								<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
										data-x="center" data-hoffset="0" 
										data-y="center" data-voffset="60" 
										data-speed="800" 
										data-start="1300" 
										data-easing="Power3.easeInOut" 
										data-splitin="chars" 
										data-splitout="none" 
										data-elementdelay="0.07" 
										data-endelementdelay="0.1" 
										data-endspeed="300" 
										style="z-index: 6; font-size:140px; color:#fff; text-transform:uppercase; white-space: nowrap;">'.$v->home_rotation_content_two.'</div>
								<div class="tp-caption lfb tp-resizeme" 
										data-x="center" data-hoffset="0" 
										data-y="center" data-voffset="250" 
										data-speed="800" 
										data-start="2200" 
										data-easing="Power3.easeInOut" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" 
										data-scrolloffset="0"
										style="z-index: 8; "><a href="#." class="btn btn-round" >'.$v->home_rotation_button_name.'</a> </div>	
							</li>';
						}
					?>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- New Arrival -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>new arrival</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
      </div>
      
      <!-- New Arrival -->
      <div class="arrival-block"> 
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-1.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-1.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">wooden chair</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-2.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-2.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">MINIMALIST WOO TOYS</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-3.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-3.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">Concrete Shaving Kit</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-4.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-4.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">PARAGON PENDANT</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-5.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-5.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">crative lamp</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-6.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-6.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">ECO FRIENDLY</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-7.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-7.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">GEOMETRY STOOL</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
        
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="<?=$template_url?>images/item-img-1-8.jpg" alt=""> <img class="img-2" src="<?=$template_url?>images/item-img-1-1-1.jpg" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><small>$</small>299</span>
            <div class="position-center-center"> <a href="<?=$template_url?>images/item-img-1-8.jpg" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="<?=$template_url?>#.">CERAMIC STONE VASE</a>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Popular Products -->
    <section class="padding-top-50 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>popular products</h4>
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
                  <div class="inn"><a href="<?=$template_url?>images/product-1.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="<?=$template_url?>#.">stone cup</a>
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
                  <div class="inn"><a href="<?=$template_url?>images/product-2.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="<?=$template_url?>#.">gray bag</a>
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
                  <div class="inn"><a href="<?=$template_url?>images/product-3.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="<?=$template_url?>#.">chiar</a>
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
                  <div class="inn"><a href="<?=$template_url?>images/product-4.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="<?=$template_url?>#."><i class="icon-basket"></i></a> <a href="<?=$template_url?>#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="<?=$template_url?>#.">STool</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price --> 
            <span class="price"><small>$</small>299</span> </div>
        </div>
      </div>
    </section>
    
    <!-- Knowledge Share -->
    <section class="light-gray-bg padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>knowledge share</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
        <div class="knowledge-share">
          <ul class="row">
            
            <!-- Post 1 -->
            <li class="col-md-6">
              <div class="date"> <span>December</span> <span class="huge">27</span> </div>
              <a href="<?=$template_url?>#.">Donec commo is vulputate</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere, diam</p>
              <span>By <strong>Admin</strong></span> </li>
            
            <!-- Post 2 -->
            <li class="col-md-6">
              <div class="date"> <span>December</span> <span class="huge">09</span> </div>
              <a href="<?=$template_url?>#.">Donec commo is vulputate</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere, diam</p>
              <span>By <strong>Admin</strong></span> </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- Testimonial -->
    <section class="testimonial padding-top-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-6"> 
            
            <!-- SLide -->
            <div class="single-slide"> 
              
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
              
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
              
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
            </div>
          </div>
          
          <!-- Img -->
          <div class="col-sm-6"> <img class="img-responsive" src="<?=$template_url?>images/testi-avatar.jpg" alt=""> </div>
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
          <li><a href="<?=$template_url?>#."><i class="icon-social-facebook"></i></a></li>
          <li><a href="<?=$template_url?>#."><i class="icon-social-twitter"></i></a></li>
          <li><a href="<?=$template_url?>#."><i class="icon-social-tumblr"></i></a></li>
          <li><a href="<?=$template_url?>#."><i class="icon-social-youtube"></i></a></li>
          <li><a href="<?=$template_url?>#."><i class="icon-social-dribbble"></i></a></li>
        </ul>
      </div>
    </section>
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
  <?php require_once "common/header.php"?>
  
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