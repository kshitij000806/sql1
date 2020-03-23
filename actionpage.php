<?php
$search = $_POST['search'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "sqlinjections";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()){
    echo "This was sad";
} else {
    $terms = isset($search) ? $search : '';
    $search_string = "SELECT * FROM space_cats WHERE ";
    $display_words = "";

    $keywords = explode(' ', $search);
    foreach ($keywords as $word){
      
    $search_string .= "keywords LIKE '%".$word."%' OR ";
    $display_words .= $word.' ';
    }
    $search_string = substr($search_string, 0, strlen($search_string)-4);
    $display_words = substr($display_words, 0, strlen($display_words)-1);
    }

    $query = mysqli_query($conn, $search_string);
    $result_count = mysqli_num_rows($query);

    if ($result_count > 0){
 
      // display the header for the display table
      echo '<table class="search">';
      
      // loop though each of the results from the database and display them to the user
      while ($row = mysqli_fetch_assoc($query)){
        $path = $row['profile_link'];
        header("Location: $path");
      }
      
  }
  else {
      echo 'There were no results for your search.';
  }

?>