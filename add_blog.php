<?php 
include('common.php');
include('conn.php');
$user_id = $_SESSION['user_id'];
$userdetail = mysqli_fetch_assoc(mysqli_query($con,"SELECT `username` FROM `user` WHERE `id`='$user_id'"));
$username = $userdetail['username'];
?>

<?php 
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $cat = explode(',',$_POST['blog_category']);
        $blog_category_id = $cat[0];
        $blog_category = $cat[1];
        $blog_title = $_POST['blog_title'];
        $blog_content = $_POST['blog_content'];
        $user = $_POST['blogger_name'];
        $user_id = $_SESSION['user_id'] ;
        $short_desc = $_POST['short_desc'];
        $TagContent = implode(',',$_POST['TagContent']);

        $target_dir = "Blogimage/";
        $target_file = $target_dir . basename($_FILES["blog_image"]["name"]);
        $file_name = mysqli_real_escape_string($con,$_FILES["blog_image"]["name"]);
        move_uploaded_file($_FILES["blog_image"]["tmp_name"], $target_file);

        // if($_FILES["blog_video"]["name"] != ''){

        // $video_dir = "Blogvideo/";
        // $video_file = $video_dir . basename($_FILES["blog_video"]["name"]);
        // $video_name = mysqli_real_escape_string($con,$_FILES["blog_video"]["name"]);
        // move_uploaded_file($_FILES["blog_video"]["tmp_name"], $video_file);

        // }{
            $video_name = '';
        //}
        
        $query = "INSERT INTO `blog`(`user`, `user_id`,`cat_id`,`category`, `title`,`short_desc`,`content`,`image`,`video`,`tag`,`create_on`) VALUES ('$user','$user_id','$blog_category_id','$blog_category','$blog_title','$short_desc','$blog_content','$file_name','$video_name','$TagContent','$TIMESTAMP')";

        $insert = mysqli_query($con,$query);

        echo "<script>alert('Blog Added');</script>";
        echo "<script>window.location=''</script>";

   }
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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  
        <style>
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
.gridimagei{
    border: 1px solid #eee;
    margin-bottom: 10%!important;
    padding: 33px;
    font-size: 9em;
    color: #4285F4;
    background-color: #fff;
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

<style type="text/css">
    #html-section-1487408997957{
        margin-top: 90px;
    }
    .Page-Content{padding-top:10px;padding-bottom:10px;min-height:500px;}
    #mceu_31 { display:none; }

</style>


<style type="text/css">
    .contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #f6581f;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

#dynamic_data[class*="col-"] {
    float: left !important;
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

    
            <main class="main-content"  style="margin-top: -16px;padding-top: 16px;background-color: #50d8af1f;">   
                                    


           
                <div class="content">          
                    <div class="index-sections">


                                    <div id="html-section-1487408997957" class="html-section index-section product-banner-grid">
                                        <div class="wrapper" style="padding: 0;">
                    <div class="container contact-form">
            <div class="contact-image">
                <img src="https://cdn2.iconfinder.com/data/icons/social-media-circle-long-shadow/1024/long-4-512.png" alt="Blog">
            </div>
            <form  action="" id="BlogUpload" name="BlogUpload" method="POST" enctype="multipart/form-data">
                <h3>Create Blog</h3>
               <div class="row">
                    <div class="col-md-12">


                        <div class="form-group">
                
                 <select class="form-control" placeholder="Blog Category *"  id="blogger_name" name="blogger_name" >
                     <option value="">Select Blogger Name</option>
                     <option value="<?php echo $username; ?>"><?php echo $username; ?></option>
                     <option value="JLODA team">JLODA team</option>
                     <option value="unknown">unknown</option>
                 </select>
                 <p id="Blogerr01" class="ERROR"></p>
                        </div>

                        <div class="form-group">
                
                 <select class="form-control" placeholder="Blog Category *"  id="blog_category" name="blog_category" >
                     <option value="" > Select Category </option>
                     <?php 
                       $catquery = mysqli_query($con,"SELECT `cat_id`, `category` FROM `category`");
                       while($row=mysqli_fetch_assoc($catquery)){
                     ?>
                        <option value="<?php echo $row['cat_id'].','.$row['category']?>"><?php echo $row['category']?> </option>
                     <?php } ?>
                 </select>
                 <p id="Blogerr1" class="ERROR"></p>
                        </div>
                        <div class="form-group">
                 <input type="text"  class="form-control" placeholder="Blog Title *"  id="blog_title" name="blog_title">
                 <p id="Blogerr2" class="ERROR"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="file" id="blog_image" name="blog_image">
                            <p id="Blogerr3" class="ERROR"></p>
                        </div>
                        <!-- <div class="form-group">
                            <input class="form-control" type="file" id="blog_video" name="blog_video">
                            <p id="Blogerr03" class="ERROR"></p>
                        </div> -->

                        <div class="form-group">
                <textarea class="form-control" type="file" id="short_desc" name="short_desc" placeholder="Short Description"></textarea>
                            <p id="Blogerr04" class="ERROR"></p>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" name="blog_content" id="blog_content"></textarea>
                            <p id="Blogerr4" class="ERROR"></p>
                        </div>


                        <div class="form-group">
                            <button type="button" class="btn" onclick="createEle()">Add Tag</button>
                            <div class="form-group" id="dynamic_data"></div>
                        </div>


                        <div class="form-group">
                            <input type="button" onclick="addBlog()" name="Add_Blog" class="btnContact" value="Add Blog">
                        </div>
                    </div>
                </div>
            </form>
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

$('#number1').jQuerySimpleCounter({end: 5985,duration: 3000});
$('#number2').jQuerySimpleCounter({end: 8567,duration: 3700});
$('#number3').jQuerySimpleCounter({end: 8548,duration: 3100});
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
  
   


    <div id="searchModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
            <div id="loginBox" class="loginLightbox">
                <div id="lightboxlogin">
                    <form method="post" action="" id="customer_login" accept-charset="UTF-8">
                        <input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
                        <div id="bodyBox">
                            <h3>Search</h3>
                            <div style="display: inline-flex;width: 100%;">
                            
                            <input type="search" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Search here">
                            <input type="submit" class="btn btn2 btn--full" value="Search" style="width: 20%;">
                        </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa fa-times-circle" aria-hidden="true"></i></button> -->
        </div>
        


    <?php include('Modal.php');?>
        
  <script src="js/common.js" type="text/javascript"></script>
  

  <script type="text/javascript">
      
    function addBlog(){
        var  blogger_name = $('#blogger_name').val();
        var blog_category = $('#blog_category').val();
        var blog_title = $('#blog_title').val();
        var blog_image = $('#blog_image').val();
        //var blog_video = $('#blog_video').val();
        var short_desc01 = $('#short_desc').val().trim();
        var short_desc = short_desc01.length;

        var ext = $('#blog_image').val().split('.').pop().toLowerCase();
        var Notvalid = false ;
        if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
            var Notvalid = true;
        }
        
        // var vidext = $('#blog_video').val().split('.').pop().toLowerCase();
        // var NotvalidVideo = false;
        // if($.inArray(ext, ['ogg','ogv','avi','mpeg','mov','wmv','flv','mp4']) == -1) {
        //     var NotvalidVideo = true;
        // }

        

        if(blogger_name == ''){
            $('#Blogerr01').html('Please Provide Blogger Name');
            $('#Blogerr01').css('display','block');
            setTimeout(function() { 
              $('#Blogerr01').css('display','none');    
            },4000);
        }else if(blog_category == ''){
            $('#Blogerr1').html('Please Provide Blog Category');
            $('#Blogerr1').css('display','block');
            setTimeout(function() { 
              $('#Blogerr1').css('display','none');    
            },4000);
        }else if(blog_title == ''){
            $('#Blogerr2').html('Please Provide Blog Title');
            $('#Blogerr2').css('display','block');
            setTimeout(function() { 
              $('#Blogerr2').css('display','none');    
            },4000);
        }else if(blog_image == ''){
            $('#Blogerr3').html('Please Upload Blog Image');
            $('#Blogerr3').css('display','block');
            setTimeout(function() { 
              $('#Blogerr3').css('display','none');    
            },4000);
        }else if(Notvalid){
            $('#Blogerr3').html("Please Upload Blog Image With Only 'png','jpg','jpeg' ext ");
            $('#Blogerr3').css('display','block');
            setTimeout(function() { 
              $('#Blogerr3').css('display','none');    
            },4000);
        }/*else if(blog_video != '' && NotvalidVideo ){
            $('#Blogerr03').html("Please Upload Blog Video With Only 'ogg','ogv','avi','mpeg','mov','wmv','flv','mp4' ext ");
            $('#Blogerr03').css('display','block');
            setTimeout(function() { 
              $('#Blogerr03').css('display','none');    
            },4000);
        }*/else if(short_desc < 50 || short_desc > 200){
            $('#Blogerr04').html("Short Description Should Have Min 50 & Max 200 Charecters");
            $('#Blogerr04').css('display','block');
            setTimeout(function() { 
              $('#Blogerr04').css('display','none');    
            },4000);
        }else{
              
              $('#BlogUpload')[0].submit();

              /*var url = "insert_block?blog_category="+blog_category+"&blog_title="+blog_title+"&blog_image="+blog_image;
              console.log(url);
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText.trim();
                    console.log(res);
                }
              };
              xhttp.open("GET",url, true);
              xhttp.send();*/

        }
        
    }

  </script>
       

        <script>
        jQuery(document).ready(function($){
    var $timeline_block = $('.cd-timeline-block');

    //hide timeline blocks which are outside the viewport
    $timeline_block.each(function(){
        if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        }
    });

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        $timeline_block.each(function(){
            if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
            }
        });
    });
});
        </script>


  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#blog_content' });</script>


  <script>
    function createEle(){
        var count = $('.appendData').length;
        if(count < 5){
            $('#dynamic_data').append('<div class="col-sm-8 col-sm-offset-2 appendData" style="margin-top: 5px;"><div class="col-md-10" style="float:left"><input type="text" class="form-control1" name="TagContent[]" title="Tag Contents"></div><div class="col-md-2" style="padding: 8px;float:left"><i class="fa fa-trash-o" onclick="delThis(event)"></i></div></div>');    
        }
        
    }
    
    function delThis(event){
        var parent = $(event.target).parent().parent();
        parent.remove();        
    }
</script>


      
</body>

</html>