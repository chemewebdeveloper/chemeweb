﻿<body>
<body>
	<?php
	$pageTitle= "Program Information | Chemical Engineering";
	
	$pageDescription = "";
	
	$pageKeywords = "About The Department, Undergraduate Progam, Graduate Program, Prospective Students, alumni";
	
	$embeddedCSS="<style type="text/css">
@import url("css/custom/trontastic/jquery.ui.all.css");
	#dataTable {padding: 0;margin:0;width:10%;}
	#dataTable_wrapper{width:100%;}
	#dataTable_wrapper th {cursor:pointer} 
	#dataTable_wrapper tr.odd {color:#000000; background-color:#66cc00}
	#dataTable_wrapper tr.odd:hover {color:#ffffff; background-color:#00cc66}
	#dataTable_wrapper tr.odd td.sorting_1 {color:#ffffff; background-color:#669900}
	#dataTable_wrapper tr.odd:hover td.sorting_1 {color:#ffffff; background-color:#009966}
	#dataTable_wrapper tr.even {color:#000000; background-color:#66ff00}
	#dataTable_wrapper tr.even:hover, tr.even td.highlighted{color:#eeeeee; background-color:#336600}
	#dataTable_wrapper tr.even td.sorting_1 {color:#cccccc; background-color:#333333}
	#dataTable_wrapper tr.even:hover td.sorting_1 {color:#ffffff; background-color:#336600}
</style>";
		
	
	include 'header.php';
	?>
	
	<script type='text/javascript' src='scripts/jquery-1.6.1.min.js'></script>
<script type='text/javascript' src='scripts/jquery.dataTables.min.js'></script>
<script type='text/javascript' src='scripts/jquery.dataTables.columnFilter.js'></script>
<script type='text/javascript' src='scripts/jquery.dataTables.pagination.js'></script>
<link type='text/css' href='css/demo_table_jui.css' rel='stylesheet'/>
	
	<div id="content" class="wrapper two-sidebars clearfix">
		<div id="breadcrumb">
				<div id="breadcrumb-home"><a href="index.php"><img alt="home" src="template/img/home.png"></a>
					</div>
			› <a href="History.php">About The Department</a> › Program Information</div>
		<h1>Program Information</h1>
		<hr />
		
		
	<div class="sidebar">
	
		<?php include 'departmentsidebar.php';
		?>
		
		<br>
		<h3 class="departmentcolor">Department Mission Statement</h3>
		<p>The Department of Chemical Engineering exists to support the mission of BYU by preparing
		students for:
		</p>
		<br>
		<ul>
		<li>lives of scholarship and continued learning founded upon principles of science, engineering, and mathematics,</li>
		<li>lives of service to family as educated parents, to church as faithful Latter-day Saints, and to community
		as moral, disciplined, practicing engineers and leaders,</li>
		<li>lives of contribution to society and humanity by producing products, processes, and policies that improve the quality of life.</li>
		
	</div>
	<div id="main-content" style="width:620px;">
	<script type="text/javascript">
$(document).ready(function() {
	oTable = $('#dataTable').dataTable({
		"bJQueryUI": true,
		"bScrollCollapse": false,
		"sScrollY": "200px",
		"bAutoWidth": true,
		"bPaginate": true,
		"sPaginationType": "two_button", //full_numbers,two_button
		"bStateSave": true,
		"bInfo": true,
		"bFilter": true,
		"iDisplayLength": 25,
		"bLengthChange": true,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
	});
} );
</script>
<table cellpadding="0" cellspacing="0" border="0" id="dataTable">
	<thead>
		<tr>
			<th>Rendering engine</th>
			<th>Browser</th>
			<th>Platform(s)</th>
			<th>Engine version</th>
			<th>CSS grade</th>

		</tr>
	</thead>
	<tbody>
	<!--Loop start, you could use a repeat region here-->
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 4.0</td>
			<td>Win 95+</td>

			<td>4</td>
			<td>X</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 5.0</td>
			<td>Win 95+</td>

			<td>5</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 5.5</td>
			<td>Win 95+</td>

			<td>5.5</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 6</td>
			<td>Win 98+</td>

			<td>6</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet Explorer 7</td>
			<td>Win XP SP2+</td>

			<td>7</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>AOL browser (AOL desktop)</td>
			<td>Win XP</td>

			<td>6</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Firefox 1.0</td>
			<td>Win 98+ / OSX.2+</td>

			<td>1.7</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Firefox 1.5</td>
			<td>Win 98+ / OSX.2+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Firefox 2.0</td>
			<td>Win 98+ / OSX.2+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Firefox 3.0</td>
			<td>Win 2k+ / OSX.3+</td>

			<td>1.9</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Camino 1.0</td>
			<td>OSX.2+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Camino 1.5</td>
			<td>OSX.3+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Netscape 7.2</td>
			<td>Win 95+ / Mac OS 8.6-9.2</td>

			<td>1.7</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Netscape Browser 8</td>
			<td>Win 98SE+</td>

			<td>1.7</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Netscape Navigator 9</td>
			<td>Win 98+ / OSX.2+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.0</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.1</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1.1</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.2</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1.2</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.3</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1.3</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.4</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1.4</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.5</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1.5</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.6</td>
			<td>Win 95+ / OSX.1+</td>

			<td>1.6</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.7</td>
			<td>Win 98+ / OSX.1+</td>

			<td>1.7</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.8</td>
			<td>Win 98+ / OSX.1+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Seamonkey 1.1</td>
			<td>Win 98+ / OSX.2+</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Epiphany 2.20</td>
			<td>Gnome</td>

			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 1.2</td>
			<td>OSX.3</td>

			<td>125.5</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 1.3</td>
			<td>OSX.3</td>

			<td>312.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 2.0</td>
			<td>OSX.4+</td>

			<td>419.3</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 3.0</td>
			<td>OSX.4+</td>

			<td>522.1</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>OmniWeb 5.5</td>
			<td>OSX.4+</td>

			<td>420</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>iPod Touch / iPhone</td>
			<td>iPod</td>

			<td>420.1</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>S60</td>
			<td>S60</td>

			<td>413</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 7.0</td>
			<td>Win 95+ / OSX.1+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 7.5</td>
			<td>Win 95+ / OSX.2+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 8.0</td>
			<td>Win 95+ / OSX.2+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 8.5</td>
			<td>Win 95+ / OSX.2+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 9.0</td>
			<td>Win 95+ / OSX.3+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 9.2</td>
			<td>Win 88+ / OSX.3+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 9.5</td>
			<td>Win 88+ / OSX.3+</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera for Wii</td>
			<td>Wii</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Nokia N800</td>
			<td>N800</td>

			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Nintendo DS browser</td>
			<td>Nintendo DS</td>

			<td>8.5</td>
			<td>C/A<sup>1</sup></td>
		</tr>
		<tr>
			<td>KHTML</td>
			<td>Konqureror 3.1</td>

			<td>KDE 3.1</td>
			<td>3.1</td>
			<td>C</td>
		</tr>
		<tr>
			<td>KHTML</td>
			<td>Konqureror 3.3</td>

			<td>KDE 3.3</td>
			<td>3.3</td>
			<td>A</td>
		</tr>
		<tr>
			<td>KHTML</td>
			<td>Konqureror 3.5</td>

			<td>KDE 3.5</td>
			<td>3.5</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Tasman</td>
			<td>Internet Explorer 4.5</td>

			<td>Mac OS 8-9</td>
			<td>-</td>
			<td>X</td>
		</tr>
		<tr>
			<td>Tasman</td>
			<td>Internet Explorer 5.1</td>

			<td>Mac OS 7.6-9</td>
			<td>1</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Tasman</td>
			<td>Internet Explorer 5.2</td>

			<td>Mac OS 8-X</td>
			<td>1</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>NetFront 3.1</td>

			<td>Embedded devices</td>
			<td>-</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>NetFront 3.4</td>

			<td>Embedded devices</td>
			<td>-</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>Dillo 0.8</td>

			<td>Embedded devices</td>
			<td>-</td>
			<td>X</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>Links</td>

			<td>Text only</td>
			<td>-</td>
			<td>X</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>Lynx</td>

			<td>Text only</td>
			<td>-</td>
			<td>X</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>IE Mobile</td>

			<td>Windows Mobile 6</td>
			<td>-</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>PSP browser</td>

			<td>PSP</td>
			<td>-</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Other browsers</td>
			<td>All others</td>

			<td>-</td>
			<td>-</td>
			<td>U</td>
		</tr>
		<!--Loop end-->
	</tbody>
</table>
	</div>
	</div>
	
	<?php
	include 'footer.php';
	?>

</body>
</html>