<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<title>Mike Wilcox</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/hoverIntent.js"></script>
        <script src="js/infobox.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="main">
		<div id="title">
			<a href="http://mikewilcox.nfshost.com/"><h1 class="first">Mike  </h1><h1 class="last"> Wilcox</h1></a>
		</div>

		<div id="links">
			<!--<h3 class="links"><fb:login-button show-faces="true" width="200" max-rows="1" scope="publish_actions"></fb:login-button></h3>-->
			<h3 class="links"><a href="http://mjwilcox.net">Blog</a></h3>
			<h3 class="links"><a href="http://www.github.com/mjw56">GitHub</a></h3>
			<h3 class="links"><a href="mike_wilcox_resume.pdf" target="_blank">Resume</a></h3>
			<h3 class="links"><a href="http://www.twitter.com/mikeWilc0x">Twitter</a></h3>
			<h3 class="links"><a href="pictures.php">Pictures</a></h3>
		</div>
		<div id="info">
			<h4 class="info">
				Hey, I'm <span style="color: #00AA72;">Mike</span>. I'm currently a senior at <span style="color: #9C0606;">Rutgers</span> where I'm majoring in <span style="color: #0D58A6;">Computer Science</span>. To the left is some of my <span style="color: #404380;">work</span>. Scroll below to <span style="color: #EE8D40;">contact</span> me. 
			</h4>
			<div class="push"></div>
		</div>
		<script>
			$(document).ready(function() {

				$("#links h3.links").hoverIntent(mousein_triger , mouseout_triger);

			});

			// expand the height of the container

			function mousein_triger(){
				$(this).animate({"padding-left": 25}, 100);
			}

			// reset the height of the container

			function mouseout_triger() {
				$(this).animate({"padding-left": 0}, 100);
			}
		</script>
	</div>
		
			
				<div id="footerSlideContent">
				<div id="footerSlideText">
					<h3 class="footer">Want to know more about me?</h3>
					<p><a href="mailto: mwilcox56@gmail.com">Email</a> me, I'm always down to chat. <br><br>Also, I'm always hanging out in #MLB-talk on irc.freenode.net. Use the <a href="http://mike.nodejitsu.com" target="_blank">Subway IRC Client</a> I'm hosting on Nodejitsu to come chat! There is a version of GitHub's hubot, sportbot, in the room at all times that is fun to interact with.</p>
					<p>A brief rundown of some things I like to do:</p>
					<ul>
						<li>Write clean, simple code in a diverse set of languages { Java, Python, C, C++, Ruby, PHP, SQL, Javascript }</li>
						<li>Full Stack Development</li>
						<li>Web Development</li>
						<li>Self-learning</li>
						<li>Watch <a href="http://philadelphia.phillies.mlb.com/index.jsp?c_id=phi" target="_blank">baseball</a> games</li>
						<li>2009 and 2011 Fantasy Football Champ</li>
					</ul>
				</div>
</body>
</html>
