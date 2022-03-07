<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping_Passion
 */

get_header();

/*Def Variables*/

$price = get_field('prix');
$speed = get_field('rapidite');
$control = get_field('controle');
$adhesion = get_field('adherence');
$toughness = get_field('durete');
$color = get_field('couleur');
$thickness = get_field('epaisseur');

$weight = get_field('poids');
$fold = get_field('plis');
$handle = get_field('manche');
?>


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			?>

			<section class="border">
				<div class="img-and-selection">

					<?php
					the_post(); /*select just this post*/
					?>

					<img class="img-single"src="<?php the_post_thumbnail_url();?>" alt="img">
					
					<div class="selection">
					
						<?php
						the_title( '<h2 class="single-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						?>

						<!-- TEXT -->
						<?php if($price) : ?>
						<div class="quality price">
						<p><?= $price; ?>€ <p>&thinsp; TVA Incluse</p>
						</div>
						<hr>
						<?php endif; ?>

						<?php if($speed) : ?>
						<div class="quality">
						<p>Rapidité :</p> <p>&thinsp;<?= $speed; ?> </p>
						</div>
						<hr>
						<?php endif; ?>

						<?php if($control) : ?>
						<div class="quality">
						<p>Contrôle :</p> <p>&thinsp;<?= $control; ?> </p>
						</div>
						<hr>
						<?php endif; ?>

						<?php if($toughness) : ?>
						<div class="quality">
						<p>Dureté :</p> <p>&thinsp;<?= $toughness; ?> </p>
						</div>
						<hr>
						<?php endif; ?>

						<?php if($adhesion) : ?>
						<div class="quality">
						<p>Adhérence :</p> <p>&thinsp;<?= $adhesion; ?> </p>
						</div>
						<hr>
						<?php endif; ?>

						<?php if($weight) : ?>
						<div class="quality">
						<p>Poids :</p> <p>&thinsp;<?= $weight; ?>g </p>
						</div>
						<hr>
						<?php endif; ?>

						<?php if($fold) : ?>
						<div class="quality">
						<p>Plis :</p> <p>&thinsp;<?= $fold; ?> </p>
						</div>
						<hr>
						<?php endif; ?>

						<form>
							<!-- COLORS -->
							<?php if($color) : ?>
							<p class="quality">Couleurs:</p>
							<?php 
							foreach($color as $colorname){
							?>
							<!-- CHECKBOX COLORS -->
							<input type="checkbox" class="color" onclick="onlyOneColor(this)" name="checkColor">  <label for="<?php echo $colorname; ?>"><?php echo $colorname; ?></label>
							<?php
							}
							?>
							<hr>
							<?php
							endif;
							?>
							
							<!-- THICKNESS -->
							<?php if($thickness) : ?>
							<p class="quality">Epaisseur:</p>
							<?php 
							foreach($thickness as $thicknessnumber){
							?>
							<!-- CHECKBOX THICKNESS -->
							<input class="check" onclick="onlyOneThickness(this)" type="checkbox" name="checkThickness">  <label for="<?php echo $thicknessnumber; ?>"><?php echo $thicknessnumber; ?></label>
							<?php
							}
							?>
							<hr>
							<?php
							endif;
							?>

							<!-- Handle -->
							<?php if($handle) : ?>
							<p class="quality">Manche:</p>
							<?php 
							foreach($handle as $handlevalue){
							?>
							<!-- CHECKBOX THICKNESS -->
							<input class="check" onclick="onlyOneHandle(this)" type="checkbox" name="checkHandle">  <label for="<?php echo $handlevalue; ?>"><?php echo $handlevalue; ?></label>
							<?php
							}
							?>
							<hr>
							<?php
							endif;
							?>
							

							<input class="submit" type="submit" name="submit" value="Ajouter au panier" />
						</form>

					</div>
				</div>
			</section>

			<!-- Description Text -->
			
			<div class="div-single-description"> 
			<h2>Description</h2>
			<?php
			echo the_content('<p class="single-content"></p>');
			?>
			</div>

			<!-- Prev Next -->
			<div class="prev-next">
				<?php	
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ping-passion' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ping-passion' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
				?>
			</div>


		<?php
		endwhile; // End of the loop.
		?>
			

	</main>

	<!-- Can choose only one option in for each checkbox-->
	<script>function onlyOneColor(checkbox) {
		var checkboxes = document.getElementsByName('checkColor')
		checkboxes.forEach((item) => {
			if (item !== checkbox) item.checked = false
		})
	}</script>

	<script>function onlyOneThickness(checkbox) {
		var checkboxes = document.getElementsByName('checkThickness')
		checkboxes.forEach((item) => {
			if (item !== checkbox) item.checked = false
		})
	}</script>

	<script>function onlyOneHandle(checkbox) {
		var checkboxes = document.getElementsByName('checkHandle')
		checkboxes.forEach((item) => {
			if (item !== checkbox) item.checked = false
		})
	}</script>

<?php
get_footer();
