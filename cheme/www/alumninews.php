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

	$pageName = "Alumni Newsletter";

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
			| <a href="alumnisociety.php">Alumni & Friends</a> | <?php echo $pageName?></div>
		<div id="title">
		<h1><?php echo $pageName?></h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'alumnisidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
		
		  <h3>Help Us Nominate an Outstanding Alumnus</h3>
		  		<p>Every year at our Alumni banquet, an outstanding alumnus comes and gives a 30 minute lecture on spiritual and career lessons 
		  		they have learned from life after BYU. We would love your help in nominating an alumnus for our banquet next year. Please 
		  		input your name, email, and the person you feel should be nominated. <a href="https://byu.qualtrics.com/SE/?SID=SV_5jcyqoq6rAUhZMV">Click here to nominate.</a>
		  		
		  	</p>
		  		
		  			<a href="http://chemicalengineering.byu.edu/alumninews.php"></a> 
	
			<?php include 'newsletter2012.php' ?>
		<br /><br />
		<h2>Newsletter Archives</h2>

	
	
<ul type="circle">
	<!-- 
<li>
		<a rel="shadowbox;width=805;height=740;player=iframe" title="Summer 2011 Newsletter" href="newsletter2012.php">Newsletter - Summer 2012</li>
 -->
	<li>
		<a rel="shadowbox;width=805;height=740;player=iframe" title="Summer 2011 Newsletter" href="newsletter2011.php">Newsletter - Summer 2011</li>
	</li>
	<li>
		<a href="images/Alumni/2010.pdf">Newsletter - Sept 2010</a></li>
	<li>
		<a href="images/Alumni/2009.pdf">Newsletter - Sept 2009</a></li>
	<li>
		<a href="images/Alumni/2008.pdf">Newsletter - Sept 2008</a></li>
	<li>
		<a href="images/Alumni/2007.pdf">Newsletter - Sept 2007</a></li>
	<li>
		<a href="images/Alumni/2006.pdf">Newsletter - Sept 2006</a></li>
	<li>
		<a href="images/Alumni/2005.pdf">Newsletter - Sept 2005</a></li>
	<li>
		<a href="images/Alumni/2004.pdf">Newsletter - Sept 2004</a></li>
	<li>
		<a href="images/Alumni/2003.pdf">Newsletter - Sept 2003</a></li>
	<li>
		<a href="images/Alumni/2000.pdf">Newsletter - Sept 2000</a></li>
	<!--<li>
		<a href="images/Alumni/2009.pdf">Newsletter - October 1999</a></li>
	<li>
		<a href="images/Alumni/2009.pdf">Newsletter - April 1999</a></li>
	<li>
		<a href="/system/files/pdfs/Alumni/archive/October98/newsletter_Oct_1998.html">Newsletter - October 1998</a></li>
	<li>
		<a href="/system/files/pdfs/Alumni/archive/October97/alum_new.html">Newsletter - October 1997</a></li>
	<li>
		<a href="/system/files/pdfs/Alumni/archive/April97/news_april_pg1.html">Newsletter - April 1997</a></li>
	<li>
		<a href="/system/files/pdfs/Alumni/archive/October96/news_oct_pg1.html">Newsletter - October 1996</a></li>
	<li>
		<a href="/system/files/pdfs/Alumni/archive/April96/news_april_pg1.html">Newsletter - April 1996</a></li>
	<li>
		<a href="/system/files/pdfs/Alumni/archive/October95/news10_9_pg1.html">Newsletter - October 1995</a></li>-->
</ul><br /><br />
		

  </div>

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