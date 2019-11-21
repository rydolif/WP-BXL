
<?php get_header(); ?>


	<section class="news">
		<div class="container">

			<h2>Новости</h2>

			<div class="news__list">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<a href="<?php the_permalink(); ?>" class="news__item">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" />
						<?php } ?>
						<div class="news__item_text">
							<p><b><?php the_title(); ?></b></p>
							<?php the_excerpt(); ?>
							<time datetime="1969-07-16">
								<?php echo get_the_date('Y-m-d'); ?>
							</time>
						</div>
					</a>

				<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<?php wptuts_pagination(); ?> 

		</div>
	</section>

<?php get_footer(); ?>
