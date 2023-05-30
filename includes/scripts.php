<?php namespace WSUWP\Plugin\Featured_Video;

class Scripts {

	public static function init() {

        add_action( 'enqueue_block_editor_assets', array( __CLASS__, 'enqueue_block_editor_assets' ) );

	}

    public static function enqueue_block_editor_assets() {

		$wds_version = get_theme_mod( 'wsu_wds_version', '2.x' );

		// Block Editor
		wp_enqueue_script(
			'wsuwp-plugin-featured-video-editor-scripts',
			Plugin::get( 'url' ) . 'dist/editor.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-dom-ready', 'wp-edit-post' ),
			Plugin::get( 'version' ),
			true
		);

	}


}

Scripts::init();
