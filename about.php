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
  <?php include('css/about.css'); ?>
  <?php include('css/queries.css'); ?>
</style>
<script src="jquery-3.1.1.min.js"></script>
</head>
<body>
    <div class="header-about-modResp">
      <div class="header-cont-about-modResp">
        <center>
          <div class="img-diamondwrapper-modResp">
            <img src="Image/eat.jpg" class="header-aboutimg-modResp"/>
          </div>
            <h1 class="h1-about-modResp">Hi! I'm John Mar Lorenzo</h1>
            <p class="p-about-modResp">And this is my portfolio, LorenZone.</p>
        </center>
      </div>
    </div>

    <div class="about-container-modResp">
      <div class="about-content-modResp">
        <div class="about_wrap-content-modResp">
          <p class="pblack-about-modResp">Hi, I'm John Mar, I'm a student studying at Holy Cross of Davao College as a third year Bachelor Of Science in Information Technology.
            I made this website LorenZone, for my IT10(Web Development1) Project instructed by Ms. Nancy Mozo.
            <br /><br />
            This portfolio aims to highlight my achievements and skills in the field of Information Technology, a glimpse of my life perhaps.
          </p>
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
      <div class="red_wrapper-about-modResp">
          <div class="red_wrapper_content-about-modResp">
            <h1 class="h1red_wrap-about-modResp" onclick="showLinks()">► Navigation Links</h1>
          </div>
      </div>

      <nav class="nav-links-about-modResp">
        <li class="home-link-modResp"><a href="index.php" >Home</a></li>
        <li class="about-link-modResp"><a href="about.php" >About</a></li>
        <li class="blog-link-modResp"><a href="about.php" >Blog</a></li>
        <li class="contact-link-modResp"><a href="about.php" >Contact</a></li>
      </nav>
    </div>
    <script src="js/tilt.jquery.js"></script>
</body>
</html>
<?php
  session_destroy();
?>
