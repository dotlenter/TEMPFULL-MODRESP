<?Php
include('dbconfig.php');
				$date = date('m_d_Y_h_i_s_a', time());
				if($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				$img = $blogTitle = $auth = $blogHeaderText =  $blogBodyText =  $blogURL = "";

				if($_SERVER['REQUEST_METHOD'] == "POST"){
					if(!empty($_POST["blogTitle"])){
						$blogTitle = $_POST["blogTitle"];
					}else {$blogTitle = "No Title";}

					if(!empty($_POST["author"])){
						$auth = $_POST["author"];
					}else {$auth = "Sysadmin";}

					if(!empty($_POST["blogHeaderText"])){
						$blogHeaderText = $_POST["blogHeaderText"];
					}else {$blogHeaderText = "";}

					if(!empty($_POST["blogBodyText"])){
						$blogBodyText = $_POST["blogBodyText"];
					}else {$blogBodyText = "";}

					if(!empty($_POST["blogURL"])){
						$blogURL = $_POST["blogURL"];
					}else {$blogURL = "";}

					$visib = $_POST["postVisibility"];
					if($visib == "0" || $visib == "false"){
						$visib = false;
					}

				}

				if(isset($_FILES["userFile"])){
					$info = pathinfo($_FILES['userFile']['name']);
					$ext =  pathinfo($_FILES['userFile']['name'], PATHINFO_EXTENSION);
					$newname = "$date." . $ext;
					$img = $newname;
					$target = 'blogImage/' .$newname;
					move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
				}
				else{
					$img = "Noimage.jpg";
				}
				$blogTitle = mysqli_escape_string($conn, trim($blogTitle));
				$blogHeaderText = mysqli_escape_string($conn, trim($blogHeaderText));
				$blogBodyText = mysqli_escape_string($conn, trim($blogBodyText));
				$auth = mysqli_escape_string($conn, trim($auth));
				$visib = mysqli_escape_string($conn, trim($visib));
				$blogTitle= strip_tags($blogTitle);
				$blogHeaderText = strip_tags($blogHeaderText);
				$blogBodyText = strip_tags($blogBodyText);
				$auth = strip_tags($auth);
				$sql = "INSERT INTO blogcontent(blogTitle, blogHeaderText, blogImage, blogBodyText, createdBy, blogURL, blogVisibility) VALUES('$blogTitle', '$blogHeaderText', '$img', '$blogBodyText', '$auth', '$blogURL', '$visib')";

				if($conn->query($sql) === TRUE){
					echo "<br>Post added successfully!";
				}else{
					echo "Error " . $sql . "<br>" . $conn->error;
				}
    header("Location:adminPanel.php");
	?>
