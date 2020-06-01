<?php
include("dbconfig.php");
$emp = 0;
  $email = $_POST['email'];
  if($email == ""){
    $emp = 1;
  }

  $sqlcheckduplicate = "SELECT * FROM subscribes where email = '$email'";
  $result = $conn->query($sqlcheckduplicate);
  if($result->num_rows > 0 && $emp == 0){
      echo "Email already subscribed!";
      ?>
      <a href="index.php">Go back</a>
      <?Php
  }
  else if($emp == 1){
      echo "Email is empty";
      ?>
      <a href="index.php">Go back</a>
      <?Php
  }
  else if($emp == 0 && $result->num_rows == 0){
    $sqlInsert = "INSERT INTO subscribes(email) values('$email')";
    if($conn->query($sqlInsert) === TRUE){
        echo "SUBSCRIBED successfully!";
        ?>
        <a href="index.php">Go back</a>
        <?Php
    }
  }
?>
