<?php ?>
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
                                                <a style="color: #4285F4;" href="index.php" >Jlo<span style="color: #50d8af;">da</span>
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
                                                        <a style="color: #4285F4;font-size: 36px;" href="index.php" >Jlo<span style="color: #50d8af;">da</span>
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
                                                            <a href="business.php" class="site-nav__link site-nav__link--icon">
                                                                <span class="icon-fallback-text">
                                                                    <i class="fa fa-archive"></i>
                                                                </span>
                                                                <span class="name">Create <b  style="font-size: 15px;    color: green;">LIVE</b> Store</span>
                                                            </a>
                                                        </li>
                                    
                                                        <li class="site-nav__item">
                                                            <a href="professional.php" class="site-nav__link site-nav__link--icon ">
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
                                        
                                                       <?php 
                                                     if(!isset($_SESSION['user_id'])){
                                                       ?>
                                                        <li class="site-nav__item site-nav__expanded-item">
                                                                <a class="site-nav__link site-nav__link--icon js-login-modal" data-mfp-src="#LoginModal">
                                                                    <span class="icon-fallback-text">
                                                                        <span class="icon icon-customer" aria-hidden="true"></span>
                                                                        <span class="fallback-text">Log In </span>
                                                                    </span>
                                                                    <span class="name">Account</span>
                                                                </a>
                                                            </li>
                                                        <?php } else { ?> 
                                                    <li class="site-nav__item site-nav__expanded-item">
                                                                <a>
                                                                    <span class="icon icon-customer" aria-hidden="true"></span>
                                                    <select name="SortBy" id="SortBy" onchange="locationChange(this.value)">
                                                    <option value="">Account</option>
                                                    <option value="user_dashboard.php">Dashboard</option>
                                                    <option value="user_profile.php">Profile</option>
                                                    <option value="blog-article-home.php">Blogs</option>
                                                    <option value="logout.php">Logout</option>
                                                    </select>
                                                                </a>
                                                            </li>
                                                        <?php } ?>

                                                <li class="site-nav__item site-nav__expanded-item">
                                                        <a id="showSearch"  class="site-nav__link site-nav__link--icon">
                                                            <span class="icon-fallback-text">
                                                                <span class="icon icon-search" aria-hidden="true"></span>
                                                                <span class="fallback-text">Search </span>
                                                            </span>
                                                            <span class="name">Search</span>
                                                        </a>
                                                    </li>
                                                
                                                <li class="site-nav__item">
                                                    <a href="cart.html" class="site-nav__link site-nav__link--icon">
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
                                <div id="searchNav" style="display:none;" class="grid--full grid--table">
                                    <div class="grid__item large--show medium-down--hide smal--hide">
                                        <div class="header-logo grid__item large--one-fifth"></div>
                                        <div class="grid__item header-search large--three-fifths large--text-right medium-down--one-half small--hide">
                                            <div style="display: inline-flex;width: 100%;">
                                                <select style="height: 45px;border-right: 1px solid #eee;">
                                                    <option value=""> Bangalore</option>
                                                </select>
                                                <input type="search" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Search here">
                                                <button type="submit" class="btn btn2 btn--full" style="width: 20%;"><i class="fa fa-search" style="font-size:1.5em;"></i></button>
                                            </div>
                                        </div>
                                        <div class="grid__item large--one-fifth large--text-right small--hide"></div>
                                    </div>
                                </div>
                            </div>
                        </header>