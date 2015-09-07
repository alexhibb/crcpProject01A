<table>
  <thead>
    <tr>
      <td>Rank</td>
      <td>Title</td>
      <td>Year</td>
    </tr>
  </thead>
<?php


$album = $_POST['order'];




$servername = "crcp3320db.humanoriented.com";
$username = "crcp3320";
$password = "Crcp3320";
$dbname = "crcp3320";

$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

//	if ($album == 'rank') {
	if(isset($album) == TRUE) {
		$sql = "SELECT * FROM albums ORDER BY $album;";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
    		echo "<tr>\n" . "\t<td>" . $row["rank"] . "</td>\n<td>" . $row["title"]. "</td>\n<td>" . $row["year"]. "</td>\n</tr>\n";
		}
	}
	// }
	// else if ($album == 'title') {
	// 	echo "This is the title";
	// //else if(isset($_POST['title']) == TRUE) {
	// 	$sql = "SELECT * FROM albums ORDER BY title;";
	// 	$result = $conn->query($sql);
	// 	while($row = $result->fetch_assoc()) {
 //    		echo "<tr>\n" . "\t<td>" . $row["rank"] . "</td>\n<td>" . $row["title"]. "</td>\n<td>" . $row["year"]. "</td>\n</tr>\n";
	// 	}
	// }
	// else if ($album == 'year') {
	// 	echo "This is the year";
	// //else if(isset($_POST['year']) == TRUE){
	// 	$sql = "SELECT * FROM albums ORDER BY year;";
	// 	$result = $conn->query($sql);
	// 	while($row = $result->fetch_assoc()) {
 //    		echo "<tr>\n" . "\t<td>" . $row["rank"] . "</td>\n<td>" . $row["title"]. "</td>\n<td>" . $row["year"]. "</td>\n</tr>\n";
	// 	}
	// }

	else {
		$sql = "SELECT * FROM albums;";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
    		echo "<tr>\n" . "\t<td>" . $row["rank"] . "</td>\n<td>" . $row["title"]. "</td>\n<td>" . $row["year"]. "</td>\n</tr>\n";
		}
	}



$conn->close();
?>

</table>






