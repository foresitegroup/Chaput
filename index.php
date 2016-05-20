<?php
$PageTitle = "";
$Description = "";
$Keywords = "";

include "header.php";
?>

<script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="inc/jquery.cycle2.scrollVert.min.js"></script>
<div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="5000" data-cycle-pause-on-hover="true" data-cycle-fx="scrollVert" data-cycle-pager-template="<span></span>">
  <p class="cycle-pager"></p>
  <div style="background-image: url(images/home-slide3.jpg);">
    <div class="site-width">
      <h2>REAL ESTATE DUE DILIGENCE</h2>
      As Professional Land Surveyors we can help you identify risks associated with the property prior to purchase that is central to your real estate transaction.<br>
      <a href="services.php#real-estate">LEARN MORE</a>
    </div>
  </div>
  <div style="background-image: url(images/home-slide1.jpg);">
    <div class="site-width">
      <h2>CONSTRUCTION SERVICES</h2>
      Chaput Land Surveys is a leader in providing construction layout for site buildings and infrastructure on normal sites to highly complex sites in an accurate and timely manner to keep your project moving.<br>
      <a href="services.php#construction">LEARN MORE</a>
    </div>
  </div>
  <div style="background-image: url(images/home-slide2.jpg);">
    <div class="site-width">
      <h2>LAND DEVELOPMENT</h2>
      Our team can provide the tools and resources needed to develop property from existing conditions to the end product.<br>
      <a href="services.php#development">LEARN MORE</a>
    </div>
  </div>
</div>

<div class="header-banner">
  <div class="site-width">
    Chaput Land Surveys offers a wide range of professional land survey services throughout Wisconsin. Whether it's single site improvement, multiple site acquisition, land development or construction, we will help you be successful in your real estate matters.
  </div>
</div>

<div class="home-services site-width">
  <div class="one-third">
    <div class="title">REAL ESTATE DUE DILIGENCE</div>

    <img src="images/services-home-real-estate.jpg" alt="">

    <ul>
      <li>ALTA/NSPS Land Title Surveys</li>
      <li>Topographic Surveys</li>
      <li>Flood Hazard Surveys</li>
      <li>Infrastructure Surveys</li>
      <li>As-Built Surveys</li>
      <li>Annexation and Zoning</li>
      <li>Easement Legal Descriptions &amp; Exhibits</li>
      <li>Hydrographic Surveys</li>
      <li>Right of Way Surveys</li>
    </ul>
  </div>

  <div class="one-third">
    <div class="title">DEVELOPMENT</div>

    <img src="images/services-real-estate.jpg" alt="">

    <ul>
      <li>ALTA/NSPS Land Title Surveys</li>
      <li>Topographic Surveys</li>
      <li>Flood Hazard Surveys </li>
      <li>Concept Development</li>
      <li>Annexation &amp; Zoning Land Divisions (Subdivisions, Certified Survey Map)</li>
      <li>Condominium Platting</li>
      <li>Easement Legal Descriptions &amp; Exhibits</li>
    </ul>
  </div>

  <div class="one-third last">
    <div class="title">CONSTRUCTION</div>

    <img src="images/services-construction.jpg" alt="">

    <ul>
      <li>Construction Layout</li>
      <li>Construction Site</li>
      <li>Control Surveys</li>
      <li>As-Built Surveys</li>
      <li>Easement Legal Descriptions &amp; Exhibits</li>
    </ul>
  </div>

  <div class="button">
    <a href="services.php" class="shadow-button">ABOUT OUR SERVICES</a>
  </div>
</div>

<hr>

<div class="site-width">
  <div class="fifty-four">
    <img src="images/uav-aerial-photography.jpg" alt="">
  </div>

  <div class="forty-six last">
    <h3>FAA APPROVED UAS AERIAL PHOTOGRAPHY</h3>
    Chaput Land Surveys can provide aerial photography for your project along with terrestrial remotes sensing and photogrammetry. We are authorized to fly up to 400 feet.
  </div>
</div>

<hr>

<div class="site-width">
  <div class="forty-six">
    <h3>COMPANY PROFILE</h3>
    Chaput Land Surveys provides professional land surveying services throughout Wisconsin. With our sole focus on surveying, we are able to provide exceptional service with a timely completion. Chaput has a survey staff of 9-10 surveyors including 4 licensed land surveyors. On a daily basis we dispatch 4 survey crews operating as one and two person field crews equipped with the latest technology which includes robotic total stations and survey grade GPS (GNSS) receivers.<br>
    <br>
    <a href="company.php">OUR COMPANY</a>
  </div>

  <div class="fifty-four last">
    <img src="images/company-profile.jpg" alt="">
  </div>
</div>

<div class="news-home">
  <div class="news-home-left">
    <div class="news-home-left-content">
      <h4>INDUSTRY NEWS</h4>
      <hr>
      <?php
      require('news/wp-blog-header.php');

      $posts = get_posts('posts_per_page=1&order=DESC&orderby=date');
      foreach ($posts as $post) :
        setup_postdata( $post );
        ?>
        <h3><?php the_title(); ?></h3>
        <?php echo excerpt(37); ?><br>
        <a href="<?php the_permalink() ?>" class="readmore">READ FULL STORY</a>
      <?php
      endforeach;
      ?>
    </div>
  </div>

  <div class="news-home-right"<?php if (get_post_thumbnail_id() != "") echo ' style="background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id()) . ');"'; ?>></div>

  <div style="clear: both;"></div>
</div>

<?php include "footer.php"; ?>