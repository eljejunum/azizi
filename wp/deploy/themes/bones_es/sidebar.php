				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
					<!--Search Bar
					<div class="widget" id="search-sidebar">
						<div id="search-element"> 
							<p><?php get_search_form(); ?></p>
						</div>	
					</div>-->
					
					<div class="widget" id="app-sidebar">
						<h1>DESCARGA LA APLICACIÓN GRATIS PARA LOS ACCIDENTES!</h1>
						
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
					
					<!--Testimonials Content-->
					<div class="widget" id="testimonials-sidebar">
					<div class="sidebar-spacer"></div>
						<h2>TESTIMONIOS</h2>
						<?php global $more; $more = false; # some wordpress wtf logic
					
						$query_array = array(
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'ASC',
							'category_name' => 'testimonios',
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
					
						<!--<div id="testimonials-link"><a href="<?php echo home_url(); ?>/category/testimonios">Mas Testimonios >></a></div>-->
						<div class="sidebar-spacer"></div>
					
					</div>
					
					<!--Email Me Content-->
					<div class="widget" id="contact-sidebar">		
						<h1>¿TIENE UNA PREGUNTA?</h1>
						<?php echo do_shortcode('[contact-form-7 id="329" title="Sidebar Contact"]'); ?>
						<!--content removed
						<p>Envienos un correo electronico en cualquier momento,<br/>
						haga <a href="#mail-popup" rel="wp-video-lightbox">click aqui</a>.</p>
						-->
					</div>
						<div id="mail-popup" style="display:none;">
							<?php echo do_shortcode('[contact-form-7 id="210" title="Contact form 1"]'); ?>
						</div>
					
					<!--Practice Areas Content-->
					<div class="widget" id="practice-sidebar">
						<h1>AREAS DE PRÁCTICA</h1>
						<table id="practice-table"><tr><td>
						<ul>
							<li><a href="<?php echo home_url()?>/accidente-en-autobus">Accidente en Autobús</a></li>
							<li><a href="<?php echo home_url()?>/accidente-en-camion">Accidente en Camión</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-auto-que-se-voltio">Accidentes de Auto que se Voltio</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-biciclete">Accidentes de Biciclete</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-caminos-peligrosos">Accidentes de Caminos Peligrosos</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-coche">Accidentes de Coche</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-construccion">Accidentes de construcción</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-electrocucion">Accidentes de Electrocución</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-motocicleta">Accidentes de Motocicleta</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-peatones">Accidentes de Peatones</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-resbalon-y-caida">Accidentes de Resbalón y Caída</a></li>
							<li><a href="<?php echo home_url()?>/accidentes-de-tren">Accidentes de Tren</a></li>
						</ul>
						</td>
						<td>
						<ul>
							<li><a href="<?php echo home_url()?>/herida-de-cuadriplegia">Herida de Cuadriplegía</a></li>
							<li><a href="<?php echo home_url()?>/herida-de-medula-espinal">Herida de Médula Espinal</a></li>
							<li><a href="<?php echo home_url()?>/herida-de-paraplejia">Herida de Paraplejía</a></li>
							<li><a href="<?php echo home_url()?>/heridas-de-amputacion">Heridas de Amputación</a></li>
							<li><a href="<?php echo home_url()?>/heridas-de-cerebro">Heridas de Cerebro</a></li>
							<li><a href="<?php echo home_url()?>/productos-defectuosos">Heridas de Productos Defectuosos</a></li>
							<li><a href="<?php echo home_url()?>/heridas-fuero-o-explosion">Heridas Fuero o Explosión</a></li>
							<li><a href="<?php echo home_url()?>/los-reclamos-contra-entidades-de-publicogobierno">Los reclamos Contra Entidades de Público/Gobierno</a></li>
							<li><a href="<?php echo home_url()?>/mordeduras-de-perro-y-ataques">Mordeduras de Perro y Ataques</a></li>
							<li><a href="<?php echo home_url()?>/muerte-injusta">Muerte Injusta</a></li>
							<li><a href="<?php echo home_url()?>/seguridad-negligente">Seguridad Negligente</a></li>
						</ul>
						</td></tr></table>
					</div>
					
					
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

				</div>			