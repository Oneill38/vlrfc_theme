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
	      				<div class="boxer_name_title"><?php echo $name ?></div>
	      				<img id ="versus" src="<?php bloginfo('template_directory'); ?>/images/versus.png" alt="versus" />
	      				<div class="boxer_name_title"><?php echo $name_two ?></div>
	      			</h1>

	      			<div class="fighter_one_outer col-sm-5 fighter">
	      				<div class="fighter_inner">
		      				<h3 class="boxer_name alignleft"><?php echo $name; ?></h3>
		      				<h3 class="boxer_height alignright"><?php echo $height; ?></h3>
		      				<img src="<?php echo $pic ?>">
		      				<h3><span class="glyphicon glyphicon-user"><div class="stats_header">Stats</div></span></h3>
		      				<?php 
		      					if($weight){ echo '<h4 class="boxer_info"><span class="color_me_red">Weight:</span> ' . $weight . '</h4>' ;} 
		      					if($hometown){ echo '<h4 class="boxer_info"><span class="color_me_red">Hometown:</span> ' . $hometown . '</h4>' ;} 
		      					if($job){ echo '<h4 class="boxer_info"><span class="color_me_red">Occupation:</span>  ' . $job . '</h4>' ;} 
		      					if($position){ echo '<h4 class="boxer_info"><span class="color_me_red">Position:</span> ' . $position . '</h4>' ;}
		      					if($bio){ echo '<h4 class="boxer_info"><span class="color_me_red">Bio:</span>  ' . $bio . '</h4>' ;} 

		      				?>
		      			</div>
	      			</div>
	      			<div class="fighter_two_outer col-sm-5 fighter">
								<div class="fighter_inner">
									<h3 class="boxer_name alignleft"><?php echo $name_two; ?></h3>
		      				<h3 class="boxer_height alignright"><?php echo $height_two; ?></h3>
		      				<img src="<?php echo $pic_two ?>">
		      				<h3><span class="glyphicon glyphicon-user"><div class="stats_header">Stats</div></span></h3>
		      				<?php 
		      					if($weight_two){ echo '<h4 class="boxer_info"><span class="color_me_red">Weight:</span> ' . $weight_two . '</h4>' ;} 
		      					if($hometown_two){ echo '<h4 class="boxer_info"><span class="color_me_red">Hometown:</span> ' . $hometown_two . '</h4>' ;} 
		      					if($job_two){ echo '<h4 class="boxer_info"><span class="color_me_red">Occupation:</span> ' . $job_two . '</h4>' ;} 
		      					if($position_two){ echo '<h4 class="boxer_info"><span class="color_me_red">Position:</span> ' . $position_two . '</h4>' ;}
		      					if($bio_two){ echo '<h4 class="boxer_info"><span class="color_me_red">Bio:</span> ' . $bio_two . '</h4>' ;} 
		      				 ?>
		      			</div>
	      			</div>
	      			<div class="progress progress-striped col-xs-12">
								<div class="progress-bar progress-bar-danger active" style="width: 0%;">
								<span class="sr-only">0% Complete</span>
							</div>
						</div>
	      	</div>
		</div><!-- #container -->
<?php comments_template( '', true ); ?>

<div id="disclaimer">
<p><strong>Your donations will support Play Rugby USA, The Bowery Mission, and Village Lions Rugby Football Club.</strong></p>
<p><a href=http://playrugbyusa.com/>Play Rugby USA</a> is dedicated to changing kids’ lives through rugby, fitness, sports, and health education. 
The Play Rugby USA program brings the benefits of rugby to youth of all ages, backgrounds, and abilities, with 
a particular focus on serving disadvantaged urban youth. The organization has won national recognition for 
pioneering its mission of “developing youth through rugby.” This mission is about nurturing the social, moral, 
and physical competencies that youth need to become leaders in life.</p>
<p><a href=http://www.bowery.org/>The Bowery Mission</a> is a charity serving homeless and hungry New Yorkers since 1879. This year, The Bowery 
Mission provided more than 382,400 meals to men, women, and children; 93,700 nights of shelter; and 46,800 
articles of clothing; as well as showers, haircuts, and expert medical and optometric care. Each meal and every 
night of shelter are invitations to its residential recovery programs, in which lives are transformed from 
hopelessness to hope. Last year, the organization’s residential programs served nearly 400 men and women who 
are regaining sobriety, reconnecting with family and faith, pursuing educational goals, and preparing for work 
and independent living. The Bowery Mission’s summer camp served nearly 1,100 at-risk youth from underserved 
New York City neighborhoods.</p>
<p>Village Lions Rugby Football Club is a New York City-based nonprofit that fosters the sport of rugby in 
organized team play and participates in league competition and tournaments sanctioned by USA Rugby. The Lions 
Women are celebrating their 15th anniversary in 2015, while the club as a whole was founded in 1989 in Greenwich
Village. With a mix of internationals and homegrown players, the club has members ranging from former Eagles to 
current Olympic hopefuls to social members keeping the tradition and spirit of the Lions alive. The Lions field 
three sides — Men, Women, and Social/Old Boys — and host two annual tournaments, Four Leaf 15s and Hell Gate 7s. 
</p>
<p>Village Lions RFC is a nonprofit in the process of applying for reinstatement of tax-exempt status. If it 
achieves that status, which it anticipates, donations will be tax-exempt to the extent permitted by law on a 
retroactive basis. If you have further questions, please email <a href="mailto:treasurer@villagelions.org">
treasurer@villagelions.org</a>.</p>

</div>


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
