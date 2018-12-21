<?php
 $consult_redux_demo = get_option('redux_demo');
get_header(); ?>
<!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="title-box">
                <h1>
                  <?php printf( esc_html__( 'Tag Archives: %s', 'consult' ), single_tag_title( '', false ) ); ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                    <li><?php echo esc_html__( 'Tags', 'consult' ); ?></li>
                </ol>
            </div>
        </div> <!-- end container -->
    </section>

    <!-- start blog-with-sidebar-section -->
     <section class="blog-with-sidebar-section section-padding">
      <div class="container">
          <div class="row blog-with-sidebar">
              <div class="blog-content col col-lg-9 col-md-8">
                  <div class="row blog-section-grids">
                   <?php
                          while (have_posts()): the_post(); 
                        ?>
                      <div class="post" >
                            <div class="entry-media">
                                <?php if ( has_post_thumbnail() ) { ?>
                                  <?php the_post_thumbnail(); ?>
                                <?php }?>
                              </div>
                              <div class="entry-title">
                                  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                  <?php if ( is_sticky() )
                                  echo '<span class="featured-post">' . esc_html__( 'Sticky Template', 'consult' ) . '</span>';
                                   ?>
                              </div>
                              <div class="entry-meta">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' ));?></a></li>
                                      <li><a href="#"><i class="fa fa-comments"></i> <span><span><?php comments_popup_link( esc_html__(' 0 comment', 'consult'), esc_html__(' 1 comment', 'consult'), ' % comments'.__('', 'consult'), '', esc_html__(' Comment Off', 'consult')); ?></span></a></li>
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
                        </div> <!-- end post -->
                        <hr>
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

              <div class="blog-sidebar col col-lg-3 col-md-4 col-sm-5">
                  <?php get_sidebar();?>
              </div>                    
          </div>
      </div> <!-- end container -->
  </section>
    <!-- end blog-with-sidebar-section -->
<?php
get_footer();
?>