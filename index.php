<?php 
include('common.php');
include('conn.php');
?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface supports-pointerevents">
    
<head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <title>JLODA</title>

        <meta property="og:type" content="website">
        <meta property="og:title" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:site_name" content="Digital World Store">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Digital World Store">
        <meta name="twitter:description" content="">  
        <link rel="canonical" href="">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="theme-color" content="#1c1d1d">
  
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/font-awesome/4.7.0/css/font-awesome.min.css">  
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">  
        <link href="assets/css/rating.css" rel="stylesheet" type="text/css" media="all">            
        <link href="assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
        <link href="assets/css/theme.scss.css" rel="stylesheet" type="text/css" media="all">
        <link href="assets/css/themepunch.revolution.css" rel="stylesheet" type="text/css" media="all">  
        <link href="assets/css/digital-world.css" rel="stylesheet" type="text/css" media="all"> 
                
        <script>
            window.theme = window.theme || {};
            theme.strings = {
              zoomClose: "Close (Esc)",
              zoomPrev: "Previous (Left arrow key)",
              zoomNext: "Next (Right arrow key)",
              moneyFormat: "\u003cspan class=money\u003e${{amount}}\u003c\/span\u003e"
            };
            theme.settings = {
              cartType: "drawer",
              gridType: "collage",
              zoomEnable: true
            };
        </script>
        
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>      
        <script src="assets/js/modernizr.min.js" type="text/javascript"></script>  
        <style>
            #sync3 .owl-prev {
                width: 47px;
    height: 47px;
    position: absolute;
    top: -7px;
    margin-left: -20px;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: #4285F4;
    opacity: 1;
}

#sync3 .owl-next {
    width: 47px;
    height: 47px;
    position: absolute;
    top: -7px;
    right: -25px;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: #4285F4;
    opacity: 1;
}
#sync3 .owl-prev span, #sync3 .owl-next span {
    position: relative;
    top:20%;
}
#sync3 .owl-pagination{
    margin-top: 11px;
}

            #sync4 .owl-prev {
              width: 47px;
    padding-top: 0%;
    height: 75px;
    position: absolute;
    margin-left: -20px;
    display: block!IMPORTANT;
    background-color: #4285F4;
    opacity: 1;
    color: #fff;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}

#sync4 .owl-next {
    width: 47px;
    height: 72px;
    padding-top: 0%;
    position: absolute;
    right: 0;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: #4285F4;
    opacity: 1;
    color: #fff;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}
#sync50 .owl-prev,#sync7 .owl-prev,#sync6 .owl-prev,#sync05 .owl-prev,#sync5 .owl-prev {
    width: 47px;
    padding-top: 0%;
    height: 75px;
    position: absolute;
    margin-left: -75px;
    display: block!IMPORTANT;
    background-color: transparent;
    opacity: 1;
    color: #4285F4;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}

#sync50 .owl-next,#sync7 .owl-next,#sync6 .owl-next,#sync05 .owl-next,#sync5 .owl-next {
    width: 47px;
    height: 72px;
    padding-top: 0%;
    position: absolute;
    right: -47px;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: transparent;
    opacity: 1;
    color: #4285F4;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}
#sync50 .owl-controls .owl-buttons div.owl-prev:before,#sync7 .owl-controls .owl-buttons div.owl-prev:before,#sync6 .owl-controls .owl-buttons div.owl-prev:before,#sync05 .owl-controls .owl-buttons div.owl-prev:before,#sync5 .owl-controls .owl-buttons div.owl-prev:before {

    font-size: 100px;

}
#sync50 .owl-controls .owl-buttons div.owl-next:before,#sync7 .owl-controls .owl-buttons div.owl-next:before,#sync6 .owl-controls .owl-buttons div.owl-next:before,#sync05 .owl-controls .owl-buttons div.owl-next:before,#sync5 .owl-controls .owl-buttons div.owl-next:before {

font-size: 100px;

}

            #sync8 .owl-prev {
                width: 47px;
    padding-top: 0%;
    height: 73px;
    position: absolute;
   
    margin-left: -20px;
    display: block!IMPORTANT;
    background-color: #4285F4;
    opacity: 1;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    color: #fff;
}

#sync8 .owl-next{
    width: 47px;
    height: 72px;
    padding-top: 0%;
    position: absolute;
    right: 0;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: #4285F4;
    opacity: 1;
    color: #fff;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}


            #sync9 .owl-prev {
                width: 47px;
    padding-top: 0%;
    height: 73px;
    position: absolute;
   
    margin-left: -20px;
    display: block!IMPORTANT;
    background-color: #4285F4;
    opacity: 1;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    color: #fff;
    
}

#sync9 .owl-next {
    width: 47px;
    height: 72px;
    padding-top: 0%;
    position: absolute;
    right: 0;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: #4285F4;
    opacity: 1;
    color: #fff;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}

            #sync10 .owl-prev {
                width: 47px;
    padding-top: 0%;
    height: 73px;
    position: absolute;
   
    margin-left: -20px;
    display: block!IMPORTANT;
    background-color: #4285F4;
    opacity: 1;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    color: #fff;
}

#sync10 .owl-next{
    width: 47px;
    height: 72px;
    padding-top: 0%;
    position: absolute;
    right: 0;
    display: block!IMPORTANT;
    border: 0px solid black;
    background-color: #4285F4;
    opacity: 1;
    color: #fff;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}
#sync4 .owl-prev span, #sync4 .owl-next span,#sync8 .owl-prev span, #sync8 .owl-next span,#sync9 .owl-prev span, #sync9 .owl-next span, #sync10 .owl-next span {
    position: relative;
    top:20%;
}
#sync4 .owl-pagination,#sync8 .owl-pagination,#sync9 .owl-pagination,#sync10 .owl-pagination{
    margin-top: 11px;
}

#sync1 img{
    width:100%;
        height: 350px;
    border-radius: 8px
}
#sync5 .owl-pagination{
    text-align: center;
}
#sync05 .owl-pagination{
    text-align: center;
}
#sync6 .owl-pagination{
    text-align: center;
}
#sync7 .owl-pagination{
    text-align: center;
}
.topnav{
    position: fixed;
    width: 100%;
    z-index: 9999;
}
.topicon{
    margin-top: 7%;
}
.colortext:hover{
    color: #50d8af!important;
}
@media screen and (max-width: 320px) {
    .topicon{
    margin-top: 25%;
}       
}
@media screen and (min-width: 320px) and (max-width: 360px) {
    .topicon{
    margin-top: 23%;
}       
}
@media screen and (min-width: 361px) and (max-width: 375px) {
    .topicon{
    margin-top: 22%;
}       
}
@media screen and (min-width: 376px) and (max-width: 425px) {
    .topicon{
    margin-top: 19%;
}       
}
@media screen and (min-width: 426px) and (max-width: 640px) {
    .topicon{
    margin-top: 16%;
}       
}
@media screen and (min-width: 641px) and (max-width: 815px) {
    .topicon{
    margin-top: 13%;
}       
}
@media screen and (min-width: 816px) and (max-width: 1024px) {
    .topicon{
    margin-top: 10%;
}       
}
@media screen and (min-width: 1025px) and (max-width: 1260px) {
    .topicon{
    margin-top: 8%;
}       
}
.product-label .new-label .openstore{
    color:#ffffff;
     background-color: forestgreen;
}
.product-label .new-label .openstore:after{
    border-right-color:forestgreen;
}
.product-label .new-label .closedstore{
    color:#ffffff;
     background-color: grey;
}
.product-label .new-label .closedstore:after{
    border-right-color:grey;
}
.hovero:hover{
  box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
    transform: translateY(-10px);
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    transition: 0.4s;
}
.counter{
  display: flex;
  margin-top: 3%;
  flex-direction: row;
  flex-wrap: wrap;
}
.counter .item{
  vertical-align: middle;
  width: 16.66%;
  height: 100%;
  text-align: center;
  padding: 0;
  margin: 0;
}
.counter .item i{
  color: rgba(25, 25, 25, 0.9);
  font-size: 4em;
  text-shadow: 1px 1px 1px #ccc;
}
.counter .item p.number{
  color: rgba(21, 21, 21, 1.0);
  font-size: 3em;
  text-shadow: 1px 1px 1px #ccc;
}
.counter .item p.label{
  color: rgba(25, 25, 25, 0.9);
  font-size: 1.1em;
  text-shadow: 1px 1px 1px #ccc;
  text-transform: lowercase;
}
.counter .item:hover i, 
.counter .item:hover p{
  color: rgba(10, 10, 10, 1.0);
}

@media (max-width: 786px){
  .counter .item {
     flex: 0 0 50%;
  }
}
.site-footer__copyright--bottom .footer-social{
    text-align: center;
}
.site-footer__copyright--bottom .footer-social a{
    display: inline-block;
    width: 40px;
    height: 40px;
    color: #000!important;
    border-radius: 3px;
    position: relative;
    font-size: 20px;
    border: 1px solid #eee;
    text-align: center;
    line-height: 40px;
    margin-right: 3px;
}
.badge{
    background-color: #294798;
    padding: 0 5px;
    color: #fff;
    margin-right: 5px;
}
#sync05 .product-label .trend-label span:after {
    border-right-color: #00d5d5;
}
#sync5 .product-label .trend-label span:after {
    border-right-color: #00d5d5;
}
.foolinks{
    padding: 0 9.5px;
    margin-bottom: 0!important;
    border-right: 1px solid #000;
}
.footicon{
    top: 15px;
    right: 0px;
    color: #50d8af!important;
}
.footicon:hover{

    color: #000;
}
#sync1a .owl-controls .owl-buttons div.owl-prev {
    left: 0px;
}
#sync1b .owl-controls .owl-buttons div.owl-prev {
    left: 0px;
}
#sync1c .owl-controls .owl-buttons div.owl-prev {
    left: 0px;
}
.fac a{
  background: #fff;
  -webkit-transition:All 0.3s ease-out; 
  -moz-transition:All 0.3s ease-out; 
  -o-transition:All 0.3s ease-out;
}
.fac a:hover{
  background: #314d91;
    color: #fff!important;
}
.twi a{
  background: #fff;
  -webkit-transition:All 0.3s ease-out; 
  -moz-transition:All 0.3s ease-out; 
  -o-transition:All 0.3s ease-out;
}
.twi a:hover{
  background: #07beed;
    color: #fff!important;
}
.pin a{
  background: #fff;
  -webkit-transition:All 0.3s ease-out; 
  -moz-transition:All 0.3s ease-out; 
  -o-transition:All 0.3s ease-out;
}
.pin a:hover{
  background: #cb2027;
    color: #fff!important;
}
.goo a{
  background: #fff;
  -webkit-transition:All 0.3s ease-out; 
  -moz-transition:All 0.3s ease-out; 
  -o-transition:All 0.3s ease-out;
}
.goo a:hover{
  background: #a7291b;
    color: #fff!important;
}
.lin a{
  background: #fff;
  -webkit-transition:All 0.3s ease-out; 
  -moz-transition:All 0.3s ease-out; 
  -o-transition:All 0.3s ease-out;
}
.lin a:hover{
  background: #1698E3;
    color: #fff!important;
}
.fli a{
  background: #fff;
  -webkit-transition:All 0.3s ease-out; 
  -moz-transition:All 0.3s ease-out; 
  -o-transition:All 0.3s ease-out;
}
.fli a:hover{
  background: #50d8af;
    color: #fff!important;
}
.foohover{
  color:#50D8AF!important;
}
.foohover:hover{
  color:#4285FA!important;
}
.colortext{
    color:#000!important;
}
.colortext:hover{
    color:#50d8af!important;
}
        </style>
        
    </head>
    <!-- oncontextmenu="return false;" -->
    <body id="digital-world-store" class="template-index" >
        <div id="NavDrawer" class="drawer drawer--left">
            <div id="html-section-drawer-menu" class="html-section">
                <div data-section-id="drawer-menu" data-section-type="drawer-menu-section">
                    <div class="drawer__fixed-header">
                        <div class="drawer__header">
                            <div class="drawer__close drawer__close--left">
                                <button type="button" class="icon-fallback-text drawer__close-button js-drawer-close">
                                <span class="icon icon-x" aria-hidden="true"></span>
                                <span class="fallback-text">Close menu</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="drawer__inner">    
                        <ul class="mobile-nav">      
                            <li class="mobile-nav__item">
                                <a href="index.html" class="mobile-nav__link">Home</a>
                            </li>
                            <!-- <li class="mobile-nav__item">
                                <div class="mobile-nav__has-sublist">
                                    <a href="" class="mobile-nav__link" id="Label-mega-menu">Mega Menu</a>
                                    <div class="mobile-nav__toggle">
                                        <button type="button" class="mobile-nav__toggle-btn icon-fallback-text" data-aria-controls="Linklist-mega-menu" aria-expanded="false" aria-controls="Linklist-mega-menu">
                                        <span class="icon-fallback-text mobile-nav__toggle-open">
                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                        <span class="fallback-text">Expand submenu</span>
                                        </span>
                                        <span class="icon-fallback-text mobile-nav__toggle-close">
                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                        <span class="fallback-text">Collapse submenu</span>
                                        </span>
                                        </button>
                                    </div>
                                </div>
                                <ul class="mobile-nav__sublist megamenu__dropdown megamenu_1" id="Linklist-mega-menu" aria-labelledby="Label-mega-menu">
                                    <li class="nav-sampletext grid__item large--one-quarter">
                                        <a href="#"><img src="assets/images/menu1_345x230.jpg" alt=""></a>
                                        <p>
                                            Lorem ipsum dolor sit amet, quod fabellas hendrerit per eu, mea populo epicuri et, ea possim numquam mea.
                                        </p>
                                    </li>
                                    <li class="nav-links nav-links01 grid__item large--one-quarter">
                                        <ul>
                                            <li class="list-title">Smartphone</li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Apple</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Samsung</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">LG</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Asus</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Nokia</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">BlackBerry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-links nav-links02 grid__item large--one-quarter">
                                        <ul>
                                            <li class="list-title">Tablet</li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">iPad</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Samsung</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Acer</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Asus</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Lenovo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-links nav-links03 grid__item large--one-quarter">
                                        <ul>
                                            <li class="list-title">Laptop</li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Asus</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Dell</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Acer</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Lenovo</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">HP</a>
                                            </li>
                                            <li class="list-unstyled nav-sub-mega">
                                                <a href="">Macbook</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="mobile-nav__item">
                                <div class="mobile-nav__has-sublist">
                                    <a href="" class="mobile-nav__link" id="Label-collection-layout">Collection Layout</a>
                                    <div class="mobile-nav__toggle">
                                        <button type="button" class="mobile-nav__toggle-btn icon-fallback-text" data-aria-controls="Linklist-collection-layout" aria-expanded="false" aria-controls="Linklist-collection-layout">
                                        <span class="icon-fallback-text mobile-nav__toggle-open">
                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                        <span class="fallback-text">Expand submenu</span>
                                        </span>
                                        <span class="icon-fallback-text mobile-nav__toggle-close">
                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                        <span class="fallback-text">Collapse submenu</span>
                                        </span>
                                        </button>
                                    </div>
                                </div>
                                <ul class="mobile-nav__sublist" id="Linklist-collection-layout" aria-labelledby="Label-collection-layout">
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Collection - Full Width</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Collection - Left Sidebar</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Collection - Right Sidebar</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="mobile-nav__item">
                                <div class="mobile-nav__has-sublist">
                                    <a href="" class="mobile-nav__link" id="Label-pages">Pages</a>
                                    <div class="mobile-nav__toggle">
                                        <button type="button" class="mobile-nav__toggle-btn icon-fallback-text" data-aria-controls="Linklist-pages" aria-expanded="false" aria-controls="Linklist-pages">
                                        <span class="icon-fallback-text mobile-nav__toggle-open">
                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                        <span class="fallback-text">Expand submenu</span>
                                        </span>
                                        <span class="icon-fallback-text mobile-nav__toggle-close">
                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                        <span class="fallback-text">Collapse submenu</span>
                                        </span>
                                        </button>
                                    </div>
                                </div>
                                <ul class="mobile-nav__sublist" id="Linklist-pages" aria-labelledby="Label-pages">
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">About Us</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Our Services</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">FAQs</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Store</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Typography</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Heading</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="mobile-nav__item">
                                <div class="mobile-nav__has-sublist">
                                    <a href="" class="mobile-nav__link" id="Label-blog">Blog</a>
                                    <div class="mobile-nav__toggle">
                                        <button type="button" class="mobile-nav__toggle-btn icon-fallback-text" data-aria-controls="Linklist-blog" aria-expanded="false" aria-controls="Linklist-blog">
                                        <span class="icon-fallback-text mobile-nav__toggle-open">
                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                        <span class="fallback-text">Expand submenu</span>
                                        </span>
                                        <span class="icon-fallback-text mobile-nav__toggle-close">
                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                        <span class="fallback-text">Collapse submenu</span>
                                        </span>
                                        </button>
                                    </div>
                                </div>
                                <ul class="mobile-nav__sublist" id="Linklist-blog" aria-labelledby="Label-blog">
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Blog - Grid Layout</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Blog - Full Width</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Blog - Left Sidebar</a>
                                    </li>
                                    <li class="mobile-nav__item">
                                        <a href="" class="mobile-nav__link">Blog - Right Sidebar</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="mobile-nav__item">
                                <a href="" class="mobile-nav__link">Contact us</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--secondary">
                                <a href="" id="customer_login_link">Log In</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--secondary">
                                <a href="" id="customer_register_link">Create Account</a>
                            </li>
                            <!-- <li class="site-nav__item nav-currency">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <div class="name">
                                    <div class="doubly-wrapper">
                                        <select class="currency-switcher right" name="doubly-currencies">
                                            <option value="USD" data-country="United-States" data-currency-symbol="$" data-display="USD">US Dollar</option>
                                            <option value="EUR" data-country="European-Union" data-currency-symbol="€" data-display="EUR">Euro</option>
                                            <option value="GBP" data-country="United-Kingdom" data-currency-symbol="£" data-display="GBP">British Pound Sterling</option>
                                            <option value="CAD" data-country="Canada" data-currency-symbol="$" data-display="CAD">Canadian Dollar</option>
                                        </select>
                                    </div>
                                </div>
                            </li>      -->
                        </ul>
                        <form action="" method="get" class="input-group search-bar search-bar--drawer" role="search" style="position: relative;">
                            <input type="search" name="q" value="" placeholder="Search something" class="input-group-field" aria-label="Search something" autocomplete="off">
                            <span class="input-group-btn">
                                <button type="submit" class="btn--secondary icon-fallback-text">
                                    <span class="icon icon-search" aria-hidden="true"></span>
                                    <span class="fallback-text">Search</span>
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="CartDrawer" class="drawer drawer--right drawer--has-fixed-footer">
            <div class="drawer__fixed-header">
                <div class="drawer__header">
                    <div class="drawer__title">Your cart</div>
                    <div class="drawer__close">
                        <button type="button" class="icon-fallback-text drawer__close-button js-drawer-close">
                            <span class="icon icon-x" aria-hidden="true"></span>
                            <span class="fallback-text">Close Cart</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="drawer__inner">
                <div id="CartContainer" class="drawer__cart">
                    <form action="" method="post" novalidate="" class="cart ajaxcart">
                        <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer" style="bottom: 151px;">
                            <div class="ajaxcart__product">
                                <div class="ajaxcart__row" data-line="1">
                                    <div class="grid">
                                        <div class="grid__item one-quarter">
                                            <a href="" class="ajaxcart__product-image">
                                            <img src="assets/images/cart1_100x100.jpg" alt="Samsung Galaxy Tab S 8.4 LTE"></a>
                                        </div>
                                        <div class="grid__item three-quarters">
                                            <div class="ajaxcart__product-name--wrapper">
                                                <a href="" class="ajaxcart__product-name">Samsung Galaxy Tab S 8.4 LTE</a>
                                                <span class="ajaxcart__product-meta">16GB / Dazzling White</span>
                                            </div>
                                            <div class="grid--full display-table">
                                                <div class="grid__item display-table-cell one-half">
                                                    <div class="ajaxcart__qty">
                                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="33071075462:2b592083f058dab21385b3b8ca87d6b1" data-qty="0" data-line="1" aria-label="Reduce item quantity by one">
                                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                                        <span class="fallback-text" aria-hidden="true">−</span>
                                                        </button>
                                                        <input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" data-id="33071075462:2b592083f058dab21385b3b8ca87d6b1" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="33071075462:2b592083f058dab21385b3b8ca87d6b1" data-line="1" data-qty="2" aria-label="Increase item quantity by one">
                                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                                        <span class="fallback-text" aria-hidden="true">+</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="grid__item display-table-cell one-half text-right">
                                                    <span class="ajaxcart__price">
                                                    $558.98 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ajaxcart__product">
                                <div class="ajaxcart__row" data-line="2">
                                    <div class="grid">
                                        <div class="grid__item one-quarter">
                                            <a href="" class="ajaxcart__product-image">
                                            <img src="assets/images/cart2_100x100.jpg" alt="Apple iPad Air 2"></a>
                                        </div>
                                        <div class="grid__item three-quarters">
                                            <div class="ajaxcart__product-name--wrapper">
                                                <a href="" class="ajaxcart__product-name">Apple iPad Air 2</a>
                                                <span class="ajaxcart__product-meta">16GB / Space Gray</span>
                                            </div>
                                            <div class="grid--full display-table">
                                                <div class="grid__item display-table-cell one-half">
                                                    <div class="ajaxcart__qty">
                                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="33071079110:1d9404927423faafed399bcdd3c96e68" data-qty="0" data-line="2" aria-label="Reduce item quantity by one">
                                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                                        <span class="fallback-text" aria-hidden="true">−</span>
                                                        </button>
                                                        <input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" data-id="33071079110:1d9404927423faafed399bcdd3c96e68" data-line="2" aria-label="quantity" pattern="[0-9]*">
                                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="33071079110:1d9404927423faafed399bcdd3c96e68" data-line="2" data-qty="2" aria-label="Increase item quantity by one">
                                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                                        <span class="fallback-text" aria-hidden="true">+</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="grid__item display-table-cell one-half text-right">
                                                    <span class="ajaxcart__price">
                                                    $359.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ajaxcart__product">
                                <div class="ajaxcart__row" data-line="3">
                                    <div class="grid">
                                        <div class="grid__item one-quarter">
                                            <a href="" class="ajaxcart__product-image">
                                            <img src="assets/images/cart3_100x100.jpg" alt="Samsung Galaxy S7"></a>
                                        </div>
                                        <div class="grid__item three-quarters">
                                            <div class="ajaxcart__product-name--wrapper">
                                                <a href="" class="ajaxcart__product-name">Samsung Galaxy S7</a>
                                                <span class="ajaxcart__product-meta">Large</span>
                                            </div>
                                            <div class="grid--full display-table">
                                                <div class="grid__item display-table-cell one-half">
                                                    <div class="ajaxcart__qty">
                                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="33071117382:7d2ab1761e034b0686ddc4923db9563d" data-qty="0" data-line="3" aria-label="Reduce item quantity by one">
                                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                                        <span class="fallback-text" aria-hidden="true">−</span>
                                                        </button>
                                                        <input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" data-id="33071117382:7d2ab1761e034b0686ddc4923db9563d" data-line="3" aria-label="quantity" pattern="[0-9]*">
                                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="33071117382:7d2ab1761e034b0686ddc4923db9563d" data-line="3" data-qty="2" aria-label="Increase item quantity by one">
                                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                                        <span class="fallback-text" aria-hidden="true">+</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="grid__item display-table-cell one-half text-right">
                                                    <span class="ajaxcart__price">
                                                    $899.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ajaxcart__footer ajaxcart__footer--fixed" style="height: 151px;">
                            <div class="grid--full">
                                <div class="grid__item two-thirds">
                                    <p class="ajaxcart__subtotal">
                                        Subtotal
                                    </p>
                                </div>
                                <div class="grid__item one-third text-right">
                                    <p class="ajaxcart__subtotal">
                                        $1,816.98
                                    </p>
                                </div>
                            </div>
                            <p class="ajaxcart__note text-center">
                                Shipping, taxes, and discounts calculated at checkout.
                            </p>
                            <button type="submit" class="btn--secondary btn--full cart__checkout" name="checkout">
                                Check Out <span class="icon icon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="PageContainer" class="is-moved-by-drawer">
            <div id="html-section-header" class="html-section topnav">
                <div data-section-id="header" data-section-type="header-section header-style-1" class="header-section header-style-1">
                    <div class="header-wrapper">
                        <?php include('header.php'); ?>
                    </div>
                </div>
                </div>
                <div id="html-section-header" class="html-section topicon">
                
                <div class="navigation-style-1">
                    <div class="navigation-bar menu-bar navigation1">  
                        <div class="wrapper">  
                            <div class="grid--full grid--table">
                                <div class="grid__item large--one-whole ">
                                    <ul class="custom-menu-icons grid--full grid--table">
                                            <div id="sync3" class="owl-carousel owl-theme">
                                        <li class="grid__item icon-element icon-1 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/mobile.png" alt="">
                                                <div class="icon-name" style="border-bottom: 3px solid #349fe2;">Mobile</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-2 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/electricity.png" alt="">
                                                <div class="icon-name">Electricity</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-3 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/landphone.png" alt="">
                                                <div class="icon-name">Landline</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-4 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/dish.png" alt="">
                                                <div class="icon-name">DTH</div>                  
                                            </a>
                                        </li>         
                                        <li class="grid__item icon-element icon-5 item">
                                            <a class="colortext" >
                                                <img class="icon-img" src="assets/images/gas.png" alt="">
                                                <div class="icon-name">Gas</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-6 item">
                                            <a class="colortext" >
                                                <img class="icon-img" src="assets/images/insurance.png" alt="">
                                                <div class="icon-name">Insurance</div>                  
                                            </a>
                                        </li>
                                
                                        </div>
                                    </ul>
                                </div>
                            </div>  
                        </div>  
                    </div>        
                </div>
                <div class="wrapper" style="padding: 0;margin-top: 7%;">
                <div class="form-vertical grid__item " style="
                
                border: 1px solid #eee;
                padding: 10px;
                    padding-top: 20px;
                margin-bottom: -35px;
                border-radius: 8px;
                   background-color: white;
    position: relative;
    top: -80px;
            ">
                <h2 class="colortext" style="
                margin-top: 1%;
                margin-bottom: 2%;
            ">Mobile Recharge or Bill Payment</h2>
                                                <form method="post" action="#" id="contact_form" accept-charset="UTF-8" class="contact-form">
                                                <div class="one-half" style="
                display:  inline-flex;
                margin-bottom: 1%;
            ">
               <div class="one-half">
                <input type="radio" name="gender" value="male" checked="">Prepaid
            </div> 
                   <div class="one-half">
                <input type="radio" name="gender" value="female">Postpaid
            </div>
            </div>
                                                    <div style="
                display: inline-flex;
                width: 100%;
            ">
            <div class="one-half" style="
                display:  inline-flex;
            ">
            <div class="one-half" style="margin-right: 2%;">
            <input type="text" id="ContactFormName" class="input-full" name="contact[name]" placeholder="Mobile Number" autocapitalize="words"  style="
                background-color: white;
                border-bottom: 1px solid #eee;
            ">
            </div>
                <div class="one-half" style="
                margin-right: 2%;
            ">
            <input type="text" id="ContactFormName2" class="input-full" name="contact[name]" placeholder="Operator" autocapitalize="words" style="
                background-color: white;
                border-bottom: 1px solid #eee;
            ">
            </div>
            </div>
            <div class="one-half" style="display:  inline-flex;
        ">
            <div class="one-half" style="
display:  inline-flex;
">
        <input type="text" id="ContactFormName3" class="input-full" name="contact[name]" placeholder="Amount" autocapitalize="words" style="
            background-color: white;
            border-bottom: 1px solid #eee;
                                                                                                                               "><span style="
font-size: 13px;
width: 100%;
padding-top: 10px;
">Browse Plan</span>
        </div>
             <div class="one-half" style="
            /* margin-left: 10%; */
            /* margin-right: 10%; */
        "><input type="submit" class="btn right" value="Proceed" style="
            width: 100%;
        ">
            
            </div>
        </div>
            </div>

                                                    
                                                    
                                                    
                                                    
                                                    
                                                </form>
                                            </div>
                                            </div>
            </div>
    
            <main class="main-content" style="background-color: #50d8af1f;">                      
                <div class="wrapper"  style="padding: 0;    ">  
                    <div class="top-area grid--full grid--table">
                        <div class="grid__item small--one-whole">
                                <div class="html-section index-section product-banner-grid">
                                        <div class="wrapper"  style="padding: 0;">
                                            <div class="home-product-sidebar-wrapper grid--table grid--full">
                                                
                                                <div class="grid__item block_content grid--table grid--full">      
                
                                                    <div class="grid__item content_products">             
                                                        <div class="grid grid--uniform grid--view-items">  
                                                                <div id="sync1" class="owl-carousel owl-theme">      
                                                            <div class="grid__item item">
                                                                <div class="grid-view-item" style="    padding: 0;">
                                                                    <div class="grid-normal-display">
                                                                            <div class="grid__image product-image" style="background-image: url(assets/images/slideshow1_785x345.png);background-size: cover;    margin-bottom: 0;
                                                                            border-radius: 8px;height: 500px;">
                                                                            <div class="one-half" style="margin: 10px;position:  absolute;top: 50%;left: 5%;">
                                                                                <h1>Get a full function dashboard for your business</h1>
                                                                            </div>
                                                                                <div class="one-third" style="position: absolute;right: 0;top: 45%;">
                                                                                        <div class="contact-form" style="padding: 25px;padding-bottom: 62px;background-color: rgba(255, 255, 255, 0.61);">
                                                                                         
                                                                                                <button type="submit" class="btn right js-login-modal" data-mfp-src="#liveModal" value="Login" style="width: 100%;margin-bottom: 6%;">Create Live Store</button>
                                                            
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                    </div>
               
                                                                </div>
                                                            </div> 
                                                            <div class="grid__item item">
                                                                    <div class="grid-view-item" style="    padding: 0;">
                                                                        <div class="grid-normal-display">
                                                                                <div class="grid__image product-image" style="background-image: url(assets/images/slideshow2_785x345.png);background-size: cover;    margin-bottom: 0;
                                                                                border-radius: 8px;height: 500px;">
                                                                                <div class="one-half" style="margin: 10px;position:  absolute;top: 50%;left: 5%;">
                                                                                        <h1>Get a full function dashboard for your business</h1>
                                                                                    </div>
                                                                                        <div class="one-third" style="position: absolute;right: 0;top: 45%;">
                                                                                                <div class="contact-form" style="padding: 25px;padding-bottom: 62px;background-color: rgba(255, 255, 255, 0.61);">
                                                                                                 
                                                                                                        <button type="submit" class="btn right js-login-modal" data-mfp-src="#liveModal" value="Login" style="width: 100%;margin-bottom: 6%;">Create Live Store</button>
                                                                    
                                                                                                </div>
                                                                                        </div>
                                                                                    
                                                                                </div>
                                                                        </div>
                   
                                                                    </div>
                                                                </div> 
                                                                <div class="grid__item item">
                                                                        <div class="grid-view-item" style="    padding: 0;">
                                                                            <div class="grid-normal-display">
                                                                                    <div class="grid__image product-image" style="background-image: url(assets/images/slideshow3_785x345.png);background-size: cover;    margin-bottom: 0;
                                                                                    border-radius: 8px;height: 500px;">
                                                                                    <div class="one-half" style="margin: 10px;position:  absolute;top: 50%;left: 5%;">
                                                                                            <h1>Get a full function dashboard for your business</h1>
                                                                                        </div>
                                                                                            <div class="one-third" style="position: absolute;right: 0;top: 45%;">
                                                                                                    <div class="contact-form" style="padding: 25px;padding-bottom: 62px;background-color: rgba(255, 255, 255, 0.61);">
                                                                                                     
                                                                                                            <button type="submit" class="btn right js-login-modal" data-mfp-src="#liveModal" value="Login" style="width: 100%;margin-bottom: 6%;">Create Live Store</button>
                                                                        
                                                                                                    </div>
                                                                                            </div>
                                                                                        
                                                                                    </div>
                                                                            </div>
                       
                                                                        </div>
                                                                    </div> 
                                                                    <div class="grid__item item">
                                                                            <div class="grid-view-item" style="    padding: 0;">
                                                                                <div class="grid-normal-display">
                                                                                        <div class="grid__image product-image" style="background-image: url(assets/images/slideshow4_785x345.png);background-size: cover;    margin-bottom: 0;
                                                                                        border-radius: 8px;height: 500px;">
                                                                                        <div class="one-half" style="margin: 10px;position:  absolute;top: 50%;left: 5%;">
                                                                                                <h1>Get a full function dashboard for your business</h1>
                                                                                            </div>
                                                                                                <div class="one-third" style="position: absolute;right: 0;top: 45%;">
                                                                                                        <div class="contact-form" style="padding: 25px;padding-bottom: 62px;background-color: rgba(255, 255, 255, 0.61);">
                                                                                                         
                                                                                                                <button type="submit" class="btn right js-login-modal" data-mfp-src="#liveModal" value="Login" style="width: 100%;margin-bottom: 6%;">Create Live Store</button>
                                                                            
                                                                                                        </div>
                                                                                                </div>
                                                                                            
                                                                                        </div>
                                                                                </div>
                           
                                                                            </div>
                                                                        </div> 
                                                                        <div class="grid__item item">
                                                                                <div class="grid-view-item" style="    padding: 0;">
                                                                                    <div class="grid-normal-display">
                                                                                            <div class="grid__image product-image" style="background-image: url(assets/images/slideshow5_785x345.png);background-size: cover;    margin-bottom: 0;
                                                                                            border-radius: 8px;height: 500px;">
                                                                                            <div class="one-half" style="margin: 10px;position:  absolute;top: 50%;left: 5%;">
                                                                                                    <h1>Get a full function dashboard for your business</h1>
                                                                                                </div>
                                                                                                    <div class="one-third" style="position: absolute;right: 0;top: 45%;">
                                                                                                            <div class="contact-form" style="padding: 25px;padding-bottom: 62px;background-color: rgba(255, 255, 255, 0.61);">
                                                                                                             
                                                                                                                    <button type="submit" class="btn right js-login-modal" data-mfp-src="#liveModal" value="Login" style="width: 100%;margin-bottom: 6%;">Create Live Store</button>
                                                                                
                                                                                                            </div>
                                                                                                    </div>
                                                                                                
                                                                                            </div>
                                                                                    </div>
                               
                                                                                </div>
                                                                            </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div> 
                                    <script>
                                            $(document).ready(function() {
                                                
                                                var sync1 = $("#sync1");
                                                var sync2 = $("#sync2");
                                                var sync3 = $("#sync3");
                                                sync1.owlCarousel({
                                                  singleItem : true,
                                                  slideSpeed : 300,
                                                  lazyLoad : true,
                                                  autoPlay : 5000,
                                                  navigation: false,
                                                  pagination:false,
                                                  afterAction : syncPosition,
                                                  responsiveRefreshRate : 200,
                                                });
                                                sync3.owlCarousel({
                                                  slideSpeed : 300,
                                                  lazyLoad : true,
                                                  autoPlay : false,
                                                  navigation: true,
                                                  pagination:false,
                                                  navigationText : ['<i class="fa fa-angle-left fa-3x"></i>','<i class="fa fa-angle-right fa-3x"></i>'],
                                                  responsiveRefreshRate : 200,
                                                });
                                              //   // Custom Navigation Events
                                              //   $("#sync3 .owl-next").click(function(){
                                              //  sync3.trigger('owl.next');
                                              //   })
                                              //   $("#sync3 .owl-prev").click(function(){
                                              //  sync3.trigger('owl.prev');
                                              //   })
                                              //   $(".owl-next").click(function(){
                                              //  sync1.trigger('owl.next');
                                              //   })
                                              //   $(".owl-prev").click(function(){
                                              //  sync1.trigger('owl.prev');
                                              //   })
                                                sync2.owlCarousel({
                                                  items : 5,
                                                  pagination:false,
                                                  responsiveRefreshRate : 100,
                                                  afterInit : function(el){
                                                    el.find(".owl-item").eq(0).addClass("synced");
                                                  }
                                                });
                                                function syncPosition(el){
                                                  var current = this.currentItem;
                                                  $("#sync2")
                                                    .find(".owl-item")
                                                    .removeClass("synced")
                                                    .eq(current)
                                                    .addClass("synced")
                                                  if($("#sync2").data("owlCarousel") !== undefined){
                                                    center(current)
                                                  }
                                                }
                                                $("#sync2").on("click", ".owl-item", function(e){
                                                  e.preventDefault();
                                                  var number = $(this).data("owlItem");
                                                  sync1.trigger("owl.goTo",number);
                                                });
                                                function center(number){
                                                  var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
                                                  var num = number;
                                                  var found = false;
                                                  for(var i in sync2visible){
                                                    if(num === sync2visible[i]){
                                                      var found = true;
                                                    }
                                                  }
                                                  if(found===false){
                                                    if(num>sync2visible[sync2visible.length-1]){
                                                      sync2.trigger("owl.goTo", num - sync2visible.length+2)
                                                    }else{
                                                      if(num - 1 === -1){
                                                        num = 0;
                                                      }
                                                      sync2.trigger("owl.goTo", num);
                                                    }
                                                  } else if(num === sync2visible[sync2visible.length-1]){
                                                    sync2.trigger("owl.goTo", sync2visible[1])
                                                  } else if(num === sync2visible[0]){
                                                    sync2.trigger("owl.goTo", num-1)
                                                  }
                                                }
                                              });
                                          </script> 
              
                        </div>

                    </div> 
                </div>
                <div class="content">          
                    <div class="index-sections">

                        
                        <div class="html-section index-section product-banner-grid">
                            <div class="wrapper"  style="padding: 0;">
                                <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                    <div class="grid__item block_heading grid--table grid--full style_default">      
                                        <div class="area-header grid__item one-third">
                                            <h2>
                                                <img src="assets/images/marker-icon.png" alt="icon">
                                                <a class="colortext" href="">Categories Near By Bangalore</a>
                                            </h2>
                                        </div>    
                                        <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                        <div class="area-tags grid__item two-thirds">
                                            <ul class="grid__link">
                                        
                                                <li>
                                                <a href="main_category.html"><span style=" color: #50d8af; ">View All</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid__item block_content grid--table grid--full">   
                                            <div class="navigation-bar menu-bar navigation1">  
                                                    <div class="wrapper"  style="padding: 0;">  
                                                        <div class="grid--full grid--table">
                                                            <div class="grid__item large--one-whole ">
                                                                <ul class="custom-menu-icons grid--full grid--table">
                                                                        <div id="sync4" class="owl-carousel owl-theme">
                                                                    <li class="grid__item icon-element icon-1 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/tv.png" alt="">
                                                                            <div class="icon-name">Electronics & TV</div>                  
                                                                        </a>
                                                                    </li>
                                                                    <li class="grid__item icon-element icon-2 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/lifestyle.png" alt="">
                                                                            <div class="icon-name">Lifestyle</div>                  
                                                                        </a>
                                                                    </li>
                                                                    <li class="grid__item icon-element icon-3 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/home.png" alt="">
                                                                            <div class="icon-name">Home,Kitchen,Pet & Furniture</div>                  
                                                                        </a>
                                                                    </li>
                                                                    <li class="grid__item icon-element icon-4 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/computer.png" alt="">
                                                                            <div class="icon-name">Mobiles & Computers</div>                  
                                                                        </a>
                                                                    </li>         
                                                                    <li class="grid__item icon-element icon-5 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/beauty.png" alt="">
                                                                            <div class="icon-name">Beauty,Health & Grocery</div>                  
                                                                        </a>
                                                                    </li>
                                                                    <li class="grid__item icon-element icon-6 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/stationery.png" alt="">
                                                                            <div class="icon-name">Book & Stationary</div>                  
                                                                        </a>
                                                                    </li>
                                                                    <li class="grid__item icon-element icon-7 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/sports.png" alt="">
                                                                            <div class="icon-name">Sports,Fitness,Bags & Luggage</div>                  
                                                                        </a>
                                                                    </li>
                                                                    <li class="grid__item icon-element icon-8 item">
                                                                        <a href="">
                                                                            <img class="icon-img" src="assets/images/hardware.png" alt="">
                                                                            <div class="icon-name">Hardware & Paints</div>                  
                                                                        </a>
                                                                    </li> 

                                                                    <li class="grid__item icon-element icon-8 item">
                                                                            <a href="">
                                                                                <img class="icon-img" src="assets/images/car.png" alt="">
                                                                                <div class="icon-name">Car,Motor Bikes & Industrials</div>                  
                                                                            </a>
                                                                        </li> 
                                                                        <li class="grid__item icon-element icon-8 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/medicine-.png" alt="">
                                                                                    <div class="icon-name">Medicines & Equipments</div>                  
                                                                                </a>
                                                                            </li> 
                                                                            <li class="grid__item icon-element icon-8 item">
                                                                                    <a href="">
                                                                                        <img class="icon-img" src="assets/images/store.png" alt="">
                                                                                        <div class="icon-name">Local Store</div>                  
                                                                                    </a>
                                                                                </li> 
                                                                                <li class="grid__item icon-element icon-8 item">
                                                                                        <a href="">
                                                                                            <img class="icon-img" src="assets/images/doctor.png" alt="">
                                                                                            <div class="icon-name">Doctors</div>                  
                                                                                        </a>
                                                                                    </li> 
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>  
                                                    </div>  
                                                </div>  
                                                <script>
                                                        $(document).ready(function() {
                                                            var sync4 = $("#sync4");
                                                            sync4.owlCarousel({
                                                              items:4,
                                                        slideSpeed : 300,
                                                        lazyLoad : true,
                                                        autoPlay : false,
                                                        loop : true,
                                                        navigation: true,
                                                        pagination:false,
                                                        navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                                        responsiveRefreshRate : 200,
                                                      });
                                                        });
                                                        </script>    

                                    </div>

                                </div>
                            </div>
                        </div>
                    

                        <div class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                        <div class="grid__item block_heading grid--table grid--full style_default">      
                                            <div class="area-header grid__item one-third">
                                                <h2>
                                                    <img src="assets/images/marker-icon.png" alt="icon">
                                                    <!-- <a href="">Offers of the Day in Bangalore</a> -->
                                                    <a class="colortext" href="">Deals of the Day</a>
                                                </h2>
                                            </div>    
                                            <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                            <div class="area-tags grid__item two-thirds">
                                                <ul class="grid__link">
                                            
                                                    <li>
                                                    <a href=""><span style=" color: #50d8af; ">View All</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="grid__item block_content grid--table grid--full">   
      
                                            <div class="grid__item content_products" style="padding-left: 3.5%;width: 96%;"  >        
                                                <div id="sync5" class="grid grid--uniform grid--view-items owl-carousel owl-theme">   
                                                         
                                                        <div class="grid__item item">
                                                                <div class="grid-view-item">
                                                                    <div class="grid-normal-display">
                                                                        <div class="grid__image product-image">
                                                                            <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/product10_320x320.jpg" alt="Google Pixel">
                                                                            </a>
                                                                            <div class="product-label">
                                                                                <!-- <div class="label-element new-label">
                                                                                    <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                                </div>-->
                                                                                <div class="label-element trend-label">
                                                                                    <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                </div> 
                                                                            </div>
                                                                            <ul class="action-button">
                                                                                <li class="add-to-cart-form">
                                                                                    <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                        <div class="effect-ajax-cart">
                                                                                            <input type="hidden" name="quantity" value="1">
                                                                                            <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li class="wishlist">
                                                                                    <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="quickview">
                                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                            <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                    <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: inline-flex;width:100%;">
                                                                    <div class="one-half">
                                                                      <div class="h4 grid-view-item__title">
                                                                        <a href="product.html">Google Pixel</a>
                                                                    </div>
                                                                    <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                            <!-- <span class="badge">5</span> -->
                                                                            <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                            </span>
                                                                        </div>
                                                                    <div class="grid-view-item__meta">                                                                                                                              
                                                                        <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                        <span class="product-price__price product-price__sale">
                                                                        <span class="money">₹ 899 </span>
                                                                        <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                        </span>
                                                                    </div>
                                                                    </div>
                                                                    <div class="one-half">
                                                                        <div class="grid-view-item__title">
                                                                            <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                 
                                                                </div>
                                                            </div>
                                                            <div class="grid__item item">
                                                                <div class="grid-view-item">
                                                                    <div class="grid-normal-display">
                                                                        <div class="grid__image product-image">
                                                                            <a class="grid-view-item__link" href="">
                                                                                <img class="grid-view-item__image" src="assets/images/product13_320x320.jpg" alt="HTC 10">
                                                                            </a>
                                                                            <div class="product-label">
                                                                                    <div class="label-element trend-label">
                                                                                            <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                        </div> 
                                                                            </div>
                                                                            <ul class="action-button">
                                                                                <li class="add-to-cart-form">
                                                                                    <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                        <div class="effect-ajax-cart">
                                                                                            <input type="hidden" name="quantity" value="1">
                                                                                            <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li class="wishlist">
                                                                                    <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="quickview">
                                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                            <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                    <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: inline-flex;width:100%;">
                                                                        <div class="one-half">
                                                                          <div class="h4 grid-view-item__title">
                                                                            <a href="product.html">Google Pixel</a>
                                                                        </div>
                                                                        <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                                <!-- <span class="badge">5</span> -->
                                                                                <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                                </span>
                                                                            </div>
                                                                        <div class="grid-view-item__meta">                                                                                                                              
                                                                            <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                            <span class="product-price__price product-price__sale">
                                                                            <span class="money">₹ 899 </span>
                                                                            <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                            </span>
                                                                        </div>
                                                                        </div>
                                                                        <div class="one-half">
                                                                            <div class="grid-view-item__title">
                                                                                <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid__item item">
                                                                <div class="grid-view-item">
                                                                    <div class="grid-normal-display">
                                                                        <div class="grid__image product-image">
                                                                            <a class="grid-view-item__link" href="">
                                                                                <img class="grid-view-item__image" src="assets/images/product4_320x320.jpg" alt="iPhone 7">
                                                                            </a>
                                                                            <div class="product-label">
                                                                                    <div class="label-element trend-label">
                                                                                            <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                        </div> 
                                                                            </div>
                                                                            <ul class="action-button">
                                                                                <li class="add-to-cart-form">
                                                                                    <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                        <div class="effect-ajax-cart">
                                                                                            <input type="hidden" name="quantity" value="1">
                                                                                            <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li class="wishlist">
                                                                                    <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="quickview">
                                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                            <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                    <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: inline-flex;width:100%;">
                                                                        <div class="one-half">
                                                                          <div class="h4 grid-view-item__title">
                                                                            <a href="product.html">Google Pixel</a>
                                                                        </div>
                                                                        <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                                <!-- <span class="badge">5</span> -->
                                                                                <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                                </span>
                                                                            </div>
                                                                        <div class="grid-view-item__meta">                                                                                                                              
                                                                            <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                            <span class="product-price__price product-price__sale">
                                                                            <span class="money">₹ 899 </span>
                                                                            <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                            </span>
                                                                        </div>
                                                                        </div>
                                                                        <div class="one-half">
                                                                            <div class="grid-view-item__title">
                                                                                <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid__item item">
                                                                <div class="grid-view-item">
                                                                    <div class="grid-normal-display">
                                                                        <div class="grid__image product-image">
                                                                            <a class="grid-view-item__link" href="">
                                                                            <img class="grid-view-item__image" src="assets/images/product14_320x320.jpg" alt="LG G5">
                                                                            </a>
                                                                            <div class="product-label">
                                                                                    <div class="label-element trend-label">
                                                                                            <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                        </div> 
                                                                            </div>
                                                                            <ul class="action-button">
                                                                                <li class="add-to-cart-form">
                                                                                    <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                        <div class="effect-ajax-cart">
                                                                                            <input type="hidden" name="quantity" value="1">
                                                                                            <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li class="wishlist">
                                                                                    <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="quickview">
                                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                            <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                    <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: inline-flex;width:100%;">
                                                                        <div class="one-half">
                                                                          <div class="h4 grid-view-item__title">
                                                                            <a href="product.html">Google Pixel</a>
                                                                        </div>
                                                                        <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                                <!-- <span class="badge">5</span> -->
                                                                                <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                                </span>
                                                                            </div>
                                                                        <div class="grid-view-item__meta">                                                                                                                              
                                                                            <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                            <span class="product-price__price product-price__sale">
                                                                            <span class="money">₹ 899 </span>
                                                                            <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                            </span>
                                                                        </div>
                                                                        </div>
                                                                        <div class="one-half">
                                                                            <div class="grid-view-item__title">
                                                                                <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid__item item">
                                                                    <div class="grid-view-item">
                                                                        <div class="grid-normal-display">
                                                                            <div class="grid__image product-image">
                                                                                <a class="grid-view-item__link" href="">
                                                                                <img class="grid-view-item__image" src="assets/images/product14_320x320.jpg" alt="LG G5">
                                                                                </a>
                                                                                <div class="product-label">
                                                                                        <div class="label-element trend-label">
                                                                                                <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                            </div> 
                                                                                </div>
                                                                                <ul class="action-button">
                                                                                    <li class="add-to-cart-form">
                                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                            <div class="effect-ajax-cart">
                                                                                                <input type="hidden" name="quantity" value="1">
                                                                                                <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li class="wishlist">
                                                                                        <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="quickview">
                                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                                <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                        <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div style="display: inline-flex;width:100%;">
                                                                            <div class="one-half">
                                                                              <div class="h4 grid-view-item__title">
                                                                                <a href="product.html">Google Pixel</a>
                                                                            </div>
                                                                            <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                                    <!-- <span class="badge">5</span> -->
                                                                                    <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                                    </span>
                                                                                </div>
                                                                            <div class="grid-view-item__meta">                                                                                                                              
                                                                                <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                                <span class="product-price__price product-price__sale">
                                                                                <span class="money">₹ 899 </span>
                                                                                <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                                </span>
                                                                            </div>
                                                                            </div>
                                                                            <div class="one-half">
                                                                                <div class="grid-view-item__title">
                                                                                    <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                                </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <script>
                                    $(document).ready(function() {
                                        var sync5 = $("#sync5");
                                        sync5.owlCarousel({
                                            items:4,
                                    slideSpeed : 300,
                                    lazyLoad : true,
                                    autoPlay : false,
                                    loop : true,
                                    navigation: true,
                                    pagination:false,
                                    navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                    responsiveRefreshRate : 200,
                                  });
                                    });
                                    </script>

                                    <script>
                                    $(document).ready(function() {
                                        var sync05 = $("#sync05");
                                        sync05.owlCarousel({
                                            items:4,
                                    slideSpeed : 300,
                                    lazyLoad : true,
                                    autoPlay : false,
                                    loop : true,
                                    navigation: true,
                                    pagination:false,
                                    navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                    responsiveRefreshRate : 200,
                                  });
                                    });
                                    </script>  


                        <div class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                        <div class="grid__item block_heading grid--table grid--full style_default">      
                                            <div class="area-header grid__item one-third">
                                                <h2>
                                                    <img src="assets/images/marker-icon.png" alt="icon">
                                                    <a class="colortext" href="">Featured Products</a>
                                                </h2>
                                            </div>    
                                            <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                            <div class="area-tags grid__item two-thirds">
                                                <ul class="grid__link">
                                            
                                                    <li>
                                                    <a href=""><span style=" color: #50d8af; ">View All</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="grid__item block_content grid--table grid--full">   
      
                                                <div class="grid__item content_products">             
                                                    <div class="grid grid--uniform grid--view-items">   
                                                        <div class="grid__item item two-thirds">
                                                          <div id="sync1a" class="owl-carousel owl-theme">      
                                                            <div class="grid__item item" style="border-radius: 8px;">
                                                              <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow1_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                                            </div>
                                                            <div class="grid__item item"  style="border-radius: 8px;">
                                                              <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow2_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                                            </div>
                                                            <div class="grid__item item"  style="border-radius: 8px;">
                                                              <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow3_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                                            </div>
                                                            <div class="grid__item item"  style="border-radius: 8px;">
                                                              <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow4_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                                            </div>
                                                            <div class="grid__item item"  style="border-radius: 8px;">
                                                              <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow5_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid__item item one-third">
                                                            <div class="grid-view-item">
                                                                <img src="assets/images/slideshow2_785x345.png" style="width: 336px;height:280px;">
                                                            </div>
                                                            <div class="grid-view-item">
                                                              <img src="assets/images/slideshow2_785x345.png" style="width: 320px;height:100px;">
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                              $(document).ready(function() {
                                                  
                                                  var sync1a = $("#sync1a");
                                                  
                                                  sync1a.owlCarousel({
                                                    singleItem : true,
                                                    slideSpeed : 300,
                                                    lazyLoad : true,
                                                    autoPlay : false,
                                                    navigation: true,
                                                    pagination:false,
                                                    responsiveRefreshRate : 200,
                                                  });
                                              
                                                });
                                            </script> 
                                        <div class="grid__item block_content grid--table grid--full">   
      
                                            <div class="grid__item content_products"  style="padding-left: 3.5%;width: 96%;" >             
                                                <div id="sync05" class="grid grid--uniform grid--view-items owl-carousel owl-theme">   
                                                         
                                                    <div class="grid__item item">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/product10_320x320.jpg" alt="Google Pixel">
                                                                    </a>
                                                                    <div class="product-label">
                                                                        <!-- <div class="label-element new-label">
                                                                            <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                        </div>-->
                                                                        <div class="label-element trend-label">
                                                                            <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                        </div> 
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="wishlist">
                                                                            <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="quickview">
                                                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                    <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                        <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                            <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-flex;width:100%;">
                                                                <div class="one-half">
                                                                  <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Google Pixel</a>
                                                                </div>
                                                                <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                        <!-- <span class="badge">5</span> -->
                                                                        <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                        </span>
                                                                    </div>
                                                                <div class="grid-view-item__meta">                                                                                                                              
                                                                    <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                    <span class="product-price__price product-price__sale">
                                                                    <span class="money">₹ 899 </span>
                                                                    <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                    </span>
                                                                </div>
                                                                </div>
                                                                <div class="one-half">
                                                                    <div class="grid-view-item__title">
                                                                        <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                         
                                                        </div>
                                                    </div>
                                                    <div class="grid__item item">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" href="">
                                                                        <img class="grid-view-item__image" src="assets/images/product13_320x320.jpg" alt="HTC 10">
                                                                    </a>
                                                                    <div class="product-label">
                                                                            <div class="label-element trend-label">
                                                                                    <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                </div> 
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="wishlist">
                                                                            <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="quickview">
                                                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                    <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                        <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                            <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-flex;width:100%;">
                                                                <div class="one-half">
                                                                  <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Google Pixel</a>
                                                                </div>
                                                                <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                        <!-- <span class="badge">5</span> -->
                                                                        <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                        </span>
                                                                    </div>
                                                                <div class="grid-view-item__meta">                                                                                                                              
                                                                    <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                    <span class="product-price__price product-price__sale">
                                                                    <span class="money">₹ 899 </span>
                                                                    <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                    </span>
                                                                </div>
                                                                </div>
                                                                <div class="one-half">
                                                                    <div class="grid-view-item__title">
                                                                        <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item item">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" href="">
                                                                        <img class="grid-view-item__image" src="assets/images/product4_320x320.jpg" alt="iPhone 7">
                                                                    </a>
                                                                    <div class="product-label">
                                                                            <div class="label-element trend-label">
                                                                                    <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                </div> 
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="wishlist">
                                                                            <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="quickview">
                                                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                    <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                        <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                            <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-flex;width:100%;">
                                                                <div class="one-half">
                                                                  <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Google Pixel</a>
                                                                </div>
                                                                <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                        <!-- <span class="badge">5</span> -->
                                                                        <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                        </span>
                                                                    </div>
                                                                <div class="grid-view-item__meta">                                                                                                                              
                                                                    <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                    <span class="product-price__price product-price__sale">
                                                                    <span class="money">₹ 899 </span>
                                                                    <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                    </span>
                                                                </div>
                                                                </div>
                                                                <div class="one-half">
                                                                    <div class="grid-view-item__title">
                                                                        <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item item">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/product14_320x320.jpg" alt="LG G5">
                                                                    </a>
                                                                    <div class="product-label">
                                                                            <div class="label-element trend-label">
                                                                                    <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                </div> 
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="wishlist">
                                                                            <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="quickview">
                                                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                    <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                        <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                            <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-flex;width:100%;">
                                                                <div class="one-half">
                                                                  <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Google Pixel</a>
                                                                </div>
                                                                <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                        <!-- <span class="badge">5</span> -->
                                                                        <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                        </span>
                                                                    </div>
                                                                <div class="grid-view-item__meta">                                                                                                                              
                                                                    <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                    <span class="product-price__price product-price__sale">
                                                                    <span class="money">₹ 899 </span>
                                                                    <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                    </span>
                                                                </div>
                                                                </div>
                                                                <div class="one-half">
                                                                    <div class="grid-view-item__title">
                                                                        <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="">
                                                                        <img class="grid-view-item__image" src="assets/images/product14_320x320.jpg" alt="LG G5">
                                                                        </a>
                                                                        <div class="product-label">
                                                                                <div class="label-element trend-label">
                                                                                        <span style="color:#ffffff; background-color: #00d5d5;">50% OFF</span>
                                                                                    </div> 
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="add-to-cart-form">
                                                                                <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                        
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="" title="Add to cart"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>                                                                                        
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div style="display: inline-flex;width:100%;">
                                                                    <div class="one-half">
                                                                      <div class="h4 grid-view-item__title">
                                                                        <a href="product.html">Google Pixel</a>
                                                                    </div>
                                                                    <div class="rating-star" style="display:  inline-flex;width: 100%;">
                                                                            <!-- <span class="badge">5</span> -->
                                                                            <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">1 review</span>
                                                                            </span>
                                                                        </div>
                                                                    <div class="grid-view-item__meta">                                                                                                                              
                                                                        <s class="product-price__price"><span class="money" >₹ 1899 </span></s>
                                                                        <span class="product-price__price product-price__sale">
                                                                        <span class="money">₹ 899 </span>
                                                                        <!-- <span class="product-price__sale-label">On Sale</span> -->
                                                                        </span>
                                                                    </div>
                                                                    </div>
                                                                    <div class="one-half">
                                                                        <div class="grid-view-item__title">
                                                                            <input type="submit" class="btn right" value="Add to Cart" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
    
                                    </div>
                                </div>
                            </div>

                            <div class="html-section index-section product-banner-grid">
                                    <div class="wrapper"  style="padding: 0;">
                                        <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                            <div class="grid__item block_heading grid--table grid--full style_default">      
                                                <div class="area-header grid__item one-third">
                                                    <h2>
                                                        <img src="assets/images/store.png" alt="icon">
                                                        <a class="colortext" href="">Store Categories</a>
                                                    </h2>
                                                </div>    
                                                <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                                <div class="area-tags grid__item two-thirds">
                                                    <ul class="grid__link">
                                                
                                                        <li>
                                                        <a href="main_category.html"><span style=" color: #50d8af; ">View All</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                      </div>
                      <div class="grid__item block_content grid--table grid--full">   
      
                        <div class="grid__item content_products">             
                            <div class="grid grid--uniform grid--view-items">   
                                <div class="grid__item item two-thirds">
                                  <div id="sync1b" class="owl-carousel owl-theme">      
                                    <div class="grid__item item" style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow1_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow2_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow3_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow4_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow5_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item item one-third">
                                    <div class="grid-view-item">
                                        <img src="assets/images/slideshow2_785x345.png" style="width:336px;height: 280px;">
                                    </div>
                                    <div class="grid-view-item">
                                      <img src="assets/images/slideshow2_785x345.png" style="width: 320px;height:100px;">
                                  </div>
                                </div>
                                <!-- <div class="grid__item item">
                                    <div class="grid-view-item"><img style="width: 100%;height:90px;" src="http://wellthoughttech.tech/listing/images/ad/ad1.png">
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <script>
                      $(document).ready(function() {
                          
                          var sync1b = $("#sync1b");
                          
                          sync1b.owlCarousel({
                            singleItem : true,
                            slideSpeed : 300,
                            lazyLoad : true,
                            autoPlay : false,
                            navigation: true,
                            pagination:false,
                            responsiveRefreshRate : 200,
                          });
                      
                        });
                    </script> 
                                            <div class="grid__item block_content grid--table grid--full">   
                                                    <div class="navigation-bar menu-bar navigation1">  
                                                            <div class="wrapper"  style="padding: 0;">  
                                                                <div class="grid--full grid--table">
                                                                    <div class="grid__item large--one-whole ">
                                                                        <ul class="custom-menu-icons grid--full grid--table">
                                                                                <div id="sync10" class="owl-carousel owl-theme">
                                                                            <li class="grid__item icon-element icon-1 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/carpenter.png" alt="">
                                                                                    <div class="icon-name">Furniture Shops</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-2 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/plumber.png" alt="">
                                                                                    <div class="icon-name">Household Shops</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-3 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/electrician.png" alt="">
                                                                                    <div class="icon-name">Electricial Shops</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-4 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/ac.png" alt="">
                                                                                    <div class="icon-name">AC Shops</div>                  
                                                                                </a>
                                                                            </li>         
                                                                            <li class="grid__item icon-element icon-5 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/painter.png" alt="">
                                                                                    <div class="icon-name">Paint Shops</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-6 item">
                                                                                    <a href="">
                                                                                        <img class="icon-img" src="assets/images/wedding.png" alt="">
                                                                                        <div class="icon-name">Cosmetics Shop</div>                  
                                                                                    </a>
                                                                                </li>
                                                                            
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </div>  
                                                        </div>  
                                                        <script>
                                                                $(document).ready(function() {
                                                                    var sync10 = $("#sync10");
                                                                    sync10.owlCarousel({
                                                                slideSpeed : 300,
                                                                lazyLoad : true,
                                                                autoPlay : false,
                                                                loop : true,
                                                                navigation: true,
                                                                pagination:false,
                                                                navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                                                responsiveRefreshRate : 200,
                                                              });
                                                                });
                                                                </script>    
        
                                            </div>
        
                                        </div>
                                    </div>
                                </div>


                        <div class="html-section index-section product-banner-grid">
                            <div class="wrapper"  style="padding: 0;">
                                <div class="home-product-sidebar-wrapper grid--table grid--full">
                                    <div class="grid__item block_heading grid--table grid--full style_default">      
                                        <div class="area-header grid__item one-third">
                                            <h2>
                                                <img src="assets/images/store.png" alt="icon">
                                                <a class="colortext" href="">Stores Near By Bangalore</a>
                                            </h2>
                                        </div>    
                                        <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                        <div class="area-tags grid__item two-thirds">      
                                            <ul class="grid__link">          
                                                
                                                <li>
                                                    <a href=""><span style=" color: #50d8af; ">View All</span></a>
                                                </li>         
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid__item block_content grid--table grid--full">      
    
                                        <div class="grid__item content_products"  style="padding-left: 3.5%;width: 96%;" >             
                                            <div id="sync6" class="grid grid--uniform grid--view-items">          
                                                <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/big-bazaar.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span class="openstore">Open</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location=''" title="Shop Now"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="business-live.html">Big Bazzar</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">We have A to Z categories</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Check LIVE" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                       
                                                       
                                                        
                                                        
                                                    </div>
                                                </div>   
                                                <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/big-bazaar.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                            <span class="closedstore">Closed</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location=''" title="Shop Now"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="business-live.html">Big Bazzar</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">We have A to Z categories</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Check LIVE" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div>   

                                                <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/big-bazaar.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                            <span class="openstore">Open</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location=''" title="Shop Now"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="business-live.html">Big Bazzar</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">We have A to Z categories</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Check LIVE" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div>   

                                                <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/big-bazaar.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                            <span class="closedstore">Closed</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location=''" title="Shop Now"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="business-live.html">Big Bazzar</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">We have A to Z categories</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Check LIVE" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div>   

                                                <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/big-bazaar.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                            <span class="openstore">Open</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location=''" title="Shop Now"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="business-live.html">Big Bazzar</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">We have A to Z categories</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Check LIVE" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div>   

                                                <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="">
                                                                    <img class="grid-view-item__image" src="assets/images/big-bazaar.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span class="closedstore">Closed</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location=''" title="Shop Now"><i class="fa fa-shopping-cart"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="business-live.html">Big Bazzar</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">We have A to Z categories</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Check LIVE" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div>   




                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                var sync6 = $("#sync6");
                                sync6.owlCarousel({
                                    items:4,
                            slideSpeed : 300,
                            lazyLoad : true,
                            autoPlay : false,
                                    loop : true,
                            navigation: true,
                            pagination:false,
                            navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                            responsiveRefreshRate : 200,
                          });
                            });
                            </script> 
                        <div class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full" style="text-align: center;margin: 0px 100px;padding: 18px 0px;border: 1px solid #e5e5e5;border-radius: 8px;">
                                        <img style="width: 970px;height:90px;" src="http://wellthoughttech.tech/listing/images/ad/ad1.png"/>
                                    </div>
                                </div>
                        </div>
                                                        
                            <div class="html-section index-section product-banner-grid">
                                    <div class="wrapper"  style="padding: 0;">
                                        <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                            <div class="grid__item block_heading grid--table grid--full style_default">      
                                                <div class="area-header grid__item one-third">
                                                    <h2>
                                                        <img src="assets/images/pro.png" alt="icon">
                                                        <a class="colortext" href="">Professional Categories</a>
                                                    </h2>
                                                </div>    
                                                <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                                <div class="area-tags grid__item two-thirds">
                                                    <ul class="grid__link">
                                                
                                                        <li>
                                                        <a href="main_category.html"><span style=" color: #50d8af; ">View All</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                      </div>
                      <div class="grid__item block_content grid--table grid--full">   
      
                        <div class="grid__item content_products">             
                            <div class="grid grid--uniform grid--view-items">   
                                <div class="grid__item item two-thirds">
                                  <div id="sync1c" class="owl-carousel owl-theme">      
                                    <div class="grid__item item" style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow1_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow2_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow3_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow4_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    <div class="grid__item item"  style="border-radius: 8px;">
                                      <a href="product.html"  style="border-radius: 8px;"><img src="assets/images/slideshow5_785x345.png" alt=""  style="border-radius: 8px;height: 472px;width: 100%;"/></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item item one-third">
                                    <div class="grid-view-item">
                                        <img src="assets/images/slideshow2_785x345.png" style="width: 336px;height:280px;">
                                    </div>
                                    <div class="grid-view-item">
                                      <img src="assets/images/slideshow2_785x345.png" style="width: 320px;height:100px;">
                                  </div>
                                </div>
                                <!-- <div class="grid__item item">
                                    <div class="grid-view-item"><img style="width: 100%;height:90px;" src="http://wellthoughttech.tech/listing/images/ad/ad1.png">
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <script>
                      $(document).ready(function() {
                          
                          var sync1c = $("#sync1c");
                          
                          sync1c.owlCarousel({
                            singleItem : true,
                            slideSpeed : 300,
                            lazyLoad : true,
                            autoPlay : false,
                            navigation: true,
                            pagination:false,
                            responsiveRefreshRate : 200,
                          });
                      
                        });
                    </script> 
                                            <div class="grid__item block_content grid--table grid--full">   
                                                    <div class="navigation-bar menu-bar navigation1">  
                                                            <div class="wrapper"  style="padding: 0;">  
                                                                <div class="grid--full grid--table">
                                                                    <div class="grid__item large--one-whole ">
                                                                        <ul class="custom-menu-icons grid--full grid--table">
                                                                                <div id="sync8" class="owl-carousel owl-theme">
                                                                            <li class="grid__item icon-element icon-1 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/carpenter.png" alt="">
                                                                                    <div class="icon-name">Carpenter</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-2 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/plumber.png" alt="">
                                                                                    <div class="icon-name">Plumber</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-3 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/electrician.png" alt="">
                                                                                    <div class="icon-name">Electrician</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-4 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/ac.png" alt="">
                                                                                    <div class="icon-name">AC Service and Repair</div>                  
                                                                                </a>
                                                                            </li>         
                                                                            <li class="grid__item icon-element icon-5 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/painter.png" alt="">
                                                                                    <div class="icon-name">Painter</div>                  
                                                                                </a>
                                                                            </li>
                                                                            <li class="grid__item icon-element icon-6 item">
                                                                                    <a href="">
                                                                                        <img class="icon-img" src="assets/images/wedding.png" alt="">
                                                                                        <div class="icon-name">Wedding Planner</div>                  
                                                                                    </a>
                                                                                </li>
                                                                            
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </div>  
                                                        </div>  
                                                        <script>
                                                                $(document).ready(function() {
                                                                    var sync8 = $("#sync8");
                                                                    sync8.owlCarousel({
                                                                slideSpeed : 300,
                                                                lazyLoad : true,
                                                                autoPlay : false,
                                                                loop : true,
                                                                navigation: true,
                                                                pagination:false,
                                                                navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                                                responsiveRefreshRate : 200,
                                                              });
                                                                });
                                                                </script>    
        
                                            </div>
        
                                        </div>
                                    </div>
                                </div>



<div class="html-section index-section product-banner-grid">
    <div class="wrapper" style="padding: 0;">
        <div class="home-product-sidebar-wrapper grid--table grid--full">
            <div class="grid__item block_heading grid--table grid--full style_default">      
                <div class="area-header grid__item one-third">
                    <h2>
                        <img src="assets/images/doctor.png" alt="icon">
                        <a class="colortext" href="">Professionals Near By Bangalore</a>
                    </h2>
                </div>    
                <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                <div class="area-tags grid__item two-thirds">      
                    <ul class="grid__link">          
                        
                        <li>
                            <a href=""><span style=" color: #50d8af; ">View All</span></a>
                        </li>         
                    </ul>
                </div>
            </div>
            <div class="grid__item block_content grid--table grid--full">      

                <div class="grid__item content_products" style="padding-left: 3.5%;width: 96%;" >             
                    <div id="sync7" class="grid grid--uniform grid--view-items">  
                            <div class="grid__item item">
                                    <div class="grid-view-item">
                                        <div class="grid-normal-display">
                                            <div class="grid__image product-image">
                                                <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                    <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <div class="label-element new-label">
                                                        <span class="openstore">Active</span>
                                                    </div>
                                                </div>
                                                <ul class="action-button">
                                                    <li class="add-to-cart-form">
                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                            <div class="effect-ajax-cart">
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                        <div style="display: inline-flex;width:100%;">
                                            <div class="one-half">
                                                <div class="h4 grid-view-item__title">
                                                    <a href="professional-live.html">Jena Karlis</a>
                                                </div>
                                                <div class="grid-view-item__meta">                                                      
                                                    <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="one-half">
                                                <div class="grid-view-item__title">
                                                    <input type="submit" class="btn right" value="Book" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                </div>
                                            </div>
                                          </div>
                                      
                                        
                                       
                                        
                                    </div>
                                </div>  
                                <div class="grid__item item">
                                        <div class="grid-view-item">
                                            <div class="grid-normal-display">
                                                <div class="grid__image product-image">
                                                    <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                        <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                    </a>
                                                    <div class="product-label">
                                                        <div class="label-element new-label">
                                                                <span class="closedstore">In-active</span>
                                                        </div>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li class="add-to-cart-form">
                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">
                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                </div>
                                                            </form>
                                                        </li>
                                                        <li class="wishlist">
                                                            <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                        </li>
                                                    
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="display: inline-flex;width:100%;">
                                                <div class="one-half">
                                                    <div class="h4 grid-view-item__title">
                                                        <a href="professional-live.html">Jena Karlis</a>
                                                    </div>
                                                    <div class="grid-view-item__meta">                                                      
                                                        <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                    </div>
                                                    <div class="rating-star">
                                                        <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                            <span class="spr-starrating spr-badge-starrating">
                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                            </span>
                                                            <span class="spr-badge-caption">1 review</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="one-half">
                                                    <div class="grid-view-item__title">
                                                        <input type="submit" class="btn right" value="Book" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                    </div>
                                                </div>
                                              </div>
                                            
                                        </div>
                                    </div> 
                                    <div class="grid__item item">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                            <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element new-label">
                                                                    <span class="openstore">Active</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="add-to-cart-form">
                                                                <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div style="display: inline-flex;width:100%;">
                                                    <div class="one-half">
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="professional-live.html">Jena Karlis</a>
                                                        </div>
                                                        <div class="grid-view-item__meta">                                                      
                                                            <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="one-half">
                                                        <div class="grid-view-item__title">
                                                            <input type="submit" class="btn right" value="Book" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                        </div>
                                                    </div>
                                                  </div>
                                                
                                            </div>
                                        </div> 
                                        <div class="grid__item item">
                                                <div class="grid-view-item">
                                                    <div class="grid-normal-display">
                                                        <div class="grid__image product-image">
                                                            <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                                <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                            </a>
                                                            <div class="product-label">
                                                                <div class="label-element new-label">
                                                                        <span class="closedstore">In-active</span>
                                                                </div>
                                                            </div>
                                                            <ul class="action-button">
                                                                <li class="add-to-cart-form">
                                                                    <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                        <div class="effect-ajax-cart">
                                                                            <input type="hidden" name="quantity" value="1">
                                                                            <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                        </div>
                                                                    </form>
                                                                </li>
                                                                <li class="wishlist">
                                                                    <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                </li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div style="display: inline-flex;width:100%;">
                                                        <div class="one-half">
                                                            <div class="h4 grid-view-item__title">
                                                                <a href="professional-live.html">Jena Karlis</a>
                                                            </div>
                                                            <div class="grid-view-item__meta">                                                      
                                                                <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                            </div>
                                                            <div class="rating-star">
                                                                <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                    <span class="spr-starrating spr-badge-starrating">
                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                    </span>
                                                                    <span class="spr-badge-caption">1 review</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="one-half">
                                                            <div class="grid-view-item__title">
                                                                <input type="submit" class="btn right" value="Book" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                            </div>
                                                        </div>
                                                      </div>
                                                    
                                                </div>
                                            </div> 
                                            <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                                    <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                            <span class="openstore">Active</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="professional-live.html">Jena Karlis</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Book" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div> 
                                                <div class="grid__item item">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                                        <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                                    </a>
                                                                    <div class="product-label">
                                                                        <div class="label-element new-label">
                                                                                <span class="closedstore">In-active</span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="wishlist">
                                                                            <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                        </li>
                                                                    
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-flex;width:100%;">
                                                                <div class="one-half">
                                                                    <div class="h4 grid-view-item__title">
                                                                        <a href="professional-live.html">Jena Karlis</a>
                                                                    </div>
                                                                    <div class="grid-view-item__meta">                                                      
                                                                        <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                                    </div>
                                                                    <div class="rating-star">
                                                                        <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                            <span class="spr-starrating spr-badge-starrating">
                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            </span>
                                                                            <span class="spr-badge-caption">1 review</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="one-half">
                                                                    <div class="grid-view-item__title">
                                                                        <input type="submit" class="btn right" value="Book" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            
                                                        </div>
                                                    </div>  
                                


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var sync7 = $("#sync7");
        sync7.owlCarousel({
            items:4,
    slideSpeed : 300,
    lazyLoad : true,
    autoPlay : false,
    loop : true,
    navigation: true,
    pagination:false,
    navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
    responsiveRefreshRate : 200,
  });
    });
    </script> 

    
<div class="html-section index-section product-banner-grid">
    <div class="wrapper" style="padding: 0;">
        <div class="home-product-sidebar-wrapper grid--table grid--full">
            <div class="grid__item block_heading grid--table grid--full style_default">      
                <div class="area-header grid__item one-third">
                    <h2>
                        <img src="assets/images/doctor.png" alt="icon">
                        <a class="colortext" href="">Doctors Near By Bangalore</a>
                    </h2>
                </div>    
                <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                <div class="area-tags grid__item two-thirds">      
                    <ul class="grid__link">          
                        
                        <li>
                            <a href=""><span style=" color: #50d8af; ">View All</span></a>
                        </li>         
                    </ul>
                </div>
            </div>
            <div class="grid__item block_content grid--table grid--full">      

                <div class="grid__item content_products"  style="padding-left: 3.5%;width: 96%;" >             
                    <div id="sync50" class="grid grid--uniform grid--view-items">  
                        
                            <div class="grid__item item">
                                    <div class="grid-view-item">
                                        <div class="grid-normal-display">
                                            <div class="grid__image product-image">
                                                <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                    <img class="grid-view-item__image" style="border-radius: 50%;"  src="assets/images/doctor-img.png" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <div class="label-element new-label">
                                                        <span class="openstore">Active</span>
                                                    </div>
                                                </div>
                                                <ul class="action-button">
                                                    <li class="add-to-cart-form">
                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                            <div class="effect-ajax-cart">
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                        <div style="display: inline-flex;width:100%;">
                                            <div class="one-half">
                                                <div class="h4 grid-view-item__title">
                                                    <a href="professional-live.html">Jena Karlis</a>
                                                </div>
                                                <div class="grid-view-item__meta">                                                      
                                                    <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="one-half">
                                                <div class="grid-view-item__title">
                                                    <input type="submit" class="btn right" value="Take Appointment" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                </div>
                                            </div>
                                          </div>
                                        
                                    </div>
                                </div>  
                                <div class="grid__item item">
                                        <div class="grid-view-item">
                                            <div class="grid-normal-display">
                                                <div class="grid__image product-image">
                                                    <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                        <img class="grid-view-item__image" style="border-radius: 50%;"  src="assets/images/doctor-img.png" alt="">
                                                    </a>
                                                    <div class="product-label">
                                                        <div class="label-element new-label">
                                                                <span class="closedstore">In-active</span>
                                                        </div>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li class="add-to-cart-form">
                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">
                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                </div>
                                                            </form>
                                                        </li>
                                                        <li class="wishlist">
                                                            <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                        </li>
                                                    
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="display: inline-flex;width:100%;">
                                                <div class="one-half">
                                                    <div class="h4 grid-view-item__title">
                                                        <a href="professional-live.html">Jena Karlis</a>
                                                    </div>
                                                    <div class="grid-view-item__meta">                                                      
                                                        <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                    </div>
                                                    <div class="rating-star">
                                                        <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                            <span class="spr-starrating spr-badge-starrating">
                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                            </span>
                                                            <span class="spr-badge-caption">1 review</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="one-half">
                                                    <div class="grid-view-item__title">
                                                        <input type="submit" class="btn right" value="Take Appointment" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                    </div>
                                                </div>
                                              </div>
                                            
                                        </div>
                                    </div> 
                                    <div class="grid__item item">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                            <img class="grid-view-item__image" style="border-radius: 50%;"  src="assets/images/doctor-img.png" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element new-label">
                                                                    <span class="openstore">Active</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="add-to-cart-form">
                                                                <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div style="display: inline-flex;width:100%;">
                                                    <div class="one-half">
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="professional-live.html">Jena Karlis</a>
                                                        </div>
                                                        <div class="grid-view-item__meta">                                                      
                                                            <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                    <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="one-half">
                                                        <div class="grid-view-item__title">
                                                            <input type="submit" class="btn right" value="Take Appointment" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                        </div>
                                                    </div>
                                                  </div>
                                                
                                            </div>
                                        </div> 
                                        <div class="grid__item item">
                                                <div class="grid-view-item">
                                                    <div class="grid-normal-display">
                                                        <div class="grid__image product-image">
                                                            <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                                <img class="grid-view-item__image" style="border-radius: 50%;"  src="assets/images/doctor-img.png" alt="">
                                                            </a>
                                                            <div class="product-label">
                                                                <div class="label-element new-label">
                                                                        <span class="closedstore">In-active</span>
                                                                </div>
                                                            </div>
                                                            <ul class="action-button">
                                                                <li class="add-to-cart-form">
                                                                    <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                        <div class="effect-ajax-cart">
                                                                            <input type="hidden" name="quantity" value="1">
                                                                            <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                        </div>
                                                                    </form>
                                                                </li>
                                                                <li class="wishlist">
                                                                    <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                </li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div style="display: inline-flex;width:100%;">
                                                        <div class="one-half">
                                                            <div class="h4 grid-view-item__title">
                                                                <a href="professional-live.html">Jena Karlis</a>
                                                            </div>
                                                            <div class="grid-view-item__meta">                                                      
                                                                <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                            </div>
                                                            <div class="rating-star">
                                                                <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                    <span class="spr-starrating spr-badge-starrating">
                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                        <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                    </span>
                                                                    <span class="spr-badge-caption">1 review</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="one-half">
                                                            <div class="grid-view-item__title">
                                                                <input type="submit" class="btn right" value="Take Appointment" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                            </div>
                                                        </div>
                                                      </div>
                                                    
                                                </div>
                                            </div> 
                                            <div class="grid__item item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                                    <img class="grid-view-item__image" style="border-radius: 50%;"  src="assets/images/doctor-img.png" alt="">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                            <span class="openstore">Active</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                    </li>
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div style="display: inline-flex;width:100%;">
                                                            <div class="one-half">
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="professional-live.html">Jena Karlis</a>
                                                                </div>
                                                                <div class="grid-view-item__meta">                                                      
                                                                    <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="one-half">
                                                                <div class="grid-view-item__title">
                                                                    <input type="submit" class="btn right" value="Take Appointment" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        
                                                    </div>
                                                </div> 
                                                <div class="grid__item item">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" style="border-radius: 50%;background-color: #cef4e9;" href="">
                                                                        <img class="grid-view-item__image" style="border-radius: 50%;" src="assets/images/doctor-img.png" alt="">
                                                                    </a>
                                                                    <div class="product-label">
                                                                        <div class="label-element new-label">
                                                                                <span class="closedstore">In-active</span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">                                                                    
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="" title="Book Appointment"><i class="fa fa-calendar"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="wishlist">
                                                                            <a class="wish-list btn" href=""><i class="fa fa-phone" title="Call"></i></a>
                                                                        </li>
                                                                    
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-flex;width:100%;">
                                                                <div class="one-half">
                                                                    <div class="h4 grid-view-item__title">
                                                                        <a href="professional-live.html">Jena Karlis</a>
                                                                    </div>
                                                                    <div class="grid-view-item__meta">                                                      
                                                                        <span class="product__price" style="color: #888;font-size: 13px;">Specialist for Diabet</span>
                                                                    </div>
                                                                    <div class="rating-star">
                                                                        <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                            <span class="spr-starrating spr-badge-starrating">
                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                                                <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                            </span>
                                                                            <span class="spr-badge-caption">1 review</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="one-half">
                                                                    <div class="grid-view-item__title">
                                                                        <input type="submit" class="btn right" value="Take Appointment" style="width: 100%;height: auto;font: 400 9px/1.15 Lato;margin: 18px 0px;">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            
                                                        </div>
                                                    </div>  
                                


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var sync50 = $("#sync50");
        sync50.owlCarousel({
            items:4,
    slideSpeed : 300,
    lazyLoad : true,
    autoPlay : false,
    loop : true,
    navigation: true,
    pagination:false,
    navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
    responsiveRefreshRate : 200,
  });
    });
    </script> 
                        
                        <div  class="html-section index-section product-banner-grid">
                            <div class="wrapper"  style="padding: 0;">
                                <div class="home-product-sidebar-wrapper grid--table grid--full">
                                    <div class="grid__item block_heading grid--table grid--full style_default">      
                                        <div class="area-header grid__item one-third">
                                            <h2>
                                                <img src="assets/images/service.png" alt="icon">
                                                <a class="colortext" href="">Services</a>
                                            </h2>
                                        </div>    
                                        <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                        <div class="area-tags grid__item two-thirds">      
                                            <ul class="grid__link">
                                        
                                                <li>
                                                    <a href=""><span style=" color: #50d8af; ">View All</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="grid__item block_content grid--table grid--full">      
                                        <div class="grid__item content_banner position-left">
                                            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
                                        </div>      
                                        <div class="grid__item content_products">              
                                            <div class="grid grid--uniform grid--view-items">

                                                <div class="grid__item small--one-half medium-up--one-quarter one-third" style=" ">
                                                    <div class="grid-view-item hovero">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                                                                <a style="position: relative; top: 29px; right: 0px;" class="grid-view-item__link one-quarter" href="">
                                                                    <i class="fa fa-briefcase fa-4x foohover"></i>
                                                                </a>
                                                                <div style="width: 100%;    padding: 0;">
                                                                    <div class="h2 grid-view-item__title">
                                                                        <a  class="colortext" href="" style="font-weight: bold;">Business Man</a>
                                                                    </div>
                                                                    <div class="grid-view-item__meta">
                                                                        <span class="product-price__price" style="color: #888;font-size: 13px;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo</span>
                                                                    </div>
                                                                </div>
                                                                <span style="position: absolute; bottom: 29px; right: 0px;"><i class="fa fa-question fa-4x foohover" style=""></i></span> 
                                                            </div>
                                                            <div style="text-align: center;">
                                                                <input type="submit" class="btn" value="Create LIVE Store" style="text-transform: none;border-radius: 8px;padding: 7px 11px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid__item small--one-half medium-up--one-quarter one-third" style=" ">
                                                    <div class="grid-view-item  hovero">
                                                            <div class="grid-normal-display">
                                                                    <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                                                                        <a style="position: relative; top: 29px; right: 0px;" class="grid-view-item__link one-quarter" href="">
                                                                            <i class="fa fa-user-secret fa-4x foohover"></i>
                                                                        </a>
                                                                        <div style="width: 100%;    padding: 0;">
                                                                            <div class="h2 grid-view-item__title">
                                                                                <a  class="colortext" href="" style="font-weight: bold;">Professionals</a>
                                                                            </div>
                                                                            <div class="grid-view-item__meta">
                                                                                <span class="product-price__price" style="color: #888;font-size: 13px;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo</span>
                                                                            </div>
                                                                        </div>
                                                                        <span style="position: absolute; bottom: 29px; right: 0px;"><i class="fa fa-question fa-4x foohover" style=""></i></span> 
                                                                    </div>
                                                                    <div style="text-align: center;">
                                                                        <input type="submit" class="btn" value="Create Professional Page" style="text-transform: none;border-radius: 8px;padding: 7px 11px;"></div>
                                                                </div>

                                                    </div>
                                                </div>
                                                <div class="grid__item small--one-half medium-up--one-quarter one-third" style=" ">
                                                    <div class="grid-view-item hovero">
                                                            <div class="grid-normal-display">
                                                                    <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                                                                        <a style="position: relative; top: 29px; right: 0px;" class="grid-view-item__link one-quarter" href="">
                                                                            <i class="fa fa-user fa-4x foohover"></i>
                                                                        </a>
                                                                        <div style="width: 100%;    padding: 0;">
                                                                            <div class="h2 grid-view-item__title">
                                                                                <a class="colortext" href="" style="font-weight: bold;">User's</a>
                                                                            </div>
                                                                            <div class="grid-view-item__meta">
                                                                                <span class="product-price__price" style="color: #888;font-size: 13px;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo</span>
                                                                            </div>
                                                                        </div>
                                                                        <span style="position: absolute; bottom: 29px; right: 0px;"><i class="fa fa-question fa-4x foohover" style=""></i></span> 
                                                                    </div>
                                                                    <div style="text-align: center;">
                                                                        <input type="submit" class="btn" value="Be A User" style="text-transform: none;border-radius: 8px;padding: 7px 11px;border-radius: 8px;"></div>
                                                                </div>
                           
                                                    </div>
                                                </div>
                                                <!-- <div class="grid__item small--one-half medium-up--one-quarter one-half" style="    padding-left: 10px;">
                                                    <img src="http://wellthoughttech.tech/listing/images/ad/ad1.png" style="width: 100%;
                                                    height: 111px;" alt="Acer Aspire E5">
                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                        

                        <div class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                        <div class="grid__item block_heading grid--table grid--full style_default">      
                                            <div class="area-header grid__item one-third">
                                                <h2>
                                                    <img src="assets/images/blog.png" alt="icon">
                                                    <a class="colortext" href="blog-main-category.html">Blog Categories</a>
                                                </h2>
                                            </div>    
                                            <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                            <div class="area-tags grid__item two-thirds">
                                                <ul class="grid__link">
                                            
                                                    <li>
                                                    <a href="blog-main-category.html"><span style=" color: #50d8af; ">View All</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="grid__item block_content grid--table grid--full">   
                                                <div class="navigation-bar menu-bar navigation1">  
                                                        <div class="wrapper"  style="padding: 0;">  
                                                            <div class="grid--full grid--table">
                                                                <div class="grid__item large--one-whole ">
                                                                    <ul class="custom-menu-icons grid--full grid--table">
                                                                            <div id="sync9" class="owl-carousel owl-theme">
                                                                        <li class="grid__item icon-element icon-1 item">
                                                                            <a href="">
                                                                                <img class="icon-img" src="assets/images/movie.png" alt="">
                                                                                <div class="icon-name">Movies</div>                  
                                                                            </a>
                                                                        </li>
                                                                        <li class="grid__item icon-element icon-2 item">
                                                                            <a href="">
                                                                                <img class="icon-img" src="assets/images/music.png" alt="">
                                                                                <div class="icon-name">Music</div>                  
                                                                            </a>
                                                                        </li>
                                                                        <li class="grid__item icon-element icon-3 item">
                                                                            <a href="">
                                                                                <img class="icon-img" src="assets/images/dance.png" alt="">
                                                                                <div class="icon-name">Dance</div>                  
                                                                            </a>
                                                                        </li>
                                                                        <li class="grid__item icon-element icon-4 item">
                                                                            <a href="">
                                                                                <img class="icon-img" src="assets/images/stage.png" alt="">
                                                                                <div class="icon-name">Stage Show</div>                  
                                                                            </a>
                                                                        </li>  
                                                                        <li class="grid__item icon-element icon-5 item">
                                                                                <a href="">
                                                                                    <img class="icon-img" src="assets/images/sports.png" alt="">
                                                                                    <div class="icon-name">Sports</div>                  
                                                                                </a>
                                                                            </li> 
                                                                            <li class="grid__item icon-element icon-6 item">
                                                                                    <a href="">
                                                                                        <img class="icon-img" src="assets/images/beauty.png" alt="">
                                                                                        <div class="icon-name">Beauty & Fitness</div>                  
                                                                                    </a>
                                                                                </li>        
                                                                        
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>  
                                                        </div>  
                                                    </div>  
                                                    <script>
                                                            $(document).ready(function() {
                                                                var sync9 = $("#sync9");
                                                                sync9.owlCarousel({
                                                            slideSpeed : 300,
                                                            lazyLoad : true,
                                                            autoPlay : false,
                                                            loop : true,
                                                            navigation: true,
                                                            pagination:false,
                                                            navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                                            responsiveRefreshRate : 200,
                                                          });
                                                            });
                                                            </script>    
    
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <div  class="html-section index-section product-banner-grid">
                            <div class="wrapper"  style="padding: 0;">
                                <div class="home-product-sidebar-wrapper grid--table grid--full">
                                    <div class="grid__item block_heading grid--table grid--full style_default">      
                                        <div class="area-header grid__item one-third">
                                            <h2>
                                                <img src="assets/images/service.png" alt="icon">
                                                <a class="colortext" href="">Latest Blogs</a>
                                            </h2>
                                        </div>    
                                        <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                    
                                    </div>
                                    <div class="wrapper article-grid"  style="padding: 0;">
                                        <div class="grid--rev blog_list">


                                    <?php 
                                    
                                $blog_col = mysqli_query($con,"SELECT * FROM blog WHERE admin_approval='yes' ORDER BY blog_id DESC LIMIT 3"); 
                                while($row=mysqli_fetch_assoc($blog_col)){ 

                                    ?>
                                            <article class="list-article grid__item large--one-third" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;" onclick="window.location='blog-article.php?blog_id=<?php echo $row['blog_id']; ?>'">
                                            <div class="article__image">
                                                <a class="article__featured-image" href='blog-article.php?blog_id=<?php echo $row['blog_id']; ?>'>
                                                    <?php if(isset($_SESSION['user_id']))
													   {
													$_SESSION["blogid"]=$row['blog_id'];
                                                    $_SESSION['CREATED']= time();
														} else{
																
													$_SESSION['CREATED']= time();

													$_SESSION['server_detail']=$_SERVER['REMOTE_ADDR'];
														      }	?>
                                                <img src="Blogimage/<?php echo $row['image']; ?>"
                                                style="min-height: 250px;max-height: 250px;" >
                                                </a>
                                            </div>
                                            <h2 class="h3"><a href="">
                                            <?php echo $row['title']; ?></a></h2>
                                          
                                             <div class="article__bottom">
                                                <div class="rte rte--indented-images">
                                                    <?php echo "Categoty : ".$row['category']; ?>
                                                </div>
                                             
                                       
                                            </div> 
                                            <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                <div class="one-half">
                                                  <div class="article__date">
                                                    <span class="author">
                                                        <?php 
                                                
                                                    echo "By ".$row['user'];

                                                        ?>
                                                    </span>
                                                    <time  class="date">
                                                    <?php 
                                                    $originalDate = $row['create_on'];
                                                    $newDate = date("M d, Y", strtotime($originalDate));
                                                    echo $newDate;
                                                    ?>
                                                    </time>
                                                  </div>
                                                </div>                    
                                                <div class="one-half" style="text-align: right;">
                                                  <p>
                                                    <a href="blog-article.php?blog_id=<?php echo $row['blog_id']; ?>" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                  </p>
                                                </div>                            
                                                </div>
                                            </article>  
                                        <?php }   ?>                                    
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>

                        <div  class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full">
                        
                                        <div class="grid__item block_content grid--table grid--full">      
                                           
                                            <div class="grid__item content_products">              
                                                <div class="grid grid--uniform grid--view-items">
    
                                                    <div class="grid__item small--one-half medium-up--one-quarter one-third">
                                                        <div class="grid-view-item hovero">
                                                            <div class="grid-normal-display">
                                                                    <div class="grid__image product-image" style="width: 100%;margin-bottom: 0;">
                                                                        <a class="grid-view-item__link" href="" style="text-align:  center;">
                                                                                <i class="fa fa-user fa-5x foohover"></i>                                                                       </a>
                                                                        <div style="width: 100%;margin-top: 4%;">
                                                                            
                                                                            <div class="grid-view-item__meta" style="text-align: center;">
                                                                                <h1 id="number1" class="product-price__price number" style="color: #888;    font-size: 50px;margin-bottom: 0;">0</h1>
                                                                            </div>
                                                                        </div>
                                                                        <div class="h2 grid-view-item__title" style="text-align:  center;">
                                                                                <a href="" style="font-weight: bold;font-size:25px;">User</a>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item small--one-half medium-up--one-quarter one-third">
                                                        <div class="grid-view-item  hovero">
                                                            <div class="grid-normal-display">
                                                                    <div class="grid__image product-image" style="width: 100%;margin-bottom: 0;">
                                                                            <a class="grid-view-item__link" href="" style="text-align:  center;">
                                                                                    <i class="fa fa-briefcase fa-5x foohover"></i>
                                                                            </a>
                                                                            <div style="width: 100%;margin-top: 4%;">
                                                                                
                                                                                <div class="grid-view-item__meta" style="text-align: center;">
                                                                                    <h1 id="number2" class="product-price__price number" style="color: #888;    font-size: 50px;margin-bottom: 0;">0</h1>
                                                                                </div>
                                                                            </div>
                                                                            <div class="h2 grid-view-item__title" style="text-align:  center;">
                                                                                    <a href="" style="font-weight: bold;font-size:25px;">Business</a>
                                                                                </div>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item small--one-half medium-up--one-quarter one-third">
                                                        <div class="grid-view-item hovero">
                                                            <div class="grid-normal-display">
                                                                    <div class="grid__image product-image" style="width: 100%;margin-bottom: 0;">
                                                                            <a class="grid-view-item__link" href="" style="text-align:  center;">
                                                                                    <i class="fa fa-user-secret fa-5x foohover"></i>
                                                                            </a>
                                                                            <div style="width: 100%;margin-top: 4%;">
                                                                                
                                                                                <div class="grid-view-item__meta" style="text-align: center;">
                                                                                    <h1 id="number3" class="product-price__price number" style="color: #888;    font-size: 50px;margin-bottom: 0;">0</h1>
                                                                                </div>
                                                                            </div>
                                                                            <div class="h2 grid-view-item__title" style="text-align:  center;">
                                                                                    <a href="" style="font-weight: bold;font-size:25px;">Professionals</a>
                                                                                </div>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                            <div class="html-section index-section product-banner-grid">
                                    <div class="wrapper" style="padding: 0;">
                                        <div class="home-product-sidebar-wrapper grid--table grid--full">
                            
                                            <div class="grid__item block_content grid--table grid--full">      
                                               
                                                <div class="grid__item content_products">              
                                                    <div class="grid grid--uniform grid--view-items">
                                                        <div class="grid__item small--one-half medium-up--one-quarter one-third "></div>
                                                        <div class="grid__item small--one-half medium-up--one-quarter one-third ">
                                                            <button type="submit" class="btn right js-login-modal" data-mfp-src="#liveModal" value="Login" style="width: 100%;margin-bottom: 6%;border-radius: 8px;">Be A User</button> 
                                                        </div>
                                                        <div class="grid__item small--one-half medium-up--one-quarter one-third "></div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                                </div>
                    
                    </div>
                </div>       
            </main>

            <div id="html-section-footer" class="html-section">
                <?php include('footer.php'); ?>
            </div>
        </div>

        <script>    
            var tada_newsletter=false;
            tada_newsletter = false;
        </script>
  
        <script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easytabs.min.js" type="text/javascript"></script>    
        <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>    
        <script src="assets/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="assets/js/tada.js" type="text/javascript"></script>
        <div id="scroll-to-top" title="Scroll to Top" class="off">
            <i class="fa fa-caret-up"></i>
        </div>
        <script src="assets/js/jquery.cookies.min.js" type="text/javascript"></script>
        <div id="newslettermodal" class="hide">
            <form action="" method="post" name="mc-embedded-subscribe-form" target="_blank">
                <div class="newslettermodal-content">
                    <div class="top-area">
                        <span class="head-text1">Subscribe to our Newsletter &amp; receive a coupon for</span>
                        <span class="head-text2">10% off</span>
                    </div>
                    <div class="bottom-explain">
                        We will send you a discount code after you confirm your email address.
                    </div>
                    <div class="bottom-area">
                        <div class="group_input">
                            <input class="form-control" type="email" name="EMAIL" placeholder="Your Email address">
                            <button class="btn" type="submit">Get 10% off</button>
                        </div>
                    </div>
                    <div class="newsletter-social">
                        <div class="inline-list social-icons">
                            <a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
                            <a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
                            <a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
                            <a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
                            <a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
                            <a href="#" title="Instagram" class="icon-social instagram" data-toggle="tooltip" data-placement="top"><i class="fa fa-instagram"></i></a>
                            <a href="#" title="translation missing: en.layout.footer.news" class="icon-social atom" data-toggle="tooltip" data-placement="top"><i class="fa fa-share-alt"></i></a>
                            <a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
                            <a href="#" title="Tumblr" class="icon-social tumblr" data-toggle="tooltip" data-placement="top"><i class="fa fa-tumblr"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
  
        <div id="quick-shop-modal" class="modal quick-shop mfp-hide">
            <div class="modal-dialog fadeIn">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="quick-shop-modal-bg">
                        </div>
                        <div class="grid__item one-half qs-product-image">
                            <div id="quick-shop-image" class="product-image-wrapper">
                                <div id="featuted-image" class="main-image featured">
                                    <img class="img-zoom img-responsive image-fly" src="assets/images/product1_320x320.jpg" alt="">
                                </div>
                                <div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
                                    <div class="qs-vertical-slider product-single__thumbnails">
                                            <a class="image-thumb active thumb__element"><img src="assets/images/product1_320x320.jpg" alt="" /></a>
                                            <a class="image-thumb thumb__element"><img src="assets/images/product2_320x320.jpg" alt="" /></a>
                                            <a class="image-thumb thumb__element"><img src="assets/images/product3_320x320.jpg" alt="" /></a>
                                            <a class="image-thumb thumb__element"><img src="assets/images/product4_320x320.jpg" alt="" /></a>
                                            <a class="image-thumb thumb__element"><img src="assets/images/product5_320x320.jpg" alt="" /></a>                                       
                                    </div>
                                    <script>
                                        $('.product-single__thumbnails').owlCarousel({
                                          navigation : true,
                                          pagination: false,
                                          autoPlay:7000,
                                          items: 4,
                                          slideSpeed : 200,
                                          paginationSpeed : 1000,
                                          rewindSpeed : 1000,
                                          itemsDesktop : [1199,4],
                                          itemsDesktopSmall : [979,3],
                                          itemsTablet: [768,3],
                                          itemsTabletSmall: [540,2],
                                          itemsMobile : [360,2],
                                        });
                                    </script>
                                </div>                          
                            </div>
                        </div>
                        <div class="grid__item one-half qs-product-information">
                            <div id="quick-shop-container">
                                <h3 id="quick-shop-title"><a href="">Samsung Galaxy S7</a></h3>
                                <div class="rating-star">
                                    
                                </div>
                                <div class="description">
                                    <div id="quick-shop-description" class="text-left">
                                        <ul class="spec">
                                            <li>Technology: GSM / CDMA / HSPA / EVDO / LTE</li>
                                            <li>Dimensions: 142.4 x 69.6 x 7.9 mm</li>
                                            <li>Weight: 152 g</li>
                                            <li>Display: Super AMOLED 5.1 inches</li>
                                            <li>Resolution: 1440 x 2560</li>
                                            <li>OS: Android 6.0 (Marshmallow)</li>
                                            <li>Chipset: Exynos 8890</li>
                                            <li>CPU: Quad-core
                                            <!--...-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <form action="" method="post" class="AddToCartForm variants" enctype="multipart/form-data">
                                    <div id="quick-shop-price-container" class="detail-price">
                                        <span class="price"><span class="money">$899.00</span></span>
                                    </div>
                                    <div class="quantity-wrapper clearfix">
                                        <label class="wrapper-title">Quantity</label>
                                        <div class="wrapper"  style="padding: 0;">
                                            <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                                            <i class="fa fa-minus"></i>
                                            </span>
                                            <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
                                            <span class="qty-up" title="Increase" data-src="#qs-quantity">
                                            <i class="fa fa-plus"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="quick-shop-variants-container" class="variants-wrapper" style="display: none;">
                                        <select id="#quick-shop-variants-9059410310" name="id">
                                            <option value="33071117382">Large</option>
                                        </select>
                                    </div>
                                    <div class="others-bottom">
                                        <input id="AddToCart" class="btn btn-1 small add-to-cart AddToCart" type="submit" name="add" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="top-icon-modal" class="modal quick-shop mfp-hide">
                <div class="modal-dialog fadeIn">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="quick-shop-modal-bg">
                            </div>
                            
                            <div class="grid__item qs-product-information">
                                <div id="quick-shop-container">
                                    <h3 id="quick-shop-title" style="text-align: center;"><a href="">Recharge</a></h3>

                                    <form action="" method="post" class="AddToCartForm variants" enctype="multipart/form-data">
                                        <div class="others-bottom" style="text-align: center;">
                                            <input id="RechargeAmount" class="btn btn-1 small add-to-cart AddToCart" type="submit" name="add" value="Recharge">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript">
$.fn.jQuerySimpleCounter = function( options ) {
  var settings = $.extend({
    start:  0,
    end:    100,
    easing: 'swing',
    complete: ''
  }, options );

  var thisElement = $(this);

  $({count: settings.start}).animate({count: settings.end}, {
    duration: settings.duration,
    easing: settings.easing,
    step: function() {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete
  });
};

$('#number1').jQuerySimpleCounter({end: 583,duration: 3000});
$('#number2').jQuerySimpleCounter({end: 946,duration: 3700});
$('#number3').jQuerySimpleCounter({end: 81,duration: 3100});
</script>
    
    <script type="text/javascript">   
      jQuery(document).ready(function($) {  
        if($('.quantity-wrapper').length){
          $('.quantity-wrapper').on('click', '.qty-up', function() {
            var $this = $(this);
            var qty = $this.data('src');
            $(qty).val(parseInt($(qty).val()) + 1);
          });
          $('.quantity-wrapper').on('click', '.qty-down', function() {
            var $this = $(this);
            var qty = $this.data('src');
            if(parseInt($(qty).val()) > 1)
              $(qty).val(parseInt($(qty).val()) - 1);
          });
        }                
      });
    </script>
    
  
  <div id="searchModal" class="mfp-hide" style="max-width: 100%;margin: 0 auto;">
            <div id="loginBox" class="loginLightbox">
                <div id="lightboxlogin">
                    <form method="post" action="" id="customer_login" accept-charset="UTF-8">
                        <input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
                        <div id="bodyBox">
                            <h3>Search</h3>
                            <div style="display: inline-flex;width: 100%;">
                            <select style="height: 45px;
                            border-right: 1px solid #eee;">
                              <option value=""><i class="fa fa-map-marker"></i> Bangalore</option>
                            </select>
                            <!-- <select style="height: 40px;
                            border-right: 1px solid #eee;">
                              <option value="">Koramangala</option>
                            </select> -->
                            <input type="search" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Search here">
                            <button type="submit" class="btn btn2 btn--full" style="width: 20%;"><i class="fa fa-search" style="font-size:1.5em;"></i></button>
                        </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa fa-times-circle" aria-hidden="true"></i></button> -->
        </div>
        
  <?php include('Modal.php');?>
        
  <script src="js/common.js" type="text/javascript"></script>

  <script>
  $(document).ready(function(){
      $('#showSearch').click(function(){
        $("#searchNav").slideToggle();
      });
  });
  </script>

</body>

</html>


<script type="text/javascript">
function login_modal()
{
    alert("Please login");
}


</script>