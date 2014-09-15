<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<html lang="en" class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 

<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>


	    <link href="http://radcircle.com/wp-content/themes/2Plus1/stylesheets/style.css" rel="stylesheet">
	    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	    <link href="http://radcircle.com/wp-content/themes/2Plus1/css/bootstrap.css" rel="stylesheet">

	    <!-- CAROUSEL CSS COMBINE THIS IF POSSIBLE -->
	    <link href="http://radcircle.com/wp-content/themes/2Plus1/css/owl.carousel.css" rel="stylesheet">
	    <link href="http://radcircle.com/wp-content/themes/2Plus1/css/owl.theme.css" rel="stylesheet">



  		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
> <!-- end body start class-->



<div id="global-radcircle-search-bar">

	SEARCH GO 

</div>

<!-- first row, logo -->

    <div class="topleft hidden-xs">
      <div class="topleft-social-container">
        <a href="https://facebook.com/Radcircle"><i class="fa fa-facebook-square facebook"></i></a>
        <a href="https://twitter.com/Radcircle"><i class="fa fa-twitter twitter"></i></a>
        <a href="https://soundcloud.com/Radcircle"><i class="fa fa-soundcloud soundcloud"></i></a>
        <a href="https://youtube.com/user/Radcircle"><i class="fa fa-youtube youtube"></i></a>
        <i class="fa fa-search radcircle-search-bar"></i>
          <a href="#mailing-list" class="mailing-list-header">Mailing List</a>
      </div>
      </div>

    <div class="topright hidden-xs">
      <h5><a href="http://radcircle.com/static/contact.html">Contact Us</a> <span class="topright-divider">/</span> <a href="http://radcircle.com/submit/submit.html">Submit Music</a></h5>
    </div>

	<div class="logo">
		<a href="http://radcircle.com">
        	<img src="http://radcircle.com/images/assets/logo-256-transparent.png">
      	</a>
	</div>



	<div class="navigation col-md-12">

	<a href="http://radcircle.com"><span class="icon-home-house-streamline"></span><h4>home </h4></a>
    <a href="http://radcircle.com/about"><span class="icon-earth-globe-streamline"></span><h4>about</h4></a>
    <a href="http://radcircle.com/team"><span class="icon-male-female"></span><h4>team</h4></a>
    <!--<a href="#"><span class="icon-music-note-streamline"></span><h4>music</h4></a>-->
    <a href="http://radcircle.com/playlists"><span class="icon-settings-streamline"></span><h4>playlists</h4></a>
    <a href="http://radcircle.com/static/underground.html"><span class="icon-diamond"></span><h4>underground</h4></a>

	</div>



	<div class="underbar col-xs-12 underbar-index">   
     </div>





