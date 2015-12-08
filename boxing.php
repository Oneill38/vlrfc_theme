<?php


get_header(); ?>

		<div id="fight" class="one-column container-fluid">
			<a href="http://www.villagelions.org/2015-wcb/"><div class="featured-image">
					<?php the_post_thumbnail('onecolumn-image', array('title' => get_the_title())); ?>
				</div></a>
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
	      				<div class="boxer_name_title"><?php echo $name ?> v.s. <?php echo $name_two ?></div>	
	      			</h1>

	      			<div class="fighter_one_outer col-sm-5 fighter">
	      					<div class="col-xs-12 boxing-top-bar">
	      						<div class="col-xs-12 boxer-info">
			      					<div class="col-xs-6"><h3 class="boxer_name "><?php echo $name; ?></h3></div>
			      					<div class="col-xs-6"><h3 class="boxer_height"><?php echo $height; ?></h3></div>
		      					</div>
	      						<div class="col-xs-12 boxer_headshot">
			      					<img class="boxer_pic" src="<?php echo $pic ?>">
		      					</div>
	      					</div>

	      					<div class="col-xs-12 boxer-bio">
			      				<?php 
			      					if($bio){ echo '<blockquote>' . $bio . '</blockquote>' ;} 

			      				?>
			      					<input type="text" id="box_knob_one" value="0" class="dial" data-linecap="round" data-fgColor="#dd0000">
			      				<hr>
			      				<div class="col-xs-12 donate_one">
			      					<h3>Donate to <?php echo $name; ?></h3>
			      				</div>
	      					</div>
		      				
	      			</div>
	      			<div class="fighter_two_outer col-sm-5 fighter">
						<div class="col-xs-12 boxing-top-bar">
							<div class="col-xs-12 boxer-info">
		      					<div class="col-xs-6"><h3><?php echo $name_two; ?></h3></div>
		      					<div class="col-xs-6"><h3><?php echo $height_two; ?></h3></div>
	      					</div>
							<div class="col-xs-12 boxer_headshot">
		      					<img class="boxer_pic" src="<?php echo $pic_two ?>">
	      					</div>
						</div>

      					<div class="col-xs-12 boxer-bio">
		      				<?php 
		      					if($bio_two){ echo '<blockquote>' . $bio_two . '</blockquote>' ;} 
		      				 ?>
		      				 	<input type="text" id="box_knob_two" value="0" class="dial" data-linecap="round" data-fgColor="#dd0000">
		      				 <hr>
		      				 <div class="col-xs-12 donate_two">
		      				 	<h3>Donate to <?php echo $name_two; ?></h3>
		      				 </div>
      					</div>
		      				
	      			</div>
	      			<div class="progress-bar-div col-xs-12">
		      			<div class="progress progress-striped col-xs-12">
							<div class="progress-bar progress-bar-danger active" style="width: 0%;">
								<span class="sr-only">0% Complete</span>
							</div>
						</div>
	      			</div>

	      			<div class="col-xs-12 boxer_charity">
	      				<h2>Learn more about our sponsored charity:<br> <a href="https://www.bowery.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/bowery.png"></a></h2>
	      			</div>

	      	</div>
		</div><!-- #container -->
<?php comments_template( '', true ); ?>



<?php get_footer(); ?>
<script>
	jQuery(document).ready(function(){
		jQuery(".progress").before(jQuery("div .wdf_goal"));
		
		// get the progress percentage and set our progress bar to it
		if( jQuery(".wdf_goal_progress").length > 1){
			var val_one = parseInt(jQuery(".wdf_goal_progress").first().attr("total"));
			var val_two = parseInt(jQuery(".wdf_goal_progress").last().attr("total"));
			var goal_one = parseInt(jQuery(".wdf_goal_progress").first().attr("goal"));
			var goal_two = parseInt(jQuery(".wdf_goal_progress").last().attr("goal"));
			var total = ((val_one + val_two)/(goal_one + goal_two)) * 100;
			jQuery("#box_knob_one").val(jQuery(".wdf_goal_progress").first().attr("aria-valuenow"));
		    jQuery("#box_knob_two").val(jQuery(".wdf_goal_progress").last().attr("aria-valuenow"));
			jQuery(".progress-bar-danger").width(total.toString().concat("%"));
			jQuery(".progress").before("<h3 class='progress-totals'>$ " + (val_one + val_two) + "/" + (goal_one + goal_two) + "</h3>");
		}else{
			var percentage = jQuery(".wdf_goal_progress").attr("aria-valuenow");
			jQuery(".progress-bar-danger").width(percentage.concat("%"));
		}

		//move donation form to each boxers area
		jQuery(".wdf_fundraiser_panel").last().appendTo(".donate_two");
		jQuery(".wdf_fundraiser_panel").first().appendTo(".donate_one");

		// move social media to after fighter
		jQuery("#fight").after(jQuery(".twitter-share-button"));
		jQuery("#fight").after(jQuery(".fb-like"));

		jQuery(".wdf_send_donation").val("Donate!");
		jQuery(".wdf_send_donation").css({ "background-color": "#dd0000", "color": "black" });
		jQuery(".wdf_pledge_amount").attr("placeholder", "0.00");

		jQuery(function() {
	        jQuery(".dial").knob({
	        	readOnly: 'true'
	        });
	    });


	});
</script>
