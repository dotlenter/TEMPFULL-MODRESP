<?php
  session_start();
  include_once('dbconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="Image/atom_violet.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>LorenZone</title>
<style>
  <?php include('css/font.css'); ?>
  <?php include('css/style.css'); ?>
  <?php include('css/queries.css'); ?>
</style>

</head>
<body>

    <div class="header-modResp">
      <div class="header-cont-modResp">
        <img src="Image/atom.png" class="header-logo-modResp"/>
        <h1 class="header-h1-modResp"><span style="color:#5D8CAE;">Loren</span>Zone</h1>
        <!-- DESKTOP Navigation -->
        <nav class="nav-header-modResp">
          <ul>
            <li><a href="index.php" class="link-active-modResp">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Blog</a></li>
            <li><a href="index.php">Contact</a></li>
          </ul>
        </nav>
        <!-- ANDROID Navigation -->
        <nav id="nav-header-modResp-android">

          <ul>
            <li><a href="index.php" class="link-active-modResp-android">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Blog</a></li>
            <li><a href="index.php">Contact</a></li>
            <li><a href="javascript:void(0)" id="nav-header-closebtn-modResp-android" onclick="closeNav()">Exit</a></li>
          </ul>
        </nav>

        <div id="nav-menu-modResp-android" onclick="openNav()"><img src="Image/menu-icon.png" /></div>

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/nav_resp.js"></script>
        <div class="header-welcome-modResp">
            <center>
              <div class="intro-content-modResp">
                <h1 class="header-welcomeh1-modResp">I am John Mar Lorenzo</h1>
                <p class="content-p-modResp">And this is my portfolio</p>
                <a target="_blank" href="https://github.com/dotlenter" class="button-white-modResp">Project Repository</a>
              </div>
            </center>
        </div>
      </div>
    </div> <!-- End of header -->
    <script>
      function openNav() {
          document.getElementById("nav-header-modResp-android").style.width = "100%";
          document.getElementById("nav-header-closebtn-modResp-android").style.float = "right";
      }
      function closeNav() {
          document.getElementById("nav-header-modResp-android").style.width = "0";
      }
    </script>

    <!-- DESKTOP DISPLAY -->
    <div class="homecontainer-modResp">
      <div class="homecontent-modResp">
        <div class="homecontent-features-modResp">
            <img src="Image/lorenzo_overlay.jpg" class="homecontent-img-modResp" style="float:right;"/>
            <a target="_blank" href="about.php"><div class="features-arrow-div-textcontent" style="float:right; margin-right: 90px; border-right: 40px solid #4B77BE;">
              <h1 class="homecontent-h1-modResp" >About LorenZone</h1>
              <p class="homecontent-p-modResp">Know more about me! know my roots, the development of my depression.</p>
            </div></a>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp">
          <img src="Image/blog.gif" class="homecontent-img-modResp" style="float:left;"/>
          <a href=""><div class="features-arrow-div-textcontent" style="float:left; margin-left: 90px; border-left: 40px solid #044F67;">
            <h1 class="homecontent-h1-modResp">My Blog</h1>
            <p class="homecontent-p-modResp">Get the latest news and activities! be updated with my life and be disappointed!</p>
          </div></a>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp">
          <img src="Image/contact.gif" class="homecontent-img-modResp" style="float:right;"/>
          <a href=""><div class="features-arrow-div-textcontent" style="float:right; margin-right: 90px; border-right: 40px solid #264348;">
            <h1 class="homecontent-h1-modResp">Contact me!</h1>
            <p class="homecontent-p-modResp">Have anything to ask? feel free to contact me!</p>
          </div></a>
        </div>
      </div>
    </div><!-- End of homecontent -->
    <!-- ANDROID DISPLAY -->
    <div class="homecontainer-modResp-android">
      <div class="homecontent-modResp-android">
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp-android">
          <a href=""><img src="Image/lorenzo_overlay.jpg" class="homecontent-img-modeResp-android"/>
            </a>
            <h1 class="homecontent-h1-modResp-android">About Loren<span style="color:#5D8CAE;">Zone</span></h1>
            <p class="homecontent-p-modResp-android">
                Know more about us! know our roots, the development of our organization.
            </p>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp-android">
          <a href=""><img src="Image/blog.png" class="homecontent-img-modeResp-android"/>
            </a>
            <h1 class="homecontent-h1-modResp-android">My Blog</h1>
            <p class="homecontent-p-modResp-android">Get the latest news and activities! be updated with my life and be disappointed!</p>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp-android">
          <a href=""><img src="Image/contact.gif" class="homecontent-img-modeResp-android"/>
            </a>
            <h1 class="homecontent-h1-modResp-android">Contact me!</h1>
            <p class="homecontent-p-modResp-android">
                Have anything to ask? feel free to contact me!
            </p>
        </div>
        <hr style="width: 70%;"/>
      </div>
    </div>
    <!-- END OF homecontainer - ANDROID -->

    <!-- Footer -->
    <div class="footer-modResp">
      <div class="footer-cont-modResp">
        <center>
          <div class="footer-links-modResp">
            <h1 class="footer-h1-modResp">STAY CONNECTED!</h1>
            <form action="" method="">
              <input type="email" name="email" placeholder="Email" /><br /> <input type="submit" name="submit" value="Subscribe" />
            </form>
            <div class="footer-socialmedias-modResp">
              <a href="https://www.facebook.com/lorenzojohnmar565" class="footer-socmedia-modResp"><img src="Image/fb.png" /></a>
              <a href="https://twitter.com/Lorenzoids" class="footer-socmedia-modResp"><img src="Image/twitter.png" /></a>
              <a href="" class="footer-socmedia-modResp"><img src="Image/instag.png" /></a>
              <a href="https://github.com/dotlenter" class="footer-socmedia-modResp"><img src="Image/github.png" /></a>
            </div>
          </div>
        </center>
          <p class="footer-bottomcopyright-modResp">
            Copyright © 2017 Lorenzo, John Mar.
          </p>
      </div>
    </div>
    <!-- END OF fOOTER -->
    <!-- END OF homecontainer - DESKTOP -->
    </div>
    <button onclick="topFunction()" id="backtoTop-modResp" title="Go to top">Back to top ↑ </button>
    <script>
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
              document.getElementById("backtoTop-modResp").style.display = "block";
          } else {
              document.getElementById("backtoTop-modResp").style.display = "none";
          }
      }

      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>
</body>
</html>
