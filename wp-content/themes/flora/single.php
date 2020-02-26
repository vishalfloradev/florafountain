<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

?>
    <div class ="blog_title"><div class="container"><h1><?php the_title();?></h1></div></div>
    <div class="container about-sec-1">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="header-content-inner center ev-home-padding">
                    <?php if (!empty($about_header_text ))  : ?>
                        <h2 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $about_header_text; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($about_header_content ))  : ?>
                        <h3><?php echo $about_header_content; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($about_header_button_name )  && ($about_header_button_link))  : ?>
                        <div class="ev-button wow fadeInUp">
                            <a href="<?php echo $about_header_button_link ?>" class="btn btn-fill"> <?php echo $about_header_button_name ?> </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 ff-inner-hb">
                <?php if(!empty($about_header_image_one)) : ?>
                    <div class="inner-image-banner">
                        <img src="<?php echo $about_header_image_one; ?>" alt="" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($about_header_image_second)) : ?>
                    <div class="ff-inner-image text-right">
                        <img src="<?php echo $about_header_image_second; ?>" alt="" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
            <div class="container ff-mt-40 ff-about-text">
                <div class="row">
                    <div class="col-md-9 blog-content">
                        
		<div class="post-thumbnail-singal">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->

                        <h1><?php //the_title(); ?></h1>
						<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content();


			endwhile; // End of the loop.
			?>
			<div class="social-area col-md-12">

			<div class="social-nav"> 
	<a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo esc_url( get_page_link() ); ?>" class="element-animation"><span class="fa fa-facebook"></span></a>
    
<a target="_blank" href="https://www.twitter.com/intent/tweet?text=<?php echo esc_url( get_page_link() ); ?>" class="element-animation"><span class="fa fa-twitter"></span></a>
	<a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo esc_url( get_page_link() ); ?>" class="element-animation"><span class="fa fa-whatsapp"></span></a>
			</div>
		</div>
                    </div>
                      <div class="col-md-3 sidebar-blog">
                          
					<?php if ( is_active_sidebar( 'footer-blog' )) :	?>


	<?php dynamic_sidebar( 'footer-blog' ); ?>

<?php endif ?>
                          </div>
                    
                    </div></div>

   
    </div>
<?php
get_footer();
