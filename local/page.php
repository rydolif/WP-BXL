<?php
	/**
		* Template name: Главная
	*/
 ?>

<?php get_header(); ?>

	<section class="tovar main">
		<div class="main__container container">

			<?php get_template_part( 'parts/grums' ); ?>
			
			<?php get_template_part( 'parts/filter' ); ?>

			<div class="main__content">

				<?php get_template_part( 'parts/search' ); ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>

		</div>
	</section>

<?php get_footer(); ?>