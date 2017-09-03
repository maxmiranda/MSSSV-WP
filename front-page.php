<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package msssv
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div id = "between">
        <div class = "main">
					 <?php echo do_shortcode("[metaslider id=841]") ?>
        </div>

        <div id = "news">

        <a href = "/news" > <h1> Firm News </h1></a>
           <?php echo do_shortcode("[do_widget id=recent-posts-2]") ?>

        </div>

        <div id = "contactus">
          <a href = "/contact"> <h1> Contact Us </h1> </a>
            <a href = '/contact'>
              <div class = "contact_img" id = "topcontactimg" style = 'background-image: url(/wp-content/themes/msssv/img/mineola.png)'/>
								<h2 > Long Island </h2>
							</div>
            </a>
            <a href = '/contact'>
              <div class = "contact_img" style = 'background-image: url(/wp-content/themes/msssv/img/Westchester.png)'/>
								<h2> Westchester </h2>
							</div>
            </a>
						<a href = '/contact'>
							<div class = "contact_img" style = 'background-image: url(/wp-content/themes/msssv/img/newyork.png)'/>
								<h2> New York </h2>
							</div>
						</a>
        </div>
        <div class="clearfix"></div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
