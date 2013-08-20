
<body>
	<?php
	$pageTitle= "Academic Standards | Chemical Engineering";
	
	$pageDescription = "";
	
	$pageKeywords = "About The Department, Undergraduate Progam, Graduate Program, Prospective Students, alumni";
	
	$embeddedCSS="<style type='text/css'>
    
            table, th, td, tr {border: 2px solid #036; border-style:inset;}
            th { background-color:#036; color:white; }
            .blue{background-color:#e0edf9;}
            .orange{background-color:#C5AF7D;}
        </style>";
		
	
	include 'header.php';
	?>
	
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			› <a href="undergradprogram.php">Undergraduate Program</a> › Academic Standards</div>
		<h1>Academic Standards</h1>
		<hr />
		
		
	<div class="sidebar">
	
		<?php include 'undergradsidebar.php';
		?>
		
		<br />
		
	</div>
	<div id="main-content" style="width:620px;">
		<p>On gaining acceptance to the professional program, students must
		 maintain the following minimum academic standards. Failure to do so 
		 may result in being terminated from the program.</p>
	<ol>
		<li>The student's academic standing with the university must be "Good" or 
		"Previous" to enroll in professional program courses.</li>
		<li>Anyone who accumulates grades below C- in excess of 6 hours in 
		chemical engineeing courses may not take further chemical engineering 
		until he or she has reduced the number of credits of each unacceptable
		 grade to 6 hours or less.</li>
		<li>A student may not graduate with more than 3 hours below C- in chemical 
		engineering courses.</li>
		<p>*Professional program courses are defined as the following—300-level 
		and above required ChEn courses and Technical Elective Courses, plus Stat
		 361 and Chem 461.</p>
	</div>
	</div>
	
	<?php
	include 'footer.php';
	?>

</body>
</html>