<?php


if(!isset($_COOKIE["username"])){
header("Location: http://cheme.byu.edu/authenticate.php");	

}?>

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

	$pageName = "Teaching Assistant Application";

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
			<form Method="POST" Action="tamail.php"><input TYPE="hidden" NAME="required" VALUE="Name, email">

			  <input TYPE="hidden" NAME="subject" VALUE="TA Application">

			  <input TYPE="hidden" NAME="" VALUE="Teaching Assistant Application">

			<table border="0" cols="1" WIDTH="100%" >

			<tr>

			<td><script language="JavaScript">

			<!--

			var appDate= new Date();

			appMonth= appDate.getMonth()+ 1;

			appDay= appDate.getDate();

			appYear= appDate.getYear()-100;

			document.write("Date " + appMonth +" / "+ appDay + " / 20" + appYear);

			//-->

			</script>

			</td>

			</tr>

			</table>



			<table border="0" COLS=2 WIDTH="100%" >

			<tr>

			  <td WIDTH="25">Name: </td>

			  <td><input TYPE="Text" NAME="Name" SIZE=30></td>

			</tr>



			<tr>

			  <td WIDTH="25">Phone(local): </td>

			  <td><input TYPE="Text" NAME="Phone" value=" " SIZE=20 >&nbsp;&nbsp; Extension&nbsp;: 

			      <input TYPE="Text" NAME="Extension" value=" " SIZE=5></td>

			</tr>



			<tr>

			  <td>E-mail: </td>

			  <td><input TYPE="Text" NAME="email" SIZE=20 ></td>

			</tr>



			<tr>

			  <td WIDTH="25">Address: </td>

			  <td><input TYPE="Text" NAME="Address" value=" " SIZE=30 ></td>

			</tr>



			<tr>

			  <td>City: </td>

			  <td><input TYPE="Text" NAME="City" value=" " SIZE=15 >&nbsp;&nbsp; State: &nbsp;

			      <input TYPE="Text" NAME="State" value=" " SIZE=4 >&nbsp;&nbsp;&nbsp;Zip: &nbsp;

			      <input TYPE="Text" NAME="Zip" value=" " SIZE=9 ></td>

			</tr>



			<tr>

			  <td>Year in School: &nbsp;</td>

			  <td><select NAME="Year in School" MULTLIPLE ><option>Freshman&nbsp;<option>Sophmore&nbsp;<option>Junior&nbsp;

			      <option>Senior&nbsp;<option>Graduate&nbsp;</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cum. GPA: &nbsp;

			      <input TYPE="Text" NAME="Cumulative GPA" SIZE=10 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

			      <!-- <input TYPE="Text" NAME="Hours this semester" SIZE=10 > --></td>

			</tr>

			</table>



			<br>



			<table border="0" WIDTH="100%" >

			<tr>

			  <td WIDTH="350">The number of hours you would like to work per week: &nbsp;</td>

			  <td><input TYPE="Text" NAME="The number of hours you would like to work per week" value=" " SIZE=5></td>

			</tr>



<!-- 			<tr>

			  <td WIDTH="130">Which semester do you want to work? &nbsp;</td>

			  <td><input TYPE="Radio" NAME="Which semester do you want to work?" Value="Fall" Checked>Fall&nbsp;

			      <input TYPE="Radio" NAME="Which semester do you want to work?" Value="Winter">Winter&nbsp;

			      <input TYPE="Radio" NAME="Which semester do you want to work?" Value="Spring">Spring</td>

			</tr> -->

			</table>



			<br>



			<table border="0" cols="1" WIDTH="100%">

			<tr>

			  <td>Previous TA Experience:&nbsp;

			  <br><textarea NAME="Previous TA Experience" ROWS="3" COLS="80" wrap="physical"></textarea></td>

			</tr>

			</table>



			<table border="0" cols="1" WIDTH="100%">

			<tr>

			  <td>ChE classes taken which may help as a background for employment:&nbsp;

			  <br><textarea NAME="ChE classes taken which may help as a background for employment" ROWS="3" COLS="80" wrap="physical"></textarea></td>

			</tr>

			</table>



			<table BORDER="0" Cols="1" width="100%">

			<tr>

			  <td>Classes for which you would prefer to TA:<br>

			  <textarea name="Classes you would prefer to TA" rows="3" cols="80" wrap="physical"></textarea></td>

			</tr>

			</table>



			<table border="0" cols="1" >

			<tr>

			  <td>Any additional information you wish to have noted:&nbsp;

			  <br><textarea NAME="Any additional information you wish to have noted" ROWS="3" COLS="80" wrap="physical"></textarea></td>

			</tr>

			</table>



			<input Type="SUBMIT" Value="Submit"><input Type="RESET" Value="Start Over">

			<p></form>
	
	
			


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