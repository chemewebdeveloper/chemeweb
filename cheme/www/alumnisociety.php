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

	$pageName = "ChE Alumni Society";

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
			| <a href="alumnisociety.php">Alumni & Friends</a> | <?php echo $pageName;?></div>
		<div id="title">
		<h1>Chemical Engineering Alumni Society</h1>
		</div>
		<hr />

<div class="sidebar">
		<?php include 'alumnisidebar.php'
		?>
</div>
<div id="main-content" style="width:620px;"><br />
			<p>The BYU Chemical Engineering Alumni Society was formed in the summer of 2003.
			The focus for the society is three fold:</p>
				<ol>
					<li>Provide support to the Department and students at BYU.</li>
						<ul>
							<li>Facilitate, Find, and/or Inform of Career opportunities for students</li>
							<li>Facilitate, Find, and/or Inform of Internship / Co-op programs for students</li>
							<li>Monetary support to the Department / Scholarships for Students</li>
						</ul>
					<li>Facilitate alumni networking.</li>
						<ul>
							<li>Career opportunities</li>
							<li>Career development</li>
							<li>Personal relationships</li>
						</ul>
					<li>Provide Service to the School, Church, and Global Community.</li>
						<ul>
							<li>Providing a venue to communicate solutions for known issues.</li>
							<li>Supporting local AIChE and other organizations.</li>
						</ul>
				</ol><br />
		<h3>Board Members</h3>
			<p>As specified in the Bylaws,  a board of 11 members, elected from the alumni, serves the society. </p>
		<h3>Bylaws</h3>
			<p>The bylaws of the ChE Alumni Society were generously authored by Gary Pocock.</p>
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