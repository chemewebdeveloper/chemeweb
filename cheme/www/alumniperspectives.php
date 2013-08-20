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

	$pageName = "Alumni Perspectives";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
	.slides a:hover{color:white; text-decoration:none;}
	.slides a,h3{color:white;text-decoration:none}
	
	
	
	
	#close a:hover{text-decoration:none}
        </style>";
	

?>
<title><?php echo $pageTitle; ?></title>
	<meta name="description" content=<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> >

	<meta name="viewport" content="width=device-width" />

	<!-- Insert plugin stylesheets here -->
	<link href="template/css/plugins/flexslider/flexslider.css" rel="stylesheet" type="text/css">
<link href="template/css/plugins/flexslider/demo.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="template/js/plugins/flexslider/jquery.flexslider-min.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2827522" binding="#OAWidget" />
</oa:widgets>
-->
</script>

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
			| <a href="alumnisociety.php">Alumni & Friends</a> | <?php echo $pageName;?></div>
		
		<h1><?php echo $pageName?></h1>
		
		<hr />

	<div class="sidebar">
		<?php include 'alumnisidebar.php'
		?>
	</div>
		<div id="main-content" style="width:620px;">
	 <script type="text/javascript">
// BeginOAWidget_Instance_2827522: #OAWidget

      
			$(window).load(function() {
				$('.flexslider').flexslider({
animation: "fade",
controlsContainer: ".flex-container",		//Selector: Declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.				  
slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
slideshow: true,                //Boolean: Animate slider automatically
slideshowSpeed: 4000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
animationDuration: 600,         //Integer: Set the speed of animations, in milliseconds
directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
prevText: "Previous",           //String: Set the text for the "previous" directionNav item
nextText: "Next",               //String: Set the text for the "next" directionNav item
pausePlay: false,               //Boolean: Create pause/play dynamic element
pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
playText: 'Play',               //String: Set the text for the "play" pausePlay item
randomize: false,               //Boolean: Randomize slide order
slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering     
manualControls: "",             //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
end: function(){}               //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)

			  });
			});
		

// EndOAWidget_Instance_2827522
        </script>
        <div id="container">
       
          <!--=============================
		Markup for FADE animation
		=================================-->
          <div class="flex-container">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="#xiaoyuguo"><img src="images/Alumni/guo.jpg" /><p class="flex-caption"> "[My BYU education] prepared me with the proper attitude to help me get through different situations both at work and in life."<br />-Xiaoyu Guo </a></li>
				<li><a href="#ghalebhusseini"><img src="images/Alumni/husseini.jpg" /></a></li>
                <li><a href="#skighlewis"><img src="images/Alumni/lewis.jpg" /><p class="flex-caption">"Graduates of BYU are known for their work ethic and integrity and companies recognize these skills in new engineers."<br />-Skigh Lewis</a>
                
                </li>
				<li><a href="#indrajeetthorat"><img src="images/Alumni/thorat.jpg" /> </li></a>
                <li><a href="#allysonfrankman"><img src="images/Alumni/frankman.jpg" /></a>
                  <p class="flex-caption">"My education has enriched my life, and it will enrich the life of the children I raise as well." <br /> -Allyson Frankman</p>
                </li>
			  </ul>
            </div>
          </div>
        </div><br />
			<p>Here you will find the feelings of past students who have studied Chemical Engineering at BYU. We have contacted them and asked them a few questions:</p>
			<ul>
				<li>Current Ocupation</li>
				<li>Reason for Choosing BYU</li>
				<li>Advantages of a BYU Education</li>
				<li>BYU Education as a Catalyst for Career Success</li>
				<li>BYU Education compared to Other Institutions</li>
				<li>Other Information Potentially Helpfull to Prospective Students</li>
			</ul>
			<p>Click the picture above to navigate directly to the displayed person.</p>
			
		<br /><br />
		<div>
			<a name="skighlewis"><img src="images/Alumni/lewis_small.jpg" /></a>
			<p><strong>Skigh Lewis</strong>
			<br />Gas Turbine Engineering at General Electric
				</p>
			<h4>Current Ocupation</h4>
				<p>I currently work for General Electric in Greenville, South Carolina in the gas
				turbine research facility. I support some of the larger frame gas turbines (250
				-280 MW) that GE offers. My major role is development and optimization of combu
				stor performance, focusing primarily on emissions, heat transfer, and combusto
				r stability.</p>	
			<h4>Reason for Choosing BYU</h4>
				<p>I did my undergraduate work at BYU and started working as a research assis
				tant in combustion my junior year. I began working on the project that ultima
				tely became the foundation of my graduate work and really enjoyed it. For thi
				s reason and because BYU has a very competitive combustion program and excell
				ent faculty, I decided to continue my education at BYU.</p>
			<h4>Advantages of a BYU Education</h4>
				<p>The access to the faculty was one of the greatest benefits of my gradua
				te work. I had the opportunity to work with several faculty members very c
				losely in the classroom and in laboratory environments. It was a unique an
				d very rewarding opportunity to learn from faculty who are truly experts i
				n their field.</p>
			<h4>BYU Education as a Catalyst for Career Success</h4>
				<p>I notice a difference in my ability to approach problems effectively v
				ersus those who have not had a graduate education. The opportunity to wor
				k hands-on on very unique problems during my research at BYU has helped m
				e be a more effective engineer in my current role.</p>
			<h4>BYU Education compared to Other Institutions</h4>
				<p>The education at BYU is well rounded. After my education at B
				YU, I find myself to be very competitive compared to my colleagues
				who graduated from the other universities.</p>
			<h4>Other Information Potentially Helpfull to Prospective Students</h4>
				<p>BYU is a well-known and respected school. Graduates of BYU are 
				known for their work ethic and integrity and companies recognize these skills in new engineers.</p>
				
		</div><br /><br />
		<div>
			<a name="indrajeetthorat"><img src="images/Alumni/thorat_normal.jpg" /></a>
			<p><strong>Indrajeet Thorat</strong>
			<br />Associate Engineer at ConocoPhillips
				</p>
			<h4>Current Ocupation</h4>
				<p>At present I am working as an engineer at A123, a U.S. developer and manufacturer of lithium-ion batteries.</p>	
			<h4>Reason for Choosing BYU</h4>
				<p>For me, the wide range research areas and the excellent faculty was the
				initial driving force to apply for graduate studies at BYU. In addition, 
				when I inquired about the quality of education at BYU from few internatio
				nal students I received very positive feedback. Furthermore, the chemical 
				engineering provides very good research scholarships, not to mention the l
				ow living cost at BYU compared to other universities in US. All these fact
				ors made me to choose BYU, an excellent decision I made.</p>
			<h4>Advantages of a BYU Education</h4>
				<p>After coming to BYU I found the education in the chemical engineering d
				epartment at BYU has very high standards. BYU provides easy access to well
				-equipped laboratories and computer softwares. The department has excellent
				faculty members and everyone in the department was extremely helpful and friendly.</p>
			<h4>BYU Education as a Catalyst for Career Success</h4>
				<p>During my research at BYU, I gained skills (computational and experimenta
				l) and confidence that are helping me in identifying and solving the real wor
				ld problems. Currently, I am working to improve Li-ion batteries for high ene
				rgy and power density applications which are directly related to electrochemic
				al engineering research at BYU. BYU has competitive research area related to s
				torage and generation of alternative energy.</p>
			<h4>BYU Education compared to Other Institutions</h4>
				<p>The education at BYU is well rounded. After my education at BYU, I find myself
				to be very competitive compared to my colleagues who graduated from the other
				universities.</p>
			<h4>Other Information Potentially Helpfull to Prospective Students</h4>
				<p>BYU is a well-known and respected school. Graduates of BYU are known for their work ethic and integrity and companies recognize these skills in new engineers.</p>
				
		</div><br /><br />
				
		<div>
			<a name="allysonfrankman"><img src="images/Alumni/frank_small.jpg" /></a>
			<p><strong>Allyson Frankman</strong>
			<br />Former Business Consultant at Bain & Co., Full-time Mother
			<br />Current Ocupation: I am a Mother.
			</p>
			<h4>Reason for Choosing BYU</h4>
				<p>I spent four years at BYU as an undergraduate in Chemical Engineering and enjoyed my 
				experience immensely. I graduated in April of 2003 and embarked on life in the "real world"
				by accepting a job with Bain & Company, a strategy and management consulting firm, in Dallas,
				Texas. In an intense learning environment of international travel, extensive research, deep
				analysis, and vital client presentations, I was stretched to the limit, and discovered I 
				could go beyond. I learned significant lessons and skills in my two years working at Bain,
				however through it all I was left with a very empty feeling, testifying to me of the limited
				joy that financial rewards can bring. Perhaps my feelings could be summed up by comedian Lily
				Tomlin who remarked, "You can win the rat race, but you're still a rat.'
				I desired to do more with my life and my skills; I desired to make a meaningful difference. 
				I believe that we are in this world to change things that are hurtful, create new ways that 
				people can succeed, and discover old truths. This brought me full circle back to where I began 
				my university education. I had a deep respect for each of the professors at BYU who were dedicated
				not only to engineering, but to improving the world. Through their stalwart examples, I had tasted 
				the deeper possibilities of true vision effecting change, and I wanted to be a part of that. That is
				why I chose BYU as the place where I wanted to attend graduate school.</p>
			<h4>Advantages of a BYU Education</h4>
				<p>I enjoyed the opportunity to research topics which were socially-relevant and through which I 
				felt I could make a difference in the world. My main research dealt with alternative fuels. There
				is an ever pressing need to find replacement fuels for petroleum for political, environmental and
				economical reasons. One alternative to petroleum is using renewable energy resources such as 
				biomass (grasses, woods, agricultural residues, etc.). Biomass is renewable, greenhouse gas 
				friendly and relieves some reliance on foreign countries for fuel. My research was with a strain
				of acetogenic bacteria that have the ability to convert syngas (from the gasification of biomass)
				to ethanol, which can then be used as a carbon neutral supplement to liquid fuels.
				In addition, I co-founded a chapter of Engineers without Borders (now known as EID - Engineers for International 
				Development) at BYU beginning in October 2006. The purpose of EID is to raise awareness of engineer's role in solving 
				global poverty and sustainability issues to develop a generation of more globally responsible engineers with the ability 
				to impact the quality of life around the world. Engineering is increasingly becoming an international discipline.
				Being an engineer of tomorrow's world will require students to understand and work with different cultures, peoples,
				practices, ethics and paradigms. As well as having successful careers, I wanted to help engineering undergraduates
				to graduate feeling empowered with the knowledge of how they can apply their expertise to solve both technical and
				social problems in the world around them, such as energy resources, clean water, vaccinations, etc.
				I worked with several professors in the department and college. I was amazed, and grateful, for the support that this idea received.
				I was given the opportunity to help Dr. Wilding and Dr. Lewis with the design and implementation of a new 3-credit hour class 
				that counted as a technical elective credit for undergraduate students. This class revolved around designing a
				nd implementing an engineering solution to a local issue in an impoverished community. That year the project 
				involved developing bio-diesel from coconut oil in the island community of Tonga. Students had to look at
				technical, social, and economic issues in order to create a sustainable project. The opportunity to mentor
				students in this class, was not only satisfying to me from an international development standpoint, but gave
				me a unique opportunity to learn first hand lessons about how to design a class, evaluate student performance, plan
				lectures, etc.</p>
			<h4>BYU Education as a Catalyst for Career Success</h4>
				<p>Although I am not designing an oil refinery, the skills of critical thinking and problem 
				solving that I developed in my graduate work in Chemical Engineering are eternally engrained 
				in me. My education has taught me to view the world differently. I have learned how to look a
				t a seemingly impossible problem, break it into solvable pieces and solve it. I have seen how
				effective communication is required in order to realize change. I have learned the value of 
				all viewpoints to understand a situation completely. I have learned the necessity for teamw
				ork, as everyone brings different strengths to the table. The skills learned in graduate sc
				hool have a much broader application than in the traditional workplace; they are applicable in every situation I have found myself in since graduating.</p>
				<p>Pearl S. Buck said, "Men never recover from the ignorance of their mothers." My educatio
				n has enriched my life, and it will enrich the life of the children I raise as well.</p>
			<h4>BYU Education compared to Other Institutions</h4>
				<p>I think the quality of education can be summed up by Joseph F. Smith when he stated, 
				"Knowledge of truth, combined with proper regard for it, and its faithful observance, co
				nstitutes true education. The mere stuffing of the mind with a knowledge of facts is not
				education. The mind must not only possess a knowledge of truth, but the soul must revere
				it, cherish it, love it as a priceless gem."
				The education that I received at BYU was indeed a "true education". My professors at BYU tau
				ght me to love knowledge as a priceless gem, to push the boundaries of current knowledge, 
				but to do so ethically. I cherish and revere the knowledge that I gained at BYU. My BYU e
				ducation was much more than facts and numbers, equations and derivations. I learned more 
				about the world, why things work the way they do and how can we can make them better. I lear
				ned more about myself, who I am and who I want to become. I learned more about God, who He 
				is and why I want to be more like Him.</p>
			</div><br /><br />
			<div>
			
		<a name="xiaoyuguo"><img src="images/Alumni/guo_small.jpg" /></a>
			<p><strong>Xiaoyu Guo</strong>
			<br />Research Engineer at the Babcock & Wilcox Research Center
			</p>
			<h4>Current Ocupation: I am a Mother.</h4>
				<p>I am a research engineer at Babcock & Wilcox Research Center, 
				with focus on environmental control of flue gas emissions from sta
				tionary combustion sources through catalysis. Emissions from stationary 
				power plants, including NOx, N2O, SOx, CO2, CO, Hg, trace metals, etc pose significant 
				threats to the planet earth environment and human health. The EPA has issued and is updating
				regulations of pollutant emissions, as a member of catalysis team, we are striving to
				provide innovative and cutting-edge technologies to mitigate these emissions. Our goal 
				is to improve existing and develop new catalysts and catalysis processes for NOx, N2O, 
				SOx removal, CO2 capture, oxidizing elemental Hg to oxidized Hg, and capture trace met
				als before release to the atmosphere. Research activities involve bench, pilot, and in
				dustrial scale testing.</p>
			
			<h4>Reason for Choosing BYU</h4>
				<p>My field is catalysis, in my previous research in China I read one of Dr. Bartholome
				w's papers which greatly assisted my research then. I was very impressed with Dr. Bart
				holomew's research methodology and approach, which become one motivation for me to cho
				ose BYU. Also, I like variety, BYU provides a good mix of different opportunities in a
				ddition to academe excellence. Before I joined BYU, I attended BYU Ballroom dance tour
				at Beijing and had face to face conversations with performers; they are very warm-heart
				ed and encouraged me more to choose BYU. Another important aspect is that BYU appeared a
				s the best choice among couple offers I received in terms of both research and lift styl
				e, when I heard there won't be drinking and smoking problems, both my parents and myself
				felt assured.</p>
			<h4>Advantages of a BYU Education</h4>
				<p>a. Clean. People don't drink and smoke, there are no slurs, and you can always e
				xpect to see uplifting faces on almost every corner on campus.
			b. Friendly. You find people are more open and accepting to people and cultures that are different than themselves, always can expect help from classmates and roommates.
			c. Honest and diligent. No cheating during the test, homework, research, etc, and people work hard to be better.
			d. Fun. People are truly creative to be fun without relying on alcohol.
			e. Resources for personal improvement available and affordable. I had interests in other field othe
			r than catalysis, and I was able to take or audit classes other than my major. The tuition is very cheap compare to other universities.
			f. Recreational surroundings. One can find a lot different things to do for recreation: hiking, camping, skiing, biking, one of the best place for outdoor activities.
			g. I progressed not only academically but also personally when I was at BYU. I learned a lot.</p>
			<h4>BYU Education as a Catalyst for Career Success</h4>
				<p>My education in chemical engineering department at BYU not only provided the opportunit
				y to gain academic knowledge and solid research skills, but also prepared me with the prope
				r attitude to help me get through different situations both at work and in life. The three c
				lassic courses: kinetics, transport, and thermodynamics provides a base knowledge that apply
				through my current work, once a while I will go back to class notes and books for references.</p>
			<h4>Other Information Potentially Helpfull to Prospective Students</h4>
				<p>a. Close to campus housing, convenient.
				b. Multiple resources available from student center, international student office, various free consulting services
				c. Health insurance coverage, convenient and affordable.
				d. International food supply available
				e. Close to a lot famous national parks, great place for outdoor activities.</p>
			</div><br /><br />
			<div>
			<a name="ghalebhusseini"><img src="images/Alumni/husseini_small.jpg" /></a>
			<p><strong>Ghaleb Husseini</strong>
			<br />Associate Professor at American University of Sharjah
			</p>
				<p>My name is Ghaleb Husseini and I am an associate professor of Chemical Engineering 
				at the American University of Sharjah in the United Arab Emirates. I started my college
				experience at BYU when I was 16 years old. After I graduated from high School in Jerusa
				lem my parents advised me to apply for admission at BYU. They have heard about the high
				moral standard of the Mormon community and BYU. Four years later, in December 1995, I r
				eceived my BS degree in chemical engineering. I also received my MEM and PhD, from BYU, 
				in 1997 and 2001 respectively. All my siblings have also attended BYU. My eldest sister,
				Shaden, received her BS (1999) and MS (2001) degrees in Social Work. My middle sister, R
				and, received her BS in Public Relation in 2006. Currently, my youngest sister, Majd, is
				a junior majoring in Nutrition at BYU. By the time she graduates, my immediate family wo
				uld have received 7 academic degrees from BYU.</p>
			<p>My experience at BYU has been extremely positive. Since I starte
				d in 1992, almost everyone I met was willing to offer their help and support. I always 
				felt safe, which was a refreshing feeling being from Jerusalem. While my high school fri
				ends, who attended other schools in the US, complained about how unsafe their schools we
				re and about drug and alcohol use, I was able to focus on my studies. My main concern th
				en was surviving the cold snowy winter. By the time I graduate with my BS degree, I coul
				d not imagine a winter without snow (I miss experiencing the four seasons in Utah. In th
				e UAE we have two seasons; a hot season and a very hot season).</p>
			<p>Majoring in chemical engineering was also an enriching experience. Chemical engineering 
				faculty focused on the theoretical background in fluid mechanics, thermodynamics, hea
				t transfer etc..so that we, as graduates, are able to derive any formula using basic 
				principles. To supplement this theoretical background we were introduced to real-life
				open-ended problems in most core courses.</p>
			<p>While chemical engineering professors at BYU value research, their priority is t
				eaching. Their offices are always open to students' questions, and they are contin
				uously striving to improve the way they deliver their course material. I always fel
				t that they tried their best to help me before (while taking their courses) and afte
				r graduating (in finding a job, getting into graduate school etc..). These are the tr
				aits that I try to implement and are responsible for my success in my current job as 
				an associate professor.</p>
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
	
	
	<!-- this is for my flex slider 5/31/2012 -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="template/js/plugins/flexslider/jquery.flexslider-min.js" type="text/javascript"></script>
	

</body>
</html>