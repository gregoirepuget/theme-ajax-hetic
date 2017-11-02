<?php
/**
 * Description for undefined
 * @private
 * @version     0.5.1
 * @property    undefined
 * @package     WordPress
 * @subpackage  firstPixel
 * @since       0.1
 */
ob_start();
if ( have_posts() ){
	while ( have_posts() ) {
		the_post();
		?>
			<li class="columns">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><?php the_title(); ?></h2>
					<div class="content">
						<?php the_content(); ?>
					</div>
				</article>
			</li>
		<?php
	}
}
$out = ob_get_clean();
?>
<section class="row">
	<ul class="no-bullet">
		<?= $out; ?>
	</ul>
</section>
