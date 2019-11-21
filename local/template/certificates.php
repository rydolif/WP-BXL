<?php
	/**
		* Template name: Сертыфикаты
	*/
 ?>

<?php get_header(); ?>

	<section class="certificates">
		<div class="certificates__container container">

			<h2><?php the_title(); ?></h2>

			<?php if( have_rows('list') ): ?>
				<div class="certificates__slider swiper-container">
					<div class="certificates__pagination swiper-pagination"></div>
					<div class="certificates__next swiper-button-next"><span></span></div>
					<div class="certificates__prev swiper-button-prev"><span></span></div>

					<div class="swiper-wrapper">

						<?php while( have_rows('list') ): the_row(); 
							$img = get_sub_field('img');
							?>

							<a href="<?php echo $img; ?>" class="certificates__slide swiper-slide" data-fancybox="gallery">
								<img src="<?php echo $img; ?>" alt="">
								<span></span>
							</a>

						<?php endwhile; ?>

					</div>
				</div>
			<?php endif; ?>

			<div class="certificates__content">
				<?php the_field('text'); ?>
			</div>

		</div>
	</section>


<?php get_footer(); ?>