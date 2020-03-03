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
get_footer();

