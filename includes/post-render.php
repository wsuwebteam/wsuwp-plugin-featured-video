<?php namespace WSUWP\Plugin\Featured_Video;

class Post_Render {

	public static function init() {

		add_filter( 'the_content', array( __CLASS__, 'render_video' ) );

		add_filter( 'has_post_thumbnail', array( __CLASS__, 'check_post_thumbnail' ), 10, 3 );

	}

	public static function check_post_thumbnail( $has_thumbnail, $post, $thumbnail_id ) {

		if ( is_single() && in_the_loop() && is_main_query() ) {

			$post_id = get_the_ID();

			$youtube_id = get_post_meta( $post_id, 'wsu_featured_video_youtube', true );

			if ( ! empty( $youtube_id ) || ! empty( $vimeo_id ) ) {

				return false;

			}
		}

		return $has_thumbnail;
	}


	public static function render_video( $content ) {

		$post_id = get_the_ID();

		if ( is_singular() && in_the_loop() && is_main_query() ) {

			$youtube_id = get_post_meta( $post_id, 'wsu_featured_video_youtube', true );
			$vimeo_id   = get_post_meta( $post_id, 'wsu_featured_video_vimeo', true );

			$args = array(
				'as_background' => get_post_meta( $post_id, 'wsu_featured_video_as_background', false ),
			);

			if ( ! empty( $youtube_id ) ) {

				$content = self::get_youtube_player( $youtube_id, $args ) . $content;

			} elseif ( ! empty( $vimeo_id ) ) {

				$content = self::get_vimeo_player( $vimeo_id, $args ) . $content;

			}
		}

		return $content;

	}

	protected static function get_youtube_player( $video_id, $args ) {

		ob_start();

		include Plugin::get( 'dir' ) . '/templates/post-youtube.php';

		return ob_get_clean();

	}

	protected static function get_vimeo_player( $video_id, $args ) {

		ob_start();

		if ( ! empty( $args['as_background'] ) ) {

			include Plugin::get( 'dir' ) . '/templates/post-vimeo-background.php';

		}

		return ob_get_clean();

	}


}

Post_Render::init();
