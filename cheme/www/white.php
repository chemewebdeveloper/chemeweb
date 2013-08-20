<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Lightbox Gallery : Orange</title>
<script type='text/javascript' src='scripts/jquery.js'></script>
<script type='text/javascript' src='scripts/lightbox.js'></script>
<link type='text/css' href='css/lightbox.css' rel='stylesheet'/>
<link type='text/css' href='css/sample_lightbox_layout.css' rel='stylesheet'/>
<style type="text/css">
.lbGallery { 

			/*gallery container settings*/

			background-color: #336699;

			padding-left: 30px;  

			padding-top: 30px;  

			padding-right: 30px;  

			padding-bottom: 30px;  

			width: 540px;

			height: auto;

			text-align:left;
			

		}

		.lbGallery ul { list-style: none; margin:0;padding:0; }

		.lbGallery ul li { display: inline;margin:0;padding:0; }

		.lbGallery ul li a{text-decoration:none;}

			

		.lbGallery ul li a img {

			/*border color, width and margin for the images*/

			border-color: #ffffff;

			border-left-width: 10px;

			border-top-width: 10px;

			border-right-width: 10px;

			border-bottom-width: 20px;

			margin-left:5px;

			margin-right:5px;

			margin-top:5px;

			margin-bottom:5px:

			}

			

		.lbGallery ul li a:hover img {	

			/*background color on hover*/

			border-color: #C5AF7D;
			border-left-width: 10px;

			border-top-width: 10px;

			border-right-width: 10px;

			border-bottom-width: 20px;

		}

			

		#lightbox-container-image-box {

			border-top: 2px solid #369;

			border-right: 2px solid #369;

			border-bottom: 2px solid #369;

			border-left: 2px solid #369;

			}

			

		#lightbox-container-image-data-box { 

			border-top: 0px;

			border-right: 2px solid #369;

			border-bottom: 2px solid #369;

			border-left: 2px solid #369;

			}
</style>
<?php include 'header.php' ?>
</head>

<body>
<br />
<br />
<div id="gallery" class="lbGallery" style="margin-left:auto;margin-right:auto">

			<ul>

				<li>

					<a href="images/lightboxdemo1.jpg" title=""><img src="images/lightboxdemo_thumb1.jpg" width="72" height="72" alt="Flower" /></a>

				</li>

				<li>

					<a href="images/lightboxdemo2.jpg" title=""><img src="images/lightboxdemo_thumb2.jpg" width="72" height="72" alt="Tree" /></a>

				</li>

				<li>

					<a href="images/lightboxdemo3.jpg" title=""><img src="images/lightboxdemo_thumb3.jpg" width="72" height="72" alt="" /></a>

				</li>

				<li>

					<a href="images/lightboxdemo4.jpg" title=""><img src="images/lightboxdemo_thumb4.jpg" width="72" height="72" alt="" /></a>

				</li>

				<li>

					<a href="images/lightboxdemo5.jpg" title=""><img src="images/lightboxdemo_thumb5.jpg" width="72" height="72" alt="" /></a>

				</li>
				
				

			</ul>

		</div>
<script type="text/javascript">
$(function(){

			$('#gallery a').lightBox({ 

				imageLoading:			'images/lightbox/lightbox-ico-loading.gif',		// (string) Path and the name of the loading icon

				imageBtnPrev:			'images/lightbox/lightbox-btn-prev.gif',			// (string) Path and the name of the prev button image

				imageBtnNext:			'images/lightbox/lightbox-btn-next.gif',			// (string) Path and the name of the next button image

				imageBtnClose:			'images/lightbox/lightbox-btn-close.gif',		// (string) Path and the name of the close btn

				imageBlank:				'images/lightbox/lightbox-blank.gif',			// (string) Path and the name of a blank image (one pixel)

				fixedNavigation:		true,		// (boolean) Boolean that informs if the navigation (next and prev button) will be fixed or not in the interface.

				containerResizeSpeed:	400,			 // Specify the resize duration of container image. These number are miliseconds. 400 is default.

				overlayBgColor: 		"#628cb6",		// (string) Background color to overlay; inform a hexadecimal value like: #RRGGBB. Where RR, GG, and BB are the hexadecimal values for the red, green, and blue values of the color.

				overlayOpacity:			.6,		// (integer) Opacity value to overlay; inform: 0.X. Where X are number from 0 to 9

				txtImage:				'Research Area',				//Default text of image

				txtOf:					'of'

			});

		});
</script>
</body>
</html>