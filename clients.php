<?php
/**
 * Template Name: Clients
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">

      <div id = "between">
        <h1> Representative Clients </h1>
        <ul id = "clientimgs">

          <?php $time = 0?>
            <?php while( have_rows('clients') ): the_row(); ?>
              <?php $time +=.2 ?>

              <li> <img style = 'animation-delay: <?php echo $time ?>s'  class = 'animated fadeInDown' src = '<?php echo the_sub_field('clientimg')?>'/> </li>
          <?php endwhile ?>
          <div class = "clearfix"></div>
        </ul>
        <div class = "clearfix"></div>
      </div>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_footer();
