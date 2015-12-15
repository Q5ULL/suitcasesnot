<?php get_header(); ?>
<section id="content" role="main">
	
	index.php template

<!-- 	<ul class="recent_posts">
	<?php if ( have_posts() ) { 
		while ( have_posts() ) {
			the_post(); ?>
			<li>
				<h1><a href="<? the_permalink();?>"><? the_title(); ?></h1></a>
				<? the_content(); ?>
			</li>
	<?}
}?>
	</ul> -->

	<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>