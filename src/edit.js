import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

/**
 * Block structure in the editor.
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	return (
		<p { ...useBlockProps() }>
			{ __(
				'Recent posts – hello from the editor!',
				'wp-recent-posts-block'
			) }
		</p>
	);
}
