<div class="wsu-featured-video__wrapper" style="margin-bottom: 2rem">
	<iframe class="wsu-featured-video wsu-featured-video--vimeo" src="https://player.vimeo.com/video/<?php echo esc_attr( $video_id ); ?>?background=1" width="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="" title="WSU" style="aspect-ratio: 16 / 9; max-width: 100%;"></iframe>
	<?php if ( ! empty( $video_caption ) ) : ?><div class="wsu-featured-video__caption"><?php echo wp_kses_post( $video_caption ); ?></div><?php endif; ?>
</div>
