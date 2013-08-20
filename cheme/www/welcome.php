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

	$pageName = "Welcome From Department Chair";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
			.sidebar h4, h5{margin-left:50px}
        </style>";
	

?>
<title><?php echo $pageTitle; ?></title>
	<meta name="description" content=<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> >

	<meta name="viewport" content="width=device-width" />

	<!-- Insert plugin stylesheets here -->
	<link rel="stylesheet" href="template/js/plugins/shadowbox/shadowbox.css" />
	<script src="template/js/plugins/shadowbox/shadowbox.js"></script>
	

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
			| <a href="History.php">Department</a> | <?php echo $pageName?></div>
		<div id="title">
		<h1><?php echo $pageName?></h1>
		</div>
		<hr />

	<div class="sidebar" >

		<h3>Department Contacts</h3><br />
		<h4>Randy Lewis</h4><h5>Department Chair<br />801-422-7863<br /></h5>
		<h4>Serena Jacobson</h4><h5>Executive Secretary<br />serena@byu.edu<br />801-422-2588</h5>
		<h4>Arlene Cleverly</h4><h5>Financial Secretary<br />clever50@byu.edu<br />801-422-2587</h5>
		<h4>Mike Beliveau</h4><h5>UO Lab Director<br />beliveau@byu.edu<br />801-422-3921</h5>
		<h4>Richard Robins</h4><h5>CSR<br />chemesupport@byu.edu<br />801-422-1124</h5>

	</div>
		<div id="main-content" style="width:620px;">
			
			<img src='images/directory/lewis.jpg' >
		
			<p>Welcome to BYU Chemical Engineering!  With 14 full-time professors, over 600 undergraduate students, and over 



			45 graduate students, we offer a vibrant educational opportunity for those seeking degrees in Chemical Engineering.  



			We have a unique student body: Over 80% participate in internships, over 50% are fluent in a foreign language, 



			and over 80% of our undergraduate students participate in research mentored experiences while on the campus.  



			Our program is accredited by ABET and is one of the largest Chemical Engineering undergraduate programs in the 



			United States.</p>



			<p>Our faculty is committed to helping students learn.  Faculty teaching ratings are some of the highest in the college 



			and our faculty members take extra efforts to know the students.  The faculty members also maintain a rigorous 



			research program that includes both graduate and undergraduate students.  I invite you to look at our research link 



			on the website to see the outstanding research being pursued in the department. </p> 



		<p>We also have an outstanding student chapter of the American Institute of Chemical Engineers (AIChE) in which 



			students have the opportunity to participate in socials, competitions, conferences, workshops, and other various 



			activities.  Our student chapter has often been recognized as one of the top chapters in the nation.  We encourage 



			students to become involved in AIChE upon arriving on campus. </p>



			<p>As you explore our website, you will see the exciting opportunities that chemical engineering offers.  Chemical 



			engineering is an exciting discipline!  I invite you to visit our campus and to interact with our students and faculty.  



			If you are considering chemical engineering as a major, please feel free to contact us at 801-422-2586 or visit us in 



			350 Clyde Building.  </p>



		<p>	Warm regards, </p>



		<p>	Randy S. Lewis</p>

			<!-- <img src="images/directory/randy.png" /> -->

			<p>Chair and Professor</p>
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
	<script src="template/js/plugins/shadowbox/shadowboxplayer.js"></script>


</body>
</html>