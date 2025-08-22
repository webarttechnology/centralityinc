<!--
__        __   _                _     _____         _                 _                   
\ \      / /__| |__   __ _ _ __| |_  |_   _|__  ___| |__  _ __   ___ | | ___   __ _ _   _ 
\ \ /\ / / _ \ '_ \ / _` | '__| __|   | |/ _ \/ __| '_ \| '_ \ / _ \| |/ _ \ / _` | | | |
\ V  V /  __/ |_) | (_| | |  | |_    | |  __/ (__| | | | | | | (_) | | (_) | (_| | |_| |
\_/\_/ \___|_.__/ \__,_|_|   \__|   |_|\___|\___|_| |_|_| |_|\___/|_|\___/ \__, |\__, |
|___/ |___/ 
-->
<?php
$site_title = get_bloginfo( 'name' );
$site_tagline = get_bloginfo( 'description' );
$custom_logo = get_theme_mod( 'custom_logo' );
$custom_logo_id = attachment_url_to_postid($custom_logo);
$custom_logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Nam mattis sem non elit tristique fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ">
		<meta name="keywords" content="The point of using Lorem Ipsum.">
		<meta name="author" content="<?php echo wp_title('');?>">
		<meta property="og:title" content="<?php echo wp_title('');?>">
		<meta property="og:description" content="Praesent sed felis est. Suspendisse potenti. Quisque posuere volutpat dui, sit amet convallis diam blandit quis.">
		<meta property="og:image" content="<?php echo home_url(); ?>/wp-content/uploads/2025/07/centraliy-og-img.jpg">
		<meta property="og:url" content="<?php the_permalink();?>">
		<meta name="robots" content="index, follow">
		<title>
			<?php
			if (is_front_page()) :
			bloginfo('name'); echo ' | '; bloginfo('description');
			elseif (is_home()) :
			bloginfo('name'); echo ' | Blog';
			elseif (is_single() || is_page()) :
			single_post_title(); echo ' | '; bloginfo('name');
			elseif (is_category()) :
			single_cat_title(); echo ' | '; bloginfo('name');
			elseif (is_tag()) :
			single_tag_title(); echo ' | '; bloginfo('name');
			elseif (is_author()) :
			echo 'Posts by '; the_author(); echo ' | '; bloginfo('name');
			elseif (is_archive()) :
			wp_title(''); echo ' | '; bloginfo('name');
			elseif (is_search()) :
			echo 'Search results for: '; echo get_search_query(); echo ' | '; bloginfo('name');
			elseif (is_404()) :
			echo 'Page not found | '; bloginfo('name');
			else :
			wp_title(''); echo ' | '; bloginfo('name');
			endif;
			?>
		</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
		
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/image/fab.webp">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stellarnav.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<?php wp_head(); ?>
	</head>
	<body data-bs-theme="dark" <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<header>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-11">
						<div class="row justify-content-center align-items-center header-content">
							<div class="col-lg-2">
								<span class="logo">
									<a href="<?php echo home_url(); ?>">
										<?php if ( $custom_logo ) : ?>
										<img src="<?php echo esc_url( $custom_logo ); ?>" alt="<?php echo $custom_logo_alt; ?>" class="img-fluid" />
										<?php else : ?>
										<?php echo $site_title; ?>
										<?php endif; ?>
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
											<a class="btn-button me-2" href="<?php echo esc_url( $header_one_link_url ); ?>" target="<?php echo esc_attr( $header_one_link_target ); ?>">
												<span class="text"><?php echo esc_html( $header_one_link_title ); ?></span>
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
											<a class="btn-button btn-button2" href="<?php echo esc_url( $header_two_link_url ); ?>" target="<?php echo esc_attr( $header_two_link_target ); ?>">
												<span class="text"><?php echo esc_html( $header_two_link_title ); ?></span>
												<span><?php echo esc_html( $header_two_link_title ); ?></span>
											</a>
											<?php endif; ?>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-lg-2 col-md-6">
								<ul class=" right-sidebar align-items-center justify-content-end ">
									<li><a href="#"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fa-solid fa-magnifying-glass"></i></a></li>
									<li>
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