 <!-- footer begin -->
        <!-- <footer class="blurBg">
            <div class="container">
                <div class="footer-inner blur-wrapper">
                    <div class="row">
                    <div class="footer_left col-sm-6">
                        <span class="logo">
                            <a href="<?php echo get_site_url(); ?>"><img src="<?=get_field('logo',10); ?>" alt="" class="mb-3"></a>
                        </span>
                        
                    </div>
                    <div class="footer-nav col-sm-6 row">
                    <div class="nav-column col-sm-6">
                        <h6 class="mb-2">RESOURCES</h6>
                        <?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '', 'items_wrap' => '<ul class="footer__nav_list">%3$s</ul>' )); ?>
                        
                    </div>

                    <div class="nav-column col-sm-6 mb-3">
                        <h6 class="mb-2">LEGAL</h6>
                        <//?php wp_nav_menu( array('menu' => 'Footer Menu2', 'container' => '', 'items_wrap' => '<ul class="footer__nav_list">%3$s</ul>' )); ?>
                       
                        </ul>
                    </div>
                    </div>
                   
                    </div>
                    <hr>
                    <div class="footer__copyrights">
                        <ul class="copyrights__list d-flex justify-content-between">
                            <li class="copyrights__list_item">
                                <div class="copyrights__list_link"><//?=get_field('copyright_text',10); ?></div>
                            </li>
                            <li class="copyrights__list_item">
                                <a href="#" class="copyrights__list_link"><//?=get_field('email_text',10); ?></a>
                            </li>
                            <li class="copyrights__list_item">
                                <//?=get_field('design_&_developed_text',10); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- footer close -->
         	<footer class="p-v-100 pb-5">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-11">
						<div class="top-footer">
							<ul class="social">
								<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
							</ul>
<!-- 							<div class="contact">
								<p>Contact Phone: <a href="tel:1-866- 744-1657">1-866- 744-1657</a> <a
																									   href="tel:905-865-7796">905-865-7796</a></p>
							</div> -->
							<div class="row mb-5">
								<div class="col-lg-9 col-md-12">
									<div class="row justify-content-start">
										<div class="col-lg-4 col-md-4">
											<div class="footer-list">
												<h5>Solutions</h5>
												<ul>
													<li><a href="#">Managed Services</a></li>
													<li><a href="#">Managed IT</a></li>
													<li><a href="#">Cloud</a></li>
													<li><a href="#">Security (SECaaS)</a></li>
													<li><a href="#">Connectivity</a></li>
													<li><a href="#">Infrastructure & Hosting</a></li>
												</ul>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="footer-list">
												<h5>Tech Transformation</h5>
												<ul>
													<li><a href="#">Cloud Migration</a></li>
													<li><a href="#">Remote Working</a></li>
													<li><a href="#">24/7 Monitoring</a></li>
													<li><a href="#">ISDN Switch Off</a></li>
													<li><a href="#">Compliance & Data Management</a></li>
													<li><a href="#">AI & Machine Learning</a></li>
													<li><a href="#">Digital Transformation</a></li>
												</ul>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="footer-list">
												<h5>Solutions</h5>
												<ul>
													<li><a href="#">Registered head office:
														</a></li>
													<li><a href="#">101-114 Holloway Head</a></li>
													<li><a href="#">Birmingham, B1 1QP.</a></li>
													<li class="mt-5"><a href="tel: +1 289 246 1617">T: +1 289 246 1617</a></li>
													<li><a href="mailto:support@centralityinc.ca">support@centralityinc.ca</a>
													</li>
													
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-12">
									<div class="footer-logo">
										<span class="logo">
											<a href="<?php echo home_url(); ?>">
												<img src="https://dwstaging.link/cms/centrality-inc/wp-content/uploads/2025/07/centrality-inc-1.webp" alt="logo" class="img-fluid" />
											</a>
										</span>
										<form>
											<input type="email" class="form-control" placeholder="Enter your email ID">
											<button class="btn-button w-100 mt-3" href="#">
												<span class="text">Enter to subscribe</span>
												<span>Enter to subscribe</span>
											</button>
										</form>
									</div>
								</div>
							</div>
							<hr>
							<div class="bottom-footer mt-5">
								<ul class="d-flex justify-content-between">
									<li>© 2025 <a href="#">Intercity</a>. All Rights Reserve</li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Modern Slavery</a></li>
									<li><a href="#">Codes of Practice</a></li>
									<li><a href="#">Registered in England, Company Registration Number 01938625</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</footer>   
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/designesia.js"></script>  
    <!-- <script src="js/custom-marquee.js"></script>    
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>   -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				jQuery('.stellarnav').stellarNav({
					breakpoint: 991,
					position: 'right',

				});
			});
		</script>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var sidebar = document.getElementById('sidebar');
            var footer = document.querySelector('#section-services');
            var sidebarHeight = sidebar.offsetHeight;
            var footerOffsetTop = footer.offsetTop;
            var footerHeight = footer.offsetHeight;
            var scrollPosition = window.scrollY;

            if (scrollPosition >= sidebarHeight && scrollPosition < footerOffsetTop - (window.innerHeight / 1.5)) {
                sidebar.classList.add('fixed');
            } else {
                sidebar.classList.remove('fixed');
            }
        });
    </script>

<?php wp_footer(); ?>

</body>
</html>