<? get_header(); ?>
<section id="content" role="main">
	
	archive-project.php template
​
	<h1>A Project?</h1>
	<h2>the path is /project</h2>
​
	<div class="clearfix">
		<ul class="recent_posts grid">
		<? if ( have_posts() ) { 
			while ( have_posts() ) { 
				the_post(); ?>
				<li class="figure effect-smooth" style="height:200px;width:200px;background-size:contain;background-image: url(<?=get_field("project_image")["url"];?>)">
					<h1>
						<a href="<? the_permalink();?>">
							<? the_title(); ?>
							<!-- call the title of the project labeled posts -->
						</a>
					</h1>
						
					<? the_content(); ?>
				</li>
			<? }
		} ?>
		</ul>
	</div>
​
​
​
​
	<? get_template_part( 'nav', 'below' ); ?>
</section>
<? get_sidebar(); ?>
<? get_footer(); ?>