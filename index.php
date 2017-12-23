<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="contentBlog">
    		<div class="blogMainPage"><?php get_template_part( 'loop', 'index' );  ?></div>

    <div class="sidebarBlog"><?php get_sidebar(); ?></div>

    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>