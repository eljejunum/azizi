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
							'order' => 'ASC',
							'category_name' => 'testimonials',
							'posts_per_page' => '3'
						);
					
						query_posts($query_array);
					
						/** Start the Loop of Posts **/
						if (have_posts()) : while (have_posts()) : the_post();
							$post_id = get_the_ID();
						?>
							<div class="testimonial-content">
								<?php the_content(); ?>
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
						<p>Email me anytime,<br/>
						just <a href="mailto:<?php echo get_option( 'admin_email', '' ); ?>">click here</a>.</p>
						
					</div>
					
					<!--Practice Areas Content-->
					<div class="widget" id="practice-sidebar">
						<h1>PRACTICE AREAS</h1>
						<table id="practice-table"><tr><td>
						<ul>
							<li>Amputation Injury</li>
							<li>Bike Accidents</li>
							<li>Brain Injury</li>
							<li>Burn, Fire, & Explosion Injury</li>
							<li>Bus Accidents</li>
							<li>Car Accidents</li>
							<li>Claims Against Government/Public Entities</li>
							<li>Construction Accidents</li>
							<li>Dangerous Roads</li>
							<li>Defective Products</li>
							<li>Dog Bites & Attacks</li>
						</ul>
						</td>
						<td>
						<ul>
							<li>Electrocution Accidents</li>
							<li>Motorcycle Accidents</li>
							<li>Negligent Security</li>
							<li>Paraplegia Injury</li>
							<li>Pedestrian Accidents</li>
							<li>Quadriplegia Injury</li>
							<li>Slip & Fall Accidents</li>
							<li>Spinal Cord Injury</li>
							<li>Train Accidents</li>
							<li>Truck Accidents</li>
							<li>Vehicle Rollovers</li>
							<li>Wrongful Death</li>
						</ul>
						</td></tr></table>
					</div>
					
					
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

				</div>