<?php
  session_start();
  include_once('dbconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="Image/icon.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>LorenZone | Blog</title>
<style>
  <?php include('css/font.css'); ?>
  <?php include('css/style.css'); ?>
  <?php include('css/blog.css'); ?>
  <?php include('css/about.css'); ?>
  <?php include('css/queries.css'); ?>
</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script>

	function commentSubmit(){
		if(form_comments.name.value == '' && form_comments.comments.value == ''){
			alert('Enter your message !');
			return;
		}
		var name = form_comments.name.value;
		var comments = form_comments.comments.value;
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comments-sidesection-modResp').innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET', 'insert_comments.php?name='+name+'&comments='+comments, true);
		xmlhttp.send();
	}

		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comments-sidesection-modResp').load('logs.php');}, 3000);
		});

</script>
</head>
<body>
  <div class="blog-container-modResp">
    <nav id="blog-navigation-modResp-android">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="blog.php" class="link-active-modResp-android">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="javascript:void(0)" id="blog-closebtn-modResp-android" onclick="closeNav()">Exit</a></li>
      </ul>
    </nav>
    <div class="blog-header-container-modResp">
      <div class="blog-head-content-modResp">
        <a href="index.php"><img src="Image/Johnmar.png" class="blog-img-icon-modResp"/></a>
        <div class="blog-navigation-modResp">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php" class="blog-link-active-modResp" id="blog-link-active-modResp">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div id="blog-menu-modResp-android" onclick="openNav()"><img src="Image/menu-icon.png" /></div>

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/nav_resp.js"></script>
      </div>
    </div>
    <script>
      function openNav() {
          document.getElementById("blog-navigation-modResp-android").style.width = "100%";
          document.getElementById("blog-closebtn-modResp-android").style.float = "right";
      }
      function closeNav() {
          document.getElementById("blog-navigation-modResp-android").style.width = "0";
      }
    </script>
    <div class="blog-main-container-modResp">
      <div class="blog-main-content-modResp">
        <div class="blog-sections-modResp">
          <?php
              $results_per_page = 3;
          		$page = 1;
          		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
          		$start_from = ($page-1)* $results_per_page;
          		$sql = "SELECT * FROM blogcontent WHERE blogVisibility = 'true' ORDER BY dateAdded DESC LIMIT $start_from, ". $results_per_page;
          		$res = $conn->query($sql);

              if($res->num_rows > 0){
      				while($row = $res->fetch_assoc()){
      					?>
      					<section class="section-container-modResp">
      						<?Php
                  $blogTitle = $row["blogTitle"];
                  $blogCreator = $row["createdBy"];
                  $blogheaderText = $row["blogHeaderText"];
                  $blogDate = date("M d, Y",strtotime($row["dateAdded"]));
                  $blogImage = $row["blogImage"];
                  $blogBodyText = $row["blogBodyText"];
                  $blogCategory = $row["blogCategory"];
                  $blogURL = $row["blogURL"];
                  ?>
                  <div class="section-header-container-modResp">
                    <a target="_blank" href="<?Php echo $blogURL; ?>" id="bloglink-modResp"><h1 class="section-title-modResp"><?Php echo $blogTitle; ?></h1></a>
                    <p class="section-graytext-modResp">Posted on <?Php echo $blogDate; ?> By <?Php echo $blogCreator; ?></p>
                  </div>
                  <div class="section-maincontent-container-modResp">
                    <p class="section-headertext-modResp"><?Php echo $blogheaderText; ?></p>
        						<div class="section-img-container-modResp">
                      <img src="blogImage\<?Php $img = $row["blogImage"]; if(strpos($img, 'JPG') || strpos($img, 'png') || strpos($img, 'jpeg') || strpos($img, 'gif') || strpos($img, 'jpg')){echo "$img";} else{ echo"Noimage.jpg";} ?>" alt="No image" id="blogImage-modResp">
                    </div>
                    <div class="section-bodyText-modResp">
                      <p class="bodyText-modResp"><?Php echo $blogBodyText; ?></p>
                    </div>
                  </div>
                </section>
            <?Php }} ?>
            <ul class="section-pagination-modResp">

            <?Php
      			$sqlCountBlogs = "SELECT COUNT(blogNo) AS total FROM blogcontent WHERE blogVisibility='true'";
      			$result = $conn->query($sqlCountBlogs);
      			$row = $result->fetch_assoc();
      			$total_pages = ceil($row["total"] / $results_per_page);
        			for($i = 1; $i <= $total_pages; $i++){
              ?>
                  <li><a href="<?Php echo "blog.php?page=" . $i; ?>" id="pagination-modResp"
                  <?Php if($i==$page) echo " class='pagination-current-modResp'" ?> ><?Php echo $i; ?></a></li>
              <?Php
        			}
              $sqlCountComments = "SELECT * from comments";
              $result = $conn->query($sqlCountComments);
              $numberOfComments = $result->num_rows;
      		  ?>
            </ul>
        </div>
        <script language="javascript" type="text/javascript">
           function charLimit(limitField, limitCount, limitNum) {
            if (limitField.value.length > limitNum) {
              limitField.value = limitField.value.substring(0, limitNum);
          } else {
              limitCount.value = limitNum - limitField.value.length;
               }
            }
        </script>
        <div class="blog-sidesection-modResp">
            <div class="sidesection-container-modResp">
              <h1 class="sidesection-headertext-modResp">Highlight</h1>
              <p class="sidesection-normaltext-modResp">Hi. I would like to thank Google for making my life easier. </p>
              <hr style="width: 60%;"/><br />
              <div class="sidesection-comments-container-modResp">
                <div class="comments-container-sidesection-modResp">
                  <h1 class="sidesection-headertext-modResp">Leave a comment..</h1>
                  <form name="form_comments" class="form-comments-blog">
                  	<input type="text" name="name" placeholder="Name..." id="input-comments-modResp"/></br></br>
                      <textarea name="comments" placeholder="Leave Comments Here..." id="textarea-comments-modResp" rows="5" onKeyDown="charLimit(this.form.comments,this.form.countdown,100);"></textarea></br></br>
                      <a href="#" onClick="commentSubmit()" class="button-comment-modResp">Post</a></br>
                  </form>
                </div>
                <p style="text-align: left; margin-left: 30px;">Comments(<?Php echo $numberOfComments; ?>): </p>
                <div id="comments-sidesection-modResp">
                  <br />
                  <img src="Image/load.gif" style="width: 35px; height: 35px;"/>
                </div>

              </div>
            </div>
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
  </div>
</body>
</html>
<?Php
  mysqli_close($conn);
  session_destroy();
?>
