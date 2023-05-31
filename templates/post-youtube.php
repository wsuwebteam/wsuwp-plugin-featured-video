<div class="wsu-featured-video__wrapper" style="margin-bottom: 2rem">
	<iframe width="100%" style="aspect-ratio: 16 / 9; max-width: 100%;" src="https://www.youtube.com/embed/<?php echo esc_attr( $video_id ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	<?php if ( ! empty( $video_caption ) ) : ?><div class="wsu-featured-video__caption"><?php echo wp_kses_post( $video_caption ); ?></div><?php endif; ?>
</div>
