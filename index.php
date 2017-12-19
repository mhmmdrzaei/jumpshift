<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="contentBlog">
    		<?php get_template_part( 'loop', 'index' );	?>

    <div class="sidebarBlog"><?php get_sidebar(); ?></div>

    </div> <!--/.content -->
<?php $the_query = new WP_Query( 'page_id=7' ); ?>
       
            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
   	<div class="contactMain" id="contact">
    <h2>Contact:</h2>
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

    <div class="contactForm">
      <?php the_field('contact_form') ?>
    </div>
  </div>
  <?php endwhile;?>

	


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>