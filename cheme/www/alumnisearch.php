<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<?php

	$pageName = "Search for Alumni";

	$pageTitle =  $pageName . " " . "| Chemical Engineering";

	$pageDescription = "";

	$pageKeywords = "Chemical Engineering, students, experience, leadership";

	$embeddedCSS=
	"<style type='text/css'>
			.text{text-align:center};
        </style>";
	

?>
<title><?php echo $pageTitle; ?></title>
	<meta name="description" content=<?php echo $pageDescription; ?> />
	<meta name="author" content="Your Department Name" />
	<meta name="keywords" content=<?php echo $pageKeywords; ?> >

	<meta name="viewport" content="width=device-width" />

	<!-- Insert plugin stylesheets here -->
	<script type="text/javascript" src="template/js/plugins/highslide/highslide-with-gallery.js"></script>
	<link rel="stylesheet" type="text/css" href="template/css/plugins/highslide/highslide.css" />
		<link rel="stylesheet" href="template/css/plugins/960.css" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="../highslide/highslide-ie6.css" />
	<![endif]-->
	
	<script type="text/javascript">
	hs.graphicsDir = 'images/highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
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
			
			<h1><?php echo $pageName;?></h1>
			<hr />
		
	
	
<div id="main-content" style="width:1030px;">
		
		<p>To reconnect with classmates or to find an alumni at a company of interest, we recommend the <a href="http://alumni.byu.edu">Alumni
		Directory</a> available to all BYU alumni.  You can <br />search by major, name, company, etc.  For security reasons, 
		you will need your BYU Net ID and Password.</p>
		
		<p>To help you connect with your classmates, check out the class pictures below.</p>
	
	<div class="clear" style="height:10px"></div>
	
	<h2>Undergraduate Classes</h2>
		
		<hr />
	<div class="highslide-gallery">
			<div class="grid_2" style="margin-left:35px">
				<a href="/images/Alumni/91.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/91_thumb.png" alt="Highslide JS" title="Class of 1991" />
					<br /><Strong class="text">1991</Strong></a>
					<div class="highslide-caption">
						1990-1991 Seniors<br />
						Row 4:	Per-Erik Johansen, Marshall Fullwood, Stephan Curry, Wayne Fausett, Gary Poulsen, James Lake, Cliff Wagster, Rick Wood<br />
						Row 3:	Frank Bowman, Fred Stone, Mike Painter, Mike Ross, Steve Taylor, Andres Aylaa, Eric Stewart<br />
						Row 2:	Michelle Frei, Julie Woodard, Benka Kerby, Tim Shupe, Michelle Millett, Dale Schmidt, Morris Argyle<br />
						Row 1:	Scott Critchfield, Brian Schuck, Jon Finch, Leon Rogers, Todd Ostergaard, Merril Smith, David Griffin<br />
					</div><br />
			</div>
			<div class="grid_2"> 
				<a href="/images/Alumni/92.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/92_thumb.PNG" alt="Highslide JS" title="Class of 1992" />
					<br /><Strong>1992</Strong></a>
					<div class="highslide-caption">
						1991-1992 Seniors<br />
						Row 4:	Steve Peterson, Mark Reynolds, Dwight Anderson, Darren Bro, Bruce Palmer<br />
						Row 3:	Mike Rytting, Burk Adams, Daryl Huntsman, Kenny Foster, Parvin Youseffi<br />
						Row 2:	Allen Walker, David Anderson, Wade Holbrook, Brad Kerby, Paul Stafford<br />
						Row 1:	Kathleen Steward, Leslie Mayhew, Alan Barton, Chris Jackson, Ken Hall<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/95.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/95_thumb.png" alt="Highslide JS" title="Class of 1995" />
					<br /><Strong>1995</Strong></a>
					<div class="highslide-caption">
						1994-1995 Seniors<br />
						Row 5:	Michael Wehrmister, Scott Keetch, Stephen Gill, Kirt Wilkinson, Brett Abbott, Jason Harris, Alan Lewellan, Aaron Bujnowski, Jesse Hamilton, Robert Murray, Arch Sites<br />
						Row 4:	Ghaleb Husseini, David Banner, John Perry, Stephen Letort, Kent Morris, Keith Fenstermacher, Jason Wong, James Hickenlooper, Matt Stoker, Jason White, Shane Gillett, Chris<br /> Patterburg, Ken Rayl
						Row 3:	Xunhai Xu, Muammar Omar, Jeff Bishop, Michael Hicks, Tom Green, Alex Wright, William Allen, Jason Moore, Jerry Izu, Charles Larsen<br />
						Row 2:	Korrie Bergman, Brenda Anderson, Kelli Jardine, Xiang Wang, Polly Goodson, Tiffany Lund, Pamela Pierce<br />
						Row 1:	Carter Moore, Marshall Davis, James Hedrick, Scoot Cleere<br />
					</div>
		    </div>
		     <div class="grid_2">
				<a href="/images/Alumni/96.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/96_thumb.png" alt="Highslide JS" title="Class of 1996" />
					<br /><Strong>1996</Strong></a>
					<div class="highslide-caption">
						1995-1996 Seniors<br />
						Row 5: Dale Eaton, Maren Tolley, Brian Poe, Karen Adams, Nicole Stewart, Mark Cragun,Jeff Hull, Kevin Bray, Tim Dunn, Jeff Belt, Rachel Newsom, Kelly Jardine<br />
						Row 4:	Dain Black, Joseph Pergler, Dan Graham, Rick Williams, Bill Sackewitz, Matt Taylor, Rob Westover, Vaugn Peterson, Dennis Haag, Kristine Larson, Jason Savoldi<br />
						Row 3: Michael Jeppson, Michael Adams, Michelle Lucas, Jeff Widener, David Webb, James Hedrick, Jason Bolles, Keith Richards, Doug Law<br />
						Row 2:	Angela Jones, Gary Yuen, Paul Alkema, Maria Nemirovskaya, Troy Ness, Kevin Koga, Carter Moore, Lu Zhao, Steven Shumway<br />
						Row 1:	Jamelyn Holladay, Matt Kizerian, Brandon Ekburg, Shawn Bowen, Michael Mills, Victor Chao, Steven Ebert<br />
					</div>
		     </div>
			 <div class="grid_2">
				<a href="/images/Alumni/97.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/97_thumb.png" alt="Highslide JS" title="Class of 1997" />
					<br /><Strong>1997</Strong></a>
					<div class="highslide-caption">
						Seniors 1996-1997<br />
						Row 5:	Erik Erickson, Louis Pope, Brian Marshall, Shayne Eyre, Steve Kartchner, Marcus Covert, Matt Hall Dominic Ginetti, Byron Robertson, Todd Earnest, Robert Larson<br />
						Row 4:	Ryon Frisch, Darwin Rehart, Eric Nielson, David Baker, Kent Palmer, William Athay, Ron Ronco, Adam Call, Todd Paxman, Chris McPhie, Brett Pennington, Matt Mason, Robert West, Matt Reynolds<br />
						Row 3:	Joshua Rhoades, John Pruitt, Travis Roth, Doug Bishop, Norman Fuller, Richard Burton, Travis Sessions, David Hirschi, Rhett Brewer, Jedd Taylor, Brett Knight, Matt Gwilliam, Jason Brown<br />
						Row 2:	Meng Weng, Paul Crozier, Kyle Kinghorn, Cade Walton, Tom Jarman, Orson Thorton, Standford Johnson, Daniel Marshall, Alex Lowe, Carlos Arriscoretta, Mitchell Mason<br />
						Row 1:	Lori Johnson, Eyas Hmouz, Kathy Jenkins, Suzi Taylor, Sherry Nate, Mike Hassey, Gregory Sass, Nikki Rasmussen, Tonya Marshall<br />
					</div>
			</div>
		<div class="clear" style="height:10px"></div>   
			<div class="grid_2" style="margin-left:35px">
			     <a href="/images/Alumni/98.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/98_thumb.png" alt="Highslide JS" title="Class of 1998" />
					<br /><Strong>1998</Strong></a>
					<div class="highslide-caption">
						1997-1998 Seniors<br />
						Row 4:	Mike Sherman, Jon Li, Daniel Call, Jared Shafer, Trent McCausland, Sean Walkenhorst, Michael Busse, Todd Blake, Ben Goodman, John Bujnowski, Sam Hales<br />
						Row 3:	Kendall Green, Rob Larsen, Norman Taylor, Karl Fails, J.J. Hutto, Rod Hendricks, David Markham, Paul Schuck, John Dobbs, Cameron Sneddon<br />
						Row 2:	Terrence Taylor, Sam Fisher, Philip Toone, Adam Stephenson, Paul Harker, Scott Sidwell, Dallan Andrus, Ben Tenney, Frank Willford, Rocher Critchfield, Joel Anderson, Matt Todd, Josh Bobincheck<br />
						Row 1:	George Huber, Travis Faddis, Troy Walker, Jeff Knight, Dustin Cochran, Lyn Bobincheck, Catherin Poulos, Jennis Sadler, Mary Cragun, Rochelle Phillips<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/99.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/99_thumb.png" alt="Highslide JS" title="Class of 1999" />
					<br /><Strong>1999</Strong></a>
					<div class="highslide-caption">
						1998-1999 Seniors<br />
						Row 4:	David Owens, Aaron Opp, Hugh Palmer, Jared Allen, Robert Blocker, Ben Goulding, Dan Sulliven, Aaron Ross, Wayne Timothy, Stuart Graham, Todd Salisbury<br />
						Row 3:	Den Bedell, Stephen Burdick, Mathew Mainord, Dave Anderson, Cary Swapp, Anthony Burell, Doug Fairbanks, Nathan Hamaker, Jared Parker, Curtis Frewin, Scott Neilson, Karl Meredith, John Cowlishaw<br />
						Row 2:	Becky Sawaya, Laurie Halren, Ephriam Washburn, Dan Bennett, Phillip Tweed, Alan Vawdrey, Tom Porritt, Cory Bargeron, Mark Cluff, Ben Brown<br />
						Row 1:	Kimberly Rivard, Tony Romero, Wendy Wise, Colby Winegar, Leonard Pease, Paul Goodman, Mari Goodman, Aaron Weaver<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2000.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2000_thumb.png" alt="Highslide JS" title="Class of 2000" />
					<br /><Strong>2000</Strong></a>
					<div class="highslide-caption">
						1999-2000 Seniors<br />
						Row 5: (Standing)	Kelvin Ning, Elvin Ip, Don Smith, Michael Sherman, Greg Gibby, Michael Waller, Tom Conrad, Jared Mason, Conan Brown, Brian Stephenson<br />
						Row 4:	Josua Wong, Jonathan Cowlishaw, Kameron Otte, Noah Tracy, Nathan Price, John Heiney, Robie Mackay, Jared Nelson, Michael Garrett, Eric Lambert, Brandon Keith, Gessa Rosa<br />
						Row 3:	Aaron Greenhalgh, Reed Hendershot, Lars Henrichsen, Daniel Clayton, Chris Eppich, Jason Holmstrom, Christine Merrell, Cassandra Richardson, Aimee Kincaid, Andrew George<br />
						Row 2:	Ryan Hulse, Tyler Strang, Darin Foote, Dennis Vanausdal, Jonathan Ward, Nancy Vincent, Richard Bridge, Shannon Bridge, Jayson Preece<br />
						Row 1:	Heather Jennings, Jason Stevens, Jared Kropf, Nicole Hatch, Jeremy Rowley, Garth Black, Scott White<br />
						Not Pictured:   Dallen Ashby, Robynn Stoddard, Gordon Wilde, Daniel Wright<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2001.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2001_thumb.png" alt="Highslide JS" title="Class of 2001" />
					<br /><Strong>2001</Strong></a>
					<div class="highslide-caption">
						2000-2001 Seniors<br />
						Row 7: (Standing)	John Marble, Erik Nelson, Brian Hanrahan, Aaron Manning, Mark Spencer, Ben Beckstead, Troy Gardner, Jeff hare, Spencer Cox, Sanjiv Devnani, Bryan Bryner<br />
						Row 6: (Standing)	Trevor Bee, Clayton Patch, Erik Rytting, Ryan Torkl, Jake Wakley, Andrew Stubbs, Paul Thayer, Alex Charmichael, Brian Mott, Brian Harris, David Pratt<br />
						Row 5:	Brian Clegg, Jeff Wilde, Kelly Shaw, Lee Reynolds, Steve Alston, Doug Larson, Marcus Boyer, George Curtis, James Thompson, Tom Knotts, Senkjin Jo<br />
						Row 4:	Dawnett Jex, Abbie Palenske, Gordon Gummow, Jake Mather, Kurt Wooley, Jared Guhle, James Simiskey, Peter Busselburg, Aaron Sagers, Dan Erickson<br />
						Row 3:	Eric Erickson, Satomi Fukuda, Coby Larsen, Jason Howe, Jonathan Harris, Brendan Wright, Joseph Richardson, Peter Madsen<br />
						Row 2:	Mike Hansen, John Hedengren, John Butler, Clint Guymon, Steve Wells, Alma Schurig, Aaron McGavock<br />
						Row 1:	Diana Hassell, Laura Bullock, Amber Morrell<br />
						Not Pictured:   Christopher Warquet<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2002.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2002_thumb.png" alt="Highslide JS" title="Class of 2002" />
					<br /><Strong>2002</Strong></a>
					<div class="highslide-caption">
						2001-2002 Seniors<br />
						Row 8: (Standing)	Josh Day, Chris Riley, Mark Spencer, Paul Larsen, Tim Pollock<br />
						Row 7:(Standing)	Whitni Wright, James Nuttall, John Krogue, Anthony Mecham, Weston Anderson, Steve Towne, David Stephenson, Warren Casbeer, Jeremy Pearson, Brent Crenshaw<br />
						Row 6:	Stephanie Stitt, Eric Hamaker, Dave Moulton, Matt Gross, Ben Severson, Kenneth Crowther<br />
						Row 5:	Peter Law, Jade Borowski, Brian Matthews, Ralph Price, Doug Capson, Jared Seibert, David Porter, Chris Graham<br />
						Row 4:	Jace Zurmley, Spencer Ririe, Talon Jenson, Dong Zeng, Rob Morris, Dan Smyth, Jared Schank<br />
						Row 3:	Matt Tanner, Dan Blood, Tim Miller, Amber Miller, Chris Wickstrom, Min Kim, Jeff Johnston<br />
						Row 2:	Seth Washburn, Nathan Cluff, Ethan Mastny, Kelly Echols, Don Hausen, Lindsey Heller, Heather Hoeh<br />
						Row 1:	Seth Herway, Chrisi White, Luke Hayes, Chuck Carn, Andrew Rodgers, Ryan Spear, Christian Hahn<br />
						Not Pictured:    Christophe Warquet,Dawnette Brower, Peter Busselberg, Andrew Dadson, Thanh Dao, Sanjiv Devnani, Jeff Hare, Seth Herring, Aaron Manning, Aaron McGavock, David Morse, David Reynolds, Joseph Richardson, James Thompson, Ryan Todd, Rob Vincent, Jeff Wilde<br />
					</div>
			</div>
		<div class="clear" style="height:20px"></div>  
			<div class="grid_2" style="margin-left:35px">
				<a href="/images/Alumni/2003.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2003_thumb.png" alt="Highslide JS" title="Class of 2003" />
					<br /><Strong>2003</Strong></a>
					<div class="highslide-caption">
						2002-2003 Seniors<br />
						Row 8: (Standing)	Brian Critchfield, Jennifer Matsumura, Tracy Denison, Michael Anderson, Nathan King, Andrew Ross, Brian Spears, Mike Parini, Skigh Lewis, Kristin Hecht, Allyson White, Steve Smith, David Dunaway, Aaron Olson, Greg Martin<br />
						Row 7:	Josh Engstrom, Gavin George, J.R. Edwards, Darin Palmer, Nathan Orton, David Swindler<br />
						Row 6:	David Morse, Nick Cieslak, Takeshi Yuba, Steve Lahn, Michael Bybee, Clark Miller<br />
						Row 5:	Josephine Chau, Andrea Lundell, Russell Johnson, Jordan Butler, Emilio Llamozas, Steve Hardy, Dave Gonda, Phil Smith, Amanda Bristow<br />
						Row 4:	John Boren, Kevin Bake, Craig Knox, Rob Vincent, Kurt Leavitt, Jeremy Price, Warren Casbeer, Kristina Leavitt, Emily Spencer<br />
						Row 3:	David Fairbanks, Jacob Jones, Seth Herring, Kyle Fiet, Adrienne Lung, Thanh Dao, Ryan Stephens, Ben Hardy, Rebekah Ellsworth<br />
						Row 2:	Maria Hendricks, Harland Pond, Val Robinson, Eric Halpenny, Michael Clark, Paul Brooker, Russell Owens, Craig Peterson, Rich James, Steve Broadbent<br />
						Row 1:	Ameri David, Adam Wehrmeister, Ben Hanson, Brad Damstedt, Robert Marsh, Jarom Webster, Nate Fredin, Daniel Haun, Mark Winters<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2004_new.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2004_thumb.png" alt="Highslide JS" title="Class of 2004" />
					<br /><Strong>2004</Strong></a>
					<div class="highslide-caption">
						2003-2004 Seniors<br />
						Row 4:	Brad Damstedt, Landon Bastow, Jared Templeton, Jim Brooks, Derek Bassett, Terry Schmitt, Bill Cornell, Takeshi Yuba, Reed Asay, Mike Parini, Chris Cioffi, Ben Ohran, Eric Halpenny, Paul Brooker, Randy Lamb, Brad Bundy, Matt Larson<br />
						Row 3:	Evan Barlow, Rhett Finch, Erik Massey, Paul Foster, Clinton Sheffield, Warren Roberts, Shane Gailushas, Danelle Crossman, Nick Stanonis, Aaron Kulbeth, Rubin McDougal, Nick Gunyan, Michael Choi, Matt Hunsaker, Michael Hopper<br />
						Row 2:	Ammon Rasmussen, Kent Wardle, Peter Ferrin, Curtis Johnson, Enjun Yin, Angela Kohler, Jennifer Hill, Tahlia Maddux<br />
						Row 1:	Joshua Hicks, Jason Thomas, Ben Williams, Ryan Johnson, Nick Tsu, Justin Scott, Greg Gardner, Mario Diaz, Dave Griffin, Kevin Casper, Daniel Briggs<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2005.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2005_thumb.png" alt="Highslide JS" title="Class of 2005" />
					<br /><Strong>2005</Strong></a>
					<div class="highslide-caption">
						2004-2005 Seniors<br />
						Row 4:	Greg Gessel, Bryce Johnson, John Mangelson, Reid Mason, John Weber, Robert Fitch, Daris Perkins, Greg Spittle, Judson Wooters, Peter Keyworth<br />
						Row 3:	Eric Oschner, Eddie Bywater, Jonathan Blood, Randy Morris, Nicholas Wyatt, Troy Robinson, Travis Fixmer, Zach Evans, Todd Gunderson, Chad Miner, Gregg Rawlings, Brian Ripa, Dan Weber, Morgan Bradshaw<br />
						Row 2:	Ben Christensen, Kalina Scherbel, Julie Hutchins, Charity Chapin, Dan Spencer, Justin Tullis, Josh Johnston, Brent Pickett, Aaron Henrichsen, John Gregory, Greg Pierce, Steve Bonner, Steve Nicholes<br />
						Row 1:	Clarke Low, Christopher Orton, John Ashton, Matt Memmott, Phillip Cherry, Greg Hatch, Doug Piekkola, Oscar Medina, Sanjeep Karki, Brian Jackson, Travis McDougal, Jacob Bunting, Caleb Wilkes<br />
						Not Pictured:   Chelise Van De Graaff and Brent Poole<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2006.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2006_thumb.png" alt="Highslide JS" title="Class of 2006" />
					<br /><Strong>2006</Strong></a>
					<div class="highslide-caption">
						2005-2006 Seniors
						Row 3: (Back)	Kyle Brunner, Dane Hansen, Reid James, Michael Hawkins, David James, Sharon Bragonje, Joseph Bowen, Clinton Jones, Christopher Broadbent, Russell Burnett, Taylor Harvey, and Chris Higginson
						Row 2:	Allen Lee, James Wirthlin, Lane Knighton, Mark Sandridge, Luke Whipple, Andrew Thiriot, Ben Center, Ty Carlson, Christopher Tracy, Jef Rowley, and Ryan Nielson
						Row 1:	ancy Hibbert, Leslie Pagel, Joanne Tay, Lynlee Richards, Ryan Mullen, Randy Shurtz, Robert Winn, Jimmy Hales, Michael Stone, Matthew Smith, Matthew Svedin, and Matthew Spencer
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2007.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2007_thumb.png" alt="Highslide JS" title="Class of 2007" />
					<br /><Strong>2007</Strong></a>
					<div class="highslide-caption">
						2006-2007 Seniors<br />
						Row 3: (Back)	Luke Warrett, Taylor Reynolds, Daniel Lattin, Eric Teuscher, Ryan Parry, Darin Miller, Derek Muaina, Brandon Burton, Curt Newman, Justin Jones, Chris Johnson, Doug Lewis, Andy Bennett, Sam Bright, Shared Cockroft, Jon Brown, Rick Dalton, Ryan Lowe, Brad Skidmore, Jacob Butler, James Hillier, Alan Hungerford, Stephen Lindsay, Jeremy Brown, James Lattin, Adam Broderick, Brian Olson, Bobby Chan<br />
						Row 2:	James Kendall, Jared Krogue, McKay Hansen, Ryan Rust, Danny Ripa, John Sowa, Chase Anderson, John Burkinshaw, Rich Bradshaw, Laura Otto, Jennie Ong, Travis King<br />
						Row 1: Marc Deru, Sam Cosby, Jon Felt, Jacob Jones, Holly Clayton, Megan Woodhouse, Berlin Kowallis, Kari Cook, Jenna Fletcher, Ashley Doxsteader<br />
					</div>
			</div>
		<div class="clear" style="height:20px"></div>  
			<div class="grid_2" style="margin-left:35px">
				<a href="/images/Alumni/2008.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2008_thumb.png" alt="Highslide JS" title="Class of 2008" />
					<br /><Strong>2008</Strong></a>
					<div class="highslide-caption">
						2007-2008 Seniors<br />
						Standing:	Carl Isackson, Aaron Lewis, Cody Martin, Tim McMullin, Kurt Thompson, Brady Bergener, Robert Laycock, Michael Law, Emerson Fry, Eric Smith, Adam Barrus, Lincoln Sarager, Jake Bammer, Richard Reid, Mike Thayer, Tony Hsiao, Joe Hausen, Cade Beek, Brad Carn, James Van Duker, Robert Lee, Nate Kelly, Brian Nix, Neal Davis, Seth Huyett, Michael McMurtrey, Stan Moore, Mark Fitch, Jonathan Wierseke, Dan Hinckley, Craig Christensen, Devin Averett, Justin Mueller, Yibei Zhao, Charles Bryce<br />
						Sitting:	Scott Taylor, Austin Blake, Joseph Flinders, Jason Bray, Jordan Wilcken, Chelsea Aikema, Sarah Purcell, Carla Hedengren, Emilee Haines, Marvin Hynst, Katherine Shepard, Angela Congote Alonso, Randall Schachterle, Brian Daniels, David Sessions, Erik Hartman<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/2010.JPG" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/2010_thumb.png" alt="Highslide JS" title="Class of 2010" />
					<br /><Strong>2010</Strong></a>
					<div class="highslide-caption">
						2009-2010 Seniors<br />
						Standing: Trent Bezzant, Rick Kesler, Brad Meldrum, Mark Broadbent, John Walser, Denny Frost, Marc Jensen, Daniel Yeates, Christopher Steel, Logan Shumway, Troy Clarke, Tyler Newman, Douglas Parker, Joseph Nichols, Devin Rappleye, Kolbein Kolste, Alex Long, David Armantrout, Tyrel Fitzpatrick<br />
						Nicholas Weaver, Dustin Bunderson, Clinton Robins, Peter Jones, Casey Mock, Keith Freeman, Caleb Miskin, Dallan Prince, Austin Ledingham, Mckay Easton, Adam McMurtrey, Mark Jensen, Michael Smith, Dan Bair, Brian Mangold, Jordan Allred<br />
						Seated:	Sarah Reynolds, Elizabeth Call, Mallory Phillips, Sarah Loftus, James Orgill, Joseph Hoskisson, Samuel Goodrich, Jonathan Smith, Bismarck Odei, Tapesh Joshi, Jacob Williams, Mark Smith, Chris Marlais, Basseem Halla<br />
					</div>
			</div>
		 <div class="clear"></div>
			<p>
			<br />
			<br />
		<div align="left">
			<h2>Graduate Classes</h2>
			<hr />
		</div>
		<div class="clear" style="height:20px"></div>  
			<div class="grid_2" style="margin-left:30px">
				<a href="/images/Alumni/grad92.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad92_thumb.png" alt="Highslide JS" title="Class of 1992" />
					<br /><Strong>1992</Strong></a>
					<div class="highslide-caption">
						1991-1992 Graduate Students<br />
						Third Row:	Lee Smith, Marshal Fullwood, David Clarke, Scott Eliason, Tim Shupe, Galen Richards, Kent McDonald<br />
						Second Row:	Paul Rasband, Darin Anderson, Daniel Reynolds, Dan Weaver, Haibo Yu, John Eng, Richard Cope<br />
						First Row: Erik Johanson, Helga Grimsrud, C.J. Farahmandi, Michael Wardinsky, Steve Kramer, Scott White<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad95.JPG" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad95_thumb.png" alt="Highslide JS" title="Class of 1995" />
					<br /><Strong>1995</Strong></a>
					<div class="highslide-caption">
						1994-1995 Graduate Students<br />
						Fourth Row:	Stephen Gill, Huafeng Wang, Helga Grimsrud, Darrin Anderson, John Nelson<br />
						Third Row:	Hemant Mallampalli, S.P., Peter Slater, Janice West, Neal Adair, Daniel Flores, John Eng<br />
						Second Row:	Michael Wardinsky, Hongjie Xu, Zhen Qian, Feng Guo, Chris Brown<br />
						First Row:	Matthew Watt, Matthew Henrickson, Wei Chen, Alan Walker<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad96.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad96_thumb.png" alt="Highslide JS" title="Class of 1996" />
					<br /><Strong>1996</Strong></a>
					<div class="highslide-caption">
						1995-1996 Graduate Students<br />
						Fifth Row:	Huafeng (David) Wang, Neal Adair, Janice West, Peter Slater, John Eng, Scott Felt<br />
						Fourth Row:	Craig Harmon, John Perry, Robert Murray, Chris Brown, Darin Anderson, Sivraprasad (S.P.), Yu (David) Zhen<br />
						Third Row:	Matt Henrichson, Greg Kunz, James Hickenlooper, William Allen, Hongjie (Hank) Zu, Qibo Jing<br />
						Second Row:	Korrie Bastian, Aaron Bujnowski, Jinliang Ma, Feng Guo, Jeff Davidson, Matt Watt<br />
						First Row:	Daniel Flores, Hemant Mallampalli, Dominic Genetti (undergrad interloper)<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad97.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad97_thumb.png" alt="Highslide JS" title="Class of 1997" />
					<br /><Strong>1997</Strong></a>
					<div class="highslide-caption">
						1996-1997 Graduate Students<br />
						Fourth Row: Vaughn Peterson, Korrie Bergman, James Hickenlooper, Eric Hambly, Alan Walker, Matt Stoker, Craig Harmon, Bruce Palmer, Scott Felt<br />
						Third Row:	Howard Wilson, Jessee Hamilton, Jeff Davidson, Mike Jeppson, Jamelyn Holladay, Mike Adams, Feng Guo, Bill Allen, Steve Perry, Greg Kunz, Yu (David) Zheng<br />
						Second Row:	Paul Humble, Robert Murray, Neal Adair, Huafeng (Dave) Wang, Haifeng Zhang, Li Zhou, Jainhui Hong<br />
						First Row: Daniel Flores, Rouping Wang, Jeff Widener, Hongjie (Hank) Xu, Qibo Jing, Hemant Mallampalli, Sivprasad (S.P.) Sukavaneshvar<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad98.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad98_thumb.png" alt="Highslide JS" title="Class of 1998" />
					<br /><Strong>1998</Strong></a>
					<div class="highslide-caption">
						1997-1998 Graduate Students<br />
						Fourth Row:	Howard Wilson, Paul Crozier, Tom Jarman, Jeff Widener, Matt Hall<br />
						Third Row: Paul Humble, Daniel Flores, Neal Adair, Scott Felt, Mike Jeppson, Dominic Genetti, Bruce Palmer<br />
						Second Row:	Huafeng Wang, S. P., Peter Slater, Jamelyn Holladay, Steve Perry, Erik Erikson, Eric Hambly<br />
						First Row:	Hongjie Xu, Lori Johnson, Haifeng Zhang, Jianhui Hong, Dingqiang Yang, Li Zhou, Yan Yang<br />
					</div>
			</div>
			<div class="clear" style="height:20px"></div>  
			<div class="grid_2" style="margin-left:30px">
				<a href="/images/Alumni/grad99.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad99_thumb.png" alt="Highslide JS" title="Class of 1999" />
					<br /><Strong>1999</Strong></a>
					<div class="highslide-caption">
						1998-1999 Graduate Students<br />
						Fifth Row:	Carl Stingel, Ghaleb Husseini, Zane Walton, Ben Goodman, Matt Hall<br />
						Fourth Row:	Howard Wilson, Scott Felt, Neal Adair, Tom Jarman, Paul Humble, Craig Harman<br />
						Third Row:	S. P., Karthik Puduppakkam, Steve Perry, Jamelyn Holladay, Ann Drum, John Pruitt<br />
						Second Row:	Hongjie Xu, Qibo Jing, Jian Xu, Daniel Flores, Joseph Pergler, Li Zhou<br />
						First Row:	Dingqiang Yang, Yan Yang, Shiyong Cheng, Min Tan, Lori Johnson<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad2000.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad2000_thumb.png" alt="Highslide JS" title="Class of 2000" />
					<br /><Strong>2000</Strong></a>
					<div class="highslide-caption">
						1999-2000 Graduate Students<br />
						Fourth Row:	Tom Jarman, Daniel Flores, Huabing Wang, Qian Lin, Joseph Pergler<br />
						Third Row:	Ben Goodman, Haifeng Zheng, Paul Crozier, Matt Hall, Shiyong Cheng, Jianhui Hong, Jamie Holladay<br />
						Second Row:	Goerge Huber, John Pruitt, Jared Parker, Paul Goodman, Paul Humble, Steve Perry, Scott Felt<br />
						First Row:	Min Tan, Jian Xu, Alan Vawdrey, Aaron Ross, Ephraim Washburn, Karthik Puduppakkam<br />
						Not in Photo:	Dan Bennett, Ghaleb Husseini, Qibo Jing, Yan Yang, Mitch Mason, Karl Meredith, Carl Stingel<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad2006.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad2006_thumb.png" alt="Highslide JS" title="Class of 2006" />
					<br /><Strong>2006</Strong></a>
					<div class="highslide-caption">
						2005-2006 Graduate Students<br />
						Row 3:	Vipul Mathur, Ralph Price, Warren Roberts, Paul Foster, Brad Damstedt, Hua Lei, Mario Diaz, Daniel Smyth, Min Kim, Allyson White, Greg Gessel<br />
						Row 2:	Indrajeet Thorat, Sonal Patel, Xiaoyu Guo, Hong Lu, Brent Pickett, Shrinivas Lokare, Tim Miller, Matthew Tanner, Jason Thomas, Aaron Nackos, Chelise VanDeGraaff, David Stephenson, Abhishek Asthana, Bing Lu<br />
						Row 1:	Yin Zhang, Matthew Gross, Shuangzhen Wang, Peng Hu, Weiguo Ai, Uchenna Paul<br />
						Not Pictured: Skigh Lewis, Michael Clark, Nathan King, Craig Peterson<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad2009.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad2009_thumb.png" alt="Highslide JS" title="Class of 2009" />
					<br /><Strong>2009</Strong></a>
					<div class="highslide-caption">
						2008-2009 Graduate Students<br />
						Fourth Row:	TBD<br />
						Third Row:	TBD<br />
						Second Row:	TBD<br />
						First Row:	TBD<br />
						Not in Photo : TBD<br />
					</div>
			</div>
			<div class="grid_2">
				<a href="/images/Alumni/grad2010.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="/images/Alumni/grad2010_thumb.png" alt="Highslide JS" title="Class of 2010" />
					<br /><Strong>2010</Strong></a>
					<div class="highslide-caption">
						2009-2010 Graduate Students<br />
						Present:	Kari Cook, Randy Shurtz, Yin Zhang, Marjan Javadi, Elizabeth Monson, Minmin Li, Jianfei Liu, Dane Hansen, Robert Laycock, Stan Moore, Yibei Zhao, Jiangping Liu, Aaron Lewis, Kyle Brunner, Abhishek Asthana, Kyle Nelson, Peng Hu, Jared Brown, Christopher Hoeger, Jonathan Hartley, James Hillier, David James, Deshun Xu, Dan Smyth, David Stephenson<br />
						Not in Photo:	Sonal Patel, Sarah Purcell, Jef Rowley, Terry Schmitt, James Lattin, Shuai Wei, Joe Bell, Joseph Hausen<br />
					</div>
			</div>
			

			


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