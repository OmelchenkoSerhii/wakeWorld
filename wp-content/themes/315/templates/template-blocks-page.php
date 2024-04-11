<?php
/*
Template Name: Blocks Page
*/
?>

<?php get_header(); ?>

  <div class="page-blocks">
      <?php 
        if ( ! post_password_required() ) :
          the_acf_loop();
        else :
          echo get_the_password_form();
        endif;
      ?>
  </div>
    
<?php get_footer(); ?>