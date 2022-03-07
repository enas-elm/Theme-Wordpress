<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping_Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				post_type_archive_title( '<h1 class="page-title">', '</h1>' ); //post_type_archive_title to not have the "archive" before
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="all-in-archive">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				?>

				<div class="each-in-archive border-bois"<?php echo the_ID(); ?>"> 
				
					<?php
					the_post();
					?>
					
					<img class="img-revetement"src="<?php the_post_thumbnail_url();?>" alt="img">
					<?php
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					?>
					<?php 
					$price = get_field('prix');
					$speed = get_field('rapidite');
					$control = get_field('controle');
					$weight = get_field('poids');
					$fold = get_field('plis');

					if($price) : ?>
						<div class="quality price">
						<p><?= $price; ?>€</p>
						</div>
					<?php endif; ?>

					<section class="quality">
						<?php if($speed) : ?>
						<div class="quality">
						<p>R:</p> <p><?= $speed; ?> </p>
						&ensp;
						</div>
					
						<?php endif; ?>
						<?php if($control) : ?>
						<div class="quality">
						<p>C:</p> <p><?= $control; ?> </p>
						&ensp;
						</div>
						<?php endif; ?>

						<?php if($weight) : ?>
						<div class="quality">
						<p>P:</p> <p><?= $weight; ?>g </p>
						&ensp;
						</div>
						<?php endif; ?>

						<?php if($fold) : ?>
						<div class="quality">
						<p>P:</p> <p><?= $fold; ?> </p>
						&ensp;
						</div>
						<?php endif; ?>
					</section>

				</div>

				<?php

			endwhile;

			the_posts_navigation();
			?> 

			</div>
		
			<?php 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
