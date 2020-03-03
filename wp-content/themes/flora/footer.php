<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.2

 */

global $redux_demo;

//Stay Tunned Section
$stay_header_title = get_field('header_title', 'option');
$stay_sub_header_text = get_field('sub_header_text', 'option');
$stay_right_side_image = get_field('right_side_image', 'option');

//Client Logo Section
$client_logo = get_field('client_logo', 'option');
$client_header_title = get_field('client_header_title', 'option');

//footer Class
if(is_front_page()) : 
  $footerCls= "ff-hm-part-5 bg-light-5";
else :
  $footerCls= "ff-hm-part-5 bg-light-5 ff-mt-70";
endif;	

?>
<!-- Start MailChimp Section --> 
  <div class="col-xs-12 col-md-12 ff-hm-part-3 ff-mt-40" style="padding: 0;">
    <div class="row">
	
      <div class="col-xs-12 col-md-6">
        <div class="row ff-sign-abs">
          <div class="ff-signup">
		   <?php if(!empty($stay_header_title)): ?>
           	 <h2><?php echo $stay_header_title; ?></h2>
		   <?php endif; ?>
		   <?php if(!empty($stay_sub_header_text)): ?>	
           	 <p><?php echo $stay_sub_header_text; ?></p>
		   <?php endif; ?>
		  <?php echo do_shortcode('[contact-form-7 id="832" title="Major Contact Footer"]'); ?>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
		<?php if(!empty($stay_right_side_image)): ?>	
        		<div class="row ff-sign-img"> <img src="<?php echo $stay_right_side_image; ?>" alt=""  /> </div> 
		<?php endif; ?>
      </div>
    </div>
  </div>
 <!-- End MailChimp Section --> 

<?php if(!is_front_page()) :  ?>

<!-- Start Client Logo --> 
<div class="container ff-team ff-mt-40 ff-client">
  <div class="row ff-our-expert ff-logo-client">
	  <?php if (!empty($client_header_title)): ?>
        <h4> <?php echo $client_header_title; ?> </h4>
	  <?php endif; ?> 
  </div>
  <section class="client-logo customer-logos slider">
	  <?php 
	  if(!empty($client_logo)) :
		foreach($client_logo as $value):
	  ?>
    		<div class="slide"> <img src="<?php echo $value['client_logo_image'] ?>"> </div>
	<?php 
	   endforeach; 
	   endif;
	  ?>  
  </section>
</div>
<!-- End Client Logo -->
<?php endif; ?>
</div><!-- #row -->
<footer class="<?php echo $footerCls; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<!-- Footer Our Services -->
					<?php if ( is_active_sidebar( 'footer-about' )) :	?>
<div class="col-md-4">
	<?php dynamic_sidebar( 'footer-about' ); ?>
</div>
<?php endif ?>
					<?php if ( is_active_sidebar( 'footer-first' )) :	?>
						<div class="col-md-3">
							<?php dynamic_sidebar( 'footer-first' ); ?>
						</div>
					<?php endif ?>
					<!-- Footer We Serve At -->
					<?php /* if ( is_active_sidebar( 'footer-two' )) :	?>

						<div class="col-md-3">

							<?php dynamic_sidebar( 'footer-two' ); ?>

						</div>

					<?php endif */ ?>
					<!-- Footer Contact Us -->
					<?php if ( is_active_sidebar( 'footer-three' )) :	?>
						<div class="col-md-4">
							<?php dynamic_sidebar( 'footer-three' ); ?>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<div class="ff-hm-part-6 ff-copy-right bg-light-0">
  <div class="container">
    <div class="row">
	 <div class="col-md-12">
	   <div class="row">
		<div class="social-area col-md-6">
			<div class="social-nav">
				<?php if(!empty($redux_demo['facebook'])): ?>
					<a target="_blank" href="<?php echo $redux_demo['facebook'] ?>"><span class="fa fa-facebook"></span></a>
				<?php endif; ?>
				<?php if(!empty($redux_demo['twitter'])): ?>
					<a target="_blank" href="<?php echo $redux_demo['twitter'] ?>"><span class="fa fa-twitter"></span></a>
				<?php endif; ?>
				<?php if(!empty($redux_demo['google-plus'])): ?>
					<a target="_blank" href="<?php echo $redux_demo['google-plus'] ?>"><span class="fa fa-google-plus"></span></a>
				<?php endif; ?>
				<?php if(!empty($redux_demo['instagram'])): ?>
					<a target="_blank" href="<?php echo $redux_demo['instagram'] ?>"><span class="fa fa-instagram"></span></a>
				<?php endif; ?>
			</div>
		</div>
		   <?php if(!empty($redux_demo['opt-editor'])): ?>
				<div class="flora-copy-right col-md-6 text-right"> <?php  echo $redux_demo['opt-editor']; ?>  </div>
		   <?php endif; ?>
	   </div>
	 </div>
    </div>
  </div>
</div>

<div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
</div>
<script>



jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 100) {
        jQuery('.main-header').addClass('fixed-header');
     
    }
    else {
        jQuery('.main-header').removeClass('fixed-header');
        
    }
});


    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 50 ) {
            jQuery('.scrolltop:hidden').stop(true, true).fadeIn();
        } else {
            jQuery('.scrolltop').stop(true, true).fadeOut();
        }
    });
    jQuery(function(){
		
        jQuery(".scroll").click(function(){
			
		
			
			jQuery('html,body').animate({
					scrollTop: 0
					}, 700);
				});
			});
</script>
<?php wp_footer(); ?>
</body>
</html>

