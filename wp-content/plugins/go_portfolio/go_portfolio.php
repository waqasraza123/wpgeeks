<?php
/**
 *
 * @package   Go – Responsive Portfolio for WP (shared on wplocker.com)
 * @author    Granth <granthweb@gmail.com>
 * @link      http://granthweb.com
 * @copyright 2015 Granth
 *
 * Plugin Name: Go – Responsive Portfolio for WP
 * Plugin URI:  http://codecanyon.net/user/Granth
 * Description: Portfolio manager plugin. This plugin allows you to manage, edit, and create new portfolios, showcases or teasers.
 * Version:     1.6.2
 * Author:      Granth
 * Author URI:  http://codecanyon.net/user/Granth
 * Text Domain: go_portfolio_textdomain
 * Domain Path: /lang
 */

/* Prevent direct call */
if ( ! defined( 'WPINC' ) ) { die; }

/* Load includes */
require_once( plugin_dir_path( __FILE__ ) . 'class_go_portfolio.php' );
require_once( plugin_dir_path( __FILE__ ) . trailingslashit( 'includes/vc' ) . 'class_vc_extend.php' );

/* Register hooks */
register_activation_hook( __FILE__, array( 'GW_Go_Portfolio', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'GW_Go_Portfolio', 'deactivate' ) );
register_uninstall_hook( __FILE__, array( 'GW_Go_Portfolio', 'uninstall' ) );

/* Init */
GW_Go_Portfolio::get_instance();

?>