<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $redux_demo;
$logo = $redux_demo['opt-media'];
$logo_url = $logo['url'];
$logo_title = $logo['title'];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="theme-color" content="#FDD73B">
<meta name="apple-mobile-web-app-status-bar-style" content="#FDD73B">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" >
<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php
if (is_category())
    {
        $queried_object = get_queried_object();
        $taxonomy = $queried_object->taxonomy;
        $term_id = $queried_object->term_id;
        $sid = $taxonomy . '_' . $term_id;
    }

        $seotitle = get_field( "title",$sid);
        $meta_keyword = get_field( "meta_keyword",$sid );
        $meta_description = get_field( "meta_description",$sid);
        $og_type = get_field( "og_type",$sid );
        $og_title = get_field( "og_title",$sid );
        $og_description = get_field( "og_description",$sid );
        $og_site_name = get_field( "og_site_name",$sid );
        $og_image = get_field( "og_image",$sid );
        $twitter_title = get_field( "twitter_title",$sid );
        $twitter_description = get_field( "twitter_description",$sid );
        $twitter_image = get_field( "twitter_image",$sid );
    if($seotitle == '')
    {
        $seotitle = get_the_title();
    }
    ?>
    <title><?php echo $seotitle; ?></title>
    <meta name="keywords" content="<?php echo $meta_keyword; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="<?php echo $og_type; ?>" />
    <meta property="og:title" content="<?php echo $og_title; ?>" />
    <meta property="og:description" content="<?php echo $og_description; ?>" />
    <meta property="og:url" content="<?php echo $current_uri = home_url( add_query_arg( NULL, NULL ) ); ?>" />
    <meta property="og:site_name" content="<?php echo $og_site_name; ?>" />
    <meta property="og:image" content="<?php echo $og_image; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo $twitter_description; ?>" />
    <meta name="twitter:title" content="<?php echo $twitter_title; ?>" />
    <meta name="twitter:image" content="<?php echo $twitter_image; ?>" />
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="<?php echo $current_uri = home_url( add_query_arg( NULL, NULL ) ); ?>" />
<script type="text/javascript">
//document.addEventListener('touchmove', function(event) {
//     event.preventDefault();
//}, false);

//document.addEventListener ("touchmove", function (event) {
  //  event.preventDefault (); },
    //{passive: false});
</script>

<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102326971-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-102326971-1');
</script>
</head>
<?php 
 // row class 	
if(is_front_page()) : 
   $rowCls= "row";
else :
 $rowCls= "ff-inner-page";
endif;

//header Class
if(is_front_page()) : 
  $headerCls= "main-header header-style-one";
else :
  $headerCls= "main-header header-style-one container";
endif;
//Outer Class
if(is_front_page()) : 
  $outerCls= "outer-container";
else :
  $outerCls= "outer";
endif;	
?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="<?php echo $rowCls; ?>">
  <header class = "<?php echo $headerCls; ?>" >
	<div class="header-upper">
		<div class="<?php echo $outerCls; ?>">
			<div class="clearfix">
				<!--Logo Box-->
				<div class="pull-left logo-box">
<?php if ( is_front_page() || is_home() ) {?>
					<div class="logo">

						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo $logo_url; ?>" title="<?php echo $logo_title; ?>" alt="Websites Design Company" /> </a>

					</div>

<?php } else{ ?>				
<div class="logo">
<a href="<?php echo get_site_url(); ?>"><img src="<?php echo site_url();?>/wp-content/uploads/2020/01/flora-inner-logo.png" title="<?php echo $logo_title; ?>" alt="Websites Design Company"  /> </a>
</div>
<?php } ?>
	<div class="logo-sticky">

						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo site_url();?>/wp-content/uploads/2020/01/FF-Logo-sticky.png" title="<?php echo $logo_title; ?>" alt="Websites Design Company" /> </a>

					</div>
				</div>
				<div class="clearfix">
					<!-- Main Menu End-->
					<div class="nav-btn nav-toggler">
						<ul>
								<li>
									<a title="Portfolio" href="<?php echo esc_url( get_permalink(189) ); ?>">
									
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
<g>
	<g>
		<path d="M512,256.001c0-10.821-6.012-20.551-15.694-25.398l-38.122-19.061l38.122-19.06c0.001-0.001,0.004-0.002,0.004-0.002
			c9.68-4.845,15.692-14.576,15.692-25.397c0-10.819-6.013-20.55-15.694-25.397L281.09,34.08
			c-15.712-7.849-34.47-7.849-50.185,0.001L15.691,141.691C6.013,146.534,0,156.264,0,167.084c0,10.821,6.012,20.551,15.694,25.398
			l38.121,19.06l-38.126,19.063C6.012,235.45,0,245.18,0,256.001s6.012,20.551,15.694,25.397l38.121,19.061l-38.118,19.059
			C6.02,324.353,0.004,334.08,0,344.902c-0.004,10.828,6.008,20.564,15.694,25.412l215.215,107.608
			c7.856,3.925,16.471,5.886,25.09,5.886c8.619,0,17.238-1.963,25.095-5.887l215.215-107.608
			c9.682-4.845,15.695-14.582,15.691-25.41c-0.004-10.822-6.02-20.549-15.694-25.381l-38.122-19.061l38.126-19.063
			C505.988,276.552,512,266.822,512,256.001z M26.225,171.431c-2.339-1.171-2.687-3.226-2.687-4.346s0.35-3.175,2.683-4.343
			L241.429,55.138c4.563-2.28,9.568-3.418,14.573-3.418c5.003,0,10.007,1.139,14.567,3.417L485.776,162.74
			c2.337,1.17,2.687,3.225,2.687,4.345s-0.348,3.175-2.687,4.346L270.572,279.032c-9.125,4.558-20.019,4.558-29.139,0.001
			L26.225,171.431z M485.783,340.575c2.33,1.164,2.679,3.215,2.679,4.336c0.001,1.123-0.348,3.182-2.683,4.35L270.571,456.865
			c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,349.262c-2.339-1.171-2.688-3.229-2.687-4.352c0-1.119,0.348-3.171,2.683-4.337
			l53.912-26.956l150.776,75.387c7.856,3.925,16.471,5.886,25.089,5.886c8.619,0,17.238-1.963,25.095-5.887l150.772-75.386
			L485.783,340.575z M485.778,260.345L270.571,367.949c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,260.347
			c-2.339-1.17-2.687-3.225-2.687-4.345c0-1.122,0.348-3.175,2.683-4.344l53.912-26.956l150.776,75.387
			c7.855,3.925,16.472,5.886,25.089,5.886c8.617,0,17.237-1.962,25.094-5.888l150.774-75.386l53.908,26.954
			c2.339,1.171,2.687,3.225,2.687,4.346C488.462,257.121,488.113,259.176,485.778,260.345z"/>
	</g>
</g>
</svg>

									</a>
								</li>
								<li class="last-menu">
									<div id="mySidenav">
										<a href="javascript:void(0);" class="closebtn" onclick="closeNav()"> &times; </a>
										<?php
										wp_nav_menu(
										array(
										'menu' => 'Main Menu',
										)
										);
										?>
									</div>
									<a href="javascript:void(0);" class="openav" onclick="openNav()">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g>
									<g>
									<path d="M501.333,96H10.667C4.779,96,0,100.779,0,106.667s4.779,10.667,10.667,10.667h490.667c5.888,0,10.667-4.779,10.667-10.667
									S507.221,96,501.333,96z"/>
									</g>
									</g>
									<g>
									<g>
									<path d="M501.333,245.333H10.667C4.779,245.333,0,250.112,0,256s4.779,10.667,10.667,10.667h490.667
									c5.888,0,10.667-4.779,10.667-10.667S507.221,245.333,501.333,245.333z"/>
									</g>
									</g>
									<g>
									<g>
									<path d="M501.333,394.667H10.667C4.779,394.667,0,399.445,0,405.333C0,411.221,4.779,416,10.667,416h490.667
									c5.888,0,10.667-4.779,10.667-10.667C512,399.445,507.221,394.667,501.333,394.667z"/>
									</g>
									</g>

									</svg>

									</a>
							     </li>
						</ul>
					</div>
					<div class="outer-box clearfix">
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
				</div>
			</div>
		</div>
	</div>
</header>