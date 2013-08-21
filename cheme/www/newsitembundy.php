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
			<img src="images/news/bundy.jpg" />
			<h2>Dr. Bundy Receives Prestigious Awards</h2>
			<h3>August 21st, 2013</h3>
			<p>Professor Brad Bundy received the DARPA Young Faculty and NSF CAREER award this summer. Dr. Bundy will use the awards to research methods to introduce new amino acids into proteins.
			</p>

<p>“Proteins are predominantly made from just 20 amino acids that serve as building blocks,” Bundy said. “If trillions of chemical reactions occur from the combination of just 20 amino acids, what would happen if we could economically and reliably include new amino acids? We want to find out.”

Bundy, who came to BYU’s Chemical Engineering Department four years ago, also recently received a grant from the National Pork Board to develop vaccines against agro-bioterrorism threats. The three awards give Bundy nearly $1 million in research funding." Congratulations Dr. Bundy!
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