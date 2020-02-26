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
$about_field = get_field('default_header');

//Service Header Section
$about_header= $about_field['about_header'];
$about_header_image_one= $about_header['about_header_image_one'];
$about_header_image_second= $about_header['about_header_image_second'];
$about_header_text= $about_header['about_header_text'];
$about_header_content= $about_header['about_header_content'];
$about_header_button_name= $about_header['about_header_button_name'];
$about_header_button_link= $about_header['about_header_button_link'];

$services_field = get_field('portfolio_field');
$portfolio_posts= $services_field['portfolio_post_all'];
$args = array(
    'numberposts' 	   => 6,
    'post_type'   	   => 'portfolio',
    'order' 		   => 'DESC',
    'post__in'        => $portfolio_posts,
    'orderby' 	   => 'post__in',
    'post_status'    => 'publish',
);
$portfolios = get_posts( $args );
?>
    <div class="container about-sec-1">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="header-content-inner center ev-home-padding">
                    <?php if (!empty($about_header_text ))  : ?>
                        <h3 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $about_header_text; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($about_header_content ))  : ?>
                        <h2><?php echo $about_header_content; ?></h2>
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
                    <div class="col-md-12">
                        <h1><?php the_title(); ?></h1>
			<?php
			while ( have_posts() ) :
				the_post();

				//get_template_part( 'template-parts/page/content', 'page' );
the_content();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
                    </div></div></div>

    <div class="container">
    <div class="ff-prot-tagline ff-about-text ff-service">
        <h4>Our Projects</h4>
    </div>
    <div class="col-md-12 ff-bf-prot">
        <div class="row">
            <?php
            if(!empty($portfolios)) :
                $i=1;
                foreach($portfolios as $project) :
                    ?>
                    <script>
                        jQuery(document).ready(function(){
                            jQuery(".group<?php echo $i; ?>").colorbox({rel:'group<?php echo $i; ?>'});
                            jQuery(".group<?php echo $i; ?>").colorbox({maxWidth:'95%', maxHeight:'95%'});
                        });
                    </script>
                <?php

                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($project->ID) );
                ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="prtdetails">
                            <img class="image" src="<?php echo $feat_image; ?>" alt="<?php echo $project->post_title; ?>" />

                            <div class="middle">
                                <a href="<?php echo $feat_image; ?>" class="group<?php echo $i; ?>"> <div class="text">View More</div>
                                </a></div>
                            <?php $images = get_field('portfolio_gallery', $project->ID);
                            if( $images ): ?>
                                <ul style="display: none;">
                                    <?php foreach( $images as $image ): ?>
                                        <li>
                                            <a href="<?php echo $image['url']; ?>" class="group<?php echo $i; ?>">
                                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php
                    $i++;
                endforeach;
            endif;
            ?>
        </div>

            <div class="ff-protfolio"> <a href="http://florafountain.com/portfolios/"> GO TO PORTFOLIO </a></div>

    </div>
    </div>
<?php
get_footer();
