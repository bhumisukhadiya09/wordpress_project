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
    <section class="case-study-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <?php while (have_posts()): the_post(); ?>
                        <div class="case-details" <?php post_class(); ?>>
                            
                            <div class="service-details">
                                <?php the_content();?>
                                <?php wp_link_pages(  ); ?>
                            </div>
                        </div> <!-- end post -->
                    <?php endwhile; ?>
                </div> <!-- end blog-content -->

                <div class="col col-lg-3 col-lg-offset-1 col-md-4">
                    <div class="sidebar">
                        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        <?php endif; ?>
                    </div>                    
                </div>                    
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-single-content -->
<?php
get_footer();
?>