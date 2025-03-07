<!doctype html>
<html lang="en">
<head>
    <!--====== Title ======-->
    <title>Techxtremee | Contact Us</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <?php
    $srcurl = "includes/";
    $basesurl = "assets/";
    ?>

    <?php
    $style = $_SERVER['HTTP_HOST']; 
    $style = $srcurl."style.php"; 
    include($style); 

    $urhere = "contactpage";
    ?>

</head>
<body class="hompg">


<!-- ***full page start*** -->
<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>

<!-- =======*****************==============*****************==============*****************=======  -->
<!-- =======*****************=======TECHXTREMEE MAIN CONTENT AREA START============********========== -->
<!-- =======*****************==============*****************==============*****************=======  -->


    <!--====== INFETECH BREADCRUMB  PART ENDS ======-->

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">Contact us</h2>
                        <!-- <nav aria-label="breadcrumb">   
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav> -->
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <!--====== INFETECH BREADCRUMB  PART ENDS ======-->

    <!--====== INFETECH CONTACT PAGE PART ENDS ======-->

    <section class="infetech-contact-page-area pt-90 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title mb-35 mt-30">
                        <span>Contact With Us</span>
                        <h3 class="title">Feel Free to Get in Touch</h3>
                    </div>
                    <div class="conatct-info">
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo $basesurl;?>images/icon/phone-icon.png" alt="">
                            </div>
                            <div class="content">
                                <span>Call Anytime</span>
                                <h5 class="title"><a href="tel:+923442175931">+92 (3442)175931</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo $basesurl;?>images/icon/mail-icon.png" alt="">
                            </div>
                            <div class="content">
                                <span>Send Email</span>
                                <h5 class="title"><a href="mailto:info@techextremee.com">info@techextremee.com</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo $basesurl;?>images/icon/map-icon.png" alt="">
                            </div>
                            <div class="content">
                                <span>Visit Now</span>
                                <h5 class="title">Karachi, Pakistan</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-page-box mt-30">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Service">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea name="#" id="#" cols="30" rows="10" placeholder="Write a Message"></textarea>
                                        <button type="submit" class="main-btn">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== INFETECH CONTACT PAGE PART ENDS ======-->

    <!--====== INFETECH CTA PART ENDS ======-->

    <div class="infetect-cta-area-home-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-home-box">
                        <div class="content">
                            <span>Let’s get started</span>
                            <h3 class="title">World class IT solutions partner of choice</h3>
                        </div>
                        <div class="cta-btn">
                            <a class="main-btn" href="<?php echo $path;?>contact">Lat's Get Started</a>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
    <div class="infetech-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.0529526887!2d66.82582425433989!3d25.1934585709548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1695276527835!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    <!--====== INFETECH CTA PART ENDS ======-->

   

<!-- =======*****************==============*****************==============*****************=======  -->
<!-- =======*****************=======TECHXTREMEE MAIN CONTENT AREA END============********========== -->
<!-- =======*****************==============*****************==============*****************=======  -->

<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>
<!-- ***full page end*** -->


</body>
</html>