<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title>
			<?php wp_title('|', true, 'right'); ?>
		</title>
		<link rel="stylesheet" href="style.css">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<section class="first-bar">
			<div class="container">
				<div class="row">

					<div class="col-lg-9 col-md-9 col-sm-9">
						<a href=""><i class="fa-solid fa-alarm-clock"></i></a>
						Open 9:30 AM
						<a href=""><i class="fa-solid fa-phone"></i></a>
						+91-98765-12345
						<a href=""><i class="fa-solid fa-envelope"></i></a>
						sp12@gmail.com


					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="first_bar1">
							<a href=""><i class="fa-brands fa-facebook"></i></a>
							<a href=""><i class="fa-brands fa-facebook-messenger"></i></a>
							<a href=""><i class="fa-brands fa-whatsapp"></i></a>
							<a href=""><i class="fa-brands fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<header id="header">
			<div id="navbar">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-6">
						<a class="home-link text-left" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/images/logo.png" width="100px"/>
						</a>
					</div>
					<div class="col-md-6 col-sm-6 col-6">
						<nav id="site-navigation" class="navigation main-navigation ml-auto">
							<button class="menu-toggle">
								<?php _e('Menu', 'twentythirteen'); ?>
								
							</button>
							<a class="screen-reader-text skip-link" href="#content">
								<?php
								/* translators: Hidden accessibility text. */
								_e('Skip to content', 'twentythirteen');
								?>
							</a>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class' => 'nav-menu',
									'menu_id' => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
					
					
					<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="button_1">
					<a href=""><button type="button" class="btn-btn-btn-success">Book Appointment</i></button></a>
			</div>
					</div>
				</div>
			</div><!-- #navbar -->
		</header><!-- #masthead -->