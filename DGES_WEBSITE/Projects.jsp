
 <!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>My Projects</title>
		<style type="text/css">
			html, #page { padding:0; margin:0;}
			body { margin:0; padding:0; width:100%; color:black; font:normal 12px/2.0em Sans-Serif;} 
			h1, h2, h3, h4, h5, h6 {color:darkblue;}
			#page { background:navy;}
			#header, #footer, #top-nav, #content, #content #contentbar, #content #sidebar { margin:0; padding:100;}
						
			/* Logo */
			#logo { padding:0; width:auto; float:left;}
			#logo h1 a, h1 a:hover { font-size: 20px; color:black; text-decoration:none;}
			#logo h1 span { color:#f8dbdb;}

			/* Header */
			#header { background:#fff; }
			#header-inner { margin:0 auto; padding:0; width:970px;}
			
			/* Feature */
			.feature { background:navy;padding:18px;}
			.feature-inner { margin:auto;width:970px; }
			.feature-inner h1 {color:#f8dbdb;font-size:32px;}
			
			/* Menu */
			#top-nav { margin:0 auto; padding:0px 0 0; height:37px; float:right;}
			#top-nav ul { list-style:none; padding:0; height:37px; float:left;}
			#top-nav ul li { margin:0; padding:0 0 0 8px; float:left;}
			#top-nav ul li a { display:block; margin:0; padding:8px 20px; color:black; text-decoration:none;}
			#top-nav ul li.active a, #top-nav ul li a:hover { color:darkred; font-weight:bold;}
			
			/* Content */
			#content-inner { margin:0 auto; padding:10px 0; width:970px;background:#fff;}
			#content #contentbar { margin:0; padding:0; float:right; width:760px;}
			#content #contentbar .article { margin:0 0 24px; padding:0 20px 0 15px; }
			#content #sidebar { padding:0; float:left; width:200px;}
			#content #sidebar .widget { margin:0 0 12px; padding:8px 8px 8px 13px;line-height:1.4em;}
			#content #sidebar .widget h3 a { text-decoration:none;}
			#content #sidebar .widget ul { margin:0; padding:0; list-style:none; color:#959595;}
			#content #sidebar .widget ul li { margin:0;}
			#content #sidebar .widget ul li { padding:4px 0; width:185px;}
			#content #sidebar .widget ul li a { color:navy; text-decoration:none; margin-left:-16px; padding:4px 8px 4px 16px;}
			#content #sidebar .widget ul li a:hover { color:darkred; font-weight:bold; text-decoration:none;}
			
					
			/* Footer */
			#footer { background:navy;}
			#footer-inner {color: white; margin:auto; text-align:center; padding:12px; width:922px;}
			#footer a {color: white;text-decoration:none;}
			
			/* Clear both sides to assist with div alignment  */
			.clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
		</style>
	</head>
	<body>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<h1><a href="Login.jsp"><b>DGES.me</b> | <i>Education, Today I am ready to learn</i></a></h1>
					</div>
					<div id="top-nav">
						<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">My Profile</a></li>
						</ul>
					</div>
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
				<h1>My Projects</h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
							<h3 style='background:navy;border:1px solid #ccc;font-size:120%;text-decoration:none;color:white;padding-right:300px; target='_blank'><i>Announcements</i></a></h3>
							<p>Enter announcements here</p>
							<h3 style='background:navy;border:1px solid #ccc;font-size:120%;text-decoration:none;color:white;padding-right:300px; target='_blank'><i>Upcoming Assignments</i></a></h3>
							<p>Java 1</p>
							<p>Java 2</p>
							<p>Java 3</p>
							<p>Java 4</p>
							<h3 style='background:navy;border:1px solid #ccc;font-size:120%;text-decoration:none;color:white;padding-right:300px; target='_blank'><i>All Assignments</i></a></h3>
							<form>
							<input type = "text" name = "text" class = "search" placeholder="Search Assignments">
							<input type = "submit" name = "submit" class = "submit" value="Search">
							</form>
							<p>Java 1</p>
							<p>Java 2</p>
							<p>Java 3</p>
							<p>Java 4</p>
							<p>Python 1</p>
							<p>Python 2</p>
							<p>Python 3</p>
							<p>Python 4</p>
							<p>CSS 1</p>
							<p>CSS 2</p>
							<p>CSS 3</p>
							<p>CSS 4</p>
						</div>
					</main>
					
					<nav id="sidebar">
						<div class="widget">
							<h3>Quick Links</h3>
							<ul>
							<li><a href="#">My Progress</a></li>
							<li><a href="#">Milestones</a></li>
							<li><a href="#">Disscussion</a></li>
							<li><a href="#">Related Resources</a></li>

							</ul>
						</div>
					</nav>
					
					<div class="clr"></div>
				</div>
			</div>
		
			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; 2017 Copyright <a href="#">DGES.me</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
		</div>
	</body>
</html>
