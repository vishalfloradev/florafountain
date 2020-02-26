
<?php get_header();?>
<div class ="blog_title"><div class="container"><?php 	the_archive_title( '<h1 class="page-title">', '</h1>' );?></div></div>

<div class="container about-sec-1">
        <div class="row">
            <div class="col-md-12 col-lg-12">

            
<?php
			
				
			?>
			</div>
        <?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
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
<style>
.event_img {
    margin-bottom: 22px;
}

.event_title {
    margin-bottom: 8px;
}
</style>                
               
<?php get_footer();?>

