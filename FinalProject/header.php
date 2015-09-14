<html>
<head>
	<link href="styles.css" rel="stylesheet">
	<title>Top 100 Albums of All Time </title>
	<meta name = "description" content = "A list of the top 100 albums of all time, according to Rolling Stone." />

 <script>
 function replaceList() {
 	var xhr = new XMLHttpRequest();
 	xhr.onreadystatechange = function() {
 		//
 		if (xhr.readyState==4 && xhr.status==200){
 			document.getElementById("albums").innerHTML = xhr.responseText;
 		}
 	}
 	xhr.open("POST", "http://ahibbard.humanoriented.com/albumTable.php", true);
 	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded", "charset=UTF-8");
 	var sortOrder = document.getElementById("order").value;
 	xhr.send("order=" + sortOrder);

 }
</script>
</head>

<body>

	<p class="title">
	Top 100 Albums of All Time </p>
	<p class="subtitle">
	At least according to someone </p>

	<form method="POST" action="#">
		<input type = "submit" value = "Order By" onclick = "replaceList(); return false;" >
		<select id="order" name="order"> 
  			<option <?php if ($order == "rank") { ?> selected="selected" <?php } ?> value="rank">Rank</option>
  			<option <?php if ($order == "title") { ?> selected="selected" <?php } ?> value="title">Title</option>
  			<option <?php if ($order == "year") { ?> selected="selected" <?php } ?> value="year">Year</option>
		</select>
	</form>
