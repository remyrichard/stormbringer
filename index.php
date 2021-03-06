<?php
/**
 * The template for displaying a default Homepage with last posts.
 *
 * @package StormBringer
 * @since StormBringer 0.0.1
 */
?>
<?php get_header(); ?>

<div id="content" role="main">

  <div class="jumbotron">
    <div class="container">
      <h1><?php bloginfo('title'); ?></h1>
      <p><?php bloginfo('description'); ?></p>
      <p><a class="btn btn-primary btn-lg" role="button" href="https://github.com/nicomollet/stormbringer/archive/master.zip"><?php _e('Télécharger', 'stormbringer');?></a></p>
    </div>
  </div>

</div>
<!-- /#content -->

<?php //get_sidebar('home'); ?>

<?php get_footer(); ?>