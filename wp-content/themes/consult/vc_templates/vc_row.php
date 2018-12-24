<?php

$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(

    'el_class'        => '',

    'bg_image'        => '',

    'bg_image_repeat' => '',

    'padding'         => '',

    'margin_bottom'   => '',

    'css' => '',

    'wrap_class'=>'',

    'ses_id'=>'',

    'ses_title'=>'',

    'ses_sub_title'=>'',

    'ses_content'=>'',

    'type_row' => '',

    'number_tes' => '',

    'ses_image' => '',

    'ses_text' => '',

    'ses_link' => '',

    'ses_btname' => '',

    'ses_link_data' => '',

), $atts));


wp_enqueue_script( 'wpb_composer_front_js' );


$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

if($type_row == 'type2'){

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');
}elseif($type_row == 'slider'){
    $output .='<section class="slider-section">
                  <div class="tp-banner-container">
                      <div class="tp-banner" >';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </section>';
}elseif($type_row == 'featured'){
    $output .='<section class="featured section-padding">
                  <div class="container">
                      <div class="row content">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </section>';
}elseif($type_row == 'featured2'){
    $output .='<section class="featured section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-push-4 col-md-8 service-st2-content">
                                <div class="section-title row">
                                    <div class="col col-md-4">
                                        <h2>'.$ses_title.'</h2>
                                    </div>
                                    <div class="col col-md-8">
                                        <p>'.$ses_sub_title.'</p>
                                    </div>
                                </div> <!-- end section-title -->

                                <div class="row grids">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end container -->
                    </section>';
}elseif($type_row == 'services'){
    $output .='<section class="services section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row section-title">
                            <div class="col col-md-8 col-md-offset-2">
                                <h2>'.$ses_title.'</h2>
                                <p>'.$ses_sub_title.'</p>
                            </div>
                        </div> <!-- end section-title -->
                
                        <div class="row content services-grids">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </section><!-- end featured -->';
}elseif($type_row == 'h2services'){
    $output .='<section class="services-style2 section-padding" id="'.$ses_id.'">
                  <div class="container">
                      <div class="row section-title">
                          <div class="col col-md-8 col-md-offset-2">
                            <h2>'.$ses_title.'</h2>
                            <p>'.$ses_sub_title.'</p>
                          </div>
                      </div> <!-- end section-title -->
            
                    <div class="row content services-style2-grids">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div> <!-- end row -->
                  </div> <!-- end container -->
                    </section><!-- end services -->';
}elseif($type_row == 'funfact'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="fun-fact start-count" style="background: url('.esc_url($images[0]).') center center/cover no-repeat local;">
                  <div class="container">        
                      <div class="row content">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </section><!-- end featured -->';
}elseif($type_row == 'about'){
    $output .='<section class="about-us-section section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row section-title">
                            <h2>'.$ses_title.'</h2>
                        </div> <!-- end section-title -->
                
                        <div class="row">
                            <div class="col col-md-7">
                                <div class="about-us-slider">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section><!-- end about-us-section -->';
}elseif($type_row == 'h2about'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="about-us-section about-us-section-style2 section-padding" id="'.$ses_id.'" style="background: url('.esc_url($images[0]).') right bottom/80% no-repeat local;">
                    <div class="container">
                        <div class="row section-title">
                            <h2>'.$ses_title.'</h2>
                        </div> <!-- end section-title -->
                
                        <div class="row content">
                            <div class="col col-md-7">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end row -->
                    </div> <!-- end container -->
                      </section><!-- end about-us-section -->';
}elseif($type_row == 'h3about'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="about-us-section about-us-section-style3 section-padding" id="'.$ses_id.'" style="background: url('.esc_url($images[0]).') right bottom/80% no-repeat local;">
                    <div class="container">
                        <div class="row section-title">
                            <h2>'.$ses_title.'</h2>
                        </div> <!-- end section-title -->
                
                        <div class="row content">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div> <!-- end row -->
                  </div> <!-- end container -->
                    </section><!-- end about-us-section -->';
}elseif($type_row == 'about2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="about-company-s2 section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-9 col-md-8">
                                <div class="section-title row">
                                    <div class="col col-xs-12">
                                        <h2>'.$ses_title.'</h2>
                                    </div>
                                </div> <!-- end section-title -->';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end container -->
                    </section><!-- end featured -->';
}elseif($type_row == 'projects'){
    $output .='<section class="latest-projects section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row section-title">
                            <div class="col col-md-8 col-md-offset-2">
                                <h2>'.$ses_title.'</h2>
                                <p>'.$ses_sub_title.'</p>
                            </div></div> <!-- end section-title -->';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='<div class="row more-projects">
                    <a href="'.$ses_link.'" class="btn">'.$ses_btname.' <i class="fa fa-arrow-right"></i></a>
                </div>
                  </div> <!-- end container -->
                    </section><!-- end latest-projects -->';
}elseif($type_row == 'testimonials'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="testimonials section-padding" id="'.$ses_id.'" style="background: url('.esc_url($images[0]).') center center/cover no-repeat fixed;">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-4 left-col">
                                <div class="section-title">
                                    <h2>'.$ses_title.'</h2>
                                    <p>'.$ses_sub_title.'</p>
                                </div>

                                <a href="'.$ses_link.'" class="btn theme-btn">'.$ses_btname.'</a>
                            </div>

                            <div class="col col-md-8">
                                <div class="testimonials-slider">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section><!-- end testimonials-->';
}elseif($type_row == 'testimonials1'){
    $output .='<section class="testimonials-content-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 col-md-8 testimonials-content">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end container -->
                    </section>';
}elseif($type_row == 'h2testimonials'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="testimonials testimonials-style2 section-padding" id="'.$ses_id.'" style="background: url('.esc_url($images[0]).') center center/cover no-repeat fixed;">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-10 col-md-offset-1">
                                <div class="testimonials-slider-style2">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section><!-- end testimonials-->';
}elseif($type_row == 'blog'){
    $output .='<section class="blog-section section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row section-title">
                            <div class="col col-md-8 col-md-offset-2">
                                <h2>'.$ses_title.'</h2>
                                <p>'.$ses_sub_title.'</p>
                            </div>
                        </div><!-- end section-title -->';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div> <!-- end container -->
                  </section><!-- end blog-section -->';
}elseif($type_row == 'contact'){
    $output .='<section class="contact-section-wrapper" id="'.$ses_id.'">
                    <div class="contact-section">
                        <div class="map-wrapper active" data-style="1">
                            <div class="overlay"></div>
                            <div id="map" class="map"></div>
                        </div>
                        <div class="container contact-block" data-style="0">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <h2>'.$ses_title.'</h2>
                                    <div class="contact-info">
                                        <p>'.$ses_sub_title.'</p>
                                        <ul>';
     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </div>
                        <div class="contact-switcher">
                          <ul>
                              <li><button data-style="1" class="button active"><i class="fi flaticon-location"></i> Map</button></li>
                              <li><button data-style="0" class="button"><i class="fi flaticon-forms"></i> Form</button></li>
                          </ul>
                            </div>
                              </section><!-- end contact-section -->';
}elseif($type_row == 'company'){
    $output .='<section class="company-timeline section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12 company-timeline-boxes">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end container -->
                      </section><!-- end company-timeline -->';
}elseif($type_row == 'faq'){
    $output .='<section class="faq section-padding" id="'.$ses_id.'">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-lg-6 left-col">
                                <a href="'.$ses_link_data.'" class="video-btn" data-type="iframe"><i class="fa fa-play"></i></a>
                            </div>

                            <div class="col col-lg-6 right-col">
                                <div class="section-title">
                                    <h2>'.$ses_title.'</h2>
                                </div> <!-- end section-title -->
                                
                                <div class="panel-group" id="accordion">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section>';
}elseif($type_row == 'faq1'){
    $output .='<section class="faq-content-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 col-md-8 faq-content">
                            <div class="panel-group" id="accordion">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end container -->
                    </section>';
}elseif($type_row == 'team'){
    $output .='<section class="team section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row section-title">
                            <div class="col col-md-8 col-md-offset-2">
                                <h2>'.$ses_title.'</h2>
                                <p>'.$ses_sub_title.'</p>
                            </div>
                        </div> <!-- end section-title -->
                
                        <div class="row content">
                            <div class="col col-xs-12">
                                <div class="team-slider team-grids">';
     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section>';
}elseif($type_row == 'pricing'){
    $output .='<section class="pricing section-padding" id="'.$ses_id.'">
                    <div class="container">
                        <div class="row section-title">
                            <div class="col col-lg-3 col-md-4">
                                <h2>'.$ses_title.'</h2>
                            </div>
                            <div class="col col-lg-9 col-md-8">
                                <p>'.$ses_sub_title.'</p>
                            </div>
                        </div> <!-- end section-title -->
                
                        <div class="row pricing-grids">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div> <!-- end row -->
                  </div> <!-- end container -->
                    </section>';
}elseif($type_row == 'parallax'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="cta parallax" data-bg-image="'.esc_url($images[0]).'">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end row -->
                    </div> <!-- end container -->
                      </section>';
}elseif($type_row == 'partner'){
    $output .='<section class="partner section-padding">
                    <h2 class="hidden">'.$ses_title.'</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <div class="partner-slider">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section>';
}elseif($type_row == 'partner1'){
    $output .='<section class="partners-content-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 col-md-8 partners-content">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end container -->
                    </section>';
}elseif($type_row == 'careers'){
    $output .='<section class="careers-content section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 col-md-8">
                            <div class="row first-row">
                                <div class="col col-md-3">
                                    <div class="section-title">
                                        <h2>'.$ses_title.'</h2>
                                    </div>
                                </div>
                                <div class="col col-md-9">
                                    <p>'.$ses_sub_title.'</p>
                                </div>
                            </div>';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div> <!-- end container -->
                    </section>';
}elseif($type_row == 'recent'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="recent-job section-padding parallax" data-bg-image="'.esc_url($images[0]).'">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                          <div class="recent-job-slider">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                  </div>
                    </div> <!-- end row -->
                      </div> <!-- end container -->
                        </section>';
}else{

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');
}

echo $output;

