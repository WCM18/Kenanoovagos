<?php
/**
 * Custom Feeds for Instagram Header Template
 * Adds account information and an avatar to the top of the feed
 *
 * @version 2.1 Instagram Feed by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$header_padding = (int)$settings['imagepadding'] > 0 ? 'padding: '.(int)$settings['imagepadding'] . $settings['imagepaddingunit'] . ';' : '';
$header_margin           = (int) $settings['imagepadding'] < 10 ? ' margin-bottom: 10px;' : '';

$username = SB_Instagram_Parse::get_username( $header_data );
$avatar = SB_Instagram_Parse::get_avatar( $header_data, $settings );
$name = SB_Instagram_Parse::get_name( $header_data );
$header_text_color_style = SB_Instagram_Display_Elements::get_header_text_color_styles( $settings ); // style="color: #517fa4;" already escaped
$size_class        = SB_Instagram_Display_Elements::get_header_size_class( $settings );

$bio               = SB_Instagram_Parse::get_bio( $header_data );
$should_show_bio = $settings['showbio'] && $bio !== '';
$bio_class       = ! $should_show_bio ? ' sbi_no_bio' : '';
?>
