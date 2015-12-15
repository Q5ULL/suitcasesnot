<?php get_header(); ?>
<section id="content" role="main">
	
	index.php template
	
<!-- 	<ul class="recent_posts">
		<?php if ( have_posts() ) { 
			while ( have_posts() ) {
				the_post(); ?>
				<li>
					<h1><? the_title(); ?></h1>
					<!-- we need to pull from our new customized field group -->
					What nationality is this cheese? <? the_field('nationality'); ?>
					<!-- using the documentation, you are telling it to get the field, called nationality, and post it on the page -->

					<? the_content(); ?>
					<h3>Written by: <? the_author(); ?> at <? the_time(); ?> on <? the_date(); ?></h3>
					<h4><? the_category(); ?></h4>
				</li>
			<?}
		}?>
	</ul> -->

	<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>