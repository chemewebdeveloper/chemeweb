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

	$pageName = "Combustion";

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
		
		
				<!-- <p colspan="2">Combustion is the major source of energy in modern society 
							with the majority of electric power production, residential and industrial 
							heating, and transportation arising from combustion processes. Active experimental
							 and computation research is being conducted in areas such as coal combustion and
							  gasification, wildland fires, ash deposition, and turbulence chemistry interactions.
							    This research is conducted as part of the Advanced Combustion Engineering Research 
							    Center <a href="http://www-acerc.byu.edu">(ACERC)</a>.</p> -->
			
			
					<h2>Coal Gasification</h2><hr />

			
							<img src="images/Department/coalgasification.jpg">
						


						<p>Coal gasification is being explored worldwide as a method to 
						produce liquid fuels, chemicals, and electricity. The advantage 
						of gasification is that it provides a pure CO2 stream for sequestration.
						 Our projects are to provide the fundamental kinetic parameters of coal
						  gasification at high temperatures and pressures, along with physical 
						  properties of the corresponding chars. The BYU Pressurized Flat-Flame
						   Burner can reach conditions of 15 atm and 2000 K.</p>

				<br />

					<h2>Direct Numerical Simulation</h2><hr /><br />

			
					
							<img src="images/Department/numericalsimulation.png">
					


						<p>Direct numerical simulation (DNS) is a powerful computational 
						technique providing high-fidelity data of turbulence-chemistry interactions.
						  Turbulence is characterized by a wide range of time and length scales 
						  requiring high grid resolution resulting in high computational cost. 
						   Turbulent flow simulations require subgrid models to account for
						    unresolved turbulent structures and their effect on transport.</p>


			
				<br />

			
					<h2>One Dimensional Turbulence Modeling</h2><hr /><br />

							<img src="images/Department/turbulencemodeling.png">
				
						<p>Full resolution of three-dimensional turbulence fields is very 
						costly from a computational viewpoint. The ODT model fully resolves 
						a flow field along a notional line-of-sight. Turbulent advection is
						 simulated through stochastic eddy events that are implemented through
						  grid rearrangements via triplet maps. These eddy events occur with a 
						  given size, location, and frequency that depends on the evolution of 
						  the velocity field itself, in a way that mimimics that turbulent energy
						   cascade. The figure at turleft shows the temperature field for a buoyant 
						   ethylene fire.</p>
				
				<br />

					<h2>Syngas Deposition in Gas Turbines</h2><hr /><br />

			
							<img src="images/Department/gasturbines.jpg">
					


						<p>Integrated gasification combined cycle (IGCC) systems send 
						the syngas produced in a gasifier through particle filters and then
						 to a gas turbine. Small amounts of flyash particles (less than 10 
						 microns in diameter) make it through the filter and form deposits 
						 on turbine blade surfaces. We are studying how these deposits form 
						 at Mach 0.25 and temperatures up to 1400 C in an atmospheric laboratory 
						 facility. (Dr. Thomas H. Fletcher)</p>


				
				<br />

			
					<h2>Wildland Fires</h2><hr /><br />

			
							<img src="images/Department/wildfire.jpg">
				

						<p>Improved models of wildland fires are desired to know where
						 and when to fight fires, what strutures can be saved, and when
						  to have prescribed burns. We are performing fundamental research
						   on live shrubs (Dr. Fletcher) and on turbulence-chemistry 
						   interactions in buoyant flames (Dr. Lignell).</p>








		
		
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