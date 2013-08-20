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
	$pageTitle = "Graduate Seminar | Chemical Engineering";

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
			| <a href="grad.php">Graduate</a> | Graduate Seminar</div>
		<div id="title">
		<h1>Graduate Seminar</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'gradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		
		<iframe src=" http://che791.groups.et.byu.net/index.php/Main/HomePage" width="720" height="400"></iframe>
		<p>The Graduate Seminar information is now posted on another page. To find out the schedule go to this <a href="http://che791.groups.et.byu.net/index.php/Main/HomePage">site.</a>
		<!--	<h2>Fall 2012</span></h2>
<p>
	
	<p>The seminar will start with refreshments at 3:45 pm. The speaker will begin at 4:00 and end at 4:50.</p>
	<p>
	To receive a grade of Pass you must attend at least 12 of the 14 seminars. You may make up
	seminars by attending seminars from other departments and writing a summary.&nbsp;</p>
	<div align="center">
	<table><br />
		
		<tr>
			<th>Date</th><th>Speaker/Event</th><th>Institution</th>
		</tr>
		<tr>
			<td>5-Jan</td><td>Clint Guymon</td><td>Safety Management Systems</td>
		</tr>
		<tr>
			<td>12-Jan</td><td>Terry Ring</td><td>University of Utah</td>
		</tr>
<!--<tr>
			<td>19-Jan</td><td>F alt. yrs</td><td>
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
		</table>-->
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