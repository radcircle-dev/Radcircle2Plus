<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
				?>

<div class="container-fluid">
	<div class="row post">			
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-10 the-post">


				<div class="col-xs-12 col-md-10 col-md-offset-1">
				<h1 class="post-title"><?php the_title(); // Display the title of the post ?></h1></div>

				<div class="col-xs-12 col-md-8 col-md-offset-2">
				<span class="the-date"><i class="fa fa-clock-o"></i> <?php the_time('l, F jS, Y') // Display the time it was published ?> </span>
				<span class="the-author">By <?php the_author(); // Uncomment this and it will display the post author ?></span>
						
						<div class="the-content">
							<?php the_content(); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
						</div><!-- the-content -->
				</div>

				<div class="col-xs-12 col-md-10 col-md-offset-1">
							<div class="the-category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
							<div class="the-tags"><?php echo get_the_tag_list( '&nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
						</div><!-- Meta -->

					<div class="col-xs-12 col-md-12 the-post-artwork" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center fixed !important;     -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    max-height: 100vh;
    height: 100rem;
    min-height: 500px;
    margin-top: 8rem;">


					</div>
		</div>				
	</div>
</div>
				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
