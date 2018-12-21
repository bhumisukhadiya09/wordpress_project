<?php 
$textdoimain = 'consult';
global $pre_text;
$consult_redux_demo = get_option('redux_demo');
$pre_text = 'VG ';

//add
//headertitle
add_shortcode('headertitle', 'headertitle_func');
function headertitle_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <section class="page-title" style="background: url(<?php echo esc_url($images[0]);?>) center center/cover no-repeat local;">
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
    <!-- end page-title -->
<?php  return ob_get_clean();
}
//add
//headertitlepage
add_shortcode('headertitlepage', 'headertitlepage_func');
function headertitlepage_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <section class="page-title" style="background: url(<?php echo esc_url($images[0]);?>) center center/cover no-repeat local;">
        <div class="container">
            <div class="title-box">
                <h1><?php the_title();?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                    <li><a><?php echo esc_html__( 'Pages', 'consult' ); ?></a></li>
                    <li><?php the_title();?></li>
                </ol>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
<?php  return ob_get_clean();
}
//add
//featured
add_shortcode('featured', 'featured_func');
function featured_func($atts, $content = null){
    ob_start();
    ?>
        <?php 
            $args = array(   
                        'post_type' => 'services',   
                        'paged' => $paged, 
                    );  
            $wp_query = new WP_Query($args);
            $i = 0;
            while ($wp_query -> have_posts() && $i < 3) : $wp_query -> the_post();
            $i++;
        ?>
        <div class="col col-lg-4 col-xs-6">
            <div class="grid">
                <div class="img-holder">
                    <?php if(has_post_thumbnail()) {?>
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img img-responsive">
                    <?php } ?>
                </div>
                <div class="details">
                <a href="<?php the_permalink();?>">
                    <h3><?php if(get_post_meta(get_the_ID(),'_cmb_services_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_title', true));?> <?php } ?> <i class="<?php if(get_post_meta(get_the_ID(),'_cmb_services_icon', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_icon', true));?> <?php } ?>"></i></h3>
                    <p><?php if(get_post_meta(get_the_ID(),'_cmb_services_sub_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_sub_title', true));?> <?php } ?></p>
                </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
<?php  return ob_get_clean();
}
//add
//featured6
add_shortcode('featured6', 'featured6_func');
function featured6_func($atts, $content = null){
    ob_start();
    ?>
        <?php 
            $args = array(   
                        'post_type' => 'services',   
                        'paged' => $paged, 
                    );  
            $wp_query = new WP_Query($args);
            $i = 0;
            while ($wp_query -> have_posts() && $i < 6) : $wp_query -> the_post();
            $i++;
        ?>
        <div class="col col-lg-4 col-xs-6">
            <div class="grid">
                <div class="img-holder">
                    <?php if(has_post_thumbnail()) {?>
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img img-responsive">
                    <?php } ?>
                </div>
                <div class="details">
                <a href="<?php the_permalink();?>">
                    <h3><?php if(get_post_meta(get_the_ID(),'_cmb_services_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_title', true));?> <?php } ?> <i class="<?php if(get_post_meta(get_the_ID(),'_cmb_services_icon', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_icon', true));?> <?php } ?>"></i></h3>
                    <p><?php if(get_post_meta(get_the_ID(),'_cmb_services_sub_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_sub_title', true));?> <?php } ?></p>
                </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
<?php  return ob_get_clean();
}
//add
//featured2
add_shortcode('featured2', 'featured2_func');
function featured2_func($atts, $content = null){
    ob_start();
    ?>
    <?php 
            $args = array(   
                        'post_type' => 'services',   
                        'paged' => $paged, 
                    );  
            $wp_query = new WP_Query($args);
            $i = 0;
            while ($wp_query -> have_posts() && $i < 6) : $wp_query -> the_post();
            $i++;
        ?>
        <div class="col col-xs-6">
            <div class="grid">
                <div class="img-holder">
                    <?php if(has_post_thumbnail()) {?>
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img img-responsive">
                    <?php } ?>
                </div>
                <div class="details">
                <a href="<?php the_permalink();?>">
                    <h3><?php if(get_post_meta(get_the_ID(),'_cmb_services_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_title', true));?> <?php } ?> <i class="<?php if(get_post_meta(get_the_ID(),'_cmb_services_icon', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_icon', true));?> <?php } ?>"></i></h3>
                    <p><?php if(get_post_meta(get_the_ID(),'_cmb_services_sub_title', true)){?> <?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_services_sub_title', true));?> <?php } ?></p>
                </a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php  return ob_get_clean();
}
//add
//featured2end
add_shortcode('featured2end', 'featured2end_func');
function featured2end_func($atts, $content = null){
    extract(shortcode_atts(array(
        'btn_name' => '',
        'btn_link' => '',
    ), $atts));
    ob_start();
    ?>
        </div>
            <div class="load-more">
                <div>
                    <a href="<?php echo esc_attr($btn_link);?>" class="btn"><i class="fa fa-spinner"></i> <?php echo esc_attr($btn_name);?></a>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//featured2sidebar
add_shortcode('featured2sidebar', 'featured2sidebar_func');
function featured2sidebar_func($atts, $content = null){
    ob_start();
    ?>
    <div class="col col-lg-3 col-lg-pull-9 col-md-4 col-md-pull-8">
        <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//services
add_shortcode('services', 'services_func');
function services_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'title' => '',
        'desc' => '',
    ), $atts));
    ob_start();
    ?>
        <div class="col col-lg-4 col-sm-6">
            <div class="grid">
                <div class="icon">
                    <i class="<?php echo esc_attr($icon);?>"></i>
                </div>
                <h3><?php echo esc_attr($title);?></h3>
                <p><?php echo esc_attr($desc);?></p>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//h2services
add_shortcode('h2services', 'h2services_func');
function h2services_func($atts, $content = null){
    extract(shortcode_atts(array(
        'delay' => '',
        'icon' => '',
        'title' => '',
        'desc' => '',
    ), $atts));
    ob_start();
    ?>
        <div class="col col-md-4 wow fadeInLeftSlow" data-wow-delay="<?php echo esc_attr($delay);?>s">
            <div class="grid">
                <div>
                    <span class="icon">
                        <i class="<?php echo esc_attr($icon);?>"></i>
                    </span>
                    <h3><?php echo esc_attr($title);?></h3>
                    <p><?php echo esc_attr($desc);?></p>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//fun
add_shortcode('fun', 'fun_func');
function fun_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'num' => '',
    ), $atts));
    ob_start();
    ?>
        <div class="col col-sm-3 col-xs-6">
            <div class="box">
                <h3><span class="counter" data-count="<?php echo esc_attr($num);?>">00</span></h3>
                <p><?php echo esc_attr($title);?></p>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//fun2
add_shortcode('fun2', 'fun2_func');
function fun2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'num' => '',
    ), $atts));
    ob_start();
    ?>
        <div class="col col-sm-3 col-xs-6">
            <div class="box">
                <h3><span class="counter" data-count="<?php echo esc_attr($num);?>">00</span>k</h3>
                <p><?php echo esc_attr($title);?></p>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//about
add_shortcode('about', 'about_func');
function about_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'desc1' => '',
        'desc2' => '',
        'image' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
        <div class="box">
            <h3><?php echo esc_attr($title);?></h3>
            <p><?php echo esc_attr($desc1);?></p>
            <p><?php echo esc_attr($desc2);?></p>
            <div class="signature">
                <img src="<?php echo esc_url($images[0]);?>" alt class="img img-responsive">
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//aboutend
add_shortcode('aboutend', 'aboutend_func');
function aboutend_func($atts, $content = null){
    ob_start();
    ?>
        </div>
            </div>

            <div class="col col-md-4 col-md-offset-1">
                <div class="skills">
<?php  return ob_get_clean();
}
//add
//aboutskill
add_shortcode('aboutskill', 'aboutskill_func');
function aboutskill_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'num' => '',
    ), $atts));
    ob_start();
    ?>
        <div class="skill">
            <h6><?php echo esc_attr($title);?></h6>
            <div class="progress">
                <div class="progress-bar" data-percent="<?php echo esc_attr($num);?>"></div>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//about3left
add_shortcode('about3left', 'about3left_func');
function about3left_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'desc1' => '',
        'desc2' => '',
        'image' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <div class="col col-md-7">
        <div class="box">
            <h3><?php echo esc_attr($title);?></h3>
            <p><?php echo esc_attr($desc1);?></p>
            <p><?php echo esc_attr($desc2);?></p>
            <div class="signature">
                <img src="<?php echo esc_url($images[0]);?>" alt class="img img-responsive">
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//about3right
add_shortcode('about3right', 'about3right_func');
function about3right_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'image2' => '',
    ), $atts));
    $images1 = wp_get_attachment_image_src($image1,'');
    $images2 = wp_get_attachment_image_src($image2,'');
    ob_start();
    ?>
    <div class="col col-md-5 about-company-slider-wrapper">
        <div class="about-company-slider">
            <div>
                <img src="<?php echo esc_url($images1[0]);?>" alt>
            </div>
            <div>
                <img src="<?php echo esc_url($images2[0]);?>" alt>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//aboutPage
add_shortcode('aboutPage', 'aboutPage_func');
function aboutPage_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'image2' => '',
        'desc' => '',
    ), $atts));
    $images1 = wp_get_attachment_image_src($image1,'');
    $images2 = wp_get_attachment_image_src($image2,'');
    ob_start();
    ?>
    <div class="row">
        <div class="col col-xs-12 about-company-s2-slider-wrapper">
            <div class="about-company-s2-slider">
                <div>
                    <img src="<?php echo esc_url($images1[0]);?>" alt>
                </div>
                <div>
                    <img src="<?php echo esc_url($images2[0]);?>" alt>
                </div>
            </div>
            <p><?php echo esc_attr($desc);?></p>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//aboutMission
add_shortcode('aboutMission', 'aboutMission_func');
function aboutMission_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'desc' => '',
        'list1' => '',
        'list2' => '',
        'list3' => '',
        'list4' => '',
        'list5' => '',
        'list6' => '',
        'link_data' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="mission">
        <div class="title row">
            <div class="col col-md-4">
                <div class="section-title">
                    <h2><?php echo esc_attr($title);?></h2>
                </div>
            </div>
            <div class="col col-md-8">
                <p><?php echo esc_attr($desc);?></p>
            </div>
        </div>

        <div class="row details">
            <div class="col col-md-7 left-col">
                <ul>
                    <?php if ($list1) {
                        echo '<li><i class="fa fa-chevron-circle-right"></i> '.esc_attr($list1).'</li>';
                    } ?>
                    <?php if ($list2) {
                        echo '<li><i class="fa fa-chevron-circle-right"></i> '.esc_attr($list2).'</li>';
                    } ?>
                    <?php if ($list3) {
                        echo '<li><i class="fa fa-chevron-circle-right"></i> '.esc_attr($list3).'</li>';
                    } ?>
                    <?php if ($list4) {
                        echo '<li><i class="fa fa-chevron-circle-right"></i> '.esc_attr($list4).'</li>';
                    } ?>
                    <?php if ($list5) {
                        echo '<li><i class="fa fa-chevron-circle-right"></i> '.esc_attr($list5).'</li>';
                    } ?>
                    <?php if ($list6) {
                        echo '<li><i class="fa fa-chevron-circle-right"></i> '.esc_attr($list6).'</li>';
                    } ?>
                </ul>
            </div>
            <div class="col col-md-5 right-col">
                <a href="<?php echo esc_attr($link_data);?>" class="video-btn" data-type="iframe"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div> <!-- end mission -->
</div>
<?php  return ob_get_clean();
}
//add
//aboutPageSidebar
add_shortcode('aboutPageSidebar', 'aboutPageSidebar_func');
function aboutPageSidebar_func($atts, $content = null){
    ob_start();
    ?>
    <div class="col col-lg-3 col-md-4">
        <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//projects
add_shortcode('projects', 'projects_func');
function projects_func($atts, $content = null){
    ob_start();
    ?>
        <div class="row sortable-grids">
            <div class="col col-lg-12">
                <div class="grids-filters">
                    <ul>
                        <li><a data-filter="*" href="#" class="current">All</a></li>
                        <?php
                            $categories = get_terms('type');   
                             foreach( (array)$categories as $categorie){
                                $cat_name = $categorie->name;
                                $cat_slug = $categorie->slug;
                        ?>
                            <li><a href="#" data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></a></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="grids-container project-grids popup-gallery">
                    
                    <?php 
                        $args = array(   
                                    'post_type' => 'gallery',   
                                    'paged' => $paged, 
                                );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts() && $i < 6) : $wp_query -> the_post();
                        $i++; 
                        $cates = get_the_terms(get_the_ID(),'type');
                        $cate_name ='';
                        $cate_slug = '';
                        foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.' ' ;
                                $cate_slug .= $cate->slug .' ';     
                                }
                        } 
                    ?>
                        <div class="grid <?php echo esc_attr($cate_slug);?> ">
                            <div class="grid-inner">
                                <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                                    <i class="fa fa-link"></i>
                                    <?php if(has_post_thumbnail()) {?>
                                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img img-responsive">
                                      <?php } ?>
                                </a>
                                <h3><?php the_title();?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
<?php  return ob_get_clean();
}
//add
//testimonials
add_shortcode('testimonials', 'testimonials_func');
function testimonials_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'num' => '',
        'desc' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
        <div class="box">
            <div class="client-pic">
                <img src="<?php echo esc_url($images[0]);?>" alt class="img img-responsive">
            </div>
            <div class="details">
                <h4><?php echo esc_attr($title);?></h4>
                <div class="rating">
                    <?php
                        for ($i=0; $i < $num; $i++) { 
                            echo '<i class="fa fa-star"></i>';
                        }
                    ?>
                </div>
                <p><?php echo esc_attr($desc);?></p>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//testimonialsPage
add_shortcode('testimonialsPage', 'testimonialsPage_func');
function testimonialsPage_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'num' => '',
        'desc' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
        <div class="testimonial-list">
            <div class="client-pic">
                <img src="<?php echo esc_url($images[0]);?>" alt>
            </div>
            <div class="client-quote">
                <p><?php echo esc_attr($desc);?></p>
            </div>
            <div class="rating">
                <?php
                    for ($i=0; $i < $num; $i++) { 
                        echo '<i class="fa fa-star"></i>';
                    }
                ?>
            </div>
            <div class="client-info">
                <h5><?php echo esc_attr($title);?></h5>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//testimonialsSidebar
add_shortcode('testimonialsSidebar', 'testimonialsSidebar_func');
function testimonialsSidebar_func($atts, $content = null){
    ob_start();
    ?>
        </div>

        <div class="col col-lg-3 col-md-4">
            <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//blog
add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    ob_start();
    ?>
        <div class="row blog-section-grids">
            <?php 
                $args = array(   
                            'post_type' => 'post',   
                            'paged' => $paged, 
                        );
                $wp_query = new WP_Query($args);
                $i = 0;
                while ($wp_query -> have_posts() && $i < 3) : $wp_query -> the_post();
                $i++;
            ?>
                <div class="col col-md-4 col-xs-6">
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
                                <li><a href="#"><i class="fa fa-comments"></i> <span><?php comments_popup_link( esc_html__(' 0 comment', 'consult'), esc_html__(' 1 comment', 'consult'), ' % comments'.__('', 'consult')); ?></span></a></li>
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
        </div> <!-- end row -->
<?php  return ob_get_clean();
}
//add
//blog2
add_shortcode('blog2', 'blog2_func');
function blog2_func($atts, $content = null){
    ob_start();
    ?>
        <div class="row blog-section-grids">
            <?php 
                $args = array(   
                            'post_type' => 'post',   
                            'paged' => $paged, 
                        );
                $wp_query = new WP_Query($args);
                $i = 0;
                $j = 0;
                while ($wp_query -> have_posts() && $i < 3) : $wp_query -> the_post();
                $i++;
            ?>
                <div class="col col-md-4 col-xs-6 wow fadeInLeftSlow" data-wow-delay="<?php echo esc_attr($j); ?>">
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
                                <li><a href="#"><i class="fa fa-comments"></i> <span><?php comments_popup_link( esc_html__(' 0 comment', 'consult'), esc_html__(' 1 comment', 'consult'), ' % comments'.__('', 'consult')); ?></span></a></li>
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
            <?php $j = $j + 0.3; endwhile; ?>
        </div> <!-- end row -->
<?php  return ob_get_clean();
}
//add
//contact
add_shortcode('contact', 'contact_func');
function contact_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'desc' => '',
    ), $atts));
    ob_start();
    ?>
        <li>
            <span class="icon">
                <i class="<?php echo esc_attr($icon);?>"></i>
            </span>
            <div class="wid">
                <?php echo esc_attr($desc);?>
            </div>
        </li>
<?php  return ob_get_clean();
}
//add
//contactend
add_shortcode('contactend', 'contactend_func');
function contactend_func($atts, $content = null){
    ob_start();
    ?>
        </ul>
            </div>
            <div class="contact-form">
<?php  return ob_get_clean();
}
//add
//company
add_shortcode('company', 'company_func');
function company_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'since' => '',
        'link' => '',
    ), $atts));
    ob_start();
    ?>
        <div class="list">
            <a href="<?php echo esc_attr($link);?>">
                <h6><?php echo esc_attr($title);?></h6>
                <span><?php echo esc_attr($since);?></span>
            </a>
        </div>
<?php  return ob_get_clean();
}
//add
//faq
add_shortcode('faq', 'faq_func');
function faq_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'id' => '',
        'title' => '',
        'desc' => '',
        'chosen' => 'no',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a <?php if($chosen=='no'){?> <?php  echo 'class="collapsed"'; ?> <?php }else{?> <?php  echo 'aria-expanded="true"'; ?> <?php } ?> data-toggle="collapse" data-parent="#accordion" href="#<?php echo esc_attr($id);?>" aria-expanded="true"><?php echo esc_attr($title);?> <i class="fa fa-angle-down"></i></a>
            </div>
            <div id="<?php echo esc_attr($id);?>" class="panel-collapse collapse <?php if($chosen=='yes'){ echo "in"; }?>">
                <div class="panel-body">
                    <div class="img-holder">
                        <img src="<?php echo esc_url($images[0]);?>" alt>
                    </div>
                    <p><?php echo esc_attr($desc);?></p>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//faqPage
add_shortcode('faqPage', 'faqPage_func');
function faqPage_func($atts, $content = null){
    extract(shortcode_atts(array(
        'id' => '',
        'title' => '',
        'desc1' => '',
        'desc2' => '',
        'chosen' => 'no',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a <?php if($chosen=='no'){  echo 'class="collapsed"'; } ?>data-toggle="collapse" data-parent="#accordion" href="#<?php echo esc_attr($id);?>" aria-expanded="true"><?php echo esc_attr($title);?> </a>
        </div>
        <div id="<?php echo esc_attr($id);?>" class="panel-collapse collapse <?php if($chosen=='yes'){ echo "in"; }?>">
            <div class="panel-body">
                <p><?php echo esc_attr($desc1);?></p>
                <p><?php echo esc_attr($desc2);?></p>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//faqSidebar
add_shortcode('faqSidebar', 'faqSidebar_func');
function faqSidebar_func($atts, $content = null){
    ob_start();
    ?>
    </div>
        </div>
    <div class="col col-lg-3 col-md-4">
        <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//teams
add_shortcode('teams', 'teams_func');
function teams_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'name' => '',
        'fb' => '',
        'tw' => '',
        'li' => '',
        'gg' => '',
        'job' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <div class="grid">
        <div class="img-holder">
            <img src="<?php echo esc_url($images[0]);?>" alt>
        </div>
        <div class="details">
            <div class="member-info">
                <h3><?php echo esc_attr($name);?></h3>
                <ul>
                    <li><a href="<?php echo esc_attr($fb);?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo esc_attr($tw);?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo esc_attr($li);?>"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="<?php echo esc_attr($gg);?>"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="member-post">
                <span><?php echo esc_attr($job);?></span>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//pricing
add_shortcode('pricing', 'pricing_func');
function pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'object' => '',
        'desc' => '',
        'list1' => '',
        'list2' => '',
        'list3' => '',
        'list4' => '',
        'btn_name' => '',
        'btn_link' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="col col-md-4 col-sm-6">
        <div class="grid">
            <div class="pricing-header">
                <span class="icon">
                    <i class="<?php echo esc_attr($icon);?>"></i>
                </span>
                <h3><?php echo esc_attr($object);?></h3>
                <span><?php echo esc_attr($desc);?></span>
            </div>
            <div class="pricing-details">
                <ul>
                    <li><?php echo esc_attr($list1);?></li>
                    <li><?php echo esc_attr($list2);?></li>
                    <li><?php echo esc_attr($list3);?></li>
                    <li><?php echo esc_attr($list4);?></li>
                </ul>
                <a href="<?php echo esc_attr($btn_link);?>" class="btn"><span><?php echo esc_attr($btn_name);?></span></a>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//parallax
add_shortcode('parallax', 'parallax_func');
function parallax_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'btn_name' => '',
        'btn_link' => '',
    ), $atts));
    ob_start();
    ?>
    <h5><?php echo esc_attr($title);?></h5>
    <a href="<?php echo esc_attr($btn_link);?>" class="btn"><span><?php echo esc_attr($btn_name);?></span></a>
<?php  return ob_get_clean();
}
//add
//partner
add_shortcode('partner', 'partner_func');
function partner_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <div class="grid">
        <img src="<?php echo esc_url($images[0]);?>" alt>
    </div>
<?php  return ob_get_clean();
}
//add
//partnerPages
add_shortcode('partnerPages', 'partnerPages_func');
function partnerPages_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'desc' => '',
    ), $atts));
    $images = wp_get_attachment_image_src($image,'');
    ob_start();
    ?>
    <div class="row">
        <div class="col col-lg-5">
            <img src="<?php echo esc_url($images[0]);?>" alt class="img img-responsive">
        </div>
        <div class="col col-lg-7">
            <h3><?php echo esc_attr($title);?></h3>
            <p><?php echo esc_attr($desc);?></p>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//partnerSidebar
add_shortcode('partnerSidebar', 'partnerSidebar_func');
function partnerSidebar_func($atts, $content = null){
    ob_start();
    ?>
    </div>

        <div class="col col-lg-3 col-md-4">
            <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
            </div>
        </div>
<?php  return ob_get_clean();
}
//add
//careersStart
add_shortcode('careersStart', 'careersStart_func');
function careersStart_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'image2' => '',
        'title' => '',
    ), $atts));
    $images1 = wp_get_attachment_image_src($image1,'');
    $images2 = wp_get_attachment_image_src($image2,'');
    ob_start();
    ?>
    <div class="row gallery-row">
        <div class="col col-xs-12">
            <div class="careers-gallery">
                <div class="img-holder">
                    <img src="<?php echo esc_url($images1[0]);?>" alt>
                </div>
                <div class="img-holder">
                    <img src="<?php echo esc_url($images2[0]);?>" alt>
                </div>
            </div>
        </div>
    </div>

    <div class="row reason-joinus">
        <div class="col col-lg-4">
            <div class="section-title">
                <h2><?php echo esc_attr($title);?></h2>
            </div>
        </div>
        <div class="col col-lg-8 grid-wrapper">
<?php  return ob_get_clean();
}
//add
//careersItem
add_shortcode('careersItem', 'careersItem_func');
function careersItem_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'desc' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="grid">
        <span class="icon">
            <i class="<?php echo esc_attr($icon);?>"></i>
        </span>
        <p><?php echo esc_attr($desc);?></p>
    </div>
<?php  return ob_get_clean();
}
//add
//careersEnd
add_shortcode('careersEnd', 'careersEnd_func');
function careersEnd_func($atts, $content = null){
    ob_start();
    ?>
     </div>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//careersSidebar
add_shortcode('careersSidebar', 'careersSidebar_func');
function careersSidebar_func($atts, $content = null){
    ob_start();
    ?>
     <div class="col col-lg-3 col-md-4">
        <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php  return ob_get_clean();
}
//add
//recent
add_shortcode('recent', 'recent_func');
function recent_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'desc' => '',
        'info' => '',
        'btn_link' => '',
        'btn_name' => '',
        'address' => '',
        'btn_link1' => '',
        'btn_name1' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="job-list">
        <div class="job-title">
            <h3><?php echo esc_attr($title);?></h3>
            <span class="job-post"><?php echo esc_attr($desc);?></span>
        </div>
        <div class="job-description">
            <div class="left-col">
                <p><?php echo esc_attr($info);?></p>
                <a href="<?php echo esc_attr($btn_link);?>" class="details"><?php echo esc_attr($btn_name);?> <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="right-col">
                <span class="icon">
                    <i class="fa fa-map-marker"></i>
                </span>
                <span class="location"><?php echo esc_attr($address);?></span>
                <a href="<?php echo esc_attr($btn_link1);?>" class="apply-btn"><?php echo esc_attr($btn_name1);?></a>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}