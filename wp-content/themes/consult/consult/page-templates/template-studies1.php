<?php
/*
 * Template Name: Template Studies Style 1
 * Description: A Page Template with a Page Builder design.
 */
$consult_redux_demo = get_option('redux_demo'); 
get_header();
?>
<!-- start page-title -->
<section class="page-title" style="background: url(<?php if(isset($consult_redux_demo['header_studies_image2']['url']) && $consult_redux_demo['header_studies_image2']['url'] != ''){?><?php echo esc_url($consult_redux_demo['header_studies_image2']['url']);?><?php }else{ ?><?php echo '<?php echo get_template_directory_uri();?>/images/page-title/img-8.jpg'; ?><?php } ?>) center center/cover no-repeat local;">
    <div class="container">
        <div class="title-box">
            <h1>
              <?php the_title();?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                <li><?php the_title();?></li>
            </ol>
        </div>
    </div> <!-- end container -->
</section>
<!-- end page-title -->
<section class="case-studies section-padding">
        <div class="container">        
            <div class="row case-studies-grids">
                <?php 
                    $args = array(   
                                'post_type' => 'studies',   
                                'paged' => $paged, 
                            );  
                    $wp_query = new WP_Query($args);
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                ?>
                <div class="col col-md-4 col-xs-6">
                    <div class="grid">
                        <div class="img-holder">
                            <a href="<?php the_permalink();?>">
                                <?php if(has_post_thumbnail()) {?>
                                  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img img-responsive">
                                <?php } ?>
                            </a>
                        </div>
                        <div class="details">
                            <h3><a href="<?php the_permalink();?>"><?php if(get_post_meta(get_the_ID(),'_cmb_studies_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_studies_title', true));?> <?php } ?></a></h3>
                            <span>
                                <?php the_terms( get_the_ID(), 'stud', '', ' , ' ); ?>
                            </span>
                            <a href="<?php the_permalink();?>" class="view-case-studes"><?php if(isset($consult_redux_demo['read_more'])){?>
                                      <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['read_more']));?>
                                      <?php }else{?>
                                        <?php echo esc_html__( 'Read More', 'consult' );
                                      }
                                    ?> 
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="page-pagination">
                        <?php consult_pagination(); ?>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
<?php
get_footer();
?>