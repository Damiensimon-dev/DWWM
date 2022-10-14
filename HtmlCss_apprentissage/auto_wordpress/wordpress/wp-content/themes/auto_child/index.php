<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Automobile Lite
 */
get_header(); ?>
<main id="maincontent" role="main">
  <div class="middle-align container">
    <?php
      $vw_automobile_lite_left_right = get_theme_mod( 'vw_automobile_lite_theme_options','Right Sidebar');
    ?>
      <div class="row">
        <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php echo 'test'; 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'paged'     => $paged,
            'post_type' => 'vehicule','post_status' => 'publish'
          );
          $the_query = new WP_Query($args);
          if ( $the_query -> have_posts() ) :
            while ( $the_query ->have_posts() ) : $the_query -> the_post();
              get_template_part( 'template-parts/content' , get_post_format() );
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
    <div class="clearfix"></div>
  </div>
</main>
<?php get_footer(); ?>