<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header(); ?>
    <div class="container ff-mt-70 text-center ff-about-text">
        <div class="row">
            <div class="col-md-12">
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
                </header>

                <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
                <p><?php _e( 'It looks like nothing was found at this location.', 'twentythirteen' ); ?></p>
                <div class="ev-button wow fadeInUp" style="
    display: inline-block;"><a href="<?php echo site_url(); ?>" class="btn btn-fill"> GO HOME </a>
                </div>
            </div></div></div>

<?php
get_footer();
