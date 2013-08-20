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
	$pageTitle = "Students | Chemical Engineering";
	
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
			| <a href="History.php">Department</a> | About Our Students </div>
		<div id="title">
		<h1>About Our Students</h1>
		</div>
		<hr />
		
	<div class="sidebar">
		<?php include 'departmentsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	<table width="700" class="customtable" cellspacing="1" cellpadding="2">
	<br />
	<br />
	<tbody class="customtable" >
	
	<tr>
	<th colspan="2" style="background-color:#036">
		<p>Chemical Engineering students at Brigham Young University have unique potential to be successful leaders 
		in their professional and personal lives. A few characteristics that contribute to that potential:</p>
		</th>
		</tr>
	<tr>
	<td width="50%" height="155" valign="top">
		<ul>
			<li><h3>Among the brightest in the nation:</h3> The average ACT for incoming freshman at BYU is over 28 (one of 
			the highest in the country and similar to the most prestigious private schools).</li>
			<li><h3>Extensive leadership experience:</h3> A high percentage of graduate students and nearly all undergraduate 
			students are members of the Church of Jesus Christ of Latter-day Saints, which provides multiple opportunities
			from early youth on, to lead groups of their peers in religious, service, and social activities. Additionally,
			nearly all male and some female members serve full-time missions for the Church (18 months or 2 years) in which 
			they carry significant responsibility and lead peers in extensive teaching programs.</li>
			<li><h3>Significant international experience:</h3> Many of our students come from outside the United States, and many 
			of our U.S. students serve missions (see above) outside the United States or in non-English-speaking areas within 
			the U.S. For example, a poll of BYU chemical engineering graduating seniors from 2000 to 2010 revealed facility 
			in 33 languages.<br /><br /></li> 
		 </ul>
	
	</td>
	<td width="50%" height="155" valign="top" >
		
		<div align ="center">
		<img src="images/Department/students.jpg">
	</div>
	</td>
	</tr>
	</tbody>
	</table width="1000" height="127">
		
	
	
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