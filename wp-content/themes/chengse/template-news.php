<?php
/**
    Template Name: Template News
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
        
        <article id="post-<?php the_ID(); ?>" class="page allnews">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
            query_posts(array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'paged' => $paged,
                            ));
                        
             while ( have_posts() ) : the_post();?>
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
                <nav class="nav-single">				
                    <div class="nav-previous"><?php previous_posts_link('<span class="meta-nav">' . _x(  "上一页", "chengse" ) . '</span>'  ); ?></div>
                    <div class="nav-next"><?php next_posts_link( '<span class="meta-nav">'._x("下一页","chengse").'</span> '); ?></div>	
                </nav><!-- .nav-single -->
            </article>
        </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>