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
  <body class="error-page" style="background: url(<?php if(isset($consult_redux_demo['404_image']['url']) && $consult_redux_demo['404_image']['url'] != ''){?><?php echo esc_url($consult_redux_demo['404_image']['url']);?><?php }else{ ?><?php echo '<?php echo get_template_directory_uri();?>/images/404.jpg'; ?><?php } ?>) center center/cover no-repeat local;">
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