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
	$pageTitle = "Advice For Freshmen | Chemical Engineering";

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
			| <a href="whatischem.php">Prospective Students</a> | Advice for Freshmen</div>
		<div id="title">
		<h1>Advice for Freshmen</h1>
		</div>
		<hr />
	
	<div class="sidebar">
		<?php include 'prospectivesidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;"><br />
			<p>We encourage you to look through the materials that describe the requirements to complete a 
			degree in chemical engineering at BYU under the Undergraduate tab. While looking at the requirements, pay particular 
			attention to the following requirements:<br />
			</p>
				<ol>
					<li>Make sure that you are starting into the Chemistry series (Chem 105 or 111)
					and the Math series (Math 112) as soon as possible, because if you don't start
					those right away, you will be behind in your chemical engineering program. If,
					however, you have AP credit for chemistry and/or math courses, you won't need to
					take them. Your advisor will help you evaluate your AP scores and choose the 
					appropriate follow-on courses. He also will help you use such AP credit wisely
					to reduce your credit-hour load throughout your program.
					</li>
					<li> Make sure that you are enrolled in or are planning to enroll in ChE 191 
					if required. New freshmen are required to take this course, while transfer students
					from another engineering program are not. The course is one-half credit and meets 
					Thursdays, 11:00-11:50am, 256 CB. On the second Thursday of the fall and winter semesters, 
					the class will include a free ice-cream social, so you don't want to miss it!
					</li>
					<li> Make sure that you are enrolled in or are planning to enroll in ChE 170.
					This class is an Introduction to Chemical Engineering and will 
					give you some hands-on experience with a variety of chemical engineering 
					tools woven together into an overview of the field. The goal is to help you
					decide if chemical engineering is the right major for you, so we recommend 
					that you take it early in your academic career (i.e., your first or second semester at BYU).
					</li>
				</ol>
</div>
</div>


 <?php
	 include 'footer.php'
	?>

	<!-- NORMAL SCRIPTS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	 <script src="template/js/plugins/sidebarsize.js"></script>



</body>
</html>