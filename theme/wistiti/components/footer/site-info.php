<?php
	global $footer_args;
	get_template_part( 'components/footer/site-info', 'customizer' );

	if ($footer_args['attributes']['col']==0) return;

	//To do : use args in this template !
?>

<div class="<?php echo $footer_args['classes']['wrapper'];?>">

		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		  <div class="fl w-100 w-<?php echo $footer_args['attributes']['width'];?>-ns">
				<div class="cf">

						<?php
							if (!empty($footer_args['attributes']['logo_src'])) :?>
							  <div class="fl w-100 w-<?php echo $footer_args['attributes']['logo_width'];?>-ns tc pa2">
										<img class="w-100-ns w-33 h-auto" src="<?php echo $footer_args['attributes']['logo_src']; ?>" alt="<?php bloginfo( 'name' ); ?>"\>
								</div>
							<?php endif; ?>

						<?php $footer1_width = 100 - $footer_args['attributes']['logo_width'];?>
						<div class="fl w-100 w-<?php echo $footer1_width;?>-ns pa2">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
				</div>

			</div>
		<?php endif;?>

		<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<div class="fl w-100 w-<?php echo $footer_args['attributes']['width']; ?>-ns pa2">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		<?php endif;?>

		<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="fl w-100 w-<?php echo $footer_args['attributes']['width']; ?>-ns pa2">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		<?php endif;?>

</div>
