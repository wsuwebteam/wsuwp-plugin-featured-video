<?php namespace WSUWP\Plugin\Featured_Video;

class Post_Meta {

	public static function init() {

		add_action( 'init', array( __CLASS__, 'do_register_meta' ) );

	}

	public static function do_register_meta() {

		register_post_meta(
			'',
			'_wsu_featured_video_youtube',
			array(
				'type'         => 'string',
				'single'       => true,
				'default'      => '',
				'show_in_rest' => true,
			)
		);

		register_post_meta(
			'',
			'_wsu_featured_video_vimeo',
			array(
				'type'         => 'string',
				'single'       => true,
				'default'      => '',
				'show_in_rest' => true,
			)
		);
		register_post_meta(
			'',
			'_wsu_featured_thumbnail_video',
			array(
				'type'         => 'string',
				'single'       => true,
				'default'      => '',
				'show_in_rest' => true,
			)
		);
		register_post_meta(
			'',
			'_wsu_featured_video_caption',
			array(
				'type'         => 'string',
				'single'       => true,
				'default'      => '',
				'show_in_rest' => true,
			)
		);
	}


}

Post_Meta::init();
