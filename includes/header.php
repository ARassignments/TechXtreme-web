<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/Techxtremee/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>


    <!-- PRELOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
        <!-- <img src="<?php echo $basesurl;?>images/images/techxremee-loader.gif" alt="logo"> -->
            <!-- <span></span> -->
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!--======= TECHEXTREMEE SEARCH PART ENDS ======-->

    <div class="search-popup">
        <button class="close-search style-two"><span class="fal fa-times"></span></button>
        <button class="close-search"><span class="fal fa-long-arrow-up"></span></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>

    <!--======= TECHEXTREMEE SEARCH PART ENDS ======-->

      <!--====== OFFCANVAS MENU PART START ======-->

      <div class="off_canvars_overlay">
                
      </div>
      <div class="offcanvas_menu">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="offcanvas_menu_wrapper">
                          <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="fa fa-times"></i></a>  
                          </div>
                          <div class="offcanvas-social">
                              <ul class="text-center">
                                  <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fposts%2Ftechxtremee_digitalsolutions-techinnovation-businesstransformation-activity-7117066754119413760-gDbb%3Futm_source%3Dshare%26utm_medium%3Dmember_desktop%26fbclid%3DIwAR357PaE_qtZKkNA9OVjPJN_GjlmxuhOuV77Xl7d5p1Bjh7BID15VwUiBhM&h=AT0BLchkhXjB2woWtihGifm6KigPdN_RzvvmV_DgWI_ZJYbKO7zG3A83t5CZcAqb29KH24gqoqiy4I0WhhwYTrK7CfFpwgyflI6fk0mLgy1B481EcgB12DqNLCfsDkb13BADaQ"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.facebook.com/TechXtremee"><i class="fab fa-facebook-f"></i></a></li>
                            <!--<li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>-->
                            <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Ftechxtremee%2F%3Ffbclid%3DIwAR2TjPsddAd46_R-YpY_haWS7QJn96AjuDB2i5LH0Ru1LzQr3PGh7UTuVfw&h=AT0BLchkhXjB2woWtihGifm6KigPdN_RzvvmV_DgWI_ZJYbKO7zG3A83t5CZcAqb29KH24gqoqiy4I0WhhwYTrK7CfFpwgyflI6fk0mLgy1B481EcgB12DqNLCfsDkb13BADaQ"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                          </div>
                          <div id="menu" class="text-left ">
                              <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active"> <a href="<?php echo $path;?>">Home</a></li>
                                <li class="menu-item-has-children active"><a href="<?php echo $path;?>about">About</a></li>
    
                                  <li class="menu-item-has-children active">
                                      <a href="#">Services</a>
                                      <ul class="sub-menu">
                                        <li><a href="<?php echo $path;?>Brand-identity-and-design-service">Brand Identity & Design Services</a></li>
                                        <li><a href="<?php echo $path;?>Business-Web-Solutions">Business Web Solutions</a></li>
                                        <li><a href="<?php echo $path;?>Illustration-Service">Illustration Services</a></li>
                                        <li><a href="<?php echo $path;?>Social-Media-Marketing-Service">Social Media Marketing</a></li>
                                        <li><a href="<?php echo $path;?>Content-Writing-Service">Web Content & E-book Writing</a></li>
                                        <li><a href="<?php echo $path;?>Search-Engine-Optimization-Service">Search Engine Optimization</a></li>
                                        <li><a href="<?php echo $path;?>Video-Animation-Service">Video Animation Services</a></li>
                                        <li><a href="<?php echo $path;?>Youtube-Service">Youtube Services</a></li>
                                    </ul>
                                  </li>
                                  <li class="menu-item-has-children active">
                                    <a href="<?php echo $path;?>portfolio">Portfolio</a>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="<?php echo $path;?>careers">Careers</a>
                                </li>
                                <!-- <li class="menu-item-has-children active">
                                    <a href="<?php echo $path;?>blog">Blog</a>
                                </li> -->
                                <li class="menu-item-has-children active"><a href="<?php echo $path;?>contact">Contact</a></li>

                              </ul>
                          </div>
                          <div class="offcanvas_footer">
                              <span><a href="mailto:info@techextremee.com"><i class="fa fa-envelope-o"></i> info@techextremee.com</a></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
      <!--====== OFFCANVAS MENU PART ENDS ======-->

    <!--======= TECHEXTREMEE HEADER PART START ======-->

    <header class="infetech-header-area-2">
        <div class="header-topbar-layout-2">
            <div class="header-topbar header-topbar-layout-2">
                <div class="row g-0 align-items-center ">
                    <div class="col-lg-5">
                        <div class="header-topbar-text">
                            <p>Step into the world of IT Solutions & Services</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-topbar-info-wrapper">
                            <div class="header-topbar-info">
                                <ul>
                                    <li><i class="fas fa-envelope"></i> info@techextremee.com</li>
                                    <li><i class="fas fa-clock"></i> Mon - Sat | 24 / 7</li>
                                </ul>
                            </div>
                            <div class="header-topbar-social">
                                <ul>
                                    <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fposts%2Ftechxtremee_digitalsolutions-techinnovation-businesstransformation-activity-7117066754119413760-gDbb%3Futm_source%3Dshare%26utm_medium%3Dmember_desktop%26fbclid%3DIwAR357PaE_qtZKkNA9OVjPJN_GjlmxuhOuV77Xl7d5p1Bjh7BID15VwUiBhM&h=AT0BLchkhXjB2woWtihGifm6KigPdN_RzvvmV_DgWI_ZJYbKO7zG3A83t5CZcAqb29KH24gqoqiy4I0WhhwYTrK7CfFpwgyflI6fk0mLgy1B481EcgB12DqNLCfsDkb13BADaQ"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.facebook.com/TechXtremee"><i class="fab fa-facebook-f"></i></a></li>
                            <!--<li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>-->
                            <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Ftechxtremee%2F%3Ffbclid%3DIwAR2TjPsddAd46_R-YpY_haWS7QJn96AjuDB2i5LH0Ru1LzQr3PGh7UTuVfw&h=AT0BLchkhXjB2woWtihGifm6KigPdN_RzvvmV_DgWI_ZJYbKO7zG3A83t5CZcAqb29KH24gqoqiy4I0WhhwYTrK7CfFpwgyflI6fk0mLgy1B481EcgB12DqNLCfsDkb13BADaQ"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-nav-layout-2 header-sticky">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo-white">
                        <a href="<?php echo $path;?>"><img src="<?php echo $basesurl;?>images/images/techxremee-gif1.gif" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-main-nav-box">
                        <ul>
                            <li>
                                <a href="<?php echo $path;?>">Home</a>
                            </li>
                            <li><a href="<?php echo $path;?>about">About</a></li>
                            <li>
                                <a href="javascript:;">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo $path;?>Brand-identity-and-design-service">Brand Identity & Design Services</a></li>
                                    <li><a href="<?php echo $path;?>Business-Web-Solutions">Business Web Solutions</a></li>
                                    <li><a href="<?php echo $path;?>Illustration-Service">Illustration Services</a></li>
                                    <li><a href="<?php echo $path;?>Social-Media-Marketing-Service">Social Media Marketing</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="<?php echo $path;?>javascript:;">3D Environment</a></li>
                                            <li><a href="<?php echo $path;?>javascript:;">Character Design</a></li>
                                            <li><a href="<?php echo $path;?>javascript:;">Character Rigging</a></li>
                                            <li><a href="<?php echo $path;?>javascript:;">Character Animation</a></li>
                                            <li><a href="<?php echo $path;?>javascript:;">3D Logo Animation</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="<?php echo $path;?>Content-Writing-Service">Web Content & E-book Writing</a></li>
                                    <li><a href="<?php echo $path;?>Search-Engine-Optimization-Service">Search Engine Optimization</a></li>
                                    <li><a href="<?php echo $path;?>Video-Animation-Service">Video Animation Services</a></li>
                                    <li><a href="<?php echo $path;?>Youtube-Service">Youtube Services</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo $path;?>portfolio">Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo $path;?>careers">Careers</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo $path;?>blog">Blog</a>
                            </li> -->
                            <li><a href="<?php echo $path;?>contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-main-info">
                        <div class="header-mini-btn">
                            <ul>
                                <!-- <li><a class="search-box-btn" href="#"><i class="fal fa-search"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fal fa-shopping-cart"></i></a></li> -->
                                <li><a class="toggle-bar canvas_open" href="#"><i class="fal fa-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-main-info-contact">
                            <div class="icon">
                                <img src="<?php echo $basesurl;?>images/icon/phone-white.svg" alt="icon-image">
                            </div>
                            <div class="content">
                                <span>Call Anytime</span>
                                <a href="tel:+923442175931">+92 (3442)175931</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--======= TECHEXTREMEE HEADER PART ENDS ======-->

<!-- *** header end *** -->