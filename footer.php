<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

<!-- begin footer -->

<div class="container-fluid">

  <div class="row global-footer">

    <div class="global-footer">






     <div class="col-xs-12 signup-form">

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//radcircle.us8.list-manage.com/subscribe/post?u=18674465258fdaabcbc0d322b&amp;id=87eae85dc6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <h2 class="mce-email"><span class="hyperlink"><a name="mailing-list" class="mailing-list-anchor">Enter your email address below.</a></span> <br> Get exclusive access to the latest and greatest.</h2>
<div class="mc-field-group">

  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_18674465258fdaabcbc0d322b_87eae85dc6" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->


     </div>
    
      <div class="col-xs-12 col-md-10 col-md-offset-1 social-footer">
        <a href="https://facebook.com/Radcircle"><i class="fa fa-facebook-square facebook"></i></a>
        <a href="https://twitter.com/Radcircle"><i class="fa fa-twitter twitter"></i></a>
        <a href="https://soundcloud.com/Radcircle"><i class="fa fa-soundcloud soundcloud"></i></a>
        <a href="https://youtube.com/user/Radcircle"><i class="fa fa-youtube youtube"></i></a>
      </div>

      <!-- BEGIN LINK VERTICALS -->

      <div class="col-md-8 col-md-offset-2 footer-verticals">

        <div class="col-xs-12 col-sm-4 col-md-4 fv-left">
          <ul>
          <a href="http://radcircle.com"><li>Home</li></a>
          <a href="http://radcircle.com/about/"><li>About</li></a>
          <a href="http://radcircle.com/about/story.html"><li>Story</li></a>
          <a href="http://radcircle.com/about/vision.html"><li>Vision</li></a>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 fv-center">
          <ul>
          <a href="http://radcircle.com/team"><li>Team</li></a>
          <a href="http://radcircle.com/our-adventure/"><li>Join</li></a>
          <a href="http://radcircle.com/internships/"><li>Internships</li></a>
          <a href="http://radcircle.com/our-adventure/"><li>Adventure</li></a>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 fv-right">
          <ul>
          <a href="http://radcircle.com/static/contact.html"><li>Contact</li></a>
          <a href="http://radcircle.com/static/policies.html"><li>Privacy</li></a>
          <a href="http://radcircle.com/static/policies.html#dmca"><li>DMCA</li></a>
          <a href="http://radcircle.com/static/policies.html"><li>Terms</li></a>
          </ul>
        </div>

      </div>



      <div class="col-xs-12 footer-logo">
          <a href="http://radcircle.com"><img src="http://radcircle.com/images/assets/logo-256-transparent.png"></a>
          <p>Copyright Radcircle 2013-2014. All Rights Reserved.</p>
      </div>

    </div>

  </div> <!-- close row global-footer -->

</div> <!-- close container fluid -->

<!-- end footer -->


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://radcircle.com/wp-content/themes/2Plus1/js/owl.carousel.js"></script>


<script>
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    items : 2,
    lazyLoad : true,
    navigation : false,
    autoPlay: 5000,
    itemsScaleUp: true,
  }); 
 
});
</script>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>
	</body>
</html>




