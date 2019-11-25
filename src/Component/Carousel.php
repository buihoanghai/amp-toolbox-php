<?php
/**
 * Class Carousel.
 *
 * @package Amp\AmpWP
 */

namespace Amp\AmpWP\Component;

use DOMDocument;
use DOMElement;
use AMP_DOM_Utils;

/**
 * Class Carousel
 *
 * Gets the markup for an <amp-carousel>.
 *
 * @internal
 * @since 1.5.0
 */
final class Carousel {

	/**
	 * Value used for width of amp-carousel.
	 *
	 * @var int
	 */
	const FALLBACK_WIDTH = 600;

	/**
	 * Value used for height of amp-carousel.
	 *
	 * @var int
	 */
	const FALLBACK_HEIGHT = 480;

	/**
	 * An object representation of the DOM.
	 *
	 * @var DOMDocument
	 */
	private $dom;

	/**
	 * The images to add to the carousel.
	 *
	 * @var DOMElementList
	 */
	protected $images;

	/**
	 * Instantiates the class.
	 *
	 * @param DOMDocument    $dom    The dom to use to create a carousel.
	 * @param DOMElementList $images The images from which to create a carousel.
	 */
	public function __construct( $dom, DOMElementList $images ) {
		$this->dom    = $dom;
		$this->images = $images;
	}

	/**
	 * Gets the carousel element.
	 *
	 * @return DOMElement An <amp-carousel> with the images.
	 */
	public function get_dom_element() {
		list( $width, $height ) = $this->get_dimensions();
		$amp_carousel           = AMP_DOM_Utils::create_node(
			$this->dom,
			'amp-carousel',
			[
				'width'  => $width,
				'height' => $height,
				'type'   => 'slides',
				'layout' => 'responsive',
			]
		);

		foreach ( $this->images as $image ) {
			$image_node = $image instanceof HasCaption ? $image->get_slide_node() : $image;
			$caption    = $image instanceof HasCaption ? $image->get_caption() : null;
			$slide      = AMP_DOM_Utils::create_node(
				$this->dom,
				'div',
				[ 'class' => 'slide' ]
			);

			// Ensure the image fills the entire <amp-carousel>, so the possible caption looks right.
			if ( 'amp-img' === $image_node->tagName ) {
				$image_node->setAttribute( 'layout', 'fill' );
				$image_node->setAttribute( 'object-fit', 'cover' );
			} elseif ( isset( $image_node->firstChild->tagName ) && 'amp-img' === $image_node->firstChild->tagName ) {
				// If the <amp-img> is wrapped in an <a>.
				$image_node->firstChild->setAttribute( 'layout', 'fill' );
				$image_node->firstChild->setAttribute( 'object-fit', 'cover' );
			}

			$slide->appendChild( $image_node );

			// If there's a caption, wrap it in a <div> and <span>, and append it to the slide.
			if ( $caption ) {
				$caption_wrapper = AMP_DOM_Utils::create_node(
					$this->dom,
					'div',
					[ 'class' => 'amp-wp-gallery-caption' ]
				);
				$caption_span    = AMP_DOM_Utils::create_node( $this->dom, 'span', [] );
				$text_node       = $this->dom->createTextNode( $caption );

				$caption_span->appendChild( $text_node );
				$caption_wrapper->appendChild( $caption_span );
				$slide->appendChild( $caption_wrapper );
			}

			$amp_carousel->appendChild( $slide );
		}

		return $amp_carousel;
	}

	/**
	 * Gets the carousel's width and height, based on its images.
	 *
	 * This will return the width and height of the image with the widest aspect ratio,
	 * not necessarily the image with the biggest absolute width.
	 *
	 * @return array {
	 *     The carousel dimensions.
	 *
	 *     @type int $width  The width of the carousel, at index 0.
	 *     @type int $height The height of the carousel, at index 1.
	 * }
	 */
	public function get_dimensions() {
		if ( 0 === count( $this->images ) ) {
			return [ self::FALLBACK_WIDTH, self::FALLBACK_HEIGHT ];
		}

		$max_aspect_ratio = 0;
		$carousel_width   = 0;
		$carousel_height  = 0;

		foreach ( $this->images as $image ) {
			$image_node = $image instanceof HasCaption ? $image->get_slide_node() : $image;
			// Account for an <amp-img> that's wrapped in an <a>.
			if ( 'amp-img' !== $image_node->tagName && isset( $image_node->firstChild->tagName ) && 'amp-img' === $image_node->firstChild->tagName ) {
				$image_node = $image_node->firstChild;
			}

			if ( ! is_numeric( $image_node->getAttribute( 'width' ) ) || ! is_numeric( $image_node->getAttribute( 'height' ) ) ) {
				continue;
			}

			$width  = (float) $image_node->getAttribute( 'width' );
			$height = (float) $image_node->getAttribute( 'height' );

			if ( empty( $width ) || empty( $height ) ) {
				continue;
			}

			$this_aspect_ratio = $width / $height;
			if ( $this_aspect_ratio > $max_aspect_ratio ) {
				$max_aspect_ratio = $this_aspect_ratio;
				$carousel_width   = $width;
				$carousel_height  = $height;
			}
		}

		return [ $carousel_width, $carousel_height ];
	}
}
