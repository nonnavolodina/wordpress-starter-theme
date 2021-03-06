<?php get_header();  ?>

<div class="main">
    <div class="container">
        <div class="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
        <?php get_sidebar(); ?>
    </div> 
</div> 

<?php get_footer(); ?>