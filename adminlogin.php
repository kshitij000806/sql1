<?php
$username = $_POST['username'];
$password = $_POST['password'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "sqlinjections";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()){
    echo "This was sad";
} else {
    $SELECT = "SELECT * FROM admins WHERE username='" .$username ."' AND passwords='" .$password ."'";

    $stmt = $conn->prepare($SELECT);
    echo $conn->error;
    $stmt->execute();
    $stmt->store_result();
    $num_row = $stmt->num_rows;
    $stmt->fetch();
    $stmt->close();
  
      if( $num_row === 1 ) {
        $_SESSION['userid'] = $username;
        header("Location: ./close.html");
      } else {
      header("Location: ./results.html");
      }
    }

?>