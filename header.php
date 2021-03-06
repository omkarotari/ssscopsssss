 <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email d-flex align-items-center">
                                <i class="fa fa-envelope"></i><a href="#">pharmacycollegesawarde@yahoo.in</a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text lg-flex align-items-center">
                                <p><i class="fa fa-phone"></i>(02355) 264106</p>
                            </div><!-- .header-bar-text -->
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                            <!--<div class="header-bar-search">
                                <form class="flex align-items-stretch">
                                    <input type="search" placeholder="What would you like to learn?">
                                    <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- .header-bar-search -->

                            <div class="header-bar-menu">
                                <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                                    <li><a href="alumni.php">Alumni Register</a></li>
                                </ul>
                            </div><!-- .header-bar-menu -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->
	<?php
	$cur_page_arr = explode("/",$_SERVER['PHP_SELF']);
	$cur_page = $cur_page_arr[count($cur_page_arr)-1]; 
	
	if($cur_page == 'index')
	{ $index='current-menu-item';}
	
	?>
            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.php" rel="home">SSS<span>COPS</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class=<?php if($cur_page =='index.php'){ echo 'current-menu-item';} ; ?>><a href="index.php">Home</a></li>
                                    <li class=<?php if($cur_page =='about.php'){ echo 'current-menu-item';} ?>><a href="about.php">About College</a></li>
                                    <li class=<?php if($cur_page =='aboutsanstha.php'){ echo 'current-menu-item';} ?> ><a href="aboutsanstha.php">About Sanstha</a></li>
                                    <li class=<?php if($cur_page =='course.php'){ echo 'current-menu-item';} ?>><a href="course.php">Course Profile</a></li>
									<li class=<?php if($cur_page =='imageGallery.php'){ echo 'current-menu-item';} ?>><a href="imageGallery.php">Image Gallery</a></li>
                                    <li class=<?php if($cur_page =='contact.php'){ echo 'current-menu-item';} ?>><a href="contact.php">Contact</a></li>
                                </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->