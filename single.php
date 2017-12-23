<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="contentBlog">
      <div class="blogMainPage">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>

          <div class="entry-meta">
            <h5><?php hackeryou_posted_on(); ?></h5>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php while( has_sub_fields('video_blog') ): ?>
            <div class="videoBlogBlog">
              
                <?php the_sub_field('video_stylings_blog'); ?>
                <div class="embed-container">
                  <?php the_sub_field('embedded_link_blog'); ?>
                </div>
            </div>
            <?php endwhile;//end of vimeo ?>

            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->


      <?php endwhile; // end of the loop. ?>
    </div>
    <div class="sidebarBlog"><?php get_sidebar(); ?></div>
    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>