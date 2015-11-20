<?php


get_header(); ?>

		<div id="fight" class="one-column container-fluid">
				<div class="featured-image">
					<?php the_post_thumbnail('onecolumn-image', array('title' => get_the_title())); ?>
				</div>
				<div class="entry-content">
	      		<?php get_template_part( 'loop', 'page' );
	      			$name = get_post_meta( $post->ID, '_cmb_name', true );
	      			$name_two = get_post_meta( $post->ID, '_cmb_name_two', true ); 
	      			$height = get_post_meta( $post->ID, '_cmb_height', true );
	      			$height_two = get_post_meta( $post->ID, '_cmb_height_two', true );
	      			$weight = get_post_meta( $post->ID, '_cmb_weight', true );
	      			$weight_two = get_post_meta( $post->ID, '_cmb_weight_two', true );
	      			$hometown = get_post_meta( $post->ID, '_cmb_hometown', true );
	      			$hometown_two = get_post_meta( $post->ID, '_cmb_hometown_two', true );
	      			$job = get_post_meta( $post->ID, '_cmb_occupation', true );
	      			$job_two = get_post_meta( $post->ID, '_cmb_occupation_two', true );
	      			$pic = get_post_meta( $post->ID, '_cmb_headshot', true );
	      			$pic_two = get_post_meta( $post->ID, '_cmb_headshot_two', true );
	      			$bio = get_post_meta( $post->ID, '_cmb_bio', true );
	      			$bio_two = get_post_meta( $post->ID, '_cmb_bio_two', true );
	      			$position = get_post_meta( $post->ID, '_cmb_position', true );
	      			$position_two = get_post_meta( $post->ID, '_cmb_position_two', true );

	      		?>
	      			
	      			<h1 class="fight_title">
	      				<div class="boxer_name_title"><?php echo $name ?></div>
	      				<img id ="versus" src="<?php bloginfo('template_directory'); ?>/images/versus.png" alt="versus" />
	      				<div class="boxer_name_title"><?php echo $name_two ?></div>
	      			</h1>

      				<div class="progress progress-striped col-xs-12">
						<div class="progress-bar progress-bar-danger active" style="width: 0%;">
							<span class="sr-only">0% Complete</span>
						</div>
					</div>

	      			<div class="fighter_one_outer col-sm-5 fighter">
	      					<div class="col-xs-12 boxing-top-bar">
	      						<div class="col-xs-6">
			      					<img src="<?php echo $pic ?>">
		      					</div>
		      					<div class="col-xs-6 boxer-info">
			      					<h3 class="boxer_name "><?php echo $name; ?></h3>
			      					<h3 class="boxer_height"><?php echo $height; ?></h3>
		      					</div>
	      					</div>

	      					<div class="col-xs-12 boxer-bio">
			      				<?php 
			      					if($bio){ echo '<blockquote>' . $bio . '</blockquote>' ;} 

			      				?>
			      				<hr>
			      				<button class="btn btn-default">Donate to <?php echo $name; ?></button>
	      					</div>
		      				
	      			</div>
	      			<div class="fighter_two_outer col-sm-5 fighter">
						<div class="col-xs-12 boxing-top-bar">
							<div class="col-xs-6">
		      					<img src="<?php echo $pic_two ?>">
	      					</div>
	      					<div class="col-xs-6 boxer-info">
		      					<h3><?php echo $name_two; ?></h3>
		      					<h3><?php echo $height_two; ?></h3>
	      					</div>
						</div>

      					<div class="col-xs-12 boxer-bio">
		      				<?php 
		      					if($bio_two){ echo '<blockquote>' . $bio_two . '</blockquote>' ;} 
		      				 ?>
		      				 <hr>
		      				 <button class="btn btn-default">Donate to <?php echo $name_two; ?></button>
      					</div>
		      				
	      			</div>

	      	</div>
		</div><!-- #container -->
<?php comments_template( '', true ); ?>



<?php get_footer(); ?>
<script>
	jQuery(document).ready(function(){
		jQuery(".progress").before(jQuery("div .wdf_goal"));
		// get the progress percentage and set our progress bar to it
		var percentage = jQuery(".wdf_goal_progress").attr("aria-valuenow");
		jQuery(".progress-bar-danger").width(percentage.concat("%"));

		// move social media to after fighter
		jQuery("#fight").after(jQuery(".twitter-share-button"));
		jQuery("#fight").after(jQuery(".fb-like"));

		//move fundraising panel to above progress bar
		jQuery(".progress").after(jQuery(".wdf_fundraiser_panel"));
		jQuery(".wdf_fundraiser_panel").after(jQuery(".progress"));

		jQuery(".wdf_send_donation").val("Back These Boxers");

	});
</script>
