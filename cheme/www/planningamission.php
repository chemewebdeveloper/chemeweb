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
	$pageTitle = "Planning a Mission? | Chemical Engineering";

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
			| <a href="newmajorreqs.php">Undergraduate</a> | Planning a Mission?</div>
		<div id="title">
		<h1>Planning a Mission?</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
				<h2>Here are some hints about what to do:</h2>
					<h3>Apply for Deferment</h3>
					<p>
					Those planning to serve a mission must apply for a "deferment," which suspends
					your enrollment at BYU while preserving your status as an admitted student. 
					(Students leaving campus for an extended period without a deferment are required
					to re-apply for admission in order to resume study.) 
					</p>
					<h3>
					Apply for Scholarships
					</h3>
					<p>
					Several department scholarships are available for returning missionaries,
					but their application deadlines are April 1 for the following fall and winter 
					semesters. However, many missionaries will still be on their missions on April
					1 of the year they plan to return to BYU and, therefore, will find it difficult 
					to submit a scholarship application that year. If you anticipate being in that 
					category, you should apply for scholarships before leaving. If you do so, your
					application will be evaluated and the results communicated to you before you 
					even leave for your mission. The payments for awarded scholarships will then 
					be deferred to the fall semester that you return to BYU.
					</p>
					<p>
					Descriptions of the department scholarships for returning missionaries and
					continuing students are presented in <a href="scholarships.php">Department Scholarships</a>.
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