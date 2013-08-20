<?php require_once("../databaseaccess.php");?>
<?php require_once("functions.php");?>
<?php 
//1. Create a database connection
	$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if(!$connection){
		die("Database connection failed: " . mysql_error());
	}
	
//2. Select a database to use
	$db_select= mysql_select_db(DB_NAME,$connection);//it actually isn't necessary to list connection here
		if(!$db_select){
			die("Database connection failed: " . mysql_error());
		}
?>
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

	$pageTitle = "Course Objectives | Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
			
            table, th, td, tr {border: 2px solid #444; border-style:inset;}
            th { background-color:#036; color:white; }
			 .courseheader{background-color:#700000;}
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

	<?php include 'header.php';

	// Embedded styles
	 echo $embeddedCSS; ?>
	 
	 

	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			| <a href="newmajorreqs.php">Undergraduate</a> | Course Objectives</div>
		<div id="title">
		<h1>Course Objectives</h1>
		</div>
		<hr />
<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
<div id="main-content" style="width:620px;">
		<br />
		
		<p>The Chemical Engineering program at Brigham Young University is designed to 
		produce students who possess specific characteristics upon graduation. These 
		characteristics are identified as 12 Program Outcomes and are subdivided into 
		specific skills termed competencies. The content of each course in chemical 
		engineering is based upon a subset of these competencies. A search below on any 
	 	course will return all of the competencies that are developed in that course.
		The competencies are numbered to reflect their relationship to the Program Outcomes.
		Thus, competency 3.1.2 refers to competency number 1.2 of Program Outcome #3. Each 
		competency is also assigned a level of assessment and usage. The definition of each
		of these appears below.</p>
		
	<h3>Level of Assessment</h3>
		<ol>
			<li>Student is exposed to material but not necessarily assessed</li>
			<li> Competency is assessed in course</li>
			<li> Competency is assessed in course and again before graduation</li>
		</ol>
	<h3>Usage</h3>
		<ul style="list-style-type:none">
			<li>(Introductory) The competency is covered at an introductory level</li>
			<li>(Major) Major exposure to competency occurs in the course</li>
			<li> (Review) Competency taught previously is reviewed.</li>
			<li>(Programmatic) The competency occurs widely throughout the curriculum and is
			not specific to a particular course.</li>
		</ul>
		<br /><br />
				<strong>Select a Course<strong><br />
				<form onclick="template/js/plugins/jquery/competencies.js" method="post">
				<select name="class">
					<option value="none">Please Select</option>
					<option value="Advanced Chemistry">Advanced Chemistry</option>
					<option value="Advanced Mathematics">Advanced Mathematics</option>
					<option value="Advising">Advising</option>
					<option value="Basic Sciences and Mathematics">Basic Sciences and Mathematics</option>
					<option value="ChEn 170">ChEn 170</option>
					<option value="ChEn 191">ChEn 191</option>
					<option value="ChEn 263">ChEn 263</option>
					<option value="ChEn 273">ChEn 273</option>
					<option value="ChEn 311">ChEn 311</option>
					<option value="ChEn 373">ChEn 373</option>
					<option value="ChEn 374">ChEn 374</option>
					<option value="ChEn 376">ChEn 376</option>
					<option value="ChEn 378">ChEn 378</option>
					<option value="ChEn 386">ChEn 386</option>
					<option value="ChEn 391">ChEn 391</option>
					<option value="ChEn 436">ChEn 436</option>
					<option value="ChEn 451">ChEn 451</option>
					<option value="ChEn 475">ChEn 475</option>
					<option value="ChEn 476">ChEn 476</option>
					<option value="ChEn 477">ChEn 477</option>
					<option value="Dean's Lecture">Dean's Lecture</option>
					<option value="Ecclesiastical Endorsement">Ecclesiastical Endorsement</option>
					<option value="Engl 316">Engl 316</option>
					<option value="External Service Activity">External Service Activity</option>
					<option value="GE/Religion">GE/Religion</option>
					<option value="General">General</option>
					<option value="Level 3 exam">Level 3 Exam</option>
					<option value="Stat 361">Stat 361</option>
					<option value="Student Chapter">Student Chapters</option>
				</select>
				<input type="submit" value="Submit" />
				</form>
		<br />
		
<div id="competencies" style="display:none"> <!-- this is the class that will be displayed by jQuery in the competencies.js file. -->
		
		<?php $class_name = $_POST['class'];//Here I am setting a variable equal to the course the course that was chosen. ?>
		
		<?php display_competencies($class_name,$connection);    // this function plugs the database connection and $class_name variable in an SQL query,  performs the query, and prints out the query in a table. ?> 
		
		
</div>
</div>
</div>


 <?php
	 require_once 'footer.php'
 ?>

	<!-- NORMAL SCRIPTS -->
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	<script src="template/js/plugins/sidebarsize.js"></script>
	 <script src="template/js/plugins/jquery/competencies.js"></script>


</body>
</html>
<?php 
	//5. Close connection
		mysql_close($connection);
?>