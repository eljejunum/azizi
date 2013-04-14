<?php 
/*
Template Name: Blog Page Template
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">
					    
					    <section id="blog-page-header">
					    	<?php echo $post->post_content; ?>
					    </section>
					    <!-- END Page Header -->
					    
					    <div id="blog-feed">
						
						<?php 
							$temp = $wp_query; 
							$wp_query= null;
							$wp_query = new WP_Query();
							$wp_query->query('posts_per_page=5'.'&paged='.$paged);
							while ($wp_query->have_posts()) : $wp_query->the_post();
						?>

							<article id="post-<?php $post_ID; ?>" role="article" class="<?php post_class('clearfix'); ?>" >
						
								<header class="article-header">
									<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>						
								</header> <!-- end article header -->
					
								<section class="entry-content clearfix">
									<?php the_excerpt(); ?>
								</section> <!-- end article section -->
					
							</article> <!-- end article -->
								
								
								
							<?php endwhile; ?>
							
							<?php if (function_exists('bones_page_navi')) { ?>
					            <?php bones_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>
					        
					    <?php $wp_query = null; $wp_query = $temp;?>	
						
						</div>
						
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
