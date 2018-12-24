<?php $consult_redux_demo = get_option('redux_demo');?>
  <?php
    if(isset($consult_redux_demo['footer_template'])){?>
    <?php echo do_shortcode($consult_redux_demo['footer_template']);?>
  <?php } ?>
            <footer class="site-footer">
              <div class="upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-sm-6">
                              <div class="widget-footer">
                                <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-1' ); ?>
                                <?php endif; ?>
                              </div>
                            </div>

                            <div class="col col-lg-3 col-sm-6">
                              <div class="widget-footer">
                                <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-2' ); ?>
                                <?php endif; ?>
                              </div>
                            </div>

                            <div class="col col-lg-2 col-sm-6">
                              <div class="widget-footer">
                                <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                                  <?php dynamic_sidebar( 'footer-area-3' ); ?>
                                <?php endif; ?>
                              </div>
                            </div>

                            <div class="col col-lg-4 col-sm-6">
                                <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                                <div class="widget newsletter-widget">
                                  <?php dynamic_sidebar( 'footer-area-4' ); ?>
                                </div>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'footer-area-5' ) ) : ?>
                                <div class="widget-footer">
                                  <?php dynamic_sidebar( 'footer-area-5' ); ?>
                                </div>
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
        
      </div>
      <?php wp_footer(); ?>
    </body>
</html>
