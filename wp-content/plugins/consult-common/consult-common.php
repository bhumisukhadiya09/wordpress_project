<?php
/**
* Plugin Name: Consult Common
* Description: A plugin to create custom post type, metabox...
* Version:  1.0
* Author: Themexriver
* Author URI: http://themeforest.net/user/themexriver/
* License:  GPL2
*/

include dirname( __FILE__ ) . '/custom-post-type/post_type.php';
include dirname( __FILE__ ) . '/Custom-Metaboxes/metabox-functions.php';
include dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php';
include dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php';
return true;