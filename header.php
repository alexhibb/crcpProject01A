<html>
<head>
	<link href="styles.css" rel="stylesheet">
	<title>Top 100 Albums of All Time </title>
	<meta name = "description" content = "A list of the top 100 albums of all time, according to Rolling Stone." />

 	 <!-- <script type="text/javascript" src="handler.js"></script> -->

 <script>
	function replaceList() {
	var xhr = new XMLHttpRequest();
	xhr.onReadyStateChange = function() {
		if (xhr.readyState == 4 && xhr.status == 200)//every response has a code (200 means OK)
		{
			document.getElementById("order").innerHTML = "HEY"; //xhr.
		}
		xhr.open("POST", "http://ahibbard.humanoriented.com/albumTable.php",true);
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		var sortOrder = document.getElementById("order").value;
		xhr.send("sortOrder = " + sortOrder); //need to send data <?php $_POST['order']?>
	}
	//go out to server
	//grab data in data.txt
	//replace with FavoriteFoods div...
}
</script>

</head>
<body>

	<!-- <img src = "http://ahibbard.humanoriented.com/Project01A/school-of-rock.png" alt = "Jack Black" style = "width:580px;height:228px;" > -->
	<p class="title">
	Top 100 Albums of All Time </p>
	<p class="subtitle">
	At least according to someone </p>

<!-- 	<form>
	<input type = "button" value = "Year" onClick = "location.href = 'byYear.php'"/>
	</form> -->


	<form method = "POST" actno  = "#">
		<input type = "submit" onclick = "replaceList(); return false" >
		<select name="order"> 
  			<option <?php if ($order == "rank") { ?> selected="selected" <?php } ?> value="rank">Rank</option>
  			<option <?php if ($order == "title") { ?> selected="selected" <?php } ?> value="title">Title</option>
  			<option <?php if ($order == "year") { ?> selected="selected" <?php } ?> value="year">Year</option>
		</select>
	</form>

<!-- 	<form action = "index.php" method = "POST">
		<select name="order"> 
  			<option value="rank">Rank</option>
  			<option value="title">Title</option>
  			<option value="year">Year</option>
  			<input type = "submit" value = "Submit" onclick = "replaceList(); return false"/>
		</select>
	</form> -->