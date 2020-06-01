<?php
  session_start();
  include_once('dbconfig.php');

  $sqlTheme = "SELECT * FROM aboutdata WHERE code = 'mytheme01'";
  $res = $conn->query($sqlTheme);

  if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $headerMsg = $row['headerWelcomeMsg'];
        $lowerMsg = $row['lowerWelcomeMsg'];
        $headerBackground = $row['headerBackground'];
        $headContent = $row['headerContent'];
        $lowerContent = $row['lowerContent'];
    }
  }else {
    $headerMsg = 'I am John Mar Lorenzo';
    $lowerMsg = 'And this is my portfolio';
    $headerBackground = 'inrocket.jpg';
    $headContent = 'Hi.';
    }


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="Image/icon.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>LorenZone | About</title>
<style>
  <?php include('css/font.css'); ?>
  <?php include('css/style.css'); ?>
  <?php include('css/about.css'); ?>
  <?php include('css/queries.css'); ?>

  .header-about-modResp{
    background: url('Image/<?Php echo $headerBackground; ?>');
  }
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
            <li><a href="about.php" class="link-active-modResp">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <!-- ANDROID Navigation -->
        <nav id="nav-header-modResp-android">

          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" class="link-active-modResp-android">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="javascript:void(0)" id="nav-header-closebtn-modResp-android" onclick="closeNav()">Exit</a></li>
          </ul>
        </nav>

        <div id="nav-menu-modResp-android" onclick="openNav()"><img src="Image/menu-icon.png" /></div>

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/nav_resp.js"></script>
      </div>
      <div class="header-cont-about-modResp">
        <center>
          <br /><br /><br /><br /><br /><br />
          <div class="img-diamondwrapper-modResp">
            <img src="Image/eat.jpg" class="header-aboutimg-modResp"/>
          </div>
            <h1 class="h1-about-modResp"><?Php echo $headerMsg; ?></h1>
            <p class="p-about-modResp"><?Php echo $lowerMsg; ?></p>
        </center>
      </div>
    </div>
    <script>
      function openNav() {
          document.getElementById("nav-header-modResp-android").style.width = "100%";
          document.getElementById("nav-header-closebtn-modResp-android").style.float = "right";
      }
      function closeNav() {
          document.getElementById("nav-header-modResp-android").style.width = "0";
      }
    </script>
    <div class="about-container-modResp">
      <div class="about-content-modResp">
        <div class="about_wrap-content-modResp">
          <h1 class="header-h1"><?Php echo $headContent; ?></h1>
          <p class="pblack-about-modResp"><?Php echo $lowerContent; ?></p>
        </div>
      </div>
      <div class="about-skills-container">
        <div class="about-skills-content">
          <h1 class="h1default" id="h1-about-skills"></h1>
        </div>
      </div>
      <div class="blue_wrapper-about-modResp">
          <div class="blue_wrapper_content-about-modResp">
            <h1 class="h1blue_wrap-about-modResp">► Personal links</h1>
          </div>
      </div>
      <div class="personalinks-container-about-modResp">
          <div class="personalinks-content-about-modResp">
            <?Php
              $sql = "SELECT url, name from personalinks where validity = 'true'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $urlname = $row['name'];
                  ?>
                    <a target="_blank" href="<?Php $link = $row['url']; echo $link; ?>" class="personalinks-about">#<?Php echo $urlname; ?></a>
                <?Php
                }
              } else {
                echo "0 results";
              }
            ?>
          </div>
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
    <!-- END OF fOOTER -->
    <script>
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
              document.getElementByClassName("backtoTop-modResp").style.display = "block";
          } else {
              document.getElementByClassName("backtoTop-modResp").style.display = "none";
          }
      }

      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>
</body>
</html>
<?php
  mysqli_close($conn);
  session_destroy();
?>
