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
    <div class="col-md-12">
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
<style>
.card {
    border: none;
    margin-bottom: 5px;
	border-radius: 0;
}
.card-header {
    padding: 0;
    margin-bottom: 0;
    background-color: #fdcd0b;
    border-bottom: none;
}
.card-header:first-child {
    border-radius: 0;
}
.card-header h5
{
    float: left;
    text-transform: uppercase;
    color: #000;
    padding: 16px 15px 12px;
    font-weight: 600;
}
.card-header i {
background: #000;
    color: #fff;
    font-size: 24px;
    padding: 14px 20px;
}
.card-body {
    background: #f8f8f8;
	    display: inline-block;
}
.icon-text {
    margin-bottom: 15px;
}
.icon-text img {
    margin-right: 12px;
    float: left;
}
.icon-text p {
    display: inline-block;
    padding: 0;
    margin: 9px 0 0;
    line-height: 23px;
}
.card-body.ff-blog p {
    font-size: 16px;
    font-weight: 500;
}
/*contact form 7 file uploader design*/
.codedropz-upload-handler h3 ,.codedropz-upload-inner > span {
    display: none;
}

.codedropz-upload-inner .codedropz-btn-wrap a.cd-upload-btn::before {
    content: "Submit Resume";
    font-size: 21px;
    color: #000;
}

.codedropz-upload-inner .codedropz-btn-wrap a.cd-upload-btn {
    
    font-size: 0;
}

.codedropz-upload-handler { border:0 !Important;}

.wpcf7-submit {
    border: none;
    padding: 10px!important;
}
.codedropz-upload-container,.codedropz-upload-handler{ 
padding:0 !Important;
 margin:0 !Important;
 }


.dnd-upload-status .dnd-upload-details span.has-error {
  
    font-size: 11px;
}
.dnd-upload-status .dnd-upload-details .dnd-progress-bar { height:13px !important;}

.dnd-upload-status .dnd-upload-details .name { color:#000; font-size:11px;}
.dnd-upload-status .dnd-upload-details .remove-file{ color:#000; right: -19px;}
.dnd-upload-status .dnd-upload-details span.has-error { font-size:11px;}
.btn.wo-btn {
    font-size: 20px;
    font-weight: 600;
    background: #fdcd0b;
    border-radius: 0;
    color: #000;
    text-transform: uppercase;
    padding: 10px 30px;
}
.btn-bs-file input[type="file"] {
    position: absolute;
    top: -9999999;
    filter: alpha(opacity=0);
    opacity: 0;
    width: 0;
    height: 0;
    outline: none;
    cursor: inherit;
}

#wpcf7-f1070-o1 .wpcf7-submit, #wpcf7-f1070-o2 .wpcf7-submit, #wpcf7-f1070-o3 .wpcf7-submit, #wpcf7-f1070-o4 .wpcf7-submit {
    border: none;
    padding: 11px 32px!important;
    background: #000;
    font-size: 21px;
    color: white;
    text-transform: uppercase;
}
#wpcf7-f1070-o1 .wpcf7-form p, #wpcf7-f1070-o2 .wpcf7-form p, #wpcf7-f1070-o3 .wpcf7-form p, #wpcf7-f1070-o4 .wpcf7-form p {
    display: inline-flex;
    margin: 0;
}
</style>
<?php
get_footer();


