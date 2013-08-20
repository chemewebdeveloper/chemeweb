<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<?php

	$pageName = "News";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>

        </style>";
	

?>
<title><?php echo $pageTitle; ?></title>
	<meta name="description" content=<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> >

	<meta name="viewport" content="width=device-width" />

	<!-- Insert plugin stylesheets here -->
	<link rel="stylesheet" href="template/js/plugins/shadowbox/shadowbox.css" />
	<link rel="stylesheet" href="template/css/plugins/news.css" />
	<script src="template/js/plugins/shadowbox/shadowbox.js"></script>
	

	<link rel="shortcut icon" href="template/img/favicon.ico" />
	<link rel="stylesheet" href="template/css/style.css" />
	<script src="template/js/libs/jquery-1.7.2.js"></script>
	

	<?php include 'header.php';

	// Embedded styles
	 echo $embeddedCSS; ?>

	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			| <a href="History.php">Department</a> | <?php echo $pageName?></div>
		<div id="title">
		<h1><?php echo $pageName?></h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			
		
		<p>Welcome to our news page. Here you will find all about what is happening in 
		Chemical Engineering. If you would like to see more information, please hold your mouse over a link.</p>
		<div id="publications" class="display-news-item" style="display:none">
					<ul id="items" style="list-style-type:none"> 
							<li>
								<img src="images/news/awards.jpg" width="220" height="157" alt=""/>
								<h3><a href="recentpublications.php">Recent Publications</a></h3>
								<p>Four different Chemical Engineering 
									professors have submitted articles that have been accepted for publication.</p>
						</li>
			   		</ul>
		</div>
		<div id="job" class="display-news-item" style="display:none">
					<ul id="items" style="list-style-type:none"> 
						<li>
							<img src="images/news/jobopening.png" width="246" height="157" alt=""/>
							<h3><a href="newsitemjobopening.php">Job Opportunity</a></h3>
							<p>There is a job opening for the opening for the Assistant Project Coordinator in the DIPPR Lab.</p>	
						</li>
					</ul>
		</div>
		<div id="mit" class="display-news-item" style="display:none">
					<ul id="items" style="list-style-type:none"> 
						<li>
							<img src="images/directory/lecture.jpg" width="209" height="157" alt=""/>
							<h3><a href="lecture.php">MIT Professor Gives Lecture</a></h3>
							<p>Doctor Langer
							 visited BYU campus on February 6 and 7, meeting with faculty and giving two presentations.</p>	
						</li>
					</ul>
		</div>
		<div id="baxter" class="display-news-item" style="display:none">
				<ul id="items" style="list-style-type:none"> 
					<li>
						<img src="images/directory/baxter.jpg" width="121" height="157" alt=""/>
						<h3><a href="newsitembaxter.php">Dr. Baxter Receives Lecturer Award</a></h3>
						<p>Dr. Baxter has received the 2012-13 Lecturer Award.
	 					This award praises his research accomplishments.</p>	
					</li>
				</ul>
		  </div>
		<div id="chem513" class="display-news-item" style="display:none">
		  					<ul id="items" style="list-style-type:none"> 
		  						<li>
										<img src="images/news/dna.png"  alt=""/>
		  					<h3><a href="news.php">Learn About ChE 513 and ME 575</a></h3>
		  						<p>Click here to find out more about catalog issues with ChE 513 and to learn more about ME 575.</p>
		  						</li>
						</ul> 
		</div>	
		<div id="newfaculty" class="display-news-item" id="last" style="display:none">	
			<ul id="items" style="list-style-type:none"> 
				<li>
					<img src="images/news/cooknew.jpg" width="121" height="157" alt=""/>
					<h3><a href="newsitemnewfaculty.php">New Faculty Member</a></h3>
					<p>We are pleased to announce the arrival of our newest faculty
				 		member, Doctor Alonzo D. Cook. We are glad you are here!</p>
				</li>
			</ul>							
		</div>
		
		<ul>
			<li><a href="newsitemdeanallred.php" id="seven">Dean Allred Scholarship Fund</a></li>
			<li><a href="newsitemchemecar.php" id="seven">BYU ChE Team Wins Car Competition</a></li>
			<li><a href="newsitemuav.php" id="seven">Flying UAVs</a></li>
			<li><a href="newsitemjobopening.php" id="one">Job Opening in DIPPR Lab</a></li>
			<li><a href="lecture.php" id="two">MIT professor Gives Lecture </a></li>
			<li><a href="recentpublications.php" id="three">Recent Publications</a></li>
			<li><a href="newsitembaxter.php" id="four">Dr. Baxter Receives 2012-13 Lecturer Award</a></li>
			<li><a href="newsitemche513.php" id="five">Learn About ChE 513 and ME 575</a></li>
			<li><a href="newsitemnewfaculty.php" id="six">New Faculty Member Announced</a></li>
		</ul>
</div>
</div>
 <?php
	 include 'footer.php'
	?>

	<!-- NORMAL SCRIPTS -->
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	<script src="template/js/plugins/sidebarsize.js"></script>
	<script src="template/js/plugins/displaynews.js"></script>
</body>
</html>