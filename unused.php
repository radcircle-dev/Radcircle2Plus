						<div class="post-meta">
							 | 
							<?php if( comments_open() ) : // If we have comments open on this post, display a link and count of them ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); 
									// Display the comment count with the applicable pluralization
									?>
								</span>
							<?php endif; ?>
						
						</div><!--/post-meta -->


					<div class="the-content">
							<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
						</div><!-- the-content -->
		
						<div class="meta clearfix">
							<div class="the-category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
							<div class="the-tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
						</div><!-- Meta -->


					<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
					<div class="next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
				</div><!-- pagination -->









