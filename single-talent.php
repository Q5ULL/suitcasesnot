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

			<? 

				// this is if you set up your field as an object
			?>

			</pre>
			<!-- grab the field image id from the array defined above, $img[] -->

			
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
<?php 

						/*
						*  Query posts for a relationship value.
						*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
						*/

						$doctors = get_posts(array(
							'post_type' => 'project',
							'meta_query' => array(
								array(
									'key' => 'project_skills', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));

						?>
						<?php if( $doctors ): ?>
							<ul>
							<?php foreach( $doctors as $doctor ): ?>

								<li>
									<a href="<?php echo get_permalink( $doctor->ID ); ?>">
										<?php echo get_the_title( $doctor->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						
			</ul>
			<!-- <? the_sub_field('value'); ?> -->





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