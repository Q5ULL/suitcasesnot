<? get_header(); ?>
<section id="content" role="main">
	
	single-project.php template
​
	<? if ( have_posts() ) { 
		while ( have_posts() ) { 
			the_post(); ?>
			
			<h1>
				Project: <? the_title(); ?>
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
			<?=wp_get_attachment_image( $img["id"], "medium"); ?>
			
			<!-- this is the content editor -->
			<? the_content(); ?>
			
			<!-- the_field echos out the variable  -->
			<!-- get_field returns the variable -->
			<? the_field("project_type");?>

			<!-- NOTE:if get_title = something, do something else -->
			<h3>
				Written by: <? the_author(); ?> at 
				<? the_time(); ?> on <? the_date(); ?>
			</h3>

			<ul>

			<?
				if( have_rows('project_images')):
					
					// if there are rows, loop through them
					while (have_rows('project_images')):
						// we are on the attributes repeater field
						the_row(); 
						$img_thumb = get_sub_field("image_thumbnails");
					?>
						<li>
							<!--<? the_sub_field('image_thumbnails'); ?>-->
							<!-- the above code will print out all of the object data -->
							<?=wp_get_attachment_image( $img_thumb['id'], "thumbnail"); ?>
							
						</li>

					<? endwhile;
				endif;
			?>
			</ul>
			<!-- <? the_sub_field('value'); ?> -->



		<ul>
			<h2>Skills</h2>
			<?
			// print_r(get_field("project_skills"));
				foreach ( get_field("project_skills") as $attr): ?>
				<li>
					<b><?=$attr['project_skill_type']; ?></b>
				</li>
				<? endforeach; 
			?>
		</ul>

<!-- 					<?=$attr['value']; ?> -->

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