
<body>
	<?php
	$pageTitle= "Undergraduate Program | Chemical Engineering";
	
	$pageDescription = "";
	
	$pageKeywords = "About The Department, Undergraduate Progam, Graduate Program, Prospective Students, alumni";
	
	$embeddedCSS="<style type='text/css'>
    
            table, th, td, tr {border: 2px solid #036; border-style:inset;}
            th { background-color:#036; color:white; }
            .blue{background-color:#e0edf9;}
        </style>";
		
	
	include 'header.php';
	?>
	
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			› <a href="undergradprogram.php">Undergraduate Students</a> › Undergraduate Program</div>
		<h1>Undergraduate Program</h1>
		<hr />
		
		
	<div class="sidebar">
	
		<?php include 'undergradsidebar.php';
		?>
		
		<br />
		
	</div>
	<div id="main-content" style="width:620px;">
	<p> A Bachelor of Science in chemical engineering from BYU is a great degree
	 to have to stay competitive in the 21st century for the following reasons:</p>
	<table style="margin-right:auto;margin-left:auto"><br />
		<tr>
			<th colspan="4">Variety of Career Options</th>
		</tr>
		<tr>
			<td>Pharmaceuticals</td><td>Petroleum</td>
		</tr>
		<tr>
			<td class="blue">Biomedical</td><td class="blue">Chemicals</td>
		</tr>
		<tr>
			<td>Biotechnology</td><td>Defense</td>
		</tr>
		<tr>
			<td class="blue">Nanotechnology</td><td class="blue">Textiles</td>
		</tr>
		<tr>
			<td>Petroluem</td><td>Consumer Goods</td>
		</tr>
		<tr>
			<td class="blue">Chemicals</td><td class="blue">Graduate School</td>
		</tr>
		<tr>
			<td>Environment</td><td>Medical/Dental School</td>
		</tr>
		<tr>
			<td class="blue">Semiconductors</td><td class="blue">Law/Business School</td>
		</tr>
		</table><br />
		<table style="margin-left:auto;margin-right:auto">
		<tr>
			<th colspan="4">Broad Training in Fundamental Sciences</th>
		</tr>
		<tr>
			<td class="blue">Chemistry</td><td>Biology</td>
		</tr>
		<tr>
			<td>Physics</td><td class="blue">Math</td>
		</tr>
		</table><br />
		<table style="margin-left:auto;margin-right:auto">
		<tr>
			<th colspan="4">Advanced Training in Fundamental Sciences</th>
		</tr>
		<tr>
			<td>Chemical Reactions</td><td class="blue">Heat/Mass Transport</td>
		</tr>
		<tr>
			<td class="blue">Thermodynamics</td><td>Process Control</td>
		</tr>
	</table>
	<br />
		<table style="margin-left:auto;margin-right:auto">
		<tr>
			<th colspan="4">Problem-Solving Experiences</th>
		</tr>
		<tr>
			<td>Team Learning</td><td class="blue">Active Learning</td>
		</tr>
		<tr>
			<td class="blue">Project-Based Learning</td><td>Hands-on Laboratories</td>
		</tr>
	</table>
	</div>
	</div>
	
	<?php
	include 'footer.php';
	?>

</body>
</html>