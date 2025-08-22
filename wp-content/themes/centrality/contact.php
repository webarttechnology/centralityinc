<?php 

// Template Name: Conatct

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
                                <?=get_field('banner_heading'); ?></h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="section-resume" class="p-0">
    <section class="blur">
        <div class="container">
            <div class="single-inner text-dark text-location">
                <h2 class="text-white ultra-big s2"><?=get_field('section_2_heading'); ?></h2>

                <div class="row justify-content-center">
                    <div class="col-md-3 single-rht text-white">
                        <i class="fa-solid fa-phone"></i> <a href="tel: +1 289 246 1617">T: +1 289 246 1617</a>

                    </div>
                    <div class="col-md-3 single-rht text-white">
                        <i class="fa-solid fa-message"></i><a
                            href="mailto:support@centralityinc.ca">support@centralityinc.ca</a>
                    </div>
                  
                    <div class="col-md-8">
                        <!-- <div class="single-lft text-white mt-4">
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
                                            <button type="submit" class="btn-main">Submit</button>
                                        </form>
                                    </div> -->
                        <?php echo do_shortcode('[contact-form-7 id="035209c" title="Contact-us form"]'); ?>
                    </div>
                    <!-- <div class="col-md-4 mt-5" style="padding-left: 50px;">
                        <div class="single-rht text-white"> -->

                    <?php /*
                                    
                                    $fields = CFS()->get( 'contact_loop' );
foreach ( $fields as $field ) {
?>

                    <h3><?php echo $field['contact_icons']; ?> <?php echo $field['contact_data']; ?></h3>

                    <?php
}
                                    
                                    */?>

                    <!-- <h3><i class="fa-solid fa-phone"></i> 954 342 5676</h3>
                                        <h3><i class="fa-solid fa-phone"></i> +44 137 243 2466</h3>
                                        <h3><i class="fa-solid fa-message"></i> (954) 800 2477</h3>
                                        <h3><i class="fa-solid fa-envelope"></i> sales@Glenspring.com</h3>
                                        <h3><i class="fa-solid fa-fax"></i> (305) 832 5987</h3> -->



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