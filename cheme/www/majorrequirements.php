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
	$pageTitle= " Major Requirements | Chemical Engineering";
	
	$pageDescription = "";
	
	$pageKeywords = "program, Chemical Engineering, students, Prospective Students, alumni";
	
	$embeddedCSS="";

	?>
	
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> />
	
	<meta name="viewport" content="width=device-width" />
	
	<!-- Insert plugin stylesheets here -->
	<link rel="shortcut icon" href="template/img/favicon.ico" />
	<link rel="stylesheet" href="template/css/style.css" />
	<link rel="stylesheet" href="template/css/plugins/jquery/jquery-ui-1.8.21.custom.css" />

	<!-- Insert Javascript Plugins Here -->
	<script src="template/js/libs/jquery-1.7.2.js"></script>
	<script src="template/js/plugins/jquery/jquery.ui.core.js"></script>
	<script src="template/js/plugins/jquery/jquery.ui.widget.js"></script>
	<script src="template/js/plugins/jquery/jquery.ui.tabs.js"></script>

	<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>
	
 
	 <?php echo $embeddedCSS;
	 include 'header.php' ?>
	
</head>
<body>

<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			| <a href="newmajorreqs.php">Undergraduate</a> | Major Requirements </div>
		<div id="title">
		<h1>Major Requirements</h1>
		</div>
		<hr />
		
	<div class="sidebar">
	<style type='text/css'>
            .sidebar{height:1430px}
			
        </style>
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		<div class="demo">

<div id="tabs" style="width:112%">
	<ul>
		<li><a href="#tabs-1">2012-2013</a></li>
		<li><a href="#tabs-2">2011-2012</a></li>
		<li><a href="#tabs-3">2010-2011</a></li>
		<li><a href="#tabs-4">2009-2010</a></li>
		<li><a href="#tabs-5">2008-2009</a></li>
		<!--<li><a href="#tabs-6">2007-2008</a></li>-->
		
	</ul>
	<div id="tabs-1">
		<?php include 'requirements2013.php'?>
	</div>
	<div id="tabs-2">
		<?php include 'requirements2012.php'?>
	</div>
	<div id="tabs-3">
		<?php include 'requirements2011.php'?>
	</div>
	<div id="tabs-4">
		<?php include 'requirements2010.php'?>
	</div>
	<div id="tabs-5">
		<?php include 'requirements2009.php'?>
	</div>
<!--	<div id="tabs-6">
		<?php include 'requirements2008.php'?>
	</div>-->
	

</div>

</div>
	
</div>	
</div>




<?php
	 include 'footer.php'
	?>
	
	<!-- NORMAL SCRIPTS -->
	
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	
	
	
</body>
</html>
