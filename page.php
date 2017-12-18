<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_post_thumbnail('large'); ?>
       
        <div class="about"><h2><?php the_content(); ?></h2>
        </div>
         <div class="readMore">Read More</div>

         



      <?php endwhile; // end the loop?>
    <!-- sevices -->
    <h2> Services:</h2>
     <?php while( has_sub_fields('services') ): ?>
    <div class="services">
       <h3><?php the_sub_field('services_title'); ?></h3>
       <div class="serviceMain">
         <?php the_sub_field('services_description'); ?>
       </div>
    </div>
      <?php endwhile;//end of services ?>

    <!-- Blog and Video -->
<div class="blogMain">
  <h2>Blog:</h2>
    <?php while( has_sub_fields('hero_video') ): ?>
    <div class="Vimeo">
      
        <?php the_sub_field('video_stylings'); ?>
        <div class="embed-container">
          <?php the_sub_field('embedded_video_link'); ?>
        </div>
    </div>
    <?php endwhile;//end of vimeo ?>
    <div class="blogposts">
      <div class="updates">
        <?
          $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3 );
          query_posts( $args ); // hijack the main loop
          while ( have_posts() ) : the_post();
            ?>
        <div class="update">
         <a href="<? the_permalink(); ?>"><h4><? the_title(); ?></h4></a>
          <div class="entry-content">
            <?
            the_excerpt();
            ?>
            <div class="readMore"><a href="<? the_permalink(); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  Read More</a></div>
          </div>
           <?
          endwhile;
          ?>
          <?
          wp_reset_query();
          ?> 
        </div> 
        <div class="moreBlog">
      
            <a href="<?php echo get_permalink(9) ?>"> See All Blog Posts</a>
          </div>
      </div>
    </div>
  </div>
  <div class="contactMain">
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
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>