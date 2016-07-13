<?php include_once 'header.php'; ?>
<div id="main-content" class="row homecontent">
<div class="container">
<h1>Gallery</h1>

	<!--- <h4>Wristbands</h4> ---> 
	<div class="popup-gallery">
		<div class="col-md-4">
			<a href="assets/images/src/Debossed.png" title="Debossed"><img src="assets/images/src/Debossed.png" class="galleryimg" ></a>
		</div>
		<div class="col-md-4">
			<a href="assets/images/src/Color-Filled.png" title="Color Filled"><img src="assets/images/src/Color-Filled.png" class="galleryimg" ></a>
		</div>
		<div class="col-md-4">
			<a href="assets/images/src/Printed.png" title="Printed"><img src="assets/images/src/Printed.png" class="galleryimg" ></a>
		</div>
			<div class="clearfix"></div>
	</div>
	
</div>
</div>
	<script language="javascript"><!-- 
	$(document).ready(function() {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small></small>';
				}
			}
		});
	});
	// -->
	</script>
<?php include_once 'footer.php'; ?>