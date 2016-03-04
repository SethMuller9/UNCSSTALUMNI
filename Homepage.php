<!Doctype HTML>
<html>
	<head>
	<!--Have the register page ask if the user would like email notifications of other people's plans for ski trips. Also, you could make it more user specific by only posting ski trips in locations near them. or only ski trips at resorts they are interested in. -->

		<title>UNC Ski Team Alumni</title>
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
		<div id="welcomebutton"><p>&nbspWelcome, </p><p id="welcomename"></p></div>
		<div class="container1" id="container1spcl">
			<button type="button" id="registerPageButton" onclick="window.location='Registerpage.php'" class="gradient">
				<!--[if gte IE 9]><style type="text/css">
				.gradient {
					filter: none;
				}
				</style><![endif]-->
			SIGN UP</button>
			<!--<button type="button" id="signInPageButton" onclick="window.location='Signinpage.php'" class="gradient">
				<!--[if gte IE 9]><style type="text/css">
				.gradient {
					filter: none;
				}
				</style><![endif]-->
			<!--Sign In</button>-->
			<div class="Header">
				<p class="headerText" id="Header">ALUMNI</p>
			</div>
			<div id="Navbar" class="gradient" ><!--[if gte IE 9]>
				<style type="text/css">
					.gradient {
						filter: none;
					}
				</style>
				<![endif]-->
				<ul>
					<li><a  href="Homepage.php">Home</a></li>
					<li><a  href="Mediapage.php">Media</a></li>
					<li><a  href="Rosterspage.php">Rosters</a></li>
					<li><a  href="Donatepage.php">Donate</a></li>
					<li><a  href="Scholarshipspage.php">Scholarships</a></li>
				</ul>
			</div>
			<div id="tripPost">
				<h1 class="flubber">TRIP PLANNING</h1>
				<br>
				<form  action="UNCSSTTripPost.php" method="POST" name="UNCSSTTripPost">
					<input type="hidden" name="formID" value="tripPost" />
					<input type="hidden" name="redirect_to" value="" />
					<textarea id="tripPostTextArea" rows="5" name="tripPostTextArea" placeholder="Let teammates know where you're planning to ski this season."></textarea>
					<input type="submit" id="tripPostSubmit" value="Send It">
				</form>
				<div id="submissionsBox">
			<?php 
	require_once('UNCSSTconfig.php');
	require_once('UNCSSTfunctions.php');


	$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

	$sql = "SELECT * FROM tripPost";

	$results = mysql_query($sql);

	if (!$results) {
	die('Invalid query: ' . mysql_error());
	}

	while($result = mysql_fetch_array($results)){
	echo '<div id="submissionsWrapper" style="border: 3px solid white; background: grey; font-family: muliregular; width: 87%; padding: 25px; vertical-align: center;">';
	echo '<p>' . $result['tripPostTextArea'] . '</p>';
	echo '</div>';
	}

?>		
				</div>
			</div>
			<div id="undergraduateNews">
				<h1 class="flubber">UNDERGRADUATE NEWS</h1>
				<br>
				<div id="newsBox">
					<a href="http://uncskisnowboard.appspot.com/blog/5637489247125504" class="grid_item">
						<div class="fluid grid_item">
							<img src="http://i.imgur.com/bEcWug6.jpg" class="grid_image">
							<div class="fluid grid_details">
								<div class="fluid grid_post_title">A First Year's Perspective on the First Competition of 2016</div>
								<div class="fluid grid_post_info">Jan 19 2016 |  Liah McPherson</div>
							</div>
						</div>
					</a>
					<br>
					<br>
					<a href="http://uncskisnowboard.appspot.com/blog/5081456606969856" class="grid_item">
						<div class="fluid grid_item">
							<img src="http://i.imgur.com/mWyARBv.jpg" class="grid_image">
							<div class="fluid grid_details">
								<div class="fluid grid_post_title">First Snowflex Trip of the New School Year!</div>
								<div class="fluid grid_post_info">Aug 25 2014 |  David Stanley</div>
							</div>
						</div>
					</a>
					<br>
					<br>
					<a href="http://uncskisnowboard.appspot.com/blog/5631986051842048" class="grid_item">
						<div class="fluid grid_item">
							<img src="http://lh3.ggpht.com/Es1Oa7N_YEx0Arbhk9jwQ-EOa_WMEkdDgSpvK0jCXjFP1NSG9PY03Le3tUTAy4iofZP7i7TkxPNbc6AQ3ayQVBcBC8aT" class="grid_image">
							<div class="fluid grid_details">
								<div class="fluid grid_post_title">Spring Break Edit - UNCSST Goes to Jackson</div>
								<div class="fluid grid_post_info">Aug 24 2014 |  David Stanley</div>
							</div>
						</div>
					</a>
					<br>
					<br>
					<a href="http://uncskisnowboard.appspot.com/blog/5664248772427776" class="grid_item">
						<div class="fluid grid_item">
							<img src="http://lh3.ggpht.com/72JMJGozJqmIDZbVeK3nyCoaaKJMdA8H_ozJuAMByTGzCXVIuUG8ciBVO3I20krIFJU-aSxd5wQjekQc9Jlk2aMohFWa" class="grid_image">
							<div class="fluid grid_details">
								<div class="fluid grid_post_title">UNCSST Featured in Blue &amp; White Magazine </div>
								<div class="fluid grid_post_info">Aug 23 2014 |  David Stanley</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div id="endBar" class="gradient"><!--[if gte IE 9]>
				<style type="text/css">
					.gradient {
						filter: none;
					}
				</style>
				<![endif]-->
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