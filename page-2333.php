<?php
/**
 * Template Name: Full Width
 */

get_header(); ?>

		<div class="one-column container-fluid">
				<div class="featured-image">
					<?php the_post_thumbnail('onecolumn-image', array('title' => get_the_title())); ?>
				</div>
				<div class="entry-content">
					<?php get_template_part( 'loop', 'page' ); ?>
				</div>
		</div>
<?php get_footer() ?>

<script>
	jQuery(document).ready(function(){
		jQuery("#versus").hide();
		jQuery(".fighter_one_outer").hide();
		jQuery(".fighter_two_outer").hide();
	});
	
</script>
