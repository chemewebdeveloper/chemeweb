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
	$pageTitle = "About | Chemical Engineering";

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
			| <a href="grad.php">Graduate</a> | About</div>
		<div id="title">
		<h1>About</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'gradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		 <p> The graduate program in the Department of Chemical Engineering at BYU began in 1962.&nbsp; We offer programs of study leading to  
		 master of science (MS) and doctor of philosophy (PhD) degrees. The MS and PhD degrees 
		 each require coursework as well as an independent research project leading to a written thesis 
		 or dissertation.&nbsp; A student with a bachelor of science (BS) degree may apply to either program, 
		 that is, a PhD degree may be earned without first obtaining an MS degree.&nbsp; For a student with a BS degree the typical 
		 time required to complete a graduate degree is 2 years for an MS and 4.5 years for a PhD.</p> <p>The department seeks to develop 
		 graduate students who have broad knowledge of fundamental principles (math, science, and engineering) plus cutting-edge expertise 
		 in a topical area.&nbsp; Students learn to conduct independent and creative research leading to solutions of present-day engineering
		 problems. Graduate           students are expected to assume primary responsibility for their own progress and to develop
		 habits of inquiry that will ensure continuing intellectual development throughout their careers.&nbsp; Graduates of the department
		 contribute to society and find rewarding employment in a range of industries and fields--as researchers, consultants, managers, and 
		 teachers.</p>  
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