<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
                            <div id="news-menu">
                                <h2>呈色动态</h2>
                                 <?php $news = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'post_status' => 'publish',
                                                        'showposts' => 7,
                                                        'orderby' => 'date',
                                                        'order' => 'DESC'
                                                    ));?>
                                <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                                <div class="newsItem">
                                    <?php $cats = wp_get_post_categories(get_the_ID());?>
                                    【
                                    <?php foreach($cats as $row){
                                            $cat = get_category( $row );
                                            echo $cat->name;
                                    }?> 】
                                    <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
                                </div>                        
                                 <?php endwhile;?>

                                <p style="text-align: right;margin-top: 20px;margin-right: 20px;"><a href="<?php echo get_permalink(88);?>" title="更多...">更多...</a></p>
                            </div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>