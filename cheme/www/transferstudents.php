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

	$pageName = "Transfer Students";

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
			| <a href="alumnisociety.php">Alumni & Friends</a> | <?php echo $pageName;?></div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<?php include 'prospectivesidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	
	
		

			<p>We welcome students who wish to transfer to BYU from other universities in order to complete a BS
			degree in Chemical Engineering. A significant number of students do this each year. For you to graduate
			at BYU in the least amount of time, it is important that you take the correct sequence of technical
			courses while at your university of origin. Likewise, earning B or higher grades in these classes indicates
			you have a good chance of succeeding in Chemical Engineering at BYU. Please see the following
			documents that give general policies for transfer credit and describe what technical courses would most
			apply to our program.</p>

			<p><a href="BYUIStudents.pdf">Students coming from BYU-Idaho</a></p>

			<p><a href="TransferStudents.pdf">Students coming from all other universities</a></p>

			<p>For information on transfer of non-major, general education, or core classes, contact the <a href="http://transfer.byu.edu">BYU
			Registrar.</a></p>


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