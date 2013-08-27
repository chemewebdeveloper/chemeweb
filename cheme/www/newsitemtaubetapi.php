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
			<img src="images/news/taubetapi.jpg" />
			<h2>Eight Ch En Students Win Tau Beta Pi Scholarships</h2>
			<h3>August 27th, 2013</h3>
			<p>Tau Beta Pi, the national engineering honor society, announced on July 16, 2013 the 210 Tau Beta Pi Scholars for the 2013-14 academic year. The student winners each receive either $1000 or $2000 cash awards to assist their engineering studies. The scholarships are awarded competitively from among student members of the society, who are already selected from the top engineering students in the country. This year, 18 of the scholars (9% of the total) are students attending Brigham Young University, meaning BYU students received many more awards than those at any other university.  Of these BYU students, 8 are chemical engineers, 3 are electrical engineers, and 7 are mechanical engineers. 
			</p>

			<p>
				Tau Beta Pi was founded at Lehigh University in 1885 and is the world’s largest engineering honor society. It has collegiate chapters at 241 engineering colleges in the United States and active alumni chapters in 29 cities. It has initiated more than 541,000 members in its 128-year history.
			</p>
			<p>
				The above information was taken from the nationwide press release: <a href="http://www.tbp.org/memb/ScholarArchives/ScholarReleases/2013ScholarshipRelease.pdf">http://www.tbp.org/memb/ScholarArchives/ScholarReleases/2013ScholarshipRelease.pdf</a>
			</p>
			<p>
				The following BYU Chemical Engineering students received scholarships:
			</p>
				<ul>
					<li>Collin S. Black</li>
					<li>Spencer H. Bowen</li>
					<li>Eric G. Fuller</li>
					<li>Erika D. Handly</li>
					<li>Nathaniel R. Marchant</li>
					<li>Benjamin H. Morrell</li>
			  		<li>Edward J. Overy Jr.</li>
					<li>Hector D. Perez Parra</li>
				</ul>

		
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