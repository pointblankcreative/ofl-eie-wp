<?php
/**
 * Block styles.
 *
 * @package enough
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function enough_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'enough-flat-button',
			'label' => __( 'Flat button', 'enough' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'enough-shadow-button',
			'label' => __( 'Button with shadow', 'enough' ),
		)
	);
}
add_action( 'init', 'enough_register_block_styles' );
