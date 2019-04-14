<?php 
include('common.php');
include('conn.php');
$limit = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `blog_limit`"));
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

            /* #sync4 .owl-prev {
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

} */

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
    font-size: 16px;
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
.home-product-sidebar-wrapper .owl-controls .owl-buttons div.owl-prev {
    left: 0px;
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
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="PageContainer" class="is-moved-by-drawer">
            <div id="html-section-header" class="html-section topnav">
                <div data-section-id="header" data-section-type="header-section header-style-1" class="header-section header-style-1">
                    <div class="header-wrapper">
                        <header class="site-header">
                            <div class="wrapper main-header-wrapper">
                                <div class="grid--full grid--table">
                                    <div class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                        <div class="site-nav--mobile">
                                            <button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
                                                <span class="icon icon-hamburger" aria-hidden="true"></span>
                                                <span class="fallback-text">Site navigation</span>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="grid__item large--hide medium-down--two-quarter small--three-fifths" style="background-color:#fff;">
                                            <h1 style="text-align: center;">
                                                <a style="color: #4285F4;">Jlo<span style="color: #50d8af;">da</span>
                                                </a>
                                            </h1>
                                    </div>
                                    
                                    <div class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                        <div class="site-nav--mobile text-right">
                                            <a href="" class="site-nav__link cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
                                                <span class="icon-fallback-text">
                                                    <span class="icon icon-cart" aria-hidden="true"></span>
                                                    <span class="fallback-text">Cart</span>
                                                </span>
                                                <span class="cart-link__bubble"></span>
                                            </a>
                                        </div>
                                    </div> 
                                    
                                    <div class="grid__item large--show medium-down--hide smal--hide">
                                        <div class="header-logo grid__item large--one-fifth">
                                                <h1>
                                                        <a style="color: #4285F4;font-size: 36px;">Jlo<span style="color: #50d8af;">da</span>
                                                        </a>
                                                    </h1>
                                        </div>
                                        <div class="grid__item header-search large--two-fifths large--text-right medium-down--one-half small--hide">
                                                <ul class="navbar-header">
                                                    <li class="site-nav__item site-nav__expanded-item">
                                                        <a href="index.html" class="site-nav__link site-nav__link--icon">
                                                            <span class="icon-fallback-text">
                                                                <i class="fa fa-home"></i>
                                                            </span>
                                                            <span class="name">Home</span>
                                                        </a>
                                                    </li>
                                                        <li class="site-nav__item site-nav__expanded-item">
                                                            <a href="business.html" class="site-nav__link site-nav__link--icon">
                                                                <span class="icon-fallback-text">
                                                                    <i class="fa fa-archive"></i>
                                                                </span>
                                                                <span class="name">Create <b  style="font-size: 15px;    color: green;">LIVE</b> Store</span>
                                                            </a>
                                                        </li>
                                    
                                                        <li class="site-nav__item">
                                                            <a href="professional.html" class="site-nav__link site-nav__link--icon ">
                                                                <span class="icon-fallback-text">
                                                                        <i class="fa fa-sign-in"></i>
                                                                </span>
                                                                <span class="cart-link__bubble fallback-number">(<span class="number">3</span>)</span>
                                                                <span class="name">Join As Professional</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                        </div>

                                        <div class="grid__item large--two-fifths large--text-right small--hide">
                                            <ul class="navbar-header">
                                                    <li class="site-nav__item site-nav__expanded-item">
                                                            <a class="site-nav__link site-nav__link--icon" >
                                                                <span class="icon-fallback-text">
                                                                    <span class="fa fa-bell" aria-hidden="true"></span>
                                                                    <span class="fallback-text">Notification </span>
                                                                </span>
                                                                <span class="name">Notification</span>
                                                            </a>
                                                        </li>
                                        
                                 
                                                <li class="site-nav__item site-nav__expanded-item">
                                                    <a class="site-nav__link site-nav__link--icon" >
                                                        <span class="icon-fallback-text">
                                                            <span class="icon icon-customer" aria-hidden="true"></span>
                                                            <span class="fallback-text">Log In </span>
                                                        </span>
                                                        <span class="name">Account</span>
                                                    </a>
                                                </li>
                                                <li class="site-nav__item site-nav__expanded-item">
                                                        <a class="site-nav__link site-nav__link--icon js-login-modal" data-mfp-src="#searchModal">
                                                            <span class="icon-fallback-text">
                                                                <span class="icon icon-search" aria-hidden="true"></span>
                                                                <span class="fallback-text">Search </span>
                                                            </span>
                                                            <span class="name">Search</span>
                                                        </a>
                                                    </li>
                                                
                                                <li class="site-nav__item">
                                                    <a href="" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
                                                        <span class="icon-fallback-text">
                                                            <span class="icon icon-cart" aria-hidden="true"></span>
                                                            <span class="fallback-text">Cart</span>
                                                        </span>
                                                        <span class="cart-link__bubble fallback-number">(<span class="number">3</span>)</span>
                                                        <span class="name">Cart</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
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
                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                <div class="icon-name">Bollywood</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-2 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                <div class="icon-name">Sports</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-3 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                <div class="icon-name">News</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-4 item">
                                            <a class="colortext">
                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                <div class="icon-name">Technology</div>                  
                                            </a>
                                        </li>         
                                        <li class="grid__item icon-element icon-5 item">
                                            <a class="colortext" >
                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                <div class="icon-name">Education</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-6 item">
                                            <a class="colortext" >
                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                <div class="icon-name">World</div>                  
                                            </a>
                                        </li>
                                        <li class="grid__item icon-element icon-6 item">
                                                <a class="colortext" >
                                                    <img class="icon-img" src="assets/images/blog.png" alt="">
                                                    <div class="icon-name">Food</div>                  
                                                </a>
                                            </li>
                                            <li class="grid__item icon-element icon-6 item">
                                                    <a class="colortext" >
                                                        <img class="icon-img" src="assets/images/blog.png" alt="">
                                                        <div class="icon-name">Health</div>                  
                                                    </a>
                                                </li>
                                                <li class="grid__item icon-element icon-6 item">
                                                        <a class="colortext" >
                                                            <img class="icon-img" src="assets/images/blog.png" alt="">
                                                            <div class="icon-name">Medicine</div>                  
                                                        </a>
                                                    </li>
                                                    <li class="grid__item icon-element icon-6 item">
                                                            <a class="colortext" >
                                                                <img class="icon-img" src="assets/images/blog.png" alt="">
                                                                <div class="icon-name">Politics</div>                  
                                                            </a>
                                                        </li>
                                
                                        </div>
                                    </ul>
                                </div>
                            </div>  
                        </div>  
                    </div>        
                </div>

            </div>

            <div id="html-section-product-template" class="html-section" style="margin-top: 2%;">
                    <header class="section-header wrapper-breadcrumb" style="    background-color: #eafbf5;
                    border-bottom: 2px solid #eee;">
                        <div class="wrapper">
                            <h3 class="colortext">Blog Categories</h3>
                            <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                            <a href="index.html" title="Back to the frontpage">Home</a>
                            <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <span>Blog Categories</span>
                            
                            </nav>
                        </div>
                    </header>
                    
                </div> 


                  <div id="timer row" style="display: inline-flex;background: #fff;float: right;margin: 1%;">
                        <div class="col-md-6" style="display:  inline-flex;">
                          
                          
                        </div>
                        <div class="col-md-6" style="display: inline-flex;">
                          <div class="col-md-6" style="display: grid;padding: 5px;border: 1px solid #eee;color: #50D8AF;">
                            <span id="minutes" style="font-size: 30px;color: #4285F4;">59</span>
                            minutes
                          </div>
                          <div class="col-md-6" style="display: grid;padding: 5px;border: 1px solid #eee;color: #50D8AF;">
                            <span id="seconds" style="font-size: 30px;color: #4285F4;">35</span>
                            seconds
                          </div>
                        </div>
                      </div>
                    

    
            <main class="main-content" style="background-color: #50d8af1f;padding-top: 20px;margin-top: -20px;">                      
                <div class="wrapper"  style="padding: 0;    ">  
                    <div class="top-area grid--full grid--table">
                        <div class="grid__item small--one-whole">
                                <div class="html-section index-section product-banner-grid">
                                        <div class="wrapper"  style="padding: 0;">
                                            <div class="home-product-sidebar-wrapper grid--table grid--full">
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

                    <?php

    $user_id = $_SESSION['user_id'];
    $userdetail = mysqli_query($con,"SELECT *  FROM    blog");
    while($result=mysqli_fetch_array($userdetail))
             {  ?>

                        <div class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">





                                        <div class="grid__item block_heading grid--table grid--full style_default">      
                                            <div class="area-header grid__item one-third">
                                                <h2>
                                                    <img src="assets/images/blog.png" alt="icon">
                                            <a class="colortext" href="blog-article-each-one.php?bid=<?php print_r($result['blog_id'])?>">Latest Blogs from <?php print_r($result['category']);  ?></a>
                                                </h2>
                                            </div>   

                                            <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                            <div class="area-tags grid__item two-thirds">
                                                <ul class="grid__link">
                                            
                                                  
                                                </ul>
                                            </div>
                                        </div>









                                               <div class="social-sharing clean">
                                                                                    <a target="_blank" href="" class="share-facebook" title="Share on Facebook" style="border:none;">
                                                                                    <span class="icon icon-facebook" aria-hidden="true"></span>
                                                                                    <span class="share-title" aria-hidden="true">Share</span>
                                                                                    <span class="visually-hidden">Share on Facebook</span>
                                                                                    </a>
                                                                                    <a target="_blank" href="" class="share-twitter" title="Tweet on Twitter" style="border:none;">
                                                                                    <span class="icon icon-twitter" aria-hidden="true"></span>
                                                                                    <span class="share-title" aria-hidden="true">Tweet</span>
                                                                                    <span class="visually-hidden">Tweet on Twitter</span>
                                                                                    </a>
                                                                                    <a target="_blank" href="" class="share-pinterest" title="Pin on Pinterest" style="border:none;">
                                                                                    <span class="icon icon-pinterest" aria-hidden="true"></span>
                                                                                    <span class="share-title" aria-hidden="true">Pin it</span>
                                                                                    <span class="visually-hidden">Pin on Pinterest</span>
                                                                                    </a>
                                                                            </div>







                                        <div class="grid__item block_content grid--table grid--full">   
      
                                                <div class="grid__item content_products two-thirds" style="padding-left: 3.5%;width: 65%;"  >        
                                                        <div id="sync5" class="wrapper article-grid">
                                                                <div class="grid--rev blog_list item">
                                                                    <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                    <div class="article__image">

                                                                        <a class="article__featured-image" href="">
                                                                        <img src="Blogimage/<?php echo $result['image'] ?>" alt="These are the 5 best phones you can buy right now">
                                                                        </a>

                                                                    </div>
                                                    <h2 class="h3"><a href=""><?php  echo $result['short_desc'] ?></a></h2>
                                                                  
                                                                    <div class="article__bottom">
                                                                        <div class="rte rte--indented-images">
                                                                             <?php echo $result['content']  ?>...
                                                                        </div>
                                                                     
                                                               
                                                                    </div>
                                                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                        <div class="one-half">
                                                                          <div class="article__date">
                                                                            <span class="author"><b>By</b>-<?php echo  $result['user'] ?></span>
                                                                            <time datetime="2016-12-13" class="date"><b>Date</b>-<?php echo  $result['create_on'] ?></time>

                                                                             <span class="author"><b>.Comments-</b> <?php echo $result['content']  ?></span>
                                                                          </div>
                                                                        </div>   

                                                                        <div class="one-half" style="text-align: right;">
                                                                          <p>
                                                                            <a href="blog-article.html" class="text-link"> <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                          </p>
                                                                        </div>                            
                                                                        </div>
                                                                    </article>

                                                                    <?php
                                                                    if(!empty($result['video']))
                                                                      {  
                                                                    ?>

                                                                    <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                    <div class="article__image">

                                                                        <a class="article__featured-image" href="">
                                                                         
                  <video width="600" height="400" controls><source src="Blogvideo/<?php echo $result['video']; ?>" ></video>
                                                                        </a>

                                                                    </div>
                                                    <h2 class="h3"><a href=""><?php  echo $result['short_desc'] ?></a></h2>
                                                                  
                                                                    <div class="article__bottom">
                                                                        <div class="rte rte--indented-images">
                                                                             <?php echo $result['content']  ?>...
                                                                        </div>
                                                                     
                                                               
                                                                    </div>
                                                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                        <div class="one-half">
                                                                          <div class="article__date">
                                                                            <span class="author"><b>By</b> <?php echo  $result['user'] ?></span>
                                                                            <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                          </div>
                                                                        </div>    

                                                                        <div class="one-half" style="text-align: right;">
                                                                          <p>
                                                                            <a href="blog-article.html" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                          </p>
                                                                        </div>                                                                       
                                           
                                                                        </div>
                                                                    </article>

                                                                    <?php } ?>
                                                                    </div>


                                                                   <!-- <div class="grid--rev blog_list item">
                                                                    <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                    <div class="article__image">
                                                                        <a class="article__featured-image" href="">
                                                                        <img src="Blogimage/<?php echo $result['image'] ?>" alt="Apple's new TV app goes live with unified search">
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="h3"><a href="">Apple's new TV app goes live with unified search</a></h2>
                                                                   
                                                                    <div class="article__bottom">
                                                                        <div class="rte rte--indented-images">
                                                                             An update to Apple's iOS mobile software also brings hundreds of new emojis to your iPhone and iPad -- and...
                                                                        </div>
                                                                       
                                                                    </div>
                                                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                        <div class="one-half">
                                                                          <div class="article__date">
                                                                            <span class="author">By Admin</span>
                                                                            <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                          </div>
                                                                        </div>                    
                                                                        <div class="one-half" style="text-align: right;">
                                                                          <p>
                                                                            <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                          </p>
                                                                        </div>                            
                                                                        </div>
                                                                    </article>
                                                                    </div>-->


                                                                   <!-- <div class="grid--rev blog_list item">
                                                                    <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                    <div class="article__image">
                                                                        <a class="article__featured-image" href="">
                                                                        <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                                   
                                                                    <div class="article__bottom">
                                                                        <div class="rte rte--indented-images">
                                                                             Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                        </div>
                                                                      
                                                                    </div>
                                                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                    <div class="one-half">
                                                                      <div class="article__date">
                                                                        <span class="author">By Admin</span>
                                                                        <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                      </div>
                                                                    </div>                    
                                                                    <div class="one-half" style="text-align: right;">
                                                                      <p>
                                                                        <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                      </p>
                                                                    </div>                            
                                                                    </div>
                                                                    </article>  
                                                                    </div>-->



                                                                    <!--<div class="grid--rev blog_list item">   
                                                                            <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                                    <div class="article__image">
                                                                                        <a class="article__featured-image" href="">
                                                                                        <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                                        </a>
                                                                                    </div>
                                                                                    <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                                                   
                                                                                    <div class="article__bottom">
                                                                                        <div class="rte rte--indented-images">
                                                                                             Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                                        </div>
                                                                                      
                                                                                    </div>
                                                                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                                    <div class="one-half">
                                                                                      <div class="article__date">
                                                                                        <span class="author">By Admin</span>
                                                                                        <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                                      </div>
                                                                                    </div>                    
                                                                                    <div class="one-half" style="text-align: right;">
                                                                                      <p>
                                                                                        <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                                      </p>
                                                                                    </div>                            
                                                                                    </div>
                                                                                    </article>                                          
                                                                </div>-->




                                                            </div>
                                                </div>





                                                   


                                                <div class="grid__item content_products one-third" style="margin-top:6px;width: 35%;">
                                                  <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">



                                                <div class="grid--rev blog_list item">
                                                    <?php
                                                                  if(!empty($result['video_link']))
                                                                        { 
                                                                             ?>

                                                                <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                <div class="article__image">

                                                                                                                                                <?php?> 
                                                                 

                                                                    <a class="article__featured-image" href="">
                                                                   <iframe width="600" height="400" src="<?php echo $result['video_link']; ?>"></iframe>

                                                                    </a>
                                                                     
                                                                </div>
                                                                <h2 class="h3"><a href="">Click to play the videos</a></h2>
                                                               
                                                                <div class="article__bottom">
                                                                    <div class="rte rte--indented-images">
                                                                         videos are directly played by youtube .............
                                                                    </div>
                                                                     
                                                                  
                                                                </div>
                                                                <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                <div class="one-half">
                                                                  <div class="article__date">
                                                                    <span class="author"><b>By</b> <?php echo  $result['user'] ?></span>
                                                                    <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                  </div>
                                                                </div>    

                                                                <div class="one-half" style="text-align: right;">
                                                                  <p>
                                                                    <a href="#" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                  </p>
                                                                </div>                            
                                                                </div>
                                                                    
                                                                </article>
                                                                <?php  } else { ?> 

                                                                <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                               <img src=" ">
                                                               </article>

                                                                <?php } ?>
                                                                </div>











                                                 
                                                    </div>
                                                  </div>                                     



                                                </div>



                                                </div>
                                            </div>    
                                    </div>
                                </div>


                                    <?php } ?>


                            </div>
                            <script>
                                    $(document).ready(function() {
                                        var sync5 = $("#sync5");
                                        sync5.owlCarousel({
                                            items:2,
                                    slideSpeed : 300,
                                    lazyLoad : true,
                                    autoPlay : false,
                                    loop : true,
                                    navigation: true,
                                    pagination:false,
                                    // navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                                    responsiveRefreshRate : 200,
                                  });
                                    });
                                    </script>

                                    <script>
                                    $(document).ready(function() {
                                        var sync05 = $("#sync05");
                                        sync05.owlCarousel({
                                            items:3,
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


<?php
   $userdetail = mysqli_query($con,"SELECT * FROM blog order by blog_id  limit 2");
    if($result=mysqli_fetch_array($userdetail))
             {  ?>


                       <div class="html-section index-section product-banner-grid">
                                <div class="wrapper"  style="padding: 0;">
                                    <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:10px; padding-bottom:10px;">
                                        <div class="grid__item block_heading grid--table grid--full style_default">      
                                            <div class="area-header grid__item one-third">
                                                <h2>
                                                    <img src="assets/images/blog.png" alt="icon">
                                                    <a class="colortext" href="">Trending  Blogs </a>
                                                </h2>
                                            </div>    
                                            <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                            <div class="area-tags grid__item two-thirds">
                                                <ul class="grid__link">
                                            
                                                    <li>
                                                    <a href="blog-all.html"><span></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="grid__item block_content grid--table grid--full">   
      
                                            <div class="grid__item content_products two-thirds" style="padding-left: 3.5%;width: 65%;"  >        
                                                    <div id="sync5a" class="wrapper article-grid">
                                                            <div class="grid--rev blog_list item">
                                                                <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                <div class="article__image">

                                                                    <?php
                                                                        if(!empty($result['image']))
                                                                        { 
                                                                        ?>

                                                                    <a class="article__featured-image" href="">

                                                                    <img src="Blogimage/<?php echo $result['image'] ?>" alt="These are the 5 best phones you can buy right now">
                                                                    </a>


                                                                    <?php } ?>
                                                                </div>
                                                                <h2 class="h3"><a href="">  <?php echo $result['short_desc']   ?>  </a></h2>
                                                              
                                                                <div class="article__bottom">
                                                                    <div class="rte rte--indented-images">
                                                                       <?php echo $result['short_desc']   ?>  ...
                                                                    </div>
                                                                 
                                                           
                                                                </div>
                                                                <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                    <div class="one-half">
                                                                      <div class="article__date">
                                                                        <span class="author"><b>By</b> <?php echo  $result['user'] ?></span>
                                                                        <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                      </div>
                                                                    </div>                    
                                                                    <div class="one-half" style="text-align: right;">
                                                                      <p>
                                                                        <a href="#" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                      </p>
                                                                    </div>                            
                                                                    </div>
                                                                </article>
                                                                </div>
                                                                <div class="grid--rev blog_list item">
                                                                <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                <div class="article__image">
                                                                    <a class="article__featured-image" href="">
                                                                    <img src="assets/images/blog3_1024x1024.jpg" alt="Apple's new TV app goes live with unified search">
                                                                    </a>
                                                                </div>

                                                                <h2 class="h3"><a href=""> <?php echo $result['short_desc']   ?> </a></h2>
                                                               
                                                                <div class="article__bottom">
                                                                    <div class="rte rte--indented-images">
                                                                          <?php echo $result['content']   ?> ...
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                    <div class="one-half">
                                                                      <div class="article__date">
                                                                        <span class="author"><b>By</b><?php echo  $result['user'] ?></span>
                                                                        <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                      </div>
                                                                    </div>                    
                                                                    <div class="one-half" style="text-align: right;">
                                                                      <p>
                                                                        <a href="#" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                      </p>
                                                                    </div>                            
                                                                    </div>
                                                                </article>
                                                                </div>

                                                                <div class="grid--rev blog_list item">
                                                                <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                <div class="article__image">
                                                                    <a class="article__featured-image" href="">
                                                                    <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                    </a>
                                                                </div>
                                                                <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                               
                                                                <div class="article__bottom">
                                                                    <div class="rte rte--indented-images">
                                                                         Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                <div class="one-half">
                                                                  <div class="article__date">
                                                                    <span class="author"><b>By</b> <?php echo  $result['user'] ?></span>
                                                                    <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                  </div>
                                                                </div>                    
                                                                <div class="one-half" style="text-align: right;">
                                                                  <p>
                                                                    <a href="#" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                  </p>
                                                                </div>                            
                                                                </div>
                                                                </article>  
                                                                </div>


                                                                <div class="grid--rev blog_list item">   
                                                                        <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                                <div class="article__image">
                                                                                    <a class="article__featured-image" href="">
                                                                                    <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                                    </a>
                                                                                </div>
                                                                                <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                                               
                                                                                <div class="article__bottom">
                                                                                    <div class="rte rte--indented-images">
                                                                                         Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                                    </div>
                                                                                  
                                                                                </div>
                                                                                <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                                <div class="one-half">
                                                                                  <div class="article__date">
                                                                                    <span class="author"><b>By</b> <?php echo  $result['user'] ?></span>
                                                                                    <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                                  </div>
                                                                                </div>                    
                                                                                <div class="one-half" style="text-align: right;">
                                                                                  <p>
                                                                                    <a href="#" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                                  </p>
                                                                                </div>                            
                                                                                </div>
                                                                                </article>                                          
                                                            </div>
                                                            <div class="grid--rev blog_list item">   
                                                                    <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                            <div class="article__image">
                                                                                <a class="article__featured-image" href="">
                                                                                <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                                </a>
                                                                            </div>
                                                                            <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                                           
                                                                            <div class="article__bottom">
                                                                                <div class="rte rte--indented-images">
                                                                                     Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                                </div>
                                                                              
                                                                            </div>
                                                                            <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                            <div class="one-half">
                                                                              <div class="article__date">
                                                                                <span class="author"><b>By</b> <?php echo  $result['user'] ?></span>
                                                                                <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                              </div>
                                                                            </div>                    
                                                                            <div class="one-half" style="text-align: right;">
                                                                              <p>
                                                                                <a href="#" class="text-link">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                              </p>
                                                                            </div>                            
                                                                            </div>
                                                                            </article>                                          
                                                        </div>
                                                        </div>
                                            </div>
                                            <div class="grid__item content_products one-third" style="margin-top:6px;width: 35%;">


                                              <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                                                <div class="one-third">
                                                  <img src="assets/images/blog2_1024x1024.jpg" alt="">
                                                </div>
                                                <div class="two-thirds" style="padding: 7px 14px;">
                                                  <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                                                  <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                                                    Virtual reality is a somewhat understandable concept in 2016.
                                                    <p style="text-align:right;">
                                                      <a href="#" class="text-link" style="border-bottom: none;">  <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>                                          
                                    </div>
                                </div>
              </div>

<?php } ?>


              <script>
                  $(document).ready(function() {
                      var sync5a = $("#sync5a");
                      sync5a.owlCarousel({
                          items:2,
                  slideSpeed : 300,
                  lazyLoad : true,
                  autoPlay : false,
                  loop : true,
                  navigation: true,
                  pagination:false,
                  // navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
                  responsiveRefreshRate : 200,
                });
                  });
                  </script>


                        <!--<div class="html-section index-section product-banner-grid">
                            <div class="wrapper"  style="padding: 0;">
                                <div class="home-product-sidebar-wrapper grid--table grid--full">
                                    <div class="grid__item block_heading grid--table grid--full style_default">      
                                        <div class="area-header grid__item one-third">
                                            <h2>
                                                <img src="assets/images/blog.png" alt="icon">
                                                <a class="colortext" href="">Latest topic from Technology</a>
                                            </h2>
                                        </div>    
                                        <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                                        <div class="area-tags grid__item two-thirds">      
                                            <ul class="grid__link">          
                                                
                                                <li>
                                                    <a href="blog-all.html"><span>View All</span></a>
                                                </li>         
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid__item block_content grid--table grid--full">   
      
                                        <div class="grid__item content_products two-thirds" style="padding-left: 3.5%;width: 65%;"  >        
                                                <div id="sync5c" class="wrapper article-grid">
                                                        <div class="grid--rev blog_list item">
                                                            <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                            <div class="article__image">
                                                                <a class="article__featured-image" href="">
                                                                <img src="assets/images/blog4_1024x1024.jpg" alt="These are the 5 best phones you can buy right now">
                                                                </a>
                                                            </div>
                                                            <h2 class="h3"><a href="">These are the 5 best phones you can buy right now</a></h2>
                                                          
                                                            <div class="article__bottom">
                                                                <div class="rte rte--indented-images">
                                                                     From high-priced pocket-busters to our favorite budget beauties. You're up to date on everything you need to know before buying...
                                                                </div>
                                                             
                                                       
                                                            </div>
                                                            <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                <div class="one-half">
                                                                  <div class="article__date">
                                                                    <span class="author">By Admin</span>
                                                                    <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                  </div>
                                                                </div>                    
                                                                <div class="one-half" style="text-align: right;">
                                                                  <p>
                                                                    <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                  </p>
                                                                </div>                            
                                                                </div>
                                                            </article>
                                                            </div>
                                                            <div class="grid--rev blog_list item">
                                                            <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                            <div class="article__image">
                                                                <a class="article__featured-image" href="">
                                                                <img src="assets/images/blog3_1024x1024.jpg" alt="Apple's new TV app goes live with unified search">
                                                                </a>
                                                            </div>
                                                            <h2 class="h3"><a href="">Apple's new TV app goes live with unified search</a></h2>
                                                           
                                                            <div class="article__bottom">
                                                                <div class="rte rte--indented-images">
                                                                     An update to Apple's iOS mobile software also brings hundreds of new emojis to your iPhone and iPad -- and...
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                <div class="one-half">
                                                                  <div class="article__date">
                                                                    <span class="author">By Admin</span>
                                                                    <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                  </div>
                                                                </div>                    
                                                                <div class="one-half" style="text-align: right;">
                                                                  <p>
                                                                    <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                  </p>
                                                                </div>                            
                                                                </div>
                                                            </article>
                                                            </div>
                                                            <div class="grid--rev blog_list item">
                                                            <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                            <div class="article__image">
                                                                <a class="article__featured-image" href="">
                                                                <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                </a>
                                                            </div>
                                                            <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                           
                                                            <div class="article__bottom">
                                                                <div class="rte rte--indented-images">
                                                                     Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                </div>
                                                              
                                                            </div>
                                                            <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                            <div class="one-half">
                                                              <div class="article__date">
                                                                <span class="author">By Admin</span>
                                                                <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                              </div>
                                                            </div>                    
                                                            <div class="one-half" style="text-align: right;">
                                                              <p>
                                                                <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                              </p>
                                                            </div>                            
                                                            </div>
                                                            </article>  
                                                            </div>
                                                            <div class="grid--rev blog_list item">   
                                                                    <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                            <div class="article__image">
                                                                                <a class="article__featured-image" href="">
                                                                                <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                                </a>
                                                                            </div>
                                                                            <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                                           
                                                                            <div class="article__bottom">
                                                                                <div class="rte rte--indented-images">
                                                                                     Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                                </div>
                                                                              
                                                                            </div>
                                                                            <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                            <div class="one-half">
                                                                              <div class="article__date">
                                                                                <span class="author">By Admin</span>
                                                                                <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                              </div>
                                                                            </div>                    
                                                                            <div class="one-half" style="text-align: right;">
                                                                              <p>
                                                                                <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                              </p>
                                                                            </div>                            
                                                                            </div>
                                                                            </article>                                          
                                                        </div>
                                                        <div class="grid--rev blog_list item">   
                                                                <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                                        <div class="article__image">
                                                                            <a class="article__featured-image" href="">
                                                                            <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                                            </a>
                                                                        </div>
                                                                        <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                                       
                                                                        <div class="article__bottom">
                                                                            <div class="rte rte--indented-images">
                                                                                 Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                                            </div>
                                                                          
                                                                        </div>
                                                                        <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                                        <div class="one-half">
                                                                          <div class="article__date">
                                                                            <span class="author">By Admin</span>
                                                                            <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                                          </div>
                                                                        </div>                    
                                                                        <div class="one-half" style="text-align: right;">
                                                                          <p>
                                                                            <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                                          </p>
                                                                        </div>                            
                                                                        </div>
                                                                        </article>                                          
                                                    </div>
                                                    </div>
                                        </div>
                                        <div class="grid__item content_products one-third" style="margin-top:6px;width: 35%;">
                                          <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                                            <div class="one-third">
                                              <img src="assets/images/blog2_1024x1024.jpg" alt="">
                                            </div>
                                            <div class="two-thirds" style="padding: 7px 14px;">
                                              <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                                              <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                                                Virtual reality is a somewhat understandable concept in 2016.
                                                <p style="text-align:right;">
                                                  <a href="blog-article.html" class="text-link" style="border-bottom: none;">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                                              <div class="one-third">
                                                <img src="assets/images/blog2_1024x1024.jpg" alt="">
                                              </div>
                                              <div class="two-thirds" style="padding: 7px 14px;">
                                                <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                                                <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                                                  Virtual reality is a somewhat understandable concept in 2016.
                                                  <p style="text-align:right;">
                                                      <a href="blog-article.html" class="text-link" style="border-bottom: none;">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                    </p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                                                <div class="one-third">
                                                  <img src="assets/images/blog2_1024x1024.jpg" alt="">
                                                </div>
                                                <div class="two-thirds" style="padding: 7px 14px;">
                                                  <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                                                  <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                                                    Virtual reality is a somewhat understandable concept in 2016.
                                                    <p style="text-align:right;">
                                                        <a href="blog-article.html" class="text-link" style="border-bottom: none;">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                      </p>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        </div>

                                </div>
                            </div>
                        </div>-->



                        <script>
                            $(document).ready(function() {
                                var sync5c = $("#sync5c");
                                sync5c.owlCarousel({
                                    items:2,
                            slideSpeed : 300,
                            lazyLoad : true,
                            autoPlay : false,
                            loop : true,
                            navigation: true,
                            pagination:false,
                            // navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
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
                     

<!--<div class="html-section index-section product-banner-grid">
    <div class="wrapper" style="padding: 0;">
        <div class="home-product-sidebar-wrapper grid--table grid--full">
            <div class="grid__item block_heading grid--table grid--full style_default">      
                <div class="area-header grid__item one-third">
                    <h2>
                        <img src="assets/images/blog.png" alt="icon">
                        <a class="colortext" href="">Latest topic from Food</a>
                    </h2>
                </div>    
                <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>
                <div class="area-tags grid__item two-thirds">      
                    <ul class="grid__link">          
                        
                        <li>
                            <a href="blog-all.html"><span>View All</span></a>
                        </li>         
                    </ul>
                </div>
            </div>
            <div class="grid__item block_content grid--table grid--full">   
      
                <div class="grid__item content_products two-thirds" style="padding-left: 3.5%;width: 65%;"  >        
                        <div id="sync5d" class="wrapper article-grid">
                                <div class="grid--rev blog_list item">
                                    <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                    <div class="article__image">
                                        <a class="article__featured-image" href="">
                                        <img src="assets/images/blog4_1024x1024.jpg" alt="These are the 5 best phones you can buy right now">
                                        </a>
                                    </div>
                                    <h2 class="h3"><a href="">These are the 5 best phones you can buy right now</a></h2>
                                  
                                    <div class="article__bottom">
                                        <div class="rte rte--indented-images">
                                             From high-priced pocket-busters to our favorite budget beauties. You're up to date on everything you need to know before buying...
                                        </div>
                                     
                               
                                    </div>
                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                        <div class="one-half">
                                          <div class="article__date">
                                            <span class="author">By Admin</span>
                                            <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                          </div>
                                        </div>                    
                                        <div class="one-half" style="text-align: right;">
                                          <p>
                                            <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                          </p>
                                        </div>                            
                                        </div>
                                    </article>
                                    </div>
                                    <div class="grid--rev blog_list item">
                                    <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                    <div class="article__image">
                                        <a class="article__featured-image" href="">
                                        <img src="assets/images/blog3_1024x1024.jpg" alt="Apple's new TV app goes live with unified search">
                                        </a>
                                    </div>
                                    <h2 class="h3"><a href="">Apple's new TV app goes live with unified search</a></h2>
                                   
                                    <div class="article__bottom">
                                        <div class="rte rte--indented-images">
                                             An update to Apple's iOS mobile software also brings hundreds of new emojis to your iPhone and iPad -- and...
                                        </div>
                                       
                                    </div>
                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                        <div class="one-half">
                                          <div class="article__date">
                                            <span class="author">By Admin</span>
                                            <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                          </div>
                                        </div>                    
                                        <div class="one-half" style="text-align: right;">
                                          <p>
                                            <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                          </p>
                                        </div>                            
                                        </div>
                                    </article>
                                    </div>
                                    <div class="grid--rev blog_list item">
                                    <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                    <div class="article__image">
                                        <a class="article__featured-image" href="">
                                        <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                        </a>
                                    </div>
                                    <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                   
                                    <div class="article__bottom">
                                        <div class="rte rte--indented-images">
                                             Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                        </div>
                                      
                                    </div>
                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                    <div class="one-half">
                                      <div class="article__date">
                                        <span class="author">By Admin</span>
                                        <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                      </div>
                                    </div>                    
                                    <div class="one-half" style="text-align: right;">
                                      <p>
                                        <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                      </p>
                                    </div>                            
                                    </div>
                                    </article>  
                                    </div>
                                    <div class="grid--rev blog_list item">   
                                            <article class="list-article grid__item " style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                    <div class="article__image">
                                                        <a class="article__featured-image" href="">
                                                        <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                        </a>
                                                    </div>
                                                    <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                                   
                                                    <div class="article__bottom">
                                                        <div class="rte rte--indented-images">
                                                             Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                        </div>
                                                      
                                                    </div>
                                                    <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                    <div class="one-half">
                                                      <div class="article__date">
                                                        <span class="author">By Admin</span>
                                                        <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                      </div>
                                                    </div>                    
                                                    <div class="one-half" style="text-align: right;">
                                                      <p>
                                                        <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                      </p>
                                                    </div>                            
                                                    </div>
                                                    </article>                                          
                                </div>
                                <div class="grid--rev blog_list item">   
                                        <article class="list-article grid__item" style="padding: 10px;border-radius: 8px;    border: 5px solid #eafbf5;">
                                                <div class="article__image">
                                                    <a class="article__featured-image" href="">
                                                    <img src="assets/images/blog2_1024x1024.jpg" alt="In 2017, your phone's camera will have superpowers">
                                                    </a>
                                                </div>
                                                <h2 class="h3"><a href="">In 2017, your phone's camera will have superpowers</a></h2>
                                               
                                                <div class="article__bottom">
                                                    <div class="rte rte--indented-images">
                                                         Virtual reality is a somewhat understandable concept in 2016. You put on a headset, you find yourself in 3D worlds....
                                                    </div>
                                                  
                                                </div>
                                                <div class="article__bottom" style="display:  inline-flex;width: 100%;">
                                                <div class="one-half">
                                                  <div class="article__date">
                                                    <span class="author">By Admin</span>
                                                    <time datetime="2016-12-13" class="date">Feb 15, 2018</time>
                                                  </div>
                                                </div>                    
                                                <div class="one-half" style="text-align: right;">
                                                  <p>
                                                    <a href="blog-article.html" class="text-link">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                                                  </p>
                                                </div>                            
                                                </div>
                                                </article>                                          
                            </div>
                            </div>
                </div>
                <div class="grid__item content_products one-third" style="margin-top:6px;width: 35%;">
                  <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                    <div class="one-third">
                      <img src="assets/images/blog2_1024x1024.jpg" alt="">
                    </div>
                    <div class="two-thirds" style="padding: 7px 14px;">
                      <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                      <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                        Virtual reality is a somewhat understandable concept in 2016.
                        <p style="text-align:right;">
                          <a href="blog-article.html" class="text-link" style="border-bottom: none;">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                      <div class="one-third">
                        <img src="assets/images/blog2_1024x1024.jpg" alt="">
                      </div>
                      <div class="two-thirds" style="padding: 7px 14px;">
                        <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                        <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                          Virtual reality is a somewhat understandable concept in 2016.
                          <p style="text-align:right;">
                              <a href="blog-article.html" class="text-link" style="border-bottom: none;">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="display:  inline-flex;padding: 3%;background: #fff;padding-bottom: 0;">
                        <div class="one-third">
                          <img src="assets/images/blog2_1024x1024.jpg" alt="">
                        </div>
                        <div class="two-thirds" style="padding: 7px 14px;">
                          <h4 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">In 2017, your phone's camera will</h4>
                          <div class="rte rte--indented-images" style="font-size: 12px;text-align: justify;">
                            Virtual reality is a somewhat understandable concept in 2016.
                            <p style="text-align:right;">
                                <a href="blog-article.html" class="text-link" style="border-bottom: none;">Read More <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                              </p>
                          </div>
                        </div>
                      </div>
                </div>
                </div>

        </div>
    </div>
</div>-->


<script>
    $(document).ready(function() {
        var sync5d = $("#sync5d");
        sync5d.owlCarousel({
            items:2,
    slideSpeed : 300,
    lazyLoad : true,
    autoPlay : false,
    loop : true,
    navigation: true,
    pagination:false,
    // navigationText : ['<span><i class="fa fa-angle-left fa-3x"></i></span>','<span><i class="fa fa-angle-right fa-3x"></i></span>'],
    responsiveRefreshRate : 200,
  });
    });
    </script>


                    </div>
                </div>       
            </main>

            <div id="html-section-footer" class="html-section">
                <footer class="site-footer footer1" role="contentinfo">  
                        <div class="footer-top" style="padding: 18px 0;border-bottom: 2px solid #eee;background-color: #ffffff;">
                                <div class="footer_information">
                                    <div class="wrapper" style="    padding: 0 0; ">
                                        <div class="grid">
                                            
                                            <div class="fi-links grid__item ">
                                                <div class="fi-links grid__item small--one-whole medium--one-whole">
                                                    
                                                    <div class="fi-content">
                                                        
                                                        <ul class="grid__item" style="display:  inline-flex;">
                                                            <li class="foolinks">
                                                                <a href=""><span style="color: #000;">Chennai</span></a>
                                                            </li>
                                                            <li class="foolinks">
                                                                <a href=""><span style="color: #000;">Bangalore</span></a>
                                                            </li>
                                                            <li class="foolinks">
                                                                <a href=""><span style="color: #000;">Delhi</span></a>
                                                            </li>
                                                            <li class="foolinks">
                                                                <a href=""><span style="color: #000;">Mumbai</span></a>
                                                            </li>
                                                            <li  class="foolinks">
                                                                <a href=""><span style="color: #000;">Kolkata</span></a>
                                                            </li>
                                                            <li  class="foolinks">
                                                                    <a href=""><span style="color: #000;">Chennai</span></a>
                                                                </li>
                                                                <li class="foolinks">
                                                                    <a href=""><span style="color: #000;">Bangalore</span></a>
                                                                </li>
                                                                <li  class="foolinks">
                                                                    <a href=""><span style="color: #000;">Delhi</span></a>
                                                                </li>
                                                                <li class="foolinks">
                                                                    <a href=""><span style="color: #000;">Mumbai</span></a>
                                                                </li>
                                                                <li  class="foolinks">
                                                                    <a href=""><span style="color: #000;">Kolkata</span></a>
                                                                </li>
                                                                <li  class="foolinks">
                                                                        <a href=""><span style="color: #000;">Chennai</span></a>
                                                                    </li>
                                                                    <li  class="foolinks">
                                                                        <a href=""><span style="color: #000;">Bangalore</span></a>
                                                                    </li>
                                                                    <li  class="foolinks">
                                                                        <a href=""><span style="color: #000;">Delhi</span></a>
                                                                    </li>
                                                                    <li  class="foolinks">
                                                                        <a href=""><span style="color: #000;">Mumbai</span></a>
                                                                    </li>
                                                                    <li class="foolinks">
                                                                        <a href=""><span style="color: #000;">Kolkata</span></a>
                                                                    </li>
                                                                    <li class="foolinks">
                                                                            <a href=""><span style="color: #000;">Chennai</span></a>
                                                                        </li>
                                                                        <li class="foolinks" style="border:none;">
                                                                            <a href=""><span style="color: #000;">Bangalore</span></a>
                                                                        </li>
                                                        </ul>
                                                    
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-top" style="padding: 18px 0;border-bottom: 2px solid #eee;background-color: #ffffff;">
                                    <div class="footer_information">
                                        <div class="wrapper" style="    padding: 0 0; ">
                                            <div class="grid">
                                                
                                                <div class="fi-links grid__item ">
                                                    <div class="fi-links grid__item small--one-whole medium--one-whole one-third">
                                                        
                                                        <div class="fi-content">
                                                            <div class="grid-view-item hovero" style="margin-bottom: 0;">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                                                                        <a  class="grid-view-item__link one-quarter footicon" href="">
                                                                            <i class="fa fa-briefcase fa-4x"></i>
                                                                        </a>
                                                                        <div style="width: 100%;    padding: 0;">
                                                                            <div class="h2 grid-view-item__title">
                                                                                <a href="" style="font-weight: bold;">Business Man</a>
                                                                            </div>
                                                                            <div class="grid-view-item__meta">
                                                                                <span class="product-price__price" style="color: #888;font-size: 13px;">Voluptatum deleniti atque corrupti quos dolores </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fi-links grid__item small--one-whole medium--one-whole one-third">
                                                        
                                                            <div class="fi-content">
                                                                <div class="grid-view-item hovero" style="margin-bottom: 0;">
                                                                    <div class="grid-normal-display">
                                                                        <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                                                                            <a  class="grid-view-item__link one-quarter footicon" href="">
                                                                                <i class="fa fa-user-secret fa-4x"></i>
                                                                            </a>
                                                                            <div style="width: 100%;    padding: 0;">
                                                                                <div class="h2 grid-view-item__title">
                                                                                    <a href="" style="font-weight: bold;">Professionals</a>
                                                                                </div>
                                                                                <div class="grid-view-item__meta">
                                                                                    <span class="product-price__price" style="color: #888;font-size: 13px;">Voluptatum deleniti atque corrupti quos dolores </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-links grid__item small--one-whole medium--one-whole one-third">
                                                        
                                                                <div class="fi-content">
                                                                    <div class="grid-view-item hovero" style="margin-bottom: 0;">
                                                                        <div class="grid-normal-display">
                                                                            <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                                                                                <a  class="grid-view-item__link one-quarter footicon" href="">
                                                                                    <i class="fa fa-user fa-4x"></i>
                                                                                </a>
                                                                                <div style="width: 100%;    padding: 0;">
                                                                                    <div class="h2 grid-view-item__title">
                                                                                        <a href="" style="font-weight: bold;">User's</a>
                                                                                    </div>
                                                                                    <div class="grid-view-item__meta">
                                                                                        <span class="product-price__price" style="color: #888;font-size: 13px;">Voluptatum deleniti atque corrupti quos dolores </span>
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
                    <div class="site-footer__copyright--bottom" style="    background: #ffffff!important;">
                            <div class="wrapper"  style="padding: 0;">
                                    <div class="footer-social">
                                            <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" class="google" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="linkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <a href="#" class="flickr" target="_blank"><i class="fa fa-flickr"></i></a>
                                    </div>
                                
                                    <div class="grid">
                                    <div class="grid__item one-third small--one-whole"></div>
                                    <div class="grid__item one-third small--one-whole" style="padding-left: 60px;">
                                        <p class="copyright">
                                            <a style="color:#000;border-right: 1px solid;padding-right: 2%;" href="index.html" title="">About Us</a>&nbsp;
                                            <a style="color:#000;border-right: 1px solid;padding-right: 2%;padding-left: 2%;" href="index.html" title="">Listing Policy</a>
                                            <a style="color:#000;border-right: 1px solid;padding-right: 2%;padding-left: 1%;" href="index.html" title="">Privacy Policy</a>
                                            <a style="color:#000;padding-left: 1%;" href="index.html" title="">FAQ</a>
                                        </p>
                                    </div>
                                    <div class="grid__item one-third small--one-whole"></div>
                                    </div>
                                    <div class="grid">
                                    <div class="grid__item one-third small--one-whole"></div>
                                    <div class="grid__item one-third small--one-whole" style="padding-left: 30px;">
                                    <p class="copyright">
                                            <a style="color:#000;border-right: 1px solid;padding-right: 2%;padding-left: 1%;" href="agent.html" title="">Be An Agent</a>
                                        <a style="color:#000;border-right: 1px solid;padding-right: 2%;padding-left: 1%;" href="index.html" title="">Agent Login</a>
                                        <a style="color:#000;border-right: 1px solid;padding-right: 2%;padding-left: 1%;" href="index.html" title="">Manager Loin</a>
                                        <a style="color:#000;padding-left: 1%;" href="index.html" title="">Pay JLODA</a>
                                    </p>
                                    </div>
                                    <div class="grid__item one-third small--one-whole"></div>
                                </div><div class="grid">
                                    <div class="grid__item small--one-whole" style="text-align: center;">
                                        <p class="copyright">
                                            <small class="site-footer__copyright-content" style="color:#000;">©2018,</small>
                                            <small class="site-footer__copyright-content"><a style="color:#000;" target="_blank" rel="nofollow" href="https://www.octact.com">Powered by Octact Solutions</a></small>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </footer>
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
                                            <input id="AddToCart" class="btn btn-1 small add-to-cart AddToCart" type="submit" name="add" value="Recharge">
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
  
    <div id="LoginModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
        <div id="loginBox" class="loginLightbox">
            <div id="lightboxlogin">
                <form method="post" action="" id="customer_login" accept-charset="UTF-8">
                    <input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
                    <div id="bodyBox">
                        <h3>Login</h3>
                        <label for="CustomerEmail" class="hidden-label">Email</label>
                        <input type="email" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Email">
                        <label for="CustomerPassword" class="hidden-label">Password</label>
                        <input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full" placeholder="Password">
                        <input type="submit" class="btn btn2 btn--full" value="Sign In">
                        <div>
                            <p class="forgot">
                                <a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Forgot your password?</a>
                            </p>
                            <p class="create">
                                <a href="#create_accountBox" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">Create Account</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div id="recover-password" style="display:none;">
                <h3>Reset your password</h3>
                <p class="note">
                    We will send you an email to reset your password.
                </p>
                <form method="post" action="" accept-charset="UTF-8">
                    <input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="✓">
                    <p>
                        <label for="recover-email" class="label">Email</label>
                    </p>
                    <input type="email" value="" size="30" name="email" id="recover-email" class="text">
                    <div class="action_bottom">
                        <input class="btn btn2" type="submit" value="Submit">
                        <a class="btn back" href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>
                    </div>
                </form>
            </div>
            <div id="create_accountBox" style="display:none;">
                <h3>Create Account</h3>
                <div class="form-vertical">
                    <form method="post" action="" id="create_customer" accept-charset="UTF-8">
                        <input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
                        <label for="FirstName" class="hidden-label">First Name</label>
                        <input type="text" name="customer[first_name]" id="FirstName" class="input-full" placeholder="First Name">
                        <label for="LastName" class="hidden-label">Last Name</label>
                        <input type="text" name="customer[last_name]" id="LastName" class="input-full" placeholder="Last Name">
                        <label for="Email" class="hidden-label">Email</label>
                        <input type="email" name="customer[email]" id="Email2" class="input-full" placeholder="Email">
                        <label for="CreatePassword" class="hidden-label">Password</label>
                        <input type="password" name="customer[password]" id="CreatePassword" class="input-full" placeholder="Password">
                        <p>
                            <input type="submit" value="Create" class="btn btn2 btn--full">
                        </p>
                        <p>
                            <span><a class="btn" href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
                        </p>
                    </form>
                </div>
            </div>
            <script>
                            function showRecoverPasswordForm() {
                              $('#recover-password').css("display",'block');
                              $('#lightboxlogin').css("display",'none');
                              $('#create_accountBox').css("display",'none');
                            }
                            function hideRecoverPasswordForm() {
                              $('#recover-password').css("display",'none');
                              $('#lightboxlogin').css("display",'block');
                              $('#create_accountBox').css("display",'none');
                            }
                            function showCreateAccountForm(){
                              $('#recover-password').css("display",'none');
                              $('#lightboxlogin').css("display",'none');
                              $('#create_accountBox').css("display",'block');
                            }
                          </script>
        </div>
        <!-- <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa fa-times-circle" aria-hidden="true"></i></button> -->
    </div>


    <div id="searchModal" class="mfp-hide" style="max-width: 100%;margin: 0 auto;">
            <div id="loginBox" class="loginLightbox">
                <div id="lightboxlogin">
                    <form method="post" action="" id="customer_login" accept-charset="UTF-8">
                        <input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
                        <div id="bodyBox">
                            <h3>Search</h3>
                            <div style="display: inline-flex;width: 100%;">
                            <select style="height: 40px;
                            border-right: 1px solid #eee;">
                              <option value="">Bangalore</option>
                            </select>
                            <select style="height: 40px;
                            border-right: 1px solid #eee;">
                              <option value="">Koramangala</option>
                            </select>
                            <input type="search" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Search here">
                            <input type="submit" class="btn btn2 btn--full" value="Search" style="width: 20%;">
                        </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa fa-times-circle" aria-hidden="true"></i></button> -->
        </div>
  
</body>

</html>



<script type="text/javascript">
var timer2 = fmtMSS("<?php echo $limit['mintime']; ?>");
var points = '<?php echo $limit['points']; ?>';
var limit = '<?php echo $limit['viewlimit']; ?>';
var blog_id = '<?php echo $curblog['blog_id']; ?>';
var interval = setInterval(function() {


  var timer = timer2.split(':');

  //by parsing integer, I avoid all extra string processing
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  
  if(minutes == 00 && seconds == 00){
      clearInterval(interval);
      console.log(blog_id+','+points);


        var url = "put_points.php?blog_id="+blog_id+"&points="+points;
        console.log(url);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                var res = this.responseText.trim();
                console.log(res);
                    if(res == '1'){
                        alert('congratulation !! You have earned '+points);
                    }else if(res == 'daliylimitover'){
                        alert('Daily limits is reached. Daily limit is : '+limit);
                    }
                }
            };
        xhttp.open("GET",url, true);
        xhttp.send();

      
      return false;
  }

  --seconds;
  minutes = (seconds < 0) ? --minutes : minutes;
  if (minutes < 0) clearInterval(interval);
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  minutes = (String(minutes).length) ? '0'+minutes : minutes;
  $('#minutes').html(minutes);
  $('#seconds').html(seconds);
  timer2 = minutes + ':' + seconds;

}, 1000);

</script>