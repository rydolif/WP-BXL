
	<div class="main__filter" id="filter">
		<div class="main__filter_header">
			<h3>бренды:</h3>
		</div>

		<?php 
			wp_nav_menu( array(
				'menu'=>'filter',
				'menu_class'=>'filter',
			    'theme_location'=>'filter',
			) );
		?>	
	</div>
