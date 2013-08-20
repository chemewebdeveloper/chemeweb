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

	$pageName = "Dr. Wilding's Resume Checklist";

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
			  <p>Dr. Vincent Wilding, before joining the chemical  engineering faculty at Brigham Young University, was the president of Wiltec, a  chemical research company in Utah. As president he saw hundreds of resumes and  was responsible for hiring for the company. The following is from an interview with   Dr. Wilding and represent his personal views of what makes a great resume.</p>
			<p>There are three critical aspects I look at as an interviewer  when considering a resume. These include initial impression, critical  information, and proof of soft skills. Time is everything for a recruiter and  will look for key bits of information, disqualifying a resume whenever it  doesn't match. Your strategy is to give the recruiter what he or she is looking  for without disqualifying yourself. Here's a checklist to see if you are on the  path for an effective resume. It is set up as if a recruiter was looking at  your resume, mentally checking items off to see if you are the candidate they  are looking for.</p>
			<p><b>Initial Impression:</b></p>
			<ul>
			    <li>Is the resume neat and clean?</li>
			    <li>Is the layout attractive and well organized?</li>
			    <li>Is the font type and size appropriate?</li>
			    <li>Is the spelling and grammar flawless?</li>
			</ul>
			<p><b>Critical Information:</b></p>
			<ul>
			    <li>Are the address and other contact information where they should be?</li>
			    <li>Is education information listed first?</li>
			    <li>Does it include GPA, major, expected time of graduation?</li>
			    <li>Is work experience listed next?</li>
			    <li>Does it describe skills and responsibilities clearly and concisely?</li>
			</ul>
			<p><b>Soft Skills:</b></p>
			<ul>
			    <li>Does the resume indicate good communication skills?</li>
			    <li>Leadership skills?</li>
			    <li>Does it show your ability to work independently and as a team member?</li>
			    <li>Does volunteer work (mission, church callings,        community, etc.) demonstrate leadership and interpersonal skills?</li>
			    <li>Do hobbies or personal interests indicate a well-rounded individual?</li>
			</ul>
			<p><b>Additional Suggestions:</b></p>
			<ul>
			    <li>Different jobs require different qualifications.        Research these qualifications make sure your resume addresses these qualifications.</li>
			    <li>Recruiters know you are only a student but want to see        work ethic. Your resume needs to show that you are working and are willing to        work by listing past jobs. The type of job is important, but in my mind, the        work ethic that is demonstrated.</li>
			    <li>Remember, recruiters come to BYU and the Chemical        Engineering department they know our students, like students from other ChE        departments, have the technical skills and tools. Recruiters like our students        because they also excel in the communication, interpersonal, leadership, and        teamwork skills. Much of this excellence stems from church and missionary        service. Make sure your resume highlights these aspects.</li>
			</ul>
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