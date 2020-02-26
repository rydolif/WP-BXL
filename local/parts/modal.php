
	<div class="modal" id="client">

		<button class="modal__close client_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php the_field('modal_client', 'option'); ?>

	</div>
	
	<div class="modal" id="customer">

		<button class="modal__close customer_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php the_field('modal_partners', 'option'); ?>

	</div>
	
	<div class="modal" id="order">

		<button class="modal__close order_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php the_field('modal_order', 'option'); ?>

	</div>

	<div class="modal" id="subscribe">

		<button class="modal__close subscribe_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php the_field('subscription', 'option'); ?>

	</div>
