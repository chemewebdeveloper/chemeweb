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

	$pageName = "Visit Us";

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
			| <a href="alumnisociety.php">Alumni & Friends</a> | <?php echo $pageName;?></div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	
			
   <h3>Address</h3><div style="float: right; width: 20em;"><table border="1" cellpadding="1" summary="Latitude and longitude"><caption>GPS Coordinates</caption><thead><tr><th scope="col">&nbsp;</th><th scope="col" style="text-align: center; ">Latitude</th><th scope="col" style="text-align: center; ">Longitude</th></tr></thead><tbody><tr><td>Decimal</td><td align="right">40.246661°</td><td align="right">-111.647823°</td></tr><tr><td>Degrees</td><td align="right">40° 14' 48" N</td><td align="right">111° 38' 52" W</td></tr></tbody></table></div><p>Clyde Building, Room 350<br />
Brigham Young University<br />
Provo, UT 84602</p><p>Main Office: 801-422-2586</p><p><span class="spamspan"><span class="u">chemesec@byu.edu</span></p><h2 style="clear: both;">Maps</h2><p><img align="right" alt="Map of Salt Lake and 
Provo freeways." hspace="5" src="http://map.byu.edu/images/directions_01.gif" vspace="5" /><img align="right"
 alt="Map of Provo and Orem access roads from the freeway." hspace="5" src="http://map.byu.edu/images/directions_02.gif"
  vspace="5" /></p><h3>Directions (from the Salt Lake City airport)</h3><p><em>Total miles: Approximately 50<br />
Driving Time: Approximately 1 hour</em></p><ol><li>Take the I-80 E ramp towards CITY CENTER/OGDEN/PROVO for about 3 
miles.</li><li>Take the I-215 exit, exit number 117, towards OGDEN/PROVO/CHEYENNE.</li><li>Merge onto I-215 South and 
drive for about 11 miles.</li><li>Take the I-15 S exit towards LAS VEGAS and travel approximately 30 miles.</li><li>Ta
ke the Orem University Parkway exit (Exit #269).</li><li>Turn left (East) on the University Parkway off ramp.</li><li>O
n University Parkway drive East through Orem and down the hill into Provo (about 6 miles total). Do not leave University 
Parkway until passing the LaVell Edwards Football Stadium. Then take the first right turn (450 East, by the Marriott Cent
er).&nbsp;</li><li>Drive past the Marriott Center, and at the next signal, turn left (Campus Dr.).</li><li>Follow Campus Dr
ive as it curves to the right, passing 4 signals</li><li>Turn left at the fifth signal into the Law School parking lot and 
Visitor Parking.</li></ol><p><img alt="Campus map" border="1" height="775" hspace="5" src="images/Department/campusmap.jpeg"
 vspace="5" width="600" /></p> 

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