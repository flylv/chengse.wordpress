<?php
/**
    Template Name: Big content and no title 
 */

get_header(); ?>
<div id="primary">
        <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="page  gallery">
                            <div class="entry-content">
                                    <?php the_content(); ?>
                                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
                            </div><!-- .entry-content -->               
                    </article><!-- #post-<?php the_ID(); ?> -->

                <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>