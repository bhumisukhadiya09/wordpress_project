<?php $consult_redux_demo = get_option('redux_demo');?>
  <?php
    if(isset($consult_redux_demo['footer_template'])){?>
    <?php echo do_shortcode($consult_redux_demo['footer_template']);?>
  <?php } ?>
          <section class="cta parallax" data-bg-image="images/cta-bg.jpg">
              <div class="container">
                  <div class="row">
                      <div class="col col-xs-12">
                          <h5><?php if(isset($consult_redux_demo['footer_text_parallax'])){?><?php echo esc_attr($consult_redux_demo['footer_text_parallax']);?><?php }else{ ?><?php echo 'Are you ready to start your business?'; ?><?php } ?></h5>
                          <a href="<?php if(isset($consult_redux_demo['footer_link'])){?><?php echo esc_attr($consult_redux_demo['footer_link']);?><?php } ?>" class="btn"><?php if(isset($consult_redux_demo['footer_btn'])){?><?php echo esc_attr($consult_redux_demo['footer_btn']);?><?php }else{ ?><?php echo 'Request Quote'; ?><?php } ?></a>
                      </div>
                  </div> <!-- end row -->
              </div> <!-- end container -->
          </section>
            <footer class="site-footer">
                <div class="upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-sm-6">
                                <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-1' ); ?>
                                <?php endif; ?>
                            </div>

                            <div class="col col-lg-3 col-sm-6">
                                <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-2' ); ?>
                                <?php endif; ?>
                            </div>

                            <div class="col col-lg-2 col-sm-6">
                                <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-3' ); ?>
                                <?php endif; ?>
                            </div>

                            <div class="col col-lg-4 col-sm-6">
                              <div class="widget newsletter-widget">
                                <h3>Newsletter</h3>
                                <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-4' ); ?>
                                <?php endif; ?>
                              </div>
                                <?php if ( is_active_sidebar( 'footer-area-5' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-5' ); ?>
                                <?php endif; ?>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end upperfooter -->

                <div class="copyright">
                    <div class="container">
                        <div class="col col-md-6">
                            <p><?php if(isset($consult_redux_demo['footer_text'])){?>
                              <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['footer_text']));?>
                              <?php }else{?>
                              <?php echo esc_html__( '2017 &copy; All rights reserved by Themexriver', 'consult' );
                              }
                            ?></p>
                        </div>
                        <div class="col col-md-6">
                            <?php if(isset($consult_redux_demo['footer_text2'])){?>
                              <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['footer_text2']));?>
                              <?php } ?>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end sectionname-->
        </div>
        <!-- end of page-wrapper -->
        <?php wp_footer(); ?>
      </div>
    </body>
</html>
