<!Doctype HTML>
<html>
	<head>
		<title>Register</title>
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
		
		<div id="welcomebutton" style="display: none;"><p>&nbspWelcome, </p><p id="welcomename"></p></div>
		<div class="container1" style="height: 1000px">
			<button type="button" id="registerPageButton" onclick="window.location='Registerpage.php'" class="gradient">
				<!--[if gte IE 9]><style type="text/css">
				.gradient {
					filter: none;
				}
				</style><![endif]-->
			SIGN UP</button>
			<!--<button type="button" id="signInPageButton" onclick="window.location='Signinpage.php'" class="gradient" style="">
				<!--[if gte IE 9]><style type="text/css">
				.gradient {
					filter: none;
				}
				</style><![endif]-->
			<!--Sign In</button>-->
			<div class="Header">
				<p class="headerText">ALUMNI</p>
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
			<div id="formcontainer">
				<form name="registerform" id="registerform" action="registerX.php" method="POST">
				
				<input type="hidden" name="formID" value="logininfo" />
				<input type="hidden" name="redirect_to" value="" />
					
					<div ID="firstNameBox">
						<p>First name</p>
						<input type="text" id="firstName" name="firstName" />
						<br />
					</div>
					
					<div ID="lastNameBox">
						<p>Last name</p>
						<input type="text" id="lastName" name="lastName" />
						<br />
					</div>
					
					<div ID="emailbox">
						<p>Email</p>
						<input type="text" id="email" name="email" size="30"/>
						<br />
					</div>
					
					<div ID="passwordbox">	
						<p>Password</p> 
						<input type="password" ID="password" name="password"/>
						<br />
					</div>
					
					<div ID="confirmpasswordbox">	
						<p>Confirm Password</p> 
						<input type="password" ID="confirmpassword" onkeyup="passwordvalidator()"/>&nbsp <span id="doesnotmatch"></span>
						<br />
					</div>
					
					<div ID="citystatebox">
						<p>City, State</p> 
						<input type="text" id="citystate" name="citystate"/>
						<br />
					</div>
					
					<div id="yearsWithTeam">
						<p>Years with team</p>
						
						<select id="sel1" name="sel1">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
					</select>
					to
					<select id="sel2" name="sel2">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
					</select>
					</div>
					
					<br />
					Interests
					<br />
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines1" value="Downhill Skiing"/> Downhill Skiing
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines2" value="Downhill Snowboarding"/> Downhill Snowboarding
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines3" value="Cross-Country Skiing"/> Cross-Country Skiing
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines4" value="Backcountry Skiing"/> Backcountry Skiing
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines5" value="Backcountry Splitboarding"/> Backcountry Splitboarding
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines6" value="Park Skiing"/> Freestyle Skiing
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines7" value="Park Riding"/> Freestyle Riding
					<br />
				&nbsp <input type="checkbox" name="onsnowdisciplines8" value="Ski Mountaineering"/> Ski Mountaineering
					<br />
					<br />
				<input type="button" id="registerSubmitButton" onclick="regSubBut()" value="Send It">&nbsp&nbsp&nbsp <span id="errorInformer" style="color:red;"></span>	
				</form>
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
	