	<header id="main-header">
		<div id="header-top" class="wrapper">
			<div id="logo">
				<a href="http://www.byu.edu/" class="byu"><img src="template/img/ira_a_fulton_white.png" usemap="#logo-split" alt="BYU Logo" /></a>
					<map name="logo-split">
						<area shape="rect" coords="0,0,44,11" href="http://www.byu.edu" />
						<area shape="rect" coords="53,0,269,11" href="http://www.et.byu.edu" />
					</map>
			</div>
					
			<a href="index.php" id="site-name">Chemical Engineering</a> 

			<div id="search-container">
				
				<?php 
				
				if(isset($_REQUEST["ticket"])){
												$ticket = $_REQUEST['ticket'];
												
												header( 'Location: https://cas.byu.edu/cas/validate?ticket=' . $ticket . '&service=http://cheme.byu.edu' ) ;
											 	
											}
											
			

				if(isset($_COOKIE["username"])){
				
					$value = "Welcome " . $_COOKIE["username"] . ".";
					$set = true;
				}
				else{
					
				}
				?>
				
				<!-- <a href="https://cas.byu.edu/cas/login?service=http://cheme.byu.edu" class="button">Login</a> -->
				<!-- <?php if(isset($_COOKIE["username"])){
								echo "<a href=\"http://cheme.byu.edu/authenticate.php\" class=\"button\">Logout</a>";
							}else{
								echo "<a href=\"http://cheme.byu.edu/authenticate.php\" class=\"button\">Login</a>";
							}
							?> -->
			  <!-- this is a login button but for the moment we have decided that we do not need it -->
					<form method="get" action="search.php">

					<input type="text" name="q" size="40" id="search" placeholder="Search Chemical Engineering" /> 

					<input type="image" src="template/img/search-button.png" alt="Search" name="sa" id="search-button"/>

					<input type="hidden" name="cof" value="FORID:10">

				</form>	
				
			<!-- This is the script for google analytics -->
				<script type="text/javascript">

					var _gaq = _gaq || [];
					_gaq.push(['_setAccount', 'UA-33994670-2']);
					_gaq.push(['_trackPageview']);

					(function() {
						var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
						ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					})();

				</script>
			</div>
			<nav id="secondary-nav" class="no-js">
				<ul>
					
					<li><a href="https://secure3.convio.net/ldsp/site/Donation2?df_id=3320&3320.donation=form1&cid=ProvoENGChem">Donate</a>
					</li>
					<li><a href="abet.php">ABET</a>
					</li>
					<li><a href="learningoutcomes.php">Learning Outcomes</a>
					</li>
				</ul>
				<?php if($set){
					echo "<br /><div style=\"color:white\" align=\"center\">" . $value . "</div>";
				}?>
			</nav>
		</div>

		<nav id="primary-nav" class="no-js">
			<ul>
				 <li><a href="">Department</a>
					<div class="mega">
						<ul class="links">
							<li class="featured">
								<ul>
									<li><a href="History.php">About</a></li>
									<li><a href="news.php">News</a></li>
								</ul>
								<hr/>
							</li>
										<li><a href="Faculty.php">Faculty</a></li>
											<ul class="sublinks">
												<li><a href="#">Sublink 1</a></li>
											</ul>
										<li><a href="Staff.php">Staff</a></li>	
										<li><a href="Students.php">Students</a></li>
										<li><a href="research.php">Research</a></li>
										<li><a href="clubs.php">Clubs</a></li>
										<li><a href="abet.php">ABET</a></li>
										<li><a href="safety.php">Safety</a></li>
										<li><a href="visitus.php">Visit Us</a></li>	
										<li><a href="raapplication.php">RA Application</a></li>		
										<li><a href="taapplication.php">TA Application</a></li>	 
										<li><a href="jobarchive.php">Job Archive</a></li>
						</ul>
						<div class="highlight"><a href="#"><img src="images/fire.jpg" /></a>
							<p><a href="research.php">Learn About Our Research</a></p>
						</div>
						
						
						<!-- <div class="highlight"><a href="#"><span class="img menu2.jpg" title=""></span></a>
							<p><a href="#">Picture Link</a></p>
							<p>Text text text text text.</p>
						</div> -->
					</div>
				</li> 
			<!--	<li><a href="">Double Mega Dropdown Menu</a>
					<div class="mega">
						<ul class="links double">
							<li class="featured">
								<ul>
									<li><a href="#">Featured Link 1</a></li>
									<li><a href="#">Featured Link 2</a></li>
								</ul>
								<hr/>
							</li>
							<div class="left">
								<li><a href="#">Link 1</a></li>
								<li><a href="#">Link 2</a>
									<ul class="sublinks">
										<li><a href="#">Sublink 1</a></li>
										<li><a href="#">Sublink 2</a></li>
										<li><a href="#">Sublink 3</a></li>
										<li><a href="#">Sublink 4</a></li>
										<li><a href="#">Sublink 5</a></li>
									</ul>
								</li>
								<li><a href="#">Link 3</a></li>
								<li><a href="#">Link 4</a></li>
								<li><a href="#">Link 5</a></li>
								<li><a href="#">Link 6</a></li>
							</div>
							<div class="left">
								<li><a href="#">Link 7</a></li>
								<li><a href="#">Link 8</a></li>
								<li><a href="#">Link 9</a></li>
								<li><a href="#">Link 10</a></li>
								<li><a href="#">Link 11</a></li>
								<li><a href="#">Link 12</a></li>
							</div>
						</ul>
						<div class="highlight"><a href="#"><span class="img menu1.jpg" title=""></span></a>
							<p><a href="#">Picture Link</a></p>
							<p>Text text text text text.</p>
						</div>
						<div class="highlight"><a href="#"><span class="img menu2.jpg" title=""></span></a>
							<p><a href="#">Picture Link</a></p>
							<p>Text text text text text.</p>
						</div>
					</div>
				</li> -->
				<!-- <li> <a href="">Department</a>
					<div class="sub">
						<ul class="links">
										<li><a href="History.php">About</a></li>
										<li><a href="Faculty.php">Faculty</a></li>
										<li><a href="Staff.php">Staff</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="Students.php">Students</a></li>
										<li><a href="research.php">Research</a></li>
										<li><a href="clubs.php">Clubs</a></li>
										<li><a href="abet.php">ABET</a></li>
										<li><a href="safety.php">Safety</a></li>
										<li><a href="visitus.php">Visit Us</a></li>	
										<li><a href="raapplication.php">RA Application</a></li>		
										<li><a href="taapplication.php">TA Application</a></li>	 
										<li><a href="jobarchive.php">Job Archive</a></li>
						</ul>
					</div>
				</li>  -->
				<li> <a href="">Prospective Students</a>
					<div class="sub">
						<ul class="links">
							<div style="font-weight:bold; color:#036" align="center">Graduate</div>
										<li><a href="graduateadmissions.php">Admissions</a></li>
										<li><a href="gradpreapplication.php">Pre-Application</a></li>
										<li><a href="graduatestudents.php">Meet Our Students</a></li>
										<li><a href="whychemgrad.php">Why ChE Grad School?</a></li>
										<li><a href="gradfaq.php">Grad. FAQ</a></li><hr />
										<div style="font-weight:bold; color:#036" align="center">Undergraduate</div>
										<li><a href="whatischem.php">What is ChE?</a></li>
										<li><a href="byuforchem.php">Why BYU for ChE?</a></li>
										<li><a href="advice.php">Freshmen Advice</a></li>
										<li><a href="especiallyforwomen.php">Women in ChE</a></li>
										<li><a href="frequentlyaskedquestions.php">Ugrad. FAQ</a></li>
										<li><a href="transferstudents.php">Transfer Students</a></li>
						</ul>
					</div>
				</li>
				<li> <a href="">Undergraduate Students</a>
					<div class="sub">
						<ul class="links">
										<li><a href="majorrequirements.php">Major Requirements</a></li>
										<li><a href="technicalelectives.php">Technical Electives</a></li>
										<li><a href="engemsbelectives.php">ENG EMSB Electives</a></li>
										<li><a href="courseplanning.php">Course Planning</a></li>
										<li><a href="l3exam.php">L3 Exam</a></li>
										<li><a href="programdeadlines.php">Program Deadlines</a></li>
										<li><a href="internships.php">Internships</a></li>
										<li><a href="planningamission.php">Planning a Mission?</a></li>
										<li><a href="jobs.php">Job Opportunities</a></li>
										<li><a href="programapplication.php">Program Application</a></li>
										<li><a href="scholarships.php">Scholarships</a></li>
										<li><a href="returnedmissionary.php">Returned Missionaries</a></li>		
						</ul>
					</div>
				</li>
				<li> <a href="">Graduate Students</a>
					<div class="sub">
						<ul class="links">
										<li><a href="grad.php">About</a></li>
										<li><a href="Grad_Handbook_2012.pdf"> Handbook</a></li>
										<li><a href="graduateseminar.php">Seminar Schedule</a></li>
										<li><a href="ADV_Form_8_2011-2012.pdf">Program Deadlines</a></li>
										<li><a href="nationalgradfellowship.php">Fellowships</a></li>
										<li><a href="gradresearch.php">Research</a></li>
										<li><a href="	http://graduatestudies.byu.edu/node/2337?qt-departments_quicktab=3#qt-departments_quicktab">Graduate Courses</a></li>
						</ul>
					</div>
				</li>
				<li> <a href="">Alumni</a>
					<div class="sub">
						<ul class="links">
									<li><a href="donate.php">Donate to the Dept.</a></li>
										<li><a href="alumniperspectives.php">Alumni Perspectives</a></li>
										<li><a href="alumnisociety.php">ChE Alumni Society</a></li>
										<li><a href="boardmembers.php">Board Members</a></li>
										<li><a href="http://www.linkedin.com/groupInvitation?groupID=144032&sharedKey=526F99386D1C">Linked-In Group</a></li>
										<li><a href="alumninews.php">Alumni News</a></li>
										<li><a href="alumnisearch.php">Search for Alumni</a></li>	
					</div>
				</li>
				<!-- <li><a class="single" href="">Direct Menu Link</a></li> -->
			</ul>
		</nav>
	
	</header>
