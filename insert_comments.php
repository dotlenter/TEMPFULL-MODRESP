<?php

$name = $_REQUEST['name'];
$comments = $_REQUEST['comments'];
require("dbconfig.php");
  $name = mysqli_escape_string($conn, trim($name));
  $comments = mysqli_escape_string($conn, trim($comments));
mysqli_query($conn, "INSERT INTO comments(name, comment) VALUES('$name','$comments')");

$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY date_publish DESC");
while($row=mysqli_fetch_array($result)){
?>
<div class="sidesection-comment-container">
<h1 class="name-comment"><?Php echo $row['name'];?>     <span class="datepublish-comment"><?Php echo $row['date_publish'];?></span></h1>
<p class="comm-comment"><?Php echo $row['comment']; ?></p>
</div>
<?Php
}
mysqli_close($conn);
?>
