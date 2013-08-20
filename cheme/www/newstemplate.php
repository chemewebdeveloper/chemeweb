<?php require_once("../databaseaccess.php");?>
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
<?php require_once("functions.php");?>

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

	$pageName = "Apply For a Job";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
			
            table, th, td, tr {border: 2px solid #444; border-style:inset;}
            th { background-color:#036; color:white; }
        </style>";

  	$query = "SELECT * FROM news_items WHERE title='Mark'";

	$newsItems = mysql_query($query, $connection);

		while($newsItem = mysql_fetch_array($newsItems)) {
			$pageName =  $newsItem['title'];
			$paragraph = $newsItem['paragraph'];
		}
		if(!newsItem){
				die("Database connection failed: " . mysql_error());
		}


?>
<title><?php echo $pageName; ?></title>
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
			| <a href="grad.php">Alumni & Friends</a> | <?php echo $pageName?></div>
		<h1><?php echo $pageName?></h1>
		<hr />
<div class="sidebar">
		<?php include 'alumnisidebar.php'
		?>
	</div>
<div id="main-content" style="width:620px;">
		<br />
		
		<?php
	
		echo $paragraph;
	  
		
		?>

		<br />
		

</div>
</div>


 <?php
	 require_once 'footer.php'
 ?>

	<!-- NORMAL SCRIPTS -->
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="template/js/script.js"></script>


	<!-- PLUGINS -->
	 <script src="template/js/plugins/jquery/competencies.js"></script>


</body>
</html>
<?php 
	//5. Close connection
		mysql_close($connection);
?>