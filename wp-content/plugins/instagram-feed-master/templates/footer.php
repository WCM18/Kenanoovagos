<?php
/**
 * Custom Feeds for Instagram Footer Template
 * Adds pagination and html for errors and resized images
 *
 * @version 2.1 Instagram Feed by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$follow_btn_style   = SB_Instagram_Display_Elements::get_follow_styles( $settings ); // style="background: rgb();color: rgb();"  already escaped
$follow_btn_classes = strpos( $follow_btn_style, 'background' ) !== false ? ' sbi_custom' : '';
$show_follow_button = ( $settings['showfollow'] == 'on' || $settings['showfollow'] == 'true' || $settings['showfollow'] == true ) && $settings['showfollow'] !== 'false';
$follow_button_text = __( $settings['followtext'], 'instagram-feed' );

$load_btn_style   = SB_Instagram_Display_Elements::get_load_button_styles( $settings ); // style="background: rgb();color: rgb();" already escaped
$load_btn_classes = strpos( $load_btn_style, 'background' ) !== false ? ' sbi_custom' : '';
$load_button_text = __( $settings['buttontext'], 'instagram-feed' );
?>
