<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @private
 * @version     0.5.1
 * @property    undefined
 * @package     WordPress
 * @subpackage  firstPixel
 * @since       0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">
		<?php include( TEMPLATE_PATH . '/misc/favicon.php' ); ;?>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('firstPixel'); ?>>
		<div class="wrapper">
			<header>
				<div class="container">
					<div class="row">
						<div class="columns small-12">
							<div class="logo">
								<a href="<?php bloginfo("url");?>" title="<?php bloginfo("title");?>"><img src="<?= IMAGES_URL ?>/logo.png" alt="<?php bloginfo("title");?>"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="container yellow">
					<div class="row">
						<?php
						$menu = array(
										'theme_location' => 'header',
										'container'      => 'nav'
										);
						wp_nav_menu($menu);
						 ?>
				 </div>
			 </div>
			</header>


			<?php //get_template_part( 'templates/header/header', 'main'); ?>
			<?php //get_template_part( 'templates/header/header', 'responsive'); ?>
			<?php //get_search_form() ?>
			<?php //get_template_part( 'templates/misc/downarr'); ?>
