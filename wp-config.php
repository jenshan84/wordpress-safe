<?php
$wp_domain = $_SERVER['SERVER_NAME'];
$wwwroot = '/www/wwwroot/';

define( 'WP_PLUGIN_DIR',$wwwroot.$wp_domain.'/wp-content/plugins' );
define( 'WP_CONTENT_DIR',$wwwroot.$wp_domain. '/wp-content' );

define( 'WP_POST_REVISIONS', 5 );

define('FS_METHOD','direct');

require_once($wwwroot.$wp_domain.'/wp-config.php');
//var_dump($wp_domain);
?>