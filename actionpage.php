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
    if ($search == ""){
      header("Location: ./search2.html");
    }
    $search_string = "SELECT * FROM space_cats WHERE cat_name LIKE '%$search%' ";

    $query = mysqli_query($conn, $search_string);
    $result_count = mysqli_num_rows($query);
}

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" type= "text/css" href="searchstyle.css">

<!-- banner -->
<div class="hero-image">
  <div class="hero-text">
    <h1>WELCOME FELLOW SPACE CAT</h1>
    <p>ENJOY THE SITE.</p>
    <p> ucsec{f3ll0w5p4c3c47}</p>
  </div>
</div>

<p>Find some of your fellow space cats here!</p>
<!-- search bar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="example" action="actionpage.php" method = "POST">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<h5>Search Results</h5>

<div class = "results_table">

<!-- Table One -->
<table>

<tr>
    <th>Cat Name</th>
    <th>Home Planet</th>
    <th>Tags</th>
    <th>Profile Link</th>
</tr>

<?php while($row1 = mysqli_fetch_array($query)):;?>
<tr>
    <td><?php echo $row1[0];?></td>
    <td><?php echo $row1[1];?></td>
    <td><?php echo $row1[2];?></td>

    <td><a href="<?php echo $row1[3]; ?>">Profile</a>

    <?php ?> 
</tr>
<?php endwhile;?>

</table>

</div>

</html>