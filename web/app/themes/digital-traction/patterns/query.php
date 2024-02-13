<?php
/**
 * Title: Query
 * Slug: digital-traction/query
 * Categories: posts, theme
 * Block Types: core/query
 *
 * @package digital-traction
 * @since 1.0.0
 */

?>
<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-title {"level":2,"isLink":true} /-->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left"}} -->
		<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
		<!-- wp:post-author-name {"isLink":true} /-->
		<!-- wp:post-date /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html__( 'Categories: ', 'digital-traction' )?>"} /-->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->
		<!-- wp:post-excerpt /-->
		<!-- wp:spacer {"height":"1rem"} -->
		<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<!-- /wp:post-template -->
	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'No results', 'digital-traction' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"label":"<?php esc_html_e( 'Previous', 'digital-traction'); ?>"} /-->
	<!-- wp:query-pagination-next {"label":"<?php esc_html_e( 'Next', 'digital-traction'); ?>"} /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
