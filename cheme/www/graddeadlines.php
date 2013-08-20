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
	$pageTitle = "Graduation Deadlines | Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
		table th{background-color:#036; color:white}
		table tr,td{border: 1px solid #444}
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
			| <a href="newmajorreqs.php">Undergraduate</a> | Graduation Deadlines</div>
		<div id="title">
		<h1>Graduation Deadlines</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			<h2>Graduation Application Steps and Deadlines</h2><hr /><table width="100%" border="0" cellpadding="2" cellspacing="10"><tbody><tr><td valign="top">&nbsp;</td><td colspan="3" valign="top"><div class="style1" align="center"><div align="center">Month of Graduation</div></div></td></tr><tr class="odd"><td valign="top" width="55%"><span class="style1">Tasks to complete for graduation in the given month </span></td><td valign="top" width="15%"><div align="center"><span class="style1">Apr </span></div></td><td valign="top" width="15%"><div align="center"><span class="style1">Aug </span></div></td><td valign="top" width="15%"><div align="center"><span class="style1">Dec </span></div></td></tr><tr><td valign="top"><span class="style2">Apply for graduation through the College Advisement Center (242 CB) (the CAC clears your GE credits).</span></td><td valign="top"><div align="center">Nov. 15 of previous year</div></td><td valign="top"><div align="center">Apr. 15</div></td><td valign="top"><div align="center">Sep. 15</div></td></tr><tr class="odd"><td valign="top"><span class="style2">Apply for graduation through the department office (the department clears you major credits).</span></td><td valign="top"><div align="center">Oct. 15 of previous year</div></td><td valign="top"><div align="center">Oct. 15 of previous year</div></td><td valign="top"><div align="center">Oct. 15 of previous year</div></td></tr><tr><td valign="top"><span class="style2">The Chemical Engineering department will contact you through email to schedule an exit interview with the Department Chair (make sure that your email address on RouteY is correct).</span></td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td></tr><tr class="odd"><td valign="top"><span class="style2">University graduation information and deadlines:</span></td><td colspan="3" valign="top"><div align="center"><a href="http://graduation.byu.edu">http://saas.byu.edu/registrar/graduation/</a></div></td></tr></tbody></table>
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