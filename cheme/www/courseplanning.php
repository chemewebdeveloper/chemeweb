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
	$pageTitle = "Semester Planning | Chemical Engineering";

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
			| <a href="newmajorreqs.php">Undergraduate</a> | Semester Planning</div>
		<div id="title">
		<h1>Course Planning</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			<p>Registration in the correct classes is important to avoid delaying graduation
    	 by a year or two. The class schedule in the BYU Chemical Engineering Department
    	  is very full, and requires four full years of course work. Meet with a faculty
    	   advisor in our department to help avoid unnecessary delays in graduation! The 
    	   secretaries in the Chemical Engineering Department office can provide the name
    	    of your advisor, and you can then contact that advisor by phone or email
    	     (available in the <a href="Faculty.php">Faculty Directory</a>). You may want 
    	     to look at the flow charts that are suggested sequences for taking courses below.
    	     </p><br />
    	     <a href="bigflowchart2012.png"><img 
    	     src="Flowchart-2012-2013.png" style="border:3px solid #036;margin-right:auto;margin-left
    	     :auto; width:100%"/></a><p style="text-align:center">This flowchart is based on eight semesters (Click to enlarge)</p>
    	      <a href="bigflowchart2012Sp.png"><img 
    	     src="Flowchart-2012-2013Sp.png" style="border:3px solid #036;margin-right:auto;margin-left
    	     :auto; width:100%"/></a><p style="text-align:center">This flowchart is based on eight semesters
    	     and two Spring terms (Click to enlarge)</p>
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