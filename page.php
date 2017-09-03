<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
 ?>
<div id = "between">
  <h1><?php echo get_the_title(get_the_ID()) ?></h1>
  <?php if(has_excerpt(get_the_ID())): ?>
  <img class= 'partnerimg' src = '/wp-content/themes/msssv/img/OriginalPhotos/<?php echo get_the_title(get_the_ID()) ?>.jpg'/>
  <?endif ?>
      <?php $content_post = get_post(get_the_ID());
      $content = $content_post->post_content;
      $content = apply_filters('the_content', $content); // this is almost certainly why new paragraphs are being formed for each and every one of the line breaks
      echo $content; ?>

</div>
 <?php
 get_footer();
?>
