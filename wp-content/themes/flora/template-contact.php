<?php
/**
 *  Template Name: Contact Us Page
 *
 *
 */

get_header();
$google_map = get_field('google_map');

$contact_field = get_field('contact_field');

//Contact Header Section
$contact_header = $contact_field['contact_header'];
$contact_header_image_one = $contact_header['contact_header_image_one'];
$contact_header_image_second = $contact_header['contact_header_image_second'];
$contact_header_text = $contact_header['contact_header_text'];
$contact_header_content = $contact_header['contact_header_content'];
$contact_header_button_name = $contact_header['contact_header_button_name'];
$contact_header_button_link = $contact_header['contact_header_button_link'];

// Contact From Section Title
$contact_from_header = $contact_field['contact_from_header'];
$contact_from_title = $contact_from_header['contact_from_title'];
$contact_from_sub_title = $contact_from_header['contact_from_sub_title'];
$contact_from_text = $contact_from_header['contact_from_text'];

// Contact Address Section Title
$contact_address_header = $contact_field['contact_address_header'];
$contact_address_title = $contact_address_header['contact_address_title'];
$contact_address_sub_title = $contact_address_header['contact_address_sub_title'];
$contact_address_text = $contact_address_header['contact_address_text'];

?>
    <!-- Contact Top Header ---->
    <div class="container about-sec-1">
        <div class="row">
            <div class="col-md-6">
                <div class="header-content-inner center ev-home-padding">
                    <?php if (!empty($contact_header_text))  : ?>
                        <h3 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $contact_header_text; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($contact_header_content))  : ?>
                        <h2><?php echo $contact_header_content; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($contact_header_button_name) && ($contact_header_button_link))  : ?>
                        <div class="ev-button wow fadeInUp"><a href="<?php echo $contact_header_button_link ?>" class="btn btn-fill"> <?php echo $contact_header_button_name ?> </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 ff-inner-hb">
                <?php if (!empty($contact_header_image_one)) : ?>
                    <div class="inner-image-banner">
                        <img src="<?php echo $contact_header_image_one; ?>" alt=""/> 
                    </div>
                <?php endif; ?>
                <?php if (!empty($contact_header_image_second)) : ?>
                    <div class="ff-inner-image text-right">
                        <img src="<?php echo $contact_header_image_second; ?>" alt=""/>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Contact From Section ---->
    <div class="container ff-mt-40 ff-contact">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-heading text-center" id="scrollto">  
                    <h5><?php echo $contact_from_sub_title; ?></h5> 
                    <h1><?php echo $contact_from_title; ?></h1>
                    <p><?php echo $contact_from_text; ?></p>
                </div>
                <div class="contactfrom-ff">
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Contact form 1"]'); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact Google Map Section---->
    <div class="googlemap">
        <div class="col-md-12 col-lg-12 col-sm-12" style="padding: 0;">
            <?php echo $google_map; ?>
        </div>
    </div>

    <!-- Contact Address Section ---->
    <div class="container">
        <?php
        // check if the repeater field has rows of data
        if (have_rows('contact_address')):
            ?>
            <div class="row addressblock">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <h5><?php echo $contact_address_sub_title; ?></h5>
                        <h2><?php echo $contact_address_title; ?></h2>
                        <p><?php echo $contact_address_text; ?></p>
                    </div>
                </div>

                <?php
                while (have_rows('contact_address')) : the_row();
                    ?>
                    <div class="col-md-3 col-lg-3 col-sm-12 addressdetailss">
                        <h4><?php the_sub_field('address_title'); ?></h4>
                        <p><?php the_sub_field('address'); ?></p>
                        <a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></br>
                        <a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        <?php
        else :
        endif;
        ?>
    </div>
<?php
get_footer();
