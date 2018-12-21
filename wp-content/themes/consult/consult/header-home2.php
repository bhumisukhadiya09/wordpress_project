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
    <div class="page-wrapper home-style2" id="home">

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
        <header class="site-header-style2">

            <!-- start upper-topbar -->
            <div class="upper-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-9 contact-info">
                            <ul>
                                <?php if(isset($consult_redux_demo['header_email'])){?>
                                    <li><i class="fi flaticon-letter"></i> <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_email']));?></li>
                                <?php } ?>
                                <?php if(isset($consult_redux_demo['header_address'])){?>
                                    <li><i class="fi flaticon-pin"></i> <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_address']));?></li>
                                <?php } ?>
                                <?php if(isset($consult_redux_demo['header_phone'])){?>
                                    <li><i class="fi flaticon-technology-1"></i> <?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_phone']));?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col col-md-3">
                            <ul class="social-links">
                                <?php if($consult_redux_demo['header_linkfb']){?>
                                    <li><a href="<?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_linkfb']));?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if($consult_redux_demo['header_linktw']){?>
                                    <li><a href="<?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_linktw']));?>"><i class="fa fa-twitter"></i></a></li>
                                <?php } ?>
                                <?php if($consult_redux_demo['header_linkgg']){?>
                                    <li><a href="<?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_linkgg']));?>"><i class="fa fa-google-plus"></i></a></li>
                                <?php } ?>
                                <?php if($consult_redux_demo['header_linkli']){?>
                                    <li><a href="<?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_linkli']));?>"><i class="fa fa-linkedin"></i></a></li>
                                <?php } ?>
                                <?php if($consult_redux_demo['header_linkin']){?>
                                    <li><a href="<?php echo htmlspecialchars_decode(esc_attr($consult_redux_demo['header_linkin']));?>"><i class="fa fa-instagram"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
            <!-- end upper-topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only"><?php echo esc_html('Toggle navigation' , 'consult')?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php if(isset($consult_redux_demo['logo']['url']) && $consult_redux_demo['logo']['url'] != ''){?>
                                <img src="<?php echo esc_url($consult_redux_demo['logo']['url']);?>" alt="image">
                            <?php }else{ ?> 
                                <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="image">
                            <?php } ?>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
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