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

	$pageName = "Math Help";

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
	<p>The internet contains many resources to review the principles of mathematics that are important in
	engineering.&nbsp; The links represent only a small portion of those which are available.</p> <p>&nbsp;</p>
	<h2>Mathematics Reviews</h2> <hr /> <p><a href="http://www.sosmath.com/algebra/algebra.html">Algebra</a>
	<a href="http://www.sosmath.com/trig/trig.html"><br /> </a></p> <p><a href="http://www.sosmath.com/trig/trig.html">
	Trigonometry</a></p> <p><a href="http://www.sosmath.com/calculus/calculus.html">Calculus</a><a href="http://www.sosmath.com/complex/complex.html"><br />
	</a></p> <p><a href="http://www.sosmath.com/complex/complex.html">Complex Numbers</a></p> <p><a href="http://www.sosmath.com/matrix/matrix.html">Linear Algebra</a> 
	(matrix math)</p> <p><a href="http://www.sosmath.com/diffeq/diffeq.html">Differential Equations</a></p> <p>&nbsp;</p> 
	<h2>Mathematical Tables</h2> <hr /> <p><a href="http://www.sosmath.com/trig/Trig5/trig5/trig5.html">Trigonometric Identities</a>
	</p> <p><a href="http://www.sosmath.com/tables/derivative/derivative.html">Derivatives</a></p> <p><a href="http://www.sosmath.com/tables/tables.html">
	Integrals</a></p> <p><a href="http://www.sosmath.com/tables/laplace/laplace.html">Laplace Transforms</a></p> <p><a href="http://www.sosmath.com/tables/diffeq/diffeq.html">Differential Equations</a></p> <p>&nbsp;</p> <h2>Mathematical Computer Tools</h2> <hr /> <p>When problem solving, chemical enginee
	rs often solve complex mathematical problems.&nbsp; Several computer tools, including <strong>Mathcad </strong>and <strong>Excel</strong>, can 
	be used to aid these calculations.&nbsp; Below are links to tutorials and tips on using these tools.</p> <p><a href="http://www.et.byu.edu/groups/chen263/">ChEn 263
	Computer Tools Wiki</a></p> <p><a href="mathcadtutorial.php">Mathcad Tutorials</a></p> 
			


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