<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ping_Passion
 */

?>

	<footer id="colophon" class="site-footer">



		<section>

			<div>
				<h3>HOSTING</h3>
				<p>Shared Hosting</p>
				<p>VPS Hosting</p>
				<p>Cloud Hosting</p>
				<p>Wordpress Hosting</p>
			</div>

			<div>
				<h3>FEATURES</h3>
				<p>Beginner Guide</p>
				<p>Move to Servion</p>
				<p>Website Builder</p>
				<p>Tools and Resources</p>
			</div>

			<div>
				<h3>SUPPORT</h3>
				<p>Help Center</p>
				<p>Submit a Ticket</p>
				<p>Contact Us</p>
				<p>Blog </p>
			</div> 

		</section>

		<div class="site-info">

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ping-passion' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ping-passion' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> &ensp;|&ensp; </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ping-passion' ), 'ping-passion', '<a href="http://underscores.me/"> &thinsp; enas</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
