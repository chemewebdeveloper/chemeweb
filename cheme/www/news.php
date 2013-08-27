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

		<ul>
			<li><a href="newsitemnationalconference.php">Grad Student to Present at National Conference</a></li>
			<li><a href="newsitemtaubetapi.php">Eight Students Win Tau Beta Pi Scholarships</a></li>
			<li><a href="newsitemsbyumagazine.php">Student highlighted in BYU Magazine</a></li>
			<li><a href="newsitembundy.php">Dr. Bundy Receives Prestigious Awards</a></li>
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