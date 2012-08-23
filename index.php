<html>
<head>
	<title>Mike Wilcox</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/hoverIntent.js"></script>
        <script src="js/infobox.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>

	<script>
	var kkeys = [], konami = "38,38,40,40";
	$(document).keydown(function(e) {
	  kkeys.push( e.keyCode );
	  if ( kkeys.toString().indexOf( konami ) >= 0 ){
	    $(document).unbind('keydown',arguments.callee);
	    $.getScript('http://www.cornify.com/js/cornify.js',function(){
	      cornify_add();
	      $(document).keydown(cornify_add);
	    });          
	  }
	});
	</script>
</head>
<body>
		<div id="title">
			<h1 class="first">Mike  </h1><h1 class="last"> Wilcox</h1>
		</div>

		<div id="links">
			<h3 class="links"><a href="http://mjwilcox.net">Blog</a></h3>
			<h3 class="links"><a href="http://www.github.com/mjw56">GitHub</a></h3>
			<h3 class="links"><a href="mike_wilcox_resume.pdf" target="_blank">Resume</a></h3>
			<h3 class="links"><a href="http://www.twitter.com/mikeWilc0x">Twitter</a></h3>
		</div>
		<div id="info">
			<h4 class="info">
				Hey, I'm <span style="color: #00AA72;">Mike</span>. I'm currently a senior at <span style="color: #9C0606;">Rutgers</span> where I'm majoring in <span style="color: #0D58A6;">Computer Science</span>. <br>On the <span style="color: #404380;"> left</span> is some of my work. <br>Click <span style="color: #EE8D40;">below</span> to contact me. 
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
		<div id="footerSlideContainer">
			<div id="footerSlideButton"></div>
				<div id="footerSlideContent">
				<div id="footerSlideText">
					<h3 class="footer">Want to know more about me?</h3>
					<p><a href="mailto: mwilcox56@gmail.com">Email</a> me, I'm always down to chat.</p>
					<p>A brief rundown of some things I like to do:</p>
					<ul>
						<li>Write code in a diverse set of languages [ Java, Python, C, C++, Ruby, PHP, SQL, Javascript ]</li>
						<li>Web Development</li>
					</ul>
				</div>
			</div>
		</div>
		<script>
		// Use 'jQuery(function($) {' for inside WordPress blogs (without quotes)
		$(function() {
			var open = false;
			$('#footerSlideButton').click(function() {
			if(open === false) {
				$('#footerSlideContent').animate({ height: '300px' });
				$(this).css('backgroundPosition', 'bottom left');
				open = true;
			} else {
				$('#footerSlideContent').animate({ height: '0px' });
				$(this).css('backgroundPosition', 'top left');
				open = false;
			}
			});		
		});
		</script>
</body>
</html>
