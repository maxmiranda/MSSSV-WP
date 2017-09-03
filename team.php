<?php
/**
 * Template Name: Team
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 get_header(); ?>

      <div id = "between">
        <h1> Partners </h1>

          <ul id = "partners" class = "attorneys">
            <?php while( have_rows('partners') ): the_row();
            $attorneyName = strtolower(str_replace(' ', '-', get_sub_field('attorney_name')));
            ?>
            <a href = "<?php echo $attorneyName ?>">
              <li style = "background-image: url('<?php echo the_sub_field('partner_photo')?>')"
                <p> <p>
                   <?php echo the_sub_field('attorney_name')?>
                 </p>
             </li>
           </a>
            <?php endwhile?>
            <div class = "clearfix"> </div>
          </ul>

        <h1 class = "increasedbottommargin"> Associates </h1>

          <ul id = "associates" class = "attorneys">
            <?php while( have_rows('associates') ): the_row();
              $attorneyName = strtolower(str_replace(' ', '-', get_sub_field('attorney_name')));?>
              <a href = "<?php echo $attorneyName ?>">
                <li>
                  <?php echo the_sub_field('attorney_name')?>
                </li>
              </a>
            <?php endwhile?>
            <div class = "clearfix"> </div>
          </ul>

        <h1 id = "ofCounselh1" class = "increasedbottommargin"> Of Counsel </h1>
          <ul id = "ofCounsel" class = "attorneys">

            <?php while( have_rows('of_counsel') ): the_row();
            $attorneyName = strtolower(str_replace(' ', '-', get_sub_field('attorney_name')));?>
              <a href = "<?php echo $attorneyName ?>">
                <li>
                  <?php echo the_sub_field('attorney_name')?>
                </li>
              </a>
            <?php endwhile?>
            <div class = "clearfix"> </div>
          </ul>
      </div>

  <?php
    get_footer();
?>
