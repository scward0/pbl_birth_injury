<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="http://198.58.102.147/pbl_birth_injury/wp-content/themes/FoundationPress/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="http://198.58.102.147/pbl_birth_injury/wp-content/themes/FoundationPress/slick/slick-theme.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<?php do_action( 'foundationpress_layout_start' ); ?>


<div id="header" class="fixed transition">
	<header class="row no-max pad main">
		<nav id="mainnav" class="mainnav" role="navigation">
			<ul class="menu">
				<style media="screen">
				div.fullscreenmenu ul.nav-menu{
					margin-top: 100px !important;
				}
				.animateddrawer{
					display: none !important;
				}
				div.fullscreenmenu ul.nav-menu li{
				  border-bottom: none !important;
				}
				.navcontent{
					padding: 1%;
				}
				div.fullscreenmenu ul.nav-menu li a{
					font-size: 110%;
					text-transform: uppercase;
					padding: 10px 0 !important;
				}
				div.fullscreenmenu ul.nav-menu li a[href="http://198.58.102.147/pbl_birth_injury/practice_area/statutes-of-limitation/"],
				div.fullscreenmenu ul.nav-menu li a[href="http://198.58.102.147/pbl_birth_injury/practice_area/cerebral-palsy/"],
				div.fullscreenmenu ul.nav-menu li a[href="http://198.58.102.147/pbl_birth_injury/practice_area/injuries-to-children/"],
				div.fullscreenmenu ul.nav-menu li a[href="http://www.medicalmalpracticeattorneyinfo.com/"] {
					font-size: 85% !important;
					padding: 8px 0 !important;
				}
				@media screen and (max-width: 850px){
					#schedule{
						display: none;
					}
				}
				@media screen and (max-width: 425px){
					.desk-logo{
						width: 75%;
					}
					.nav-menu li a{
						font-size: 80%;
					}
					.fa-bars{
						top: 20px;
						right: 30px;
					}
					div.fullscreenmenu ul.nav-menu li a{
						font-size: 110%;
						text-transform: uppercase;
						padding: 5px 0 !important;
					}
				}
				</style>
				<li class="home"><a class="desk-logo" href="<?php bloginfo('url'); ?>"><img src="http://198.58.102.147/pbl_birth_injury/wp-content/uploads/2017/02/charles_thronson_logo.png" width="300" style="z-index: 5; opacity: 1;"alt="<?php bloginfo('name'); ?>"/></a></li>
				<li><a href="http://198.58.102.147/pbl_birth_injury/contact/"><span id="schedule">Schedule a free consultation: 800-532-0884</span></a></li>
				<i class="fa fa-bars fa-4x"  onclick="menu1.togglemenu(); return false"></i>
			</ul>
			<div class="navi hide">
				<?php
					$defaults = array(
						'container' => false,
						'theme_location' => 'primary-menu',
						'menu_class' => 'no-bullet menu sticky cap'
					);
					wp_nav_menu($defaults)
				 ?>
			</div>
		</nav>
	</header>
</div>
