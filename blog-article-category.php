<?php 
include('common.php');
include('conn.php');
$cat_id = $_REQUEST['cat_id'];
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

    <style type="text/css">
        .LimitText{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
       -webkit-line-clamp: 2; /* number of lines to show */
       -webkit-box-orient: vertical;
    }

    </style>
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


    .comments-container h1 {
        font: 600 18px/1.15 Poppins;
    }

    .comments-container h1 a {
        font-size: 18px;
        font-weight: 700;
    }

    .comments-list {
        margin-top: 30px;
        position: relative;
    }

    .comments-list:before {
        content: '';
        width: 2px;
        height: 100%;
        background: #c7cacb;
        position: absolute;
        left: 32px;
        top: 0;
    }

    .comments-list:after {
        content: '';
        position: absolute;
        background: #c7cacb;
        bottom: 0;
        left: 29px;
        width: 7px;
        height: 7px;
        border: 3px solid #dee1e3;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .reply-list:before, .reply-list:after {display: none;}
    .reply-list li:before {
        content: '';
        width: 60px;
        height: 2px;
        background: #c7cacb;
        position: absolute;
        top: 25px;
        left: -55px;
    }


    .comments-list li {
        margin-bottom: 15px;
        display: block;
        position: relative;
    }

    .comments-list li:after {
        content: '';
        display: block;
        clear: both;
        height: 0;
        width: 0;
    }

    .reply-list {
        padding-left: 10%;
        clear: both;
        margin-top: 15px;
    }

    .comments-list .comment-avatar {
        width: 10%;
        height: 65px;
        position: relative;
        z-index: 99;
        float: left;
        border: 3px solid #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        overflow: hidden;
    }

    .comments-list .comment-avatar img {
        width: 100%;
        height: 100%;
    }

    .reply-list .comment-avatar {
        width: 50px;
        height: 50px;
    }

    .comment-main-level:after {
        content: '';
        width: 0;
        height: 0;
        display: block;
        clear: both;
    }

    .comments-list .comment-box {
        width:88%;
        float: right;
        position: relative;
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
        box-shadow: 0 1px 1px rgba(0,0,0,0.15);
        background-color: #FFF;
    }

    .comments-list .comment-box:before, .comments-list .comment-box:after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        display: block;
        border-width: 10px 12px 10px 0;
        border-style: solid;
        border-color: transparent #FCFCFC;
        top: 8px;
        left: -11px;
    }

    .comments-list .comment-box:before {
        border-width: 11px 13px 11px 0;
        border-color: transparent rgba(0,0,0,0.05);
        left: -12px;
    }

    .reply-list .comment-box {
        width: 89%;
    }
    .comment-box .comment-head {
        background: #FCFCFC;
        padding: 10px 12px;
        border-bottom: 1px solid #E5E5E5;
        overflow: hidden;
        -webkit-border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
    }

    .comment-box .comment-head i {
        float: right;
        margin-left: 14px;
        position: relative;
        top: 2px;
        color: #A6A6A6;
        cursor: pointer;
        -webkit-transition: color 0.3s ease;
        -o-transition: color 0.3s ease;
        transition: color 0.3s ease;
    }

    .comment-box .comment-head i:hover {
        color: #03658c;
    }

    .comment-box .comment-name {
        color: #283035;
        font-size: 14px;
        font-weight: 700;
        float: left;
        margin-right: 10px;
        margin-bottom: 0;
    }

    .comment-box .comment-name a {
        color: #4285F4;
    }

    .comment-box .comment-head span {
        float: left;
    color: #999;
    font-size: 12px;
    position: relative;
    top: 1px;
    margin-top: 0;
    }

    .comment-box .comment-content {
        background: #FFF;
        padding: 12px;
        font-size: 15px;
        color: #595959;
        -webkit-border-radius: 0 0 0px 0px;
        -moz-border-radius: 0 0 0px 0px;
        border-radius: 0 0 0px 0px;
        border-bottom: .5px solid #e5e5e5;
    }

    .comment-box .comment-footer {
        border-radius: 0 0 4px 4px;
        padding: 12px;
        width: 100%;
        background: #fff none repeat scroll 0 0;
    }
    .comment-box .comment-footer textarea {
        resize: none;
        width: 100%;
        border-radius: 4px;
        padding: 1%;
    }
    .comment-box .send-button, .comment-box .comment-open {
        padding: 12px;
        background: #fff none repeat scroll 0 0;
    }
    .comment-box .send-button .btn-send, .comment-box .comment-open .btn-send {
        background-color: #03658c;
        border-color: #03658c;
        color: #fff;
        padding: 6px 12px;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
    }
    .comment-box .send-button .btn-send, .comment-box .comment-open .btn-send {
        text-decoration: none;
    }
    .comment-box .btn-reply {
        cursor: pointer;
    }
    .comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #294798;}
    .comment-box .comment-name.by-author:after {
        /*content: '';*/
        background: #03658c;
        color: #FFF;
        font-size: 12px;
        padding: 3px 5px;
        font-weight: 700;
        margin-left: 10px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
    .comment-box .posted-time {
        margin-top: 8px;
    }

    .comment-box .comment-footer {
        display: none;
    }
@media only screen and (max-width: 766px) {
    .comments-container {
        width: 480px;
    }

    .comments-list .comment-box {
        width: 390px;
    }

    .reply-list .comment-box {
        width: 320px;
    }
}
article.article #bot_tag span+span:before{
    display: none;
}
.all_tags{
    padding: 0 10px;
    font-weight: 500;
    font-size: 12px;
    border-right: 1px solid #000;
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
                
                    
    
                    <main class="main-content"  style="background-color: #50d8af1f;padding-top: 20px;margin-top: -20px;">
                                       
            <div id="html-section-product-template" class="html-section" style="margin-top: 8%;">
                    <header class="section-header wrapper-breadcrumb" style="    background-color: #eafbf5;
                    border-bottom: 2px solid #eee;">
                        <div class="wrapper">
                            <!-- <h3>Article</h3> -->
                            <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                            <a onclick="window.location='blog-article-home.php'" title="Back to the frontpage">Home</a>
                            
                            <?php 
                            $catA = mysqli_query($con,"SELECT * FROM `category`");
                            while ($row = mysqli_fetch_assoc($catA)) {?>
                                   
                                   <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <span onclick="window.location='blog-article-category.php?cat_id=<?php echo $row['cat_id']; ?>&category=<?php echo $row['category'];?>'"><?php echo $row['category'];?></span>

                            <?php  } ?>
                            

                            </nav>
                        </div>
                    </header>
                    

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
                      
                </div>   

<?php 

 $curblog = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM blog WHERE `cat_id`='$cat_id' ORDER BY blog_id DESC")); 
?>                    
                            <div id="html-section-blog-template" class="html-section">
                              
                                <div class="wrapper">
                                    <div class="grid">
                                        <article class="grid__item article" itemscope="" itemtype="http://schema.org/Article">
                                        <div class="grid" style="    background-color: white;
                                        margin-bottom: 35px;    border-radius: 8px;">
                                            <div class="grid__item">
                                                    <div class="grid product-single">
                                                            <div class="grid__item product-single__meta--wrapper large--three-fifths" style="padding: 25px;border-right: 4px solid #50d8af1f;">
                                                                    <div class="product-single__meta grid__item ">
                                                                            <h1 class="article-top" style="font-weight: 600;text-align: left;text-transform:  none;">
                                                <span class="author colortext">
                                                    <?php echo $curblog['title']; ?>
                                                </span>
                                                                            </h1>
                                            <p style="text-align: justify;">
                                                <?php echo $curblog['short_desc']; ?>
                                            </p>
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
                                                                            <p class="article-top" style="font-weight: 600;text-align: left;text-transform: none;">
                                    <span class="author">
                                        <?php 

                                        echo "By ".$curblog['user'];

                                                        ?>
                                    </span>
                                    <span class="date"><time>
                                        <?php 
                                                    $originalDate = $curblog['create_on'];
                                                    $newDate = date("M d, Y", strtotime($originalDate));
                                                    echo $newDate;
                                                    ?>
                                    </time></span>

                                <?php 
                                $Cnt = mysqli_num_rows(mysqli_query($con,"SELECT `cmd_id` FROM `blog_cmd` WHERE blog_id= '".$curblog['blog_id']."'"));
                                ?>
                                <span class="comment"><?php echo $Cnt." Comments"; ?></span>
                                                                            </p>
                                                                    </div>
                                                                
                                                                        <div class="product-single__photos elevatezoom" id="ProductPhoto" style="border: none;">
                                    <img src="Blogimage/<?php echo $curblog['image']; ?>"  style="border-bottom: 1px solid #ebebeb;width:100%;height:400px;" alt="Motorola Moto 360 (2nd gen)" id="ProductPhotoImg" data-image-id="21477894598" data-zoom-image="assets/images/product_800x800.jpg">
                                                                        </div>
                                    <div class="article-content"  style="text-align: justify;">
                                     <?php echo $curblog['content']; ?>
                                    </div>
                                                                        <p id="bot_tag" class="article-top" style="font-weight: 600;text-align: left;text-transform: none;">

                                                <span class="author">Tags :</span>

                                                <?php 
                                                $ABC = explode(',',$curblog['tag']);
                                                 foreach ($ABC as $item) {
                                                     ?>
                                                    <span class="all_tags"><?php echo $item; ?></span>
                                                    <?php } ?>

                                                                                
                                                                              

                                                                        </p>

                                        <?php  if($curblog['video_link'] != ''){ ?>
                    <iframe width="600" height="400" src="<?php echo $curblog['video_link']; ?>"></iframe>
                        <?php  } else if($curblog['video'] != '') { ?>

                              <video width="600" height="400" controls><source src="Blogvideo/<?php echo $curblog['video']; ?>" ></video>
               
                         <?php } ?>

                                <div class="comments-container" style="    margin-top: 8%;text-align: left;">
                                                                                <h1 class="colortext">View Reaction</h1>
                                                                        
    <ul id="comments-list" class="comments-list">


    <?php 
      $abc = mysqli_query($con,"SELECT * FROM `blog_cmd` WHERE `blog_id`='".$curblog['blog_id']."'");
      while ($cmd= mysqli_fetch_assoc($abc)){

        $user = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `user` WHERE `id`='".$cmd['user_id']."'"));
    ?>
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="userimage/<?php echo $user['userimage']?>" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name by-author"><a href=""><?php echo $cmd['blogcmd_name']?></a></h6>
                        <span class="posted-time">Posted on <?php echo $cmd['cteate_on']?></span>
                        <!-- <i class="fa fa-reply"></i> -->
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        <?php echo $cmd['blogcmd_message']?>
                        <div class="comment-open">
                            <a class="btn-reply" style="font-size: 13px;">
                                <i class="fa fa-reply"></i> Reply
                            </a>
                        </div>
                    </div>
                    <div class="comment-footer">
                        <div class="comment-form">
                            <textarea class="form-control" name="" id=""></textarea>
                            <div class="pull-right send-button">
                                <a class="btn-send">send</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </li>
     <?php } ?>


    </ul>

                                                                            </div>
                                                                                
        <div id="comments" style="background-color: white;
        padding: 5px;
        padding-top: 10px;    margin-top: 8%;">
                <h2 class="h3 colortext">Leave a comment</h2>
                <p id="CommentMeg" style="color:green"><p>
                <div class="form-vertical">
                    <form method="post" action="#" id="comment_form" accept-charset="UTF-8" class="comment-form" style="margin: 0;">
                        <input type="hidden" name="form_type" value="new_comment"><input type="hidden" name="utf8" value="?">
                        <div class="grid grid--small">
                            <div class="grid__item large--one-half">
                                <label for="CommentAuthor" class="hidden-label">Name</label>
                                <input class="input-full" type="text" name="blogcmd_name" placeholder="Name" id="blogcmd_name" value="" autocapitalize="words">
                                <p id="cmd_er1" style="color:red"><p>
                            </div>
                            <div class="grid__item large--one-half">
                                <label for="CommentEmail" class="hidden-label">Email</label>
                                <input class="input-full" type="email" name="blogcmd_email" placeholder="Email" id="blogcmd_email" value="" autocorrect="off" autocapitalize="off">
                                <p id="cmd_er2" style="color:red"><p>
                            </div>
                        </div>
                        <label for="CommentBody" class="hidden-label">Message</label>
                        <textarea class="input-full" name="blogcmd_message" id="blogcmd_message" placeholder="Message"></textarea>
                        <p id="cmd_er3" style="color:red"><p>
                        <div class="article-button">
                            <input type="button" onclick="addComment()" class="btn" value="Post comment" style="background-color: #4285F4;">
                        </div>
                    </form>
                </div>
            </div>
                                                                
                                                                </div>
                                                                <div class="grid__item large--two-fifths text-center" style="border-right: 1px solid #eee;padding: 25px;">
                                                                    <div class="grid-view-item" style="border-radius: 0;border-top-right-radius: 8px;margin-left: 0;border: none;">
                                                                        <img src="assets/images/slideshow2_785x345.png" style="width: 100%;">
                                                                    </div>
                                                                    <h1 class="article-top" style="margin: 5% 0;font-weight: 600;text-align: left;text-transform:  none;font-size: 20px;">
                                                                            <span class="author colortext">Latest Blogs</span>
                                                                    </h1>
                                                                 
            
            <?php 
                $blog_col = mysqli_query($con,"SELECT * FROM blog WHERE admin_approval='yes' AND `cat_id`='$cat_id' ORDER BY blog_id DESC LIMIT 4"); 
                while($row=mysqli_fetch_assoc($blog_col)){ 
            ?>  
                                                    
            <div class="grid-view-item" style="margin-bottom: 5px;border:none;margin-left: 0;padding: 0;">
                    <div class="grid-normal-display" style="text-align: left;">
                        <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                            <a class="grid-view-item__link one-quarter footicon" href="blog-article.php?blog_id=<?php echo $row['blog_id']; ?>">
                        <img src="Blogimage/<?php echo $row['image']; ?>" style="width: 100%;height: 100%;margin-top: -16px;">
                            </a>
                            <div style="width: 100%;padding: 0 10px;">
                                <div class="h2 grid-view-item__title">
                                    <a href="blog-article.php?blog_id=<?php echo $row['blog_id']; ?>" style="font-weight: bold;    font-size: 14px;"><?php echo $row['title']; ?></a>
                                </div>
                                <div class="grid-view-item__meta">
                                    <span class="product-price__price LimitText" style="color: #888;font-size: 13px;"> <?php echo $row['short_desc']; ?> </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
            <?php } ?>                                           
                                                                    <h1 class="article-top" style="font-weight: 600;text-align: left;text-transform:  none;font-size: 20px;margin: 5% 0;">
                                                                            <span class="author colortext">Trending Blogs</span>
                                                                    </h1>

            <?php 
                $blog_col = mysqli_query($con,"SELECT * FROM blog WHERE admin_approval='yes' AND `cat_id`='$cat_id' ORDER BY blog_id DESC LIMIT 4"); 
                while($row=mysqli_fetch_assoc($blog_col)){ 
            ?>  

            <div class="grid-view-item" style="margin-bottom: 5px;border:none;margin-left: 0;padding: 0;">

                    <div class="grid-normal-display" style="text-align: left;">
                        <div class="grid__image product-image" style="display:  inline-flex;width: 100%;margin-bottom: 0;">
                            <a class="grid-view-item__link one-quarter footicon" href="blog-article.php?blog_id=<?php echo $row['blog_id']; ?>">
                        <img src="Blogimage/<?php echo $row['image']; ?>" style="width: 100%;height: 100%;margin-top: -16px;">
                            </a>
                            <div style="width: 100%;padding: 0 10px;">
                                <div class="h2 grid-view-item__title">
                                    <a href="blog-article.php?blog_id=<?php echo $row['blog_id']; ?>" style="font-weight: bold;    font-size: 14px;"><?php echo $row['title']; ?></a>
                                </div>
                                <div class="grid-view-item__meta">
                                    <span class="product-price__price LimitText" style="color: #888;font-size: 13px;"> <?php echo $row['short_desc']; ?> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            
            <?php } ?> 

                                                                </div>                           
                                                        </div>
                                              
                                            </div>
                                        </div>
                                        </article>
                                    </div>
                           
                                </div>
                            </div>
                            <div class="html-section index-section product-banner-grid">
                                    <div class="wrapper" style="padding: 0;">
                                        <div class="home-product-sidebar-wrapper grid--table grid--full" style="text-align: center;margin: 0px 100px;padding: 18px 0px;border: 1px solid #e5e5e5;border-radius: 8px;">
                                            <img style="width: 970px;height:90px;" src="http://wellthoughttech.tech/listing/images/ad/ad1.png">
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
        <script type="text/javascript">
                $(document).on('click', '.btn-reply', function(eve){    
            eve.preventDefault();
            $(this).parent().parent().siblings('.comment-footer').slideToggle();
            eve.stopImmediatePropagation();
            console.log($(this));
        });
        
        $(document).on('click', '.btn-send', function(eve){
            var targetObject = $(this).parent().parent().parent().parent().parent();
            //console.log(targetObject);
            var reply_text = $(this).parent().siblings('textarea').val();

            if($.trim(reply_text) == " " || $.trim(reply_text) == ""){
                alert("insert comment");
            } else {
            if($(targetObject).hasClass("comment-main-level"))
                {   
                    if($(targetObject).siblings('.comments-list.reply-list')) {
                        element_prepend = '<li> <div class="comment-avatar"><img alt="" src="http://dummyimage.com/60"></div><div class="comment-box"> <div class="comment-head"> <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6> <span class="posted-time">Posted on DD-MM-YYYY HH:MM</span> <i class="fa fa-heart"></i> </div> <div class="comment-content">'+ reply_text +' <div class="comment-open"> <a class="btn-reply"> <i class="fa fa-reply"></i> </a> </div> </div> <div class="comment-footer"> <div class="comment-form"> <textarea id="" name="" class="form-control"></textarea> <div class="pull-right send-button"> <a class="btn-send">send</a> </div> </div> </div> </div> </li>';
                         $(targetObject).siblings('.comments-list.reply-list').prepend(element_prepend);
                    }
                }
            }   
        });
        </script>

<?php include('Modal.php');?>
        
  <script src="js/common.js" type="text/javascript"></script>

  <script type="text/javascript">
      function addComment(){
        var blogcmd_name = $('#blogcmd_name').val();
        var blogcmd_email = $('#blogcmd_email').val();
        var blogcmd_message = $('#blogcmd_message').val();
        var blog_id = "<?php echo $curblog['blog_id'] ;?>";
        var atpos=blogcmd_email.indexOf('@');
        var dotpos=blogcmd_email.lastIndexOf('.');
        
        if(blogcmd_name == ''){
            $('#cmd_er1').html('Please Provide Name');
            $('#cmd_er1').css('display','block');
            setTimeout(function() { 
              $('#cmd_er1').css('display','none');    
            },4000);
        }else if(blogcmd_email == ''){
            $('#cmd_er2').html('Please Provide Emai  Address');
            $('#cmd_er2').css('display','block');
            setTimeout(function() { 
              $('#cmd_er2').css('display','none');    
            },4000);
        }else if((atpos<1 || dotpos<atpos+2 || dotpos+2>=blogcmd_email.length)){
            $('#cmd_er2').html('Please Provide Valid Email');
            $('#cmd_er2').css('display','block');
            setTimeout(function() { 
              $('#cmd_er2').css('display','none');    
            },4000);
        }else if(blogcmd_message == ''){
            $('#cmd_er3').html('Please Provide Message');
            $('#cmd_er3').css('display','block');
            setTimeout(function() { 
              $('#cmd_er3').css('display','none');    
            },4000);
        }else{
            
              var url = "add_blog_cmd.php?blogcmd_name="+blogcmd_name+"&blogcmd_email="+blogcmd_email+"&blogcmd_message="+blogcmd_message+"&blog_id="+blog_id;
              console.log(url);
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText.trim();
                    console.log(res);
                    if(res == '1'){
                        location.reload(true);
                       /* $('.CommentMeg').html('Comment Added successfully');
                        $('.CommentMeg').css('color','green');
                        $('.CommentMeg').css('display','block');
                        setTimeout(function() { 
                          $('.CommentMeg').css('display','none');    
                        },4000);*/
                    }
                }
              };
              xhttp.open("GET",url, true);
              xhttp.send();
            
        }
        
    }

  </script>
  

<script type="text/javascript">
    function fmtMSS(s){   // accepts seconds as Number or String. Returns m:ss
  return( s -         // take value s and subtract (will try to convert String to Number)
          ( s %= 60 ) // the new value of s, now holding the remainder of s divided by 60 
                      // (will also try to convert String to Number)
        ) / 60 + (    // and divide the resulting Number by 60 
                      // (can never result in a fractional value = no need for rounding)
                      // to which we concatenate a String (converts the Number to String)
                      // who's reference is chosen by the conditional operator:
          9 < s       // if    seconds is larger than 9
          ? ':'       // then  we don't need to prepend a zero
          : ':0'      // else  we do need to prepend a zero
        ) + s ;       // and we add Number s to the string (converting it to String as well)
}

</script>
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

</body>

</html>