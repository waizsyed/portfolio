<?php
$currStr=$_SERVER['REQUEST_URI'];
//print_r($currStr);
$curArr=explode('/',$currStr);
$cur_path=$curArr[count($curArr)-1];


$page_title='';
if($cur_path=='' || $cur_path=='index'){
  $page_title='Waiz Syed';
}elseif($cur_path=='website_design'){
  $page_title="Website Design";
}elseif($cur_path=='website_developement'){
  $page_title="Website Developement";
}elseif($cur_path=='wordpress_theme'){
  $page_title="Wordpress Theme";
}elseif($cur_path=='ecommerce_solution'){
  $page_title="eCommerce Solution";
}elseif($cur_path=='logo_design'){
  $page_title="Logo Design";
}elseif($cur_path=='content_writing'){
  $page_title="Content Writing";
}elseif($cur_path=='responsive_website'){
  $page_title="Responsive Website";
}elseif($cur_path=='seo'){
  $page_title="SEO (Search Engine Optimization)";
}elseif($cur_path=='social_media'){
  $page_title="Social Media";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> <?php echo $page_title?></title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}


</style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  <img src="images/arrow-up.png" onClick="topFunction()" id="myBtn" title="Go to top"/>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container" >
	        <a href="index"><img src="images/logo/logo_web.png" alt="Waiz Logo"/></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" >
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="index#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="index#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="index#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="index#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <!--<li class="nav-item"><a href="index.html#blog-section" class="nav-link"><span>My Blog</span></a></li>-->
	          <li class="nav-item"><a href="index#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <div class="hero-wrap">
      
      
    </div>