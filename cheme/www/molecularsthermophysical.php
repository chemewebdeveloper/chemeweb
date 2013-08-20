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

	$pageName = "Molecular Simulations & Thermophysical Properties";

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
		
			<h2>The Core</h2><hr />
			<p>Controlling the behavior of physical systems is at the core of chemical
			 engineering. The behavior observed on the macroscopic scale is the aggregate 
			 of countless interactions that occur at the molecular level.  An understanding
			  of what occurs on these small length scales enables prediction, manipulation, 
			  and control of the behavior of larger systems. Molecular modeling and simulation
			   consist of a suite of computational techniques that can be used to create
			    individual atoms and molecules in a virtual environment and "watch" what 
			    happens. With the resources available at the Fulton Supercomputing Laboratory 
			    at BYU, molecular simulation and modeling tools are used to investigate many
			     systems of interest including the phase behavior of fluids, the dynamics of
			      ion movement in fuel cells, the interactions of proteins on surfaces, and 
			      the prediction of thermophysical properties of industrially-relevant compounds.
			       Additionally, significant effort is devoted to development of novel tools,
			        algorithms, and theories.  Such are required as the problems being 
			        investigated are complex and unique.  Please visit the links below 
			        for more details.</p>
			   <br />
			  
				<h2>Multistate Folding of Proteins</h2><hr /><br />

			
						<img src="images/Department/foldingproteins.png">
				


					<p>Proteins are involved in almost all aspects of life.
					  A protein begins as a long linear chain of amino acids 
					  but becomes a compact, three-dimensional structure in a 
					  process called "folding." Understanding the folding process
					   is one of the most important topics in modern biochemistry. 
					    Protein structure can be destroyed (a process called "denaturation" 
					    or "unfolding") using external influences such as pH, temperature,
					     and pressure.  One important question in regards to folding/unfolding 
					     is whether different external influences change the folding
					      mechanisms.</p>


			
			<br />
			 
		
				<h2>Two-phase Molecular Dynamics Simulation of the Critical Point</h2><hr /><br />

		
						<img src="images/Department/twophase.gif">
					


					<p>Molecular dynamics simulations are being performed
					 on long-chain alcohols using intermolecular potentials
					  that have been developed within our research group from 
					  ab initio calculations.  The simulations are performed at
					   conditions below the critical point where two phases coexist.  
					   The simulation is performed at several different temperatures 
					   to identify the equilibrium densities of the coexisting liquid
					    and vapor at several temperatures close to the critical temperature. </p>


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