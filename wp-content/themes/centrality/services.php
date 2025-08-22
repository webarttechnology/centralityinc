<?php

// Template Name:Services

get_header();

// include("header.php") 

?>

<section aria-label="section" class="jarallax no-top no-bottom innerPage">
    <!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/background/bg-dark-1.jpg" class="jarallax-img" alt=""> -->
    <div class="v-center">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-9">
                    <div class="spacer-10"></div>
                    <div class="overflow-hidden">
                        <div class="wow custom-anim-left">
                            <h1 class="h1_big mb-2 fadeScroll relative text-uppercase" data-scroll-speed="-2">
                                </span><?=CFS()->get( 'banner_heading_1' ); ?></h1>
                            <h4><?=CFS()->get( 'banner_heading_2' ); ?></h1>
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>












<section id="section-resume">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 wow fadeInUp mb-4">
                <h5 class="wow fadeInUp"><?=CFS()->get( 'section_2_heading_1' ); ?></h1>
                </h5>
                <h2 class="wow custom-scale-in-mask"> <?=CFS()->get( 'section_2_heading_2' ); ?></h1>
                </h2>
                <p><?=CFS()->get( 'section_2_content' ); ?></h1>
                </p>
                <div class="spacer-half"></div>
            </div>
        </div>
        <div class="row gh-5">
            <div class="col-lg-6 wow fadeInUp">
                <div class="p-0" data-bottom-top="transform: translateY(50px);"
                    data-top-bottom="transform: translateY(-50px);">
                    <ul class="d_timeline">

                        <?php

$fields2 = CFS()->get( 'section_2_loop' );
foreach ( $fields2 as $field2 ) {
?>

                        <li class="d_timeline-item wow fadeInUp">
                            <h3 class="d_timeline-title"><?php  echo $field2['section_2_loop_heading']; ?></h3>
                            <p class="d_timeline-text"><?php   echo $field2['section_2_loop_content']; ?></p>
                           <a class="btn-button btn-button2 ms-5" href="https://dwstaging.link/cms/centrality-inc/service-details">
                        <span class="text">View More</span>
                        <span>View More</span>
                    </a>
                            <div class="mb-4 d_timeline-text">
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/fedex.png"
                                        alt="" class="logos"></span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/ups.png" alt=""
                                        class="logos"></span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/usps.png"
                                        alt="" class="logos"></span>
                            </div>
                        </li>

                        <?php
}
 ?>
                        <!-- <li class="d_timeline-item wow fadeInUp">
                                        <h3 class="d_timeline-title">Software Customization</h3>
                                        <p class="d_timeline-text">
                                            Have your clients been asking you for software customization? Are you too busy to help? Ease your burden by letting the developers at  make the requested changes to your software.</p>
                                    </li>
                                    <li class="d_timeline-item wow fadeInUp">
                                        <h3 class="d_timeline-title">Seamless Integrations</h3>
                                        <p class="d_timeline-text">
                                            We can seamlessly integrate your product with the mission-critical systems that your customers use. We will integrate with virtually any on-premise system, cloud software product, or third-party platform.</p>
                                    </li>
                                    <li class="d_timeline-item wow fadeInUp">
                                        <h3 class="d_timeline-title">Plugin/Extension Development</h3>
                                        <p class="d_timeline-text">                                         
                                            We enhance and extend your software by adding on business-centric functionalities. We cater to all your client’s plugin/extension development needs.</p>
                                    </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp">
                <div class="p-0" data-bottom-top="transform: translateY(-50px);"
                    data-top-bottom="transform: translateY(50px);">
                    <ul class="d_timeline">


                        <?php

$fields3 = CFS()->get( 'section_2_loop_2' );
foreach ( $fields3 as $field3 ) {
?>

                        <li class="d_timeline-item wow fadeInUp">
                            <h3 class="d_timeline-title"><?php  echo $field3['section_2_loop_2_heading']; ?></h3>
                            <p class="d_timeline-text"><?php   echo $field3['section_2_loop_2_content']; ?></p>
                            <a class="btn-button btn-button2 ms-5" href="https://dwstaging.link/cms/centrality-inc/service-details">
                        <span class="text">View More</span>
                        <span>View More</span>
                    </a>
                            <div class="mb-4 d_timeline-text">
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/fedex.png"
                                        alt="" class="logos"></span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/ups.png" alt=""
                                        class="logos"></span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/usps.png"
                                        alt="" class="logos"></span>
                            </div>
                        </li>

                        <?php
}
 ?>

                        <!-- <li class="d_timeline-item wow fadeInUp">
                                        <h3 class="d_timeline-title">Custom Implementation</h3>
                                        <p class="d_timeline-text">                                       
                                            Sometimes, software implementation requests from clients are complex. Our developers will simplify the process by configuring, customizing, integrating, and supporting your software.</p>
                                    </li>
                                    <li class="d_timeline-item wow fadeInUp">
                                        <h3 class="d_timeline-title">Migrations and Upgrades</h3>
                                        <p class="d_timeline-text">                                         
                                            We’ll help your new users migrate from a competing software platform to your platform, ensuring that the transition is seamless. Our team can also ensure that users are updated from legacy systems.</p>
                                    </li>
                                    <li class="d_timeline-item wow fadeInUp">
                                        <h3 class="d_timeline-title">Block-of-Hours Support</h3>
                                        <p class="d_timeline-text">                                          
                                            Have your clients encountered issues? Do they want short-term help at a flat rate?  offers technical and non-technical support through our block-of-hours program.</p>
                                    </li> -->
                    </ul>
                </div>
            </div>
        </div>

    </div>

</section>



<!-- <section id="section-portfolio" class="p-0">
                <section class="blur">
                    <div class="container">
                        <div class="single-inner text-dark">
                            <div class="row">
                                <div class="col-md-6" style="padding-left: 50px;">
                                    <div class="single-rht text-white">
                                        <h2 class="ultra-big s2 mb-3">Join Our <span >Partner Program</span></h2>
                                        <h4>Don’t miss out on new business opportunities. Become a  Channel Partner today. To get started, fill out the form below to learn more about the Channel Partner benefits.

</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-lft text-white mt-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Full Name:</label>
                                                <input type="text" class="form-control" id="" placeholder="" name="text">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email:</label>
                                                <input type="email" class="form-control" id="" placeholder="" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Phone:</label>
                                                <input type="text" class="form-control" id="" placeholder="" name="text">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text" class="form-label">Company:</label>
                                                <input type="text" class="form-control" id="text" placeholder="" name="text">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text" class="form-label">HOW CAN WE HELP YOU? *:</label>
                                                <textarea name="" id="" cols="30" rows="10" class="form-control" style="height:100px"></textarea>
                                            </div>
                                            <button type="submit" class="btn-main">SEND INQUIRY</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section> -->


<section id="section-resume" class="d-none">
    <div class="blur-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 wow fadeInUp mb-4">
                    <h5 class="wow fadeInUp"><?=CFS()->get( 'faq_subheading' ); ?></h5>
                    <div class="clearfix"></div>
                    <h2 class="wow custom-scale-in-mask"><?=CFS()->get( 'faq_heading' ); ?></h2>
                    <div class="spacer-half"></div>
                </div>
            </div>
            <div class="row gh-5">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="p-0" data-bottom-top="transform: translateY(50px);"
                        data-top-bottom="transform: translateY(-50px);">
                        <div class="accordion" id="myAccordion">


                            <?php 
                                
                                $ac=1;
                                $fields5 = CFS()->get( 'faq_loop' );
foreach ( $fields5 as $field5 ) {
?>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-<?=$ac; ?>">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-<?=$ac; ?>"><?php echo $field5['faq_loop_heading']; ?></button>
                                </h2>
                                <div id="collapse-<?=$ac; ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="card-body">
                                        <p><?php echo $field5['faq_loop_content']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php
$ac++;
}
  ?>



                            <!-- <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">1. What is HTML?</button>									
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                            <div class="card-body">
                                                <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">2. What is Bootstrap?</button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                                            <div class="card-body">
                                                <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">3. What is CSS?</button>                     
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                            <div class="card-body">
                                                <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp">
                    <div class="p-0" data-bottom-top="transform: translateY(50px);"
                        data-top-bottom="transform: translateY(-50px);">
                        <div class="accordion" id="myAccordion">


                            <?php 
                                
                                $dc=1;
                                $fields6 = CFS()->get( 'faq_loop2' );
foreach ( $fields6 as $field6 ) {
?>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-t-<?=$dc; ?>">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-t-<?=$dc; ?>"><?php echo $field6['faq_loop_heading2']; ?></button>
                                </h2>
                                <div id="collapse-t-<?=$dc; ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="card-body">
                                        <p><?php echo $field6['faq_loop_content2']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php
$dc++;
}
  ?>



                            <!-- <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">1. What is HTML?</button>									
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                            <div class="card-body">
                                                <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFive">2. What is Bootstrap?</button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                                            <div class="card-body">
                                                <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">3. What is CSS?</button>                     
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                            <div class="card-body">
                                                <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


</div>
<!-- content close -->

<?php 

get_footer();
        
        // include("footer.php")
        
        ?>