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

	$pageName = "Upcoming Events";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS="<style type='text/css'>
			
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

	<?php include 'header.php';

	// Embedded styles
	 echo $embeddedCSS; ?>
	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
				<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
		</div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		
		
	<table class="customtable" cellspacing="1" cellpadding="2">
	<br />
	<br />
	<tbody class="customtable" >
	<tr>
		<th colspan="3">Tuesday, September 18th Events</th>
	</tr>
	<tr>
		<th>Time</th><th>Activity</th><th>Location</th>
	</tr>
	<tr>
		<td>8:00-8:50 am</td><td>Breakfast & Mingle</td><td>WSC 3222</td>
	</tr>
	<tr>
		<td>8:50-9:00 am</td><td>Break</td><td>--</td>
	</tr>
	<tr>
		<td>9:00-10:30 am</td><td>Interviewing Workshop - Presentations</td><td>WSC 3238, 3250</td>
	</tr>
	<tr>
		<td>10:30-10:35 am</td><td>Break</td><td>--</td>
	</tr>
	<tr>
		<td>10:35-11:15 am</td><td>Interviewing Workshop - Resume</td><td>WSC 3238, 3250</td>
	</tr>
	<tr>
		<td>11:15-11:30 am</td><td>Feedback and Suggestions
			for Improvement from Recruiters</td><td>--</td>
	</tr>
	<tr>
		<td>6:00 pm</td><td>DOW Info. Ses.</td><td>CB 256</td>
	</tr>
	<tr>
		<td>6:00 pm</td><td>Valero Ping Pong</td><td>CB Step-Down</td>
	</tr>

	</tbody>
	</table width="1000" height="127">

	<table class="customtable" cellspacing="1" cellpadding="2">
	<br />
	<br />
	<tbody class="customtable" >
	<tr>
		<th colspan="3">Wednesday, September 19th Events</th>
	</tr>
	<tr>
		<th>Time</th><th>Activity</th><th>Location</th>
	</tr>
	<tr>
		<td>4:00-5:00 pm</td><td>Celanese Info Ses.</td><td>CB
	256</td>
	</tr>
	<tr>
		<td>4:00-6:00 Pm</td><td>Navy Nuclear
	Program</td><td>CB 369</td>
	</tr>
	<tr>
		<td>5:00-6:00 pm</td><td>OC Composites Info
	Ses.</td><td>CB 256</td>
	</tr>
	<tr>
		<td>6:00-8:00 pm</td><td>Rotational
	Dinner</td><td>Hinckley Center</td>
	</tr>
	</tbody>
	</table width="1000" height="127">

	<table class="customtable" cellspacing="1" cellpadding="2">
	<br />
	<br />
	<tbody class="customtable" >
	<tr>
		<th colspan="3">Thursday, September 20th Events</th>
	</tr>
	<tr>
		<th>Time</th><th>Activity</th><th>Location</th>
	</tr>
	<tr>
		<td>9:00-3:00 pm</td><td>Career Fair</td><td>WSC Ballroom</td>
	</tr>
	</tbody>
	</table width="1000" height="127">

	<table class="customtable" cellspacing="1" cellpadding="2">
	<br />
	<br />
	<tbody class="customtable" >
	<tr>
		<th colspan="3">Friday, September 21st Events</th>
	</tr>
	<tr>
		<th>Time</th><th>Activity</th><th>Location</th>
	</tr>
	<tr>
		<td>4:00 pm</td><td>Bowling Tournament</td><td>WSC 1171</td>
	</tr>
	<tr>
		<td>5:00 pm</td><td>Light Refreshments After</td><td>--</td>
	</tr>
	</tbody>
	</table width="1000" height="127">

		<table class="customtable" cellspacing="1" cellpadding="2">
	<br />
	<br />
	<tbody class="customtable" >
	<tr>
		<th colspan="3">Monday, September 24th Events</th>
	</tr>
	<tr>
		<th>Time</th><th>Activity</th><th>Location</th>
	</tr>
	<tr>
		<td>5:00 pm</td><td>PolyOne Info Ses.</td><td>CB 256</td>
	</tr>
	</tbody>
	</table width="1000" height="127">


	
	


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