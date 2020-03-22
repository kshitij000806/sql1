<?php
$username = $_POST['username'];
$password = $_POST['password'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "pwdpwd";
$dbname = "sqlinjections";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()){
    echo "This was sad";
} else {
    $SELECT = "SELECT * FROM users WHERE username='" .$username ."' AND password='" .$password ."'";

    $stmt = $conn->prepare($SELECT);
    echo $conn->error;
    $stmt->execute();
    $stmt->store_result();
    $num_row = $stmt->num_rows;
    $stmt->fetch();
    $stmt->close();
  
      if( $num_row === 1 ) {
        $_SESSION['userid'] = $username;
        header("Location: ./search.html");
      }
      echo "Failed to login";}
/*
    $stmt = $conn->prepare($SELECT);
    echo $conn->error;
    $stmt->execute();
    $num_row = mysqli_num_rows($stmt);
    $row=mysqli_fetch_array($stmt);
    if( $n ){
        $_SESSION['username']=$row['userid'];
    
    
    $stmt = $conn->prepare($SELECT);
    echo $conn->error;
    $stmt->execute();
    
        header("Location: ./search.html");
    } else {
        echo "Failed to login";
    }
    */

?>