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
	$pageTitle = "Research | Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
	#researchareas a:hover{color:orange; text-decoration:none;}
	#researchareas a,h3{color:#036;text-decoration:none}
	
	#researchareas{text-align:center}
	
	
	#close a:hover{text-decoration:none}
	

	#title{text-indent:200px} 
	
	th,{border: 1px solid #444;}
	.researchsummary img, tr, td, table{
    border:1px solid black; 
    text-align:center;
     }
	.biochemical img, tr, table{border:1px solid black; text-align:center;}
	  th { background-color:#036; color:white; }
        </style>";


?>
<title><?php echo $pageTitle; ?></title>
	<meta name="description" content=<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> >

	<meta name="viewport" content="width=device-width" />

	<!-- Insert plugin stylesheets here -->
	<link rel="stylesheet" href="template/css/plugins/960.css" />
	

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
			| <a href="alumnisociety.php">Graduate</a> | Research</div>
	<h1>Research</h1>
	<h2>Learn About Our Different Research Areas.</h2>
	<hr />

<div id="researchareas" style="display:none">
<div class="clear" style="height:40px"></div>        
 
 <div class="grid_2" style="margin-left:65px">
    <p><a href="#" id="openbiochemical"><img src="images/Department/biochemical.png" width="266" height="208" alt="Research Area"><br />
      <Strong>Biochemical</Strong></a>
	
  </div>
  <div class="grid_2">
    <p><a href="#" id="openbiomedical"><img src="images/Department/biomedical.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Biomedical</a></Strong>
   
  </div>
   <div class="grid_2" style="margin-right:0px">
    <p><a href="#" id="opencatalysis"><img src="images/Department/catalysis.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Catalysis</a></Strong><br />
    
  </div>
  <div class="grid_2" style="margin-left:65px">
    <p><a href="#" id="opencombustion"><img src="images/Department/combustion.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Combustion</a></Strong><br />
   
  </div>
   <div class="grid_2">
    <p><a href="#" id="openelectrochemicalsystems"><img src="images/Department/electrochemicalsystems.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Electrochemical Systems</a></Strong><br />
    
  </div>
  <div class="grid_2" style="margin-right:0px">
    <p><a href="#" id="openmolecularsimulations"><img src="images/Department/molecularsimulations.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Molecular Simulations</a></Strong><br />
    
  </div>
   <div class="grid_2" style="margin-left:65px">
    <p><a href="#" id="opensustainableenergy"><img src="images/Department/sustainableenergy.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Sustainable Energy</a></Strong><br />
   
  </div>
   <div class="grid_2">
    <p><a href="#" id="openreservoirsimulations"><img src="images/Department/reservoirsimulation.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Reservoir Simulation</a></Strong><br />
    
  </div>
  <div class="grid_2">
    <p><a href="#" id="openthermophysicalproperties"><img src="images/Department/thermophysicalproperties.png" width="266" height="208" alt="Research Area" ><br />
      <Strong>Thermophysical Properties</a></Strong><br />
    
  </div>
  </div>
  
			<!-- Here I will place all of the specific research pages I will call with JavaScript -->
			<a href="#" id="close" style="display:none;">Click Here to Return to Research</a>
			<div class="biochemical" style="display:none">
				<?php include 'biochemical.php' ?>
				
			</div>
			<div class="biomedical" style="display:none">
				<?php include 'biomedical.php' ?>
			</div>
	   	
			<div class="catalysis" style="display:none">
				<?php include 'catalysis.php' ?>
			</div>
			<div class="combustion" style="display:none">
				<?php include 'combustion.php' ?>
			</div>
			<div class="electrochemicalsystems" style="display:none">
				<?php include 'electrochemicalsystems.php' ?>
			</div>
			<div class="molecularsimulations" style="display:none">
				<?php include 'molecularsimulation.php' ?>
			</div>
			<div class="sustainableenergy" style="display:none">
				<?php include 'sustainableenergy.php' ?>
			</div>
			<div class="reservoirsimulations" style="display:none">
				<?php include 'reservoirsimulation.php' ?>
			</div>
			<div class="thermophysicalproperties" style="display:none">
				<?php include 'thermophysicalproperties.php' ?>
			</div>
			<!--    this is the end -->
			
</div>



 <?php
	 include 'footer.php'
	?>

	<!-- NORMAL SCRIPTS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	 <script src="template/js/plugins/jquery/research.js"></script>



</body>
</html>