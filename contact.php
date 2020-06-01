<?php
  session_start();
  include_once('dbconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="Image/icon.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>LorenZone | Contact</title>
<style>
  <?php include('css/font.css'); ?>
  <?php include('css/style.css'); ?>
  <?php include('css/about.css'); ?>
  <?php include('css/contact.css'); ?>
  <?php include('css/queries.css'); ?>
</style>
<script src="jquery-3.1.1.min.js"></script>
</head>
<body>
  <div class="header-about-modResp">
    <div class="header-cont-modResp">
      <img src="Image/Johnmar.png" class="header-logo-modResp"/>
      <!-- DESKTOP Navigation -->
      <nav class="nav-header-modResp">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php" class="link-active-modResp">Contact</a></li>
        </ul>
      </nav>
      <!-- ANDROID Navigation -->
      <nav id="nav-header-modResp-android">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" >About</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php" class="link-active-modResp-android">Contact</a></li>
          <li><a href="javascript:void(0)" id="nav-header-closebtn-modResp-android" onclick="closeNav()">Exit</a></li>
        </ul>
      </nav>

      <div id="nav-menu-modResp-android" onclick="openNav()"><img src="Image/menu-icon.png" /></div>

      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/nav_resp.js"></script>
      <div class="header-welcome-modResp">
          <center>
            <div class="intro-content-modResp">
              <h1 class="header-welcomeh1-modResp">Contact Me!</h1>
            </div>
          </center>
      </div>
    </div>
  </div>
  <div class="contact-main-container">
    <div class="contact-main-content">
      <h1 class="headertext" id="contact-h1">Send me a Message:</h1>
      <br />
      <center>
        <form method="post" action="email.php" id="form-sendmessage">
          Email: <input name="email" id="email" type="text" /><br />
          Name: <input type="text" name="name" id="name" /><br /><br />
            Message:<br />
          <textarea name="message" id="message" rows="5" cols="40"></textarea><br />

          <input type="submit" value="Submit" />
        </form>
      </center>
    </div>
  </div>
  <!-- Footer -->
  <div class="footer-about-modResp">
    <div class="footer-about-cont-modResp">
      <center>
        <div class="footer-about-links-modResp">
          <div class="footer-socialmedias-modResp">
            <a target="_blank" href="https://www.facebook.com/lorenzojohnmar565" class="footer-socmedia-modResp"><img src="Image/fb.png" /></a>
            <a target="_blank" href="https://twitter.com/Lorenzoids" class="footer-socmedia-modResp"><img src="Image/twitter.png" /></a>
            <a target="_blank" href="" class="footer-socmedia-modResp"><img src="Image/instag.png" /></a>
            <a target="_blank" href="https://github.com/dotlenter" class="footer-socmedia-modResp"><img src="Image/github.png" /></a>
          </div>
        </div>
      </center>
        <p class="footer-about-bottomcopyright-modResp">
          Copyright © 2017 Lorenzo, John Mar.
        </p>
    </div>
  </div>
  <!-- END OF FOOTER -->
  <script>
    function openNav() {
        document.getElementById("nav-header-modResp-android").style.width = "100%";
        document.getElementById("nav-header-closebtn-modResp-android").style.float = "right";
    }
    function closeNav() {
        document.getElementById("nav-header-modResp-android").style.width = "0";
    }
  </script>
</body>
</html>
