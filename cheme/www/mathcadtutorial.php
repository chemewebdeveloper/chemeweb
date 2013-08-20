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

	$pageName = "Mathcad Tutorial";

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
	<p>The links below represent active MathCad documents set up in a tutorial format to help 
	you get acquainted with a few of the features of MathCad. To use these documents you mu
	st have access to MathCad from your computer. When you click on the link, your browse
	r should ask you what you want to do with the file (e.g., open it, save it). If you c
	heck the "open it" box, it should launch MathCad and insert the tutorial into it as t
	he active worksheet. You can then type right in the tutorial, make changes, save it to your account, etc.</p> 
	
	<h2><i>Tutorials</i></h2> <ol><li><a href="http://www2.et.byu.edu/%7Erowley/ChEn273/fundamentals.mcd">Fundamentals</a></li><li><a href="http://www2.et.byu.edu/%7Erowley/ChEn273/units.mcd">Units</a></li><li><a href="http://www2.et.byu.edu/%7Erowley/ChEn273/functions.mcd">Functions</a></li><li><a href="http://www2.et.byu.edu/%7Erowley/ChEn273/vectors.mcd">Vectors  and Arrays</a></li><li><a href="http://www2.et.byu.edu/%7Erowley/ChEn273/solving.mcd">Solving  Equations</a></li><li><a href="http://www2.et.byu.edu/%7Erowley/ChEn273/graphing.mcd">Graphing</a></li><li>Programming (Not yet available)</li></ol> 
			


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