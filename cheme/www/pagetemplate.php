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
 
 //Steps for making a web Page
 
// 1)Change the Page name page
 //2)Add the content
 
 
    //This section is for page name, page title, specific css to this page, and keywords for google

	$pageName = "Template";

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
			| <a href="History.php">Department</a> | <?php echo $pageName;?></div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<!-- ADD SIDEBAR IF NECESSARY. THEY ARE NAMED LIKE THEIR TAB, EXAMPLE: departmentsidebar.php, undergraduatesidebar.php-->
		<?php include 'departmentsidebar.php'
		?>
	</div><br />
		<div id="main-content" style="width:620px;">
			
				<p>Awesome Content.</p>

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