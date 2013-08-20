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
	$pageTitle = "Course Number Changes | Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
			
            table, th, td, tr {border: 2px solid #444; border-style:inset;}
            th { background-color:#036; color:white; }
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
			| <a href="newmajorreqs.php">Undergraduate</a> | Course Number Changes</div>
		<div id="title">
		<h1>Course Number Changes</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;"><br />
			<p>
		In recent years, several departments have changed the numbers of courses.  Below is a table outlining the changes.
		</p><br />
	<div  style="margin-left:30px">
		<table>
			<tr>
				<th>Previous Course Number</th><th>New Course Number</th><th>Course Title</th><th>Year Changed*</th	
			</tr>
			<tr>
				<td>Stats 332</td><td>Stats 201</td><td>Quality Improvement for Industry</td><td>2010</td>
			</tr>
			<tr>
				<td>Math 214</td><td>Math 314</td><td>Calculus of Several Variables</td><td>2009</td>
			</tr>
			<tr>
				<td>Math 343</td><td>Math 313</td><td>Elementary Linear Algebra</td><td>2009</td>
			</tr>
			<tr>
				<td>Chem 461</td><td>Chem 467</td><td>Physical Chemistry for Engineers</td><td>2010</td>
			</tr>
			<tr>
				<td>Ch En 478</td><td>Ch En 386</td><td>Chemical Reaction Engineering</td><td>2010</td>
			</tr>
			<tr>
				<td>Engl 150</td><td>Wrtg 150</td><td>Writing and Rhetoric</td><td>2010</td>
			</tr>
		</table>
	</div>
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