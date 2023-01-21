<?php
/**
 * Customizer settings default value
 *
 * @package Kenta Aurora
 */

if ( ! function_exists( 'kenta_aurora_return_yes' ) ) {
	function kenta_aurora_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'kenta_aurora_return_no' ) ) {
	function kenta_aurora_return_no() {
		return 'no';
	}
}

// Disable site wrap by default
add_filter( 'kenta_enable_site_wrap_default_value', 'kenta_aurora_return_no' );
// Show blogs archive header by default
add_filter( 'kenta_disable_blogs_archive_header_default_value', 'kenta_aurora_return_no' );
// Enable transparent header by default
add_filter( 'kenta_enable_transparent_header_default_value', 'kenta_aurora_return_yes' );
// Enable transparent header in archive page
add_filter( 'kenta_disable_archive_transparent_header_default_value', 'kenta_aurora_return_no' );

//
// Sidebar
//
add_filter( 'kenta_post_sidebar_section_default_value', 'kenta_aurora_return_yes' );
add_filter( 'kenta_archive_sidebar_section_default_value', 'kenta_aurora_return_yes' );

//
// Archive entry
//
if ( ! function_exists( 'kenta_aurora_archive_columns' ) ) {
	function kenta_aurora_archive_columns() {
		return [
			'desktop' => 1,
			'tablet'  => 1,
			'mobile'  => 1,
		];
	}
}
add_filter( 'kenta_archive_columns_default_value', 'kenta_aurora_archive_columns' );

if ( ! function_exists( 'kenta_aurora_entry_thumbnail_size' ) ) {
	function kenta_aurora_entry_thumbnail_size() {
		return 'large';
	}
}
add_filter( 'kenta_entry_thumbnail_size_default_value', 'kenta_aurora_entry_thumbnail_size' );

if ( ! function_exists( 'kenta_aurora_entry_thumbnail_height' ) ) {
	function kenta_aurora_entry_thumbnail_height() {
		return '360px';
	}
}
add_filter( 'kenta_entry_thumbnail_height_default_value', 'kenta_aurora_entry_thumbnail_height' );

//
// Article
//
if ( ! function_exists( 'kenta_aurora_article_container_layout' ) ) {
	function kenta_aurora_article_container_layout() {
		return 'normal';
	}
}
add_filter( 'kenta_single_post_container_layout_default_value', 'kenta_aurora_article_container_layout' );

if ( ! function_exists( 'kenta_aurora_article_spacing' ) ) {
	function kenta_aurora_article_spacing() {
		return array(
			'top'    => '128px',
			'right'  => '0px',
			'bottom' => '68px',
			'left'   => '0px',
			'linked' => false,
		);
	}
}
add_filter( 'kenta_post_header_spacing_default_value', 'kenta_aurora_article_spacing' );
add_filter( 'kenta_page_header_spacing_default_value', 'kenta_aurora_article_spacing' );

//
//  Card style
//
if ( ! function_exists( 'kenta_aurora_card_preset' ) ) {
	function kenta_aurora_card_preset() {
		return 'mixed';
	}
}
add_filter( 'kenta_card_style_preset_default_value', 'kenta_aurora_card_preset' );
add_filter( 'kenta_store_card_style_preset_default_value', 'kenta_aurora_card_preset' );
add_filter( 'kenta_global_sidebar_widgets-style_default_value', 'kenta_aurora_card_preset' );
add_filter( 'kenta_post_content_style_preset_default_value', 'kenta_aurora_card_preset' );

//
// Article & Archive header style
//
if ( ! function_exists( 'kenta_aurora_article_featured_image_position' ) ) {
	/**
	 * Change default article featured image position design
	 *
	 * @return string
	 */
	function kenta_aurora_article_featured_image_position() {
		return 'behind';
	}
}
add_filter( 'kenta_post_featured_image_position_default_value', 'kenta_aurora_article_featured_image_position' );
add_filter( 'kenta_page_featured_image_position_default_value', 'kenta_aurora_article_featured_image_position' );


if ( ! function_exists( 'kenta_aurora_remove_default_content_spacing' ) ) {
	/**
	 * Remove default content spacing
	 *
	 * @return string
	 */
	function kenta_aurora_remove_default_content_spacing() {
		return '0x';
	}
}
//add_filter( 'kenta_single_post_content_spacing_default_value', 'kenta_aurora_remove_default_content_spacing' );
add_filter( 'kenta_pages_content_spacing_default_value', 'kenta_aurora_remove_default_content_spacing' );

if ( ! function_exists( 'kenta_aurora_default_archive_header_padding' ) ) {
	/**
	 * Change default padding for archive header
	 *
	 * @return array
	 */
	function kenta_aurora_default_archive_header_padding() {
		return array(
			'top'    => '148px',
			'bottom' => '68px',
			'left'   => '24px',
			'right'  => '24px',
			'linked' => false
		);
	}
}
add_filter( 'kenta_archive_header_padding_default_value', 'kenta_aurora_default_archive_header_padding' );

if ( ! function_exists( 'kenta_aurora_archive_title_typography' ) ) {
	function kenta_aurora_archive_title_typography() {
		return array(
			'family'        => 'inherit',
			'fontSize'      => [ 'desktop' => '3rem', 'tablet' => '2rem', 'mobile' => '1.875em' ],
			'variant'       => '700',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		);
	}
}
add_filter( 'kenta_archive_title_typography_default_value', 'kenta_aurora_archive_title_typography' );

if ( ! function_exists( 'kenta_aurora_archive_title_color' ) ) {
	function kenta_aurora_archive_title_color() {
		return array(
			'initial' => '#fff'
		);
	}
}
add_filter( 'kenta_archive_title_color_default_value', 'kenta_aurora_archive_title_color' );

// Enable archive header overlay
add_filter( 'kenta_archive_header_has_overlay_default_value', 'kenta_aurora_return_yes' );

if ( ! function_exists( 'kenta_aurora_archive_description_color' ) ) {
	function kenta_aurora_archive_description_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
		);
	}
}
add_filter( 'kenta_archive_description_color_default_value', 'kenta_aurora_archive_description_color' );

if ( ! function_exists( 'kenta_aurora_hero_background' ) ) {
	/**
	 * Change default hero background for archive
	 *
	 * @return array
	 */
	function kenta_aurora_hero_background() {
		return array(
			'type'  => 'image',
			'image' => array(
				'color'  => 'var(--kenta-accent-color)',
				'size'   => 'cover',
				'repeat' => 'no-repeat',
				'source' => array(
					'url' => KENTA_AURORA_ASSETS_URL . 'images/hero-background.jpg',
					'x'   => 0.5,
					'y'   => 0.5,
				)
			),
		);
	}
}
add_filter( 'kenta_archive_header_background_default_value', 'kenta_aurora_hero_background' );

if ( ! function_exists( 'kenta_aurora_featured_image_background_overlay' ) ) {
	/**
	 * Change default hero background for single posts and pages
	 *
	 * @return array
	 */
	function kenta_aurora_featured_image_background_overlay() {
		return array(
			'type'  => 'color',
			'color' => 'var(--kenta-accent-color)'
		);
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_default_value', 'kenta_aurora_featured_image_background_overlay' );
add_filter( 'kenta_page_featured_image_background_overlay_default_value', 'kenta_aurora_featured_image_background_overlay' );

if ( ! function_exists( 'kenta_aurora_featured_image_fallback' ) ) {
	function kenta_aurora_featured_image_fallback() {
		return array(
			'url' => KENTA_AURORA_ASSETS_URL . 'images/hero-background.jpg',
			'x'   => 0.5,
			'y'   => 0.5,
		);
	}
}
add_filter( 'kenta_post_featured_image_fallback_default_value', 'kenta_aurora_featured_image_fallback' );
add_filter( 'kenta_page_featured_image_fallback_default_value', 'kenta_aurora_featured_image_fallback' );
// Disable fallback image in archive
add_filter( 'kenta_entry_thumbnail_use_fallback_default_value', 'kenta_aurora_return_no' );

if ( ! function_exists( 'kenta_aurora_featured_image_elements_override' ) ) {
	function kenta_aurora_featured_image_elements_override() {
		return array(
			'override' => '#fff'
		);
	}
}
add_filter( 'kenta_post_featured_image_elements_override_default_value', 'kenta_aurora_featured_image_elements_override' );
add_filter( 'kenta_page_featured_image_elements_override_default_value', 'kenta_aurora_featured_image_elements_override' );

//
// Transparent Header settings
//

if ( ! function_exists( 'kenta_aurora_transparent_header_device' ) ) {
	function kenta_aurora_transparent_header_device() {
		return 'all';
	}
}
add_filter( 'kenta_enable_transparent_header_device_default_value', 'kenta_aurora_transparent_header_device' );

if ( ! function_exists( 'kenta_aurora_trans_header_site_title_color' ) ) {
	function kenta_aurora_trans_header_site_title_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
		);
	}
}
add_filter( 'kenta_trans_header_site_title_color_default_value', 'kenta_aurora_trans_header_site_title_color' );

if ( ! function_exists( 'kenta_aurora_trans_header_menu_color' ) ) {
	function kenta_aurora_trans_header_menu_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
			'active'  => '#fff',
		);
	}
}
add_filter( 'kenta_trans_header_menu_color_default_value', 'kenta_aurora_trans_header_menu_color' );

if ( ! function_exists( 'kenta_aurora_trans_header_button_color' ) ) {
	function kenta_aurora_trans_header_button_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
		);
	}
}
add_filter( 'kenta_trans_header_button_color_default_value', 'kenta_aurora_trans_header_button_color' );

//
// Default color preset
//

if ( ! function_exists( 'kenta_aurora_default_color_presets' ) ) {
	function kenta_aurora_default_color_presets() {
		return 'kenta-aurora';
	}
}
add_filter( 'kenta_color_palettes_default_value', 'kenta_aurora_default_color_presets' );

if ( ! function_exists( 'kenta_aurora_color_presets' ) ) {
	function kenta_aurora_color_presets( $presets ) {
		$presets['kenta-aurora'] = array(
			'kenta-primary-color'  => '#3ba956',
			'kenta-primary-active' => '#16a34a',
			'kenta-accent-color'   => '#041f38',
			'kenta-accent-active'  => '#363d49',
			'kenta-base-300'       => '#e2e8f0',
			'kenta-base-200'       => '#f1f5f9',
			'kenta-base-100'       => '#f8fafc',
			'kenta-base-color'     => '#ffffff',
		);

		return $presets;
	}
}
add_filter( 'kenta_filter_color_presets', 'kenta_aurora_color_presets' );

//
// Header elements
//

if ( ! function_exists( 'kenta_aurora_header_primary_row_elements' ) ) {
	function kenta_aurora_header_primary_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '30%' ]
				],
				[
					'elements' => [ 'menu-1', 'socials', 'search' ],
					'settings' => [ 'width' => '70%', 'justify-content' => 'flex-end', 'elements-gap' => '16px' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '70%', ]
				],
				[
					'elements' => [ 'socials', 'search', 'trigger' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end', 'elements-gap' => '16px' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_primary_row_default_value', 'kenta_aurora_header_primary_row_elements' );

if ( ! function_exists( 'kenta_aurora_header_socials_icons_color_type' ) ) {
	function kenta_aurora_header_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'kenta_header_el_socials_icons_color_type_default_value', 'kenta_aurora_header_socials_icons_color_type' );

if ( ! function_exists( 'kenta_aurora_header_socials_icons_color' ) ) {
	function kenta_aurora_header_socials_icons_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
		);
	}
}
add_filter( 'kenta_header_el_socials_icons_color_default_value', 'kenta_aurora_header_socials_icons_color' );

//
// Footer elements
//

if ( ! function_exists( 'kenta_aurora_footer_middle_row_elements' ) ) {
	function kenta_aurora_footer_middle_row_elements() {
		return [
			[
				'elements' => [],
				'settings' => [
					'width'   => [ 'desktop' => '25%', 'tablet' => '50%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [],
				'settings' => [
					'width'   => [ 'desktop' => '25%', 'tablet' => '50%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [],
				'settings' => [
					'width'   => [ 'desktop' => '25%', 'tablet' => '50%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [],
				'settings' => [
					'width'   => [ 'desktop' => '25%', 'tablet' => '50%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			]
		];
	}
}
add_filter( 'kenta_footer_middle_row_default_value', 'kenta_aurora_footer_middle_row_elements' );
