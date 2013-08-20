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

	$pageName = "News";

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
			| <a href="History.php">Department</a> | <?php echo $pageName;?></div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div><br />
		<div id="main-content" style="width:620px;">
			
				<img src="images/news/awardsbig.jpg" style="display:block;margin-left:auto;margin-right:auto;" />
				<h2>Recent Publications</h2>
				<p>In the past couple of months, four different Chemical Engineering professors have submitted articles that have been accepted for publication in different journals:</p>

			    <ul>
	  	<li>Doctor Hecker, with contributions from students Luke Harrison and Kyle Brunner, <a href="http://onlinelibrary.wiley.com/doi/10.1002/aic.14034/full">published an article in AIChE Journal</a> concerning packed bed friction factors</li>
			   <li> Doctor Knotts and his research group <a href="http://jcp.aip.org/resource/1/jcpsa6/v138/i3/p035102_s1">contributed to a paper</a> that was published in The Journal of Chemical Physics. It explored concepts of DNA hybridization.</li>
			   <li> Doctor Lewis and student James Orgill's <a href="http://www.sciencedirect.com/science/article/pii/S0960852413001569">paper was published</a> in Bioresource Technology. The paper compares mass transfer coefficients.</li>
			   <li> Doctor Bundy and his research group, including Mark Smith, Chad Varner, and Jeffrey Wu, <a href="http://onlinelibrary.wiley.com/doi/10.1002/btpr.1671/full">recently had their paper published</a> in Biotechnology Progress.</li>
			   <li> Student Aaron D. Lewis and Doctor Fletcher <a href="http://pubs.acs.org/doi/abs/10.1021/ef3018783">published an article</a> in Energy and Fuels.</li>
				</ul>
			</p>Such publications increase the reputation of our department for faculty and students alike. Congratulations!</p>
			


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