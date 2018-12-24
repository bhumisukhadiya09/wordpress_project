<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
$consult_redux_demo = get_option('redux_demo'); 
get_header(); ?>
  <section class="sec404 text-center">
      <div class="title404">
          <h2><?php echo esc_html__( '404 Page', 'consult' );?></h2>
          <p class="desc404"><?php echo esc_html__( 'Page Not Found ....!', 'consult' );?></p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn404"><?php echo esc_html__( 'Go Home', 'consult' ); ?></a>
      </div>
  </section>
<?php
get_footer();
?>