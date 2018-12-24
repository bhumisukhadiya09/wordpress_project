<?php
/*
 * Template Name: Template Team style 2
 * Description: A Page Template with a Page Builder design.
 */
$consult_redux_demo = get_option('redux_demo'); 
get_header();
?>
<!-- start page-title -->
<section class="page-title" style="background: url(<?php if(isset($consult_redux_demo['header_team_image']['url']) && $consult_redux_demo['header_team_image']['url'] != ''){?><?php echo esc_url($consult_redux_demo['header_team_image']['url']);?><?php }else{ ?><?php echo '<?php echo get_template_directory_uri();?>/images/page-title/img-8.jpg'; ?><?php } ?>) center center/cover no-repeat local;">
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
<!-- start team-s2-content -->
<section class="team-s2-content section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9 col-md-8">
                <div class="row team-s2-grids">
                    <?php 
                        $args = array(   
                                    'post_type' => 'team',   
                                    'paged' => $paged, 
                                );  
                        $wp_query = new WP_Query($args);
                        while ($wp_query -> have_posts()) : $wp_query -> the_post();
                    ?>
                        <div class="col col-lg-4 col-xs-6">
                            <div class="img-holder">
                                <?php if(has_post_thumbnail()) {?>
                                  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img img-responsive">
                                <?php } ?>
                            </div>
                            <div class="member-details">
                                <h3><?php if(get_post_meta(get_the_ID(),'_cmb_team_name', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_team_name', true));?> 
                                                <?php } ?></h3>
                                <span><?php if(get_post_meta(get_the_ID(),'_cmb_team_job', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_team_job', true));?> 
                                                <?php } ?></span>
                                <p><?php if(get_post_meta(get_the_ID(),'_cmb_team_intro', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_team_intro', true));?> 
                                                <?php } ?></p>
                                <a href="<?php the_permalink();?>" class="view-profile"><?php if(isset($consult_redux_demo['read_more'])){?>
                                      <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['read_more']));?>
                                      <?php }else{?>
                                        <?php echo esc_html__( 'View Profile', 'consult' );
                                      }
                                    ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="row page-pagination-row">
                    <div class="col col-xs-12">
                        <div class="page-pagination">
                            <?php consult_pagination(); ?>
                        </div>
                    </div>
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
<!-- end team-s2-content -->
<?php
get_footer('parallax');
?>