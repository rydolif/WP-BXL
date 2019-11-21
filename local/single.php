<?php get_header(); ?>

	<section class="article">
		<div class="container">

			<?php get_template_part( 'parts/grums' ); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="article__content">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" />
					<?php } ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
	</section>


<?php get_footer(); ?>
