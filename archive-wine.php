<? get_header(); ?>
<section id="content" role="main">
	
	archive-wine.php template
​
	WINES!
​
	<ul class="recent_posts">
	<? if ( have_posts() ) { 
		while ( have_posts() ) { 
			the_post(); ?>
			<li>
				<h1>
					<a href="<? the_permalink();?>">
						<? the_title(); ?>
					</a>
				</h1>
					
				<? the_content(); ?>
			</li>
		<? }
	} ?>
	</ul>
​
​
​
​
	<? get_template_part( 'nav', 'below' ); ?>
</section>
<? get_sidebar(); ?>
<? get_footer(); ?>