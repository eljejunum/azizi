				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
					<!--Search Bar-->
					<div class="widget" id="search-sidebar">
						<div id="search-element"> 
							<p><?php get_search_form(); ?></p>
						</div>	
					</div>
					
					<!--Testimonials Content-->
					<div class="widget" id="testimonials-sidebar">
					<div class="sidebar-spacer"></div>
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
							<li><a href="<?php echo home_url()?>/bus-accidnets">Bus Accidents</a></li>
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