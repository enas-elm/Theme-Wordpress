<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ping_Passion
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ping-passion' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			
		<?php
		$ping_passion_description = get_bloginfo( 'description', 'display' );
		if ( $ping_passion_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $ping_passion_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
		<hr>
				<section class="main-header">
				
				
					<img class="logo" src="http://localhost/wp_table_tennis/wp-content/uploads/2021/11/logo-ping.png" alt="Logo">

					<div class="title-description">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					
					</div>

					<!-- #site-navigation -->
					<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ping-passion' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					</nav>
				</section>
				
				<div class="breadcrumb-trail">
					<?php
					/*Si ce n'est pas la page d'accueil*/
					if ( !is_home() ) :	
						if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('
						<p id="breadcrumbs">','</p>
						');
					}
					endif;
					?>
			</div>

		</div><!-- .site-branding -->

	
	</header><!-- #masthead -->
