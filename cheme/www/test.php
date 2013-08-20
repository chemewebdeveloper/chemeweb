<!-- head  -->

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
<body>
	<?php
	$pageTitle= "Why BYU for Chemical Engineering? | Chemical Engineering";
	
	$pageDescription = "";
	
	$pageKeywords = "About The Department, Undergraduate Progam, Graduate Program, Prospective Students, alumni";
	
	$embeddedCSS="";
		
	
	include 'header.php';
	?>
<!-- /head -->
	
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			› <a href="whatischem.php">Prospective Students</a> › Why BYU for ChemE?</div>
		<h1>Test Page</h1>
		<hr />
		
		
	<div class="sidebar">
	<?php include 'testsidebar.php'?>
		
		
		<br />
		
	</div>
	<div id="main-content" style="width:620px;">
		<br />
      <script type="text/javascript">
// BeginOAWidget_Instance_2827522: #OAWidget

      
			$(window).load(function() {
				$('.flexslider').flexslider({
animation: "fade",
controlsContainer: ".flex-container",		//Selector: Declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.				  
slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
slideshow: true,                //Boolean: Animate slider automatically
slideshowSpeed: 5000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
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
                <li> <img src="images/plugins/flexslider/inacup_samoa.jpg" />
                  <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
                </li>
                <li> <a href="http://flex.madebymufffin.com"><img src="images/plugins/flexslider/inacup_pumpkin.jpg" /></a>
                  <p class="flex-caption">This image is wrapped in a link!</p>
                </li>
                <li> <img src="images/plugins/flexslider/inacup_donut.jpg" /> </li>
                <li> <img src="images/plugins/flexslider/inacup_vanilla.jpg" /> </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
	</div>
	
	<?php
	include 'template/plugins/footerflexslider.php';
	?>

</body>
</html>