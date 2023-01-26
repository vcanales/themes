<?php
/**
 * Title: A 404 page
 * Slug: startup/404
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:image {"align":"wide","id":425,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404-Image.png" alt="" class="wp-image-425"/></figure>
<!-- /wp:image -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found">Oops! That page can’t be found.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>It looks like nothing was found at this location. Maybe try a search?</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"style":{"border":{"radius":"100px"}},"borderColor":"foreground"} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->