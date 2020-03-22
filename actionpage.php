<?php
$search = $_POST['search'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "pwdpwd";
$dbname = "sqlinjections";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()){
    echo "This was sad";
} else {
    $SELECT = "SELECT photo_path FROM space_cats WHERE name LIKE '"%$search%"' ";

    $stmt = $conn->prepare($SELECT);
    echo $conn->error;
    $stmt->execute();
    $stmt->store_result();
    $num_row = $stmt->num_rows;

    $stmt->fetch();
    $stmt->close();
  
      if( $num_row === 1 ) {
        header("Location: ./search.html");
      }
      echo "Failed to login";}

?>