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

	$pageName = "Electrochemical Systems";

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
	<link rel="stylesheet" href="template/js/plugins/shadowbox/shadowbox.css" />
	<script src="template/js/plugins/shadowbox/shadowbox.js"></script>
	

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
			| <a href="History.php">Department</a> | <?php echo $pageName?></div>
		<div id="title">
		<h1><?php echo $pageName?></h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		
			<br />
			<h2>Application</h2><hr />
			<p>Electrochemical engineering is the application of chemical engineering 
			to problems where thermodynamics, kinetics, and transport of electrons and
			 ions are important. Research at BYU includes work on lithium-ion batteries, 
			 micro- and nano-sized batteries, fuel cells, electrodeposition, nanocircuits,
			  and molecular simulations. Graduates with skills in these areas are in high 
			  demand, as solving electrochemical problems is often critical in bringing needed
			   technologies into practical use.</p>
			   <br />
			

			
				<h2>Vapor Sensors</h2><hr /><br />

		
						<img src="images/Department/vaporsensors.jpg">
			

					<p>Integrated gasification combined cycle (IGCC) systems send 
					the syngas produced in a gasifier through particle filters and then
					 to a gas turbine. Small amounts of flyash particles (less than 10 
					 microns in diameter) make it through the filter and form deposits 
					 on turbine blade surfaces. We are studying how these deposits form 
					 at Mach 0.25 and temperatures up to 1400 C in an atmospheric laboratory 
					 facility. (Dr. Thomas H. Fletcher)</p>


			<br />

			










		
		
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
	<script src="template/js/plugins/shadowbox/shadowboxplayer.js"></script>


</body>
</html>