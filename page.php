<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_post_thumbnail('large'); ?>
       
        <div class="about" id="about"><h2><?php the_content(); ?></h2>
        </div>
         <div class="readMore" id="button"><h2>Read More</h2></div>

         



      <?php endwhile; // end the loop?>
    <!-- sevices -->
    <h2 id="services"> Services:</h2>
    <div class="services">
      
       <?php while( has_sub_fields('services') ): ?>
      <div class="servicesEach">
         <h3><?php the_sub_field('services_title'); ?></h3>
         <div class="serviceMain">
           <?php the_sub_field('services_description'); ?>
         </div>
      </div>
        <?php endwhile;//end of services ?>

        <div class="seviceContact">
          <h2>
            Want to know more?

            <a href="#contact"><div class="serviceButton">Contact Me</div></a>
          </h2>
        </div>
      </div>

    <!-- Blog and Video -->
<div class="blogMain" id="blog">
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
          $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 2 );
          query_posts( $args ); // hijack the main loop
          while ( have_posts() ) : the_post();
            ?>
        <div class="update">
         <a href="<? the_permalink(); ?>"><h4><? the_title(); ?></h4></a>
          <div class="entry-content">
            <?
            the_excerpt();
            ?>
              
            </div>
          </div>
           <?
          endwhile;
          ?>
          <?
          wp_reset_query();
          ?> 
        </div> 
        <div class="moreBlog">
      
            <a href="<?php echo get_permalink(9) ?>"><h2> See All Blog Posts</h2></a>
          </div>
      </div>
    </div>
  </div>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>