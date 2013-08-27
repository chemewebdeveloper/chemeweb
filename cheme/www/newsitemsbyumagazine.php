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
	</div>
		<div id="main-content" style="width:620px;">
			<img src="images/news/byumagazine.jpg" />
			<h2>Ch En Student Highlighted in BYU Magazine</h2>
			<h3>August 27th, 2013</h3>
			<p> Anna Katz Hawes was recently one of five BYU students that were mentioned in BYU Magazine. The article spoke of the difference students are able to make because of donations to the University. Under the title "Cure Disease," the article states:</p>

			<p>
				"In the quest to more precisely deliver vaccines and drugs where they need to go in the body, chemical engineering student Anna Katz Hawes (BS ’13), participated in a BYU research team to study better ways to engineer virus-like particles. Their published work was funded by NASA, the National Science Foundation, and a BYU mentoring grant." (see <a href="http://magazine.byu.edu">magazine.byu.edu</a> for the full article). 
			</p>
			<p>
				We congratulate our students for the research they perform.	
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