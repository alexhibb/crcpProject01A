<html>
<head>
	<link href="styles.css" rel="stylesheet">
	<title>Top 100 Albums of All Time </title>
	<meta name = "description" content = "A list of the top 100 albums of all time, according to Rolling Stone." />

 	<script type="text/javascript" src="handler.js"></script>

</head>
<body>

	<!-- <img src = "school-of-rock.png" alt = "Jack Black" style = "width:304px;height:228px;" > -->
	<p class="title">
	Top 100 Albums of All Time </p>
	<p class="subtitle">
	At least according to someone </p>

<!-- 	<form>
	<input type = "button" value = "Year" onClick = "location.href = 'byYear.php'"/>
	</form> -->

	<form action = "index.php" method = "POST">
		<select name="order"> 
  			<option id = "rank" value="rank">Rank</option>
  			<option id = "title" value="title">Title</option>
  			<option id = "year" value="year">Year</option>
  			<input type = "submit" value = "Submit" />
		</select>
	</form>



<!-- 
 	<form METHOD="POST" ACTION="index.php">
	<input TYPE="submit" VALUE="Order By Rank">
	</form>

	<form METHOD="POST" ACTION="index.php">
	<input TYPE="submit" VALUE="Order By Title">
	</form>

	<form METHOD="POST" ACTION="index.php">
	<input TYPE="submit" VALUE="Order By Year">
	</form> 

	<form METHOD="POST" ACTION="index.php">
	<input TYPE="submit" VALUE="Home Page">
	</form>
 -->
