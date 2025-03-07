<!doctype html>
<html lang="en">
<head>
    <!--====== Title ======-->
    <title>Techxtremee | About Us</title>
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

    $urhere = "aboutpage";
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
                        <h2 class="title">About us</h2>
                        <!-- <nav aria-label="breadcrumb">   
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav> -->
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <!--====== INFETECH BREADCRUMB  PART ENDS ======-->

    <!--====== INFETECH COMPANY ABOUT PART ENDS ======-->

    <section class="infetech-company-about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="company-about-thumb">
                        <img src="<?php echo $basesurl;?>images/images/about-side.jpg" alt="techxtremee-about-company-img">
                        <div class="icon">
                            <img src="<?php echo $basesurl;?>images/images/about-logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="infetech-about-content">
                        <span>Our Mission</span>
                        <h3 class="title">Driven by Excellence</h3>
                        <p>At Techxtremee, our mission is to deliver cutting-edge technology solutions that empower businesses to thrive in an ever-evolving digital landscape.</p>
                        <ul>
                            <li><i class="fal fa-check"></i> Client-Centric Service</li>
                            <li><i class="fal fa-check"></i> Innovation and Excellence</li>
                        </ul>
                        <ul>
                            <li><i class="fal fa-check"></i> Reliable Partnership</li>
                            <li><i class="fal fa-check"></i> Community Engagement</li>
                        </ul>
                        <!-- <a href="#" class="main-btn">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== INFETECH COMPANY ABOUT PART ENDS ======-->
        <?php
        $counter = $_SERVER['HTTP_HOST']; 
        $counter = $srcurl."counter.php"; 
        include($counter); 
        ?>
    <section class="infetech-company-about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="infetech-about-content">
                        <span>Our Vision</span>
                        <h3 class="title">Innovating Tomorrow, Today</h3>
                        <p>Our vision is to be a pioneering force in the IT industry, shaping the future of technology through continuous innovation and unparalleled customer-centricity.</p>
                        <ul>
                            <li><i class="fal fa-check"></i> Technological Pioneers</li>
                            <li><i class="fal fa-check"></i> Global Reach</li>
                        </ul>
                        <ul>
                            <li><i class="fal fa-check"></i> Sustainability Champions</li>
                            <li><i class="fal fa-check"></i> Digital Transformation Enablers</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <img src="<?php echo $basesurl;?>images/images/company-thumb-2.jpg" alt="company-image">      
                </div>
            </div>
        </div>
    </section>


    <?php
        $cta = $_SERVER['HTTP_HOST']; 
        $cta = $srcurl."cta.php"; 
        include($cta); 
        ?>

    <?php
        $testimonial = $_SERVER['HTTP_HOST']; 
        $testimonial = $srcurl."testimonial.php"; 
        include($testimonial); 
        ?>

<?php
        $team = $_SERVER['HTTP_HOST']; 
        $team = $srcurl."team.php"; 
        include($team); 
        ?>

   

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