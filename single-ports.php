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
				/*print_r(get_field("image_of_wine_bottle") ); */
				$img = get_field("image_of_wine_bottle"); 

			?>
			</pre>

			<img src="<?=$img['sizes']['medium'];?>" alt="<?=$img['title'];?>">

			<?=wp_get_attachment_image( $img["id"], "thumbnail"); ?>

			<? the_content(); ?>
			
			<h3>
				Written by: <? the_author(); ?> at 
				<? the_time(); ?> on <? the_date(); ?>
			</h3>
			<h4>
				<? the_category();?>
			</h4>
			<? /*
			<ul>
			<?
				if( have_rows('attributes')):
					// if there are rows, loop through them
					while (have_rows('attributes')):
						// we are on the attributes repeater field
						the_row(); ?>
						<li>
							<b><? the_sub_field('name'); ?></b>
							<? the_sub_field('value'); ?>
						</li>
					<? endwhile;
				endif;
			?>
			</ul>
		*/ ?>
		<ul>
			<?
				foreach ( get_field("attributes") as $attr): ?>
				<li>
					<b><?=$attr['name']; ?></b>
					<?=$attr['value']; ?>
				</li>
				<? endforeach; 
			?>
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