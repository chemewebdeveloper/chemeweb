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
	$pageTitle = "Program Deadlines | Chemical Engineering";

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
			| <a href="newmajorreqs.php">Undergraduate</a> | Program Deadlines</div>
		<div id="title">
		<h1>Program Deadlines</h1>
		</div>
		<hr />

	<div class="sidebar">
		<?php include 'undergradsidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
			<TABLE cellSpacing=2 cellPadding=0 border=0>
<TBODY>
<TR>
<TD width="32%">&nbsp;</td>
<TD width="17%"><STRONG><U>Fall Semester</u></strong></td>
<TD><STRONG><U>Winter Semester</u></strong></td>
<TD><STRONG><U>Sp/Su Semester</u></strong></td>
<TD>&nbsp;</td></tr>
<TR class=odd>
<TD>2 Year Course Plan</td>
<TD>December 1</td>
<TD>&nbsp;</td>
<TD>&nbsp;</td>
<TD>&nbsp;</td></tr>
<TR>
<TD>Professional Program Application</td>
<TD>April 15</td>
<TD>&nbsp;</td>
<TD>&nbsp;</td>
<TD>&nbsp;</td></tr>
<TR class=odd>
<TD>Scholarship Application</td>
<TD>April 1</td>
<TD>April 1</td>
<TD>&nbsp;</td>
<TD>&nbsp;</td></tr>
<TR>
<TD>TA Applications</td>
<TD>May 1</td>
<TD>November 1</td>
<TD>February 1</td>
<TD>&nbsp;</td></tr></tbody></table>
<P>&nbsp;</p>
<H2>Additional Info for Seniors</h2>
<HR />

<P>A. <A href="l3exam.php">L3 Competency Exam</a></p>
<P>B. <A href="graddeadlines.php">Senior tasks to complete for graduation</a></p></div>  </div>

  

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