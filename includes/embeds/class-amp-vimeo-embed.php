<?php
/**
 * Class AMP_Vimeo_Embed_Handler
 *
 * @package AMP
 */

/**
 * Class AMP_Vimeo_Embed_Handler
 *
 * Much of this class is borrowed from Jetpack embeds
 */
class AMP_Vimeo_Embed_Handler extends AMP_Base_Embed_Handler {

	/**
	 * The embed URL pattern.
	 *
	 * @var string
	 */
	const URL_PATTERN = '#https?:\/\/(www\.)?vimeo\.com\/.*#i';

	/**
	 * The aspect ratio.
	 *
	 * @var float
	 */
	const RATIO = 0.5625;

	/**
	 * The tag (name) of the shortcode.
	 *
	 * @var string
	 */
	const SHORTCODE_TAG = 'vimeo';

	/**
	 * Default width.
	 *
	 * @var int
	 */
	protected $DEFAULT_WIDTH = 600;

	/**
	 * Default height.
	 *
	 * @var int
	 */
	protected $DEFAULT_HEIGHT = 338;

	/**
	 * AMP_Vimeo_Embed_Handler constructor.
	 *
	 * @param array $args Height, width and maximum width for embed.
	 */
	public function __construct( $args = [] ) {
		parent::__construct( $args );

		if ( isset( $this->args['content_max_width'] ) ) {
			$max_width            = $this->args['content_max_width'];
			$this->args['width']  = $max_width;
			$this->args['height'] = round( $max_width * self::RATIO );
		}
	}

	/**
	 * Register embed.
	 */
	public function register_embed() {
		wp_embed_register_handler( 'amp-vimeo', self::URL_PATTERN, [ $this, 'oembed' ], -1 );
		if ( ! class_exists( 'Jetpack_AMP_Vimeo_Shortcode' ) ) {
			add_shortcode( self::SHORTCODE_TAG, [ $this, 'shortcode' ] );
		}
		add_filter( 'wp_video_shortcode_override', [ $this, 'video_override' ], 10, 2 );
	}

	/**
	 * Unregister embed.
	 */
	public function unregister_embed() {
		wp_embed_unregister_handler( 'amp-vimeo', -1 );
		if ( ! class_exists( 'Jetpack_AMP_Vimeo_Shortcode' ) ) {
			remove_shortcode( self::SHORTCODE_TAG );
		}
	}

	/**
	 * Gets AMP-compliant markup for the Vimeo shortcode.
	 *
	 * @deprecated 1.4.1 in favor of Jetpack_AMP_Vimeo_Shortcode::filter_shortcode().
	 *
	 * @param array $attr The Vimeo attributes.
	 * @return string Vimeo shortcode markup.
	 */
	public function shortcode( $attr ) {
		$video_id = false;

		if ( isset( $attr['id'] ) ) {
			$video_id = $attr['id'];
		} elseif ( isset( $attr['url'] ) ) {
			$video_id = $this->get_video_id_from_url( $attr['url'] );
		} elseif ( isset( $attr[0] ) ) {
			$video_id = $this->get_video_id_from_url( $attr[0] );
		} elseif ( function_exists( 'shortcode_new_to_old_params' ) ) {
			$video_id = shortcode_new_to_old_params( $attr );
		}

		if ( empty( $video_id ) ) {
			return '';
		}

		return $this->render(
			[
				'video_id' => $video_id,
			]
		);
	}

	/**
	 * Render oEmbed.
	 *
	 * @see \WP_Embed::shortcode()
	 *
	 * @param array  $matches URL pattern matches.
	 * @param array  $attr    Shortcode attribues.
	 * @param string $url     URL.
	 * @param string $rawattr Unmodified shortcode attributes.
	 * @return string Rendered oEmbed.
	 */
	public function oembed( $matches, $attr, $url, $rawattr ) {
		$video_id = $this->get_video_id_from_url( $url );

		return $this->render(
			[
				'url'      => $url,
				'video_id' => $video_id,
			]
		);
	}

	/**
	 * Render.
	 *
	 * @param array $args Args.
	 * @return string Rendered.
	 */
	public function render( $args ) {
		$args = wp_parse_args(
			$args,
			[
				'video_id' => false,
			]
		);

		if ( empty( $args['video_id'] ) ) {
			return AMP_HTML_Utils::build_tag(
				'a',
				[
					'href'  => esc_url( $args['url'] ),
					'class' => 'amp-wp-embed-fallback',
				],
				esc_html( $args['url'] )
			);
		}

		$this->did_convert_elements = true;

		return AMP_HTML_Utils::build_tag(
			'amp-vimeo',
			[
				'data-videoid' => $args['video_id'],
				'layout'       => 'responsive',
				'width'        => $this->args['width'],
				'height'       => $this->args['height'],
			]
		);
	}

	/**
	 * Determine the video ID from the URL.
	 *
	 * @param string $url URL.
	 * @return int Video ID.
	 */
	private function get_video_id_from_url( $url ) {
		$path = wp_parse_url( $url, PHP_URL_PATH );

		// @todo This will not get the private key for unlisted videos (which look like https://vimeo.com/123456789/abcdef0123), but amp-vimeo doesn't support them currently anyway.
		$video_id = '';
		if ( $path && preg_match( ':^/(\d+):', $path, $matches ) ) {
			$video_id = $matches[1];
		}

		return $video_id;
	}

	/**
	 * Override the output of Vimeo videos.
	 *
	 * This overrides the value in wp_video_shortcode().
	 * The pattern matching is copied from WP_Widget_Media_Video::render().
	 *
	 * @param string $html Empty variable to be replaced with shortcode markup.
	 * @param array  $attr The shortcode attributes.
	 * @return string|null $markup The markup to output.
	 */
	public function video_override( $html, $attr ) {
		if ( ! isset( $attr['src'] ) ) {
			return $html;
		}
		$src           = $attr['src'];
		$vimeo_pattern = '#^https?://(.+\.)?vimeo\.com/.*#';
		if ( 1 === preg_match( $vimeo_pattern, $src ) ) {
			return $this->shortcode( [ $src ] );
		}
		return $html;
	}

}
