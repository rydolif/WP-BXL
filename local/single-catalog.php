
<?php get_header(); ?>

	<section class="tovar main">
		<div class="main__container container">

			<?php get_template_part( 'parts/grums' ); ?>

			<?php get_template_part( 'parts/filter' ); ?>

			<div class="tovar__content main__content">

				<?php get_template_part( 'parts/search' ); ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" />
					<?php } ?>

					<?php the_content(); ?>

					<?php wptuts_pagination(); ?> 

				<?php endwhile; ?>
				<?php endif; ?>



			</div>

		</div>
	</section>

<?php get_footer(); ?>
