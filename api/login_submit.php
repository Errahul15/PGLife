<?php
  session_start();
  require ("../includes/database_connect.php");

$email = $_post['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);
if (!$result) {
    echo "Something went wrong";
    exit;
}
$row_count = mysqli_num_rows($result);
if ($row_count=!0){
    echo "This email id is already registered with us!";
    exit;
}

$sql = "INSERT INTO users (email, password, full_name, phone, gender, college_name) VALUES('$email', '$password', '$full_name', 
'$phone', '$gender', '$college_name')";
 $result = mysqli_query($conn, $sql);
 if (!$result) {
     echo "Something went wrong!"
     exit;
 }
 echo "Your account has been successfully created!";
?>
 Click <a href="../index.php">here</a> to continue.
 <?php
 mysqli_close($conn);