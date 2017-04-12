<?php get_template_part('partials/head'); ?>
<html>
  <body <?php body_class(); ?>>
                <?php get_template_part('partials/header'); ?>
<?php
  while (have_posts()) : the_post();
?>

<img class="home-page-img" src="http://codehq.dev/wp-content/uploads/2017/04/banner-3-e1491849365354.jpg">
    <div class="home-page-title">
            <h1><?php the_title(); ?></a>
    </div>
      </div>
      <div id="container-circle">
        <div class="circle-inner">
          <div class="child-circle1"></div>
          <div class="child-circle2"></div>
          <div class="child-circle3"></div>
          <div class="child-circle4"></div>
          <div class="child-circle5"></div>
          <div class="child-circle6"></div>
          <div class="child-circle7"></div>
          <div class="child-circle6"></div>
          <div class="child-circle5"></div>
          <div class="child-circle4"></div>
          <div class="child-circle3"></div>
          <div class="child-circle2"></div>
          <div class="child-circle1"></div>
        </div>
      </div>
        <div class="col-sm-12">
          <div class="content">
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
    </div> 
<html>
<main class="main">
    
  <article class="full-width darkestblue">
      <p class="white">Who am I?</p>
  </article>
    <p>My name is Chris Grippo. I'm a 22 year old recent college graduate and a student of Code HQ. </p>
  <article class="full-width darkerblue">
      <p class="white">Why am I taking this class?</p>
  </article>
  <p class="p"> I've always had an interest for technology but never focused any of my schooling on it. My father worked at Bell Labs in the 80s and 90s so there was that familial connection but amounted to any tangible pursuits. Recently, my work supported me in learning Python to scrape a website for some data that was valuable to us. Each time I figured out how to do a tiny task to complete the larger goal, I was elated. It really is like a super power.
     <section class="full-width mblue">
      <p class="white">Timeline (hover over a dot)</p>
  </section>
      <div class="container my-timeline-container">
      <ul class="timeline">
        <li>
          <div class="timeline-badge warning"><img class="timeline_img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/11836858_907759679271227_3357634380099057391_n.jpg?oh=26529ee75405ec9d5ec5ccf757ec3bd3&oe=592BC3FC"></div>
          <div class="timeline-panel important-background">
            <div class="timeline-heading">
              <h4><a class="timeline-title">1994</a></h4>
            </div>
            <div class="timeline-body">
              <p>Born.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted"><!---------------Inverted--------------->
          <div class="timeline-badge primary"><img class="timeline_img" src="http://middletown-h-s-south-middletown-new-jersey.runnerspace.com/members/images/4/15325_full.jpg"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2008</h4>
            </div>
            <div class="timeline-body">
              <p>Started high school.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge basic"><img class="timeline_img" src="http://codehq.dev/wp-content/uploads/2017/04/sportsMS-Lacey3-sdl-IMG_9125.jpg"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2008-2012</h4>
            </div>
            <div class="timeline-body">
              <p>Played football and swam.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted"><!---------------Inverted--------------->
          <div class="timeline-badge primary"><img class="timeline_img" src="https://cdn.patchcdn.com/users/3575590/2013/04/T600x450/9e27487b181f461c3cd0078e5cc05606.jpg"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2012</h4>
            </div>
            <div class="timeline-body">
              <p>Completed <img class="timeline_img"><a href="http://patch.com/new-jersey/middletown-nj/an--bsa-troop-32-honors-four-scouts-in-achieving-eagld11a13b265" target="_blank">Eagle Scout Award requirements.</a></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary"><img class="timeline_img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/550665_4085942384908_2122377023_n.jpg?oh=8caf64fac3f6f286b1a100943de37287&oe=5927A321"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">June 2012</h4>
            </div>
            <div class="timeline-body">
              <p>Graduated from high school.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted"><!---------------Inverted--------------->
          <div class="timeline-badge warning"><img class="timeline_img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/387656_10151162144644107_1451714301_n.jpg?oh=5cdf16be68256bc63d43d1e7535b7e3b&oe=5926D8E2"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Fall 2012</h4>
            </div>
            <div class="timeline-body">
              <p><a href="https://www.elon.edu/e-web/students/orientation/gap-semester/default.xhtml" target="_blank">Participated in Elon's first ever Gap Semester Program.</a></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge basic"><img class="timeline_img" src="https://www.elon.edu/E-Net/GetImage.ashx?lm=636126821082470000&id=55680&w=618"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">January 2015</h4>
            </div>
            <div class="timeline-body">
              <p>Participated in Elon course "<a href="https://www.youtube.com/watch?v=-mgVnQ_4pp8" target="_blank">Innovation In America</a>" - studied and visited <a href="https://www.youtube.com/watch?v=-mgVnQ_4pp8" target="_blank">Google, Facebook, LinkedIn, Prezi, and more.</a></p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted"><!---------------Inverted--------------->
          <div class="timeline-badge basic"><img class="timeline_img" src="https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/11219411_10206133885373534_276275637439605940_n.jpg?oh=de1e72a32e2a4de582a8b742e6dd28a6&oe=5924D09F"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Sping 2015</h4>
            </div>
            <div class="timeline-body">
              <p><a href="https://www.youtube.com/watch?v=rT-_Fgs2-2c" target="_blank">Studied abroad in Australia.</a></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary"><img class="timeline_img" src="https://cdn.shopify.com/s/files/1/1347/7059/t/12/assets/logo.png?13331852099666516507"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Fall 2015</h4>
            </div>
            <div class="timeline-body">
              <p>Started <a href="https://mywabo.com" target="_blank">Wabo.</a></p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted"><!---------------Inverted--------------->
          <div class="timeline-badge warning"><img class="timeline_img" src="http://i.imgur.com/SLWtArh.jpg"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">May 2016</h4>
            </div>
            <div class="timeline-body">
              <p>Graduated from Elon University with Economics & Environmental Studies Degree</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge basic"><img class="timeline_img" src="http://codehq.dev/wp-content/uploads/2017/04/UO_logo.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Summer 2016</h4>
            </div>
            <div class="timeline-body">
              <p>Started working for <a href="http://urbanoffsets.co" target="_blank">Urban Offsets.</a></p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted"><!---------------Inverted--------------->
          <div class="timeline-badge basic"><img class="timeline_img" src="http://codehq.dev/wp-content/uploads/2017/04/python-logo-white.jpg"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Winter 2016</h4>
            </div>
            <div class="timeline-body"> 
              <p>Self-taught Python through <a href="https://www.udacity.com/course/intro-to-computer-science--cs101" target="_blank">online course</a> to scrape websites for work.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge warning"><img class="timeline_img"src="https://hqgreensboro.com/wp-content/uploads/2016/12/Screen-Shot-2016-12-22-at-3.18.13-PM.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2017</h4>
            </div>
            <div class="timeline-body">
              <p>Signed up for <a href="https://hqgreensboro.com/codehq/" target="_blank">Code HQ</a></p>
            </div>
          </div>
        </li>
      </ul>
    </div><!--End my-timeline-container-->
  <article class="full-width darkblue">
      <p class="white">Contact</p>
  </article>
  <p>Please email me at grippo.cg@gmail.com</p>
  <section class="full-width blue">
      <p class="white">Thanks for reading!</p>
  </section>

  
</main>
<footer>
</footer>
</html>

<?php
  endwhile; 
?>
</div>

<?php get_template_part('partials/footer'); ?>

  </body>
</html>