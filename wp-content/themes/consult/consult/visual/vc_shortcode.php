<?php 
$textdoimain = 'consult';
global $pre_text;

$pre_text = 'VG ';

//headertitle
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."headertitle", 'consult'),
   "base" => "headertitle",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
    )));
}
//headertitlepage
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."headertitlepage", 'consult'),
   "base" => "headertitlepage",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
    )));
}
//featured
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."featured", 'consult'),
   "base" => "featured",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//featured6
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."featured6", 'consult'),
   "base" => "featured6",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//featured2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."featured2", 'consult'),
   "base" => "featured2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//featured2end
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."featured2end", 'consult'),
   "base" => "featured2end",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Name", 'consult'),
         "param_name" => "btn_name",
         "value" => "",
         "description" => __("Button Name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link", 'consult'),
         "param_name" => "btn_link",
         "value" => "",
         "description" => __("Button Link", 'consult')
      ),
    )));
}
//featured2sidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."featured2sidebar", 'consult'),
   "base" => "featured2sidebar",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//services
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."services", 'consult'),
   "base" => "services",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class Icon", 'consult'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Class Icon", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//h2services
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."h2services", 'consult'),
   "base" => "h2services",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Time Delay", 'consult'),
         "param_name" => "delay",
         "value" => "",
         "description" => __("Time Delay", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class Icon", 'consult'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Class Icon", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//fun
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."fun", 'consult'),
   "base" => "fun",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Data", 'consult'),
         "param_name" => "num",
         "value" => "",
         "description" => __("Data", 'consult')
      ),
    )));
}
//fun2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."fun2", 'consult'),
   "base" => "fun2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Data", 'consult'),
         "param_name" => "num",
         "value" => "",
         "description" => __("Data", 'consult')
      ),
    )));
}
//about
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."about", 'consult'),
   "base" => "about",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc1",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc2",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//aboutend
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."aboutend", 'consult'),
   "base" => "aboutend",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//aboutskill
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."aboutskill", 'consult'),
   "base" => "aboutskill",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Data", 'consult'),
         "param_name" => "num",
         "value" => "",
         "description" => __("Data", 'consult')
      ),
    )));
}
//about3left
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."about3left", 'consult'),
   "base" => "about3left",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc1",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc2",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//about3right
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."about3right", 'consult'),
   "base" => "about3right",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image Slider', 'js_composer' ),
            'param_name' => 'image1',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image Slider', 'js_composer' ),
            'param_name' => 'image2',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
    )));
}
//aboutPage
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."aboutPage", 'consult'),
   "base" => "aboutPage",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image Slider', 'js_composer' ),
            'param_name' => 'image1',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image Slider', 'js_composer' ),
            'param_name' => 'image2',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//aboutMission
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."aboutMission", 'consult'),
   "base" => "aboutMission",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 1", 'consult'),
         "param_name" => "list1",
         "value" => "",
         "description" => __("List 1", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 2", 'consult'),
         "param_name" => "list2",
         "value" => "",
         "description" => __("List 2", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 3", 'consult'),
         "param_name" => "list3",
         "value" => "",
         "description" => __("List 3", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 4", 'consult'),
         "param_name" => "list4",
         "value" => "",
         "description" => __("List 4", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 5", 'consult'),
         "param_name" => "list5",
         "value" => "",
         "description" => __("List 5", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 6", 'consult'),
         "param_name" => "list6",
         "value" => "",
         "description" => __("List 6", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link data", 'consult'),
         "param_name" => "link_data",
         "value" => "",
         "description" => __("Link data", 'consult')
      ),
    )));
}
//aboutPageSidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."aboutPageSidebar", 'consult'),
   "base" => "aboutPageSidebar",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//projects
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."projects", 'consult'),
   "base" => "projects",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//testimonials
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."testimonials", 'consult'),
   "base" => "testimonials",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Star", 'consult'),
         "param_name" => "num",
         "value" => "",
         "description" => __("Number Star", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//testimonialsPage
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."testimonialsPage", 'consult'),
   "base" => "testimonialsPage",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Star", 'consult'),
         "param_name" => "num",
         "value" => "",
         "description" => __("Number Star", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//testimonialsSidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."testimonialsSidebar", 'consult'),
   "base" => "testimonialsSidebar",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//blog
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."blog", 'consult'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//blog2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."blog2", 'consult'),
   "base" => "blog2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//contact
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."contact", 'consult'),
   "base" => "contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Class", 'consult'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Icon Class", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//contactend
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."contactend", 'consult'),
   "base" => "contactend",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//company
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."company", 'consult'),
   "base" => "company",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Since", 'consult'),
         "param_name" => "since",
         "value" => "",
         "description" => __("Since", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'consult'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Link", 'consult')
      ),
    )));
}
//faq
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."faq", 'consult'),
   "base" => "faq",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Id", 'consult'),
         "param_name" => "id",
         "value" => "",
         "description" => __("Id", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Chosen active', 'js_composer' ),
         'param_name' => 'chosen',
         'value' => array(
            __( 'No', 'js_composer' ) => 'no',
            __( 'Yes', 'js_composer' ) => 'yes',
         ),
         'description' => __( 'Chosen active. Only 1 active', 'js_composer' )
      ),
    )));
}
//faqPage
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."faqPage", 'consult'),
   "base" => "faqPage",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Id", 'consult'),
         "param_name" => "id",
         "value" => "",
         "description" => __("Id", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc1",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc2",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Chosen active', 'js_composer' ),
         'param_name' => 'chosen',
         'value' => array(
            __( 'No', 'js_composer' ) => 'no',
            __( 'Yes', 'js_composer' ) => 'yes',
         ),
         'description' => __( 'Chosen active. Only 1 active', 'js_composer' )
      ),
    )));
}
//faqSidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."faqSidebar", 'consult'),
   "base" => "faqSidebar",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//teams
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."teams", 'consult'),
   "base" => "teams",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'consult'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Facebook", 'consult'),
         "param_name" => "fb",
         "value" => "",
         "description" => __("Link Facebook", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Twitter", 'consult'),
         "param_name" => "tw",
         "value" => "",
         "description" => __("Link Twitter", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Linkedin", 'consult'),
         "param_name" => "li",
         "value" => "",
         "description" => __("Link Linkedin", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Google", 'consult'),
         "param_name" => "gg",
         "value" => "",
         "description" => __("Link Google", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Member post", 'consult'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Member post", 'consult')
      ),
    )));
}
//pricing
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."pricing", 'consult'),
   "base" => "pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon class name", 'consult'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Icon class name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Object", 'consult'),
         "param_name" => "object",
         "value" => "",
         "description" => __("Object", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 1", 'consult'),
         "param_name" => "list1",
         "value" => "",
         "description" => __("List 1", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 2", 'consult'),
         "param_name" => "list2",
         "value" => "",
         "description" => __("List 2", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 3", 'consult'),
         "param_name" => "list3",
         "value" => "",
         "description" => __("List 3", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("List 4", 'consult'),
         "param_name" => "list4",
         "value" => "",
         "description" => __("List 4", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button name", 'consult'),
         "param_name" => "btn_name",
         "value" => "",
         "description" => __("Button name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button link", 'consult'),
         "param_name" => "btn_link",
         "value" => "",
         "description" => __("Button link", 'consult')
      ),
    )));
}
//parallax
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."parallax", 'consult'),
   "base" => "parallax",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button name", 'consult'),
         "param_name" => "btn_name",
         "value" => "",
         "description" => __("Button name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button link", 'consult'),
         "param_name" => "btn_link",
         "value" => "",
         "description" => __("Button link", 'consult')
      ),
    )));
}
//partner
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."partner", 'consult'),
   "base" => "partner",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
    )));
}
//partnerPages
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."partnerPages", 'consult'),
   "base" => "partnerPages",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//partnerSidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."partnerSidebar", 'consult'),
   "base" => "partnerSidebar",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//careersStart
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."careersStart", 'consult'),
   "base" => "careersStart",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image1',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image ', 'js_composer' ),
            'param_name' => 'image2',
            'value' => '',
            'description' => __( 'Select image from media library to do your signature.', 'js_composer' )
         ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
    )));
}
//careersItem
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."careersItem", 'consult'),
   "base" => "careersItem",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Class", 'consult'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Icon Class", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
    )));
}
//careersEnd
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."careersEnd", 'consult'),
   "base" => "careersEnd",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//careersSidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."careersSidebar", 'consult'),
   "base" => "careersSidebar",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   ));
}
//recent
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."recent", 'consult'),
   "base" => "recent",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'consult'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'consult'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Description", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Infomation", 'consult'),
         "param_name" => "info",
         "value" => "",
         "description" => __("Infomation", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Name View detail", 'consult'),
         "param_name" => "btn_name",
         "value" => "",
         "description" => __("Button Name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link View detail", 'consult'),
         "param_name" => "btn_link",
         "value" => "",
         "description" => __("Button Link", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Address", 'consult'),
         "param_name" => "address",
         "value" => "",
         "description" => __("Address", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Name App", 'consult'),
         "param_name" => "btn_name1",
         "value" => "",
         "description" => __("Button Name", 'consult')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link App", 'consult'),
         "param_name" => "btn_link1",
         "value" => "",
         "description" => __("Button Link", 'consult')
      ),
    )));
}