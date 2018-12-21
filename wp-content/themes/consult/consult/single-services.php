<?php
/**
 * The Template for displaying all single posts
 */ 
 $consult_redux_demo = get_option('redux_demo');
get_header('single'); ?>
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="title-box">
                <h1><?php the_title();?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                    <li><?php the_title();?></li>
                </ol>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- start blog-single-content -->
    <section class="service-single-content-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-push-4 col-md-8 service-st2-content">
                    <?php while (have_posts()): the_post(); ?>
                        <div class="service-single-content" <?php post_class(); ?>>
                            
                            <div class="service-details">
                                <?php the_content();?>
                                <?php wp_link_pages(  ); ?>
                            </div>
                        </div> <!-- end post -->
                    <?php endwhile; ?>
                </div> <!-- end blog-content -->

                <div class="sidebar col col-lg-3 col-lg-pull-9 col-md-4 col-md-pull-8">
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    <?php endif; ?>
                </div>                    
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-single-content -->
<?php
get_footer();
?>