<?php


if(!isset($_COOKIE["username"])){
header("Location: http://cheme.byu.edu/authenticate.php");	

}?>
<?php require_once("../databaseaccess.php");?>
<?php require_once("functions.php");?>
<?php 
//1. Create a database connection
	$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if(!$connection){
		die("Database connection failed: " . mysql_error());
	}
	
//2. Select a database to use
	$db_select= mysql_select_db(DB_NAME,$connection);//it actually isn't necessary to list connection here
		if(!$db_select){
			die("Database connection failed: " . mysql_error());
		}
?>
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
	$pagename = "Job Archive";
	$pageTitle = $pagename . " | Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
			
           table, th, td, tr {border: 2px solid #444; border-style:inset;}
            th { background-color:#036; color:white; }
			
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
			| <a href="majorrequirements.php">Undergraduate</a> | <?php echo $pagename?></div>
		<div id="title">
		<h1> <?php echo $pagename?></h1>
		</div>
		<hr />

	<!-- <div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div> -->
		<div id="main-content" style="width:620px;">
<h2>Past Internships/Job Offers</h2>
	<p>Below you will find a list of internships/job offers that have been given to students in the past.</p>
 <!-- <?php getJobArchive($connection); ?> --><!-- this queries for l3 competencies and displays it in a table -->
<a href="2013-8-byuemployers.xlsx">List of Companies that Have Hired or Solicited for Hire BYU Chemical Engineers</a>
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
<?php 
	//5. Close connection
		mysql_close($connection);
?>