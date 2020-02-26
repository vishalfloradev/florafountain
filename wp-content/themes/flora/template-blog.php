<?php
/**
 *  Template Name: Blog Page
 *
 * 
 */

get_header();
?>
<div class ="blog_title"><div class="container"><h1><?php the_title();?></h1></div></div>
    <div class="container about-sec-1">
    <div class="row">


<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<?php
// Start the Loop.
while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
    ?>
    <div class="col-md-6 col-lg-4 mb-50px">
        <article class="post-list">
            <div class="event_img">
                <?php the_post_thumbnail();?>
            </div>
            <div class="event_meta_top">
                <span class="event_meta">By <?php the_author_meta('user_nicename'); ?> |  </span><?php the_category(); ?>
                <span class="event_meta_date"><?php the_date(); ?></span>
            </div>
            <h5 class="event_title">
                <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?> </a>
            </h5>
            <div class="event_meta_top">
                <?php echo wp_trim_words( get_the_content(), 30, '...' ); ?>
            </div>
            <a  href="<?php echo get_permalink();?>" class="btn btn-outline-dark rounded-0">Read More</a>
        </article>
    </div>
<?php
endwhile;
?>
    </div>
    </div>
<?php
get_footer();
