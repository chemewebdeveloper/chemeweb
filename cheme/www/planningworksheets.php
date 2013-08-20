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

	$pageName = "Planning Worksheets";

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
			| <a href="undergrad.php">Undergraduate</a> | <?php echo $pageName;?></div>
		<div id="title">
		<h1><?php echo $pageName;?></h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			<p>The worksheets found below have been prepared to assist in 
			planning coursework. These should be filled out as completely as 
			possible before you meet with your advisor.</p>
			<p>Because requirments have changed over the years, several versions 
			of the worksheet are available.  Students may graduate using the 
			requirements found in the official university catalog for the semester
			in which they declared the chemical engineering major or any catalog
			after. Remember that "Catalog Years"  begin in the Fall Semester and
			end in the Summer Term.  For example, if you entered the university
			for the first time in the Fall of 2009, and declared your major at 
			that time, you would use the 2009-2010 catalog requirements or the 
			requirements from any year after 2009-2010</p>
			<p>Right Click and Save the link below that corresponds to the semester
			when chemical engineering was declared as a major. You can find the
			entry date on MyMap.  Navigate to MyMap/Plan MyMap.  Select "Chemical 
			Engineering (BS)(Major)" instead of "University Core" in the combo box
			on the left. The year will be displayed right above the combo box after
			the page refreshes.</p>
			<br />
			<a href="PlanningWorksheet20122013.xlsx">Fall 2012- Summer 2013</a><br />
			<a href="Planning20112012.xlsx">Fall 2011- Summer 2012</a><br />
			<a href="Planning2010-2011.xlsx">Fall 2010 - Summer 2011</a><br />
			<a href="Planning2009-2010.xlsx">Fall 2009 - Summer 2010</a><br />
			<a href="Planning2008-2009.xlsx">Fall 2008 - Summer 2009</a><br />
			<a href="Planning2007-2008.xlsx">Fall 2007 - Summer 2008</a><br />
			<a href="Planning2004-2007.xlsx">Fall 2004 - Summer 2007</a><br />
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