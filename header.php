<?php

/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
include "connect.php";
?>
<!DOCTYPE HTML>
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <?php

  $result = $db->prepare("SELECT * FROM settings");
  $result->execute();
  for ($i = 0; $row = $result->fetch(); $i++) {


  ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Center for Space Science and Geomatics Studies</title>
    <meta name="keywords" content="<?php echo $row['site_keyword']; ?>" />
    <meta name="description" content="<?php echo $row['site_discription']; ?>">
    <meta name="author" content="">
    <link rel="shortcut" href="images/favicon.html" />
    <?php echo $row['google_code']; ?>
  <?php } ?>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- CSS
  ================================================== -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
  <link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
  <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
  <!-- Color Style -->
  <link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
  <link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
  <!-- SCRIPTS
  ================================================== -->
  <script src="js/modernizr.js"></script><!-- Modernizr -->
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=403202216515066";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
  <div id="body">
    <!-- Start Site Header -->
    <header class="site-header">

      <!--==========================
    Top Bar
  ============================-->
      <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
          <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:cssgs@wrc.edu.np">cssgs@wrc.edu.np</a>
            <i class="fa fa-phone"></i> +977061440457
          </div>
          <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </section>

      <!--==========================
    Header
  ============================-->
      <header id="header">
        <div class="container">
          <div id="logo" class="pull-left">

            <!-- <h1><img id="tulogo" src="img/logo.png"><a href="#body" class="scrollto">CSS<span>GS</span></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php"><img src="img/logoimg.png" alt="" title="" /></a>
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="index.php#body">Home</a></li>
              <li><a href="index.php#about">About Us</a></li>
              <li><a href="index.php#services">Work With Us</a></li>
              <li><a href="index.php#portfolio">Projects</a></li>
              <li><a href="index.php#blog-section">Blog</a></li>
              <li><a href="index.php#team">Team</a></li>
              <li><a href="index.php#contact">Contact</a></li>
              <li><a href="notice.php">Notices</a></li>

            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->
    </header>