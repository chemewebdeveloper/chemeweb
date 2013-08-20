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

	$pageName = "Returning Missionaries";

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
			| <a href="majorrequirements.php">Undergraduate</a> | <?php echo $pageName;?></div>
		<div id="title">
		<h1><?php echo $pageName?></h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	<p>Welcome home from your mission! We know that it can sometimes be an adjustment to remember all of the
	things to do when you return to BYU. Please look at the following helps for returning students in Chemical 
	Engineering</p><h2>Meet with Your Advisor</h2><p>We strongly urge you to see your advisor in the Chemical
	Engineering Department as soon as possible. You can contact the office to remind you of who your advisor currently
	is. This is important; we may be able to help you avoid costly registration mistakes that will prolong graduation
	by as much as one year.</p><h2>Apply for Scholarships</h2><p>Several departmental scholarships are available for returning missionaries, 
	but their&nbsp;<strong style="font-weight: bold; ">application deadlines are April 1</strong>&nbsp;for the following fall and winter
	semesters. Departing missionaries (particularly those leaving for 2 years) were encouraged to apply for these before leaving. If you
	didn't apply before you left but have returned from your mission before April 1, be sure to submit your scholarship applications by 
	that deadline. If you are still on your mission on April 1, and you did not submit scholarship applications before leaving on your 
	mission, your family may be able to prepare and submit applications for you. If you are returning from your mission and were not a
	ble to submit applications by April 1 of the year you are returning to BYU, be sure to submit applications as soon as possible to
	become eligible to receive the returning missionary scholarships <em>the year after&nbsp;you return to BYU</em>. Descriptions of 
	department scholarships for returning missionaries and continuing students are found at <a href="scholarships.php">Undergraduate Department
	Scholarships</a>.</p><h2>Brush-up on Your Math</h2><p>There are several ways to brush up on your <strong>math skills</strong>:</p
	><ul><li><a href="http://www.et.byu.edu/groups/engt295r/">College refresher course in math</a> (a free course offered each semester
	and term).</li><li>Online tutorials in <a href="mathhelp.php">mathematics</a> and <a href="mathcadtutorial.php">Mathcad</a></li></ul> 
			


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