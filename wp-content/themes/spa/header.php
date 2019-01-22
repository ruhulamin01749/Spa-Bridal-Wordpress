<!DOCTYPE html>
<html <?php language_attributes(); global $spa; ?> >
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $spa['site_favicon']['url']; ?>">
    
    <!-- Bootstrap core CSS -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.min.js"></script>
          <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
<!--[if IE ]>
   <body class="ie">
<![endif]-->
<!--[if !IE]>-->
   <body>
<!--<![endif]-->
<!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Fixed navbar -->
<div class="navbar main-menu navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>" title="logo"><img src="<?php echo $spa['site_logo']['url']; ?>" alt="logo" /></a> </div>
    <div class="navbar-collapse collapse">

     <ul class="nav navbar-nav navbar-right" id="menu">
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#slider">Home</a></li>
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#about">About Us</a></li>
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#team">Team</a></li>
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#services">Services</a></li>
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#plans">Pricing</a></li>
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#portfolio">Portfolio</a></li>
   		<li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#clients">Our Clients</a></li>
        <li role="presentation" class="dropdown">
        	<a href="index.html#blog-list" data-scroll data-options="easing: easeOutQuart" data-toggle="dropdown" class="dropdown-toggle hvr-underline-from-left">Blog <b class="caret"></b></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            
        <li><a class="hvr-underline-from-left" data-scroll data-options="easing: easeOutQuart" href="index.html#contact">Contact Us</a></li>
      </ul>

    </div>
    <!--/.nav-collapse --> 
  </div>
</div>