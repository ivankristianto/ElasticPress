<?php
/**
 * ElasticPress admin feature
 *
 * @since  2.1
 * @package elasticpress
 */


/**
 * Setup all feature filters
 *
 * @since  2.1
 */
function ep_user_setup() {
	add_filter( 'ep_user_indexing_active', '__return_true' );
}


/**
 * Output feature box summary
 *
 * @since 2.1
 */
function ep_user_feature_box_summary() {
	?>
	<p><?php esc_html_e( 'Index user data', 'elasticpress' ); ?></p>
	<?php
}


/**
 * Output feature box long
 *
 * @since 2.1
 */
function ep_user_feature_box_long() {
	?>
	<p><?php _e( '', 'elasticpress' ); ?></p>
	<?php
}


/**
 * Register the feature
 */
ep_register_feature( 'user', array(
	'title'                    => 'User',
	'setup_cb'                 => 'ep_user_setup',
	'feature_box_summary_cb'   => 'ep_user_feature_box_summary',
	'feature_box_long_cb'      => 'ep_user_feature_box_long',
	'requires_install_reindex' => false,
) );
