<?php

/**
 *  Template Name: Home Page
 *
 *

 */

get_header();
// Define Variables 

$page_id = get_the_ID();
$home_fields = get_field("home_fields");

// Slider Section
$slider_section = $home_fields['slider_section'];

//Slider Below Text
$slider_below_text = $home_fields['slider_below_text'];

// Services Grid Section
$services_grid_section = $home_fields['services_grid_section'];

// Services Small Grid Section
$services_small_grid_section = $home_fields['services_small_grid_section'];

//About Section
$about = $home_fields['about_section'];
$about_title = $about['about_title'];
$about_content = $about['about_content'];

//Services Section
$services = $home_fields['services'];

// Testimonial Section
$testimonial_user_text = $home_fields['testimonial']['testimonial_user_text'];
$testimonial_words = $home_fields['testimonial']['testimonial_words'];
$testimonial_content = $home_fields['testimonial']["testimonial_content"];

//Client Logo Section
$client_logo = get_field('client_logo', 'option');
$client_header_title = get_field('client_header_title', 'option');

?>

<!-- Start Home Section -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 ff-banner-slider">
            <div class="row">
                <div class="ff-ban">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            if (!empty($slider_section)):
                                $a = 1;
                                foreach ($slider_section as $slider) :
                                    if ($a == 1)
                                        $class = 'active';
                                    else
                                        $class = '';
                                    ?>
                                    <div class="carousel-item <?php echo $class; ?>">
                                        <img src="<?php echo $slider['slider_image']; ?>" class="d-block w-100"
                                             alt="<?php echo $slider['alt_tag']; ?>">

                                        <div class="ff-high-light"><h1> <?php echo $slider['slider_title']; ?> </h1>
                                        </div>
                                    </div>
                                    <?php
                                    $a++;
                                endforeach;
                            endif;
                            ?>
                        </div>
                        <?php $count = count($slider_section);
                        if ($count > '1') {
                            ?>
                            <a style="display: none;" class="carousel-control-prev" href="#carouselExampleIndicators"
                               role="button" data-slide="prev"> <span class="carousel-control-prev-icon"
                                                                      aria-hidden="true"></span> <span class="sr-only">Previous</span>
                            </a>
                            <a style="display: none;" class="carousel-control-next" href="#carouselExampleIndicators"
                               role="button" data-slide="next"> <span class="carousel-control-next-icon"
                                                                      aria-hidden="true"></span> <span class="sr-only">Next</span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <script>
                    jQuery('#carouselExampleIndicators').mousemove(function (e) {
                        var x = e.pageX - this.offsetLeft - 20;
                        var y = e.pageY - this.offsetTop - 143;

                        var width = jQuery('.ff-ban').width();
                        var height = jQuery('.ff-ban').height();

                        var widths = width / 2;
                        if (x <= widths && y >= '0' && y <= height) {
                            jQuery(".carousel-control-next").css('display', 'none');
                            var styles = {'left': x, 'display': 'flex', 'top': y}
                            jQuery(".carousel-control-prev").css(styles);
                        } else if (x <= width && x >= '180' && y >= '0' && y <= height) {
                            jQuery(".carousel-control-prev").css('display', 'none');
                            var styles = {'left': x, 'display': 'flex', 'top': y}
                            jQuery(".carousel-control-next").css(styles);
                        } else {
                            jQuery(".carousel-control-prev").css('display', 'none');
                            jQuery(".carousel-control-next").css('display', 'none');
                        }
                    });
                </script>
            </div>
            <div class="row">
                <div class="col-md-12 ff-txt-pb ff-bf-grey"> <?php echo $slider_below_text; ?> </div>
            </div>
        </div>
        <?php
        if (!empty($services_grid_section)):
            foreach (array_chunk($services_grid_section, 2, true) as $array) {
                echo '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"><div class="row">';
                foreach ($array as $value) {
                    ?>
                    <div class="box">
                        <?php
                        if (wp_is_mobile()) :?>
                            <img class="mobile lazy" src="<?php echo $value['services_grid_image'] ?>"
                                 alt="<?php echo $value['alt_tag'] ?>"/>
                        <?php else: ?>
                            <img class="desktop lazy" src="<?php echo $value['services_grid_image'] ?>"
                                 alt="<?php echo $value['alt_tag'] ?>"/>
                        <?php endif ?>
                        <div class="box-content">
                            <div class="content">
                                <h2 class="title">
                                    <?php echo $value['services_grid_title'] ?> </h2>
                                <div class="post">
                                    <?php echo $value['services_grid_content'] ?> </div>
                                <ul class="icon">
                                    <li><a href="<?php echo $value['services_grid_link'] ?>">READ MORE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                echo '</div></div>';
            }
        endif;
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
            <div class="row">
                <?php
                if (!empty($services_small_grid_section)) {
                    foreach ($services_small_grid_section as $grid) {
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                            <div class="row">
                                <div class="box">
                                    <?php if (wp_is_mobile()) : ?>
                                        <img class="mobile lazy" src=" <?php echo $grid['small_grid_image']; ?> "
                                             alt="<?php echo $grid['alt_tag']; ?>">
                                    <?php else: ?>
                                        <img class="desktop lazy" src=" <?php echo $grid['small_grid_image']; ?> "
                                             alt="<?php echo $grid['alt_tag']; ?>">
                                    <?php endif; ?>
                                    <div class="box-content">
                                        <div class="content">
                                            <h3 class="title"> <?php echo $grid['small_grid_title']; ?> </h3>
                                            <div class="post"> <?php echo $grid['small_grid_content']; ?> </div>
                                            <ul class="icon">
                                                <li><a href="<?php echo $grid['small_grid_link']; ?>"> READ
                                                        MORE </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Home Section -->
<!-- Start About Section -->
<div class="container">
    <div class="ff-hm-part-1">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 align-middle ff-width-auto text-center ff-curve-bg">
            <div class="ff-content-sec-1">
                <?php
                if (!empty($about_title))
                    echo "<h2>" . $about_title . "</h2>";
                if (!empty($about_content))
                    echo $about_content;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End About Section -->

<!-- Start Client Logo -->
<div class="flora-home container ff-team ff-mt-40 ff-client ff-logo-client">
    <div class="row ff-our-expert">
        <?php if (!empty($client_header_title)): ?>
            <h4> <?php echo $client_header_title; ?> </h4>
        <?php endif; ?>
    </div>
    <div class="client-logo customer-logos slider">
        <?php
        if (!empty($client_logo)) :
            foreach ($client_logo as $value):
                ?>
                <div class="slide"><img
                            class="" src="<?php echo $value['client_logo_image'] ?>"
                            alt="<?php echo $value['alt_tag'] ?>"></div>
            <?php
            endforeach;
        endif;
        ?>
    </div>
</div>

<!-- End Client Section -->

<!-- Start Services Section -->

<div class="col-md-12 ff-hm-part-2">
    <div class="row">
        <?php
        if (!empty($services)) :
            $s = 1;
            foreach ($services as $service) :
                ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="row">
                        <div class="ff-title-cat">
                            <div class="number bg-light-<?php echo $s; ?>"><?php echo $s; ?></div>
                            <div class="ff-detail">
                                <h3> <?php echo $service['service_title']; ?> </h3>
                                <?php echo $service['service_content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $s++;
            endforeach;
        endif;
        ?>
    </div>
</div>
<!-- End Services Section -->


<!-- Start Testimonial Section -->

<div class="col-md-12 ff-hm-part-2 desktop-testimonial">
    <div class="row">
        <section id="testimonial-area" class="container">
            <div class="row">
                <!--start section heading-->
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <?php
                        if (!empty($testimonial_user_text)) {
                            echo "<h5>" . $testimonial_user_text . "</h5>";
                        }
                        if (!empty($testimonial_words)) {
                            echo "<h5>" . $testimonial_words . "</h5>";
                        }
                        if (!empty($testimonial_content)) {
                            echo $testimonial_content;
                        }
                        ?>
                    </div>
                </div>
                <!--end section heading-->
            </div>
            <div class="testi-wrap">

                <?php
                global $post;
                $myposts = get_posts(array(
                    'posts_per_page' => 7,
                    'post_status' => 'publish',
                    'post_type' => 'testimonial',
                    'orderby' => 'ID',
                    'order' => 'ASC',
                ));
                if ($myposts) {
                    $i = 1;
                    foreach ($myposts as $post):
                        setup_postdata($post);
                        $images = get_field("testimonial-image", $post->ID);
                        $company_name = get_field("company-name", $post->ID);
                        if ($i == 1)
                            $class = 'active';
                        else
                            $class = 'inactive';
                        ?>
                        <!--start testimonial single-->
                        <div class="client-single <?php echo $class; ?> position-<?php echo $i; ?>"
                             data-position="position-<?php echo $i; ?>">
                            <div class="client-img">
                                <img src="<?php echo $images ?>" alt="<?php echo get_field("alt_tag", $post->ID); ?>">
                            </div>
                            <div class="client-comment">
                                <div class="conhtag"><?php the_content(); ?></div>
                                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                            </div>
                            <div class="client-info">
                                <b><?php the_title(); ?></b>
                                <p><?php echo $company_name; ?></p>
                            </div>
                        </div>
                        <!--end testimonial single-->
                        <?php
                        $i++;
                    endforeach;
                    wp_reset_postdata();
                }
                ?>
            </div>
        </section>
    </div>
</div>

<div class="container mobile-testimonial">
    <div class="row">
        <div class="col-md-8 col-center m-auto"><span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <div class="carousel-inner">
                    <!-- Wrapper for carousel items -->
                    <?php
                    if ($myposts) {
                        $t = 1;
                        foreach ($myposts as $mobile_post):
                            setup_postdata($mobile_post);
                            $mobileimages = get_field("testimonial-image", $mobile_post->ID);
                            $moblie_company_name = get_field("company-name", $mobile_post->ID);
                            if ($t == 1)
                                $class = 'active';
                            else
                                $class = 'inactive';
                            ?>
                            <div class="item carousel-item <?php echo $class; ?> ">
                                <div class="img-box">
                                    <img src="<?php echo $mobileimages; ?>" alt="<?php echo get_field("alt_tag", $post->ID); ?>">
                                </div>
                                <div Class="testimonial"> <?php the_content(); ?> </div>
                                <p class="overview"><b><?php echo $moblie_company_name; ?></b></p>
                            </div>
                            <?php
                            $t++;
                        endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i
                            class="fa fa-angle-left"></i> </a> <a
                        class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i> </a></div>
        </div>
    </div>
</div>


<!-- End Testimonial Section -->
<div class="container about-sec-1">
    <div class="section-heading text-center"><h5> Find Us On Instagram </h5></div>
    <?php echo  do_shortcode('[instagram-feed num=4 cols=4   showbio=false  showfollow=false showbutton=false showheader=false]');?>
    <div class="section-heading text-center"><h5> Our Secrets...Revealed </h5></div>
    <div class="row blog-home">
        <?php
        // the query
        $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3)); ?>
        <?php
        // Start the Loop.
        while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();
            ?>
            <div class="col-md-6 col-lg-4 mb-50px">
                <article class="post-list">
                    <div class="event_img">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="event_meta_top">
                        <span class="event_meta"> <?php //the_author_meta('user_nicename'); ?>  </span><?php //the_category(); ?>
                        <span class="event_meta_date"><?php the_date(); ?></span>
                    </div>
                    <h3 class="event_title">
                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a>
                    </h3>
                    <div class="event_meta_top">
                        <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                    </div>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-outline-dark rounded-0">Read More</a>
                </article>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>
<?php
get_footer();
?>
<!-- <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script> -->