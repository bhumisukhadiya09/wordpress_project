<?php
/*
 * Template Name: Template Blog Sidebar Left
 * Description: A Page Template with a Page Builder design.
 */
$consult_redux_demo = get_option('redux_demo'); 
get_header();
?>
<!-- start page-title -->
    <section class="page-title" style="background: url(<?php if(isset($consult_redux_demo['header_blog_image']['url']) && $consult_redux_demo['header_blog_image']['url'] != ''){?><?php echo esc_url($consult_redux_demo['header_blog_image']['url']);?><?php }else{ ?><?php echo '<?php echo get_template_directory_uri();?>/images/page-title/img-1.jpg'; ?><?php } ?>) center center/cover no-repeat local;">
        <div class="container">
            <div class="title-box">
                <h1>
                  <?php if(isset($consult_redux_demo['blog_title'])){?>
                    <?php the_title();?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Latest Insights', 'consult' );
                  } ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                    <li><?php the_title();?></li>
                </ol>
            </div>
        </div> <!-- end container -->
    </section>
  <!-- end page-title -->
  <!-- start blog-with-sidebar-section -->
  <section class="blog-with-sidebar-section section-padding">
      <div class="container">
          <div class="row blog-with-sidebar">
              <div class="blog-content col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
                  <div class="row blog-section-grids">
                    <?php 
  					          $args = array(    
  					              'paged' => $paged,
  					              'post_type' => 'post',
  					              );
  					          $wp_query = new WP_Query($args);
  					          while ($wp_query -> have_posts()): $wp_query -> the_post();
  					        ?>
                            <div class="col col-md-6 col-xs-6">
                          <div class="grid">
                              <div class="entry-media">
                                <?php if ( has_post_thumbnail() ) { ?>
                                  <?php the_post_thumbnail(); ?>
                                <?php }?>
                              </div>
                              <div class="entry-title">
                                  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                              </div>
                              <div class="entry-meta">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' ));?></a></li>
                                      <li><a href="#"><i class="fa fa-comments"></i> <span><?php comments_popup_link( esc_html__(' 0 comment', 'consult'), esc_html__(' 1 comment', 'consult'), ' % comments'.__('', 'consult')); ?></span> </a></li>
                                  </ul>
                              </div>
                              <div class="entry-details">
                                  <p>
                                    <?php if(isset($consult_redux_demo['blog_excerpt'])){?>
                                      <?php echo esc_attr(consult_excerpt($consult_redux_demo['blog_excerpt'])); ?>
                                      <?php }else{?>
                                      <?php echo esc_attr(consult_excerpt(40));
                                      }
                                    ?>
                                  </p>

                                  <a href="<?php the_permalink();?>" class="read-more">
                                    <?php if(isset($consult_redux_demo['read_more'])){?>
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
                  </div>

                  <div class="row page-pagination-wrapper">
                      <div class="col col-xs-12">
                          <div class="page-pagination">
                              <?php consult_pagination();?>
                          </div>
                      </div>
                  </div>                        
              </div> <!-- end blog-content -->

              <div class="blog-sidebar col col-lg-3 col-lg-pull-9 col-md-4 col-md-pull-8 col-sm-5">
                  <?php get_sidebar();?>
              </div>                    
          </div>
      </div> <!-- end container -->
  </section>
  <!-- end blog-with-sidebar-section -->
<?php
get_footer('parallax');
?>