<?php require_once("auth.php"); ?>
<?php
   include('template/header.php');
   include('template/sidebar_admin.php');
?>


<p class="home">Hello!</p>
<h1><?php echo  $_SESSION["user"]["name"] ?></h1>
<h3><?php echo $_SESSION["user"]["email"] ?></h3>
<p>Anda Login Sebagai <?php echo $_SESSION["user"]["role"] ?></p>

<div class="home-circle"></div>

<h2 class="hidden">Web Developer</h2>
<span class="hidden">&amp</span>
<h2 class="hidden">Graphic Designer</h2>

<p>I'm a web developer from <dfn title="Born in Indiana, Currently in Monroe, OH.">Ohio</dfn> with a passion for perfection. I am a tireless seeker of knowledge  and love the logic and structure of coding. I always strive to write elegant and efficient code, whether it be HTML, CSS or Javascript. My eye for design not only allows me to build beautiful responsive websites, but also allows me to be flexible and adaptable. When I'm not pushing pixels, I'm attending classes at <dfn title="Currently a PSEO student at Miami, I plan to attend OSU.">Miami University</dfn> or kicking a hackysack.</p>

<p>Specialties: HTML5; CSS3; CSS (Cascading Style Sheets); Apache Server, PHP, MySQL, FTP, SSH - Custom Themes / Templates for Drupal, Wordpress; Adobe Dreamweaver, Fireworks, Illustrator; Web Applications; Graphic Media; Logo Design; SEO (Search Engine Optimization); Web Development; Programming in JavaScript, AJAX; Dynamic Database Driven Websites; Web Hosting; XML; XHTML, Web 2.0, Web 3.0; Joomla, Drupal, and WordPress.</p>


<div class="links">
  <a href="#"><i class="fa fa-file-text"></i><span>Dev Questions</span></a>
  <a href="#"><i class="fa fa-briefcase"></i><span>Previous Work</span></a>
  <a href="#"><i class="fa fa-code"></i><span>My Experiments</span></a>
  <a href="#"><i class="fa fa-envelope"></i><span>Contact Me</span></a>
</div>
