<?php
/**
*  Template Name: Case Study Page
*
*
*/


get_header();

$casestudy_field = get_field('casestudy_field');

//Service Header Section 
$casestudy_header = $casestudy_field['casestudy_header'];
$casestudy_header_image_one = $casestudy_header['casestudy_header_image_one'];
$casestudy_header_image_second = $casestudy_header['casestudy_header_image_second'];
$casestudy_header_text = $casestudy_header['casestudy_header_text'];
$casestudy_header_content = $casestudy_header['casestudy_header_content'];
$casestudy_header_button_name = $casestudy_header['casestudy_header_button_name'];
$casestudy_header_button_link = $casestudy_header['casestudy_header_button_link'];


$top_content_title = get_field('top_content_title');
$top_content = get_field('top_content');

$args = array(
'numberposts' => -1,
'post_type' => 'casestudy',
'order' => 'DESC',
'post_status' => 'publish'
);
$casestudys = get_posts($args);
?>

<div class="container about-sec-1">
  <div class="row">
    <div class="col-md-6">
      <div class="header-content-inner center ev-home-padding">
        <?php if (!empty($casestudy_header_text))  : ?>
        <h3 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $casestudy_header_text; ?></h3>
        <?php endif; ?>
        <?php if (!empty($casestudy_header_content))  : ?>
        <h2><?php echo $casestudy_header_content; ?></h2>
        <?php endif; ?>
        <?php if (!empty($casestudy_header_button_name) && ($casestudy_header_button_link))  : ?>
        <div class="ev-button wow fadeInUp"><a href="<?php echo $casestudy_header_button_link ?>" class="btn btn-fill"> <?php echo $casestudy_header_button_name ?> </a> </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-6 ff-inner-hb">
      <?php if (!empty($casestudy_header_image_one)) : ?>
      <div class="inner-image-banner"> <img src="<?php echo $casestudy_header_image_one; ?>" alt=""/> </div>
      <?php endif; ?>
      <?php if (!empty($casestudy_header_image_second)) : ?>
      <div class="ff-inner-image text-right"> <img src="<?php echo $casestudy_header_image_second; ?>" alt=""/> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="container ff-mt-70 text-center ff-about-text">
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo $top_content_title; ?></h1>
      <p><?php echo $top_content; ?></p>
    </div>
  </div>
</div>
<div class="container ff-mt-30 text-center ff-about-text ff-service">
  <div class="row">
    <?php
if (!empty($casestudys)) :
$i = 1;
foreach ($casestudys as $casestudy) :
$main_image = get_field('case_study_list_image',$casestudy->ID );
$image = wp_get_attachment_image_src( $main_image, 'full' );
$alt_text = get_post_meta($main_image , '_wp_attachment_image_alt', true);
?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
      <div class="casedetails"><a href="<?php echo get_the_permalink($casestudy->ID); ?>" class="links"> <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>"  class="image"/></a>
        <div class="middle"> <a href="<?php echo get_the_permalink($casestudy->ID); ?>" class="">
          <div class="casetext"><?php echo get_the_title($casestudy->ID); ?></div>
          </a></div>
      </div>
    </div>
    <?php
$i++;
endforeach;
endif;
?>
  </div>
</div>
<div class="clearfix"></div>
<?php
// Testimonial Section
$testimonial_user_text = $home_fields['testimonial']['testimonial_user_text'];
$testimonial_words = $home_fields['testimonial']['testimonial_words'];
$testimonial_content = $home_fields['testimonial']["testimonial_content"];

?>
<!-- Start Testimonial Section -->

<div class="col-md-12 ff-hm-part-2 ff-mt-50 desktop-testimonial">
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
          <div class="client-img"> <img src="<?php echo $images ?>" alt="Web Design Company"> </div>
          <div class="client-comment">
            <div class="conhtag">
              <?php the_content(); ?>
            </div>
            <span><i class="fa fa-quote-left" aria-hidden="true"></i></span> </div>
          <div class="client-info"> <b>
            <?php the_title(); ?>
            </b>
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
            <div class="img-box"> <img src="<?php echo $mobileimages; ?>" alt="Digital Marketing Company"> </div>
            <div Class="testimonial">
              <?php the_content(); ?>
            </div>
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
                        class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a></div>
    </div>
  </div>
</div>

<!-- End Testimonial Section -->
<div class="container about-sec-1">
  <div class="section-heading text-center">
    <h5> Find Us On Instagram </h5>
  </div>
  <?php echo  do_shortcode('[instagram-feed num=4 cols=4   showbio=false  showfollow=false showbutton=false showheader=false]');?>
  <div class="section-heading text-center">
    <h5> Our Secrets...Revealed </h5>
  </div>
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
        <div class="event_meta_top"> <span class="event_meta">
          <?php //the_author_meta('user_nicename'); ?>
          </span>
          <?php //the_category(); ?>
          <span class="event_meta_date">
          <?php the_date(); ?>
          </span> </div>
        <h3 class="event_title"> <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a> </h3>
        <div class="event_meta_top"> <?php echo wp_trim_words(get_the_content(), 30, '...'); ?> </div>
        <a href="<?php echo get_permalink(); ?>" class="btn btn-outline-dark rounded-0">Read More</a> </article>
    </div>
    <?php
        endwhile;
        ?>
  </div>
</div>
<?php
get_footer();

