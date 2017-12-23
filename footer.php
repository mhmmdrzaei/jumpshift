<footer>
  <div class="containerFooter">
    <?php $the_query = new WP_Query( 'page_id=7' ); ?>
       
            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
   	<div class="contactMain" id="contact">
    <h2>Contact:</h2>
    <div class="contactSide">
      <div class="contactText">
        <?php the_field('contact_text') ?>
      </div>
      <div class="email">
      
        <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
      </div>
      <div class="phone">
        <?php the_field('phone_number') ?>
      </div>
      <div class="socialMediaMain">
        <?php while( has_sub_fields('social_media_links') ): ?>
          <a href="<?php the_sub_field('social_media_link'); ?>"><?php the_sub_field('social_media_symbol'); ?></a>
        <?php endwhile;//end of social media loop ?>
      </div>
    </div>

    <div class="contactForm">
      <?php the_field('contact_form') ?>
    </div>
  </div>
  <h5 class="footerCredit">	&copy; Jump Shift Fitness. Website by <a href="http://www.mohammadrezaei.com/">Mohammad Rezaei</a></h5>
  <?php endwhile;?>

  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>