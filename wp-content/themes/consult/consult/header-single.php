<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<?php 
$consult_redux_demo = get_option('redux_demo');
?>
  <head>
      <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- start page-wrapper -->
    <div class="page-wrapper blog-single-page">

        <!-- start preloader -->
       <div class="preloader">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header class="site-header">


            <div class="lower-topbar">
                <div class="container">
                    <div class="row lower-topbar">
                        <div class="col col-sm-3">
                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if(isset($consult_redux_demo['logo']['url']) && $consult_redux_demo['logo']['url'] != ''){?>
                                    <img src="<?php echo esc_url($consult_redux_demo['logo']['url']);?>">
                                <?php }else{ ?> 
                                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png">
                                <?php } ?>
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>            

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only"><?php echo esc_html('Toggle navigation' , 'consult')?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <?php 
                          wp_nav_menu( 
                          array( 
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => '', 
                                'menu_id' => '',
                                'menu'            => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'echo'            => true,
                                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                 'walker'            => new consult_wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul class="nav navbar-nav %2$s">%3$s</ul>',
                                'depth'           => 0,        
                            )
                         ); ?>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>