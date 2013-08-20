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

	$pageName = "Pre-Med Advice";

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
			| <a href="majorrequirements.php">Undergraduate</a> | <?php echo $pageName;?></div>
			<div id="title">
		<h1><?php echo $pageName?></h1>
			</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	
			<h3>Things to Consider</h3>
			            <ul>
			                <li>Many medical schools don't accept AP credit.</li>
			                <li>The four year plan is a lot more stressful and will require one to take spring and summer classes.</li>
			                <li>It is helpful to have a lighter Junior load to prepare for the MCAT.</li>
			                <li>Take Physiology before Anatomy, Cell Bio is a great class to take (especially from Bradshaw) but it is optional as far as medical school requirements.</li>
			                <li>Take molecular biology as soon as you can.</li>
			                <li>Most of the people I talked to took Biochemistry but it is a difficult class.</li>
			                <li>The offering of Ch E 578 alternates between winter semester and spring term.&nbsp; (Currently offered winter semesters of even years)</li>
			                <li>Can audit the medical school applications class (STDEV 439).</li>
			            </ul><br />
						<p>Rel C 355 and Rel C 356 count for both the Global/Cultural awareness GE as well as for religion electives.<br />
						                        <br />
						                        Take Physiology before Anatomy, Cell Bio is a great class to take (especially from Bradshaw) but it is optional as far as medical school requirements.&nbsp; Take molecular biology as soon as you can.&nbsp; Most     of the people I talked to took Biochemistry but it is a difficult class.&nbsp; Make sure to not take too many difficult classes the semester before you take the MCAT so you can study.&nbsp; I would just audit the medical school applications class (STDEV 439).&nbsp; AP credit does not count for most medical schools so you still have to take your chemistry classes.&nbsp; You have several options as far as years in school are concerned.&nbsp; If you want to get done in 4 years, you will most definitely need to take several spring and/or summer terms in addition.&nbsp; The key is to take the chem e classes in the correct order since they are only offered once a year (with few exceptions - materials, 263, 273, uo lab, etc...).</p>
						
						<p>One of the guys finished in 4 years but he is taking a year off from school to apply since he waited to take the mcat till his fourth year.&nbsp; One of the other guys is doing a combined masters program and won't graduate till next year.&nbsp; Two of us (me included) decided to spread out the curriculum over 5 years to make it a lighter load.&nbsp; I highly recommend this route - you have less credits each semester and you have a little leeway to take some fun, extra classes as well.&nbsp; If you go the 5 year route, you can either do the traditional chem e program and use the fifth year for any generals or premed stuff you need to get done OR you can take the premed stuff and chem e classes as you go and postpone some of the chem e ones that aren't as crucial.&nbsp; This is what I did.&nbsp; I waited to take materials and some of my GEs till later.&nbsp; I also postponed the senior chem e classes until my fifth year so that I could be done with all my applications and concentrate on graduating (GEs and premed classes are what I did this year - much easier classes to deal with when you are studying for the MCAT).</p>
			


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