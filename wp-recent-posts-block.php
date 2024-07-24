<?php
/**
 * Plugin Name:       Recent posts
 * Description:       This block allows you to list the 5 most recent posts on yor site.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Calvin Rodrigues
 * Author URI:        https://calvinrodrigues.in
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-recent-posts-block
 *
 * @package WpRecentPosts
 */

 defined( 'ABSPATH' ) || exit;

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 */
function wp_recent_posts_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'wp_recent_posts_block_block_init' );
