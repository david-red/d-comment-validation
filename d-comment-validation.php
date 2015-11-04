<?php
/*
Plugin Name: D Comment Validation
Plugin URI: http://ducdoan.com
Description: Validate comment form
Version: 1.0
Author: Duc Doan
Author URI: http://ducdoan.com
License: GPL2
*/

define( 'DCV_URL', plugin_dir_url( __FILE__ ) );

if ( ! is_admin() )
{
	require 'validation.php';
}