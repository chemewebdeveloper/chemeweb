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
	</div>
		<div id="main-content" style="width:620px;">
			<h2>Announcing the V. Dean Allred Endowed Mentorship/Scholarship Fund</h2>
			<h3>April 23rd, 2013</h3>
			<center> <img src="images\news\Allred Picture.jpg" /> </center>
		
			<p>In his memory, the V. Dean Allred family recently endowed a mentorship/scholarship fund for
			BYU Chemical Engineering students. Dean was an exceptional Chemical Engineer who worked
			as a research scientist. In addition to being an author and inventor with several patents, he served
			as a consultant to several graduate research programs. Two of his sons graduated from our
			program. You can read more about his life below.</p>
			<br>
			<p><center>V. Dean Allred (1922-2012)</center></p>
			<br>
			<p>Dean Allred was born in September of 1922 on a farm near Delta, Utah, the third of six children.  His father, Angus, was a farmer and his mother, Lulu Cram, a school teacher.  Angus died when Dean was nine years old leaving his wife and young family to run the farm during the Great Depression.  Dean learned to work hard on the farm and make do with what you had.  He rebuilt not only farm equipment, but also a Model T Ford.  With no money for toys and games, Dean often improvised using barrel stays for skis or the heel of an old shoe for a hockey puck.</p>
		
			<p>Dean had a lifelong interest in science.  He attended Delta public schools graduating with honors.  Four honored seniors gave the commencement addresses, and he was assigned to speak about the social sciences even though his love was physical science.  Lulu taught Dean that education was the way to a different life. He received a scholarship to the Branch Agricultural College (now SUU).   After two years he graduated with high honors moving on to the University of Utah where he received another scholarship to study in the field of his choosing, Chemical Engineering.</p>
			
			<p>Dean enlisted in the Army Air Corp in 1943 and was sent to train in the engineering college of New York University as a meteorologist.  Returning to Utah in 1944, he married Alice Jackson of Belfry, Montana.  After a few short weeks as newlyweds, Dean was sent to serve his country in the Pacific:  Hawaii, Guam, Saipan, and Iwo Jima.   He wrote home that he was “missing the best years of his wife.” After two long years, Dean returned to his wife and education at the University of Utah, completing his BS in chemical engineering in June of 1948 and then his PhD in fuel technology and physical metallurgy in August of 1951. His dissertation was in the field of catalysis.  Called back into active duty during the Korean War, Dean and Alice moved their family to Dayton, Ohio where Dean worked at Wright Patterson Air Force Base.  Upon his honorable discharge, he began work at Oak Ridge National Laboratories in Tennessee.  In 1956 he began a thirty-two year career as a research scientist at Marathon Oil Company's research center in Littleton, Colorado.</p>
			
			<p>An author and inventor, Dean held several US and foreign patents.  He was internationally recognized as an authority on oil shale processing technology, editing a book “Oil Shale Processing Technology.” He also worked with petroleum coke for use as an anode for aluminum production.  He served as a consultant to the U of U and USU on faculty and graduate energy-related research programs, as a member of a technical advisory committee for the US Dept. of Interior's Office of Coal Research, as a technical adviser on specific NSF-RANN sponsored academic research projects and as a distinguished lecturer.  He was a big supporter of technical university education encouraging young people to consider engineering and science.</p>
			
			<p>An Eagle Scout, he served in many adult leadership positions in the scouting program including district commissioner.  As a faithful member of the LDS church he served as branch president, bishop, high councilor and counselor to two mission presidents.  For 22 years he served as a sealer in the Denver Temple.  The father of six children, he was recognized as the Littleton Colorado Father of the Year in 1978.  He was known to his family as “Mr. Fix-It”.  He always said “If someone made it, I can take it apart and fix it.”  Retirement didn’t slow Dean down.  He tackled the project of building a cabin in Montana for his wife, children and grandchildren.  He always called it “Grandma’s cabin”, but his children see the engineering handwork of their dad from the foundation to the rafters.</p>
			
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