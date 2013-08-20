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
	$pageTitle = "Especially for Women | Chemical Engineering";

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
			| <a href="whatischem.php">Prospective Students</a> | Especially for Women</div>
		<div id="title">
		<h1>Especially for Women</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'prospectivesidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		<br />
		<h2>Come Join us!</h2><br />
			<p>We encourage women to consider chemical engineering as a major.
	 We join with the prophets and apostles in urging women to seek education 
	 to better themselves for all the roles that they may play. Chemical 
	 engineering prepares young women for many aspects of life, from full-time
	  homemaker to community leader to successful professional.</p><br />
	
	<h3>Information/Testimonials</h3>
	<p><a href="ChE_for_Women.ppt">Download this Powerpoint presentation</a>, which describes the benefits
	 of chemical engineering for women (including LDS women) and introduces
	  a few women ChE graduates from BYU.</p>
	<br />
	<br />
	<div align="center">
	<iframe width="560" height="315" src="http://www.youtube.com/embed/iud7js7J36k" frameborder="0" allowfullscreen></iframe>
	<p>Kim Bal, a chemical engineer who works for Unilever, tells us why she loves her job.</p>
	</div>
	<br />
	<br />
	<div align="center">
	<iframe width="560" height="315" src="http://www.youtube.com/embed/dNnq5FY9A_0" frameborder="0" allowfullscreen></iframe>
	<p>High-school student Burcu Bozkurt interviews Dr. Michelle Staben Wobker, a chemical engineer who works for Glaxo-Smith-Kline, a pharmaceutical company.</p>
	</div>
	<br />
	<br />
	<div align="center">
	<iframe width="420" height="315" src="http://www.youtube.com/embed/62ERml_L9TY" frameborder="0" allowfullscreenn></iframe>
	<p>Regina Clewlow, chemical engineer and Executive Director of Engineers for a Sustainable World, shares why she founded and directs this company.</p>
	</div>
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