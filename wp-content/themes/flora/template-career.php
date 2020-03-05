<?php
/**
*  Template Name: Career Page
*
* 
*/

get_header(); 
$career_field = get_field('career_field');

//Service Header Section 
$career_header= $career_field['career_header'];
$career_header_image_one= $career_header['career_header_image_one'];
$career_header_image_second= $career_header['career_header_image_second'];
$career_header_text= $career_header['career_header_text'];	
$career_header_content= $career_header['career_header_content'];	
$career_header_button_name= $career_header['career_header_button_name'];	
$career_header_button_link= $career_header['career_header_button_link'];	


//Top Title
$career_main_title= get_field('career_main_title');
$career_content= get_field('career_content');
?>

<div class="container about-sec-1">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6">
      <div class="header-content-inner center ev-home-padding">
        <?php if (!empty($career_header_text ))  : ?>
        <h3 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $career_header_text; ?></h3>
        <?php endif; ?>
        <?php if (!empty($career_header_content ))  : ?>
        <h2><?php echo $career_header_content; ?></h2>
        <?php endif; ?>
        <?php if (!empty($career_header_button_name )  && ($career_header_button_link))  : ?>
        <div class="ev-button wow fadeInUp"> <a href="<?php echo $career_header_button_link ?>" class="btn btn-fill"> <?php echo $career_header_button_name ?> </a> </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 ff-inner-hb">
      <?php if(!empty($career_header_image_one)) : ?>
      <div class="inner-image-banner"> <img src="<?php echo $career_header_image_one; ?>" alt="" /> </div>
      <?php endif; ?>
      <?php if(!empty($career_header_image_second)) : ?>
      <div class="ff-inner-image text-right"> <img src="<?php echo $career_header_image_second; ?>" alt="" /> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="container ff-mt-70 text-center ff-about-text">
  <div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php if (!empty($career_main_title ))  : ?>
      <h1><?php echo $career_main_title; ?></h1>
      <?php endif; ?>
      <?php if (!empty($career_content ))  : ?>
      <?php echo $career_content; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-12 ff-mt-50"> 
      <!--Accordion wrapper-->
      <div class="accordion md-accordion text-left" id="accordionEx" role="tablist" aria-multiselectable="true">
        <?php
if( have_rows('career_list') ):
$i= 1;
while ( have_rows('career_list') ) : the_row();
if($i == 1)
{
	$true = "true";
	$show = "show";
}
else
{
	$true = "false";
	$show = "";
}
?>
        <div class="card">
          <div class="card-header" role="tab" id="headingOne<?php echo $i; ?>"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne<?php echo $i; ?>" aria-expanded="<?php echo $true; ?>" aria-controls="collapseOne<?php echo $i; ?>">
            <h5 class="mb-0">
              <?php  the_sub_field('title'); ?>
            </h5>
            <i style="float:right;" class="fa fa-angle-down rotate-icon"></i> </a> </div>
          
          <!-- Card body -->
          <div id="collapseOne<?php echo $i; ?>" class="collapse <?php echo $show; ?>" role="tabpanel" aria-labelledby="headingOne<?php echo $i; ?>"
      data-parent="#accordionEx">
            <div class="card-body ff-blog">
              <div class="icon-text"><img src="<?php echo get_template_directory_uri(); ?>/images/join.png"/><p><?php the_sub_field('join_time'); ?></p></div>
              <div class="icon-text"><img src="<?php echo get_template_directory_uri(); ?>/images/salary.png"/><p><?php the_sub_field('salary_range'); ?></p></div>
              <div class="icon-text"><img src="<?php echo get_template_directory_uri(); ?>/images/pen.png"/><p><?php the_sub_field('experience'); ?></p></div>
              <b>Job Summary: </b>
              <div>
                <?php the_sub_field('job_summary'); ?>
              </div>
              <b>Job profile: </b>
              <div>
                <?php the_sub_field('job_profile'); ?>
              </div>
              <?php echo do_shortcode('[contact-form-7 id="1070" title="Resume"]'); ?>
            </div>
          </div>
        </div>
        <?php
$i++;
endwhile;
else :
endif;
?>
      </div>
      <!-- Accordion wrapper --> 
    </div>
  </div>
</div>
<?php
get_footer();


