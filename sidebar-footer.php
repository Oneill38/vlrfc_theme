<div id="footer-widget-area" role="complementary">
	<div id="footer-logo" class="widget-area"></div>
	<?php
		if ( is_active_sidebar( 'first-footer-widget-area'  )
			|| is_active_sidebar( 'second-footer-widget-area' )
		):
	?>
		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
			<div id="first" class="widget-area">
				<ul class="xoxo">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</ul>
			</div><!-- #first .widget-area -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
			<div id="second" class="widget-area">
				<ul class="xoxo">
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</ul>
			</div><!-- #second .widget-area -->
		<?php endif; ?>
	<?php endif; ?>
</div><!-- #footer-widget-area -->
