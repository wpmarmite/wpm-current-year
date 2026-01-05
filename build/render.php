<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$prefix = isset( $attributes['prefix'] ) ? $attributes['prefix'] : '';
$suffix = isset( $attributes['suffix'] ) ? $attributes['suffix'] : '';
$current_year = date( 'Y' );
?>
<span <?php echo get_block_wrapper_attributes(); ?>>
	<?php 
	echo esc_html( $prefix ) . esc_html( $current_year ) . esc_html( $suffix ); 
	?>
</span>