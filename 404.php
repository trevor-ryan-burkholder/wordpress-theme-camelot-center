<?php get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class="col-sm-8">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'camelot'); ?> 404</h1>
          <p><?php _e('The page you were looking for does not exist.', 'camelot'); ?></p>
        </div>
      </div><!-- /#content -->
    </div>
    
    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>