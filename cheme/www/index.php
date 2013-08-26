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
	$pageTitle = " Home | Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "program, Chemical Engineering, students, Prospective Students, alumni";

	$embeddedCSS = "";
	?>
	
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content=<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> />
	
	<meta name="viewport" content="width=device-width" />
	
	<!-- Insert plugin stylesheets here -->
	<link rel="stylesheet" href="template/css/plugins/slider.css" />
	<link rel="stylesheet" href="template/css/plugins/quicklinks.css" />
	<link rel="stylesheet" href="template/css/plugins/news.css" />
	<link rel="stylesheet" href="template/css/plugins/socialmedia.css" />
	<link rel="stylesheet" href="template/js/plugins/shadowbox/shadowbox.css" />
	<script src="template/js/plugins/shadowbox/shadowbox.js"></script>
	<script src="template/js/libs/jquery-1.7.2.js"></script>
	
	<link rel="shortcut icon" href="template/img/favicon.ico" />
	<link rel="stylesheet" href="template/css/style.css" />

	<?php
	include 'header.php';

	// Embedded styles
	echo $embeddedCSS;
 ?>
	</head>
<body>
<div id="content" class="wrapper">
<!-- SLIDER -->
	<div id="feature">
		<ul id="slider">
			<li>
					<img src="images/slider/class.jpg" alt="" />
				<!--<img src="images/slider/rotate.php" alt="" />  If I want to use this I can -->
				<div class="feature-description">
					<h2><a href="#">Congratulations to our Chemical Engineering Class of 2013!</a></h2>
					<p>
						76 of our Ch En Students graduate on April 25 and 26. Together, they have participated in hundreds of hours of class, service, research, and projects. We wish them the very best!
					</p>
				</div>
				<!-- <div class="feature-description">
									<h2><a href="donate.php">Unique Fundraising Opportunity</a></h2>
									<p>Please <a href="https://secure3.convio.net/ldsp/site/Donation2?df_id=3320&3320.donation=form1&
									cid=ProvoENGChem">set up a monthly contribution</a> to our department to help us take advantage of $450,000 worth of 
									matching funds pledged by an alumnus.  Set up a monthly contribution <a href="https://secure3.convio.net/ldsp/site/Donation2?df_id=3320&3320.donation=form1&
									cid=ProvoENGChem">here.</a>  Learn about employer matching <a href="http://www.ldsphilanthropies.org/employer-matching.html ">here</a>. 
									</p>
								</div> -->
			</li>
			<li>
			<img src="images/slider/feature-main-2.jpg" alt="" />
				<div class="feature-description">
					<h2><a href="#">Undergraduate Research</a></h2>
					<p>Approximately 80% of our undergraduate students work in our labs. 
					These students strongly contribute to cutting edge research in a number of areas. 
					Many of these students are authors and coauthors on archival publications. 
					Around 25% of our students go on to graduate school. </p>
				</div>
			</li>
			<li>
			<img src="images/slider/feature-main-3.jpg" alt="" />
			<div class="feature-description">
				<h2><a href="http://geo.byu.edu/index.php">Global Engineering Outreach</a></h2>
				<p>Randy Lewis, heads the Global Engineering Outreach (GEO) clubs and course at BYU. GEO works
				to improve the quality of life of developing communities through engineering.  Projects include
				building efficient stoves that reduce pollution, water purification, and washing machines. 
				These projects recently took place in Peru and the Navajo Nation.</p>				
				</div>
			</li>
		</ul>
	</div>
<!-- QUICK LINKS -->
<div id="quicklinks"><br />
			<h3 style="color:#369">Quick Links</h3>			
				<ul id="quicklink">
					<li><a href="Faculty.php">Faculty</a></li>
					<li><a href="majorrequirements.php">Major Requirements</a></li>
					<li><a href="whychemgrad.php">Prospective Graduate Students</a></li>
					<li><a href="research.php">Research</a></li>
					<li><a href="frequentlyaskedquestions.php">Frequently Asked Questions</a></li>
					<li><a href="ElectiveSchedule.pdf">Elective Course Offering Schedule</a></li>
					<li><a href="https://ssl.et.byu.edu/cms/accountadder/">Create a Caedm Account</a></li>
					<li><a href="http://uolab.groups.et.byu.net/">UO Lab</a></li>	
				</ul><br />
<!-- UPCOMING EVENTS -->
<div id="upcomingevents">
 				<h3 style="color:#369">Upcoming Events </h3></a>  
	 				<ul>
	 				 				 				
	 													<li><b>10/11/2013 - ChE Alumni Homecoming Banquet</b>
	 				 										<br />Clyde Building Lounge, 6 PM<br />
	 				 									</li><br /> 
														<!-- <li><b>4/26/2013 - Mark Laney Party</b>
		 				 										<br />Smith Fieldhouse, 11 AM<br />
		 				 								</li><br /> -->
		 				 										
			  	</ul>
</div> <!-- end upcomingevents -->
</div> <!-- end calendar -->
	<a href="news.php"><h2 style="color:#369">News</h2></a>
<!-- NEWS CONTAINER -->
<div id="news-container">
			<div class="news-item" id="current">	
											<ul id="items" style="list-style-type:none"> 
												<li>
													<img src="images/news/bundysmall.jpg" width="246" height="157" alt=""/>
													<h3><a href="newsitembundy.php">Dr. Bundy Receives Prestigious Awards</a></h3>
													<p>Congratulations to Dr. Bundy on his NSF Career and DARPA Young Investigator awards.</p>
												</li>
											</ul>
			</div>
			<div  class="news-item omega">
					<ul id="items" style="list-style-type:none"> 
												<li>
													<img src="images/news/uav.jpg" width="246" height="157" alt=""/>
													<h3><a href="newsitemuav.php">Flying UAVs</a></h3>
													<p>Dr. Hedengren was part of a group that recently flew Unmanned Aerial Vehicles.</p>
												</li>
											</ul>
			</div>
			<div  class="news-item omega" style="display:none">
					<ul id="items" style="list-style-type:none"> 
							<li>
								<img src="images/news/awards.jpg" width="220" height="157" alt=""/>
								<h3><a href="recentpublications.php">Recent Publications</a></h3>
								<p>Four different Chemical Engineering 
									professors have submitted articles that have been accepted for publication.</p>
						</li>
			   		</ul>
			</div>
			<div class="news-item omega" style="display:none">
				<ul id="items" style="list-style-type:none"> 
					<li>
						<img src="images/directory/baxter.jpg" width="121" height="157" alt=""/>
						<h3><a href="newsitembaxter.php">Dr. Baxter Receives Lecturer Award</a></h3>
						<p>Dr. Baxter has received the 2012-13 Lecturer Award.
	 					This award praises his research accomplishments.</p>	
					</li>
				</ul>
		  </div>
		<div class="news-item omega" id="last" style="display:none">
					<ul id="items" style="list-style-type:none"> 
						<li>
							<img src="images/directory/lecture.jpg" width="209" height="157" alt=""/>
							<h3><a href="lecture.php">MIT Professor Gives Lecture</a></h3>
							<p>Doctor Langer
							 visited BYU campus on February 6 and 7, meeting with faculty and giving two presentations.</p>	
						</li>
					</ul>
		</div>	
			<!-- <div class="news-item omega" id="last" style="display:none">	
												<ul id="items" style="list-style-type:none"> 
													<li>
														<img src="images/news/cooknew.jpg" width="121" height="157" alt=""/>
														<h3><a href="newsitemnewfaculty.php">New Faculty Member</a></h3>
														<p>We are pleased to announce the arrival of our newest faculty
													 		member, Doctor Alonzo D. Cook. We are glad you are here!</p>
													</li>
												</ul>
				</div> -->
		
		<!-- OLD NEWS STORIES -->
		<!-- <div class="news-item omega">
		  									<ul id="items" style="list-style-type:none"> 
		  										<li>
		  											<img src="images/news/dna.png"  alt=""/>
		  											<h3><a href="news.php">Learn About ChE 513 and ME 575</a></h3>
		  											<p>Click here to find out more about catalog issues with ChE 513 and to learn more about ME 575.</p>
		  										</li>
		  									</ul> 
		  				</div> -->
		
		</div><!-- end news -->
<div class="other-news" style="width:550px;display:inline;float:right">																																										
			 <strong style="color:#369">Other News</strong><br /><br />
					<ul align="left"> 
					<!-- <li><a href="newsitemjobopening.php">Job Opening</a> for Assistant Project Coordinator in the DIPPR Lab!</li> -->
	 				<li><a href="newsitemdeanallred.php" id="seven">Announcing the V. Dean Allred Endowed Mentorship/Scholarship Fund</a></li>
					<li><a href="newsitemchemecar.php" id="seven">BYU ChE Team Wins Regional ChemE Car Competition</a></li>
			</ul>	
</div><!-- end other news-->		
</div><!-- end content-->
    
    <?php
	 include 'footer.php'
	?>
	
	<!-- NORMAL SCRIPTS -->
	<script src="template/js/libs/modernizr-2.0-basic.min.js"></script>	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script src="template/js/script.js"></script>

	
	
	<!-- PLUGINS -->
	<script src="template/js/plugins/slider.js"></script>
	<script src="template/js/plugins/calendar.js"></script>
	<script src="template/js/plugins/shadowbox/shadowboxplayer.js"></script>
	 <script src="template/js/plugins/news-rotator.js"></script>

</body>
</html>