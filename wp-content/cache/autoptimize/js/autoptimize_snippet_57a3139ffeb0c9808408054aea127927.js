jQuery(document).ready(function()
{jQuery('.customer-logos').slick({slidesToShow:6,slidesToScroll:1,autoplay:true,autoplaySpeed:1500,arrows:false,dots:false,pauseOnHover:false,responsive:[{breakpoint:768,settings:{slidesToShow:4}},{breakpoint:520,settings:{slidesToShow:1}}]});jQuery(".img_html").css({"display":"block"});jQuery(".desc_html").css({"display":"block"});jQuery(".ff-cate-service").click(function()
{var id=this.id;if(id==="html")
{jQuery(".img_html").css({"display":"block"});jQuery(".desc_html").css({"display":"block"});jQuery(".img_wordpress").css({"display":"none"});jQuery(".desc_wordpress").css({"display":"none"});jQuery(".img_search").css({"display":"none"});jQuery(".desc_search").css({"display":"none"});jQuery(".img_integration").css({"display":"none"});jQuery(".desc_integration").css({"display":"none"});jQuery(".img_responsive").css({"display":"none"});jQuery(".desc_responsive").css({"display":"none"});jQuery(".img_web").css({"display":"none"});jQuery(".desc_web").css({"display":"none"});}
if(id==="wordpress")
{jQuery(".img_html").css({"display":"none"});jQuery(".desc_html").css({"display":"none"});jQuery(".img_wordpress").css({"display":"block"});jQuery(".desc_wordpress").css({"display":"block"});jQuery(".img_search").css({"display":"none"});jQuery(".desc_search").css({"display":"none"});jQuery(".img_integration").css({"display":"none"});jQuery(".desc_integration").css({"display":"none"});jQuery(".img_responsive").css({"display":"none"});jQuery(".desc_responsive").css({"display":"none"});jQuery(".img_web").css({"display":"none"});jQuery(".desc_web").css({"display":"none"});}
if(id==="search")
{jQuery(".img_html").css({"display":"none"});jQuery(".desc_html").css({"display":"none"});jQuery(".img_wordpress").css({"display":"none"});jQuery(".desc_wordpress").css({"display":"none"});jQuery(".img_search").css({"display":"block"});jQuery(".desc_search").css({"display":"block"});jQuery(".img_integration").css({"display":"none"});jQuery(".desc_integration").css({"display":"none"});jQuery(".img_responsive").css({"display":"none"});jQuery(".desc_responsive").css({"display":"none"});jQuery(".img_web").css({"display":"none"});jQuery(".desc_web").css({"display":"none"});}
if(id==="integration")
{jQuery(".img_html").css({"display":"none"});jQuery(".desc_html").css({"display":"none"});jQuery(".img_wordpress").css({"display":"none"});jQuery(".desc_wordpress").css({"display":"none"});jQuery(".img_search").css({"display":"none"});jQuery(".desc_search").css({"display":"none"});jQuery(".img_integration").css({"display":"block"});jQuery(".desc_integration").css({"display":"block"});jQuery(".img_responsive").css({"display":"none"});jQuery(".desc_responsive").css({"display":"none"});jQuery(".img_web").css({"display":"none"});jQuery(".desc_web").css({"display":"none"});}
if(id==="responsive")
{jQuery(".img_html").css({"display":"none"});jQuery(".desc_html").css({"display":"none"});jQuery(".img_wordpress").css({"display":"none"});jQuery(".desc_wordpress").css({"display":"none"});jQuery(".img_search").css({"display":"none"});jQuery(".desc_search").css({"display":"none"});jQuery(".img_integration").css({"display":"none"});jQuery(".desc_integration").css({"display":"none"});jQuery(".img_responsive").css({"display":"block"});jQuery(".desc_responsive").css({"display":"block"});jQuery(".img_web").css({"display":"none"});jQuery(".desc_web").css({"display":"none"});}
if(id==="web")
{jQuery(".img_html").css({"display":"none"});jQuery(".desc_html").css({"display":"none"});jQuery(".img_wordpress").css({"display":"none"});jQuery(".desc_wordpress").css({"display":"none"});jQuery(".img_search").css({"display":"none"});jQuery(".desc_search").css({"display":"none"});jQuery(".img_integration").css({"display":"none"});jQuery(".desc_integration").css({"display":"none"});jQuery(".img_responsive").css({"display":"none"});jQuery(".desc_responsive").css({"display":"none"});jQuery(".img_web").css({"display":"block"});jQuery(".desc_web").css({"display":"block"});}
var $winvwidth=jQuery(window).width();if($winvwidth<767){jQuery(window).scrollTop(500);}});jQuery('.social-nav a').addClass('element-animation');});function openNav(){document.getElementById("mySidenav").style.width="250px";}
function closeNav(){document.getElementById("mySidenav").style.width="0";};