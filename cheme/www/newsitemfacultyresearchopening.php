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

$pageTitle = $pageName . " " . "| Chemical Engineering";

$pageDescription = "";

$pageKeywords = "Chemical Engineering, students, experience, leadership";

$embeddedCSS = "<style type='text/css'>

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

	<?php
	include 'header.php';

	// Embedded styles
	echo $embeddedCSS;
 ?>
	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
				<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			| <a href="History.php">Department</a> | <?php echo $pageName; ?></div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div><br />
		<div id="main-content" style="width:620px;">
			
				<img src="images/news/facultyResearchOpening_byuLogo.png" style="display:block;margin-left:auto;margin-right:auto;" />
				<br />
				<br />
				<h2>Faculty Position Opening</h2>
				<h3>October 3, 2013</h3>
				
				<p>The Chemical Engineering Department of Brigham Young University (BYU) announces that it has an opening for a continuing-status-track faculty position to begin August 2014. The undergraduate students in the department have average nationalized test scores (ACT/SAT) in the 95th percentile, and the number of Chemical Engineering B.S. graduates ranks in the top 20 schools in the nation. The department maintains a rigorous and productive graduate research program.
				</p>
				<p>Preference will be given to those with expertise in catalysis, thermodynamics, semi-conductors, or energy, but the position is open to all motivated candidates regardless of research area and experience. The new faculty member will be expected to excel in teaching at the undergraduate and graduate levels, and to develop a dynamic, externally-funded research program. A doctoral degree in chemical engineering or a related field is required.
				</p>
				<p>Initial rank will be consistent with qualifications and experience. BYU, an equal opportunity employer, requires all faculty members to observe the university’s honor code and dress and grooming standards (see honorcode.byu.edu). Preference is given to qualified members in good standing of the affiliated church- The Church of Jesus Christ of Latter-day Saints.  Interested applicants must complete the online BYU employment application (<a href = "http://yjobs.byu.edu">yjobs.byu.edu</a>) that includes a curriculum vitae, statement of interest, teaching statement, research statement, and names of three professional references. Applications will be accepted until Monday, November 4, 2013. Questions and correspondence should be addressed to Dr. W. Vincent Wilding, Search Committee Chair, 350 CB, Provo, UT 84602, vincent_wilding@byu.edu, ph. 801-422-2393.
				</p>
				<p>Full details for the application can be viewed <a href = "facultyApp.pdf">here</a>.</p>

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