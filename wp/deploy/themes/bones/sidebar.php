				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
					<!--Search Bar
					<div class="widget" id="search-sidebar">
						<div id="search-element"> 
							<p><?php get_search_form(); ?></p>
						</div>	
					</div>-->
					
					<div class="widget" id="app-sidebar">
						<h1>DOWNLOAD THE FREE <br/>ACCIDENT APP NOW!</h1>
						<p>Accidents happen any time.  Always be prepared with the Accident App by Law Offices of David Azizi.</p>
						<p id="download-apple"><a href="https://itunes.apple.com/us/app/accident-app-by-law-offices/id662722415?ls=1&mt=8" target="_new">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple.png" alt="Accident App for iPhone and iPad">
						</a></p>
						<p id="download-google"><a href="https://play.google.com/store/apps/details?id=com.DAVIDAZIZI&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5EQVZJREFaSVpJIl0." target="_new">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" alt="Accident App for Android">
						</a></p>
						<div class="sidebar-spacer-small">&nbsp;</div> 
					</div>
					
					<div id="sidebar-rate-now" class="sidebar-extra">	
						<a target="_blank" href="http://nr4.me/AziziBeverlyHills"><img border="0" src="http://af91f37067a222fcd0c6-27c64dd07bbbb278bdc4ffa3ef7f7169.r37.cf2.rackcdn.com/NonBrandedRateUsNow.png" style="width:124px;height:65px;" alt="Rate Us" /></a>
					</div>
					
					<div>
					
					<!--Testimonials Content-->
					<div class="widget" id="testimonials-sidebar">
					<div class="sidebar-spacer"></div>
						<h2>TESTIMONIALS</h2>
						<?php global $more; $more = false; # some wordpress wtf logic
					
						$query_array = array(
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name' => 'testimonials',
							'posts_per_page' => '3'
						);
					
						query_posts($query_array);
					
						/** Start the Loop of Posts **/
						if (have_posts()) : while (have_posts()) : the_post();
							$post_id = get_the_ID();
						?>
							<div class="testimonial-content">
								<?php echo get_post_meta($post->ID, 'testimonial-preview', true); ?>
							</div>
							
							<div class="testimonial-cite">
								<?php echo get_post_meta($post->ID, 'testimonial-cite', true); ?>
							</div>
					
						<?php endwhile; endif; ?>
					
						<div id="testimonials-link"><a href="<?php echo home_url(); ?>/category/testimonials">More testimonials >></a></div>
						<div class="sidebar-spacer"></div>
						
					</div>
					
					<!--Email Me Content-->
					<div class="widget" id="contact-sidebar">		
						<h1>HAVE A QUESTION?</h1>
						<?php echo do_shortcode('[contact-form-7 id="267" title="Contact form 2"]'); ?>
						<!-- Commenting Out Content
						<p>Email me anytime,<br/>
						just <a href="#mail-popup" rel="wp-video-lightbox">click here</a>.</p>
						End Comment Out -->
						
					</div>
						<div id="mail-popup" style="display:none;">
							<?php echo do_shortcode('[contact-form-7 id="212" title="Contact form 1"]'); ?>
						</div>
					
					<!--Practice Areas Content-->
					<div class="widget" id="practice-sidebar">
						<h1>PRACTICE AREAS</h1>
						<table id="practice-table"><tr><td>
						<ul>
							<li><a href="<?php echo home_url()?>/amputation-injury">Amputation Injury</a></li>
							<li><a href="<?php echo home_url()?>/bike-accidents">Bike Accidents</a></li>
							<li><a href="<?php echo home_url()?>/brain-injury">Brain Injury</a></li>
							<li><a href="<?php echo home_url()?>/burn-fire-and-explosion-injuries">Burn, Fire, & Explosion Injury</a></li>
							<li><a href="<?php echo home_url()?>/bus-accidents">Bus Accidents</a></li>
							<li><a href="<?php echo home_url()?>/car-accidents">Car Accidents</a></li>
							<li><a href="<?php echo home_url()?>/claims-against-public-government-entities">Claims Against Government/Public Entities</a></li>
							<li><a href="<?php echo home_url()?>/construction-accidents">Construction Accidents</a></li>
							<li><a href="<?php echo home_url()?>/defective-and-dangerous-roads">Dangerous Roads</a></li>
							<li><a href="<?php echo home_url()?>/defective-products">Defective Products</a></li>
							<li><a href="<?php echo home_url()?>/dog-bites-and-attacks">Dog Bites & Attacks</a></li>
						</ul>
						</td>
						<td>
						<ul>
							<li><a href="<?php echo home_url()?>/electrocution-accidents">Electrocution Accidents</a></li>
							<li><a href="<?php echo home_url()?>/motorcycle-accidents">Motorcycle Accidents</a></li>
							<li><a href="<?php echo home_url()?>/negligent-security">Negligent Security</a></li>
							<li><a href="<?php echo home_url()?>/paraplegia-injuries">Paraplegia Injury</a></li>
							<li><a href="<?php echo home_url()?>/pedestrian-accidents">Pedestrian Accidents</a></li>
							<li><a href="<?php echo home_url()?>/quadriplegia-injuries">Quadriplegia Injury</a></li>
							<li><a href="<?php echo home_url()?>/slip-and-fall">Slip & Fall Accidents</a></li>
							<li><a href="<?php echo home_url()?>/spinal-cord-injuries">Spinal Cord Injury</a></li>
							<li><a href="<?php echo home_url()?>/train-accidents">Train Accidents</a></li>
							<li><a href="<?php echo home_url()?>/truck-accidents">Truck Accidents</a></li>
							<li><a href="<?php echo home_url()?>/vehicle-rollovers">Vehicle Rollovers</a></li>
							<li><a href="<?php echo home_url()?>/wrongful-death">Wrongful Death</a></li>
						</ul>
						</td></tr></table>
					</div>
					
					
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

				</div>			