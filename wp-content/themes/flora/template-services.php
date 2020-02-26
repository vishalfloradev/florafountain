<?php
/**
 *  Template Name: Services Page
 *
 * 
 */

get_header(); 
$services_field = get_field('services_field');

//Service Header Section 
$service_header= $services_field['service_header'];
$service_header_image_one= $service_header['service_header_image_one'];
$service_header_image_second= $service_header['service_header_image_second'];
$service_header_text= $service_header['service_header_text'];	
$service_header_content= $service_header['service_header_content'];	
$service_header_button_name= $service_header['service_header_button_name'];	
$service_header_button_link= $service_header['service_header_button_link'];	

// Technology 
$our_technology= $services_field['our_technology'];
$technology_header_title = $our_technology['technology_header_title'];
$technology_name = $our_technology['technology_name'];
$technology_image = $technology_name['technology_image'];
$technology_description = $technology_name['technology_description'];

//Portfolio Section
$our_projects= $services_field['our_projects'];
$our_project_title= $services_field['our_project_title'];
$portfolio_link= $services_field['portfolio_link'];

$portfolio_post= $services_field['portfolio_post'];
$args = array(
	'numberposts' 	   => 9,
	'post_type'   	   => 'portfolio',
	'order' 		   => 'DESC',
	'post__in'        => $portfolio_post,
	'orderby' 	   => 'post__in',
	'post_status'    => 'publish',
);
$portfolios = get_posts( $args );
?>

  <div class="container about-sec-1">
    <div class="row">
      <div class="col-md-6">
        <div class="header-content-inner center ev-home-padding">
		 <?php if (!empty($service_header_text ))  : ?>  
       	   <h3 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $service_header_text; ?></h3>
		 <?php endif; ?>	  
		 <?php if (!empty($service_header_content ))  : ?>
	           <h2><?php echo $service_header_content; ?></h2>
		<?php endif; ?>
		<?php if (!empty($service_header_button_name )  && ($service_header_button_link))  : ?>
          	<div class="ev-button wow fadeInUp"> <a href="<?php echo $service_header_button_link ?>" class="btn btn-fill"> <?php echo $service_header_button_name ?> </a> </div>
		<?php endif; ?>   
        </div>
      </div>
      <div class="col-md-6 ff-inner-hb">
		 	<?php if(!empty($service_header_image_one)) : ?>
		   <div class="inner-image-banner">
			   <img src="<?php echo $service_header_image_one; ?>" alt="" />
		   </div>
		    <?php endif; ?>
		   <?php if(!empty($service_header_image_second)) : ?>
		   <div class="ff-inner-image text-right">
			   <img src="<?php echo $service_header_image_second; ?>" alt="" />
		   </div>
		  <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="container ff-mt-70 text-center ff-about-text ff-service">
    <div class="row">
      <div class="ff-mt-50 ff-owener">
        <div class="col-md-6 text-left">
          <div class="row">
			 <?php if(!empty($technology_header_title)): ?>
			 	 <h1> <?php echo $technology_header_title; ?></h1>
			<?php endif; ?>
			<?php 
			$cls_array=array("html","wordpress","search","integration","responsive","web");
			if(!empty($technology_name)): 
			foreach($technology_name as $k=>$tech_image) :
			?>
            		<img class="img_<?php echo $cls_array[$k] ?>" id="img_<?php echo $cls_array[$k] ?>" style="display: none;"  src="<?php echo $tech_image['technology_image'] ?>" alt="" />
			<?php 
			endforeach;		
			endif; 
			?>
		</div>
        </div>
		  <?php 
		    if(!empty($technology_name)): 
			foreach($technology_name as $c=>$tech_image) : ?>
		   <div class="col-md-6 text-left ff-service-1 ff-bio desc_<?php echo $cls_array[$c] ?>" id="desc_<?php echo $cls_array[$c] ?>" style="display: none;"> 
				<?php echo $tech_image['technology_description']; ?>
		   </div>
		 <?php 
		 endforeach;	
		 endif; 
		 ?>
		<?php 
		 	if(!empty($technology_name)) : 
		 	foreach($technology_name as $a=>$tech) :
		 ?> 
			<div class="col-md-2 ff-cate-service <?php echo $cls_array[$a] ?>" id="<?php echo $cls_array[$a] ?>"><h2><?php echo $tech['technology']; ?></h2></div>
		<?php 
		  endforeach;
		  endif;
		 ?>
        <div class="ff-prot-tagline">
		  <?php if(!empty($our_project_title)) : ?> 
             <h4><?php echo $our_project_title; ?></h4>
		  <?php endif; ?>
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
		 <?php if(!empty($portfolio_link)) : ?>    
         		 <div class="ff-protfolio"> <a href="<?php echo $portfolio_link; ?>"> GO TO PORTFOLIO</a></div>
		 <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
<?php
get_footer();
