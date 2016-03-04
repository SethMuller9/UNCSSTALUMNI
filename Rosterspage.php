<!Doctype HTML>
<html>
<head>
	<title>Roster</title>
	<link type="text/css" rel="stylesheet" href="../CSS/MeyerReset.css"/>
	<link type="text/css" rel="stylesheet" href="../CSS/Homepage.css"/>
	<link href='../CSS/stylesheet.css' rel='stylesheet' type='text/css'>
	<link href='../CSS/stylesheetMuli.css' rel='stylesheet' type='text/css'>
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="../CSS/all-ie-only.css" />
	<![endif]-->
	<meta name="viewport" content="width=device-width"/>
</head>
<body>
	
		<div class="container1">
		<button type="button" id="registerPageButton" onclick="window.location='Registerpage.php'">SIGN UP</button>
	<!--<button type="button" id="signInPageButton" onclick="window.location='Signinpage.php'">Sign In</button>-->
		<div class="Header">
		<p class="headerText">ROSTERS</p>
	</div>
	<div id="Navbar">
		<ul>
				<li><a  href="Homepage.php">Home</a></li>
				<li><a  href="Mediapage.php">Media</a></li>
				<li><a  href="Rosterspage.php">Rosters</a></li>
				<li><a  href="Donatepage.php">Donate</a></li>
				<li><a  href="Scholarshipspage.php">Scholarships</a></li>
		</ul>
	</div>
	<table id="rosterInfo">
		<tr>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>EMAIL</th>
			<th>YEARS WITH TEAM</th>
			<th>LOCATION</th>
			<th>INTERESTS</th>
		</tr>
	<?php 
	require_once('UNCSSTconfig.php');
	require_once('UNCSSTfunctions.php');


	$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

	$sql = "SELECT * FROM logininfo";

	$results = mysql_query($sql);

	if (!$results) {
	die('Invalid query: ' . mysql_error());
	}

	while($result = mysql_fetch_array($results)){

	echo '<tr>';
	echo '<td>' . $result['firstName'] . '</td>';
	echo '<td>' . $result['lastName'] . '</td>';
	echo '<td>' . $result['email'] . '</td>';
	echo '<td>' . $result['sel1'] . '<span> - </span>' . $result['sel2']. '</td>';
	echo '<td>' . $result['citystate'] . '</td>';
	echo '<td><p id="osd1">' . $result['onsnowdisciplines1'] . "</p><p id='osd2'>" . $result['onsnowdisciplines2'] . "</p><p id='osd3'>" . $result['onsnowdisciplines3'] . "</p><p id='osd4'>" . $result['onsnowdisciplines4'] . "</p><p id='osd5'>" . $result['onsnowdisciplines5'] . "</p><p id='osd6'>" . $result['onsnowdisciplines6'] . "</p><p id='osd7'>" . $result['onsnowdisciplines7'] . "</p><p id='osd8'>" . $result['onsnowdisciplines8'] . "</p>" . '</td>';
	echo '</tr>';
	}

?>		

	</table>
	<div id="endBar">
			<a href="https://twitter.com/uncskisnowboard">
				<div id="twitterHandle"><img src="../images/twitter-logo.jpg" alt="twitterhandle"></div>
			</a>
			<a href="https://www.facebook.com/groups/211595492241221/">
				<div id="fbHandle"><img src="../images/facebook-logo.jpg" alt="FBhandle"></div>
			</a>
			<p>&copy 2015 Seth Muller. All rights reserved.</p>
		</div>
</div>
<script src="jquery-2.1.4.js"></script>
<script src="UNCSST.js"></script>
</body>
</html>