<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple_blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

 <header>
 <?php 
	$logo = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $logo , 'full' );
	$logo_url = $image[0];
		
	?>
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-3 col-5">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $logo_url?>" alt="logo" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-9 col-md-9 col-7">
                <div class="head-top">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 text-center">
                            <a href="tel:(020)95890188" class="top-mail"><i class="fa fa-phone"></i> (020) 9589 0188</a>
                        </div>
                        <div class="col-lg-5 col-md-5 text-center d-none d-lg-block">
                            <span class="top-addr"><i class="fa fa-map-marker"></i> 41 Clun Street, Sheffield, S4 7JS.</span>
                        </div>
                        <div class="col-lg-3 col-md-3 text-right d-none d-lg-block">
                            <div class="social">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-youtube"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid">
                    <nav class="navbar-expand-lg navbar-light align-items-center">
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <?php 
								$args = [
                                    'menu'=>'Menu 1',
									'menu_class'=>'navbar-nav',
									'container'=>false,
                                    'walker' => new OWCtheme_Walker_Nav_Menu(),
                                    
								];
								wp_nav_menu($args)
		  				?>
                           
                        </div>
                        <a href="#" class="btn btn_theme"> get in touch</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span></button>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>
 </header>

 <?php
 if(is_page_template( 'service.php' )){
     get_template_part('template/header','page');
 }
