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

	$pageName = "Safety";

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
			| <a href="History.php">Department</a> | <?php echo $pageName;?></div>
		
		<h1><?php echo $pageName?></h1>
		
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			<ul>
				<li>We want everyone to be safe</li>
				<li>We need everyone to be trained</li>
				<li>We need to document training</li><br /><br />
			</ul>
				
			<ul>
				<li>Lab Specific Training<br />
					- Required before working in lab<br />
					- Generated from <a href="http://risk.byu.edu/apps/trainingGuide/trainingQuestions.php">Risk Management Training Guide</a></li>
				<li><a href="http://www.et.byu.edu/faculty-and-staff/safety/collegehealthandsafetydocuments">College Safety Program</a><br />
					 <a href="http://www.et.byu.edu/sites/default/files/Chemical_Hygiene_Plan_511_final.pdf">Chemical Hygiene Plan</a><br />
					 <a href="jobhazardanalysis.docx">Job Hazard Analysis Form</a></li>
				<li> Periodic Safety Training Documents<br />
					 <a href="ideassafetymtg.pdf">Ideas for Lab Safety Training</a><br />
					 <a href="http://www.et.byu.edu/faculty-and-staff/safety/researchgrouptraining">College Safety Slides</a></li>
				
			</ul>
			
			<p>Last safety incident in the BYU ChE dept: May 16, 2012</p>


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