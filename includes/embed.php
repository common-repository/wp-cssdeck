<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * CSSDeck Embed
 * Register embed handler.
 *
 * @since 1.0
 */
function cssdeck_embed_handler( $matches, $attr, $url, $rawattr ) {

	$embed = sprintf(
		'<pre class="_cssdeck_embed" data-pane="output" data-user="" data-href="%1$s" data-version="0"></pre><script async src="http://cssdeck.com/assets/js/embed.js"></script>',
		esc_attr( $matches[2] )
	);

	return apply_filters( 'embed_cssdeck', $embed, $matches, $attr, $url, $rawattr );

}

function cssdeck_embed() {

	wp_embed_register_handler(
		'cssdeck',
		'#https?://(www.)?cssdeck.com/labs/(.*)#i',
		'cssdeck_embed_handler'
	);

}

add_action( 'init', 'cssdeck_embed' );
