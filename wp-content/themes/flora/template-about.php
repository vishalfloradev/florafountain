<?php
/**
 *  Template Name: About Us Page
 *
 * 
 */

get_header(); 
$about_field = get_field('about_field');

//Service Header Section 
$about_header= $about_field['about_header'];
$about_header_image_one= $about_header['about_header_image_one'];
$about_header_image_second= $about_header['about_header_image_second'];
$about_header_text= $about_header['about_header_text'];	
$about_header_content= $about_header['about_header_content'];	
$about_header_button_name= $about_header['about_header_button_name'];	
$about_header_button_link= $about_header['about_header_button_link'];	


//About Us Content
$about_content = $about_field['about_content'];
$about_owner_image = $about_field['about_owner_image'];
$about_owner_content = $about_field['about_owner_content'];


$about_owner2_image = $about_field['about_owner2_image'];
$about_owner2_content = $about_field['about_owner2_content'];

//About Know Section
$about_know_us = $about_field['about_know_us'];

$about_left_image = $about_know_us['about_left_image'];
$about_left_header_text = $about_know_us['about_left_header_text'];
$about_left_sub_header_text = $about_know_us['about_left_sub_header_text'];

$about_right_image = $about_know_us['about_right_image'];
$about_right_header_text = $about_know_us['about_right_header_text'];
$about_right_sub_header_text = $about_know_us['about_right_sub_header_text'];

//About Team 
$about_team_header_text = $about_field['about_team_header_text'];
$about_team_sub_header_text = $about_field['about_team_sub_header_text'];
$about_team_content = $about_field['about_team_content'];

$about_team = $about_field['about_team'];
$team_name = $about_team['team_name'];
$team_image = $about_team['team_image'];

//About Why Choose Section
$about_why_choose = $about_field['about_why_choose'];
$about_why_choose_header_text= $about_why_choose['about_why_choose_header_text'];
$about_why_choose_sub_header_text= $about_why_choose['about_why_choose_sub_header_text'];
$about_why_choose_content= $about_why_choose['about_why_choose_content'];
$about_why_choose_tab= $about_why_choose['about_why_choose_tab'];
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
  <div class="container ff-mt-70 text-center ff-about-text">
    <div class="row">
      <?php if(!empty($about_content)) : ?>
			<div class="col-md-12">
				<?php echo $about_content; ?>
			</div>
	  <?php endif; ?>

      <div class="row ff-mt-50 ff-owener">
	   <?php if(!empty($about_owner_image)) : ?>
		   <div class="col-md-6 text-left">
			   <img src="<?php echo $about_owner_image; ?>" alt="shefali" />
		   </div>
	   <?php endif; ?>	 
	   <?php if(!empty($about_owner_content)) : ?>
		   <div class="col-md-6 text-left ff-bio">
				<?php echo $about_owner_content; ?>
		   </div>
	   <?php endif; ?>
    </div> 

	<div class="row ff-mt-50 ff-owener">

	<?php if(!empty($about_owner2_content)) : ?>
		   <div class="col-md-6 text-left ">
				<?php echo $about_owner2_content; ?>
		   </div>
	   <?php endif; ?>

	   <?php if(!empty($about_owner2_image)) : ?>
		   <div class="col-md-6 text-left ff-bio">
			   <img src="<?php echo $about_owner2_image; ?>" alt="vasim" />
		   </div>
	   <?php endif; ?>	 
	
    </div> 



    </div>
  </div>
  <?php /*
<div class="clearfix"></div>
<div class="container ff-mt-70 text-center ff-about-img about-sec-3">
  <div class="row">
    <div class="col-md-12 ff-abd-1">
      <div class="row">
		<?php if(!empty($about_left_header_text) || ($about_left_sub_header_text))  :  ?>
		   <div class="col-md-6 text-left"> 
			<small> <?php echo $about_left_header_text; ?> </small>
			<h3> <?php echo $about_left_sub_header_text; ?> </h3>
		   </div>
		<?php endif; ?> 
		<?php if(!empty($about_right_image)) : ?>
		<div class="col-md-6 text-right ddd">
			<img src="<?php echo $about_right_image; ?>" alt="" />
		</div>
		<?php endif; ?> 
        <div class="sec-2-posi col-md-12">
          <div class="row">
			<?php if(!empty($about_left_image))  :  ?>	
			<div class="col-md-8 text-left">
				<img src="<?php echo $about_left_image; ?>" alt="" />
			</div>
			<?php endif; ?> 
			<?php if(!empty($about_right_header_text) || ($about_right_sub_header_text))  :  ?>
			  <div class="col-md-4 text-left ff-since-area">
			    <div class="ff-since-text"> 
				 <small> <?php echo $about_right_header_text; ?> </small>
				 <h5> <?php echo $about_right_sub_header_text; ?> </h5>
			    </div>
			  </div>
			<?php endif; ?> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div> */ ?>
<div class="clearfix"></div>
<div class="ff-team ff-mt-40 about-sec-4">
  <div class="ff-our-expert"> 
	<?php if(!empty($about_team_header_text) || ($about_team_sub_header_text) || ($about_team_content))   :  ?>
		<small> <?php echo $about_team_header_text; ?> </small>
		<h5> <?php echo $about_team_sub_header_text; ?> </h5>
	 	<?php echo $about_team_content; ?>
	<?php endif; ?>    
  </div>
	
	  <section class="customer-logos slider">
		  <?php 
		  if(!empty($about_team)) : 
		   foreach ($about_team as $team) :
		  ?> 
		  <div class="slide">
		   		 <img src="<?php echo $team['team_image']; ?>" alt="<?php echo $team['team_name']; ?>">
		  </div>
		  <?php 
		  endforeach; 
		  endif;
		  ?> 
	  </section>
		
</div>

<div class="container about-sec-5">
  <div class="row">
    <div class="ff-our-expert">
	 <?php if(!empty($about_why_choose_header_text)) : ?>   
		 <small><?php echo $about_why_choose_header_text; ?></small>
	  <?php endif; ?> 
	  <?php if(!empty($about_why_choose_sub_header_text)) : ?>     
      	<h5><?php echo $about_why_choose_sub_header_text; ?></h5>
	   <?php endif; ?>  
        <?php if(!empty($about_why_choose_content)) : ?> 
	     <?php echo $about_why_choose_content; ?>
	   <?php endif; ?>  
    </div>
    <div class="col-xs-12 ">
      <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> 
		  <?php 
		   $ids = array ("nav-home-tab","nav-profile-tab","nav-contact-tab"); 
		   $aria_lable = array ("nav-home","nav-profile","nav-contact"); 
		   $a = 0;
		   if(!empty($about_why_choose_tab)) : 
		    foreach($about_why_choose_tab as $tab_title) :
		    if($a == 0 ) :
		     $class = "active";
		   else : 
		     $class = "";
		    endif;
		   ?>
		   <a class="nav-item nav-link <?php echo $class; ?>" id="<?php echo $ids[$a]; ?>" data-toggle="tab" href="#<?php echo $aria_lable[$a]; ?>" role="tab" aria-controls="<?php echo $aria_lable[$a]; ?>" aria-selected="true">
               <h2>  <?php echo $tab_title['about_why_choose_tab_title']; ?></h2>
		   </a>
		   <?php 
		   $a++;
		   endforeach;
		   endif;
		   ?>
	   </div>
      </nav>
      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
		 <?php 
		   $aria_ids = array ("nav-home-tab","nav-profile-tab","nav-contact-tab"); 
		   $id = array ("nav-home","nav-profile","nav-contact");
		   $t = 0;
		   if(!empty($about_why_choose_tab)) : 
		    foreach($about_why_choose_tab as $tabs) :
			  if($t == 0 ) :
				$tab_class = "show active";
			   else : 
				$tab_class = "";
			   endif;
		   ?>
			   <div class="tab-pane fade <?php echo $tab_class; ?>" id="<?php echo $id[$t]; ?>" role="tabpanel" aria-labelledby="<?php echo $aria_ids[$t]; ?>">
				<div class="col-md-12">
				  <div class="row">
					<?php if(!empty($tabs['about_why_choose_tab_image'])): ?>  
					    <div class="col-md-4">
						 <div class="row"> <img src="<?php echo $tabs['about_why_choose_tab_image']; ?>" alt="" /> </div>
					    </div>
					 <?php endif; ?>
					 <?php if(!empty($tabs['about_why_choose_tab_content'])): ?>  
				   		 <div class="col-md-8"><?php echo $tabs['about_why_choose_tab_content']; ?> </div>
					 <?php endif; ?>
				  </div>
				</div>
			   </div>
		  <?php 
		   $t++;
		   endforeach;
		   endif;
		 ?>
      </div>
    </div>
  </div>
</div>
  



<?php
get_footer();
