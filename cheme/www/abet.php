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

	$pageName = "ABET Acreditation";

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
	<script src="template/js/libs/jquery-1.7.2.js"></script>

	<?php include 'header.php';

	// Embedded styles
	 echo $embeddedCSS; ?>

	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			 <!--<a href="grad.php">-->Home <!--</a> | <?php echo $pageName;?>--></div>
			<div id="title">
		<h1><?php echo $pageName;?></h1>
			</div> 
 		<hr />

	<div class="sidebar">
		<?php include 'abetsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;"><br /> 
			 <p>
	<img alt="" src="/images/Abet/Accredited-EAC-Web.jpg" style="margin-left: 10px; margin-right: 10px; float: left; width: 120px; height: 132px; " />ABET, Inc.
	is the governing agency responsible for monitoring, evaluating, and certifying the quality of applied science, computing, engineering, and technology education.
	The BYU Chemical Engineering program is currently accredited by the Engineering Accreditation Commission of ABET, <a href="http://www.abet.org">http://www.abet.org</a>.</p>
<p>
	This site contains links to the College and Department Mission Statements. The Department Mission is achieved through Educational Objectives and Student Outcomes.</p><br />
<h2>
	Terminology</h2>
<p>
	The term <em><strong>Education Objectives</strong></em> refers to general statements that describe the career and professional accomplishments that the Chemical
	Engineering program is preparing graduates to achieve.</p>
<p>
	<em><strong>Student Outcomes</strong></em> refers to the outcomes which we would like for our students to possess when they leave the university and enter the workforce.</p>
<p>
	<strong><em>Competencies</em></strong> refers to specific characteristics of an outcome and, in most cases, are implemented in courses. The competencies
	simply provide more detail to the outcomes.</p>
<p>
	Educational Objectives, Student Outcomes, and Competencies are assessed throughout the curriculum to provide feedback to the Chemical Engineering program. 
	The feedback is used for continuous program improvement. In addition, prior to graduating with a BS degree in chemical engineering, students must pass an
	exam in which certain competencies (denoted Level 3 or <span data-scayt_word="L3" data-scaytid="1">L3</span>) are tested. For a thorough discussion of the
	senior competency exam that is a major component of our assessment plan, click on the link below. This is a link to a paper presented at the 2002 <span 
	data-scayt_word="ASEE" data-scaytid="2">ASEE</span> meeting in Montreal.</p>
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