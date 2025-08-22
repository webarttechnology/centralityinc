<?php

// Template Name:Home

get_header();

// include("header.php") 

?>

<section aria-label="section" class="jarallax no-top no-bottom">
    <!-- <img src="images/background/bg-dark-1.jpg" class="jarallax-img" alt=""> -->
    <div class="v-center">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-9">
                    <div class="spacer-10"></div>
                    <div class="overflow-hidden">
                        <div class="wow custom-anim-left">
                            <h1 class="h1_big mb-5 fadeScroll relative" data-scroll-speed="-2">
                                <?=get_field('banner_heading'); ?></h1>
                            <a class="btn-main fadeScroll relative" href="<?=get_field('banner_button_link'); ?>"
                                data-scroll-speed="-6"><?=get_field('banner_button_text'); ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a href="#section-about" class="mouse-icon-click scroll-to wow fadeInUp" data-wow-delay="1.6s">
        <span class="mouse fadeScroll relative" data-scroll-speed="10">
            <span class="scroll"></span>
        </span>
    </a>
</section>
<section id="section-about" class="industries">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 relative" id="sidebar">
                <div class="sidebar">
                    <div class="headings">
                        <small><?=CFS()->get( 'section_2_heading_1' ); ?></small>
                        <h2 class="big"><?=CFS()->get( 'section_2_heading_2' ); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-7" id="contents">
                <div class="contents">


                    <?php 
                            
                            $fields = CFS()->get( 'section_2_loop' );
foreach ( $fields as $field ) {
?>

                    <div class="box pb-5">
                        <!-- <span><img src="images/001-app-development.png" alt=""></span> -->
                        <h3><?php echo $field['section_2_loop_heading']; ?></h3>
                        <p><?php echo $field['section_2_loop_content']; ?></p>
                        <span><a class="btn-main"
                                href="<?php echo $field['section_2_loop_button_link']; ?>"><?php echo $field['section_2_loop_button_text']; ?></a></span>
                    </div>
                    <?php
}
 ?>

                    <!-- <div class="box">
                                  
                                    <h3>APP Developers </h3>
                                    <p>Our team of software developers can build exceptional applications across a breadth of devices including desktop, mobile and tablet. With the help of our industry expertise, we are able to give the end user the best application experience across multiple channels.</p>
                                    <span><a class="btn-main" href="#">Learn More</a></span>
                                </div>
                                <div class="box">
                                   
                                    <h3>On-Demand Developers</h3>
                                    <p>We are proud to employ over 2,800 in-house developers with a variety of software development experience in an array of industries. This enables us to be a one-stop shop, removing the hassles of managing multiple vendors, logistics, and technological bottlenecks.</p>
                                    <span><a class="btn-main" href="#">Learn More</a></span>
                                </div>
                                <div class="box">
                                   
                                    <h3>Product Support</h3>
                                    <p>We partner with other industry leaders to deploy superior software solutions for our clients. Our certified developers are capable of implementing new software, seamlessly integrating it to your organization as well as providing support for any future upgrades.</p>
                                    <span><a class="btn-main" href="#">Learn More</a></span>
                                </div> -->
                </div>

            </div>
        </div>
    </div>
</section>

<section id="section-services" class="services">
    <div class="blur-wrapper">
        <div class="container">
            <div class="methe-inner">
                <div class="row pb-5 align-items-center">
                    <div class="col-md-6">
                        <div class="left">
                            <h2 class="big"><span
                                    style="color: var(--primary-color2);"><?=CFS()->get( 'section_3_heading' ); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right text-end">
                            <a class="btn-main relative"
                                href="<?=CFS()->get( 'section_3_button_link' ); ?>"><?=CFS()->get( 'section_3_button_text' ); ?></a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">


                    <?php 
                            
                            $fields2 = CFS()->get( 'section_3_loop' );
foreach ( $fields2 as $field2 ) {
?>
                    <div class="col-md-6 pb-5 text-light">
                        <h4><?php echo $field2['section_3_loop_heading']; ?></h4>
                        <p><?php echo $field2['section_3_loop_content']; ?></p>
                    </div>
                    <?php
}
 ?>

                    <!-- <div class="col-md-6 pb-5 text-light">
                                    <h4>Real-Time Communication</h4>
                                    <p>Our application developers work within your time zone to allow real-time collaboration and a true “branch location” feel, ensuring full availability during your business hours.</p>
                                </div>
                                <div class="col-md-6 pb-5 text-light">
                                    <h4>Scalability & Support
                                    </h4>
                                    <p>We work with you based on your software development objectives to bring you the most value and the quickest return on investment while defining tactics and a dedicated team to your project.
                                    </p>
                                </div>
                                <div class="col-md-6 pb-5 text-light">
                                    <h4>Industry-Specific Experience
                                    </h4>
                                    <p>Our software developers are organized in virtual divisions, carrying the domain experience and know-how within the industry to offer exceptional application development solutions.
                                    </p>
                                </div>
                                <div class="col-md-6 pb-5 text-light">
                                    <h4>Source Code & IP Ownership
                                    </h4>
                                    <p>Our fully customizable software solutions require no licensing fees upon project completion. Under our agreement, you will own the source code and intellectual property of your proprietary software.</p>
                                </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-my-quote" aria-label="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-11 col-md-8">
                <div class="bug-inner text-center">
                    <span><?=get_field('section_4_heading_1'); ?></span>
                    <h2 class="big d-block mt-3 mb-5"><?=get_field('section_4_heading_2'); ?></h2>
                    <p><?=get_field('section_4_content'); ?></p>
                    <span><a class="btn-main"
                            href="<?=get_field('section_4_button_link'); ?>"><?=get_field('section_4_button_text'); ?></a></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="section-resume" class="p-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="" data-bottom-top="transform: translateX(-150px);"
                    data-top-bottom="transform: translateX(150px);">
                    <div class="de_count">
                        <h1 class="animatedText ultra-big text-uppercase"><?=get_field('section_4_heading_3'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="whiteBlug">
        <div class="container">
            <div class="single-inner text-dark">
                <h2 class="text-dark ultra-big s2"><span
                        style="color: var(--primary-color2);"><?=get_field('section_5_heading_1'); ?></h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="single-lft">
                            <a href="#">(coming soon)</a>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left: 50px;">
                        <div class="single-rht">
                            <p><?=get_field('section_5_content'); ?></p>
                            <span><a class="btn-main"
                                    href="<?=get_field('section_5_button_link'); ?>"><?=get_field('section_5_button_text'); ?></a></span>
                        </div>
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