<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="container sobre">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-8">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest-fachada.jpg" alt="Fachada do Rest">
		</div>

		<div class="grid-8">

			<?php if(have_rows('about_content')) : while(have_rows('about_content')) : the_row(); ?>
				<h2><?php the_sub_field('title_about')?></h2>
				<p><?php the_sub_field('story_about')?></p>
			<?php endwhile; else: endif; ?>
		</div>
	</section>

	<?php endwhile; else: endif; ?>

<?php get_footer(); ?>