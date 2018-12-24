<?php
/*
 * Template Name: Template Careers Vacancy
 * Description: A Page Template with a Page Builder design.
 */
$consult_redux_demo = get_option('redux_demo'); 
get_header();
?>
<!-- start page-title -->
<section class="page-title" style="background: url(<?php if(isset($consult_redux_demo['header_careers_image']['url']) && $consult_redux_demo['header_careers_image']['url'] != ''){?><?php echo esc_url($consult_redux_demo['header_careers_image']['url']);?><?php }else{ ?><?php echo '<?php echo get_template_directory_uri();?>/images/page-title/img-8.jpg'; ?><?php } ?>) center center/cover no-repeat local;">
    <div class="container">
        <div class="title-box">
            <h1>
              <?php the_title();?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                <li><a><?php echo esc_html__( 'Pages', 'consult' ); ?></a></li>
                <li><?php the_title();?></li>
            </ol>
        </div>
    </div> <!-- end container -->
</section>
<!-- end page-title -->
<!-- start careers-vacancy-content -->
<section class="careers-vacancy-content section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9 col-md-8">
                <div class="vacancy-details">
                    <?php while (have_posts()) : the_post()?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="col col-lg-3 col-md-4">
                <div class="sidebar">
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end careers-vacancy-content -->
<?php
get_footer();
?>