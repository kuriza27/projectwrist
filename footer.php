 <footer class="site-footer">
	     <div class="container">

			<div id="footer-link-main">
				<ul class="footer-menu-item menu">
					<li><a href="homepage.php">Home</a></li>
					<li><a href="order.php">Order Now</a></li>
					<li><a href="price.php">Prices</a></li>
					<li><a href="product-printed.php">Products</a></li>
					<li><a href="fonts.php">Wristband Options</a></li>
					<li><a href="gallery.php">Photo Gallery</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
					<li><a href="#">Live Chat</a></li>
					 <div class="clearfix"></div>
				</ul>
			</div>
			<div id="footer-link-secondary">
				<ul id="menu-footer-secondary">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Our Blog</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Return Policy</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Terms and Conditions</a></li>
				</ul>
			</div>
			<div id="footer-text">
				<p>Monday - Sunday | 8am - 10pm CST</p>
				<p>Sale Toll Free 1-333-333-0001</p>
				<p>Customer Service 123-456-7890</p>
			</div>
				<div class="clearfix"></div>

			  <!-- Example row of columns -->
				<div class="site-info">
					<p>Copyright. All Rights Reserved &copy; 2016 Promotional Wristbands</p>
				</div>
				<div class="clearfix"></div>
		</div>
      </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script type="text/javascript" src="assets/docs/spectrum.js"></script>
    <script type='text/javascript' src="assets/docs/toc.js"></script>
	<script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Javascript for wristband previews -->
	<script type="text/javascript" src="assets/js/canvg.js"></script>
	<script type="text/javascript" src="assets/js/stackblur.js"></script>
	<script type="text/javascript" src="assets/js/preview.js"></script>

	<script src="assets/js/main-2.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
	<script>
		jQuery("#slideshow > div:gt(0)").hide();

		setInterval(function() {
		  jQuery('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  7000);
	</script>