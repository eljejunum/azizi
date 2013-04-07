				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
					<!--Testimonials Content-->
					<div class="widget" id="testimonials-sidebar">
					<div class="sidebar-spacer"></div>
						<?php global $more; $more = false; # some wordpress wtf logic
					
						$query_array = array(
							'post_type' => 'custom_type',
							'orderby' => 'menu_order title',
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
					
						<div id="testimonials-link"><a href="">More testimonials >></a></div>
						<div class="sidebar-spacer"></div>
					
					</div>
					
					<!--Email Me Content-->
					<div class="widget" id="contact-sidebar">
						
						<h1>HAVE A QUESTION?</h1>
						<p>Email me anytime,<br/>
						just <a href="">click here</a>.</p>
						
					</div>
					
					<!--Practice Areas Content-->
					<div class="widget" id="practice-sidebar">
						<h1>PRACTICE AREAS</h1>
						<table id="practice-table"><tr><td>
						<ul>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
						</ul>
						</td>
						<td>
						<ul>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
						</ul>
						</td></tr></table>
					</div>
					
					
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. 
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>
						-->

					<?php endif; ?>

				</div>