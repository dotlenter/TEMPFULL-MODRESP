<?php
  session_start();
  include_once('dbconfig.php');

  $sqlTheme = "SELECT * FROM indexdata WHERE code = 'mytheme01'";
  $res = $conn->query($sqlTheme);

  if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $headerMsg = $row['headerWelcomeMsg'];
        $lowerMsg = $row['lowerWelcomeMsg'];
        $headerBackground = $row['headerBackground'];
        $headerBg_Hov = $row['headerBackground_Hover'];
    }
  }else {
    $headerMsg = 'I am John Mar Lorenzo';
    $lowerMsg = 'And this is my portfolio';
    $headerBackground = 'spacebg.jpg';
    $headerBg_Hov = 'spacebg_hov.jpg';
  }


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="Image/icon.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>LorenZone - Home</title>
<style>
  <?php include('css/font.css'); ?>
  <?php include('css/style.css'); ?>
  <?php include('css/queries.css'); ?>

  .header-modResp{
    background: url('Image/<?Php echo $headerBackground; ?>') no-repeat center center fixed !important;
  }
  .header-modResp:hover{
    background: url('Image/<?php echo $headerBg_Hov; ?>') no-repeat center center fixed !important;
  }
</style>

</head>
<body>

    <div class="header-modResp" id="header-datachange">

      <div class="header-cont-modResp">
        <a href="index.php"><img src="Image/Johnmar.png" class="header-logo-modResp"/></a>
        <!-- DESKTOP Navigation -->
        <nav class="nav-header-modResp">
          <ul>
            <li><a href="index.php" class="link-active-modResp">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <!-- ANDROID Navigation -->
        <nav id="nav-header-modResp-android">

          <ul>
            <li><a href="index.php" class="link-active-modResp-android">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="javascript:void(0)" id="nav-header-closebtn-modResp-android" onclick="closeNav()">Exit</a></li>
          </ul>
        </nav>

        <div id="nav-menu-modResp-android" onclick="openNav()"><img src="Image/menu-icon.png" /></div>

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/nav_resp.js"></script>
        <div class="header-welcome-modResp">
            <center>
              <div class="intro-content-modResp">
                <h1 class="header-welcomeh1-modResp"><?Php echo $headerMsg; ?></h1>
                <p class="content-p-modResp"><?Php echo $lowerMsg; ?></p>
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
            <img src="Image/Johnmar.png" class="homecontent-img-modResp" style="float:right;"/>
            <a target="_blank" href="about.php"><div class="features-arrow-div-textcontent" style="float:right; margin-right: 90px; border-right: 40px solid #52789D;">
              <h1 class="homecontent-h1-modResp" >About LorenZone</h1>
              <p class="homecontent-p-modResp">Know more about me! know my roots, the development of my depression.</p>
            </div></a>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp">
          <img src="Image/blog.jpg" class="homecontent-img-modResp" style="float:left;"/>
          <a href=""><div class="features-arrow-div-textcontent" style="float:left; margin-left: 90px; border-left: 40px solid #52789D;">
            <h1 class="homecontent-h1-modResp">My Blog</h1>
            <p class="homecontent-p-modResp">Get the latest news and activities! be updated with my life and be disappointed!</p>
          </div></a>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp">
          <img src="Image/contact.gif" class="homecontent-img-modResp" style="float:right;"/>
          <a href=""><div class="features-arrow-div-textcontent" style="float:right; margin-right: 90px; border-right: 40px solid #52789D;">
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
          <a target="_blank" href="about.php"><img src="Image/Johnmar.png" class="homecontent-img-modeResp-android"/>
            </a>
            <h1 class="homecontent-h1-modResp-android">About Loren<span style="color:#5D8CAE;">Zone</span></h1>
            <p class="homecontent-p-modResp-android">
                Know more about us! know our roots, the development of our organization.
            </p>
        </div>
        <hr style="width: 70%;"/>
        <div class="homecontent-features-modResp-android">
          <a href=""><img src="Image/blog.jpg" class="homecontent-img-modeResp-android"/>
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
            <form action="subscribed.php" method="POST">
              <input type="email" name="email" placeholder="Email" /><br /> <input type="submit" name="submit" value="Subscribe" />
            </form>
            <div class="footer-socialmedias-modResp">
              <a target="_blank" href="https://www.facebook.com/lorenzojohnmar565" class="footer-socmedia-modResp"><img src="Image/fb.png" /></a>
              <a target="_blank" href="https://twitter.com/Lorenzoids" class="footer-socmedia-modResp"><img src="Image/twitter.png" /></a>
              <a target="_blank" href="" class="footer-socmedia-modResp"><img src="Image/instag.png" /></a>
              <a target="_blank" href="https://github.com/dotlenter" class="footer-socmedia-modResp"><img src="Image/github.png" /></a>
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
<?Php
  mysqli_close($conn);
  session_destroy();
?>
