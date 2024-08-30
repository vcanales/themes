<?php
/**
 * Title: post-meta
 * Slug: matrioska/post-meta
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"3rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:1.5rem;margin-bottom:3rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo __('By', 'matrioska');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo __('·', 'matrioska');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo __('—', 'matrioska');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->