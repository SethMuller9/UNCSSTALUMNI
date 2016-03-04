<!Doctype HTML>
<html>
<head>
	<title>Sign In</title>
	<link type="text/css" rel="stylesheet" href="../CSS/MeyerReset.css"/>
	<link type="text/css" rel="stylesheet" href="../CSS/Homepage.css"/>
	<link href='../CSS/stylesheet.css' rel='stylesheet' type='text/css'>
	<link href='../CSS/stylesheetMuli.css' rel='stylesheet' type='text/css'>
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="../CSS/all-ie-only.css" />
	<![endif]-->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width"/>
</head>
<body>
	<div class="container1">
		<div class="Header">
		<p class="headerText">ALUMNI</p>
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
		<div id="signInContainer">
			<form action="UNCSSTlogin.php" method="post">
				Email:<br>
				<input name="signInEmail" type="text">
				<br>
				<br>
				Password:<br>
				<input name="signInPassword" type="password">
				<br>
				<br>
				<input type="submit" name="signInSubmit" value="Send It">
			</form>
		</div>
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