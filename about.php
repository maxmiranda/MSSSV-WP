<?php
/**
 * Template Name: About
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
      <h1> About Us </h1>
      <div class = "main">
        <?php echo do_shortcode("[metaslider id=1067]") ?>
      </div>
      <div id = "text">
        <span class = "title"> Who We Are </span>
        <br></br> Founded in July, 1998, we have grown to a firm of over twenty lawyers. We are continuing to grow because we understand that our clients hire us for service, and we listen to their needs. We have the size to handle substantial matters while still maintaining the personal touch and partner supervision that makes MSSSV unique.
        <br></br><span class = "title"> What We Do </span>
        <br> </br>We vigorously represent our clients’ interests on a wide-range of matters. Whether it is in the areas of civil rights, employment discrimination, insurance coverage matters, professional liability, property damage, or complex tort cases, our firm offers skilled and knowledgeable counsel, whose emphasis is on quality and the expedient resolution of matters for our clients. In this regard, our firm utilizes case management systems stored in the cloud, document management software, and remote communications, all of which enable us to better serve our clients.
        <br> </br>For more information, see our <a class = "link" href = "practice"> Practice</a> page.
        <br></br><span class = "title"> Where We Are </span>
        <br></br>	MSSSV is a full service law firm headquartered in Mineola, New York, with offices in Westchester, New York City and New Jersey. Our firm actively litigates in all of the State and Federal Courts in New York and New Jersey, and we are frequently called upon by our clients to litigate or monitor cases across the country.
        <br></br><span class = "title"> How We Give Back </span>
        <br></br> In 2007, Michael Miranda & Ondine Slone co-founded a 5K race for autism called Jack’s Run. Miranda’s nephew, Jack, had been diagnosed with autism at age 2, and the lawyers wanted to find a way to support his non-profit school for special needs. All proceeds from the race go directly to Nassau Suffolk Services for Autism (NSSA), which provides programs for children, adults, and families affected by autism across Long Island. Over the years, the race has earned hundreds of thousands of dollars for the cause. If you would like more information about NSSA please visit the website <a class = "link" href = "http://www.nsssainfo.org"> here. </a>

      </div>
      <div class = "slider">
      <?php echo do_shortcode("[metaslider id=856]") ?>
      </div>
     <div class = "clearfix"> </div>
    </div>
    </main>
  </div>

<?php
get_footer(); ?>
