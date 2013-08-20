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

	$pageName = "Login";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>

        </style>";

		// get username and password from form
		  $username = $_POST['username'];
		  $password = $_POST['password'];
		  /*
		   * checks the credentials against the LDAP server
		   * $user - RouteY
		   * $pass - password
		   */
		   function authenticate($user,$pass){
			
			
			
		      // prevents guest account access
		      if($pass == ""){
		         return false;
		      }
		      try{
		         $Yldap_location = "ldap://ldap.byu.edu";
		         $ldap_port = 389;
		         // call the ldap connect function
		         $Ydatabase = ldap_connect($Yldap_location, $ldap_port);
		         // bind the connection
		         $good = @ldap_bind($Ydatabase, "uid=".$user.",ou=People,o=BYU.edu", $pass);
		         if($good){
		            // valid credentials
		            return true;
		         }
		         else{
		            // invalid credentials
		            return false;
		         }
		      }
		      catch(Exception $e){
		         return false;
		      }
		   }
		   // call authenticate function
		   if(authenticate($username,$password)){
		      // authenticate successful
		         // set session
		         $_SESSION['loggedin'] = "true";
		         // redirect
		         echo "welcome " . $username;
		         $url = "http://cheme.byu.edu/jobarchive".$_SESSION['url'];
		         header("Location: ".$url);
				setcookie("username",$_POST['username'], time()+3600);
		   }
		   else{
		      // authenticate fails
				 // redirect to login
				$message = "Login Failed";
				$messageTwo = "We have not found a match for your netid and password. Please try again.";
				$url = "http://cheme.byu.edu/authenticate".$_SESSION['url'];
		         
		        
		   }
	

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
			|  <?php echo $pageName;?></div>
			<div id="title">
		<h1><?php echo $message?></h1>
			</div>
		<hr />

	<!-- <div class="sidebar">
		<?php include 'alumnisidebar.php'
		?>
	</div> -->
		<div id="main-content" style="width:620px;">
			
		<p style="color:red" align="center"><?php echo $messageTwo;?>
				
			<div align=center >
				<form action=login.php method=post name=Auth>

				Please log in using your NetID and password:<p>

				<table cellspacing=3 cellpadding=3>
				<tr>
				<td>Username: </td>
				<td><input type=text name=username size=16 maxlength=15></td>
				</tr>
				<tr>
				<td>Password: </td>
				<td><input type=password name=password size=16 maxlength=15></td>
				</tr>
				<tr>
				<td colspan=2><input type=submit value=Login style=’width:100′></td>
				</tr>
				</table>
				</form>
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


</body>
</html>