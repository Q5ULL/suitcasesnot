<?php 

get_header();

if ( have_posts() ) { 
	while ( have_posts() ) {
		the_post(); 

		the_title();
		// make sure you have set your static home page as the place to go
		the_content();
	}
}
?>

	<h2>List of things!</h2>
	<ul>
<?
// WP_Query arguments
$args = array (
	'post_type'              => array( 'wine' ),
	'post_status'            => array( 'publish' ),
	'posts_per_page'         => '10000',
	'orderby'                => 'rand',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		// do something
		?>
		<li> 
			<a href="<? the_permalink(); ?>">
				<!-- the permalink will always pull you to the right page, you can change the permalink, and it will update and still take you to the same page -->
			<? $img = get_field("image_of_wine_bottle"); ?>
			<?=wp_get_attachment_image( $img["id"], "thumbnail"); ?>
			<? the_title() ?></li>
			</a>
		<?
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>
</ul>
<?
get_footer();

?>