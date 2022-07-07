<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tt_slideshow.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Customjs.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/contactform.js">
</script>
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/totop.js">
</script>
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
	<?php wp_head(); ?>
</head>

<?php 
global $post;
if( $post->ID == 165) {
   echo '<body class="Home">';
}else if ($post->ID ==167 ){
   echo '<body class="About">';
}else{
   echo '<body class="Services">';
}?>

<?php wp_body_open(); ?>
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="<?php echo get_template_directory_uri(); ?>/images/gototop0.png"/></a>
</div>
<div id="ttr_page" class="container">
<header id="ttr_header">
<div id="ttr_header_inner">
<a href="<?php echo get_home_url();?>" target="_self">
<img  class="ttr_header_logo" src="<?php echo get_field('logo',165); ?>" >
</a>
</div>
</header>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div class="menuforeground">
</div>
<div id="navigationmenu">
<div class="navbar-header">
<button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</button>
</div>
<div class="menu-center collapse navbar-collapse">
<ul class="ttr_menu_items nav navbar-nav nav-center">
<li class="ttr_menu_items_parent dropdown active"><a href="#" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="http://localhost/mysite.com/?page_id=167" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="#" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Rooms</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="http://localhost/mysite.com/?page_id=175" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Services</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="#" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
<hr class ="horiz_separator"/>
</li>
</ul>
</div>
</div>
</div>
</nav>