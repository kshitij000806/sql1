<?php
$search = $_POST['search'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "sqlinjections";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" type= "text/css" href="styles.css">

<div class="form">
	  
	  <div id="login">   
		<h1>No Cat's Page was Found</h1>
		<p>.　　　　　　　　　　 ✦ 　　　　   　 　　　˚　　　　　　　　　　　　　　*　　　　　　   　　　　　　　　　　　　　　　.　　　　　　　　　　　　　　. 　　 　　　　　　　 ✦ 　　　　　　　　　　 　 ‍ ‍ ‍ ‍ 　　　　 　　　　　　　　　　　　,　　   　

			.　　　　　　　　　　　　　.　　　ﾟ　  　　　.　　　　　　　　　　　　　.
			
			　　　　　　,　　　　　　　.　　　　　　    　　　　 　　　　　　　　　　　　　　　　　　 ☀️ 　　　　　　　　　　　　　　　　　　    　      　　　　　        　　　　　　 🧼

			🐱  　　　　　   　　　　　.　　　　　　　　　　　.　　　　　　　　　　   　
			
			　˚　　　　　　　　　　　　　　　　　　　　　ﾟ　　　　　.　　　　　　　　　　　　　　　. 　　 　 🌎 ‍ ‍ ‍ ‍ ‍ ‍ ‍ ‍ ‍ ‍ ,　 　　　　　　　　　　　　　　* .　　　　　 　　　　　　　　　　　　　　.　　　　　　　　　　 ✦ 　　　　   　 　　　˚　　　　　　　　　　　　　　*　　　　　　   　　　　　　　　　　　　　　　.　　　　　　　　　　　　　　.. </p>
		<h2>Please log in!</h2>


	  </div>


	</div><!-- tab-content -->

	<table>

		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
		</tr>

		<?php while($row1 = mysqli_fetch_array($result1)):;?>
		<tr>
			<td><?php echo $row1[0];?></td>
			<td><?php echo $row1[1];?></td>
			<td><?php echo $row1[2];?></td>
			<td><?php echo $row1[3];?></td>
		</tr>
		<?php endwhile;?>

	</table>
	
</div> <!-- /form -->
</html>

?>