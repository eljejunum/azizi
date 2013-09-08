<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">
						
						<p>Is this working?</p>
						
					    <?php if (have_posts()) : while (have_posts()) : the_post(); 
					    	get_template_part( 'content', get_post_format() );
					    	$post_ID = get_the_ID();
					    ?>
						
						
						
					    <article id="post-<?php $post_ID; ?>" role="article" class="<?php post_class('clearfix'); ?>" >
						
						    <header class="article-header">
								<h1><a href="<?php the_permalink(); ?> rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
							    <?php the_excerpt(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
    							<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

						    </footer> <!-- end article footer -->
					
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
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="entry-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
