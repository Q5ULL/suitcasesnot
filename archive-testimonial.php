<? get_header(); ?>
<section id="content" role="main">
	
<!-- 	archive-project.php template
​
	<h1>A Project?</h1>
	<h2>the path is /project</h2> -->
​
	<div class="clearfix">
		<ul class="recent_posts grid">
		<? if ( have_posts() ) { 
			while ( have_posts() ) { 
				the_post(); ?>

				<li>
					<figure class="effect-oscar">
					<a href="<? the_permalink();?>">
						<img src="<?=get_field("project_image")["url"];?>" alt="">
						<figcaption>
							<!-- call the title of the project labeled posts -->
							<h2><? the_title(); ?></h2>
							<p><? the_content(); ?></p>
						</figcaption>
					</a>
					</figure>
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