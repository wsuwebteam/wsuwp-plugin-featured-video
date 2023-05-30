<?php namespace WSUWP\Plugin\Featured_Video;

class Plugin {


	public static function get( $property ) {

		switch ( $property ) {

			case 'version':
				return '1.0.0';

			case 'dir':
				return plugin_dir_path( dirname( __FILE__ ) );

			case 'url':
				return plugin_dir_url( dirname( __FILE__ ) );

			default:
				return '';

		}

	}





	public static function init() {

        include_once __DIR__ . '/scripts.php';
        include_once __DIR__ . '/post-meta.php';
        include_once __DIR__ . '/post-render.php';
	}


}

Plugin::init();
