<?php
/**
 * Render content on forntend.
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Recent posts – hello from a dynamic block!', 'wp-recent-posts-block' ); ?>
</p>
