<?php
/**
 *  Template Name: Price Page
 *
 * 
 */

get_header(); 
$about_field = get_field('default_header');

//Service Header Section
$about_header= $about_field['about_header'];
$about_header_image_one= $about_header['about_header_image_one'];
$about_header_image_second= $about_header['about_header_image_second'];
$about_header_text= $about_header['about_header_text'];
$about_header_content= $about_header['about_header_content'];
$about_header_button_name= $about_header['about_header_button_name'];
$about_header_button_link= $about_header['about_header_button_link'];

?>
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
  <div class="container about-sec-1">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <article class="price-list" id="price-list">

  <ul>
    <li class="bg-purple">
      <button>Flora Silver</button>
    </li>
    <li class="bg-blue">
      <button>Flora Gold</button>
    </li>
    <li class="bg-purplea active">
      <button>Flora Platinum</button>
    </li>
  </ul>

  <table>
    <thead>
    <tr>
      <th class="bg-blue txt-bold">Our Website Plans</th>
      <th class="bg-purple txt-bold">Branding Site</th>
      <th class="bg-bluea txt-bold">Product Display Site</th>
      <th class="bg-purplea default txt-bold">E-Commerce Site</th>
    </tr>
    </thead>
    <tbody>
  
    
    <tr>
      <td class="txt-bold">Design Responsive website</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>
      </tr>
    <tr>
      <td class="txt-bold">Develop Responsive website</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>  

    </tr>
    <tr>
      <td class="txt-bold">Write seo-friendly website content</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
    <tr>
      <td class="txt-bold">Monthly Homepage Update</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
    <tr>
      <td class="txt-bold">Monthly health check-up & bug-fixing</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
    
	<tr>
      <td class="txt-bold">Monthly plugin Updates</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
	<tr>
      <td class="txt-bold">Monthly Analytics Report</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
	<tr>
      <td class="txt-bold">Dedicated project manager</td>
      <td><span class="tick">&#10004;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
    <tr>
      <td class="txt-bold">Monthly Blog Writing</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="tick">1 </span></td>
      <td class="default"><span class="tick"> 2 </span></td>

    </tr>
	<tr>
      <td class="txt-bold">Create product gallery</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
	<tr>
      <td class="txt-bold">Create product detail page</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="tick">&#10004;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
	
	<tr>
      <td class="txt-bold">Monthly Product Upload with content</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="tick"> 20 </span></td>
      <td class="default"><span class="tick"> 50</span></td>
    </tr>
	<tr>
      <td class="txt-bold">Payment gateway integration</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="untick">&cross;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
    <tr>
      <td class="txt-bold">Logistics integration</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="untick">&cross;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
    <tr>
      <td class="txt-bold">Inventory management</td> 
      <td><span class="untick">&cross;</span></td>
      <td><span class="untick">&cross;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
 <!---	<tr>
      <td class="txt-bold">Upload 150 products with basic content for launch</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="untick">&cross;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>

    </tr>
	<tr>
      <td class="txt-bold">Upload 50 products with content/month</td>
      <td><span class="untick">&cross;</span></td>
      <td><span class="untick">&cross;</span></td>
      <td class="default"><span class="tick">&#10004;</span></td>
    </tr> --->
       <tr>
      <td class="txt-bold">Starting from Monthly price</td>
      <td><span class="txt-l">Rs. </span><span class="txt-l">9,000/month</span></td>
      <td><span class="txt-l">Rs. </span><span class="txt-l">12,000/month</span></td>
      <td class="default"><span class="txt-l">Rs. </span><span class="txt-l">15,000/month</span></td>

    </tr>
   
    <td colspan="4" class="sep">
        <div class="ev-button wow fadeInUp" style="display: inline-block;">
                            <a href="https://florafountain.com/contact-us/#scrollto" class="btn btn-fill">GET STARTED</a>
                        </div></td>
    </tbody>
  </table>

</article>
      </div>
     
  </div> 
</div> 
  



<?php
get_footer();
?>
<style>
  /* DIRTY Responsive pricing table CSS */

  /*
  - make mobile switch sticky
  */

  article.price-list {
       width: 100%;
    max-width: 1000px;
    margin: 50px auto;
    position: relative;
  }
  .price-list ul {
    display:flex;
    top:0px;
    z-index:10;
    padding-bottom:14px;
  }
  .price-list li {
    list-style:none;
    flex:1;
  }
  .price-list li:last-child {
    border-right:1px solid #DDD;
  }
  button {
    width:100%;
    border: 1px solid #DDD;
    border-right:0;
    border-top:0;
    padding: 10px;
    background:#FFF;
    font-size:14px;
    font-weight:bold;
    height:60px;
    color:#999
  }
   .price-list li.active button {
    background:#F5F5F5;
    color:#000;
  }
   table { border-collapse:collapse; table-layout:fixed; width:100%; }
   th { background:#F5F5F5; display:none; }
   td,  .price-list th {
    height:53px
  }
   td, th { border:1px solid #DDD; padding:10px; empty-cells:show; }
   td, th {
    text-align:left;
  }
   td+td, th+th {
    text-align:center;
    display:none;
  }
   td.default {
    display:table-cell;
  }
  .bg-purple {
    border-top:3px solid #FDCD0B;
  }
  .bg-blue {
    border-top:3px solid #6C5EFA;
  }
   .bg-purplea {
    border-top:3px solid #e8979d;
  }
  .bg-bluea {
    border-top:3px solid #9fca44;
  }
  .sep {
    background:#F5F5F5;
    font-weight:bold;
    text-align: center;
  }
  .txt-bold {
    font-size: 16px;
    font-weight: bold;
    text-transform: capitalize;
}
  .txt-l { font-size:24px; font-weight:bold; }
  .txt-top { position:relative; top:-9px; left:-2px; }
  .tick { font-size:18px; color:#2CA01C; }
  .untick { font-size:18px; color:red; }
  .hide {
    border:0;
    background:none;
  }

  @media (min-width: 640px) {
      article.price-list {
       width: 90%;
      }
     .price-list ul {
      display:none;
    }
    td,th {
      display:table-cell !important;
    }
    td,th {
      width: 330px;

    }
    td+td, th+th {
      width: auto;
    }
  }
</style>


<script type="application/javascript">

  jQuery( "ul" ).on( "click", "li", function() {
    var pos = jQuery(this).index()+2;
   jQuery("tr").find('td:not(:eq(0))').hide();
    jQuery('td:nth-child('+pos+')').css('display','table-cell');
    jQuery("tr").find('th:not(:eq(0))').hide();
    jQuery('li').removeClass('active');
   jQuery(this).addClass('active');
  });

  // Initialize the media query
  var mediaQuery = window.matchMedia('(min-width: 640px)');

  // Add a listen event
  mediaQuery.addListener(doSomething);

  // Function to do something with the media query
  function doSomething(mediaQuery) {
    if (mediaQuery.matches) {
      jQuery('.sep').attr('colspan',4);
    } else {
      jQuery('.sep').attr('colspan',2);
    }
  }

  // On load
  doSomething(mediaQuery);
</script>
