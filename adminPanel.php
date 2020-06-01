<?php
	session_start();
	include_once('dbconfig.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN | PANEL | INSERT_POST</title>
<style>
	 <?php
	 	include 'admin.css';
	 ?>
</style>
<script><?Php include('JQuery/jquery-3.2.1.min.js'); ?></script>
</head>
<body>
	<header>
		<h1>Management Panel</h1>
		<ul>
		<li><a href="adminPanel.php">Insert</a></li>
		<li><a href="adminPanel.php">Update</a></li>
		<li><a href="adminPanel.php">Hide</a></li>
		</ul>
	</header>

	<form action="addblog.php" method="post" enctype="multipart/form-data" id="form">

	<center><h1>Add a post</h1></center>
	<center>
		<input type="text" name="blogTitle" placeholder="Title"/><br>
		<textarea name="blogHeaderText" placeholder="Blog Header text" rows="5"></textarea>
		<br>
		<textarea name="blogBodyText" placeholder="Blog Body text" rows="5"></textarea>
		<br>
		<input type="text" name="author" placeholder="Author"/><br />
		<input type="text" name="blogURL" placeholder="URL"/>
		<input type="file" name="userFile" /> Upload image.<br>
			Visibility: <select name="postVisibility">
			  <option value="0">Select Visibility</option>
			  <option value="true">True</option>
			  <option value="false">False</option>
			</select><br>
		<input type="submit" name="submit" value="Add Post"/>

	</center>

	</form>

</body>
</html>
<?Php
	session_destroy();
?>
