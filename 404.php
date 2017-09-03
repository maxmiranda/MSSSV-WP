<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package msssv
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="between" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'msssv' ); ?></h1>
				</header><!-- .page-header -->
				<a class = "bigbluebutton" href = "/"> Go back home </a>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
