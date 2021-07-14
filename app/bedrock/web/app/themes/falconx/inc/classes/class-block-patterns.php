<?php
/**
 * Block Patterns
 *
 * @package Falconx
 */

namespace FALCONX_THEME\Inc;

use FALCONX_THEME\Inc\Traits\Singleton;

class Block_Patterns {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );
	}

	public function register_block_patterns() {
		if ( function_exists( 'register_block_pattern' ) ) {

			/**
			 * Cover Pattern
			 */
			$cover_content = $this->get_pattern_content( 'template-parts/patterns/cover' );

			register_block_pattern(
				'falconx/cover',
				[
					'title' => __( 'Falconx Cover', 'falconx' ),
					'description' => __( 'Falconx Cover Block with image and text', 'falconx' ),
					'categories' => [ 'cover' ],
					'content' => $cover_content,
				]
			);

			/**
			 * Expertise Column Pattern
			 */
			$expertise_columns_content = $this->get_pattern_content( 'template-parts/patterns/expertise-columns' );

			register_block_pattern(
				'falconx/expertise-columns',
				[
					'title' => __( 'Falconx Expertise Column', 'falconx' ),
					'description' => __( 'Falconx expertise columns', 'falconx' ),
					'categories' => [ 'columns' ],
					'content' => $expertise_columns_content,
				]
			);

			/**
			 * Expertise Column Pattern
			 */
			$why_columns_content = $this->get_pattern_content( 'template-parts/patterns/why-columns' );

			register_block_pattern(
				'falconx/why-columns',
				[
					'title' => __( 'Falconx Why Column', 'falconx' ),
					'description' => __( 'Falconx why columns', 'falconx' ),
					'categories' => [ 'cover' ],
					'content' => $why_columns_content,
				]
			);

			/**
			 * Expertise Column Pattern
			 */
			$outcomes_columns_content = $this->get_pattern_content( 'template-parts/patterns/outcomes-columns' );

			register_block_pattern(
				'falconx/outcomes-columns',
				[
					'title' => __( 'Falconx outcomes Column', 'falconx' ),
					'description' => __( 'Falconx outcomes column', 'falconx' ),
					'categories' => [ 'columns' ],
					'content' => $outcomes_columns_content,
				]
			);

			/**
			 * Footer Column Pattern
			 */
			$footer_column_content = $this->get_pattern_content( 'template-parts/patterns/footer-column' );

			register_block_pattern(
				'falconx/footer-column',
				[
					'title' => __( 'Falconx Footer Column', 'falconx' ),
					'description' => __( 'Falconx footer column', 'falconx' ),
					'categories' => [ 'columns' ],
					'content' => $footer_column_content,
				]
			);
		}
	}

	public function get_pattern_content( $template_path ) {

		ob_start();

		get_template_part( $template_path );

		$pattern_content = ob_get_contents();

		ob_end_clean();

		return $pattern_content;
	}

	public function register_block_pattern_categories() {

		$pattern_categories = [
			'cover' => __( 'Cover', 'falconx' ),
			'columns' => __( 'Columns', 'falconx' ),
		];

		if ( ! empty( $pattern_categories ) && is_array( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
				register_block_pattern_category(
					$pattern_category,
					[ 'label' => $pattern_category_label ]
				);
			}
		}
	}


}
