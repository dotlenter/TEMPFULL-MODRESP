<?php

require("dbconfig.php");

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
