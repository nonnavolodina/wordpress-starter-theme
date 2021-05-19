<?php get_header(); ?>
<div class="main">
	<div class="container">
		<div class="content">
			<?php if ( have_posts() ) : ?>
				<h1>Search Results for: <?php echo get_search_query(); ?></h1>
				<?php get_template_part( 'loop', 'search' ); ?>
			<?php else : ?>
				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div> 

<?php get_footer(); ?>