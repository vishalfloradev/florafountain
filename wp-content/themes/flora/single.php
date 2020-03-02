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
$posttype = get_post_type();

if($posttype != 'casestudy')
{
?>

<div class ="blog_title">
  <div class="container">
    <h1>
      <?php the_title();?>
    </h1>
  </div>
</div>
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
        <div class="ev-button wow fadeInUp"> <a href="<?php echo $about_header_button_link ?>" class="btn btn-fill"> <?php echo $about_header_button_name ?> </a> </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 ff-inner-hb">
      <?php if(!empty($about_header_image_one)) : ?>
      <div class="inner-image-banner"> <img src="<?php echo $about_header_image_one; ?>" alt="" /> </div>
      <?php endif; ?>
      <?php if(!empty($about_header_image_second)) : ?>
      <div class="ff-inner-image text-right"> <img src="<?php echo $about_header_image_second; ?>" alt="" /> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="container ff-mt-40 ff-about-text">
  <div class="row">
    <div class="col-md-9 blog-content">
      <div class="post-thumbnail-singal"> <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
        </a> </div>
      <!-- .post-thumbnail -->
      
      <h1>
        <?php //the_title(); ?>
      </h1>
      <?php
/* Start the Loop */
while ( have_posts() ) :
the_post();

the_content();


endwhile; // End of the loop.
wp_reset_postdata();
?>
      <div class="social-area col-md-12">
        <div class="social-nav"> <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo esc_url( get_page_link() ); ?>" class="element-animation"><span class="fa fa-facebook"></span></a> <a target="_blank" href="https://www.twitter.com/intent/tweet?text=<?php echo esc_url( get_page_link() ); ?>" class="element-animation"><span class="fa fa-twitter"></span></a> <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo esc_url( get_page_link() ); ?>" class="element-animation"><span class="fa fa-whatsapp"></span></a> </div>
      </div>
    </div>
    <div class="col-md-3 sidebar-blog">
      <?php if ( is_active_sidebar( 'footer-blog' )) :	?>
      <?php dynamic_sidebar( 'footer-blog' ); ?>
      <?php endif ?>
    </div>
  </div>
</div>
<?php
}
else
{	
$post_id = get_the_ID();
$main_image = get_field('main_image',$post_id );
$content_section_title = get_field('content_section_title',$post_id );
$content_section_content = get_field('content_section_content',$post_id );
$content_section_image = get_field('content_section_image',$post_id );
$icon_section = get_field('icon_section',$post_id );
$bottom_image = get_field('bottom_image',$post_id );
}
?>
<div class="col-md-12 desktop-case-tops">
  <div class="row">
    <?php $image = wp_get_attachment_image_src( $main_image, 'full' ); ?>
    <?php $alt_text = get_post_meta($main_image , '_wp_attachment_image_alt', true); ?>
    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" width="100%" /> </div>
</div>
<section class="case-content">
  <div class="container ff-case-text">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3><?php echo $content_section_title; ?></h3>
      </div>
    </div>
    <div class="row ff-mt-40">
      <div class="col-md-6 text-left"> <?php echo $content_section_content; ?> </div>
      <div class="col-md-6 text-left">
        <?php $cimage = wp_get_attachment_image_src( $content_section_image, 'full' ); ?>
        <?php $calt_text = get_post_meta($content_section_image , '_wp_attachment_image_alt', true); ?>
        <img src="<?php echo $cimage[0]; ?>" alt="<?php echo $calt_text; ?>" width="100%" /> </div>
    </div>
    <?php
if($icon_section)
{
echo '<div class="row ff-mt-40">';
$i=1;
foreach($icon_section as $icon_section_all)
{
if ($i % 2 == 0)
{
echo ' <div class="col-md-4 text-left case-icon-box case-yellow">';
}
else
{
echo ' <div class="col-md-4 text-left case-icon-box">';
}

$iimage = wp_get_attachment_image_src($icon_section_all['icon'], 'full' );
$ialt_text = get_post_meta($icon_section_all['icon'] , '_wp_attachment_image_alt', true);
echo '<img src="'.$iimage[0].'" alt="'.$ialt_text.'" />';
echo '<h4>'.$icon_section_all['title'].'</h4>';
echo '<p>'.$icon_section_all['content'].'</p>';
?>
  </div>
  <?php
$i++;
}
echo '</div>';
}
?>
</section>
<div class="col-md-12 desktop-case-tops">
  <div class="row">
    <?php $bimage = wp_get_attachment_image_src( $bottom_image, 'full' ); ?>
    <?php $balt_text = get_post_meta($bottom_image , '_wp_attachment_image_alt', true); ?>
    <img src="<?php echo $bimage[0]; ?>" alt="<?php echo $balt_text; ?>" width="100%" /> </div>
</div>
<section class="case-button">
  <div class="container ff-case-text">
    <div class="row">
      <div class="col-md-6 text-right"> <a href="#" class="btn btn-outline-dark rounded-0">hire us</a> </div>
      <div class="col-md-6 text-left"> <a href="#" class="btn btn-outline-dark rounded-0">Work With Us</a> </div>
    </div>
  </div>
</section>
<div class="row" style="margin-bottom:40px;">
  <?php
$prev_post = get_previous_post();
$next_post = get_next_post();
if ( ! empty( $prev_post ) ): 
$main_imagep = get_field('main_image',$prev_post->ID );
$imagep= wp_get_attachment_image_src( $main_imagep, 'full' ); 
?>
  <div class="col-md-6 text-center next-prv" style="background:url('<?php echo $imagep[0]; ?>');"> <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
    <p>Previous Case Study</p>
    <h3><?php echo apply_filters( 'the_title', $prev_post->post_title ); ?></h3>
    </a> </div>
  <?php endif; 
  ?>
  <?php
  if (empty($prev_post) || empty($next_post)): 
  $main_imagenp = get_field('main_image', $post_id );
$imagenp= wp_get_attachment_image_src( $main_imagenp, 'full' );
 ?>
  <div class="col-md-6 text-center next-prv" style="background:url('<?php echo $imagenp[0]; ?>');">
    <a href="<?php echo get_permalink( $post_id ); ?>">
     <p>Current Case Study</p>
    <h3> <?php echo get_the_title($post_id); ?></h3>
    </a> </div>
  <?php endif; 
  ?>
  <?php
if (!empty( $next_post ) ):
$main_imagen = get_field('main_image', $next_post->ID );
$imagen= wp_get_attachment_image_src( $main_imagen, 'full' );
 ?>
  <div class="col-md-6 text-center next-prv" style="background:url('<?php echo $imagen[0]; ?>');"> <a href="<?php echo get_permalink( $next_post->ID ); ?>">
    <p>Next Case Study</p>
    <h3> <?php echo apply_filters( 'the_title', $next_post->post_title ); ?></h3>
    </a> </div>
  <?php endif;
?>
</div>
<?php
// Testimonial Section
$testimonial_user_text = $home_fields['testimonial']['testimonial_user_text'];
$testimonial_words = $home_fields['testimonial']['testimonial_words'];
$testimonial_content = $home_fields['testimonial']["testimonial_content"];

?>
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
</div>
<style>
section.case-content {
background: #000;
color: #fff;
padding: 70px 0;
}
.ff-case-text p {
color: #fff;
padding-top: 20px;
line-height: 30px;
}
.case-icon-box
{
padding: 15px 10px;
}
.case-icon-box img {
width: 100px;
}
.case-icon-box h4 {
width: 100%;
font-size:30px;
margin:20px 0 10px;
}
.case-icon-box p {
width: 100%;
padding:0;
}
.case-yellow {
background: #FDCD0B;
padding: 15px 10px;
}
.case-button
{
	background:#000;
	padding:50px 0;
}
.case-button a {
    background: #fdcd0b;
    color: #000;
    text-transform: uppercase;
    border: 0;
    border-radius: 0;
    font-weight: 600;
    font-size: 20px;
    min-width: 200px;
}
.case-button a:hover {
	 background: #fdcd0b;
    color: #fff;
}

.next-prv a:hover {
    background: #fdcd0bc2;
}
.next-prv a {
    color: #000;
    display: block;
    padding: 140px 20px;
    width: 100%;
	text-decoration:none;
}
.next-prv a h3, .next-prv a p
{
	margin:0;
}
.next-prv {
    background-size: cover !important;
    background-repeat: no-repeat !important;
    padding: 0;
}
</style>
<?php
get_footer();
?>
