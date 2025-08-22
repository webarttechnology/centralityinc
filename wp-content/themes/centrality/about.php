<?php

// Template Name: About

get_header();

// include("header.php") 

?>

<section aria-label="section" class="jarallax no-top no-bottom innerPage">
    <!-- <img src="images/background/bg-dark-1.jpg" class="jarallax-img" alt=""> -->
    <div class="v-center">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-9">
                    <div class="spacer-10"></div>
                    <div class="overflow-hidden">
                        <div class="wow custom-anim-left">
                            <h1 class="h1_big mb-5 fadeScroll relative" data-scroll-speed="-2">
                                <?=CFS()->get( 'about_banner' ); ?></h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="section-about" class="industries">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 relative" id="">
                <div class="sidebar">
                    <div class="headings">
                        <h2 class="big"><?=CFS()->get( 'section_2_heading' ); ?>
                        </h2>
                        <p><?=CFS()->get( 'section_2_content' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7" id="contents">
                <div class="contents">

                    <?php 

$fields = CFS()->get( 'section_2_loop' );
foreach ( $fields as $field ) {
?>

                    <div class="box">
                        <!-- <span><img src="images/001-app-development.png" alt=""></span> -->
                        <h3><?php echo $field['section_2_loop_heading']; ?></h3>
                        <p><?php  echo $field['section_2_loop_content']; ?></p>
                    </div>

                    <?php
}

?>

                    <!-- <div class="box">
                                   
                                    <h3>Real-Time Communication</h3>
                                    <p>Our application developers work within your time zone to allow real-time collaboration and a true “branch location” feel, ensuring full availability during your business hours.</p>
                                </div>
                                <div class="box">
                                    
                                    <h3>Scalability & Support</h3>
                                    <p>We work with you based on your software development objectives to bring you the most value and the quickest return on investment while defining tactics and a dedicated team to your project.

</p>
                                </div>
                                <div class="box">
                                   
                                    <h3>Industry-Specific Experience</h3>
                                    <p>Our software developers are organized in virtual divisions, carrying the domain experience and know-how within the industry to offer exceptional application development solutions.</p>
                                </div>
                                <div class="box">
                                    
                                    <h3>Source Code & IP Ownership</h3>
                                    <p>Our fully customizable software solutions require no licensing fees upon project completion. Under our agreement, you will own the source code and intellectual property of your proprietary software.</p>
                                </div> -->
                </div>

            </div>
        </div>
    </div>
</section>

<section id="section-services" aria-label="section" style="background-color: #242424;">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-5" data-bottom-top="transform: translateY(-50px);"
                    data-top-bottom="transform: translateY(50px);">

                    <?php 

$fields2 = CFS()->get( 'section_3_loop_1' );
foreach ( $fields2 as $field2 ) {
?>

                    <div class="col-lg-6 col-6 wow fadeIn" data-wow-delay="0">
                        <div class="de_count text-center">
                            <h3 class="timer" data-to="20000" data-speed="2500">
                                <?php  echo $field2['section_3_loop_1_text_1']; ?></h3>
                            <span><?php  echo $field2['section_3_loop_1_text_2']; ?></span>
                        </div>
                    </div>

                    <?php
}


?>
                    <!-- <div class="col-lg-6 col-6 wow fadeIn" data-wow-delay="0">
                                    <div class="de_count text-center">
                                        <h3 class="timer" data-to="20000" data-speed="2500">0</h3>
                                        <span>APPS BUILT</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6 wow fadeIn" data-wow-delay=".25s">
                                    <div class="de_count text-center">
                                        <h3 class="timer" data-to="7000" data-speed="2500">0</h3>
                                        <span>HAPPY CUSTOMERS</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6 wow fadeIn" data-wow-delay=".5s">
                                    <div class="de_count text-center">
                                        <h3 class="timer" data-to="47" data-speed="2500">0</h3>
                                        <span>REPEAT AND REFERRAL BUSINESS</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6 wow fadeIn" data-wow-delay=".75s">
                                    <div class="de_count text-center">
                                        <h3 class="timer" data-to="2800" data-speed="2500">0</h3>
                                        <span>DEVELOPERS</span>
                                    </div>
                                </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme" id="carousel__testimonial">

                    <?php 
                        
                        $fields3 = CFS()->get( 'section_3_loop_2' );
foreach ( $fields3 as $field3 ) {
?>

                    <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                        <i class="d-big icon_quotations"></i>
                        <?php echo $field3['testimonial']; ?>
                        <span class="d-quote-by"> <?php echo $field3['author']; ?></span>
                    </blockquote>

                    <?php
}

                        ?>

                    <!-- <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                                    <i class="d-big icon_quotations"></i>
                                    Centrality really helped us speed up the development of our new code projects without taking on expensive new in-house developers. The Centrality team has also given us greater flexibility as we develop new modules and features.
                                    <span class="d-quote-by">Will Atkinson, President of CAP Software</span>
                                </blockquote>

                                <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                                    <i class="d-big icon_quotations"></i>
                                    Centrality seemed too good to be true, but it really was true. I was impressed by the efficiency of the on-shore/off-shore model, and by the overall methodology and project management discipline. We will be using Centrality again.
                                    <span class="d-quote-by">Jackie Parker, President of Harvest Trends</span>
                                </blockquote> -->

                    <!-- <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                                    <i class="d-big icon_quotations"></i>
                                    Our project was completed on time and within budget, and the results speak for themselves. He truly went above and beyond to ensure our satisfaction, and we couldn't be happier with the outcome.
                                    <span class="d-quote-by">Olivia Johnson</span>
                                </blockquote>

                                <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                                    <i class="d-big icon_quotations"></i>
                                    His creativity and expertise shine through in every aspect of the design, resulting in a website that not only looks fantastic but also performs flawlessly.
                                    <span class="d-quote-by">Ethan Davis</span>
                                </blockquote> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-portfolio" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="wow fadeInUp"><?=CFS()->get( 'outstanding_text' ); ?></h5><br>
                <h2 class="wow custom-scale-in-mask"><?=CFS()->get( 'recognition_heading' ); ?></h2>
                <div class="spacer-single"></div>
            </div>
        </div>
        <div id="items-carousel" class="owl-carousel owl-theme sequence mb-4">

            <?php 
                    
                    $fields4 = CFS()->get( 'recognition_loop' );
foreach ( $fields4 as $field4 ) {
    
    
?>

            <div class="item overflow-hidden">
                <div class="wow custom-anim-right">
                    <div class="card-image-1 mod-c">
                        <a href="project-single-1.html">
                            <div class="d-text">
                                <h3><?php echo $field4['recognition_loop_heading']; ?></h3>
                            </div>
                            <img src="<?php echo $field4['recognition_loop_image']; ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <?php
}
                    
                    ?>

            <!-- <div class="item overflow-hidden">
                            <div class="wow custom-anim-right">
                                <div class="card-image-1 mod-c">
                                    <a href="project-single-1.html">
                                        <div class="d-text">
                                            <h3>HISTORY</h3>
                                        </div>                                    
                                        <img src="<?php //echo get_template_directory_uri(); ?>/images/gallery/1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item overflow-hidden">
                            <div class="wow custom-anim-right">
                                <div class="card-image-1 mod-c">
                                    <a href="project-single-1.html">
                                        <div class="d-text">
                                            <h3>NEWSROOM</h3>
                                            
                                        </div>                                    
                                        <img src="<?php //echo get_template_directory_uri(); ?>/images/gallery/2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item overflow-hidden">
                            <div class="wow custom-anim-right">
                                <div class="card-image-1 mod-c">
                                    <a href="project-single-1.html">
                                        <div class="d-text">
                                            <h3>THE Centrality FOUNDATION</h3>
                                            
                                        </div>                                    
                                        <img src="<?php //echo get_template_directory_uri(); ?>/images/gallery/3.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item overflow-hidden">
                            <div class="wow custom-anim-right">
                                <div class="card-image-1 mod-c">
                                    <a href="project-single-1.html">
                                        <div class="d-text">
                                            <h3>CULTURE</h3>
                                          
                                        </div>                                    
                                        <img src="<?php //echo get_template_directory_uri(); ?>/images/gallery/4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div> -->
        </div>
        <div class="row g-4">

            <?php 

$it=1;
$fields5 = CFS()->get( 'recognition_loop2' );
foreach ( $fields5 as $field5 ) {
    
?>

            <div class="col-lg-4 col-6">
                <div class="de-skill-item bg-white p-2"
                    data-bottom-top="transform: translateX(<?php echo ($it===1 || $it===2 || $it===3) ? '-150' : '150'; ?>px);"
                    data-top-bottom="transform: translateX(<?php echo ($it===1 || $it===2 || $it===3) ? '150' : '-150'; ?>px);">
                    <img src="<?php echo $field5['recognition_loop2_image']; ?>" alt="">
                </div>

            </div>

            <?php
$it++;
}

?>

            <!-- <div class="col-lg-4 col-6">
                            <div class="de-skill-item bg-white p-2" data-bottom-top="transform: translateX(-150px);" data-top-bottom="transform: translateX(150px);">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/logo/2020-sfbj-business-of-the-year-award-badge-award.png" alt="">         
                            </div>

                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="de-skill-item bg-white p-2" data-bottom-top="transform: translateX(-150px);" data-top-bottom="transform: translateX(150px);">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/logo/aba23_bronze_winner.png" alt="">                  
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="de-skill-item bg-white p-2" data-bottom-top="transform: translateX(-150px);" data-top-bottom="transform: translateX(150px);">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/logo/crn-tech-elite-250-2023.png" alt="">       
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="de-skill-item bg-white p-2" data-bottom-top="transform: translateX(150px);" data-top-bottom="transform: translateX(-150px);">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/logo/forbes-2023.png" alt="">         
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="de-skill-item bg-white p-2" data-bottom-top="transform: translateX(150px);" data-top-bottom="transform: translateX(-150px);">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/logo/iba23-silver-winner.png" alt="">  
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="de-skill-item bg-white p-2" data-bottom-top="transform: translateX(150px);" data-top-bottom="transform: translateX(-150px);">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/logo/inc5000-emblem-new.png" alt="">    
                            </div>
                        </div> -->
        </div>
    </div>
</section>

<section id="section-resume" class="p-0">
    <section class="whiteBlug">
        <div class="container">
            <div class="single-inner text-dark text-center">
                <h2 class="text-dark ultra-big s2"><?=CFS()->get( 'partnership_heading' ); ?></h2>

                <div class="row mt-4 justify-content-center">
                    <div class="col-md-10">
                        <ul class="row partners">

                            <?php 
                                    
                                    $fields6 = CFS()->get( 'partnership_loop' );
foreach ( $fields6 as $field6 ) {
    
?>

                            <li class="mt-3 col-6 col-sm-4 col-md-3"><img
                                    src="<?php echo $field6['partnership_loop_image']; ?>" alt="" class="img-fluid">
                            </li>

                            <?php
}
                                    
                                    ?>

                            <!-- <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/autodesk-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/aws-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/bigcommerce-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/ibm-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/magento-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/microsoft-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/netsuite-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/oracle-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/salesforce-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/sap-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/uipath-grey.png" alt="" class="img-fluid"></li>
                                        <li class="mt-3 col-6 col-sm-4 col-md-3"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo/unity-grey.png" alt="" class="img-fluid"></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</div>
<!-- content close -->

<?php 
        
        get_footer();
        // include("footer.php") 
        ?>