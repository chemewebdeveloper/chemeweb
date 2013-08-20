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
	$pageTitle= " Technical Electives | Chemical Engineering";
	
	$pageDescription = "";
	
	$pageKeywords = "program, Chemical Engineering, students, Prospective Students, alumni";
	
	$embeddedCSS="<style type='text/css'>
    
            table, th, td, tr {border: 2px solid #036; border-style:inset;}
            th { background-color:#036; color:white; }
            .blue{background-color:#e0edf9;}
            .orange{background-color:#036;}
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
	<link rel="stylesheet" href="template/css/plugins/jquery/jquery-ui-1.8.21.custom.css"> <!-- this is for the accordion!!! -->

	 <?php echo $embeddedCSS;
	 include 'header.php' ?>
	 
	 <!-- Insert JavaScript Plugins Here -->
	<script src="template/js/libs/jquery-1.7.2.js"></script>
	<script src="template/js/plugins/jquery/jquery.ui.core.js"></script>
	<script src="template/js/plugins/jquery/jquery.ui.widget.js"></script>
	<script src="jquery.ui.accordion.js"></script>
	<script>
	$(function() {
		$( "#accordion" ).accordion({
			collapsible:true
		});
	});
	</script>
</head>
<body>
<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			| <a href="newmajorreqs.php">Undergraduate</a> | Technical Electives </div>
		<div id="title">
		<h1>Technical Electives</h1>
		</div>
		
		<hr />
		
	<div class="sidebar">
	<style type='text/css'>
            .sidebar{height:900px}
			
        </style>
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		<h2>General Requirements</h2>
		<p>Within the requirements for a BS in chemical engineering are 12 elective 
		credit hours.  These hours are designed to allow students to personalize
	 	their education towards future goals.</p>
	 	<p>For all but the 2007-2008 catalog year, the requirements are:</p>
	 		<ol>
	 			<li>Obtain departmental approval of proposed technical electives</li>
	 			<li>Complete 2 hours of Chemistry Laboratory</li>
	 			<li>Complete 6 hrs. of advanced (>300 level) engineering coursework.</li>
	 			<li>Complete 4 hrs. of advanced (> 300 level) course work from an
	 			engineering, math, science, or business (EMSB) department.</li>
	 			<li>Beginning in Fall 2009, at least one hour of the technical elective 
	 			must be from a course involving a significant learning experience
	 			 in creativity and/or innovation.</li>
	 		</ol>
	 	<p>For the 2007-2008 catalog year, there are no EMSB electives and 
	 	the engineering electives are increased to 10 hours</p>
	 	<p>For more information on the requirements from different catalog years
	 	 click <a href="majorrequirements.php">here</a>.</p>
	 	<br />
<div class="demo">

	 

<div id="accordion">
	<h3><a href="#">Energy/EnvironmentEmphasis</a></h3>
		<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 353 Organic Chemistry Laboratory</td><td>2</td><td>F,W,Sp,Su</td><td>
			Chem 352(concurrent)</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 412 Intro to Nuclear Engineering</td><td>3</td><td>F alt. yrs</td><td>
			Math 303 or 334, Chem 106 or 112</td>
		</tr>
		<tr>
			<td>ChEn 433 Energy Engineering*</td><td>3</td><td>F alt. yrs</td><td>
			ChEn 373, 376</td>
		</tr>
		<tr>
			<td>CEEN 551 Water Treatment Facilities	</td><td>3</td><td>F</td><td>
			CEEn 351or ChEn 311</td>
		</tr>
		<tr>
			<td>MeEn 541 Computational Fluid Dynamics</td><td>3</td><td>F</td><td>
			ME 340 or ChEn 376</td>
		</tr>
		<tr>
			<td>Geol 330 Geology for Engineers</td><td>3</td><td>F,W,Sp</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 400 Creativity</td><td>1</td><td>F</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 498R Undergraduate Research</td><td>1-3</td><td>F,W,Sp,Su</td><td>
			None</td>
			
		</tr>
		<tr>
			<td>*Highly Recommended</td><td>--</td><td>--</td><td>
			--</td>
			
		</tr>
		</table>
	</div>
	<h3><a href="#">Nuclear Engineering Emphasis</a></h3>
	<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 464 Physical Chemistry Laboratory 1</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		<tr>
			<td>Chem 465 Physical Chemistry Laboratory 2</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 412 Intro to Nuclear Engineering</td><td>3</td><td>F alt. yrs</td><td>
			Math 303 or 334, Chem 106 or 112</td>
		</tr>
		<tr>
			<td>ChEn 433 Energy Engineering*</td><td>3</td><td>F alt. yrs</td><td>
			ChEn 373, 376</td>
		</tr>
		<tr>
			<td>CEEN 540 Geoenvironmental Eng.</td><td>1-3</td><td>F alt. yrs</td><td>
			CEEN 341, 351 (can be negotiated)</td>
		</tr>
		<tr>
			<td>CEEN 594R Health Physics</td><td>2</td><td>F alt. yrs</td><td>
			None</td>
		</tr>
		<tr>
			<td>Study Abroad</td><td>1</td><td>TBD</td><td>
			None</td>
		</tr>
		<tr>
			<td>*Highly Recommended</td><td>--</td><td>--</td><td>
			--</td>
			
		</tr>
		</table>
	</div>
	<h3><a href="#">Kinetics/Catalysis Emphasis</a></h3>
	<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 464 Physical Chemistry Laboratory 1</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		<tr>
			<td>Chem 465 Physical Chemistry Laboratory 2</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 535 Kinetics and Catalysis*</td><td>3</td><td>F</td><td>
			Math 303 or 334, Chem 106 or 112</td>
		</tr>
		<tr>
			<td>ChEn 528 Industrial Catalytic Processes*</td><td>2</td><td>alt. yrs on demand</td><td>
			ChEn 386</td>
		</tr>
		<tr>
			<td>ChEn 513 Molecular Modelling</td><td>3</td><td>W</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 498R Undergraduate Research</td><td>1-3</td><td>F,W,Sp,Su</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 400 Creative Skills in Chem. Engineer.</td><td>1</td><td>F</td><td>
			None</td>
		</tr>
		<tr>
			<td>Chem 462 Physical Chemistry</td><td>3</td><td>F</td><td>
			None</td>
		</tr>
		<tr>
			<td>Chem 463 Physical Chemistry</td><td>3</td><td>W</td><td>
			None</td>
		</tr>
		<tr>
			<td>Chem 514 Inorganic Chemistry‡</td><td>3</td><td>F</td><td>
			Chem 463</td>
		</tr>
		<tr>
			<td>Chem 563 Reaction Kinetics‡</td><td>3</td><td>W. alt. yrs.</td><td>
			Chem 462, 463</td>
		</tr>
		<tr>
			<td>Chem 521 Instrumental Analysis‡</td><td>2</td><td>F</td><td>
			Chem 463</td>
		</tr>
		<tr>
			<td>Chem 522 Insturmental Analysis Lab‡</td><td>3</td><td>W</td><td>
			Chem 521</td>
		</tr>
		<tr>
			<td>‡ The 2-course P-chem sequence is prerequisite for 
			these courses.</td><td>--</td><td>--</td><td>
			--</td>
		</tr>
		<tr>
			<td>*Highly Recommended</td><td>--</td><td>--</td><td>
			--</td>
			
		</tr>
		</table>
		
	</div>
	<h3><a href="#">Thermodynamics/Thermophysical Properties Emphasis</a></h3>
	<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 464 Physical Chemistry Laboratory 1</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		<tr>
			<td>Chem 465 Physical Chemistry Laboratory 2</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 513 Molecular Modelling</td><td>3</td><td>W</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 498R Undergraduate Research</td><td>1-3</td><td>F,W,Sp,Su</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 531 Thermo of Multicomp.Systems*</td><td>3</td><td>F</td><td>
			ChEn 373</td>
		</tr>
		<tr>
			<td>ChEn 631 Applied Statistical Mechanics</td><td>3</td><td>F alt. yrs.</td><td>
			Chem 467 or 463; ChEn 531 or equiv.</td>
		</tr>
		<tr>
			<td>Chem 567 Statistical Mechanics</td><td>3</td><td>W alt. yrs.</td><td>
		Chem 463 or 467</td>
		</tr>
		<tr>
			<td>*Highly Recommended</td><td>--</td><td>--</td><td>
			--</td>
			
		</tr>
		</table>
	</div>
	<h3><a href="#">Bioengineering Emphasis</a></h3>
	<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 353 Organic Chemistry Laboratory</td><td>1-2</td><td>F,W,Sp,Su</td><td>
			Chem 352(concurrent)</td>
		</tr>
		<tr>
			<td>Chem 464 Physical Chemistry Laboratory 1</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		<tr>
			<td>Chem 465 Physical Chemistry Laboratory 2</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 400 Creative Skills in Chem. Engineer.</td><td>1</td><td>F</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 498R Undergraduate Research</td><td>1-3</td><td>F,W,Sp,Su</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 518 Biomedical Engineering*</td><td>3</td><td>W</td><td>
			ChEn 374, 376</td>
		</tr>
		<tr>
			<td>ChEn 519 Biochemical Engineering*</td><td>3</td><td>W alt. yrs.</td><td>
			ChEn 386</td>
		</tr>
		<tr>
			<td>ChEn 578 Polymer Science</td><td>3</td><td>W even yrs, Sp odd yrs</td><td>
			ChEn 378</td>
		</tr>
		<tr>
			<td>ChEn 533 Transport Phenomena</td><td>3</td><td>F</td><td>
			ChEn 476</td>
		</tr>
		<tr>
			<td>PDBio 360 Cell Biology</td><td>2</td><td>F,W,Su</td><td>
			MMBio 240</td>
		</tr>
		<tr>
			<td>PDBio 362 Advanced Physiology</td><td>3</td><td>F,W,Sp</td><td>
			Biol 24; Phys 106 or 220</td>
		</tr>
		<tr>
			<td>PDBio 363 Advanced Physiology Lab</td><td>3</td><td>F,W,Sp</td><td>
			PDBio 362(concurrent)</td>
		</tr>
		<tr>
			<td>Chem 481 Biochemistry 1</td><td>3</td><td>F,W,Sp</td><td>
			Chem 352</td>
		</tr>
		<tr>
			<td>Chem 482 Biochemistry 2</td><td>3</td><td>W</td><td>
			Chem 481</td>
		</tr>
		<tr>
			<td>MMBio 430 Advanced Cell Biology</td><td>3</td><td>F</td><td>
			PDBio 360</td>
		</tr>
		<tr>
			<td>MMBio 461 Advanced Bacterial Physiology</td><td>3</td><td>W</td><td>
			Chem 481, MMBio 151</td>
		</tr>
		<tr>
			<td>NDFS 355 Food Process Engineering</td><td>4</td><td>W</td><td>
			Chem 105, Math113</td>
		</tr>
		<tr>
			<td>*Highly Recommended</td><td>--</td><td>--</td><td>
			--</td>
			
		</tr>
		</table>
	</div>
	<h3><a href="#">Modelling/Numerical Methods Emphasis</a></h3>
	<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 353 Organic Chemistry Laboratory</td><td>1-2</td><td>F,W,Sp,Su</td><td>
			Chem 352(concurrent)</td>
		</tr>
		<tr>
			<td>Chem 464 Physical Chemistry Laboratory 1</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		<tr>
			<td>Chem 465 Physical Chemistry Laboratory 2</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 513 Molecular Modelling</td><td>3</td><td>W</td><td>
			ChEn 373</td>
		</tr>
		<tr>
			<td>ChEn 498R Undergraduate Research</td><td>1-3</td><td>F,W,Sp,Su</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 541 Computer Design Methods*</td><td>3</td><td>W alt. yrs.</td><td>
			Math 303 or 334, ChEn 376</td>
		</tr>
		<tr>
			<td>MeEn 541 Computational Fluid Dynamics</td><td>3</td><td>F</td><td>
			ME 340 or ChEn 376</td>
		</tr>
		<tr>
			<td>CeEn/MeEn575 Optimization Techniques in Engineering</td><td>3</td><td>W</td><td>
			Math 302 or 313, 314; programming ability</td>
		</tr>
		<tr>
			<td>Math 410 Introduction to Numerical Methods</td><td>3</td><td>F</td><td>
			Math 302 or 314</td>
		</tr>
		<tr>
			<td>Math 411 Numerical Methods</td><td>3</td><td>W</td><td>
			Math 303 or 334; 410</td>
		</tr>
		<tr>
			<td>Math 447 Introduction to Partial Differential Equations</td><td>3</td><td>
			W,Su</td><td>Math 303 or 334 </td>
		</tr>
		<tr>
			<td>*Highly Recommended</td><td>--</td><td>--</td><td>
			--</td>
			
		</tr>
		</table>
	</div>
	<h3><a href="#">Graduate School Emphasis</a></h3>
	<div>
		<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<h3 style="text-align:center">Graduate School Emphasis</h3>
		<tr>
			<th colspan="4" class="orange">Chemistry Lab</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>Chem 353 Organic Chemistry Laboratory</td><td>1-2</td><td>F,W,Sp,Su</td><td>
			Chem 352(concurrent)</td>
		</tr>
		<tr>
			<td>Chem 464 Physical Chemistry Laboratory 1</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		<tr>
			<td>Chem 465 Physical Chemistry Laboratory 2</td><td>1</td><td>F,W</td><td>
			Chem 462 or 467</td>
		</tr>
		</table><br />
<table style="margin-right:auto;margin-left:auto; width:100%"><br />
		<tr>
			<th colspan="4" class="orange">Advanced Engineering & EMSB</th>
		</tr>
		<tr>
			<th>Course</th><th>Hours</th><th>Offered</th><th>Prerequisites</th>
		</tr>
		<tr>
			<td>ChEn 513 Molecular Modelling</td><td>3</td><td>W</td><td>
			ChEn 373</td>
		</tr>
		<tr>
			<td>ChEn 498R Undergraduate Research</td><td>1-3</td><td>F,W,Sp,Su</td><td>
			None</td>
		</tr>
		<tr>
			<td>ChEn 541 Computer Design Methods*</td><td>3</td><td>W alt. yrs.</td><td>
			Math 303 or 334, ChEn 376</td>
		</tr>
		<tr>
			<td>ChEn 531 Thermo of Multicomp.Systems</td><td>3</td><td>F</td><td>
			ChEn 373</td>
		</tr>
		<tr>
			<td>ChEn 533 Transport Phenomena</td><td>3</td><td>F</td><td>
			ChEn 476</td>
		</tr>
		<tr>
			<td>ChEn 535 Kinetics & Catalysis</td><td>3</td><td>F</td><td>
			ChEn 386</td>
		</tr>
		<tr>
			<td>ChEn 578 Polymer Science</td><td>3</td><td>W even yrs., Sp odd yrs.</td><td>
			ChEn 378</td>
		</tr>
		<tr>
			<td>Stat 511 Statistical Methods for Research 1</td><td>3</td><td>
			F,W</td><td>Stat 121 or 332</td>
		</tr>
		<tr>
			<td>Stat 512 Statistical Methods for Research 2</td><td>3</td><td>
		W</td><td>Stat 511</td>
		</tr>
		<tr>
			<td>Chem 565 Intro to Quantum Chemistry</td><td>3</td><td>
		F</td><td>Chem 462, 463; or 467</td>
		</tr>
		<tr>
			<td>Chem 567 Statistical Mechanics</td><td>3</td><td>
		W. alt. yrs.</td><td>Chem 362, 463; or 467</td>
		</tr>
		<tr>
			<td>Math 447 Introduction to Partial Differential Equations</td><td>3</td><td>
		W,Su</td><td>Math 303 or 334</td>
		</tr>
		</table>
		
	</div>
</div>

</div><!-- End demo -->
<h2>Example Electives</h2>
		<p>Several example electives are shown above.  Students are not restricted
		 to these, and may design their own electives as long as it meets the general
		  requirements listed above and as found in the catalog year of interest.  
		  The electives must be submitted for department approval as part of the 
		  professional program application.</p>
		<p>Notes:</p>
			<ul>
				<li>In the tabs below, many classes are given for each category. 
				 Students are not expected to take each course listed but design 
				 their electives in accordance with the requirements given above.</li>
				<li>The term/semester in which the course is offered may change with 
				future catalogs.  Please consult the current timetable for the official 
				scheduling of courses.</li>
				<li>Although prerequisites are listed, many instructors outside 
				of engineering will allow students to take courses without the
				 listed prerequisites.   Please contact the instructor if you are 
				 interested in receiving consent to take a course without the listed 
				 prerequisites.</li>
				 </ul>
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