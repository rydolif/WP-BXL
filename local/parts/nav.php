
	<nav class="nav">
		<div class="nav__container container">
			<div class="nav__responsive">
				<p>меню</p>
				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>
			</div>
			<?php 
				wp_nav_menu( array(
					'menu'=>'menu',
				    'theme_location'=>'menu',
				) );
			?>
		</div>
	</nav>