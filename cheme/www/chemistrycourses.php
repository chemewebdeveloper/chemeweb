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
	$pageTitle = "Chemistry Courses | Chemical Engineering";

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
			| <a href="newmajorreqs.php">Undergraduate</a> | Chemistry Courses</div>
		<div id="title">
		<h1>Chemistry Courses</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			<h2>Normal Chemistry Sequence</h2>
			<p>The normal sequence of courses include: Chem 111, 112, 
		351, 352, and 467. Two hours of laboratory credit must also
		be taken in addition to any freshman chemistry laboratory.</p>
		<h2>Possible Changes to the Chem 111/112 Sequence</h2>
			<p>Chem 105, 106, and 107 may be substituted for Chem 111 and 
			112.  This is usually only done if a student has AP credit for 
			105 and/or 106.  Chem 111/112 is the preferred route as it better
			prepares students for later chemistry courses.</p>
		<h2>Waiving Chem 107</h2>
			<p>Unless Chem 111 and 112 are taken at BYU, Chem 107 must be either
			taken or waived.  Students desiring to waive 107 must speak with Dr.
			Wheeler. A waiver will require evidence from the student of a sufficient
			high school chemistry laboratory experience.</p>
		<h2>Advanced Chemistry Lab</h2>
			<p>Chemistry laboratory courses that satisfy the Chemical Engineering 
			technical elective are Chem 223, 227, 353, 464, or 465. Chem 227 is 
			usually only taken if a student transfers from a chemistry program.
			If a student takes Chem 353 for 1 credit hour and later decides to 
			take a second hour of Chem 353, special arrangements must be made 
			with the Chemistry instructor to do a credit/grade change on the 
			original course (otherwise only a replacement grade appears on the
			transcript).</p>
			<p>n 2007-2008, the chemistry department changed the number of 213,
			which was previously accepted for the chemistry lab requirement, 
			to 113. Chem 113 is not an approved course for the chemistry lab 
			technical elective requirement.  Chem 213 taken before the number 
			change does fulfill the chemistry lab requirement.</p>
		<h2>Physical Chemistry</h2>
			<p>In Fall 2010, the chemistry department began teaching two
			sequences of Physical Chemistry: a 1 course sequence and a 2 course 
			sequence.  Normally, chemical engineering students will take Chem 467
			Physical Chemistry for Engineers. This course, which covers classical
			thermodynamics, statistical mechanics, and quantum mechanics, is only 
			taught during the Fall semester and should be taken during the Fall of
			the junior year before ChEn 373.</p>
			<p>The two course sequence, Chem 462 and 463, is mainly for Chemistry
			majors, but a Chemical Engineering student may opt to take this sequence.
			This route is desireable if the student wishes to specialize in
			thermodynamics or related fields such as thermophysical properties.
			If the two option course is taken, Chem 462 must be taken in the 
			fall before Chem 463 in the winter. The extra three hours may be
			counted towards the EMSB elective.</p>
			<p>Students taking either the 1 course sequence or the 2 course 
			sequence will be able to take both P-chem labs (Chem 464 and 465)
			which fulfills the chemistry lab technical elective requirement.</p>
			<p>Prior to Fall of 2009, the chemistry department taught Chem 461 and
			462 as the physical chemistry sequence. Our students were required to 
			take 461 and could have taken 462 for elective credit. During the 2009-2010
			academic year, the "new" sequences were unofficially begun. As such, students
			who were juniors in the Fall of 2009 took Chem 596R with Patterson. 
			This course will become Chem 467 in 2010.</p>
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