<?php get_header(); ?>

	<section class="tovar main">
		<div class="main__container container">

			<?php get_template_part( 'parts/grums' ); ?>

			<?php get_template_part( 'parts/filter' ); ?>

			<div class="tovar__content main__content">

				<?php get_template_part( 'parts/search' ); ?>

				<h2><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h2>
				<?php
					if (have_posts()) :
					while (have_posts()) : the_post();
				?>
					<div class="search__post">
						<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
						<p><?php the_excerpt() ?></p>
						<time  datetime="1969-07-16">Дата добавления: <?php the_date() ?></time>
					</div>
				<?php endwhile; ?>
				<?php
					else :
					echo "Извините по Вашему результату ничего не найдено";
					endif;
				?>

			</div>

		</div>
	</section>

<?php get_footer(); ?>
