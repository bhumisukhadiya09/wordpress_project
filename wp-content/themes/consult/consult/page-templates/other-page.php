<?php
/**
 * Template Name: Other Page
 */
 $consult_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if (have_posts()){ ?>
    
                        <?php while (have_posts()) : the_post()?>

            <!-- Inner Banner Wrapper Start -->
<div class="inner-banner" style=" background-image: url(<?php echo esc_url($consult_redux_demo['header_background']['url']); ?>);">
                <div class="container">
                  <div class="col-sm-12">
                    <h2><?php the_title();?></h2>
                  </div>
                  <div class="col-sm-12 inner-breadcrumb">
                    <ul>
                      <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                      <li><?php the_title();?></li>
                    </ul>
                  </div>
                </div>
              </div>
            <!-- Inner Banner Wrapper End -->

                        
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    
                    <?php }else {
                        echo esc_html__('Page Canvas For Page Builder', 'consult'); 
                    }?>

                    

<?php
get_footer();
?>