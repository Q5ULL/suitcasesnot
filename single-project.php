<? get_header(); ?>
<section class="container" id="content" role="main">
	
	single-project.php template
​
	<? if ( have_posts() ) { 
		while ( have_posts() ) { 
			the_post(); ?>
			
			<h1>
				<? the_title(); ?>
			</h1>

			<pre>

				<a href="#">
					<? 
						$img = get_field("project_image"); 
						// this is if you set up your field as an object
					?>
				</a>
			</pre>
			<!-- grab the field image id from the array defined above, $img[] -->
			<div>
				<?=wp_get_attachment_image( $img["id"], "medium"); ?>
			</div>

			
			<!-- this is the content editor -->
			<p><? the_content(); ?></p>

			
			<!-- the_field echos out the variable  -->
			<!-- get_field returns the variable -->
			<? the_field("project_type");?>
			<ul class="grid_2">

				<?
					if( have_rows('project_images')):
						
						// if there are rows, loop through them
						while (have_rows('project_images')):
							// we are on the attributes repeater field
							the_row(); 
							$img_thumb = get_sub_field("image_thumbnails");
						?>

						<figure>
							<li>
								<!--<? the_sub_field('image_thumbnails'); ?>-->
								<!-- the above code will print out all of the object data -->
								<?=wp_get_attachment_image( $img_thumb['id'], "thumbnail"); ?>
								
							</li>
						</figure>


						<? endwhile;
					endif;
				?>
				<ul>
					<h2>Skills</h2>
					<?php 
						$skills = get_field('project_skills');
					?>

					<?php if( $skills ): ?>
						<ul>
							<?php foreach( $skills as $skill ): ?>
							<li>
								<a href="<?php echo get_permalink( $skill->ID ); ?>">
									<?php echo get_the_title( $skill->ID ); ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
						
				</ul>
			

			</ul>



		<? }
	} ?>
​
​
​
​
	<? get_template_part( 'nav', 'below' ); ?>
</section>
<? get_sidebar(); ?>
<? get_footer(); ?>