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
	$pageTitle = "Clubs | Chemical Engineering";
	
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
	<script src="template/js/libs/jquery-1.7.2.js"></script>
	<?php include 'header.php';
	
	// Embedded styles 
	 echo $embeddedCSS; ?>
	
	</head>
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			| <a href="History.php">Department</a> | Clubs</div>
		<div id="title">
		<h1>Clubs & National Societies</h1>
		</div>
		<hr />
		
	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	
			<h2>Biomedical Engineering Club</h2>
				<p>The Brigham Young University chapter of the Biomedical Engineering 
				Society enhances the opportunities of its members by inviting speakers
				from industry and academia to present aspects of the biomedical 
				engineering field, by visiting industry to observe biomedical practices,
				by maintaining a web site with information about biomedical engineering,
				and by promoting the interests of BYU students and club members to biomedical
				engineering companies.
				</p>
			<h2>AIChE Student Chapter</h2>
			<div align="center"><iframe src="http://player.vimeo.com/video/24026839?title=0&amp;byline=0&amp;portrait=0&amp;" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
			
				<p>The Chemical Engineering Department at BYU has a student chapter of the 
				American Institute of Chemical Engineers (AIChE), as do nearly all chemical 
				engineering departments. The BYU chapter, run by student officers elected by
				their peers, sponsors activities throughout the school year.
				Go to the Chemical Engineering Department office to join.
				</p>
			<h2>Society of Women Engineers</h2>
				<p><a href="http://www.et.byu.edu/current-students/swe">The Brigham Young University chapter of the Society of Women Engineers</a>
				stimulates women to achieve full potential in careers as engineers and leaders,
				expand the image of the engineering profession as a positive force in improving
				the quality of life, and demonstrate the value of diversity.
				</p>
		<h2>National Societies</h2>
			<ul>
				<li><a href="http://www.aiche.org">AIChE (American Institute of Chemical Engineers)</a></li>
				<li><a href="http://www.aiche.org">ACS (American Chemical Society)a>AIChE (American Institute of Chemical Engineers)</a></li>
				<li><a href="http://www.asee.org/">ASEE (The American Society for Engineering Education)</a></li>
			</ul>
	<br />
	<br />	
	
	
</div>	
</div>
	
	
 <?php
	 include 'footer.php'
	?>
	
	<!-- NORMAL SCRIPTS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	 <script src="template/js/plugins/sidebarsize.js"></script>
	


</body>
</html>