
/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';

/**
 * WordPress dependencies
 */
import { PanelBody, TextControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               Properties passed to the function.
 * @param {Object}   props.attributes    Available block attributes.
 * @param {Function} props.setAttributes Function that updates individual attributes.
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { prefix, suffix } = attributes;
	const currentYear = new Date().getFullYear();

	const blockProps = useBlockProps( {
		className: 'wp-block-telex-current-year',
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody
					title={ __( 'Year Settings', 'wpm-current-year' ) }
					initialOpen={ true }
				>
					<TextControl
						label={ __( 'Prefix Text', 'wpm-current-year' ) }
						value={ prefix }
						onChange={ ( value ) =>
							setAttributes( { prefix: value } )
						}
						help={ __(
							'Text to display before the year (e.g., "Copyright © ")',
							'wpm-current-year'
						) }
					/>
					<TextControl
						label={ __( 'Suffix Text', 'wpm-current-year' ) }
						value={ suffix }
						onChange={ ( value ) =>
							setAttributes( { suffix: value } )
						}
						help={ __(
							'Text to display after the year',
							'wpm-current-year'
						) }
					/>
				</PanelBody>
			</InspectorControls>
			<span { ...blockProps }>
				{ prefix }
				{ currentYear }
				{ suffix }
			</span>
		</>
	);
}
