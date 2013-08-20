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
	

	<link rel="shortcut icon" href="template/img/favicon.ico" />
	<link rel="stylesheet" href="template/css/style.css" />

	<?php include 'header.php';

	// Embedded styles
	 echo $embeddedCSS; ?>
	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
				<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			 | <?php echo $pageName;?></div>
		
		<h1><?php echo $pageName?></h1>
		
		<hr />

	
		<div id="main-content" style="width:620px;">
			<h3>Advising Night</h3>
			<img src="images/news/advising_pic.JPG" height="157" width="262" alt="" />
				<p>All BYU Chemical Engineering students in the sophomore, junior, and senior years of the program are invited to an advising night on Wednesday 29 Aug 2012 at 5:00 PM in 377 CB.  Pizza will be provided for all who come.  We will be addressing the common problems student have when planning their schedules as well as other thing specific to each year.  Save yourself problems at graduation time by attending this event.
				Topics that will be addressed include:</p>
				<ul>
					<li>Returning missionary items</li>
					<li>Technical Electives/ENG/EMSB</li>
					<li>Curriculum Change</li>
					<li>Scholarships</li>
					<li>Elective offerings</li>
					<li>Graduation clearance and interviews</li>
					<li>Prerequisites</li>
				</ul>
</p>

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


</body>
</html>