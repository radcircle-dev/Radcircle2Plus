<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>





<div class="container-fluid">
<div id="owl-demo" class="owl-carousel">

  <div class="item">
  <img class="lazyOwl" data-src="http://radcircle.com/wp-content/uploads/2014/09/Windy.jpg" alt="Emerson Windy Interview Radcircle">
  <span class="featured-item-label">Exclusive</span>
  <a href="http://radcircle.com/2014/09/interview-emerson-windy-talks-new-album-working-with-rap-heavyweights-scratch-n-sniff-cds-more/">
  <h2 class="featured-item">Exclusive Interview: Emerson Windy Talks New Album, Working With Rap Heavyweights, Scratch-N-Sniff CDs &amp; More</h2>
  </a>
  </div>

  <div class="item">
  <img class="lazyOwl" data-src="http://oi60.tinypic.com/2sb49w7.jpg" alt="Lazy Owl Image">
  <span class="featured-item-label">Featured</span>
  <a href="http://radcircle.com/2014/09/listen-to-4-brand-new-big-sean-songs/">
  <h2 class="featured-item">Big Sean's got four brand new songs. Have you heard them yet?</h2>
  </a>
  </div>




</div> <!-- end carousel -->
</div>




<div class="container-fluid">

			

	<div class="rad-main-content row">

<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>


<div class="col-md-6 home-post-box">

<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main-post-itself" style="background: url(<?php echo $src[0]; ?> ) !important; 
background-size: 100% !important;">


          <div class="main-the-date"> <!-- IMPORTANT TOP LINE AKA DATE -->

          <div class="homepage-date-container">

              <div class="homepage-date">
                <p>
                <span class="homepage-date--dayname"><?php the_time('M'); // Display the time published ?></span> 
                <br> 
                <span class="homepage-date--number"><?php the_time('d'); // Display the time published ?></span>
                </p>
              </div>

            </div>     
                   
          </div> <!-- ends date, in, cat -->


          <!-- title -->
          <a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
          <h1 class="main-post-title" id="main-post-title-link"><?php the_title(); // Show the title of the posts as a link ?></h1>
          </a>

          <div class="main-the-author">
          <a href="<?php the_author_url(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></a>
          </div>

</div>
</div>

      <!-- end one post box -->

<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
				



			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>

<!-- - - = = = = = =  = = = = = = = = = = -->
  </div>
</div>			
						
		<div class="container-fluid pagenavigation">
					<div class="past-page"><?php previous_posts_link( '<-- back' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
					<div class="next-page"><?php next_posts_link( 'more -->' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>

		</div>		

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>