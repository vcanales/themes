<?php
/**
 * Title: index
 * Slug: matrioska/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:4rem"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","order<?php echo __('By', 'matrioska');?>":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10vw"}}} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"none"}}} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo __('By', 'matrioska');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo __('·', 'matrioska');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:template-part {"slug":"post-meta","area":"uncategorized"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem","bottom":"4rem"}},"typography":{"fontSize":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:4rem;margin-bottom:4rem;font-size:1.5rem"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->