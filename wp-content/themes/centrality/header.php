<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>Centrality|</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=<?php bloginfo( 'charset' ); ?>" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bootstrap" />

    <!-- site fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stellarnav.min.css">

    <link href="<?php echo get_template_directory_uri(); ?>/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo get_template_directory_uri(); ?>/css/coloring.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class('onepage dark-scheme'); ?>>
    <div class="fixbg">
        <!-- <video loop autoplay muted >
    <source src="<//?php echo get_template_directory_uri(); ?>/video/video.mp4" type="video/mp4">
    </video> -->
    </div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row justify-content-center align-items-center header-content">
                            <div class="col-lg-2">
                                <span class="logo">
                                    <a href="https://dwstaging.link/cms/centrality-inc/">
                                        <img src="https://dwstaging.link/cms/centrality-inc/wp-content/uploads/2025/07/centrality-inc-1.webp"
                                            alt="centrality-inc" class="img-fluid"/>
                                    </a>
                                </span>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <nav>
                                    <div class="stellarnav menu">
                                        <?php
										wp_nav_menu(array(
											'theme_location' => 'main_menu',
											'container' => '',
											'items_wrap' => '<ul>%3$s</ul>',
										));
										?>
                                    </div>
                                    <ul class=" right-sidebar align-items-center phone">
                                        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                                        <li>
                                            <?php 
											$header_button_one = get_field('header_button_one', 'option');
											if( $header_button_one ): 
											$header_one_link_url = $header_button_one['url'];
											$header_one_link_title = $header_button_one['title'];
											$header_one_link_target = $header_button_one['target'] ? $header_button_one['target'] : '_self';
											?>
                                            <a class="btn-button me-2"
                                                href="<?php echo esc_url( $header_one_link_url ); ?>"
                                                target="<?php echo esc_attr( $header_one_link_target ); ?>">
                                                <span
                                                    class="text"><?php echo esc_html( $header_one_link_title ); ?></span>
                                                <span><?php echo esc_html( $header_one_link_title ); ?></span>
                                            </a>
                                            <?php endif; ?>
                                            <?php 
											$header_button_two = get_field('header_button_two', 'option');
											if( $header_button_two ): 
											$header_two_link_url = $header_button_two['url'];
											$header_two_link_title = $header_button_two['title'];
											$header_two_link_target = $header_button_two['target'] ? $header_button_one['target'] : '_self';
											?>
                                            <a class="btn-button btn-button2"
                                                href="<?php echo esc_url( $header_two_link_url ); ?>"
                                                target="<?php echo esc_attr( $header_two_link_target ); ?>">
                                                <span
                                                    class="text"><?php echo esc_html( $header_two_link_title ); ?></span>
                                                <span><?php echo esc_html( $header_two_link_title ); ?></span>
                                            </a>
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <ul class=" right-sidebar align-items-center justify-content-end">
                                    <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                                    <li class="d-flex">
                                        <!-- <a class="btn-button me-2" href="#">
                                            <span class="text">Careers</span>
                                            <span>Careers</span>
                                        </a> -->
                                        <a class="btn-button btn-button2" href="#">
                                            <span class="text">Login</span>
                                            <span>Login</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="header-v2 header-full transparent d-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="<?php echo get_site_url(); ?>">
                                            <img src="<?=get_field('logo',10); ?>" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col">
                                <!-- <div class="menu_side_area">
                                    <span id="de-menu-reveal">
                                        <span class="lt"></span>
                                        <span class="lm"></span>
                                        <span class="lb"></span>
                                    </span>
                                </div> -->

                                <nav class="navBar">

                                    <?php wp_nav_menu( array('menu' => 'Header Menu', 'container' => '', 'items_wrap' => '<ul class="d-flex">%3$s</ul>' )); ?>

                                    <!-- <ul class="d-flex">
                                        <li><a href="#">INDUSTRIES <i class="fa-solid fa-angle-down"></i></a>
                                            <ul class="subMenu">
                                                <li><a href="<?php //get_site_url(); ?>/agriculture">Agriculture</a></li>
                                                <li><a href="#">Environmental Management</a></li>
                                                <li><a href="#">Media & Entertainment</a></li>
                                                <li><a href="#">Real Estate</a></li>
                                                <li><a href="#">Agriculture</a></li>
                                                <li><a href="#">Environmental Management</a></li>
                                                <li><a href="#">Media & Entertainment</a></li>
                                                <li><a href="#">Real Estate</a></li>
                                                <li><a href="#">Agriculture</a></li>
                                                <li><a href="#">Environmental Management</a></li>
                                                <li><a href="#">Media & Entertainment</a></li>
                                                <li><a href="#">Real Estate</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">SOLUTIONS <i class="fa-solid fa-angle-down"></i></a></li>
                                        <li><a href="<?php //get_site_url(); ?>/services">Services <i class="fa-solid fa-angle-down"></i></a></li> -->
                                    <!-- <li><a href="#">On-Demand Developers</a></li>
                                        <li><a href="#">Portfolio <i class="fa-solid fa-angle-down"></i></a></li> -->
                                    <!-- <li class="subMenuSmall"><a href="#">Company <i class="fa-solid fa-angle-down"></i></a>
                                            <ul class="subMenu">
                                                <li><a href="about.php">About us</a></li>
                                                <li><a href="awards.php">Awards</a></li>
                                                <li><a href="channel-partner-program.php">Channel Partner Program</a></li>
                                                <li><a href="events.php">events</a></li>
                                            </ul>
                                        </li> -->
                                    <!-- <li><a href="blogs.php">Blog</a></li> -->
                                    <!-- <li><a href="#">Support</a></li>
                                        <li><a href="<?php //get_site_url(); ?>/about-us">About us</a></li>
                                        <li><a href="<?php //get_site_url(); ?>/contact-us">Contact</a></li>
                                    </ul> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- <div id="de-menu-container">
            <div class="mainmenu-v2-wrap">
                <ul id="mainmenu-v2">
                    <li><a class="active" href="#top">Home<span></span></a></li>
                    <li><a href="#section-about">About me<span></span></a></li>
                    <li><a href="#section-services">What I Do<span></span></a></li>
                    <li><a href="#section-portfolio">Portfolio<span></span></a></li>
                    <li><a href="#section-resume">My Resume<span></span></a></li>
                    <li><a href="#section-blog">Blog<span></span></a></li>
                    <li><a href="#section-contact">Contact Me<span></span></a></li>
                </ul>
            </div>
        </div> -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <div class="float-text show-on-scroll">
                <span><a href="#">Scroll to top</a></span>
            </div>
            <div class="scrollbar-v show-on-scroll"></div>


            <div id="de_modal">
                <button class="button-close"></button>
                <div class="d-modal-loader"></div>
            </div>
            <!-- load external content close -->
			
			
			 <div class="offcanvas search-bar offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="form">
                <label for="search">
                    <input required="" autocomplete="off" placeholder="search.." id="search" type="text">
                    <div class="icon">
                        <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="swap-on">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round"
                                stroke-linecap="round"></path>
                        </svg>
                        <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="swap-off">
                            <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round" stroke-linecap="round">
                            </path>
                        </svg>
                    </div>
                    <button type="reset" class="close-btn">
                        <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </label>
            </form>
        </div>
    </div>