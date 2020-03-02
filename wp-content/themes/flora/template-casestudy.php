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

$args = array(
    'numberposts' => -1,
    'post_type' => 'casestudy',
    'order' => 'DESC',
    'post_status' => 'publish'
);
$casestudy = get_posts($args);
var_dump($casestudy);
/*
?>

    <div class="container about-sec-1">
        <div class="row">
            <div class="col-md-6">
                <div class="header-content-inner center ev-home-padding">
                    <?php if (!empty($portfolio_header_text))  : ?>
                        <h3 class="main_heading wow fadeInUp ff-bg-cross"> <?php echo $portfolio_header_text; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($portfolio_header_content))  : ?>
                        <h2><?php echo $portfolio_header_content; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($portfolio_header_button_name) && ($portfolio_header_button_link))  : ?>
                        <div class="ev-button wow fadeInUp"><a href="<?php echo $portfolio_header_button_link ?>"
                                                               class="btn btn-fill"> <?php echo $portfolio_header_button_name ?> </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 ff-inner-hb">
                <?php if (!empty($portfolio_header_image_one)) : ?>
                    <div class="inner-image-banner">
                        <img src="<?php echo $portfolio_header_image_one; ?>" alt=""/>
                    </div>
                <?php endif; ?>
                <?php if (!empty($portfolio_header_image_second)) : ?>
                    <div class="ff-inner-image text-right">
                        <img src="<?php echo $portfolio_header_image_second; ?>" alt=""/>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php
$taxonomy = 'portfolio_category';
$terms = get_terms( array(
    'taxonomy' => $taxonomy,
    'orderby' => 'name',
    'order' => 'DESC' 
) );

if ($terms && !is_wp_error($terms)) :
    ?>
    <div id="myBtnContainer" class="ff-mt-70 myBtnContainer">
        <button class="btns active" onclick="filterSelection('all')"><h3> Show all</h3></button>
        <?php foreach ($terms as $term) { ?>
            <button class="btns"
                    onclick="filterSelection('<?php echo $term->slug; ?>')"> <h3><?php echo $term->name; ?></h3></button>
        <?php } ?>
    </div>
<?php endif; ?>
    <div class="container ff-mt-30 text-center ff-about-text ff-service">
        <div class="row">
            <div class="ff-owener">

                <div class="col-md-12">
                    <div class="ff-bf-prot">

                        <?php
                        if (!empty($portfolios)) :
                            $i = 1;
                            foreach ($portfolios as $project) :
                                ?>
                                <script>
                                    jQuery(document).ready(function () {
                                        jQuery(".group<?php echo $i; ?>").colorbox({rel: 'group<?php echo $i; ?>'});
                                        jQuery(".group<?php echo $i; ?>").colorbox({maxWidth: '95%', maxHeight: '95%'});
                                    });
                                </script>
                            <?php

                            $feat_image = wp_get_attachment_url(get_post_thumbnail_id($project->ID));
                            ?>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 filter <?php $categoriess = get_the_terms($project->ID, 'portfolio_category');
                                foreach ($categoriess as $categorys) {
                                    echo $categorys->slug;
                                } ?>">
                                    <div class="prtdetails">
                                         <img
                                                    src="<?php echo $feat_image; ?>"
                                                    alt="<?php echo $project->post_title; ?>" title="<?php echo $project->post_title; ?>" class="image"/>

                                        <div class="middle">
                                            <a  data-link="<?php echo get_field('website_link', $project->ID);?>" href="<?php echo $feat_image; ?>" class="group<?php echo $i; ?>">
                                                <div class="text">View More</div>
                                            </a></div>
                                        <?php $images = get_field('portfolio_gallery', $project->ID);
                                        if ($images): ?>
                                            <ul style="display: none;">
                                                <?php foreach ($images as $image): ?>
                                                    <li>
                                                        <a  href="<?php echo $image['url'];  ?>"
                                                           class="group<?php echo $i; ?>">
                                                            <img src="<?php echo $image['sizes']['thumbnail']; ?>"
                                                                 alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/>
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
                    <?php if (!empty($portfolio_link)) : ?>
                        <div class="ff-protfolio"><a href="<?php echo $portfolio_link; ?>"> GO TO PROTFOLIO </a></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="ff-mt-70"></div>
    <script type="application/javascript">
        filterSelection("all") // Execute the function and show all columns
        function filterSelection(c) {

            var x, i;
            x = document.getElementsByClassName("filter");
            if (c == "all") c = "";

            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btns");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <div class="clearfix"></div>

<?php
*/

get_footer();
