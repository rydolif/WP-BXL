
	<section class="info">
		<div class="info__container container">
			
			<div class="info__col">
				<div class="info__header">
					<h3>Компания</h3>
				</div>
				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
						'menu_class'=>'header__nav',
					    'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="info__col">
				<div class="info__header">
					<h3>контакты</h3>
					<p>
						<a href="<?php the_field('facebook', 'option'); ?>" class="" target="_blank">
							<svg viewBox="0 0 512 512"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/></svg>
						</a>
						<a href="<?php the_field('vk', 'option'); ?>" class="" target="_blank">
							<svg viewBox="0 0 96.49 54.61"><path d="M92.5,65.18A130.68,130.68,0,0,0,83,55.67C80.16,52.85,80,51.22,82.3,48c2.53-3.55,5.25-7,7.81-10.49,2.39-3.3,4.82-6.59,6.08-10.54.85-2.68,0-3.77-3-4.14l-16.1,0c-2.21,0-3.26,1.11-3.91,3.42A11.32,11.32,0,0,1,72.47,28c-3,6.31-6,12.61-10.85,17.72-.84.89-1.77,2-3.17,1.55-1.75-.64-2.27-3.53-2.24-4.51V25.08c-.34-2.52-.9-3.65-3.4-4.14H36.91a5.05,5.05,0,0,0-4.31,2.15c-.65.77-.85,1.26.49,1.52a5.3,5.3,0,0,1,4.51,4.85,54.2,54.2,0,0,1,.22,12.7,9.35,9.35,0,0,1-2.17,5.77c-2.82-.81-4.33-2.87-5.8-4.94A85.33,85.33,0,0,1,20.53,25.7a4,4,0,0,0-3.82-2.86c-4.59-.07-9.18-.08-13.76,0C.19,22.9-.64,24.24.49,26.74,5.48,37.85,11,48.66,18.3,58.5A44.36,44.36,0,0,0,31.84,71.17c6.26,3.58,13,4.66,20.11,4.33,3.33-.16,4.33-1,4.48-4.34.14-3.16.59-6.3,3.24-8.85a9.48,9.48,0,0,1,5.44,3.41c1.87,2,3.68,4.16,5.62,6.14a10.87,10.87,0,0,0,9,3.65H93.74c2.26-.15,3.44-2.92,2.14-5.45A27.06,27.06,0,0,0,92.5,65.18Z" transform="translate(0 -20.94)"/></svg>
						</a>
					</p>
				</div>
				<a href="tel:<?php the_field('tel-url', 'option'); ?>" class="info__tel"><?php the_field('tel', 'option'); ?></a>
				<p class="info__place"><?php the_field('place1', 'option'); ?></p>
				<p class="info__place"><?php the_field('place2', 'option'); ?></p>
			</div>

			<div class="info__col">
				<div class="info__header">
					<h3>Подписка на новости</h3>
				</div>
<!-- 				<div class="info__form">
					<div class="info__form_line">
						<a href="#" class="btn btn--hero subscribe_open">Подписаться</a>
					</div>
					<p>
						Нажимая на кнопку "Подписаться", вы даете <br>согласие на <a href="<?php the_field('policy', 'option'); ?>" target="_blank">обработку своих персональных <br>данных</a>
					</p>
				</div> -->
				<div class="info__stat">
					<?php the_field('stat', 'option'); ?>
				</div>
				
			</div>

		</div>
	</section>

	<footer class="footer">
		<div class="footer__container container">
			
			<p>© 2019, БХЛ</p>

			<a href="http://flex-design.net/" target="_blank">Created by FLEX design</a>

		</div>
	</footer>
